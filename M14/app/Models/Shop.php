<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Picture;

class Shop extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'location',
        'capacity',
    ];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
