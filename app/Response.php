<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  protected $guarded = array('id');
  protected $primaryKey = 'id';

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'last_responses_date';

  public static $rules = array(
     'content' => 'required'
   );

  public function getData()
  {
  }
    //
}
