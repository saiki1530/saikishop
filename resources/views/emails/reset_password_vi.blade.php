@component('mail::message')
# Xin chào,

Bạn nhận được email này vì chúng tôi nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.

@component('mail::button', ['url' => $resetPasswordUrl, 'color' => 'blue'])
Đặt lại mật khẩu
@endcomponent
Liên kết đặt lại mật khẩu này sẽ hết hạn sau 60 phút. <br><br>
Nếu bạn không yêu cầu đặt lại mật khẩu, hãy bỏ qua email này.
<br><br>
Trân trọng,<br>
#SaikiDemon
<br>
<hr>
Nếu bạn gặp sự cố khi nhấp vào nút "Đặt lại mật khẩu", hãy sao chép và dán URL bên dưới vào trình duyệt web của bạn:{{ $resetPasswordUrl }}

@endcomponent

