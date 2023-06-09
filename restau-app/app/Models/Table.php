<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'vip'];

    public function order()
    {
        return $this->belongsToMany(Order::class, 'order_table');
    }
}

