<?php

namespace App\Models;
use App\Models\Subsectimages;
use App\Models\Subsections;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsectimages extends Model
{
    use HasFactory;
    protected $guarded = [];
   
    public function subsection()
    {
        return $this->belongsTo(Subsection::class);
    }

}
