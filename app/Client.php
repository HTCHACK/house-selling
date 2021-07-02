<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $guarded = [''];


    public function flat()
    {
        return $this->belongsTo(Flat::class,'flat_id');
    }

}
