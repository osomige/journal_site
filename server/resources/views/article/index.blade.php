<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>論文一覧</h1>
    <ul>
        @foreach ( $articles as $article)
        <li>
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
        </li>
        @endforeach
    </ul>
    <a href="/articles/create"> <input type="submit" value="新規論文投稿"></a>

    
</body>
</html>
{{-- <li><a href="/articles/{{ $articles[0]->id }}">{{ $articles[0]->name}}</a></li> --}}