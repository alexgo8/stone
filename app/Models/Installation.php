<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;

    protected $table = 'installations';
    protected $fillable = ['size', 'price', 'material_id', 'size_height', 'size_width'];

    public function material()
    {
      return $this->belongsTo(Material::class, 'material_id', 'id');
    }

    public function steles()
    {
      return $this->hasMany(Stele::class, 'installation_id', 'id');
    }
}
