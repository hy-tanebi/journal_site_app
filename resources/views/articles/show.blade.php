 <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>論文詳細</title>
  </head>
  <body>
     <h1>論文詳細</h1>
     タイトル：{{ $article->title }}
     <p>{!! nl2br(e($article->body)) !!}</p>
      <button onclick="location.href='/articles'">一覧へ戻る</button>
  </body>
  </html>
