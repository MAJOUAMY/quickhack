<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        "categorie",
        "image",
        "quartie",
        "commune",
        "description",
        "localisation",
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
