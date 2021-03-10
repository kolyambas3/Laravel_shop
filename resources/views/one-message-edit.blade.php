@extends('Layouts.app')

@section('title-block')
    Edit message
@endsection

@section('content')
    <h1>Edit message</h1>


    <form action="{{route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" value="{{$data->name}}" id="name">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" value="{{$data->email}}" id="email">
            <label for="">Subject</label>
            <input class="form-control" type="text" name="subject" value="{{$data->subject}}" id="subject">
            <label for="">Message</label>
            <textarea class="form-control" type="text" name="message" placeholder="Enter your Message" id="subject">{{$data->message}}</textarea>
            <button type="submit" class="btn btn-success mt-2">Update</button>
        </div>
    </form>
@endsection
