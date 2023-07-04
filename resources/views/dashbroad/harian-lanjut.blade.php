@extends('dashbroad.layout.main')

@section('container')
<div class="content_lanjut">
<main>
    <header>
      <div class="container">
        <div id="header">
          <h2><i class="fas fa-clipboard-check"></i>To-do List</h2>
          <div class="user_input">
            <input type="text" id="input" placeholder="What do you have planned?" required><button id="add_item">Submit</button>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div class="container">
        <div id="to_do_list"></div>
      </div>
    </section>
  </main>
</div>
@endsection