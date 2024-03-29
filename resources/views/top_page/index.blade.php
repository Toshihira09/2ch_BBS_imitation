<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="css/top_page/style.css">
  <title>掲示板トップページ</title>
</head>
<body>
  <h1>〜タイトル〜</h1>
  <h2>スレッド一覧</h2>
   <div id="thread_list">
    @forelse ($threads as $thread)
      <div>
        <a href="{{ action('ThreadController@thread', $thread->id) }}">{{$thread->getData()}}</a>
        <a href="{{ action('ThreadController@showThreadEdit', $thread->id) }}">編集する</a>
      </div>
    @empty
      まだスレッドはありません
    @endforelse
  </div>
  <div>
    {{ $threads->links() }}
  </div>
  <a href="{{ action('TopPageController@newThreadCreation') }}">スレッド新規作成</a>
</html>
