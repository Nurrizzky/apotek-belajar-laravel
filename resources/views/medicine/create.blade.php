@extends('layout.template')

@section('content')

   <form action="{{ route('medicine.store') }}" method="POST" class="card p-5">
         @csrf

         @if (Session::get('success'))
            <div class="alert alert-success p-2">{{ Session::get('success') }}</div>
         @endif

         {{-- @if (Session::get('danger'))
         <div class="alert alert-danger p-2">{{ Session::get('danger') }}</div>
         @endif --}}
         @if ($errors->any())
            <ul class="alert alert-danger p-5">
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach   
            </ul>            
         @endif

      <div class="mb-3 row">
         <label for="name" class="col-sm col-form-label">Nama Obat : </label>
         <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control">
         </div>
      </div>
      <div class="mb-3 row">
         <label for="type" name="type" class="col-sm-2 col-form-label">Jenis Obat : </label>
         <div class="col-sm-10">
            <select class="form-select" id="type" name="type">
               <option value="" selected disabled hidden>Pilih Jenis</option>
               <option value="tablet">Tablet</option>
               <option value="sirup">Sirup</option>
               <option value="kapsul">Kapsul</option>
            </select>
         </div>
      </div>
      <div class="mb-3 row">
         <label for="price" class="col-sm col-form-label">Harga Obat : </label>
         <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price">
         </div>
      </div>
      <div class="mb-3 row">
         <label for="stock" class="col-sm col-form-label">Stok Tersedia : </label>
         <div class="col-sm-10">
            <input type="number" class="form-control" id="stock" name="stock">
         </div>
      </div>
      <button type="submit" class="btn btn-primary">Tambah Data</button>
   </form>

@endsection