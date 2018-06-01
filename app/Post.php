<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;


    protected $fillable = [
        'title', 'category_id', 'user_id', 'description', 'is_new', 'is_recommended', 'status', 'status', 'created_at', 'updated_at'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }


}
