<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableList extends Model
{
    use HasFactory;

    public function floor_lists_table()
    {
        return $this->belongsTo(FloorList::class, 'floor_list_id', 'id');
    }
}
