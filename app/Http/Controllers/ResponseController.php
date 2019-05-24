<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Thread;
use App\Response;

class ResponseController extends Controller
{
  public function to_response_creation_form(Request $request){
    $thread = Thread::find($request->id);
    $response = Response::find($request);
    return view('response_creation_form.response_creation_form', ['form' => $thread]);
  }


  public function create(Request $request){
    $this->validate($request, Response::$rules);
    $response = new Response;
    $form = $request->all();
    unset($form['_token']);
    $response->fill($form)->save();
    return redirect('/thread/{id}');
  }
    //
}
