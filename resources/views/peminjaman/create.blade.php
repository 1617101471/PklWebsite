@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Peminjaman 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('peminjaman.store') }}" method="post" >
			  		@csrf

			  		<div class="form-group {{ $errors->has('id_user') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Peminjam</label>	
			  			<select name="id_user" class="form-control">
			  				<option>Pilih Nama Peminjam</option>
			  				@foreach($users as $data)
			  				<option value="{{ $data->id }}">{{ $data->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_user'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_user') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_barang') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Barang</label>	
			  			<select name="id_barang" class="form-control">
			  				<option>Pilih Nama Barang</option>
			  				@foreach($barangs as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_barang'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_barang') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal peminjaman</label>	
			  			<input type="date" name="tgl_pinjam" class="form-control"  required>
			  			@if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		

			  		<div class="form-group {{ $errors->has('tgl_pengembalian') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pengembalian</label>	
			  			<input type="date" name="tgl_pengembalian" class="form-control"  required>
			  			@if ($errors->has('tgl_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pengembalian') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection