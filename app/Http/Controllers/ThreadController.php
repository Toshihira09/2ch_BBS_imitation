<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use App\Response;

class ThreadController extends Controller
{
  public function create(Request $request)
  {
    $this->validate($request, Thread::$rules);
    $thread = new Thread;
    $form = $request->all();
    unset($form['_token']);
    $thread->fill($form)->save();
    return redirect('/top_page');
  }

  public function thread(Request $request) {
    $thread = Thread::find($request->id);
    $responses = Thread::find($request->id)->responses;
    $response_count = Thread::find($request->id)->responses->count();
    $updated_at = Response::where('Thread_id', $request->id)->pluck('updated_at')->last();
    return view('thread_page.thread_page', [ 'responses' => $responses, 'thread' => $thread, 'response_count' => $response_count, 'updated_at' => $updated_at]);
  }

}

