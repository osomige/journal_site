<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>タイトル：{{ $article->title }}</p>
<p>{{ $article->body }}</p>
{{-- <a href="/articles/{{ $article->id}}/edit"> <input type="submit" value="編集する"></a> --}}
<a href="/articles/{{ $article->id}}/edit"> <input type="submit" value="編集する"></a>
<form action="/articles/{{ $article->id }}" method="post">
@csrf
@method('DELETE')
<input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
</body>
</html>