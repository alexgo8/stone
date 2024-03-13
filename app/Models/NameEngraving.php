<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameEngraving extends Model
{
    use HasFactory;

  protected $table = 'name-engravings';
  protected $fillable = ['material_id', 'size', 'price', 'size_height', 'size_width'];

  public function steles()
  {
    return $this->hasMany(Stele::class, 'installation_id', 'id');
  }
}
