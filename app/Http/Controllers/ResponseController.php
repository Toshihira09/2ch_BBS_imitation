<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ResponseController extends Controller
{
  public function to_response_creation_form(){
    return view('response_creation_form.response_creation_form');
  }
    //
}
