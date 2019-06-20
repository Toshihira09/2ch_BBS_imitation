@extends ('layouts.edit')

@section ('title', 'test')

@section ('content', 'thread')

@section ('form')
  <form action='/' method="post">
    {{ csrf_field() }}
    <a>
      内容 <input type="text" name="content">
    </a>
    <input type="submit" value="編集する">
  </form>
@endsection ('form')
