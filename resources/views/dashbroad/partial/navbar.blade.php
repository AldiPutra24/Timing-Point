<div class="navbar">
    <nav>
      <div id="menu-button">
        <input type="checkbox" id="menu-chekbox" />
        <label for="menu-chekbox" id="menu-label">
          <div id="hamburger"></div>
        </label>
      </div>
      <div id="account-button">
        <input type="checkbox" id="account-chekbox">
        <label for="account-chekbox" id="account-label"></label>
        <img src="assets/account.svg" />
      </div>
      <div class="logout">
      <form action="{{ route('logout') }}" class="d-flex" role="search">
          {{-- @csrf
          @method('DELETE') --}}
          <button class="btn btn-danger" type="submit" >Logout</button>
      </form>
  </div>
    </nav>
  </div>
