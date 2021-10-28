<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerSetting extends Model
{
    use HasFactory;
    protected $primaryKey = 'seller_id';
    protected $fillable = [
        'seller_id',
        'firmtype_id',
        'legal_name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function firmType()
    {
        return $this->belongsTo(FirmType::class, 'firmtype_id');
    }
}
