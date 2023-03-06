@extends('layout')

@section('content')
  <h1>SIGN UP PAGE</h1>

  <form action="" method="POST">
    @csrf

    {{-- Richiesta delle informazioni --}}
    <fieldset>
      <legend>Personal Informations</legend>
      Name: <input type="text" name="name"> <br><br>
      Surname: <input type="text" name="surname"> <br><br>
      Phone Number (optional): <input type="text" name="tel">
    </fieldset><br>

    <fieldset>
      <legend>Credentials</legend>
      Username: <input type="text" name="username"> <br><br>
      Email: <input type="text" name="email"> <br><br>
      Password: <input type="password" name="password"> <br><br>
      Confirm Password: <input type="password" name="password_confirmation">
    </fieldset><br><br>

    {{-- Captcha --}}
    Captcha working progress ... <br><br>


    <button type="submit">NEXT</button>
  </form>
@endsection