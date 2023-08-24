<x-guest-layout>
    <div class="form-container">
        <b style="font-size:30px; ">QUÊN MẬT KHẨU</b>
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 ">

            <span><br>Quên mật khẩu? Không có gì. Chỉ cần cho chúng tôi biết địa chỉ email của bạn và chúng
                tôi sẽ gửi email cho bạn liên kết đặt lại mật khẩu cho phép bạn chọn một mật khẩu mới.</span>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="row tracking_form" novalidate="novalidate">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email:')" />
                <x-text-input id="email" class="col-md-12 form-group" style=" opacity: .8; border:none "
                    type="email" name="email" :value="old('email')" required placeholder="Nhập tài khoản email..." />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <br>
            </div>


            {{-- <x-primary-button class="col-md-12 form-group">
                {{ __('Đặt lại mật khẩu') }}
            </x-primary-button> --}}

            <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="primary-btn">Đặt lại mật khẩu</button>
            </div>

        </form>
    </div>
</x-guest-layout>
