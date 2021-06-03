@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card w-50 mx-auto">
            <div class="m-3">
                <form class="form-group" action="{{route('article.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <h5 class="text-uppercase">Create Article</h5>
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                    <label>Content</label>
                    <textarea class="form-control" rows="4" name='content'></textarea>
                    <div class="float-right mt-2">
                        <button type="submit" class="btn btn-primary mr-2">Create Article</button>
                        <a href="{{ route('articles') }}" class="btn btn-secondary mr-2">Back</a>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
