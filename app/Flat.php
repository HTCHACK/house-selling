<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Etaj;


class Flat extends Model
{
    protected $table = 'flats';
    protected $guarded = [''];

    public function etaj()
    {
        return $this->belongsTo(Etaj::class,'etaj_id');
    }

   
}
