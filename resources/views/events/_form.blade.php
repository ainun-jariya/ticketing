<h3>Create Event</h3>
  <form class="pure-form pure-form-stacked" action="/events" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" required>

    <label for="poster">Poster</label>
    <input type="file" name="poster" required>

    <label for="description">Description</label>
    <textarea name="description"></textarea>

    <input class="pure-button pure-button-primary" type="submit" value="Save Event">
  </form>