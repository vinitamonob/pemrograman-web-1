<?php
    include "koneksi.php";
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tgl=$_POST['tgl'];
    $bln=$_POST['bln'];
    $thn=$_POST['thn'];
    $tgl_lhr=$tgl . " ". $bln . " " . $thn;
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];
    //Membuat Variabel untuk menyimpan Foto atau Gambar
    $lokasi_foto=$_FILES['foto']['tmp_name'];
    $nama_foto=$_FILES['foto']['name'];
    $tipe_foto=$_FILES['foto']['type'];
    $folder="Gambar/$nama_foto";
    //Membuat Nofitikasi upload Foto atau Gambar
    if(!empty($lokasi_foto)) {
        move_uploaded_file($lokasi_foto,$folder);
    }

    //Membuat Query Edit Data
    $edit="UPDATE mahasiswa SET nim='$nim', prodi='$prodi', nama='$nama', tempat_lahir='$tempat',
     tanggal_lahir='$tgl_lhr', jenis_kelamin='$jk', agama='$agama', alamat='$alamat',
     foto='$nama_foto' WHERE nim='$nim'";
    $hasil=mysqli_query($edit);
    
    //Notifikasi keberhasilan Edit Data
    if($hasil) {
        echo "Data berhasil diedit";
    }
    else {
        echo "Data gagal diedit";
    }
?>

<meta http-equiv="refresh" content="4;url=lihat_data.php">