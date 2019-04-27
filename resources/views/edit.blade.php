
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
<div class="container">
  <form action="/update" method="post">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" value="{{$rows[0]->firstName}}" class="form-control" name="firstName" id="email" placeholder="Enter email" name="firstName">
    </div>
    <div class="form-group">
      <label for="pwd">Last Name:</label>

    <input type="text" class="form-control" value="{{$rows[0]->lastName}}" name="lastName" id="pwd" placeholder="Enter password" name="lastName">
    <input type="hidden"  value="{{$rows[0]->id}}" name="id">
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
