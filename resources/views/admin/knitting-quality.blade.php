@extends('layouts.master')

@section('title')
    Knitting quality | eGeneration
@endsection

@section('content')
<html lang="en">
<head>
  <title>Forms and report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container jumbotron" >
  <h2>Forms and report</h2>
  <a href="/accessories-inventory" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accessories Inventory Report</a>
  <a href="/yarn-inventory" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Yarn Inventory Report</a>
  <a href="/yarn-issue" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Yarn Issue form</a>
  <a href="/yarn-receive" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Yarn receive form</a>
  <a href="/delivery-chalan" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delivery Chalan</a>
  
  
      
</div>

</body>
</html>

@endsection

@section('scripts')
    
@endsection