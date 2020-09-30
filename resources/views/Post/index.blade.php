@extends('layouts.front')
@section('heading',"Posts")

@section('content')

    <div id="text_custom2">
    Posts

    </div>
<br>
    <div class="list-group">
        @forelse ($posts as $p)


        <a href="{{route('Post.show', $p->id)}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$p->title}}</h4>
            <p class="list-group-item-text">{{ Str::limit($p->content,100) }}</p>
        </a>
        <hr>
        @empty


        @endforelse
        <div class="row justify-content-center">
            {!!$posts->links()!!}
    </div>

    </div>

@endsection

@section('postbar')
<div class="row content-heading">
    <div class="col pl-5">
        <div class="row ">

            <div class="col d-flex justify-content-end">
                <a class="btn btn-primary" href="{{route('Post.create')}}">Create post</a>
            </div>
        </div>
</div>
</div>
@endsection
