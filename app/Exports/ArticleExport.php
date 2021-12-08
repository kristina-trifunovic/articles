<?php

namespace App\Exports;

use App\Models\Article;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ArticleExport implements FromCollection, WithHeadings
{

    public function headings():array {
        return[
            'Title',
            'Text',
            'Author',
            'Published_At'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection() {
        return collect(Article::getArticles());
    }
}
