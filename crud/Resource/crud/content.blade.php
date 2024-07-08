@extends('crud.layout')
@section('title_name')
Home pages
@endsection
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)  
  <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->username}}</td>
      <td>{{$row->email}}</td>
        <td>
            <div style="float: right;">
            <a href=""><button class="btn btn-sm bg-warning m-1">Show</button></a> <a href='{{"/crud.edit/".$row->id}}'  onclick="return confirm('Are you sure to Edit user ?')"><button class="btn btn-sm bg-primary m-1"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button></a><a href='{{"/".$row->id}}'><button class="btn btn-sm bg-danger m-1" >Delete</button></a>
            </div>
            
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection