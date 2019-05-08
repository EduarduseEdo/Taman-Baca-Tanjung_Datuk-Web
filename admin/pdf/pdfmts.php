<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
error_reporting(0);
ob_start();
?>
<style type="text/css">
<!--
    table.page_header {width: 100%; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
    table.page_footer {width: 100%; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
    h1 {color: #000033}
    h2 {color: #000055}
    h3 {color: #000077}

    div.niveau
    {
        padding-left: 5mm;
    }
-->
</style>
<div class="niveau">
	<div class="niveau">
		<div class="niveau">
			<table width="100%">
				<tr>
					<td  ><img src="logo.png" width="20%"></td>
					<td align="center"><br><br><b>YAYASAN ISHLAH BAITIL MAL (IBM) PONTIANAK<br>
								MTs AL-ISHLAH TERAKREDITASI "B" PONTIANAK</b><br>
								E-mail : alishlahpontianak@gmail.com<br>
								<b>NSS : 30.4..13.60.04.041 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NPSN : 30105078</b><br>
								<hr>
								Alamat : Jl.H.Rais A.Rahman Gg.Lawu Telp. (0561) 778937 Pontianak 78115
							
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<hr>
 
<!-- <img src="kop1.png" width="100px"> -->  
<p style="line-height: 5em;""><h4 align="center">FORMULIR PENDAFTARAN SISWA BARU</h4><br><h4 align="center">TAHUN PELAJARAN 2018/2019</h4></p>

<?php
// Load file koneksi.php
include "koneksi.php";
 
$query = "SELECT * FROM tbl_pendaftaranmts where  pendaftaranmts_id='$_GET[id]'"; // Tampilkan semua data gambar
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

<!-- <page pageset="old"> -->
<div class="niveau">
	<div class="niveau">
	    <bookmark title="Chapitre 1" level="1" ></bookmark><h4>I. KETERANGAN KESEHATAN</h4>
	    <div class="niveau">
	    	<div class="niveau">
		    	<table>
			        <tr>
			            <td>Nama Lengkap</td>
			            <td>: &nbsp;&nbsp;&nbsp;</td>
			            <td><?=$data['nama_lengkap'];?></td>
			        </tr>

			        <tr>
				         <td>Nama Panggilan</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['nama_panggilan'];?></td>
			        </tr>

			        <tr>
			             <td>Tempat Lahir</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['tempat_lahir'];?></td>
			        </tr>

			        <tr>
			             <td>Tangggal Lahir</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['tgl_lahir'];?></td>
			        </tr>

			        <tr>
			             <td>Jenis Kelamin</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['jenis_kelamin'];?></td>
			        </tr>

			        <tr>
			             <td>Agama</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['agama'];?></td>
			        </tr>

			        <tr>
			             <td>Alamat Pontianak</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['alamat_ptk'];?></td>
			        </tr>

			        <tr>
			             <td>Kelurahan</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['kelurahan'];?></td>
			        </tr>

			        <tr>
			             <td>Kecamatan</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['kecamatan'];?></td>
			        </tr>

			        <tr>
			             <td>Kota/Kabupaten</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['kota_kab'];?></td>
			        </tr>

			        <tr>
			             <td>Provinsi</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['provinsi'];?></td>
			        </tr>
			        
			        <tr>
			             <td>Nomor Telp/HP</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['telp_hp'];?></td>
			        </tr>

			        <tr>
			             <td>Anak Ke</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['anak_ke'];?></td>
			        </tr>

			        <tr>
			             <td>Jumlah Saudara</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['jumlah_saudara'];?></td>
			        </tr>

			        <tr>
			             <td>Tinggal Dengan</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['tinggal_dgn'];?></td>
			        </tr>

			        <tr>
			             <td>Bahasa Yang Digunakan Sehari-hari &nbsp;&nbsp;&nbsp;</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['bahasa'];?></td>
			        </tr>

			        <tr>
			             <td>Jarak Tempat Tinggal Kesekolah</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['jarak_tempuh'];?></td>
			        </tr>

			        <tr>
			             <td>Kesekolah Menggunakan</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['kesekolah_mnggkn'];?></td>
			        </tr>

			        <tr>
			             <td>Ekstra Yang Diminati</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['ekstra_diminati'];?></td>
			        </tr>
		    	</table>
		    </div>
	    </div>
	</div>
</div>

<div class="niveau">
	<div class="niveau">
	    <bookmark title="Chapitre 1" level="1" ></bookmark><h4>II. KETERANGAN KESEHATAN</h4>
	    <div class="niveau">
	    	<div class="niveau">
		    	<table>
		    		<tr>
			             <td>Golongan Darah</td>
			             <td> : &nbsp;&nbsp;&nbsp;</td>
			             <td> <?=$data['gol_darah'];?></td>
			        </tr>

			        <tr>
				         <td>Penyakit Yang Pernah Diderita &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				         <td> : &nbsp;&nbsp;&nbsp;</td>
				         <td> <?=$data['penyakit'];?></td>
			        </tr>

			        <tr>
				         <td>Tinggi Badan</td>
				         <td> : &nbsp;&nbsp;&nbsp;</td>
				         <td> <?=$data['tinggi_badan'];?></td>
			        </tr>
			        
			        <tr>
				         <td>Berat Badan</td>
				         <td> : &nbsp;&nbsp;&nbsp;</td>
				         <td> <?=$data['berat_badan'];?></td>
			        </tr>
		    	</table>
		    </div>
	    </div>
	</div>
</div>

<div class="niveau">
	<div class="niveau">
	    <bookmark title="Chapitre 1" level="1" ></bookmark><h4>III. KETERANGAN SEKOLAH SEBELUMNYA</h4>
	    <div class="niveau">
	    	<div class="niveau">
		    	<table>
		    		<tr>
				         <td>Asal Sekolah</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['asal_sekolah'];?></td>
			        </tr>

			        <tr>
				         <td>Nama Sekolah</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['nama_sekolah'];?></td>
			        </tr>

			        <tr>
				         <td>Tanggal STTB/SKHU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['tgl_skhu'];?></td>
			        </tr>

			        <tr>
				         <td>Nomor STTB/SKHU</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['nomor_skhu'];?></td>
			        </tr>

			        <tr>
				         <td>Jumlah Nilai</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['jumlah_nilai'];?></td>
			        </tr>
			        
			        <tr>
				         <td>Lama Belajar</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['lama_belajar'];?></td>
			        </tr>

			        <tr>
				         <td>NISN</td>
				         <td>: &nbsp;&nbsp;&nbsp;</td>
				         <td><?=$data['nisn'];?></td>
			        </tr>
		    	</table>
		    </div>
	    </div>
	</div>
</div>

<!-- </page> -->

<page pageset="old">
		<br>
	<div class="niveau">
		<div class="niveau">
		    <bookmark title="Chapitre 1" level="1" ></bookmark><h4>IV. KETERANGAN SEKOLAH SEBELUMNYA</h4>
		    <div class="niveau">
		    	<div class="niveau">
			    	<table>
			    		<tr>
					         <td>Nama Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['nama_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Nama Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['nama_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Tempat Tanggal Lahir Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['ttl_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Tempat Tanggal Lahir Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['ttl_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Agama Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['agama_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Agama Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['agama_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Pendidikan Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['pendidikan_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Pendidikan Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['pendidikan_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Pekerjaan Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['pekerjaan_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Pekerjaan Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['pekerjaan_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Penghasilan Ayah /Per Bulan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['penghasilan_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Penghasilan Ibu /Per Bulan</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['penghasilan_ibu'];?></td>
				        </tr>

				        <tr>
					         <td>Alamat </td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['alamat_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Kelurahan</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['kelurahan_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Kecamatan</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['kecamatan_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Kota/Kabupaten</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['kota_kab_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Provinsi</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['provinsi_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Nomor Telp/Hp</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['telp_hp_ortu'];?></td>
				        </tr>

				        <tr>
					         <td>Keterangan Ayah</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['ket_ayah'];?></td>
				        </tr>

				        <tr>
					         <td>Keterangan Ibu</td>
					         <td>: &nbsp;&nbsp;&nbsp;</td>
					         <td><?=$data['ket_ibu'];?></td>
				        </tr>

			    	</table>
			    </div>
		    </div>
		</div>
	</div>
		<br><br><br><br><br><br><br>

	<div class="niveau">
		<div class="niveau">
			<div class="niveau">	
				<div class="niveau">
					<table width="100%">
						<tr>
							<td width="70%">Orang Tua / Wali  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
								<br>
								<br>
								<br>
								<br>
								<?=$data['nama_ayah'];?><br>
							</td>
							<td width="30%">Pontianak,  …………….. 2018<br>
								Pendaftar,<br>
								<br>
								<br>
								<br>
								<?=$data['nama_lengkap'];?><br>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

</page>


    <?php
    
 }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}

$html = ob_get_contents();
$isi = ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Data_Pendaftaran_MTs.pdf', 'D');
?>