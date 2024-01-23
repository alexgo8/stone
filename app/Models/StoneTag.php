<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoneTag extends Model
{
    use HasFactory;

  protected $table = 'stone_tag';
  protected $fillable = ['stone_id', 'tag_id'];
}
