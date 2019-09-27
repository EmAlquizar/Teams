@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
					<tr>
						<td>{{ $team->id }}</td>
						<td>{{ $team->title }}</td>

						<td><a href="/teams/{{ $team->id }}">View</a></td>
						<td><a href="/teams/{{ $team->id }}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teams'>Add New Team</a>
	</div>
@endsection