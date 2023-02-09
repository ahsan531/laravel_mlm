<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generation extends Model
{
    use HasFactory;
    protected $fillable = [
   'mian_id',
   'member_id',
   'gen_type',
   'status',

    ];
}
