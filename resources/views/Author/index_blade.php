@extends('layouts.app')
@section('content')
	<table class="table table-hover">
		@foreach($authors as $author)
			<tr>
				<td>{{$author->name}}</td>
				<td>{{$author->phone}}</td>
				<td><img src="{{$author->image}}" alt=""></td>
			</tr>
		@endforeach
		{{$authors->links()}}
	</table>
@endsection