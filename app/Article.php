<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'article';
    protected $fillable = ['conn_type_id', 'user_id', 'article_title', 'article_digest', 'article_cover',
        'article_content', 'article_from', 'article_status'];

}
