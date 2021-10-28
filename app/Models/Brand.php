<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'brands';
    /**
     * @var array
     */
    protected $fillable = ['name', 'slug', 'logo'];
    /**
     * @param $value
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
      return $this->hasMany(Product::class);
    }
}
