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
								SEKOLAH MENENGAH ATAS AL-ISHLAH PONTIANAK</b><br>
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
<p style="line-height: 5em;""><h4 align="center">SURAT PERNYATAAN SISWA</h4></p>

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

<!-- <page pageset="old"> -->
<div class="niveau">
	<div class="niveau">
	    <p>Yang Bertanda Tangan di Bawah ini , </p>
	    <div class="niveau">
	    	<div class="niveau">
		    	<table>
			        <tr>
			            <td>1. Nama Lengkap</td>
			            <td>: &nbsp;&nbsp;&nbsp;</td>
			            <td><?=$data['nama_lengkap'];?></td>
			        </tr>

			       	<tr>
			             <td>2. Tempat & Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['tempat_lahir'];?>,<?=$data['tgl_lahir'];?></td>
			        </tr>

			        <tr>
			             <td>3. Jenis Kelamin</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['jenis_kelamin'];?></td>
			        </tr>

			        <tr>
			             <td>4. Agama</td>
			             <td>: &nbsp;&nbsp;&nbsp;</td>
			             <td><?=$data['agama'];?></td>
			        </tr>

			        <tr>
					      <td>5. Nama Ayah</td>
					      <td>: &nbsp;&nbsp;&nbsp;</td>
					      <td><?=$data['nama_ayah'];?></td>
				    </tr>

				    <tr>
					      <td>6. Nama Ibu</td>
					      <td>: &nbsp;&nbsp;&nbsp;</td>
					      <td><?=$data['nama_ibu'];?></td>
				    </tr>

				    <tr>
					      <td>7. Alamat Orang Tua</td>
					      <td>: &nbsp;&nbsp;&nbsp;</td>
					      <td><?=$data['alamat_ortu'];?></td>
				    </tr>
			       
		    	</table>
		    </div>
	    </div>
	</div>
</div>

<div class="niveau">
	<div class="niveau">
	    <p><b>MENYATAKAN</b><br>
	    Bahwa Saya Menjadi Siswa di sini :</p>
	    <div class="niveau">
	    	<div class="niveau">

		    		<p>1. Akan belajar dengan sungguh-sungguh dan penuh semangat <br>
		    		   2. Akan menjaga nama baik diri sendiri, keluarga, sekolah dan agama <br>
		    		   3. Sanggup mentaati seluruh aturan dan tata tertib yang dikeluarkn sekolah <br>
		    		   4. Sanggup mengikuti seluruh pelajaran baik yang dilaksanakan pagi maupun siang hari <br>
		    		   5. Akan mengikuti pelajaran ekstra kurikuler yang dilaksanakan oleh sekolah</p>

		    </div>
	    </div>
	    <p>Apabila saya tidak mematuhi ketentuan / tata tertib yang dikeluarkan oleh sekolah, maka saya sanggup menerima <br>
	    	sanksi yang dikeluarkan oleh sekolah 

	    	<br><br><br><br>
	    Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan penuh tanggung jawab serta diketahui / <br>
	    disetujui oleh orang tua / wali saya.

	    </p>
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

    <?php
    
 }else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}

$html = ob_get_contents();
$isi = ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Surat_Pernyataan_SMA.pdf', 'D');
?>