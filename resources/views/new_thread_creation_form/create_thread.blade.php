<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="css/new_thread_creation_form/style.css">
  <title>新規スレッド作成</title>
</head>
<body>
  <h1>新規スレッド作成画面</h1>
  <form method="POST">
    {{ csrf_field() }}
    <input type="text" name="title">
    <input type="text" name="content">
    <input type="submit">
  </form>
</body>
</html>
