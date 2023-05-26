<?php

namespace App\Models;
use App\Models\Subsections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function subsections(){
        return $this->hasMany(Subsections::class);
    }
}
