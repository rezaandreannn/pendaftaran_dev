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
	
include "koneksi.php";
    if(isset($_POST['nomr'])){
		/*$nomr=addslashes($_POST['nomr']);
		$dokter=addslashes($_POST['dokter']);
		$jenis=addslashes($_POST['jenis']);
		date_default_timezone_set('Asia/Jakarta');
		$tgl=date('Y-m-d', strtotime($date. ' + 1 days'));
		$jam=date("Y-m-d H:i:s");
		$nama=addslashes($_POST['nama']);
		function valid_email($email) {
				return !!filter_var($email, FILTER_VALIDATE_EMAIL);
			}		
		$alamat=addslashes($_POST['alamat']);
		$nohp=addslashes($_POST['nohp']);                                
		$nomor='1';		
		$status='ANTRI';
					
		if( valid_email($alamat) ) {		
			$sql = "SELECT No_MR FROM dbo.REGISTER_PASIEN P WHERE P.No_MR = '" . $nomr . "'";
			
			$results = sqlsrv_query($conn, $sql);
			$rowCount = sqlsrv_has_rows( $results );
			
			if ($rowCount === false)
				echo "<script>alert('No. MR Pasien belum terdaftar di RSUMM!');history.go(-1);</script>";
			else
			{
				$query="INSERT INTO dbo.ANTRIAN(No_Ponsel,Nomor,No_MR,Tanggal,Jam,Dokter,Jenis,Status) VALUES(?,?,?,?,?,?,?,?)";								
				$params1 = array(  
							   array($alamat, null),  
							   array($nomor, null),  
							   array($nomr, null),  
							   array($tgl, null),  
							   array($jam, null),  
							   array($dokter, null),  
							   array($jenis, null),  											   
							   array($status, null)  
						   );  
				
	
				$stmt1 = sqlsrv_query($conn, $query, $params1);  
				if( $stmt1 === false )  
				{  
					 echo "Error in execution of INSERT.\n";  
					 die( print_r( sqlsrv_errors(), true));  
				}  
				
				require_once "Mail.php";
				$subject = "Antrian RSUMM";
				$body = "No. Antrian Anda : 1";
				//mail($to, $subject, $body,$headers);
				//ganti baris ini dengan email yang dituju 
				$to = $alamat;
				//ganti dengan emailmu /email resmi website
				$from = "idrismhzz0311@gmail.com";
				$host = "ssl://smtp.gmail.com";
				$port = "465";
				//emailmu untuk login k gmail 
				$username = "idrismhzz0311@gmail.com";
				   
				//passwordmu waktu login gmail
				$password = "MHZZ031178";
				 
				$headers = array('From' => $from, 'To' => $to, 
				'Subject' => $subject);
				$smtp = Mail::factory('smtp', array('host' => $host,
				 'port' => $port, 'auth' => true,
				 'username' => $username, 'password' => $password));
				 
				  $mail = $smtp -> send($to, $headers, $body);
				 
				if (PEAR::isError($mail)) {
				echo("<p> Email Gagal dikirim" . $mail -> getMessage() . "</p>");
				}else{
				header("location:./pengumuman.php");
				}	
				
			} 
		} else {
			echo "<script>alert('email Not valid!');history.go(-1);</script>";
		}				
		/* Free statement and connection resources. 
		sqlsrv_free_stmt($stmt1);  
		sqlsrv_free_stmt($stmt2);  
		sqlsrv_close($conn); */   		 

    }
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
					<li class="c1"><a href="./"><span class="fa fa-home"></span> Home</a></li>
					<!--<li class="c2"><a href="pengumuman.php"><span class="fa fa-users"></span> Pengumuman</a></li>-->
					<li class="c3"><a href="pendaftaran.php"><span class="fa fa-pencil"></span> Pasien Lama</a></li>
					<li class="c4"><a href="pendaftaran_new.php"><span class="fa fa-user"></span> Pasien Baru</a></li>
					<!--<li class="c7"><a href="admin"><span class="fa fa-lock"></span> Login</a></li>-->
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<!--<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Pendaftaran Online RSUMM</h1> <br/>
							<p>Mari Bersama-Sama Memajukan Anak Bangsa dalam Pendidikan</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                <!--</div><!-- .fluid_container -->
		<!--</div>
	</header>-->
	<!-- /Header -->

  <div class="container">
    <div class="row">			
					<div class="col-md-12">
						<div class="grey-box-icon b3">  
							 <h3 class="modal-title" id="myModalLabel">Pendaftaran Pasien Lama yang sudah memiliki No.MR di RSUMM</h3>
							 <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <!--<form action="pengumuman.php" method="post" onsubmit="disableButton()">-->
		<form id="configform" action="pengumuman_dev.php" method="post" onsubmit="disableButton()">
        <table class="table " width="100%">
		<tr>
            <th>Nomor WhatsApp yang Aktif <i class="fas fa-exclamation"></i><br>
            	<small>(<i>mohon isi dengan benar untuk mendapatkan no antrian</i>)</small>
            </th>
            <td>:</td>			
            <td><input id="nohp" name="nohp" placeholder="No. Hp" class="form-control" type="number" required style="color:red" minlength="9" maxlength="13">
            	<small class="text-danger" id="format_nohp">Format No. HP : 08XXXXXXXXXX</small>
            	  <span id="nohp-error" class="text-danger"></span>
            </td>
          </tr>   
          <tr>
            <th>No. MR              </th>
            <td>:</td>			
            <td><input id="nomr" name="nomr" placeholder="No. MR" class="form-control" type="text" required style="color:red"></td>
          </tr>                      
            <tr>
            <th width="25%">Dokter Poliklinik </th>
            <td width="1%"> : </td>
            <td><select  name="dokter"   class="form-control" required style="color:black">
				<option value="" selected>Silahkan pilih dokter...</option>
				<optgroup label="Poli Penyakit Dalam">
					<option value="113">dr. Slamet Widodo, Sp.PD</option>
					<option value="111">dr. Agung B. Prasetyono, Sp.PD., M.Kes</option>
					<option value="140">dr. Toumi Shiddiqi, Sp. PD., M.Kes</option>
				</optgroup>
				<optgroup label="Poli Kebidanan dan Kandungan">
					<option value="121">dr. Trestiawaty, Sp.OG</option>
					<option value="121p">dr. Trestiawaty, Sp.OG (Pagi)</option>
					<option value="133">dr. Surya Andri Antara, Sp.OG</option>
				</optgroup>
				<optgroup label="Poli Bedah Umum">
					<option value="115">dr. Harizon MN, Sp. B</option>
					<option value="132">dr. Tofik Rahmanto, Sp.B, FINACS</option>
					<option value="147">dr. Irfansyah Sp.B</option>
				</optgroup>
				<optgroup label="Poli Anak">
					<option value="117">dr. Diah Astika Rini, Sp.A</option>
				</optgroup>
				<optgroup label="Poli Orthopedi/Tulang">
				<option value="138">dr. Kumbang Nirbhayan, Sp.OT</option>
				<option value="125">dr. Fatah Manovito, Sp. OT</option>
				</optgroup>
				<?php
				/*
				<optgroup label="Poli Saraf">
					<option value="119">dr. Soeradi Soedjarwo, Sp.S</option>
				</optgroup>
				*/
				?>
				<optgroup label="Poli Bedah Saraf">
					<option value="144">dr. Aji Yudho Prabowo, Sp.BS., M.Ked.Klin</option>
				</optgroup>
				<optgroup label="Poli Paru">
					<option value="118">dr. Andreas Infianto, Sp.P</option>
				</optgroup>
				<optgroup label="Poli Mata">
					<option value="148">dr. Andrian Suner, Sp.M</option>
					<option value="156">dr. Muhammad Arfan, Sp.M</option>
				</optgroup>
				<optgroup label="Poli Gigi">
					<option value="128">drg. Hendarsyah, MM</option>
					<option value="146">drg. Mully Herdina Utami</option>
				</optgroup>
				<optgroup label="Poli Bedah Mulut">
					<option value="135">drg. Irsan Kurniawan Sp. BM</option>
				</optgroup>
				<optgroup label="Poli THT">
					<option value="137">dr. Suwardi, Sp.THT-KL</option>
					<option value="139">dr.Hermawan Sutanto, Sp.THT-KL</option>
				</optgroup>
				<optgroup label="Poli Urologi">
					<option value="142">dr. Ikhrizal. Sp.U</option>
				</optgroup>
				<optgroup label="Poli Saraf(Neurologi)">
					<option value="152">dr. Pratiwi Hendro Putri, Sp. N</option>
				</optgroup>
				<optgroup label="Poli Kulit dan Kelamin">
					<option value="141">dr. Azizah Amalia B, Sp. KK</option>
				</optgroup>
				<optgroup label="Fisioterapi/Rehabilitasi Medik">
					<option value="151">dr. Bastianus Alfian, Sp.K.F.R</option>
				</optgroup>
				<optgroup label="Urologi">
					<option value="155">dr. M. Ridhaniar Rahman, Sp.U </option>
				</optgroup>
					<optgroup label="Fisioterapi">
            					<option value="028">Fisioterapi</option>
            				</optgroup>
			 	</optgroup>
					<optgroup label="Dokter Umum">
            					<option value="100">Dokter Umum</option>
            				</optgroup>
				
				<?php 
					/*  
						$query = "select a.Kode_Dokter,b.Nama_Dokter from DOKTER as b inner join DOKTER_SMSGATEWAY as a on a.Kode_Dokter=b.Kode_Dokter";
						$stmt = sqlsrv_query($conn, $query); 
						if( $stmt === false )
						{     echo "Error in statement execution.\n";
						die( print_r( sqlsrv_errors(), true)); }
						while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
							{ echo "<option value='$row[Kode_Dokter]'> $row[Nama_Dokter]</option>"; }
							echo sqlsrv_free_stmt( $stmt); sqlsrv_close( $conn);
					*/
				?>
            </select></td>
          </tr>
            <tr>
              <th>BPJS / UMUM </th>
			  <td width="1%"> : </td>
                <td> <select id="jenis" name="jenis"  class="form-control"  required >
                <option value="">Silahkan Pilih Layanan</option>
                <option value="BPJS">BPJS</option>
                <option value="UMUM">UMUM</option>
                </select></td>			  
            </tr>
                        
            <!--<tr>
                <th width="25%">E-mail</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" placeholder="Alamat E-mail" class="form-control" type="textarea" required style="color:red"></td>
            </tr>-->
			
			<!--<tr>				
				<th width="25%"></th>
                <td width="1%"></td>		
				<td><button type="submit" id="btn-otp" class="btn btn-danger">Request otp</button></td>
			</tr>			
            <tr>
                <th width="25%">No. OTP</th>
                <td width="1%"> : </td>
				<td> <input id="otp" name="otp" placeholder="No. OTP" class="form-control" type="text" required></td>		
            </tr>-->
			
			<tr>				
				<th width="25%"></th>
                <td width="1%"></td>		
				<!--<td><button type="submit" id="btn-otp" class="btn btn-danger">Request otp</button></td>-->
				<td><img src="generate.php" id="capt" alt="gambar" />&nbsp;&nbsp;
				<input type=button class="btn btn-danger" onClick=reload(); value='Reload code'>
				</td>
			</tr>
			
            <tr>
                <th width="25%">Masukkan kode yang ada di gambar</th>
                <td width="1%"> : </td>
				<!--<td> <input id="otp" name="otp" placeholder="No. OTP" class="form-control" type="text" required></td>		-->
				<td>
                    <input name="kode" value="" class="form-control" required placeholder="kode captcha" maxlength="5"/>
				</td>				
            </tr>
			
            <tr></tr>

            <input type="hidden" name="statusdaftar" value="tahap seleksi">
        </table>
        Keterangan : <br>
		*) Pendaftaran Pasien Lama dikhususkan untuk Pasien Lama.<br>
     	*) No MR diisi bagi pasien lama atau yang sudah terdaftar di RSUMM.<br>
		*) Harap cantumkan Nomor WhatsApp yang aktif untuk menerima pemberitahuan.<br>
        <!--*) Untuk pasien baru tidak perlu memasukkan No. MR <br> -->       
      
		<div class="modal-footer">
		<button type="submit" id="simpan" form="configform" name="simpan" class="btn btn-primary">Simpan</button>
	  </div><!--grey box -->
	  
        </form>
	  
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">     
    </section>
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
            <i class="fa fa-phone"></i> Telepone : (0725) 49490 (24 jam)<br>
			<i class="fa fa-phone"></i> WhatsApp : 08117249490 (Jam Kerja)<br>
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
	<script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
	
	<script type="text/javascript">
	function reload()
	{
	img = document.getElementById("capt");
	img.src="generate.php?rand_number=" + Math.random();
	}
	</script> 	

	<script>
    var inputNoHP = document.getElementById("nohp");
    var errorSpan = document.getElementById("nohp-error");
    var formatHp = document.getElementById("format_nohp");
    inputNoHP.addEventListener("input", function() {
       var minLength = 9;
        var maxLength = 13;
        var currentValue = inputNoHP.value;
        if (currentValue.trim() === "") {
            inputNoHP.setCustomValidity("Nomor HP tidak boleh kosong");
            errorSpan.textContent = "No HP tidak boleh kosong";
            formatHp.textContent = "";
        }  else if (!currentValue.startsWith("08")) {
	        inputNoHP.setCustomValidity("Nomor HP harus diawali dengan 08");
	        errorSpan.textContent = "Nomor HP harus diawali dengan 08";
	        formatHp.textContent = "";
	        inputNoHP.style.color = "red";
        } else if (currentValue.length < minLength) {
            inputNoHP.setCustomValidity("Nomor HP harus memiliki minimal 9 angka");
            errorSpan.textContent = "Nomor HP harus memiliki minimal 9 angka";
            formatHp.textContent = "";
              inputNoHP.style.color = "red";
        } else if (currentValue.length > maxLength) {
            inputNoHP.setCustomValidity("Nomor HP tidak boleh lebih dari 13 angka");
            errorSpan.textContent = "Nomor HP tidak boleh lebih dari 13 angka";
            formatHp.textContent = "";
             inputNoHP.style.color = "red";
        } else {
            inputNoHP.setCustomValidity(""); // Menghapus pesan error jika panjangnya memenuhi syarat
            errorSpan.textContent = "";
             inputNoHP.style.color = "black";
            formatHp.textContent = "Format No. HP: 08XXXXXXXXXX";
        }
    });
	</script>

	
    <script>
		function disableButton() {
			var simpan = document.getElementById('simpan');
			simpan.disabled = true;
			simpan.innerText = 'Proses...'
		}	
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
		
		$("#btn-otp").click(function(){
		$.ajax({
			url: "req-otp.php",
			type: "post",
			data: $('#configform').serialize(),
			success: function (response) {
				alert(response);
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
		return false;
		});  	  		
      
	</script>
    
</body>
</html>
