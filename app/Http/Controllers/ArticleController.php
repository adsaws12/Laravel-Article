<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        $articles = Article::all();

        return view('article.view', compact('articles'));
    }

    public function createview(){
        return view('article.create');
    }

    public function store(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('articles');
    }  

    public function edit(Article $article){

        return view('article.edit', compact('article'));
    } 

    public function update(Article $article, Request $request){
        $article->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        
        return redirect('articles');
    } 

    public function delete(Article $article){
        $article->where('id', $article->id)->delete();

        return redirect('articles');
    }   

    public function showarticle(Article $article){
        return view('article.article', compact('article'));
    }
}
