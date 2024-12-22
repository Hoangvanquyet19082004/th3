<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Các trường cho phép gán hàng loạt
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'completed',
    ];
}
