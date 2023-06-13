<?php
	function isBot() {
		if(isset($_SERVER['HTTP_USER_AGENT'])){
			if ( preg_match('/abacho|accona|AddThis|AdsBot|ahoy|AhrefsBot|AISearchBot|alexa|altavista|anthill|appie|applebot|arale|araneo|AraybOt|ariadne|arks|aspseek|ATN_Worldwide|Atomz|baiduspider|baidu|bbot|bingbot|bing|Bjaaland|BlackWidow|BotLink|bot|boxseabot|bspider|calif|CCBot|ChinaClaw|christcrawler|CMC\/0\.01|combine|confuzzledbot|contaxe|CoolBot|cosmos|crawler|crawlpaper|crawl|curl|cusco|cyberspyder|cydralspider|dataprovider|digger|DIIbot|DotBot|downloadexpress|DragonBot|DuckDuckBot|dwcp|EasouSpider|ebiness|ecollector|elfinbot|esculapio|ESI|esther|eStyle|Ezooms|facebookexternalhit|facebook|facebot|fastcrawler|FatBot|FDSE|FELIX IDE|fetch|fido|find|Firefly|fouineur|Freecrawl|froogle|gammaSpider|gazz|gcreep|geona|Getterrobo-Plus|get|girafabot|golem|googlebot|\-google|grabber|GrabNet|griffon|Gromit|gulliver|gulper|hambot|havIndex|hotwired|htdig|HTTrack|ia_archiver|iajabot|IDBot|Informant|InfoSeek|InfoSpiders|INGRID\/0\.1|inktomi|inspectorwww|Internet Cruiser Robot|irobot|Iron33|JBot|jcrawler|Jeeves|jobo|KDD\-Explorer|KIT\-Fireball|ko_yappo_robot|label\-grabber|larbin|legs|libwww-perl|linkedin|Linkidator|linkwalker|Lockon|logo_gif_crawler|Lycos|m2e|majesticsEO|marvin|mattie|mediafox|mediapartners|MerzScope|MindCrawler|MJ12bot|mod_pagespeed|moget|Motor|msnbot|muncher|muninn|MuscatFerret|MwdSearch|NationalDirectory|naverbot|NEC\-MeshExplorer|NetcraftSurveyAgent|NetScoop|NetSeer|newscan\-online|nil|none|Nutch|ObjectsSearch|Occam|openstat.ru\/Bot|packrat|pageboy|ParaSite|patric|pegasus|perlcrawler|phpdig|piltdownman|Pimptrain|pingdom|pinterest|pjspider|PlumtreeWebAccessor|PortalBSpider|psbot|rambler|Raven|RHCS|RixBot|roadrunner|Robbie|robi|RoboCrawl|robofox|Scooter|Scrubby|Search\-AU|searchprocess|search|SemrushBot|Senrigan|seznambot|Shagseeker|sharp\-info\-agent|sift|SimBot|Site Valet|SiteSucker|skymob|SLCrawler\/2\.0|slurp|snooper|solbot|speedy|spider_monkey|SpiderBot\/1\.0|spiderline|spider|suke|tach_bw|TechBOT|TechnoratiSnoop|templeton|teoma|titin|topiclink|twitterbot|twitter|UdmSearch|Ukonline|UnwindFetchor|URL_Spider_SQL|urlck|urlresolver|Valkyrie libwww\-perl|verticrawl|Victoria|void\-bot|Voyager|VWbot_K|wapspider|WebBandit\/1\.0|webcatcher|WebCopier|WebFindBot|WebLeacher|WebMechanic|WebMoose|webquest|webreaper|webspider|webs|WebWalker|WebZip|wget|whowhere|winona|wlm|WOLP|woriobot|WWWC|XGET|xing|yahoo|YandexBot|YandexMobileBot|yandex|yeti|Zeus/i', $_SERVER['HTTP_USER_AGENT'])) {
				return true; 
			}
		}
		return false;
	}
	if(isBot()){
	   exit;
	}	
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>RSUMM</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css">  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="./" style="color:red">
				<marquee>	PENDAFTARAN ONLINE RSU MUHAMMADIYAH METRO </marquee></a> 
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="c1 "><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<li class="c3"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pasien Lama</a></li>
					<li class="c4"><a href="pendaftaran_new.php"><span class="fa fa-user"></span> Pasien Baru</a></li>
					<!--<li class="c7"><a href="admin"><span class="fa fa-lock"></span> Login</a></li>-->
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>


  <div class="container">
  <ol class='breadcrumb'>
                   
</ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-12'>
           <script type="text/javascript">
    $(document).ready(function(){
        
    $("body").on("click", "#tambah",function(e){
        $('#area-loading').html(''); 
        $("#kdpendaftar").removeAttr('readonly')
        $('#kdpendaftar').val('');
        $('#nama').val('');
        $('#jenkel').val('');
        $('#kdagama').val('');
        $('#tpt_lahir').val('');
        $('#tgl_lahir').val('');
        $('#alamat').val('');
        $('#statusanak').val('');
        $('#nmayah').val('');
        $('#kdpendidikana').val('');
        $('#kdpekerjaana').val('');
        $('#penghasilanayah').val('');
        $('#nmibu').val('');
        $('#kdpendidikani').val('');
        $('#kdpekerjaani').val('');
        $('#nohp').val('');
        $('#kdtk').val('');
        $('#statusdaftar').val('');

        $(".edit-dialog").modal('toggle');
    })
  $("body").on("click", ".hapus", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = ".data-0-"+clickedID[1];
                $(".kdpendaftar").html($(DbNumberID).html());
                $('.dialog-hapus').modal('toggle');
                $("#konf").attr("href","hapusdaftar.php?kdpendaftar="+$(DbNumberID).html());
            });

    $("body").on("click", ".edit", function(e) {
                var clickedID = this.id.split('-'); //Split string (Split works as PHP explode)
                var DbNumberID = clickedID[1];
                var kelas1 = ".data-0-"+DbNumberID;
                var kelas2 = ".data-1-"+DbNumberID;
                var kelas3 = ".data-2-"+DbNumberID;
                var kelas4 = ".data-3-"+DbNumberID;
                var kelas5 = ".data-4-"+DbNumberID;
                var kelas6 = ".data-5-"+DbNumberID;
                var kelas7 = ".data-6-"+DbNumberID;
                var kelas8 = ".data-7-"+DbNumberID;
                var kelas9 = ".data-8-"+DbNumberID;
                var kelas10 = ".data-9-"+DbNumberID;
                var kelas11 = ".data-10-"+DbNumberID;
                var kelas12 = ".data-11-"+DbNumberID;
                var kelas13 = ".data-12-"+DbNumberID;
                var kelas14 = ".data-13-"+DbNumberID;
                var kelas15 = ".data-14-"+DbNumberID;
                var kelas16 = ".data-15-"+DbNumberID;
                var kelas17 = ".data-16-"+DbNumberID;
                var kelas18 = ".data-17-"+DbNumberID;

                var kdpendaftar = $(kelas1).html();
                var nama = $(kelas2).html();
                var jenkel = $(kelas3).html();
                var kdagama = $(kelas4).html();
                var tpt_lahir = $(kelas5).html();
                var tgl_lahir = $(kelas6).html();
                var alamat = $(kelas7).html();
                var statusanak = $(kelas8).html();
                var nmayah = $(kelas9).html();
                var kdpendidikana = $(kelas10).html();
                var kdpekerjaana = $(kelas11).html();
                var penghasilanayah = $(kelas12).html();
                var nmibu = $(kelas13).html();
                var kdpendidikani = $(kelas14).html();
                var kdpekerjaani = $(kelas15).html();
                var nohp = $(kelas16).html();
                var kdtk = $(kelas17).html();
                var statusdaftar = $(kelas18).html();
                $("#kdpendaftar").val(kdpendaftar);
                $("#nama").val(nama);
                $("#kdpendaftar").attr("readonly","true");
                $('.edit-dialog').modal('toggle');
            });

    })
</script>

 
		<?php
		//error_reporting(0);
		session_start();
		if($_SESSION['code'] != $_POST['kode']){
			//jika code captcha salah mmaka akan kembali ke halaman sebelumnya
			//echo $_SESSION['code']. '/' .$_POST['kode'];
			echo "<script>alert('captcha yang anda masukkan salah');window.history.go(-1);</script>";
		}else{			  		
		function noHpPlus($nohp) {
			// kadang ada penulisan no hp 0811 239 345
			$nohp = str_replace(" ","",$nohp);
			// kadang ada penulisan no hp (0274) 778787
			$nohp = str_replace("(","",$nohp);
			// kadang ada penulisan no hp (0274) 778787
			$nohp = str_replace(")","",$nohp);
			// kadang ada penulisan no hp 0811.239.345
			$nohp = str_replace(".","",$nohp);

			// cek apakah no hp mengandung karakter + dan 0-9
			if(!preg_match('/[^+0-9]/',trim($nohp))){
				// cek apakah no hp karakter 1-3 adalah +62
				if(substr(trim($nohp), 0, 3)=='+62'){
					$hp = trim($nohp);
				}
				// cek apakah no hp karakter 1 adalah 0
				elseif(substr(trim($nohp), 0, 1)=='0'){
					$hp = '+62'.substr(trim($nohp), 1);
				}
			}
			return $hp;
		}
		include "koneksi.php";
			if(isset($_POST['nomr']) && isset($_POST['nohp'])){
				$nomr=addslashes($_POST['nomr']);
				$dokter=addslashes($_POST['dokter']);
				$jenis=addslashes($_POST['jenis']);
				date_default_timezone_set('Asia/Jakarta');
				$tgl=date('Y-m-d', strtotime($date. ' + 1 days'));
				$tahun=date('y', strtotime($date. ' + 1 days'));
				$jam=date("Y-m-d H:i:s");
				$sekarang = strtotime(date('H:i:s'));
				$pagi = strtotime('08:00:00');
				$malam = strtotime('20:00:00');								
				$nama=addslashes($_POST['nama']);
				function valid_email($email) {
						return !!filter_var($email, FILTER_VALIDATE_EMAIL);
					}		
				$alamat=addslashes($_POST['alamat']);
				$nohp=addslashes($_POST['nohp']);                                
				$nomor='1';		
				$status='WEB';
				$st='1';
							
			  $namahari = date('l', strtotime($tgl));
			  
			  $tglB=date('Y-m-d', strtotime($date. ' + 1 days'));				       
				$daftar_hari = array(
				 'Sunday' => 'Ahad',
				 'Monday' => 'Senin',
				 'Tuesday' => 'Selasa',
				 'Wednesday' => 'Rabu',
				 'Thursday' => 'Kamis',
				 'Friday' => 'Jumat',
				 'Saturday' => 'Sabtu'
				);
				$date=$tglB;
				$namahariB = date('l', strtotime($date));
				
				function tgl_indo($tanggal){
					$bulan = array (
						1 =>   'Januari',
						'Februari',
						'Maret',
						'April',
						'Mei',
						'Juni',
						'Juli',
						'Agustus',
						'September',
						'Oktober',
						'November',
						'Desember'
					);
					$pecahkan = explode('-', $tanggal);		
					// variabel pecahkan 0 = tanggal
					// variabel pecahkan 1 = bulan
					// variabel pecahkan 2 = tahun
					return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
				}	
			  $hari = $daftar_hari[$namahariB].', '.tgl_indo(date('Y-m-d', strtotime($date1. ' + 1 days'))); 
			  
				if($sekarang >= $pagi && $sekarang <= $malam)
				{				  
				  /*if( valid_email($alamat) ) 
				  {	*/	
					$sql = "SELECT No_MR FROM dbo.REGISTER_PASIEN P WHERE P.No_MR = '" . $nomr . "'";
					
					$results = sqlsrv_query($conn, $sql);
					$rowCount = sqlsrv_has_rows( $results );
					
					if ($rowCount === false)
						echo "<script>alert('No. MR Pasien belum terdaftar di RSUMM!');history.go(-1);</script>";
					else
					{
					  $sql2 = "SELECT No_MR FROM dbo.PENDAFTARAN P WHERE P.No_MR = '" . $nomr . "' AND P.Status = '" . $st . "'";
					
					  $results2 = sqlsrv_query($conn, $sql2);
					  $rowCount2 = sqlsrv_has_rows( $results2 );
					
					  if ($rowCount2 === true)
					  {
						echo "<script>alert('Mohon maaf, transaksi pendaftaran lama masih aktif di RSUMM, untuk mendaftar ulang silahkan hubungi bagian informasi, Telp.(0725)49490 (24 jam) / WhatsApp di 08117249490 (jam kerja). Terimakasih');history.go(-1);</script>";
						//header("location:./pendaftaran.php");
					  }
					  else			  
					  {					  
					     
						if ($namahari == 'Sunday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Ahad='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						} elseif ($namahari == 'Monday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Senin='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						} elseif ($namahari == 'Tuesday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Selasa='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						} elseif ($namahari == 'Wednesday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Rabu='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						} elseif ($namahari == 'Thursday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Kamis='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						} elseif ($namahari == 'Friday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Jumat='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";										
						} elseif ($namahari == 'Saturday') {
							$stmt = "select a.Kode_Dokter,b.Nama_Dokter,a.Jam from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter where b.Kode_Dokter='" . $dokter . "' AND a.Sabtu='1'
							AND (a.TglAwal > '" . $tgl . "' OR a.TglAkhir < '" . $tgl . "')";					
						}									 						
						  $resultspra = sqlsrv_query($conn, $stmt);
						  $rowCountpra = sqlsrv_has_rows( $resultspra );
						  $rowpra = sqlsrv_fetch_array( $resultspra );
						  if ($rowCountpra === false)
						  {
							echo "<script>alert('Maaf, Dokter Tidak Praktek.');history.go(-1);</script>";
							/*$sqldok = "SELECT Praktek FROM DOKTER_SMSGATEWAY where Kode_Dokter='" . $dokter . "'";
							$resultsdok = sqlsrv_query($conn, $sqldok);
							$rowCountdok = sqlsrv_has_rows( $resultsdok );
							$rowdok = sqlsrv_fetch_array( $resultsdok );
							if ($rowCountdok === true){							
							echo "<script>alert('$rowdok[Praktek]');history.go(-1);</script>";}*/
							//echo $rowdok[Praktek];
						  }
						  else			  
						  {					  
							  // Cek Antrian
							  $sqlant = "SELECT A.Nomor,B.Nama_Pasien,C.Nama_Dokter FROM ANTRIAN AS A INNER JOIN REGISTER_PASIEN AS B ON A.No_MR=B.No_MR
							  			INNER JOIN DOKTER AS C ON A.Dokter = C.Kode_Dokter 
 									    where A.tanggal = '" . $tgl ."' AND A.No_MR = '" . $nomr . "' AND A.Dokter = '" . $dokter . "'";
																
							  $resultsant = sqlsrv_query($conn, $sqlant);
							  $rowCountant = sqlsrv_has_rows( $resultsant );
							  $rowant = sqlsrv_fetch_array( $resultsant );
							  
							  if ($rowCountant === true)
							  {
								echo "<script>alert('Maaf, $rowant[Nama_Pasien] sudah mendaftar di praktek $rowant[Nama_Dokter] dengan No.Antrian : $rowant[Nomor]');history.go(-1);</script>";
							  }
							  else			  
							  {									  
							  // Cek no HP
							  $sqlhp = "SELECT A.No_Ponsel FROM ANTRIAN AS A 
 									    where A.tanggal = '" . $tgl ."' AND A.No_Ponsel = '" . $nohp . "'";
																
							  $resultshp = sqlsrv_query($conn, $sqlhp);
							  $rowCounthp = sqlsrv_has_rows( $resultshp );
							  $rowhp = sqlsrv_fetch_array( $resultshp );
							  
							  if ($rowCounthp === true)
							  {
								echo "<script>alert('No. Ponsel hanya bisa mendaftar untuk satu Antrian');history.go(-1);</script>";
							  }
							  else			  
							  {					  					  			  					  
								// Cek Nomor Antrian
								$sqlno = "SELECT TOP 1 Nomor,Tanggal FROM ANTRIAN 
									 where Tanggal = '" . $tgl . "' AND Dokter='" . $dokter . "' ORDER BY Nomor DESC";

								$resno = sqlsrv_query($conn, $sqlno);
								$rowCountno = sqlsrv_has_rows( $resno );
								$rowno = sqlsrv_fetch_array( $resno );
								
								//$sLastNo = intval($rowno[Nomor]) + 1;
								if ($rowCountno === true) {
								   $sLastNo = intval($rowno[Nomor]) + 1;}
								   //$sLastNo;}
								else {
								   $sLastNo = "1";
								}									
								
							    $sqljad = "SELECT Kuota,Jadwal FROM DOKTER_SMSGATEWAY 
										 where Kode_Dokter='" . $dokter . "'";																
							    $resultsjad = sqlsrv_query($conn, $sqljad);
							    $rowjad = sqlsrv_fetch_array( $resultsjad );
							    $kuota = $rowjad[Kuota];
							    $jadwal = $rowjad[Jadwal];								
								if ($sLastNo > $kuota) {
									echo "<script>alert('Maaf, Kuota Pendaftaran Sudah Penuh. Silahkan Daftar Kembali pada Jadwal Praktek berikutnya');history.go(-1);</script>";									
								} else {	

										$jaminan=$jenis;
								
								
				function insert_antrian($nohp,  $tgl, $jam,$jaminan,$status,$CaraBayar,$KodeRekan, $nomr, $dokter,$jenis,$tahun){							
						$ServerName = "WIN-MKL0M1T7GNG";
						$connectionInfo = array('Database'=>'DB_RSMM');
						$conn = sqlsrv_connect($ServerName,$connectionInfo);
						

						sqlsrv_begin_transaction($conn);
							$sqljad = "SELECT Kuota FROM DOKTER_SMSGATEWAY   where Kode_Dokter='$dokter'";                                                                             
														$resultsjad = sqlsrv_query($conn, $sqljad);
														$rowjad = sqlsrv_fetch_array( $resultsjad );
														$kuota = $rowjad['Kuota'];

							$sqlno = "SELECT count(Nomor) as Nomor  FROM ANTRIAN     where Tanggal = '$tgl' AND Dokter='$dokter' ";
														$resultsno = sqlsrv_query($conn, $sqlno);
														$rowno = sqlsrv_fetch_array( $resultsno );
														$nolast = $rowno[Nomor]+1;   
														$sLastNo=$nolast;

														$params1 = array(  
															array($nohp, null),  
															array($nolast, null),  
															array($nomr, null),  
															array($tgl, null),  
															array($jam, null),  
															array($dokter, null),  
															array($jaminan, null),  											   
															array($status, null)
														);  

							$query="INSERT INTO dbo.ANTRIAN(No_Ponsel,Nomor,No_MR,Tanggal,Jam,Dokter,Jenis,Status) VALUES(?,?,?,?,?,?,?,?)"; 
							//  $params1 = array('MESIN',$nolast,'112112','2022-05-21','2022-05-21','128','UMUM','ANTRI');  
									$stmt1 = sqlsrv_query($conn, $query, $params1);  
									if( $stmt1 === false )  
									{  
										 echo "Error in execution of INSERT.\n";  
										 die( print_r( sqlsrv_errors(), true));  
									}  
								


							   if ($jenis=="BPJS") {
									  $KodeRekan ='032';
									  $CaraBayar = '1'; 
									} else {
									  $KodeRekan ='0001';
									  $CaraBayar = '3';
								    }

							 

								$sqlreg = "SELECT No_Reg FROM PENDAFTARAN WHERE LEFT(No_Reg,2) = '" . $tahun . "' ORDER BY No_Reg DESC";
								$resreg = sqlsrv_query($conn, $sqlreg);
								$rowreg = sqlsrv_fetch_array( $resreg );

								$sLastKode = intval(substr($rowreg[No_Reg], 4, 8)); // ambil 8 digit terakhir
								$sLastKode = intval($sLastKode) + 1; // konversi ke integer, lalu tambahkan satu
								$sNextKode = $tahun .'-'. sprintf('%08s', $sLastKode); // format hasilnya dan tambahkan prefix
								if (strlen($sNextKode) > 8) {
							 	$sNextKode;}
								else { // jika belum ada, gunakan kode yang pertama
								$sNextKode = "00000001";
								}		



									
								$qdaf="INSERT INTO dbo.PENDAFTARAN(No_Reg,Tanggal,Jam,Tgl_Keluar,Kode_Asal,Kode_Masuk,Kode_Datang,Kode_Kondisi,Kode_Bayar,Kode_Keluar,
								Kode_Ruang,KodeRekanan,No_MR,No_Kartu,Referensi,Medis,Kode_Dokter,Status,Aksi,Cetak,NamaUser) 
								VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";								
								$paramsdaf = array(  
											array($sNextKode, null),  
											array($tgl, null),  
											array($jam, null),  
											array($tgl, null),  
											array('1', null),  
											array('2', null),  
											array('2', null),  
											array('1', null),  
											array($CaraBayar, null),  
											array('0', null), 
											array('', null),  
											array($KodeRekan, null),  									   
											array($nomr, null),  
											array('-', null),
											array('DATANG SENDIRI', null),
											array('RAWAT JALAN', null),
											array($dokter, null),
											array('1', null),
											array('0', null),
											array('0', null),
											array('SA', null)  
										);  
													
							 
								$stmtdaf = sqlsrv_query($conn, $qdaf, $paramsdaf);  
									if( $stmtdaf === false )  
									{  
										 echo "Error in execution of INSERT.\n";  
										 die( print_r( sqlsrv_errors(), true));  
									}  		


								$sqlcek = "SELECT count(*) as Total FROM ANTRIAN where Tanggal = '$tgl' AND Dokter='$dokter' and Nomor=$nolast ";
							$resultscek = sqlsrv_query($conn, $sqlcek);
														$rowcek = sqlsrv_fetch_array( $resultscek );
														$total = $rowcek['Total'];       

									$sqlcek2 = "SELECT count(No_Reg) as Total FROM PENDAFTARAN where No_Reg='$sNextKode' ";
									$resultscek2 = sqlsrv_query($conn, $sqlcek2);
																$rowcek2 = sqlsrv_fetch_array( $resultscek2 );
																$total2 = $rowcek2['Total'];

						
						if($total==1 && $total2==1 && $nolast<=$kuota){
							sqlsrv_commit($conn); return 'True';
						}
						else{
							   sqlsrv_rollback($conn); 
								        return 'Failed';
						}


						// 	if($total>1){  
						// 		        sqlsrv_rollback($conn); 
						// 		        return 'Failed';
						// 	 	         // insert_antrian($nohp, $nomr, $tgl, $jam, $dokter, $jaminan,$status);
						// 		   }   
						// else 	if($total2>1){  
						// 		        sqlsrv_rollback($conn); 
						// 		        return 'Failed';
						// 	 	         // insert_antrian($nohp, $nomr, $tgl, $jam, $dokter, $jaminan,$status);
						// 		   }    
						// 		else   	if($total<1){  
						// 		        sqlsrv_rollback($conn); 
						// 		        return 'Failed';
						// 	 	         // insert_antrian($nohp, $nomr, $tgl, $jam, $dokter, $jaminan,$status);
						// 		   }  
						// 		else   	if($total2<1){  
						// 		        sqlsrv_rollback($conn); 
						// 		        return 'Failed';
						// 	 	         // insert_antrian($nohp, $nomr, $tgl, $jam, $dokter, $jaminan,$status);
						// 		   }        
						// 	else if($nolast>$kuota){    
						// 		     sqlsrv_rollback($conn); return 'Full';
						// 	    } 
						// 	else{ sqlsrv_commit($conn); return 'True';}

						}
 


					  
						$a= insert_antrian($nohp,  $tgl, $jam,$jaminan,$status,$CaraBayar,$KodeRekan, $nomr, $dokter,$jenis,$tahun);

						 
						if($a=='Full'){
								echo "<script>alert('Maaf, Kuota Pendaftaran Sudah Penuh. Silahkan Daftar Kembali pada Jadwal Praktek berikutnya');history.go(-1);</script>";
						}
						else if($a=='Failed'){
									echo "<script>alert('Maaf, data tidak tersimpan. Silahkan Daftar Kembali');history.go(-1);</script>";
							}


						else if($a=='True'){

									 
										$queryhasil="SELECT A.Nomor,A.Tanggal, A.NIK,D.Nama_Pasien, B.Nama_Dokter, C.Jam FROM ANTRIAN A, Dokter B, DOKTER_SMSGATEWAY C, REGISTER_PASIEN D
										 WHERE A.Tanggal='".$tgl."' and A.No_MR='".$nomr."' and A.Dokter='".$dokter."' and A.Dokter=B.Kode_Dokter and A.Dokter=C.Kode_Dokter and A.No_MR=D.No_MR ";                                                                                
										$hasila = sqlsrv_query($conn, $queryhasil);
										$hasila = sqlsrv_fetch_array( $hasila );
										$sLastNo = $hasila['Nomor'];
										$Nama_Dokter = $hasila['Nama_Dokter'];
										$jamp = $hasila['Jam'];
										$tgl = $hasila['Tanggal'];
										$nik = $hasila['NIK'];
										$namap = $hasila['Nama_Pasien'];
									


								 
									
									if ($sLastNo <= "20") { 
										$Datang = 'Satu Jam sebelumnya';
									} elseif ($sLastNo > "20" || $sLastNo <= "40") {
										$Datang = 'Setengah Jam sebelumnya'; 
									} elseif ($sLastNo > "40" || $sLastNo <= "60") { 
										$Datang = 'pada Jam mulai praktek'; 
									} elseif ($sLastNo > "60" || $sLastNo <= "80") {
										$Datang = 'Setengah Jam setelah mulai praktek'; 
									} elseif ($sLastNo > "80") {
										$Datang = 'Satu Jam setelah mulai praktek';
									}
										 	?>


								
									   <center>
								      <h3 style="color: red">Nomor Antrian <span class='fa fa-user'></span></h3>
								    </center>

										<!-- alert -->
									<div class="alert alert-warning mt-2 mb-2" role="alert">
									<h2>PEMBERITAHUAN <span style=" color: red";><i class="fas fa-exclamation-triangle"></i></span></h2>
									<h4>1. Nomor Antrian sudah dikirim ke No.WhatsApp Anda</h4>
									<h4>2. Pasien membawa surat kontrol</h4>
									<h4>3. Pasien yang akan melakukan cek laboratorium untuk registrasi ulang ke pendaftaran terlebih dahulu.</h4>
									</div>
									<!-- alert -->

								    <!-- <center>
								     
								    </center> -->
								<table class="table table-striped">
								    <tr>
								        <th width="5%">
								            Nomor Antrian
										</th>      
								        <th>
								            No. MR 
										</th>
								        <th>
											Nama Pasien 		
								        </th>
										<th>
								            Poliklinik</th>
								        <th>
								            Tgl. Datang</th>
								         <th>
								           Jam</th>
								        <th>
								            Jenis</th>			
								        <th>
								        </th>
								    </tr>


										 <tr>
									        <td width="5%">
									            <?php echo $sLastNo;?>
									        </td>     
									        <td>
									            <?php echo $nomr;?>
									        </td>
									        <td>
									            <?php echo $namap;?>
									        </td>
									         <td>
									            <?php echo $Nama_Dokter;?>
									        </td>            
									         <td>
									            <?php echo date_format($tgl, 'd-m-Y');?>			
									        </td>      
									        <td><?php echo $jamp;?>    </td>  		
											<td>
												<?php echo $jenis;?>
											</td>
									             <?php       
												 

												// send WA
												//   if($dokter === 100){
												//   	$pesan = "*Pendaftaran Online RSU Muhammadiyah Metro*" . PHP_EOL . "" . PHP_EOL . "" . PHP_EOL . "*Untuk pasien UMUM Register Ulang Pukul 08.00 - 10.00 WIB di bagian Pendaftaran Rawat Jalan RSUMM.*" . PHP_EOL . "*No.Antrian  : " . trim($sLastNo) . "*" . PHP_EOL . "*NO MR  : " . trim($nomr) . "*" . PHP_EOL . "*Nama Pasien  : " . trim($namap) . "*" . PHP_EOL . "*Tanggal  : " . date_format($tgl, 'd-m-Y') . "*" . PHP_EOL . "*Waktu  : " . trim($jamp) . "*" . PHP_EOL . "*Jaminan  : " . trim($jenis) . "*" . PHP_EOL . "*Dokter  : " . trim($Nama_Dokter) . "*" ;
												//   }else
												  if($jamp === 'UMUM'){
													$pesan = "*Pendaftaran Online RSU Muhammadiyah Metro*" . PHP_EOL . "" . PHP_EOL . "" . PHP_EOL . "*Untuk pasien UMUM Register Ulang Pukul 08.00 - 10.00 WIB di bagian Pendaftaran Rawat Jalan RSUMM.*" . PHP_EOL . "*No.Antrian  : " . trim($sLastNo) . "*" . PHP_EOL . "*NO MR  : " . trim($nomr) . "*" . PHP_EOL . "*Nama Pasien  : " . trim($namap) . "*" . PHP_EOL . "*Tanggal  : " . date_format($tgl, 'd-m-Y') . "*" . PHP_EOL . "*Waktu  : " . trim($jamp) . "*" . PHP_EOL . "*Jaminan  : " . trim($jenis) . "*" . PHP_EOL . "*Dokter  : " . trim($Nama_Dokter) . "*" ;
												  }
												  else{
													$pesan = "*Pendaftaran Online RSU Muhammadiyah Metro*". PHP_EOL . "" . PHP_EOL . "*Untuk pasien BPJS diharapkan Register Ulang " . $Datang . "*" . PHP_EOL . "*di Loket Pendaftaran RSUMM  .*" . PHP_EOL . "" . PHP_EOL . "*No.Antrian  : " . trim($sLastNo) . "*" . PHP_EOL . "*NO MR  : " . trim($nomr) . "*" . PHP_EOL . "*Nama Pasien  : " . trim($namap) . "*" . PHP_EOL . "*Tanggal  : " . date_format($tgl, 'd-m-Y') . "*" . PHP_EOL . "*Waktu  : " . trim($jamp) . "*" . PHP_EOL . "*Jaminan  : " . trim($jenis) . "*" . PHP_EOL . "*Dokter  : " . trim($Nama_Dokter) . "*" ;}

												$curl = curl_init();
												$token = "e0rKeReo5D7ErT2HP44N7hL3IOyHCIAK027h99KqyySWniQsj2HyZeDzhL2LsVp4";
												$data = [
													'phone' => $nohp,
													'message' => $pesan,
												];

												curl_setopt($curl, CURLOPT_HTTPHEADER,
													array(
														"Authorization: $token",
													)
												);
												curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
												curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
												curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
												curl_setopt($curl, CURLOPT_URL, "https://solo.wablas.com/api/send-message");
												curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
												curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
												$result = curl_exec($curl);
												curl_close($curl);								
														
											 
												?>
									        <td>           
											 <?php
									         print "<button onClick=window.location='cetak.php?nomr=$nomr&dokter=$dokter&tgl=$tgl'> Cetak PDF </button>";?>
											 
									      </a></td>
									    </tr>
									    </table> 

									     <br>
									    Untuk pasien BPJS diharapkan Register Ulang 1 jam sebelumnya di di Loket Pendaftaran RSUMM

							    <?php


									}								
								}
							  }
							}
					      } 
					  }    
					}
				  /*} 
				  else 
				  {
					echo "<script>alert('email Not valid!');history.go(-1);</script>";
				  }	*/			
				}
				else
				{
				  echo "<script>alert('Maaf, waktu Pendaftaran dari pukul 08:00 s/d 20:00');history.go(-1);</script>";
				}				  
				/* Free statement and connection resources. 
				sqlsrv_free_stmt($stmt1);  
				sqlsrv_free_stmt($stmt2);  
				sqlsrv_close($conn); */   		 
			  }
		    }
	/*	  }		
	  } else {
		echo "Silahkan coba lagi";
	  }
	}*/	  
		
		// while($result = sqlsrv_fetch_array($qtampil, SQLSRV_FETCH_ASSOC))
		// {
  //   ?>	
  
   <?php
  //       }
    ?>	
                  
      <!--<section class="news-box top-margin"><?php echo $nomr ?></section>-->

    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">

    <div class="col-md-12 col-sm-7"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Hubungi Kami Jika ada Masalah</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Pendaftaran<br>
            <i class="fa fa-phone"></i> (0725) 49490<br>
             <i class="fa fa-envelope-o"></i> pasien.rsumm@gmail.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-pencil"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

				

					<div class="col-md-12 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2018. RSUMM
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
