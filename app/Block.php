<?php

namespace App;


use App\Etaj;
use App\Building;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'blocks';
    protected $guarded = [''];

    public function buildingBlock()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function etajs()
    {
        return $this->hasMany(Etaj::class);
    }

    public static function count()
    {
        return DB::table('blocks')->count();
    }
}
