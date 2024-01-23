<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

  protected $table = 'categories';
  protected $fillable = ['titel'];

  public function stones()
  {
    return $this->hasMany(Stone::class, 'category_id', 'id');
  }
}
