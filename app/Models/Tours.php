<?php

namespace App\Models;

use App\Models\Regency;
use App\Models\Category;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tours extends Model
{
    use HasFactory;

    protected $fillable = [
        'regency_id',
        'province_id',
        'category_id',
        'name',
        'img_thumbnail',
        'description',
        'longitude',
        'latitude',
        'address',
        'office_hours'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }
}
