@extends('layouts.app')

@section('title', 'Catarina Machado')

@section('header')
	<h1>ABOUT ME</h1>
@endsection

@section('body')
    <div align="justify">
		<br/>Hi! My name is Catarina. <br/><br/>
        I'm a 20-year-old student in the 3rd year of the Software Engineering
        course at University of Minho.<br/><br/>
        I love challenges and I'm greatly inspired by the extent of knowledge there is still
        for me to acquire and by the room for personal improvement that such constitutes.<br/><br/>
	</div>
@endsection

@section('footer')
	<ul class="icons">
		<li><a href="{{ route('frontend.begin') }}" class="fa-long-arrow-left">Back</a></li>
	</ul>
@endsection
