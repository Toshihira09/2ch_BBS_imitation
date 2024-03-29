<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use App\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
    $response_count = Thread::find($request->id)->responses->count();
    $updated_at = Response::where('thread_id', $request->id)->pluck('updated_at')->sort()->last();
    $responses = Response::where('thread_id', $request->id)->paginate(10);
    $response_page = $responses -> links();
    return view('thread_page.thread_page', [ 'responses' => $responses, 'thread' => $thread, 'response_count' => $response_count, 'updated_at' => $updated_at, 'response_page' => $response_page]);
  }

  public function showThreadEdit(Request $request) {
    $thread = Thread::find($request->id);
    return view('edit_page.edit_thread', ['thread' => $thread]);
  }

  public function editThread(Request $request) {
    $this->validate($request, Thread::$rules);
    $thread = Thread::find($request->id);
    $updated_at = $thread->last_responses_date;
    $form = $request->all();
    unset($form['_token']);
    $thread->fill($form)->save();
    return redirect()->route('thread.show', [ 'id' => $thread->id, 'updated_at' => $updated_at ]);
  }

}

