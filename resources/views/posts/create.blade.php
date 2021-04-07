@extends('layouts.app')


@section('content')

    <h1> Add new post </h1>
    <form action={{route('posts.store')}} method="Post">
        @csrf
        <div class="form-group">
            <label for="name">Post title</label>
            <input type="text" class="form-control"  name="title" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("title")}}</label>
        </div>
        <div class="form-group">
            <label for="email">Post body</label>
            <textarea class="form-control"  name="body" id="body" aria-describedby="std_nameHelp"> </textarea>
            <label class="text-danger"> {{$errors->first("body")}}</label>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}" > {{$user->name}} </option>
                @endforeach
            </select>
{{--            <label class="text-danger"> {{$errors->first("body")}}</label>--}}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
