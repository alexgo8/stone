<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

  protected $table = 'tags';
  protected $fillable = ['name'];

  public function stones()
  {
    return $this->belongsToMany(Stele::class, 'stone_tag', 'tag_id', 'stele_id');
  }
}
