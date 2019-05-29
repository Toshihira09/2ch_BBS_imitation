<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  //protected $guarded = array('id');
  protected $fillable = [
    'content'
  ];

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';

  public static $rules = array(
     //'content' => 'required'
   );

  public function threads()
  {
    return $this->belongTo('App\Thread');
  }

  public function getData()
  {
    return 'ID: ' . $this-> id . ': ' . $this-> content . ' 作成日時:' . $this-> created_at;
  }
    //
}
