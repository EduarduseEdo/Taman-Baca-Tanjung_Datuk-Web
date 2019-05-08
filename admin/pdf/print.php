<?php ob_start(); ?>
<html>
<head>
  <title>Cetak PDF</title>
    
   <style>
       table {border-collapse:collapse; table-layout:fixed;width: 100%;}
       table td {word-wrap:break-word;width: 30%;}

       div.niveau
    {
        padding-left: 20mm;
    }
   </style>
</head>
<body>
 
<img src="kop1.png" width="100px">  
<p style="line-height: 5em;""><h4 align="center">FORMULIR PENDAFTARAN SISWA BARU</h4><br><h4 align="center">TAHUN PELAJARAN 2018/2019</h4></p>


<?php
// Load file koneksi.php
include "koneksi.php";
 
$query = "SELECT * FROM tbl_pendaftaransma where  pendaftaransma_id='$_GET[id]'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  $data = mysqli_fetch_array($sql); // Ambil semua data dari hasil eksekusi $sql


    //    $data = mysqli_fetch_array(mysqli_query($connect, "select *from tbl_pendaftaransma
      //  where pendaftaransma_id ='$_GET[pendaftaransma_id]'"));

        //$hapus = mysqli_query($connect, "delete from tbl_pendaftaransma where 
        //pendaftaransma_id='$_GET[pendaftaransma_id]'") or die (mysqli_error($connect));


     //   if($hapus){

    ?>


    <h5>I. KETERANGAN PRIBADI</h5>
<table>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?=$data['nama_lengkap'];?></td>
        </tr>

        <tr>
         <td>Nama Panggilan</td>
         <td>:</td>
         <td><?=$data['nama_panggilan'];?></td>
        </tr>

        <tr>
             <td>Tempat Lahir</td>
             <td>:</td>
             <td><?=$data['tempat_lahir'];?></td>
        </tr>

        <tr>
             <td>Tangggal Lahir</td>
             <td>:</td>
             <td><?=$data['tgl_lahir'];?></td>
        </tr>

        <tr>
             <td>Jenis Kelamin</td>
             <td>:</td>
             <td><?=$data['jenis_kelamin'];?></td>
        </tr>

        <tr>
             <td>Agama</td>
             <td>:</td>
             <td><?=$data['agama'];?></td>
        </tr>

        <tr>
             <td>Alamat Pontianak</td>
             <td>:</td>
             <td><?=$data['alamat_ptk'];?></td>
        </tr>

        <tr>
             <td>Kelurahan</td>
             <td>:</td>
             <td><?=$data['kelurahan'];?></td>
        </tr>

        <tr>
             <td>Kecamatan</td>
             <td>:</td>
             <td><?=$data['kecamatan'];?></td>
        </tr>

        <tr>
             <td>Kota/Kabupaten</td>
             <td>:</td>
             <td><?=$data['kota_kab'];?></td>
        </tr>

        <tr>
             <td>Provinsi</td>
             <td>:</td>
             <td><?=$data['provinsi'];?></td>
        </tr>
        
        <tr>
             <td>Nomor Telp/HP</td>
             <td>:</td>
             <td><?=$data['telp_hp'];?></td>
        </tr>

        <tr>
             <td>Anak Ke</td>
             <td>:</td>
             <td><?=$data['anak_ke'];?></td>
        </tr>

        <tr>
             <td>Jumlah Saudara</td>
             <td>:</td>
             <td><?=$data['jumlah_saudara'];?></td>
        </tr>

        <tr>
             <td>Tinggal Dengan</td>
             <td>:</td>
             <td><?=$data['tinggal_dgn'];?></td>
        </tr>

        <tr>
             <td>Bahasa Yang Digunakan Sehari-hari</td>
             <td>:</td>
             <td><?=$data['bahasa'];?></td>
        </tr>

        <tr>
             <td>Jarak Tempat Tinggal Kesekolah</td>
             <td>:</td>
             <td><?=$data['jarak_tempuh'];?></td>
        </tr>

        <tr>
             <td>Kesekolah Menggunakan</td>
             <td>:</td>
             <td><?=$data['kesekolah_mnggkn'];?></td>
        </tr>

        <tr>
             <td>Ekstra Yang Diminati</td>
             <td>:</td>
             <td><?=$data['ekstra_diminati'];?></td>
        </tr>

</table>

<h5>II. KETERANGAN KESEHATAN</h5>
<table style="border: none;">
    
        <tr>
             <td>Golongan Darah</td>
             <td>:</td>
             <td><?=$data['gol_darah'];?></td>
        </tr>

        <tr>
         <td>Penyakit Yang Pernah Diderita</td>
         <td>:</td>
         <td><?=$data['penyakit'];?></td>
        </tr>

        <tr>
         <td>Tinggi Badan</td>
         <td>:</td>
         <td><?=$data['tinggi_badan'];?></td>
        </tr>
        
        <tr>
         <td>Berat Badan</td>
         <td>:</td>
         <td><?=$data['berat_badan'];?></td>
        </tr>
</table>

<h5>III. KETERANGAN SEKOLAH SEBELUMNYA</h5>
<table style="border: none;">
        
        <tr>
         <td>Asal Sekolah</td>
         <td>:</td>
         <td><?=$data['asal_sekolah'];?></td>
        </tr>

        <tr>
         <td>Nama Sekolah</td>
         <td>:</td>
         <td><?=$data['nama_sekolah'];?></td>
        </tr>

        <tr>
         <td>Tanggal STTB/SKHU</td>
         <td>:</td>
         <td><?=$data['tgl_skhu'];?></td>
        </tr>

        <tr>
         <td>Nomor STTB/SKHU</td>
         <td>:</td>
         <td><?=$data['nomor_skhu'];?></td>
        </tr>

        <tr>
         <td>Jumlah Nilai</td>
         <td>:</td>
         <td><?=$data['jumlah_nilai'];?></td>
        </tr>
        
        <tr>
         <td>Lama Belajar</td>
         <td>:</td>
         <td><?=$data['lama_belajar'];?></td>
        </tr>

        <tr>
         <td>NISN</td>
         <td>:</td>
         <td><?=$data['nisn'];?></td>
        </tr>
</table>
<br><br><br><br><br>
<h5>IV. KETERANGAN ORANG TUA</h5>
<table style="border: none;">

        <tr>
         <td>Nama Ayah</td>
         <td>:</td>
         <td><?=$data['nama_ayah'];?></td>
        </tr>

        <tr>
         <td>Nama Ibu</td>
         <td>:</td>
         <td><?=$data['nama_ibu'];?></td>
        </tr>

        <tr>
         <td>Tempat Tanggal Lahir Ayah</td>
         <td>:</td>
         <td><?=$data['ttl_ayah'];?></td>
        </tr>

        <tr>
         <td>Tempat Tanggal Lahir Ibu</td>
         <td>:</td>
         <td><?=$data['ttl_ibu'];?></td>
        </tr>

        <tr>
         <td>Agama Ayah</td>
         <td>:</td>
         <td><?=$data['agama_ayah'];?></td>
        </tr>

        <tr>
         <td>Agama Ibu</td>
         <td>:</td>
         <td><?=$data['agama_ibu'];?></td>
        </tr>

        <tr>
         <td>Pendidikan Ayah</td>
         <td>:</td>
         <td><?=$data['pendidikan_ayah'];?></td>
        </tr>

        <tr>
         <td>Pendidikan Ibu</td>
         <td>:</td>
         <td><?=$data['pendidikan_ibu'];?></td>
        </tr>

        <tr>
         <td>Pekerjaan Ayah</td>
         <td>:</td>
         <td><?=$data['pekerjaan_ayah'];?></td>
        </tr>

        <tr>
         <td>Pekerjaan Ibu</td>
         <td>:</td>
         <td><?=$data['pekerjaan_ibu'];?></td>
        </tr>

        <tr>
         <td>Penghasilan Ayah /Per Bulan</td>
         <td>:</td>
         <td><?=$data['penghasilan_ayah'];?></td>
        </tr>

        <tr>
         <td>Penghasilan Ibu /Per Bulan</td>
         <td>:</td>
         <td><?=$data['penghasilan_ibu'];?></td>
        </tr>

        <tr>
         <td>Alamat </td>
         <td>:</td>
         <td><?=$data['alamat_ortu'];?></td>
        </tr>

        <tr>
         <td>Kelurahan</td>
         <td>:</td>
         <td><?=$data['kelurahan_ortu'];?></td>
        </tr>

        <tr>
         <td>Kecamatan</td>
         <td>:</td>
         <td><?=$data['kecamatan_ortu'];?></td>
        </tr>

        <tr>
         <td>Kota/Kabupaten</td>
         <td>:</td>
         <td><?=$data['kota_kab_ortu'];?></td>
        </tr>

        <tr>
         <td>Provinsi</td>
         <td>:</td>
         <td><?=$data['provinsi_ortu'];?></td>
        </tr>

        <tr>
         <td>Nomor Telp/Hp</td>
         <td>:</td>
         <td><?=$data['telp_hp_ortu'];?></td>
        </tr>

        <tr>
         <td>Keterangan Ayah</td>
         <td>:</td>
         <td><?=$data['ket_ayah'];?></td>
        </tr>

        <tr>
         <td>Keterangan Ibu</td>
         <td>:</td>
         <td><?=$data['ket_ibu'];?></td>
        </tr>

        <tr>
         <td>Tanggal</td>
         <td>:</td>
         <td><?=$data['tanggal'];?></td>
        </tr>

    </table>


</body>
</html>
<?php
    
 }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}

$html = ob_get_contents();
$isi = ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data_Pendaftar.pdf', 'D');
?>