<?php

namespace App\Models;
use App\Models\Subsectimages;
use App\Models\Sections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsections extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Subsectimages(){
        return $this->hasMany(Subsectimages::class)->orderBy('order', 'asc');
    }
    
    public function Sections(){
        return $this->belongsTo(Sections::class);

    }
}
