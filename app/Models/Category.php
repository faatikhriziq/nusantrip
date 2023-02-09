<?php

namespace App\Models;

use App\Models\Tours;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function category(){
        return $this->hasMany(Tours::class);
    }
}
