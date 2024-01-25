<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Stone extends Model
{
    use HasFactory;
    use SoftDeletes;

  protected $table = 'stones';
  protected $fillable = ['titel', 'description', 'category_id'];

  public function category()
  {
    return $this->belongsTo(Category::class, 'category_id', 'id');
  }
}
