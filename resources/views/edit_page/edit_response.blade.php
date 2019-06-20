@extends ('layouts.edit')

@section ('title', 'レス編集画面')

@section ('content')
  <div>変更内容: {{ $response->content }}</div>
@endsection

@section ('form')
  <form action='/' method="post">
    {{ csrf_field() }}
    <a>
      変更する内容: <input type="text" name="content">
    </a>
    <input type="submit" value="編集する">
  </form>
@endsection
