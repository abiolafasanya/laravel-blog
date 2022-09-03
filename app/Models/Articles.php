<?php

namespace App\Models;

use PhpParser\Node\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articles extends Model
{
    use HasFactory;
    protected  $fillable = ['title', 'body', 'image', 'user_id', 'category_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
