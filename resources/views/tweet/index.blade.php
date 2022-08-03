<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tubuyaku</title>
</head>

<body>
    <h1>TUBUYAKU</h1>
    <!-- 投稿するフォーム -->
    <div>
        <p>投稿</p>
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
    <!-- 一覧表示 -->
    <div>
        @foreach ($tweets as $tweet)
            <p>{{ $tweet->content }}</p>
        @endforeach
    </div>
</body>

</html>
