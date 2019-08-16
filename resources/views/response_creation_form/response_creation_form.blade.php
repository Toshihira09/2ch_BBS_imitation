@extends ('layouts.create')

@section ('title', 'レス作成画面')

@section ('form')
  <h2>{{$thread ->id}}</h2>
  {{Form::model($thread)}}
  {{Form::open(['action' => ['ResponseController@create',$thread->id]])}}
  {{ csrf_field() }}
  <div>
    {{ Form::label('title', '内容: ') }}{{Form::text('content')}}
  </div>
  {{Form::submit('投稿する')}}
@endsection
