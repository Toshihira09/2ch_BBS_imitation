<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="css/thread/style.css">
  <title>新規スレッド作成</title>
</head>
<body>
  <h1>新規スレッド作成画面</h1>
  <form action='/new_thread_creation_form' method="post">
    {{ csrf_field() }}
    <li>
      スレッドタイトル <input type="text" name="title">
    </li>
    <li>
      内容 <input type="text" name="content">
    </li>
    <input type="submit" value="投稿する">
  </form>
</body>
</html>
