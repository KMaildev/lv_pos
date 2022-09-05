<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public function main_categories_table()
    {
        return $this->belongsTo(MainCategory::class, 'main_categorie_id', 'id');
    }
}
