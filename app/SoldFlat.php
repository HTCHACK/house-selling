<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoldFlat extends Model
{
    protected $table = 'sold_flats';
    protected $guarded = [''];


    public function flat()
    {
        return $this->belongsTo(Flat::class,'flat_id');
    }

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
}
