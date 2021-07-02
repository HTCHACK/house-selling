<?php

namespace App;

use App\Block;
use App\Flat;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'buildings';
    protected $guarded = [''];

    public function blocks()
    {
        return $this->hasMany(Block::class);
    }

    

}
