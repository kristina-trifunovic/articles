<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Exports\ArticleExport;
use Maatwebsite\Excel\Facades\Excel;


class ArticleController extends Controller
{
    public function index() {
        //$articles = Article::latest()->get();   
        $articles = Article::all();      
    
        return view('articles', [
          'articles' => $articles,
        ]);
      }

    public function create() {
        return view('create');
    }

    public function store() {
      $article = new Article();

      $article->title = request('title');
      $article->text = request('text');
      $article->author = request('author');
      $article->published_at = request('published_at');
      $article->save();

      return redirect('/articles');
    }

    public function exportToCSV() {
      return Excel::download(new ArticleExport, 'articles.csv');
    }
}
