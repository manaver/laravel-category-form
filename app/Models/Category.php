<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'category_id'
    ];


    public function childrens()
    {
        return $this->hasMany(Category::class, 'category_id', 'id');
    }
}
