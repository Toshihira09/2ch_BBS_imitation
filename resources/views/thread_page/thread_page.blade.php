@extends ('layouts.thread')

@section ('title', $thread->title)

@section ('id', $thread->id)

@section ('content', $thread->content)

@section ('response')
   @forelse ($responses as $responses)
     <ul>
      <li>{{$responses->getData()}}</li>
     </ul>
   @empty
     まだスレは投稿されていません。
   @endforelse
   {{ $response_pages->links() }}
@endsection
