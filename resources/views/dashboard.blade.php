@extends('application')

@section('content')
  
  @if(Auth::user()->promoter)
  <div class="col">
    <center><h3>Event</h3></center>
    <p class="text-end"><a class="btn btn-sm btn-outline-primary">+ New Event</a></p>
    <div class="row justify-content-start">
      @forelse ($promoterEvents as $event)
        @include('events._show', ['event' => $event, 'bought' => false])
      @empty
      <p class="alert alert-warning p-1 small">You create no event yet</p>
      @endforelse
    </div>
  </div>
  @else
    <center><h3>My Event</h3></center>
    <div class="row justify-content-start">
    @forelse ($myEvents as $event)
      @include('events._show', ['event' => $event, 'bought' => true])
    @empty
      <p class="alert alert-warning p-1 small">You have no event yet</p>
    @endforelse
    </div>
    <center><h3>Other Upcoming Event</h3></center>
    <div class="row justify-content-start">
    @forelse ($upcomingEvents as $event)
      @include('events._show', ['event' => $event, 'bought' => false])
      @empty
      <p class="alert alert-warning p-1 small">No event available at the moment</p>
    @endforelse
    </div>
  @endif
  
@endsection

@section('form')
  @include('events._form')
@endsection