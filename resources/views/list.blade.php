
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

<a href="/add" class="btn  btn-success pull-right">Add</a>
<table class="table table-hover">
    <thead>
<tr><td>FirstName</td><td>LastName</td><td>Edit</td><td>Delete</td></tr></thead><tbody>
@foreach($rows as $row)

    <tr><td> {{ $row->firstName }}</td><td> {{ $row->lastName }}</td><td> <a class="btn btn-danger" href="/edit/{{ $row->id }}">Edit</a></td><td> <a class="btn btn-danger" href="/delete/{{ $row->id }}">Delete</a></td></tr>

@endforeach
<tbody>
</table>
<?php echo $rows->render(); ?>

</div>

</body>
</html>
@endsection
