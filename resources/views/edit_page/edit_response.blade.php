@extends ('layouts.edit')

@section ('title', 'レス編集画面')

@section ('content')
  <div>変更内容: {{ $response->content }}</div>
@endsection

@section ('form')
    {{Form::model($response)}}
    {{Form::open(['action' => ['ResponseController@editResponse',$response->id]])}}
    {{ csrf_field() }}
    <div>
      {{ Form::label('title', '変更する内容: ') }}{{Form::text('content')}}
    </div>
    {{Form::submit('編集する')}}
@endsection
