<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/tweet">
                <p class="text-gray-500 text-4xl">Tubuyaku</p>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('サインアップありがとうございます。ご登録の前に、メールでお送りしたリンクをクリックして、メールアドレスの確認をしていただけますか？もしメールが届いていない場合は、再度お送りします。') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('登録時に入力されたメールアドレスに、新しい認証リンクが送信されました。') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('認証メール再送信') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('ログアウト') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
