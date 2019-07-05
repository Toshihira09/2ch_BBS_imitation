@extends ('layouts.thread')

@section ('title', $thread->title)

@section ('thread_detail')
  レス数:{{ $response_count }}
  スレッド作成日時:{{ $thread->created_at }}
  スレッド更新日時:{{ $updated_at }}
@endsection

@section ('content', $thread->content)

@section ('response')
   <div>
    <a href="{{ action('TopPageController@index') }}">トップページへ</a>
   </div>
   @forelse ($responses as $responses)
     <ul>
      <li>{{$responses->getData()}}<br><a href="{{ action('ResponseController@showResponseEdit', $responses->id) }}">編集する</a></li>
     </ul>
   @empty
     まだレスは投稿されていません。
   @endforelse
@endsection

@section ('page_link')
  {{ $response_page }}
@endsection
