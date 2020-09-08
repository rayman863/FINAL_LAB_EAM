@extends('layout.main')

@section('nav')

	<nav>
		<a href="{{route('admin.create')}}">Create User</a> |
		<a href="">About</a> |
		<a href="">Contact</a> |
		<a href="{{route('logout.index')}}">logout</a> |
		
	</nav>	

@endsection