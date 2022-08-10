@component('mail::message')
    # 新しいユーザーが追加されました。
    {{ $toUser->name }}さんこんにちは！
    @component('mail::panel')
        新しく{{ $newUser->name }}さんが参加しました。
    @endcomponent

    @component('mail::button', ['url' => route('tweet.index')])
        みんなのつぶやきを見る
    @endcomponent

@endcomponent