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
    $_created_at = $this-> created_at;
    $_updated_at = $this-> updated_at;
    if ($_created_at == $_updated_at){
      return $this-> content . ' 作成日時:' . $_created_at;
    } else {
      return $this-> content . ' 編集日時:' . $_updated_at;
    }
  }
    //
}
