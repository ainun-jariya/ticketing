<h3>Create Event</h3>
  <form class="pure-form pure-form-stacked" action="/events" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 row">
      <div class="col">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" required class="form-control">
      </div>
      <div class="col">
        <label for="highlight" class="form-label">Highlight</label>
        <input type="text" name="highlight" required class="form-control">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col">
        <label for="start_at" class="form-label">Start at</label>
        <input type="datetime-local" name="start_at" required class="form-control">
      </div>
      <div class="col">
        <label for="end_at" class="form-label">End at</label>
        <input type="datetime-local" name="end_at" required class="form-control">
      </div>
    </div>
    <div class="mb-3 row">
      <div class="col">
        <label for="poster" class="form-label">Poster</label>
        <input type="file" name="poster" required class="form-control">
      </div>
      <div class="col">
        <label for="price" class="form-label">Ticket Price</label>
        <input type="number" name="price" required class="form-control">
      </div>
      <div class="col">
        <label for="quota" class="form-label">Quota</label>
        <input type="number" name="quota" required class="form-control">
      </div>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" class="form-control"></textarea>
    </div>

    <div class="mb-3 text-end">
      <input class="btn btn-outline-primary" type="submit" value="Save Event">
    </div>
  </form>

  