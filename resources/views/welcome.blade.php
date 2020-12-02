<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8.0</title>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>
</head>
<body>
    <style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="container">
<h2 class="alert alert-success">LARAVEL 8 APPLICATION</h2>

<div class="row">
<a href="" class="btn btn-info" style="margin-left:82%" data-toggle="modal" data-target="#basicExampleModal">Add info</a>
<div class="col-md-12">
<table class="table table-bordered">
<thead>
        <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
        </tr>
        <tbody>
            @foreach ( $infos as $key=>$info)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $info -> fname }}</td>
                <td>{{ $info -> lname }}</td>
                <td><a href="{{ route('view',$info->id) }}" data-toggle="modal" data-target="#myViewModal{{ $info->id }}" class=" text-info "><em class="fas fa-eye mr-1"></em></a></td>
            </tr>
             @endforeach
        </tbody>
</thead>

</table>

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify  modal-success modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('student.name') }}" method="post">
            @csrf
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="">Firstname and Lastname </span>
            </div>
            <input type="text" name="firstname" class="form-control" >
            <input type="text" name="lastname"class="form-control">
        </div>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal View -->
@foreach ($infos as $info)
<div class="modal fade" id="myViewModal{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify  modal-success modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="">Firstname and Lastname </span>
            </div>
            <input type="text" name="firstname" class="form-control" value="{{ $info -> fname }}" >
            <input type="text" name="lastname"class="form-control" value="{{ $info -> lname }}">
        </div>
        <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>
@endforeach

</body>
</html>
