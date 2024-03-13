<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rotation extends Model
{
    use HasFactory;
    
    protected $table = 'rotations';
    protected $fillable = ['name'];

    public function steles()
    {
      return $this->hasMany(Stele::class, 'rotation_id', 'id');
    }
}
