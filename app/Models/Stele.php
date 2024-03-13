<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Stele extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'steles';
  protected $fillable = ['size', 'price', 'material_id', 'size_height', 'size_width', 'size_thickness', 'rotation_id', 'installation_id', 'portrait_id', 'name_id'];

  public function materials()
  {
    return $this->belongsTo(Material::class, 'material_id', 'id');
  }

  public function rotations()
  {
    return $this->belongsTo(Rotation::class, 'rotation_id', 'id');
  }

  public function bases()
  {
    return $this->belongsToMany(Base::class, 'stele_base', 'stele_id', 'base_id');
  }
  

  public function installations() 
  {
    return $this->belongsTo(Installation::class, 'installation_id', 'id');
  }

  public function portraits()
  {
    return $this->belongsTo(PortraitEngraving::class, 'portrait_id', 'id');
  }

  public function names()
  {
    return $this->belongsTo(NameEngraving::class, 'name_id', 'id');
  }
}
