<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","p_tiket");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	global $conn;
	$asal = htmlspecialchars($data['asal']);
	$tujuan = htmlspecialchars($data['tujuan']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$jadwal = htmlspecialchars($data['jadwal']);
	$harga = htmlspecialchars($data['harga']);
	$seat = htmlspecialchars($data['seat']);
	$j_keberangkatan = htmlspecialchars($data['j_keberangkatan']);

	//query insert data
	$query = "INSERT INTO tiket
			VALUES('','$asal','$tujuan','$tanggal','$jadwal','$harga','$seat','$j_keberangkatan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data['id_tiket'];
	$asal = htmlspecialchars($data['asal']);
	$tujuan = htmlspecialchars($data['tujuan']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$jadwal = htmlspecialchars($data['jadwal']);
	$harga = htmlspecialchars($data['harga']);
	$seat = htmlspecialchars($data['seat']);
	$j_keberangkatan = htmlspecialchars($data['j_keberangkatan']);

	//query Update data
	$query = "UPDATE tiket SET
				asal = '$asal',
				tujuan = '$tujuan',
				tanggal = '$tanggal',
				jadwal = '$jadwal',
				harga = '$harga',
				seat = '$seat',
				j_keberangkatan = '$j_keberangkatan'
				WHERE id_tiket = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM tiket WHERE id_tiket = $id");
	return mysqli_affected_rows($conn);
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('Username Sudah Terdaftar');
			</script>";
			return false;
	}

	//cek konfirmasi password
	if($password !== $password2){
		echo "<script>
				alert('Konfirmasi Password Tidak Sesuai');
			</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);


	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);
}