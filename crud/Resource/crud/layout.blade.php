<html>
    <head>
        <title>@yield('title_name')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
<body class="bg-light">
<div class="container-fluid">
<h1 class="bg-light text-danger p-3">
Laravel Crud Opration
</h1>    
<h1 class="text-dark">Users</h1>
<div class="row w-100">
<div class="col-md-6">
    <h4 class="text-secondary">Manage youe user here</h4>

</div>
<div class="col-md-6">
<form>
    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-sm bg-primary text-white" style="float: inline-end;">Add new user</button>

</form>
</div>
</div>
</div>
<!-- pass validation -->
@if($errors->any())
<div class='alert alert-danger'>
   @foreach($errors->all() as $error)
   <ul>
       <li>{{$error}}</li>
   </ul>
   @endforeach
</div>
@endif
<!-- flash Session data messages  -->
@if(Session('success'))
<div class='alert alert-success'>
    <span class='text-dark'>{{session('success')}}</span>
</div>
@endif
<!-- flash Session data messages  -->
@if(Session('upd'))
<div class='alert alert-success'>
    <span class='text-dark'>{{session('upd')}}</span>
</div>
@endif
<!-- flash Session data messages  -->
@if(Session('del'))
<div class='alert alert-success'>
    <span class='text-dark'>{{session('del')}}</span>
</div>
@endif

@yield('content')


<!-- Modal -->
<form method="post">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
            
       <div class="modal-body p-3">
          
           <input type="text" name="name" class="form-control" placeholder="enter your name"><br><br>
    
               <input type="text" name="uname" class="form-control" placeholder="enter your username"><br><br>
               <input type="text" name="email" class="form-control" placeholder="enter your email address">
        
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" value="Submit" class="btn btn-secondary" data-bs-dismiss="modal">
        
        </div>
      </div>
    </div>
  </div>
</form>



</body>
</html>

