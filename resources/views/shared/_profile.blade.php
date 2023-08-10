<div>
    <p><img src="{{ Auth::user()->photo }}" class='profile-photo' alt="{{ Auth::user()->name }} - Photo" /></p>
    <form action="/logout" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger btn-sm" title="Delete">Logout</button>
    </form>
    <p><strong>{{ Auth::user()->name }}</strong></p>
    <p><i>{{ Auth::user()->email }}</i></p>
    <p>Wallet: Rp <i>{{ Auth::user()->wallet }}</i></p>
</div>