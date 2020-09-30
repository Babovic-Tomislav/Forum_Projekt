@extends('layouts.front')
@section('heading',"Posts")
@section('content')

    <div class="list-group">
        @forelse ($posts as $p)


        <a href="{{route('Post.show', $p->id)}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$p->title}}</h4>
            <p class="list-group-item-text">{{ Str::limit($p->content,100) }}</p>
        </a>
        @empty


        @endforelse
        <div class="row justify-content-center">
            {!!$posts->links()!!}
    </div>

    </div>

@endsection
