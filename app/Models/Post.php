<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 120);
    }

    public function user()
    {
        #Un post pertenece a un usuario
        return $this->belongsTo(User::class);
    }
}
