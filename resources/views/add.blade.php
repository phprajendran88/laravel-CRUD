
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
@extends('layouts.app')

@section('content')


@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
@if ($errors->has('firstName'))

<span class="text-danger">{{ $errors->first('firstName') }}</span>

@endif
<div class="container">
  <form action="/add" method="post">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" value="" class="form-control" name="firstName" id="email" placeholder="Enter FirstName" >
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>

    <input type="text" class="form-control" value="" name="lastName" id="pwd" placeholder="Enter LastName" >
    
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>

    <input type="text" class="form-control" value="" name="email" id="pwd" placeholder="Enter EMail" >
    
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

@endsection
