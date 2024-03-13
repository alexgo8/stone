<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SteleBase extends Model
{
  use HasFactory;
  protected $table = 'stele_base';
  protected $fillable = ['stele_id', 'base_id'];
}
