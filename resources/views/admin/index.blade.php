@extends('layout.navbar')


@section('title')
Home page
@endsection

@section('content1')
<h2>User List</h2>
<table border="1">
	<tr>
		<td>Username</td>
		<td>Password</td>
		<td>Type</td>
		<td>Employee Name</td>
		<td>Company Name</td>
		<td>Contact Number</td>
		<td>Action</td>
	</tr>

@for($i=0; $i != count($users); $i++)
	<tr>
		<td>{{$users[$i]->username}}</td>
		<td>{{$users[$i]->password}}</td>
		<td>{{$users[$i]->type}}</td>
		<td>{{$users[$i]->employee_name}}</td>
		<td>{{$users[$i]->company_name}}</td>
		<td>{{$users[$i]->contact_number}}</td>
		<td>
			<a href="{{route('admin.edit', [$users[$i]->username])}}">Edit</a> |
			<a href="{{route('admin.delete', [$users[$i]->username])}}">Delete</a>
		</td>
	</tr>
@endfor
</table>
@endsection

