@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text"  name="title" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
                <textarea  name="description" class="form-control"  ></textarea>
        </div>
        <div class="form-group">
            <label >User</label>

            <select class="form-control" name="user_id">
            @foreach($user as $user)
            <option Value="{{$user->id}}"> {{$user->name}} </option>
            @endforeach
        </select>
        </div>



        <button   type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
