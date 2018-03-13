<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sel_ciudad extends Model
{
    protected $table = 'sel_ciudad';
    protected $fillable = ['codCiudad','ciudad'];

    public static function modifiqueCiudades($id){
         return sel_ciudad::where('parroquia', $id)->get();
     }

     public static function selectCiudad(){
         return sel_ciudad::all();
     }


     public function selectCodCiudad()
    {
        return $this->hasOne('App\modeloS4', 'codCiudad');
    }

    public function modifiqueCiudad()
    {
        return $this->hasOne('App\modeloS4', 'codCiudad');
    }
}