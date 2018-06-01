<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'title', 'category_id', 'user_id', 'description', 'is_new', 'is_recommended', 'status', 'created_at', 'updated_at'
    ];

}
