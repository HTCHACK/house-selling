<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Block;

class Etaj extends Model
{
    protected $table = 'etajs';
    protected $guarded = [''];

    public function blocks()
    {
        return $this->belongsTo(Block::class,'block_id');
    }

    public function flats()
    {
        return $this->hasMany(Flat::class);
    }
}
