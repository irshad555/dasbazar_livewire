<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

   
 protected $fillable = ['name','state_id','country_id','country_code','state_code'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
