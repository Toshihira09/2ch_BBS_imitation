<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="css/top_page/style.css">
  <title>@yield ('title')</title>
</head>
<body>
  <h1>@yield ('title')</h1>
  <h2>@yield('id')</h2>
    <div id="thread_content">
    @yield ('content')
    </div>
    <div class="response">
      @forelse ($responses as $responses)
        <ul>
         <li>{{$responses->getData()}}</li>
        </ul>
      @empty
        まだレスは投稿されていません。
      @endforelse
    </div>
  <a href="{{ action('ResponseController@to_response_creation_form', $thread) }}" id="new_create_thread">レスを投稿する</a>
</body>
</html>
