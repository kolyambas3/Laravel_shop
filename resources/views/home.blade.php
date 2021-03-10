@extends('Layouts.app')

@section('title-block')
    Home page
@endsection

@section('content')
 <h1>Home</h1>
 <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, consectetur consequuntur corporis dolorem,
     doloremque eius error exercitationem fugit hic ipsa necessitatibus perspiciatis quod tenetur. Architecto
     cupiditate molestiae mollitia officia quia.
 </p>
@endsection

@section('assite')
    @parent
    <p>Дополнительный текст</p>
@endsection
