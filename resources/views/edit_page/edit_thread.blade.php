@extends ('layouts.edit')

@section ('title', 'スレッド編集画面')

@section ('content')
  <div>元タイトル: {{ $thread->title }}</div>
  <div>元内容: {{ $thread->content }}</div>
@endsection

@section ('form')
    {{Form::model($thread)}}
    {{Form::open(['action' => ['ThreadController@editThread',$thread->id]])}}
    {{ csrf_field() }}
    <div>
      {{ Form::label('title', '変更するタイトル: ') }}{{Form::text('title')}}
    </div>
    <div>
      {{ Form::label('title', '変更する内容: ') }}{{Form::text('content')}}
    </div>
    {{Form::submit('編集する')}}
@endsection
