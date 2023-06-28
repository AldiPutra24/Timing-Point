@extends('dashbroad.layout.main')

@section('container')
<div class="content_isitugas">
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
            <form action="/post" method="POST">
                @csrf
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

                <tbody id="data">
                    <tr id="input-tr-0">
                        <td><div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </td>

                        <td><input type="text" class="form-control form-control-sm" name='inputs0mata_kuliah'></td>
                        <td><input type="text" class="form-control form-control-sm" '></td>
                        <td><input type="date" class="form-control form-control-sm" ></td>
                        <td><input type="text" class="form-control form-control-sm" ></td>
                        <td><select class="form-select"  id="status" onchange="changeColor(this)">
                                <option value="red">Belum selesai</option>
                                <option value="blue">Dalam proses</option>
                                <option value="green">Selesai</option>
                                </select></td>
                        <td><button onclick="validasidelete" class="btn btn-sm btn-danger delete-record float-end" data-id="${i}">Hapus</button></td>

                    </tr>
                </tbody>
            </table>
            <div class="mt-1 mb-2 me-0">
                <div class="column">
                  <button class="btn btn-sm btn-primary float-end" type="submit">submit all</button>
                  <br/>
                </div>
              </div>
        </form>
          </div>
        </div>
    </div>
</div>

@endsection

