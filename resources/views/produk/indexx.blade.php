@extends ('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4> DAFTAR PRODUK
							<!-- <a href="{{ url('produk') }}">DAFTAR PRODUK</a> -->
							<a href="{{ route('produk.create') }}" class="btn btn-success pull-right" style="margin-top: -8px">TAMBAH PRODUK</a><br>
						</h4>
					</div>
					<div class="panel-body">
						<!-- {{ $produk }} -->
						<table class="table table-striped" width="100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>NAMA PRODUK</th>
									<th>KATEGORI</th>
									<th>HARGA JUAL</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								@foreach($produk as $data)

									<tr>
										<td>{{ $data->id_produk }}</td>
										<td>{{ $data->kategori->nama_kategori }}</td>
										<td>{{ $data->nama_produk }}</td>
										<td>{{ $data->harga_jual }}</td>
										<td>
											<form method="POST" action="{{ route('produk.destroy', $data->id_produk) }}">
												{{ csrf_field () }} {{ method_field ('DELETE') }} 
												<a href="{{ route('produk.edit', $data->id_produk) }}" class="btn btn-primary">EDIT</a>
												<button type="submit" class="btn btn btn-danger">HAPUS</button>
											</form>
										</td>

									</tr>
								@endforeach
							</tbody>
						</table> 
					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection