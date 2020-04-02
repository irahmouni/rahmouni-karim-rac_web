<?php

namespace mywishlist\modele;


class  Facture extends \Illuminate\Database\Eloquent\Model{
    protected $table = 'Facture';
    protected $primaryKey = 'id' ;
    public $timestamps = false;

    public function item(){
        $i = item::where('id','=',2)->first();
        $li = $i->hasMany('\mywishlist\model\Liste','id')->get();
    }
}