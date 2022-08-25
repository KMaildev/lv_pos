<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    public function categories_table()
    {
        return $this->belongsTo(Category::class, 'categorie_id', 'id');
    }
}
