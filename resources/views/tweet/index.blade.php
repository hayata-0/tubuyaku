{{-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tubuyaku</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
    <h1>TUBUYAKU</h1>
    <!-- 投稿するフォーム -->
    @auth
        <div>
            <p>投稿</p>
            @if (session('feedback.success'))
                <p style="color: cadetblue">{{ session('feedback.success') }}</p>
            @endif
            <form action="{{ route('tweet.create') }}" method="post">
                @csrf
                <label for="tweet-content">つぶやき</label>
                <span>140文字まで</span>
                <textarea name="tweet" id="tweet-conten" type="text" placeholder="つぶやきを入力"></textarea>
                @error('tweet')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
                <button type="submit">投稿する</button>
            </form>
        </div>
    @endauth
    <!-- 一覧表示 -->
    <div>
        @foreach ($tweets as $tweet)
            <details>
                <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
                @if (\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                    <div>
                        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                        <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">削除する</button>
                        </form>
                    </div>
                @else
                    編集できません
                @endif
            </details>
        @endforeach
    </div>
</body>

</html> --}}

<x-layout title="TOP | Tubuyaku">
    <x-layout.single>
        <h2 class=" text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            Tubuyaku
        </h2>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>
