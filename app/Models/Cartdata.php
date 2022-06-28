<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartdata extends Model
{
    use HasFactory;
    protected $table="cartdata";
    protected $primaryKey="c_id";
}
