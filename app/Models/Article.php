<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;
    //protected $table = 'some_name'; -- no need --

    // for exporting to csv format
    public static function getArticles() {
        $articles = DB::table('articles')->select('title', 'text', 'author', 'published_at')->get();
        return $articles;
    }

}
