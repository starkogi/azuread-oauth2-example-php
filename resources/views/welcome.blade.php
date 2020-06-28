@extends('layout')

@section('content')
<div class="jumbotron">
 <h1>PHP Graph Tutorial</h1>
 <p>
 <img width=200px src="$userImage" alt="Italian Trulli">
</p>
 <p class="lead">This sample app shows how to use the Microsoft Graph API to access a user's data from PHP</p>

    @if(isset($userName))
      <h4>Welcome : {{ $userName }}!</h4>
      <h4>Id : {{ $id }}!</h4>
      <h4>Job Title : {{ $jobTitle }}!</h4>
      <h4>Mail : {{ $mail }}!</h4>
      <h4>Mobile Phone : {{ $mobilePhone }}!</h4>
      <h4>User Principal Name : {{ $userPrincipalName }}!</h4>
      <a href="/signout" class="btn btn-primary btn-large">Click here to sign out</a>
      
    @else
      <a href="/signin" class="btn btn-primary btn-large">Click here to sign in with your AD Credentials</a>
    @endif

</div>
@endsection