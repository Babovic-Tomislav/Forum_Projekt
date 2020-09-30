@extends('layouts.partials.navbar')



@section('content')

@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
    @endif

<div class="row">
    <div class="col">


        <div class="card">
            <form class="form-vertical " action="{{route('Post.update',$posts->id)}}" method="post" role="form" id="create-post-form">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="form-group">
                    <label for="title">Subject</label>
                    <input type="text" class="form-control" name="title"  placeholder="Input..." value="{{$posts->title}}">
                </div>

                <div class="form-group">
                    <label for="content">Post</label>
                    <textarea class="form-control " name="content"  >{{$posts->content}}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
