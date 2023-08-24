<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class PasswordResetLinkController extends Controller
{
    /**
     * Hiển thị giao diện yêu cầu liên kết đặt lại mật khẩu.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Xử lý yêu cầu liên kết đặt lại mật khẩu.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            // Lấy thông tin người dùng từ địa chỉ email
            $user = User::where('email', $request->email)->first();
            // Tạo token
            $token = app('auth.password.broker')->createToken($user);
            // Tạo URL đặt lại mật khẩu
            $resetPasswordUrl = URL::to(route('password.reset', ['token' => $token, 'email' => $user->email]));

            // Gửi email mẫu tiếng Việt
            \Mail::to($request->email)->send(new ResetPasswordMail($user, $resetPasswordUrl));

            return back()->with('status', __('passwords.reset'));
        }

        // Xử lý trường hợp lỗi
        return back()->withErrors(['email' => __($status)]);
    }
}
