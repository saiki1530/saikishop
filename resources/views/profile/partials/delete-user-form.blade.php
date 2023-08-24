<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>

<section class="space-y-6">
    <header class="delete-account-header">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Xóa tài khoản') }}
        </h2>

        <p class="mt-1 text-sm delete-account-content w-25">
            {{ __('Sau khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của tài khoản đó sẽ bị xóa vĩnh viễn. Trước khi xóa tài khoản của bạn, vui lòng tải xuống bất kỳ dữ liệu hoặc thông tin nào bạn muốn giữ lại.') }}
        </p>
    </header>

    <x-danger-button x-data="" class="delete-account-button"
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Xóa tài khoản') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable class="confirm-user-deletion-modal" >
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 delete-user-form" >
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Bạn có chắc rằng bạn muốn xóa tài khoản của bạn?') }}
            </h2>

            <p class="mt-1 text-sm delete-account-content">
                {{ __('Sau khi tài khoản của bạn bị xóa, tất cả tài nguyên và dữ liệu của tài khoản đó sẽ bị xóa vĩnh viễn. Vui lòng nhập mật khẩu của bạn để xác nhận bạn muốn xóa vĩnh viễn tài khoản của mình.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4 form-input"
                    placeholder="{{ __('Password') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end" >
                <x-secondary-button x-on:click="$dispatch('close')" class="cancel-button">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3 delete-button" >
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>

    </x-modal>

</section>


