<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller {

    protected $message;
    protected $PS;

    public function __construct() {
      $this->message = "WELCOME";
      $this->PS = "To my first page at PHP with laravel";
    }

    public function index () {
      $articles = Article::select(['id','title','descr'])->get();
      return view('welcome')->with(['message' => $this->message,
                                    'PS' => $this->PS,
                                    'articles' => $articles]);
    }

    public function show ($id) {
      $article = Article::select(['id','title','text'])->where('id', $id)->first();
      return view('page')->with(['article' => $article]);
    }

    public function add () {
      return view('add-content');
    }

    public function store (Request $request) {
      $this->validate($request, [

        'title' => 'required|max:100',
        'descr' => 'required|max:255',
        'text' => 'required'

      ]);

      $data = $request->all();

      $article = new Article;
      $article->fill($data);

      $article->save();

      return redirect('/');

    }
}
