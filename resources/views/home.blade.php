@extends('guest_layout')

@section('content')
    <div class="col">
        <h5>Upcoming Event</h5>
        <div class="row justify-content-start">
        @forelse ($upcomingEvents as $event)
        @include('events._show', ['event' => $event, 'bought' => false])
        @empty
        <p class="alert alert-warning p-1 small">No event available at the moment</p>
        @endforelse
    </div>

    <div class="col">
        <h5>On Going Event</h5>
        <div class="row justify-content-start">
        @forelse ($onGoingEvents as $event)
        @include('events._show', ['event' => $event, 'bought' => false])
        @empty
        <p class="alert alert-warning p-1 small">No on going event at the moment</p>
        @endforelse
    </div>

    <div class="col">
        <h5>Passed Event</h5>
        <div class="row justify-content-start">
        @forelse ($passedEvents as $event)
        @include('events._show', ['event' => $event, 'bought' => false])
        @empty
        <p class="alert alert-warning p-1 small">No data at the moment</p>
        @endforelse
    </div>
@endsection