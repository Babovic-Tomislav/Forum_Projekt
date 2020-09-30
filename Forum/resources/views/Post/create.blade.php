@extends('layouts.partials.navbar')

@section('heading',"Create Post")

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
            <form class="form-vertical" action="{{route('Post.store')}}" method="post" role="form" id="create-post-form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Subject</label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Input..." value="{{old('subject')}}">
                </div>

                <div class="form-group">
                    <label for="content">Post</label>
                    <textarea class="form-control" name="content" id="" placeholder="Input..." value="{{old('post')}}"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="{{ url('/Post') }}">Cancel</a>
            </form>

        </div>
    </div>
</div>
@endsection
