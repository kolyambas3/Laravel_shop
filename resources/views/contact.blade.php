@extends('Layouts.app')

@section('title-block')
    Contact page
@endsection

@section('content')
    <h1>Contact</h1>


    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" value="Enter your name" id="name">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" value="Enter your email" id="email">
            <label for="">Subject</label>
            <input class="form-control" type="text" name="subject" value="Enter your subject" id="subject">
            <label for="">Message</label>
            <textarea class="form-control" type="text" name="message" placeholder="Enter your Message" id="subject"></textarea>
            <button type="submit" class="btn btn-success mt-2">Success</button>
        </div>
    </form>
@endsection
