<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageIngredients extends Model
{
    use HasFactory;

    public function ingredients_table()
    {
        return $this->belongsTo(Ingredients::class, 'ingredient_id', 'id');
    }
}
