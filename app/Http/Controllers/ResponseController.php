<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Response;

class ResponseController extends Controller
{
  public function to_response_creation_form(Request $request){
    $thread = Thread::find($request->id);
    return view('response_creation_form.response_creation_form', ['form' => $thread]);
  }

  public function create(Request $request){
    $this->validate($request, Thread::$rules);
    $response = new Response;
    $form = $request->all();
    unset($form['_token']);
    $response->fill($form)->save();
    return redirect('/thread_page');
  }
    //
}
