<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['body', 'creation_time', 'like'];

    public function post() {
        return $this -> belongsTo(Post::class);
    }
}
