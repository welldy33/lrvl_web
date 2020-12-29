<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LayoutBus extends Model
{
    use HasFactory;
    protected $fillable = [
        'model_nm', 'rowmap','colmap','seal'
    ];
}
