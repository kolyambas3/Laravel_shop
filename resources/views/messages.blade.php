@extends('Layouts.app')

@section('title-block')
    All messages
@endsection

@section('content')
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{$el->subject}}</h3>
            <p>{{$el->email}}</p>
            <p><small>{{$el->created_at}}</small></p>
            <a href="{{route('contact-data-message',$el->id)}}"><button class="btn btn-warning">View</button></a>
            <a href="{{route('contact-data-delete',$el->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
    @endforeach
@endsection
