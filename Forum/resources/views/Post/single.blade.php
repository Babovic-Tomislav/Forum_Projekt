@extends('layouts.front')

@section('content')
<div class="card border-primary">
    <h4 class="card-header">{{$posts->title}}</h4>
    <hr>
    <p class="card-body">{{$posts->content}}</p>
</div>
<div class="actions">

    <a href="{{route('Post.edit',$posts->id)}}" class="btn btn-info btn-xs">Edit</a>

    <form action="{{route('Post.destroy',$posts->id)}}" method="POST" class="inline-it">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-xs btn-danger" type="submit" value="Delete">
    </form>

</div>
@endsection
