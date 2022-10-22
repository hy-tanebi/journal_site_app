 <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>論文詳細</title>
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
     <h1>論文詳細</h1>
    @foreach($articles as $article)
    <li><a href="/articles/{{ $article -> id }}">{{ $article -> title }}</a></li>
    @endforeach
    <button class="btn" onclick="location.href='/articles/create'">新規論文投稿</button>
  </body>
  </html>
