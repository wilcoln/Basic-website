@extends('layouts.app')

@section('content')
<h1 class="my-3">Contact</h1>
<form action="/contact/submit" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" placeholder="Enter your name" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" placeholder="example@gmail.com" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea type="text" placeholder="Enter your message" class="form-control" name="message" id="message" rows="5"></textarea>
    </div>
    <div class="row">
        <input type="submit" class="col-2 ml-auto btn btn-success mr-4" value="send">
    </div>
    
</form>
@endsection