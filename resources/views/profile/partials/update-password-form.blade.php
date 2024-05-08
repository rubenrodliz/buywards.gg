<section class="w-full text-text_light">
    <header>
        <h2 class="text-lg font-bold">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-md">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full focus:border-primary block mt-1 w-full placeholder-text_light placeholder:text-sm md:placeholder:text-[1rem] border-primary bg-bg_dark border-1 focus:ring-primary" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full focus:border-primary block mt-1 w-full placeholder-text_light placeholder:text-sm md:placeholder:text-[1rem] border-primary bg-bg_dark border-1 focus:ring-primary" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full focus:border-primary block mt-1 w-full placeholder-text_light placeholder:text-sm md:placeholder:text-[1rem] border-primary bg-bg_dark border-1 focus:ring-primary" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4 flex-col">
            <x-primary-button class="bg-primary text-text_dark text-sm md:text-lg hover:text-text_light py-2 md:mt-4">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-md text-primary font-bold"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
