@extends('application')

@section('content')
  @include('shared._profile')
  @if(Auth::user()->promoter)
    <p><strong>Hi, Promoter</strong></p>
    @include('events._form')
    <h3>Event</h3>
    @foreach ($promoterEvents as $event)
      <div class="user">
          <h3>{{ $event->title }}</h3>
          <img src="{{ $event->poster }}" alt="{{ $event->title }} - Poster" />
          <p>{{ $event->description }}</p>
      </div>
    @endforeach
  @else
    <h3>My Event</h3>
    @foreach ($myEvents as $event)
        <div class="user">
            <h3>{{ $event->title }}</h3>
            <img src="{{ $event->poster }}" alt="{{ $event->title }} - Poster" />
            <p>{{ $event->description }}</p>
            <p>QR Code</p>
            {!! QrCode::size(100)
              ->errorCorrection('M')
              ->generate('http://localhost:8000/tickets/' . $event->getUserTicket()->id . '/use') !!}
            <form action="/tickets/{{$event->getUserTicket()->id}}/refund" method="POST">
              @csrf
              @method('PUT')
              <button title="Refund Ticket" class="btn btn-danger btn-sm">Refund</button>
              <i>Refund: 75% of ticket price</i>
            </form>
        </div>
    @endforeach
    <h3>Other Upcoming Event</h3>
    @foreach ($upcomingEvents as $event)
        <div class="user">
            <h3>{{ $event->title }}</h3>
            <img src="{{ $event->poster }}" alt="{{ $event->title }} - Poster" />
            <p>{{ $event->description }}</p>
            <form action="/events/{{$event->id}}/buy-ticket" method="POST">
              @csrf
              @method('PUT')
              <button title="Buy Ticket" class="btn btn-danger btn-sm">Buy</button>
            </form>
        </div>
    @endforeach
  @endif
  
@endsection