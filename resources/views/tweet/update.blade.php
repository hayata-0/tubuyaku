<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tubuyaku</title>
</head>

<body>
    <h1>つぶやきを編集</h1>
    <div>
        <a href="{{ route('tweet.index') }}">戻る</a>
        <p>投稿</p>
        <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}"method="post">
            @method('PUT')
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-conten" type="text" placeholder="つぶやきを入力">{{ $tweet->content }}</textarea>
            @error('tweet')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">編集する</button>
        </form>
    </div>

</body>

</html>
