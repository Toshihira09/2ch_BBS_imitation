@extends ('layouts.edit')

@section ('title', 'スレッド編集画面')

@section ('content')
  <div>元タイトル: {{ $thread->title }}</div>
  <div>元内容: {{ $thread->content }}</div>
@endsection

@section ('form')
  <form action='/edit_thread/{{ $thread->id }}' method="post">
    {{ csrf_field() }}
    <a>
      変更するタイトル: <input type="text" name="title">
    </a></br>
    <a>
      変更する内容: <input type="text" name="content">
    </a></br>
    <input type="submit" value="編集する">
  </form>
@endsection
