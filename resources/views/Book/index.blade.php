
@extends("layouts.app")
@section("content")
	<table class="table table-hover">
		
		@foreach($books as $book)
			<tr>
				<td>{{$book->TenSach}}</td>
				<td>{{$book->HinhAnh}}</td>
				<td>{{$book->GiaCu}}</td>
			</tr>
		@endforeach
	</table>
@endsection