@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Arcticles</h1>
        </div>
        <div class="ml-auto mt-2 mb-2 mr-2">
            <a href="{{route('article.create')}}" class="btn btn-success">New Article</i></a>
        </div>
        <table class="table table-striped  justify-content-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Article Title</th>
                    <th scope="col">Article Content Snippet</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr> 
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                
                        <td>{{$article->id}}</td>
                        <td><a href="{{route('article.view', $article->id)}}">{{$article->title}}</a></td>
                        <td>{{$article->content}}</td>
                        <td>{{$article->created_at->toDateString()}}/{{$article->created_at->diffForHumans()}}</td>
                        <td class="row">
                            <a href="{{route('article.edit', $article->id)}}" class="btn btn-warning mr-2"><i class="bi bi-pencil-square"></i></a>
                            <form method="POST"action="{{route('article.delete',$article->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
