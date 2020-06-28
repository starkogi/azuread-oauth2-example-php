@extends('layout')

@section('content')
<h1>Mails</h1>
<table class="table">
 <thead>
   <tr>
     <th scope="col">Name</th>
     <th scope="col">Creator</th>
     <th scope="col">Start</th>
     <th scope="col">End</th>
   </tr>
 </thead>
 <tbody>
   @isset($events)
     @foreach($events as $event)
       <tr>
            <td>{{ $event->getDescription() }}</td>
            <td>{{ $event->getSubject() }}</td>
            <td>{{ $event->getSubject() }}</td>
            <td>{{ $event->getSubject() }}</td>
       </tr>
     @endforeach
   @endif
 </tbody>
</table>
@endsection