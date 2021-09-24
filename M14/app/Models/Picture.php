<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Shop;
use phpDocumentor\Reflection\Types\Nullable;

class Picture extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'value',
        'author',
        'shop_id'
    ];

    protected $nullable = [
        'image'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }    
}
