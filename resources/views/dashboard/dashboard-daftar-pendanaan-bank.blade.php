@extends('layouts.dashboard')

@section('content')
		
		
		<br><br>
		<section class="content">
		<section class="widget">
			<header>
				<span class="icon">&#128196;</span>
				<hgroup>
					<h1>Submit Pendanaan</h1>
					<h2>Submit Pendanaan yang dilakukan UMKM</h2>
				</hgroup>
			</header>
			<div class="content">
				<form action="{{ # }}" method="post" enctype="multipart/form-data" width="100">
					{!! csrf_field() !!}

					<input type="hidden" value="0" name="sementara_dana">
                    <input type="hidden" value="0" name="status">
                    <input type="hidden" name="tgl_transaksi" value="tgl_transaksi">

					<div class="field-wrap">
						<input type="text" name="nama_pj" placeholder="Nama Penanggung Jawab" />
					</div>
					<div class="field-wrap">
						<input type="text" name="nama_proyek" placeholder="Nama Proyek Pendanaan"/>
					</div>

					
					<br><br>

					<div class="field-wrap">
						<input type="text" name="total_dana" placeholder="Total Dana Yang Dibutuhkan"/>
					</div>
					<button type="submit" class="green">Post</button>
				</form>
			</div>
		</section>
		</section>
				

@endsection
