<div class="modal fade" id="event-{{$event->id}}" aria-hidden="true" aria-labelledby="event-{{$event->id}}" tabindex="-1">
  <div class="modal-dialog  modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('events._item', compact('event'))
      </div>
    </div>
  </div>
</div>