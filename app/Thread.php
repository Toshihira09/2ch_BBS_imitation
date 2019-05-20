<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
     'title' => 'required',
     'responses_number' => 'integer'
   );

  public function getData()
  {
    return $this-> title . ': ' . $this-> responses_number . ': ' . $this-> created_at . ': ' . $this -> last_responses_date;
  }
}
