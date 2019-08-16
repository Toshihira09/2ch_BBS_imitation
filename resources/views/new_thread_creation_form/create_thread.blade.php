@extends ('layouts.create')

@section ('title', 'スレッド作成画面')

@section ('form')
  {{Form::open(['action' => ['ThreadController@create']])}}
  {{ csrf_field() }}
  <div>
    {{ Form::label('title', 'スレッドタイトル: ') }}{{Form::text('title')}}
  </div>
  <div>
    {{ Form::label('title', '内容: ') }}{{Form::text('content')}}
  </div>
  {{Form::submit('投稿する')}}
@endsection
