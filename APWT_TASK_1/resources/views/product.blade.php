@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
h1 {text-align: center;}
h3 {text-align: center;}



</style>
</head>
<body style="background-color:#63E5D9"  >

<h1 style="color:#DF63E5" >Product List</h1>

</body>
</html>


<ul align="center">

    @foreach($names as $p)
     <h4 style="color:#E57363"><li align="left">{{$p}}</li></h4>
    @endforeach

</ul>
@endsection





