<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softdeletes;

class PostCategory extends Model
{
    use HasFactory , softdeletes;
    protected $fillable=['name','description','slug','image','status','tags'];
}
