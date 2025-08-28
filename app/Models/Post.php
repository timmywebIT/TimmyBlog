<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    Use SoftDeletes;

    protected $table = 'posts';

    protected $appends = [];

    protected $guarded = false;

    public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function likes() {
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id') ->withTimestamps();
    }

    public function getTagTitlesAttribute()
    {
        //$this->tags — коллекция тегов.
        //pluck('title') — берём только названия.
        //implode(', ') — объединяем их через запятую.
        //Если тегов нет, выводим '-'
        return $this->tags->pluck('title')->implode(', ');
    }
}
