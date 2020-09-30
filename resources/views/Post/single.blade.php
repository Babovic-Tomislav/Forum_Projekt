@extends('layouts.front')

@section('content')
<div class="card border-primary">
    <h4 class="card-header">{{$posts->title}}</h4>
    <hr>
    <p class="lead d-flex justify-content-between" >
        <i class="">Created by: {{$posts->user->name}}</i>
        <i class="">Date created: {{$posts->created_at}}</i>

    </p>
    <p class="card-body">{{$posts->content}}</p>
    <p class="lead" style="text-align: end">
        <i>Last updated at: {{$posts->updated_at}}</i>
    </p>



</div>
@if($posts->user_id==Auth::user()->id or Auth::user()->user_type==1)
    <div class="actions">

    <a href="{{route('Post.edit',$posts->id)}}" class="btn btn-info btn-xs">Edit</a>

    <form action="{{route('Post.destroy',$posts->id)}}" method="POST" class="inline-it">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input class="btn btn-xs btn-danger" type="submit" value="Delete">
    </form>

</div>
@endif


<div>
    @foreach($comments as $comment)
    <hr>
    <div class="card border-secondary" >
        <p class="lead">
        User: {{$comment->user->name}}
    </p>
    <p class="card-body">{{ $comment->content }}</p>

    <p class="lead" style="text-align: end">
        <i>Last updated at: {{$comment->updated_at}}</i>
    </p>
    </div>
    @if($comment->user_id==Auth::user()->id or Auth::user()->user_type==1)
    <div class="actions">



        <form action="{{route('Comment.destroy',$comment->id)}}" method="POST" class="inline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>

    </div>
    @endif
    @endforeach

</div>
<div>
    <form action="{{route('postcomment.store', $posts->id)}}" method="post">
    {{ csrf_field() }}
    <legend>Create comment</legend>
    <div class="form-group">
        <input type="text"  class="form-control" name="content" id="" placeholder="Input...">
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>

    </form>


</div>
<div class="row justify-content-center">
    {!!$comments->links()!!}
</div>

@endsection
