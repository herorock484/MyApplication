<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    protected $api_key;

    public function __construct()
    {
        $this->api_key = env('NEWS_API_KEY');
    }

    public function index()
    {
        $news = $this->fetchNewsData();

        $this->storeToDb($news);

        return view('news', compact('news'));
    }

    /**
     * fetch news from the newsapi.org
     * and return an array of the articles
     */
    private function fetchNewsData()
    {
        $response = Http::get('https://newsapi.org/v2/everything', [
            'q' => 'covid',
            'apiKey' => $this->api_key
        ]);

        return json_decode($response->body(), true)['articles'];
    }


public function storeToDb($news)
{
    foreach($news as $new)  {
        news::create([
            'author'=>$new['author'],
            'title'=>$new['title'],
            'description'=>$new['description'],
            'url'=>$new['url'],
            'urlToImage'=>$new['urlToImage'],
            'publishedAt'=>$new['publishedAt'],
            'content'=>$new['content']


        ]);
    }
}
}
