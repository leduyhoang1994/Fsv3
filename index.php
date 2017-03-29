<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="theme-color" content="#c4142b">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript">
	    var isHell = false;
	</script>
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="IE89.css">
		<script type="text/javascript">
		    var isHell = true;
		</script>
	<![endif]-->
	<!--[if gt IE 9]>
		<script type="text/javascript">
		    var isHell = false;
		</script>
	<![endif]-->
	<!--[if !IE]><!-->
		<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
	<!--<![endif]-->
	<!--[if IE]>
	    <script src="jquery1.9.1.js"></script>
	<![endif]-->
	<script type="text/javascript" src="index.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<!--[if lte IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-collapse fs-navbar navbar-fixed-top">
	  <div class="container-fluid">
	  	<div class="navbar-header">
	  		<button type="button" class="navbar-toggle fs-nav-toggle" data-toggle="collapse" data-target="#fsNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		    </button>
	  		<a class="navbar-brand fs-brand" href="#">
	  			<img alt="brand" src="logo.png" height="100%"/>
	  		</a>
	  	</div>
	  	<div class="navbar-right collapse navbar-collapse" id="fsNavbar">
	  		<ul class="nav navbar-nav">
	  			<li class="">
	                <a class="" href="#">GIỚI THIỆU</a>
	            </li>
	            <li class="">
	                <a class="" href="#">ƯU ĐÃI</a>
	            </li>
	            <li class="">
	                <a class="" href="#">NÂNG CẤP</a>
	            </li>
	            <li class="">
	                <a class="" href="#">TIN TỨC</a>
	            </li>
	            <li class="">
	                <a class="" href="#">CÔNG CỤ</a>
	            </li>
	            <li class="">
	                <a class="" href="#">ĐĂNG NHẬP</a>
	            </li>
	            <li class="">
	                <a class="" href="#">ĐĂNG KÝ NGAY</a>
	            </li>
	  		</ul>
	  	</div>
	  </div>
	</nav>
	<div id="navspace"></div>
	<div id="section1" class="text-center section" heightToShow="0">
		<div class="mask"></div>
		<p id="description1" class="fs-h1 flyUp" anim="anim-0" animFunc="fadeInUp20">
			CẢ THẾ GIỚI THỰC TUYẾN NẰM TRONG 1 ỨNG DỤNG
		</p>
		<p id="description2" class="fs-h3 flyUp" anim="anim-0" animFunc="fadeInUp50" >
			Giúp bạn quản lí, theo dõi, download và upload dữ liệu trực tuyến với tốc độ tối đa
		</p>
		<a id="upload-btn" href="" class="fs-button2 flyUp" anim="anim-0.25" animFunc="fadeInUp50">TẢI LÊN &AMP; CHIA SẺ</a>
		<div class="device flyUp" anim="anim-0.5" animFunc="fadeInUp20">
			<img src="device.png" width="100%">
		</div>
	</div>
	<div id="section2" class="text-center container section" heightToShow="50">
		<p id="description3" class="fs-h1 flyUp" anim="anim-0" animFunc="fadeInUp50">
			Quản lý file <span class="boldRed">dễ dàng - tiện ích</span> hơn
		</p>
		<p id="description4" class="fs-h3 flyUp" anim="anim-0.25" animFunc="fadeInUp50" >
			Fshare được thiết kế giao diện dành cho các nhu cầu của người Việt. Tốc độ truyền tải (upload/download) dữ liệu nhanh chóng cho phép khách hàng dễ dàng lưu trữ tất cả các dữ liệu của mình.
		</p>
		<div id="fs-slideshow" class="" anim="anim-0.5" animFunc="fadeInUp20" >
			<img src="bgt1.jpg" width="100%" height="100%" id="slide-image1" class="left"/>
			<img src="bg2.png" width="100%" height="100%" id="slide-image2" class="centered"/>
			<img src="bg1.jpg" width="100%" height="100%" id="slide-image3" class="right"/>
		</div>
		<div id="fs-slide-btn" anim="anim-0.5" animFunc="fadeInUp50" >
			<input type="radio" id="fs-rad1" name="pickslide" value="1" onclick="switchSlideTo($(this).val())">
			<label for="fs-rad1"><span></span></label>
			<input type="radio" id="fs-rad2" name="pickslide" value="2" onclick="switchSlideTo($(this).val())" checked>
			<label for="fs-rad2"><span></span></label>
			<input type="radio" id="fs-rad3" name="pickslide" value="3" onclick="switchSlideTo($(this).val())">
			<label for="fs-rad3"><span></span></label>
		</div>

		<div id="fs-slide-content-container" class="row align-items-center justify-content-center" anim="anim-0.75" animFunc="fadeInUp50" >
			<div id="fs-content-slide1" class="col-lg col-sm-4 col-md-4 fs-slide-content hidden-sm hidden-xs" value="1" onmouseover="switchSlideTo($(this).attr('value'));slide_hover=true;" onmouseleave="slide_hover=false;">
				<div class="fcs-header"><img src="safe_icon.png" height="100%"><span class="boldRed fs-h3"/>Chia sẻ dữ liệu</span></div>
				<div class="fcs-content">
					<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
				</div>
			</div>
			<div id="fs-content-slide2" class="col-lg col-sm-4 col-md-4 fs-slide-content selected" value="2" onmouseover="switchSlideTo($(this).attr('value'));slide_hover=true;" onmouseleave="slide_hover=false;">
				<div class="fcs-header"><img src="storage_icon.png" height="100%"/><span class="boldRed fs-h3">Làm gì bạn thích</span></div>
				<div class="fcs-content">
					<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
				</div>
			</div>
			<div id="fs-content-slide3" class="col-lg col-sm-4 col-md-4 fs-slide-content hidden-sm hidden-xs" value="3" onmouseover="switchSlideTo($(this).attr('value'));slide_hover=true;" onmouseleave="slide_hover=false;">
				<div class="fcs-header"><img src="speech_icon.png" height="100%"/><span class="boldRed fs-h3">Không cần suy nghĩ</span></div>
				<div class="fcs-content">
					<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section" id="section3" heightToShow="50">
		<div class="mask"></div>
		<h2 class="fs-h2" anim="anim-0" animFunc="fadeInUp20">Mạng xã hội Lưu trữ - Chia sẻ dữ liệu hàng đầu VIỆT NAM</h2>
	</div>
	<div id="section4" class="container policy section">
		<div class="row text-center policy-title" anim="anim-0" animFunc="fadeInDown20">
			<div class="col">
				<p><h2 class="fs-h2 red">Chính sách</h2></p>
			</div>
		</div>
		<div class="row text-center policy-desc" anim="anim-0.3" animFunc="fadeInDown50">
			<div class="col">
				<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
			</div>
		</div>
		<div class="row policy-content">
			<div class="col-sm-4 policy-box" anim="anim-0.5" animFunc="fadeInDown20">
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-thumb">
						<img src="safe_icon.png" width="50%"/>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-title padding1em">
						<p class="fs-h3 red">Bảo mật</p>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-desc padding1em">
						<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 policy-box" anim="anim-0.5" animFunc="fadeInDown20">
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-thumb">
						<img src="storage_icon.png" width="50%"/>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-title padding1em">
						<p class="fs-h3 red">300BG lưu trữ</p>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-desc padding1em">
						<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 policy-box" anim="anim-0.5" animFunc="fadeInDown20">
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-thumb">
						<img src="speech_icon.png" width="50%"/>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-title padding1em">
						<p class="fs-h3 red">Tốc độ vượt trội</p>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-auto policy-box-desc padding1em">
						<p>Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row policy-more padding1em" anim="anim-0.75" animFunc="fadeInDown50">
			<a class="fs-button1" href="">TÌM HIỂU THÊM</a>
		</div>
	</div>
	<div id="section5" class="container advise section">
		<div class="row">
			<div class="col-md-6 hidden-sm hidden-xs advise-left d-flex">
				<div class="row h-80 w-100 align-self-center">
				    <div class="col-md-12 my-auto avl-avt-ctn" onclick="avrSlideTo(1)" anim="anim-0" animFunc="fadeInRight20">
				    	<div class="row h-100">
							<div class="col-md-10 my-auto text-right avl-name"><p>Nguyễn Xuân Phú Cường</p></div>
							<div class="col-md-2 h-100 my-auto avl-thumb">
								<div class="row h-100">
									<div class="h-100 w-50 d-flex justify-content-end">
										<img src="img.jpg" height="70%" class="avl-image align-self-center align-self-end"/>
									</div>
									<div class="h-100 w-50">
										<div class="avl-dotted h-50 w-100">
											<div class="avl-circle">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="col-md-12 my-auto avl-avt-ctn" onclick="avrSlideTo(2)" anim="anim-0.2" animFunc="fadeInRight20">
				    	<div class="row h-100">
							<div class="col-md-10 my-auto text-right avl-name"><p>Nguyễn Xuân Phú Cường</p></div>
							<div class="col-md-2 h-100 my-auto avl-thumb">
								<div class="row h-100">
									<div class="h-100 w-50 d-flex justify-content-end">
										<img src="img.jpg" height="70%" class="avl-image align-self-center align-self-end"/>
									</div>
									<div class="h-100 w-50">
										<div class="avl-dotted h-50 w-100">
											<div class="avl-circle">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="col-md-12 my-auto avl-avt-ctn" onclick="avrSlideTo(3)" anim="anim-0.4" animFunc="fadeInRight20">
				    	<div class="row h-100">
							<div class="col-md-10 my-auto text-right avl-name"><p>Nguyễn Xuân Phú Cường</p></div>
							<div class="col-md-2 h-100 my-auto avl-thumb">
								<div class="row h-100">
									<div class="h-100 w-50 d-flex justify-content-end">
										<img src="img.jpg" height="70%" class="avl-image align-self-center align-self-end"/>
									</div>
									<div class="h-100 w-50">
										<div class="avl-dotted h-50 w-100">
											<div class="avl-circle">
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</div>
			<div class="col-md-6 advise-right">
				<div class="row h-100 w-100 mx-auto">
					<p class="fs-h3 padding1em mx-auto my-auto w-100 text-center" anim="anim-0.6" animFunc="fadeInDown20">Tại sao nên chọn Fshare?</p>
					<div class="avr-slide text-center mx-auto my-auto" anim="anim-0.8" animFunc="fadeInLeft20">
						<div class="avr-slide-bound">
							<div class="text-center avr-slide-item">
								<img class="avr-image" src="device.png" height="100px" width="100px"/>
								<p>Anh Phạm Xuân Phú Cường</p>
								<p>Chủ tịch tập đoàn HD Online</p>
								<p class="padding1em avr-quote">Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
							</div>
							<div class="text-center avr-slide-item">
								<img class="avr-image" src="device.png" height="100px" width="100px"/>
								<p>Anh Phạm Xuân Phú Cường</p>
								<p>Chủ tịch tập đoàn HD Online</p>
								<p class="padding1em avr-quote">Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
							</div>
							<div class="text-center avr-slide-item">
								<img class="avr-image" src="device.png" height="100px" width="100px"/>
								<p>Anh Phạm Xuân Phú Cường</p>
								<p>Chủ tịch tập đoàn HD Online</p>
								<p class="padding1em avr-quote">Bạn có thể chi sẻ dữ liệu ở đây, ở kia, ở bất cứ chỗ nào bất cứ lúc nào, kể cả bạn đi ăn đi chơi, đi ca, thậm chí là đi nhậu, phần chữ này kéo dài để test thôi hihi</p>
							</div>
						</div>
					</div>
					<div id="avr-buttons" anim="anim-0.8" animFunc="fadeInUp20">
						<input type="radio" id="avr-rad1" name="avr" onclick="avrSlideTo(1)">
						<label for="avr-rad1"><span></span></label>
						<input type="radio" id="avr-rad2" name="avr" onclick="avrSlideTo(2)" checked>
						<label for="avr-rad2"><span></span></label>
						<input type="radio" id="avr-rad3" name="avr" onclick="avrSlideTo(3)">
						<label for="avr-rad3"><span></span></label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section container row w-100 py2em" id="section6">
		<div class="col-md-12 text-center">
			<p class="fs-h3 grey">Fshare được các đối tác tin tưởng</p>
		</div>
		<div class="col-md-12 text-center padding1em">
			
		</div>
	</div>
	<div class="section container row w-100 py2em signup" id="section7">
		<div class="mask"></div>
		<img class="su-img" src="bgst7.jpg" />
		<div class="col-md-10 text-center mx-auto su-content">
			<p class="fs-h2 white">LƯU TRỮ MỌI LÚC CHIA SẺ MỌI NƠI</p>
			<p class="fs-h3 white">Hãy cùng trải nghiệm và cảm nhận với chúng tôi</p>
			<a class="fs-button2" href="">Đăng ký ngay</a>
		</div>
	</div>
</body>
</html>