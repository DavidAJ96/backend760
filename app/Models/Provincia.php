<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ="provincia";
    protected $fillable =[
        'provincia'
    ];
}
