<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public function scopeActiveEntries($query){
        return $query-> where([
            'status' => 1,
            'is_approved' => 1
        ]);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }
}
