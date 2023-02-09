<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multisub extends Model
{
    use HasFactory;
    protected $table="multisubs";
    protected $fillable=[
        'category_id',
        'subcategory_id',
    ];
}
