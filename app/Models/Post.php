<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "beritas";
    protected $fillable = [
        'title', 
        'description', 
        'content', 
        'publish_date'
    ];
}
