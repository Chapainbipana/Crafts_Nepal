<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image',
        'category_id',
    ];
    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
