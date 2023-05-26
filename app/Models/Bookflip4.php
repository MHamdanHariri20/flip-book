<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookflip4 extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'image',
        'text',
        'link'
    ];  
}
