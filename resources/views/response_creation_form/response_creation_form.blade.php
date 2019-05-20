<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="css/new_thread_creation_form/style.css">
  <title>レス作成</title>
</head>
<body>
  <h1>レス作成画面</h1>
  <form action='/response_creation_form' method="POST">
    {{ csrf_field() }}
    <li>
      内容 <input type="text" name="response">
    </li>
    <input type="submit" value="投稿する">
  </form>
</body>
</html>
