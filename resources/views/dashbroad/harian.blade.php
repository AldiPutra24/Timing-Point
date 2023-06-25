@extends('dashbroad.layout.main')

@section('container')
<h2 class="mt-4">drop your assignment, here !</h2>
      <div class="mt-5 mb-2 me-0">
        <div class="column">
          <button class="btn btn-sm btn-primary float-end" id="add-input">Tambah</button>
          <br/>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="tabel-responsive">
            <table class="table table-sm table-bordered">
              <thead class="head_table" text-align="center">
                <tr>
                  <th>Check</th>
                  <th>Mata Kuliah</th>
                  <th>Tugas</th>
                  <th>Tenggat</th>
                  <th>Media Pengumpulan</th>
                  <th>Status</th>
                  <th>del</th>
                </tr>
              </thead>
              <tbody id="data"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
