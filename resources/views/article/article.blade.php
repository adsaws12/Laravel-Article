@extends('layouts.app')

@section('content')
<div class="card mx-auto mt-5" style="width: 18rem;">
    <div class="card-body">
      <h1 class="card-title text-center"> Article #{{$article->id}}</h1>  
      <h3>{{$article->title}}</h3>
      <p class="card-text">{{$article->content}}</p>
    </div>
    <a href="{{ route('articles') }}" class="btn btn-secondary mr-2">Back</a>
</div>
@endsection

