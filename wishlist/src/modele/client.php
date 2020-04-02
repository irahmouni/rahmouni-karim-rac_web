<?php

namespace mywishlist\modele;

class Client extends \Illuminate\Database\Eloquent\Model{
    protected $table = 'client'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false;

    public function item(){
        $i = item::where('id','=',2)->first();
        $li = $i->hasMany('\mywishlist\model\Liste','id')->get();
    }
}
?>