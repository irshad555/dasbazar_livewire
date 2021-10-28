<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';
      protected $fillable = [
        'name', 'frontend_type',
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function values()
    {
    return $this->hasMany(AttributeValue::class);
    }
}
