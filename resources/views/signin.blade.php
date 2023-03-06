@extends('layout')

@section('content')
  <h1>LOGIN PAGE</h1> <br>

  {{-- Form per il sign in--}}
  <form action="" method="POST">
    @csrf

    Username: <input type="text" name="inpUsername"> <br><br>
    Password: <input type="text" name="inpPassword"> <br><br>

    <a href="/signup">SIGN UP</a> <br><br>

    <button type="submit">SEND</button>
  </form>

@endsection