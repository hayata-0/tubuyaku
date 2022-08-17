<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/tweet">
                <p class="text-gray-500 text-4xl">Tubuyaku</p>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('パスワードの確認を行なってください') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('パスワード')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('パスワード確認') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
