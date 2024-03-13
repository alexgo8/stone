<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

  protected $table = 'materials';
  protected $fillable = ['name'];

  public function steles()
  {
    return $this->hasMany(Stele::class, 'material_id', 'id');
  }

  public function installations()
  {
    return $this->hasMany(Installation::class, 'material_id', 'id');
  }
}
