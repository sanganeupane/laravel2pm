@extends('master')
@section('content')
<h2>Contact Us</h2>
    <p>
      Hello friends contact me
    </p>
    <form action="{{route('contactAction')}}" method="post">
        @csrf
        <label for="name"> Name: {{$errors->first('name')}}</label>
        <input type="text" name="name" id="name">
        <button>Add</button>
    </form>

@endsection


