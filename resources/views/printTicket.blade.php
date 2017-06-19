<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<p>Click the button to print the current page.</p>

@foreach($pesanan as $psn)
@foreach($jam as $jm)
@foreach($bioskop as $bio)
@foreach($studio as $stu)
@foreach($film as $fil)

@if($psn->id_jtf == $jm->id_jtf && $jm->id_studio == $stu->id_studio && $stu->id_bioskop == $bio->id_bioskop && $fil->id_film == $jm->id_film)
<tr>
<th>{{ $psn->id_order }}</th>
<th>{{ $psn->tlg_pesan }}</th>
<th>{{ $bio->nama }}</th>
<th>{{ $stu->jenis }}</th>
<th>{{ $fil->judul }}</th>
<th>{{ $psn->jumlah_tiket }}</th>
<th>Rp. {{ (int) $psn->jumlah_tiket*(int)$jm->harga }}</th>
</tr>
@endif

@endforeach
@endforeach
@endforeach
@endforeach
@endforeach


<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>