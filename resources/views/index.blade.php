@extends('layouts.app')

@section('title', 'Catarina Machado')

@section('header')
	<span class="avatar"><img src="images/eu.jpg" height="122" width="122" alt="" /></span>
	<h1>CATARINA MACHADO</h1>
	<p>SOFTWARE ENGINEERING STUDENT</p>
@endsection

@section('body')
@endsection

@section('footer')
	<ul class="icons">
		<li><a href="{{ route('frontend.about') }}" class="fa-star">About me</a></li>
		<li><a href="{{ route('frontend.journey') }}" class="fa-bolt">Journey</a></li>
		<li><a href="https://github.com/catarinaamachado" class="fa-github">GitHub</a></li>
		<li><a href="https://www.linkedin.com/in/catarinaamachado" class="fa-linkedin">LinkedIn</a></li>
		<li><a href="mailto:catarinamachado11@gmail.com?subject=&body=Ol%C3%A1%2C%20Catarina!"
			   class="fa fa-envelope-o">Contact me</a></li>
	</ul>
@endsection

