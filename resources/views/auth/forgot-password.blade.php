<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/tweet">
                <p class="text-gray-500 text-4xl">Tubuyaku</p>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-center text-gray-600">
            {{ __('パスワード再設定用のリンクをメールに送りますので、登録しているメールアドレスを入力してください。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('メールアドレス')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('パスワード再発行') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
