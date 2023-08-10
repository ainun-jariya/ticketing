<!-- <div class='col-3 mx-3 my-3'> -->
    @include('events._item', ['event' => $event, 'bought' => $bought, 'full'=> false])
<!-- </div> -->
@include('events._modal', ['event' => $event, 'bought' => $bought, 'full'=> true])
