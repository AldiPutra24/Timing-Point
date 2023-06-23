<div class="sidebar-1">
    <div class="header-1">
      <div class="list-item-1">
        <a href="#">
          <span class="description-header-1">Timing Point</span>
        </a>
      </div>
    </div>
    <div class="main-1">
      <div class="list-item-1 {{ ($title === "dashbroad" ? 'active': '') }}">
        <a href="/dashbroad">
          <img src="{{ asset('assets/image_dash/account.svg') }}" alt="" class="icon-1" />
          <span class="description-1">Dashbroad</span>
        </a>
      </div>
      <div class="list-item-1 {{ ($title === "harian" ? 'active': '') }}">
        <a href="/harian">
          <img src="{{ asset('assets/image_dash/komputer.svg') }}" alt="" class="icon-1" />
          <span class="description-1">Add tugas</span>
        </a>
      </div>
      <div class="list-item-1 {{ ($title === "isitugas" ? 'active': '') }}">
        <a href="/isitugas">
          <img src="{{ asset('assets/image_dash/logoR.jpg') }}" alt="" class="icon-1" />
          <span class="description-1">tambah kegiatan harian</span>
        </a>
      </div>
      <div class="list-item-1 {{ ($title === "notepad" ? 'active': '') }}">
        <a href="notepad">
          <img src="assets/speddo.svg" alt="" class="icon-1" />
          <span class="description-1">notepad</span>
        </a>
      </div>
      <div class="list-item-1 {{ ($title === "setting" ? 'active': '') }}">
        <a href="setting">
          <img src="assets/speddo.svg" alt="" class="icon-1" />
          <span class="description-1">setting</span>
        </a>
      </div>
    </div>
  </div>
