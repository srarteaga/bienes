<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_seguros3 extends Model
{
    protected $table = 'sel_seguros3';

     public function selectSeguros3()
    {
        return $this->hasOne('App\modeloSeguros', 'poseRes');
    }
}