@extends('layout')

@section('content')
  <h1>SIGN UP PAGE</h1>

  <form action="">
    @csrf

    {{-- Richiesta delle informazioni --}}
    <fieldset>
      <legend>Personal Informations</legend>
      Name: <input type="text" name="inpName"> <br><br>
      Surname: <input type="text" name="inpSurname"> <br><br>
      Phone Number (optional): <input type="text" name="inpTel">
    </fieldset><br>

    <fieldset>
      <legend>Credentials</legend>
      Username: <input type="text" name="inpUsername"> <br><br>
      Email: <input type="text" name="inpEmail"> <br><br>
      Password: <input type="password" name="inpPassword"> <br><br>
      Confirm Password: <input type="password" name="inpPasswordConfirmation">
    </fieldset><br><br>

    {{-- Captcha --}}
    Captcha working progress ... <br><br>


    <button type="submit">NEXT</button>
  </form>
@endsection