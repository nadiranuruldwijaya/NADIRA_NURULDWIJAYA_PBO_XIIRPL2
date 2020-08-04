<table border="1" class="table table-striped">
	<h1>
		<center>DAFTAR MAHASISWA</center>


	</h1>
	<tr>
		<td>id</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>alamat</td>
		
	</tr>
	@foreach ($tampil as $data)

	<tr>
		<td>{{$data ['id']}}</td>
		<td>{{$data ['nama']}}</td>
		<td>{{$data ['jenis_kelamin']}}</td>
		<td>{{$data ['alamat']}}</td>
		
	</tr>
  @endforeach

</table>