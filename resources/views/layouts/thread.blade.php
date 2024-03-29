<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link href="{{ asset('css/thread/style.css') }}" rel="stylesheet" type="text/css" >
  <title>@yield ('title')</title>
</head>
<body>
  <h1>@yield ('title')</h1>
  <h2>@yield('thread_detail')</h2>
    <div id="thread_content">
      @yield ('content')
    </div>
    <div class="response">
      @yield ('response')
    </div>
    <div>
      @yield ('page_link')
    </div>
  <a href="{{ action('ResponseController@toResponseCreationForm', $thread) }}" id="new_create_thread">レスを投稿する</a>
</body>
</html>
