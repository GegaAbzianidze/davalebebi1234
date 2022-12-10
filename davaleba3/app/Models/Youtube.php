<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    use HasFactory;
    protected $table = 'Youtube';
    protected $fillables = ['Title', 'Views', 'Link'];
}
