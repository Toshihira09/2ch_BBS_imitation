<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Thread;
use App\Response;

class ResponseController extends Controller
{
  public function toResponseCreationForm(Request $request){
    $thread = Thread::find($request->id);
    $response = Response::find($request);
    return view('response_creation_form.response_creation_form', ['thread' => $thread]);
  }


  public function create(Request $request){
    $thread = Thread::find($request->id);
    $thread->responses()->create(['content' => $request->get('content')]);
    return redirect()->route('thread.show', ['id' => $request->id]);
  }

  public function showResponseEdit(Request $request) {
    $response = Response::find($request->id);
    return view('edit_page.edit_response', ['response' => $response]);
  }

  public function editResponse(Request $request) {
    $this -> validate($request, Thread::$rules);
  }

    //
}
