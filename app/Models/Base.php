<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Base extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'bases';
  protected $fillable = ['size', 'price', 'material_id', 'size_height', 'size_width', 'size_thickness', 'rotation_id'];

  public function rotations()
  {
    return $this->belongsTo(Rotation::class, 'rotation_id', 'id');
  }

  public function materials()
  {
    return $this->belongsTo(Material::class, 'material_id', 'id');
  }

  public function steles()
  {
    return $this->belongsToMany(Stele::class, 'stele_base', 'base_id', 'stele_id');
  }
}
