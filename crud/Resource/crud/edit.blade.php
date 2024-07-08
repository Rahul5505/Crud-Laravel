@extends('crud.layout')
@section('title_name')
edituser
@endsection
@section('content')
<form method="post">
@csrf
<div class="container w-50">
       
          
           <input type="text" name='name' value="{{$edit->name}}" class="form-control" placeholder="enter your name"><br><br>
    
               <input type="text" name='uname' value="{{$edit->username}}" class="form-control" placeholder="enter your username"><br><br>
               <input type="text" name='email' value="{{$edit->email}}" class="form-control" placeholder="enter your email address"><br><br>
        
          <input type="submit" name="update" value="update" class="btn btn-secondary" data-bs-dismiss="modal">
        
     
    </div>
</form>
@endsection