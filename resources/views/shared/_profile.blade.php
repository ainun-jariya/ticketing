<div class="text-center">
    <p><img src="{{ Auth::user()->photo }}" class='profile-photo' alt="{{ Auth::user()->name }} - Photo" /></p>
    
    <p><strong>{{ Auth::user()->name }}</strong></p>
    @if(Auth::user()->promoter) <p><span class="badge bg-primary rounded-pill">Hi, Promoter!</span></p> @endif
    <p><i>{{ Auth::user()->email }}</i></p>
    <p><i>{{ Auth::user()->phone }}</i></p>
    <p>Wallet: Rp <i>{{ Auth::user()->wallet }}</i></p>

    <form action="/logout" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-outline-secondary btn-sm" title="Delete">Logout</button>
    </form>
</div>