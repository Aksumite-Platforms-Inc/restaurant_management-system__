<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/bill.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:03 GMT -->
<head>
     <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:title" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:description" content="FoodDesk - Online Food Delivery Admin Dashboard" />
	<meta property="og:image" content="https://fooddesk.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
		<title>AASTU - የመስመር ላይ የምግብ አቅርቦት አስተዳዳሪ ዳሽቦርድ</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
	<link href="assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	
	<!-- Style css -->
	<link href="assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
     <link href="assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
          <div class="nav-header">
            <a href="index-2.php" class="brand-logo">
				<svg class="logo-abbr" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="var(--primary)"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="var(--primary)"/>
					<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="var(--primary)"/>
				</svg>
				<svg class="brand-title" width="147" height="22" viewBox="0 0 147 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.532 1.344V5.18H5.524V9.324H11.516V13.048H5.524V21H0.736V1.344H13.532ZM23.1605 21.224C21.6298 21.224 20.2485 20.8973 19.0165 20.244C17.8032 19.5907 16.8418 18.6573 16.1325 17.444C15.4418 16.2307 15.0965 14.812 15.0965 13.188C15.0965 11.5827 15.4512 10.1733 16.1605 8.96C16.8698 7.728 17.8405 6.78533 19.0725 6.132C20.3045 5.47867 21.6858 5.152 23.2165 5.152C24.7472 5.152 26.1285 5.47867 27.3605 6.132C28.5925 6.78533 29.5632 7.728 30.2725 8.96C30.9818 10.1733 31.3365 11.5827 31.3365 13.188C31.3365 14.7933 30.9725 16.212 30.2445 17.444C29.5352 18.6573 28.5552 19.5907 27.3045 20.244C26.0725 20.8973 24.6912 21.224 23.1605 21.224ZM23.1605 17.08C24.0752 17.08 24.8498 16.744 25.4845 16.072C26.1378 15.4 26.4645 14.4387 26.4645 13.188C26.4645 11.9373 26.1472 10.976 25.5125 10.304C24.8965 9.632 24.1312 9.296 23.2165 9.296C22.2832 9.296 21.5085 9.632 20.8925 10.304C20.2765 10.9573 19.9685 11.9187 19.9685 13.188C19.9685 14.4387 20.2672 15.4 20.8645 16.072C21.4805 16.744 22.2458 17.08 23.1605 17.08ZM40.9886 21.224C39.458 21.224 38.0766 20.8973 36.8446 20.244C35.6313 19.5907 34.67 18.6573 33.9606 17.444C33.27 16.2307 32.9246 14.812 32.9246 13.188C32.9246 11.5827 33.2793 10.1733 33.9886 8.96C34.698 7.728 35.6686 6.78533 36.9006 6.132C38.1326 5.47867 39.514 5.152 41.0446 5.152C42.5753 5.152 43.9566 5.47867 45.1886 6.132C46.4206 6.78533 47.3913 7.728 48.1006 8.96C48.81 10.1733 49.1646 11.5827 49.1646 13.188C49.1646 14.7933 48.8006 16.212 48.0726 17.444C47.3633 18.6573 46.3833 19.5907 45.1326 20.244C43.9006 20.8973 42.5193 21.224 40.9886 21.224ZM40.9886 17.08C41.9033 17.08 42.678 16.744 43.3126 16.072C43.966 15.4 44.2926 14.4387 44.2926 13.188C44.2926 11.9373 43.9753 10.976 43.3406 10.304C42.7246 9.632 41.9593 9.296 41.0446 9.296C40.1113 9.296 39.3366 9.632 38.7206 10.304C38.1046 10.9573 37.7966 11.9187 37.7966 13.188C37.7966 14.4387 38.0953 15.4 38.6926 16.072C39.3086 16.744 40.074 17.08 40.9886 17.08ZM50.7528 13.16C50.7528 11.5547 51.0514 10.1453 51.6488 8.932C52.2648 7.71867 53.0954 6.78533 54.1408 6.132C55.1861 5.47867 56.3528 5.152 57.6408 5.152C58.6674 5.152 59.6008 5.36667 60.4408 5.796C61.2994 6.22533 61.9714 6.804 62.4568 7.532V0.28H67.2448V21H62.4568V18.76C62.0088 19.5067 61.3648 20.104 60.5248 20.552C59.7034 21 58.7421 21.224 57.6408 21.224C56.3528 21.224 55.1861 20.8973 54.1408 20.244C53.0954 19.572 52.2648 18.6293 51.6488 17.416C51.0514 16.184 50.7528 14.7653 50.7528 13.16ZM62.4568 13.188C62.4568 11.9933 62.1208 11.0507 61.4488 10.36C60.7954 9.66933 59.9928 9.324 59.0408 9.324C58.0888 9.324 57.2768 9.66933 56.6048 10.36C55.9514 11.032 55.6248 11.9653 55.6248 13.16C55.6248 14.3547 55.9514 15.3067 56.6048 16.016C57.2768 16.7067 58.0888 17.052 59.0408 17.052C59.9928 17.052 60.7954 16.7067 61.4488 16.016C62.1208 15.3253 62.4568 14.3827 62.4568 13.188ZM78.0727 1.344C80.1447 1.344 81.9553 1.75467 83.5047 2.576C85.054 3.39733 86.2487 4.55467 87.0887 6.048C87.9473 7.52267 88.3767 9.23067 88.3767 11.172C88.3767 13.0947 87.9473 14.8027 87.0887 16.296C86.2487 17.7893 85.0447 18.9467 83.4767 19.768C81.9273 20.5893 80.126 21 78.0727 21H70.7087V1.344H78.0727ZM77.7647 16.856C79.5753 16.856 80.9847 16.3613 81.9927 15.372C83.0007 14.3827 83.5047 12.9827 83.5047 11.172C83.5047 9.36133 83.0007 7.952 81.9927 6.944C80.9847 5.936 79.5753 5.432 77.7647 5.432H75.4967V16.856H77.7647ZM105.78 12.936C105.78 13.384 105.752 13.8507 105.696 14.336H94.8604C94.9351 15.3067 95.2431 16.0533 95.7844 16.576C96.3444 17.08 97.0257 17.332 97.8284 17.332C99.0231 17.332 99.8537 16.828 100.32 15.82H105.416C105.155 16.8467 104.679 17.7707 103.988 18.592C103.316 19.4133 102.467 20.0573 101.44 20.524C100.414 20.9907 99.2657 21.224 97.9964 21.224C96.4657 21.224 95.1031 20.8973 93.9084 20.244C92.7137 19.5907 91.7804 18.6573 91.1084 17.444C90.4364 16.2307 90.1004 14.812 90.1004 13.188C90.1004 11.564 90.4271 10.1453 91.0804 8.932C91.7524 7.71867 92.6857 6.78533 93.8804 6.132C95.0751 5.47867 96.4471 5.152 97.9964 5.152C99.5084 5.152 100.852 5.46933 102.028 6.104C103.204 6.73867 104.119 7.644 104.772 8.82C105.444 9.996 105.78 11.368 105.78 12.936ZM100.88 11.676C100.88 10.8547 100.6 10.2013 100.04 9.716C99.4804 9.23067 98.7804 8.988 97.9404 8.988C97.1377 8.988 96.4564 9.22133 95.8964 9.688C95.3551 10.1547 95.0191 10.8173 94.8884 11.676H100.88ZM114.662 21.224C113.3 21.224 112.086 20.9907 111.022 20.524C109.958 20.0573 109.118 19.4227 108.502 18.62C107.886 17.7987 107.541 16.884 107.466 15.876H112.198C112.254 16.4173 112.506 16.856 112.954 17.192C113.402 17.528 113.953 17.696 114.606 17.696C115.204 17.696 115.661 17.584 115.978 17.36C116.314 17.1173 116.482 16.8093 116.482 16.436C116.482 15.988 116.249 15.6613 115.782 15.456C115.316 15.232 114.56 14.9893 113.514 14.728C112.394 14.4667 111.461 14.196 110.714 13.916C109.968 13.6173 109.324 13.16 108.782 12.544C108.241 11.9093 107.97 11.06 107.97 9.996C107.97 9.1 108.213 8.288 108.698 7.56C109.202 6.81333 109.93 6.22533 110.882 5.796C111.853 5.36667 113.001 5.152 114.326 5.152C116.286 5.152 117.826 5.63733 118.946 6.608C120.085 7.57867 120.738 8.86667 120.906 10.472H116.482C116.408 9.93067 116.165 9.50133 115.754 9.184C115.362 8.86667 114.84 8.708 114.186 8.708C113.626 8.708 113.197 8.82 112.898 9.044C112.6 9.24933 112.45 9.53867 112.45 9.912C112.45 10.36 112.684 10.696 113.15 10.92C113.636 11.144 114.382 11.368 115.39 11.592C116.548 11.8907 117.49 12.1893 118.218 12.488C118.946 12.768 119.581 13.2347 120.122 13.888C120.682 14.5227 120.972 15.3813 120.99 16.464C120.99 17.3787 120.729 18.2 120.206 18.928C119.702 19.6373 118.965 20.1973 117.994 20.608C117.042 21.0187 115.932 21.224 114.662 21.224ZM133.468 21L128.708 14.448V21H123.92V0.28H128.708V11.732L133.44 5.376H139.348L132.852 13.216L139.404 21H133.468ZM143.468 21.224C142.628 21.224 141.938 20.9813 141.396 20.496C140.874 19.992 140.612 19.376 140.612 18.648C140.612 17.9013 140.874 17.276 141.396 16.772C141.938 16.268 142.628 16.016 143.468 16.016C144.29 16.016 144.962 16.268 145.484 16.772C146.026 17.276 146.296 17.9013 146.296 18.648C146.296 19.376 146.026 19.992 145.484 20.496C144.962 20.9813 144.29 21.224 143.468 21.224Z" fill="var(--primary)"/>
				</svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
         <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
					<div class="container d-block my-0">
						<div class="d-flex align-items-center justify-content-sm-between justify-content-end">
							<div class="header-left">
								<div class="nav-item d-flex align-items-center">
									<div class="d-flex header-bx">									
										
										<div class="input-group search-area2 ps-3" id="Serach-bar">
											<span class="input-group-text h-search"><a href="javascript:void(0)"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M16.6751 19.4916C16.2195 19.036 16.2195 18.2973 16.6751 17.8417C17.1307 17.3861 17.8694 17.3861 18.325 17.8417L22.9917 22.5084C23.4473 22.964 23.4473 23.7027 22.9917 24.1583C22.5361 24.6139 21.7974 24.6139 21.3417 24.1583L16.6751 19.4916Z" fill="var(--primary)"/>
											<path d="M12.8333 18.6667C16.055 18.6667 18.6666 16.055 18.6666 12.8333C18.6666 9.61168 16.055 7 12.8333 7C9.61163 7 6.99996 9.61168 6.99996 12.8333C6.99996 16.055 9.61163 18.6667 12.8333 18.6667ZM12.8333 21C8.32297 21 4.66663 17.3437 4.66663 12.8333C4.66663 8.32301 8.32297 4.66667 12.8333 4.66667C17.3436 4.66667 21 8.32301 21 12.8333C21 17.3437 17.3436 21 12.8333 21Z" fill="var(--primary)"/>
											</svg>
											</a></span>
											<input type="text" class="form-control"  placeholder="What do you want eat today">
											
										</div>
										<div class="search-drop">
											<div class="card tag-bx">
												
												<div class="card-body pt-0">
													<h4>popular Cuisines</h4>
														<div class="swiper mySwiper-4">
														  <div class="swiper-wrapper">
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href= "javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href= "javascript:void(0);"><h6>ምስር</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>ምስር</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>ምስር</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>ምስርr</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>ፍርፍር</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
														  </div>
														</div>
												</div>
											</div>
											<div id="close-searchbox"></div>
										</div>
									</div>
								</div>
							</div>
							
							<ul class="navbar-nav header-right ">
								
								<li class="nav-item d-flex align-items-center">
									
								</li>
								<li>
									
																		<div class="dropdown header-profile2 ">
										<a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
											<div class="header-info2 d-flex align-items-center">
												<img src="assets/images/banner-img/pic-1.png" alt="">
												<div class="d-flex align-items-center sidebar-info">
													<div>
														<h6 class="font-w500 mb-0 ms-2">አቤል</h6>
													</div>	
													<i class="fas fa-chevron-down"></i>
												</div>
												
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="app-profile.php" class="dropdown-item ai-icon ">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ms-2">ፕሮፋይል</span>
											</a>
											<a href="email-inbox.php" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">የገቢ መልእክት ሳጥን</span>
											</a>
											<a href="edit-profile.php" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">ፕሮፋይሎን ይቀይሩ</span>
											</a>
											<a href="message.php" class="dropdown-item ai-icon ">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
													</g>
												</svg>
													<span class="ms-2">መልእክት</span>
											</a>
											<a href="notification.php" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="var(--primary)"/>
													<circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
											<span class="ms-2">ማስታወቂያ </span>
										</a>
										<a href="setting.php" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"/>
													<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="var(--primary)"/>
												</g>
											</svg>
											<span class="ms-2">ቅንብሮች </span>
										</a>
											<a href="login.php" class="dropdown-item ai-icon ms-1">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
												<span class="ms-1">Logout </span>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav border-right">
            <div class="dlabnav-scroll">
					<p class="menu-title style-1"> ዋና ምናሌ</p>
				<ul class="metismenu" id="menu">
                     <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="bi bi-grid"></i>
							<span class="nav-text">ዳሽቦርድ</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="food-order.php">የምግብ ማዘዣ</a></li>
							<li><a href="favorite-menu.php">ተወዳጅ ምናሌ</a></li>
							<li><a href="message.php">መልእክት</a></li>	
							<li><a href="order-history.php">የትዕዛዝ ታሪክy</a></li>	
							<li><a href="notification.php">ማስታወቂያ</a></li>	
							<li><a href="bill.php">ሂሳብ</a></li>	
							<li><a href="setting.php">ቅንብር</a></li>	
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						
								<i class="bi bi-shop-window"></i>
							<span class="nav-text">ሬስቶራንት</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="dashboard.php">ዳሽቦርድ</a></li>
							<li><a href="menu.php">ምናሌ</a></li>
							<li><a href="orders.php">ትዕዛዞች</a></li>
							<li><a href="customer-reviews.php">ግምገማዎች</a></li>
							<li><a href="restro-setting.php">ቅንብር</a></li>
							
						</ul>

                    </li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<i class="bi bi-bicycle"></i>

							<span class="nav-text">አሽከርካሪዎች</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="deliver-main.php">ዳሽቦርድ</a></li>
							<li><a href="deliver-order.php">ትዕዛዞች</a></li>
							<li><a href="feedback.php">ግብረ መልስ</a></li>
						</ul>

                    </li>
                </ul>
				<div class="plus-box">
					<div class="d-flex align-items-center">
						<h5>ነፃ ቫውቸር ለማግኘት መለያዎን ያሻሽሉ</h5>
						
					</div>
					<a href="javascript:void(0);" class="btn bg-white btn-sm">አሻሽል</a>
				</div>
				<div class="copyright mt-0">
					<p><strong>AASTU - የመስመር ላይ የምግብ አቅርቦት አስተዳዳሪ ዳሽቦርድ</strong> © 2023 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> ሽጋ</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<div class="input-group search-area2">
								<span class="input-group-text p-0"><a href="javascript:void(0)"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="#FC8019"/>
								</svg>
								</a></span>
								<input type="text" class="form-control p-0" placeholder="Search Bills">
							</div>
							<select class="form-control default-select border w-auto" style="display: none;">
								<option>የቅርብ ጊዜ</option>
								<option> የቆየ</option>
								<option>አዲስ</option>
							</select>
						</div>
						<div class="card h-auto biil-bx">
							<div class="card-header flex-wrap d-none d-sm-flex">
								<div class="d-flex align-items-center">
									<div class="form-check style-3 me-3">
										<input class="form-check-input" type="checkbox" value="" id="checkAll">
									</div>
									<h4 class="font-w600 mb-0">ምናሌ</h4>
								</div>
								<h4 class="font-w600 mb-0">ሁኔታ</h4>
								<h4 class="font-w600 mb-0">ቀን</h4>
								<h4 class="font-w600 mb-0">አድራሻ</h4>
								<h4 class="font-w600 mb-0 ms-sm-0 ms-5">ድምር</h4>
								<h4 class="font-w600 mb-0">የመክፈያ ዘዴ</h4>
								<span class="accordion-header-indicator"></span>
							</div>
							<div class="card-body p-0  overflow-hidden">
								<div id="accordion-one" class="accordion style-1">
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne1">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትዕዛዝ #1</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">የተጠናቀቀ</a>
											<p class="">June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg  class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="var(--primary)"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23</h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500 ">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne1" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">እርጥብ</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">ምስር</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሂሳብ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header" data-bs-toggle="collapse" data-bs-target="#default_collapseOne2">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #2</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-danger bgl-danger btn-sm">Canceled</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 2</h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
											
										</div>
										<div id="default_collapseOne2" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">ፍርፍር</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ Reviews</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ</span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ክፍያ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne3">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #3</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">የተጠናቀቀ</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23 </h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne3" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6  my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">ምስር</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ክፍያ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne4">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #4</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-primary bgl-primary btn-sm">ማድረስ</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23</h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">Cash</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne4" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6  my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ፍርፍር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2"></h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 Min</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ክፍያ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne5">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #5</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">የተጠናቀቀ</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23 Yogyakarta</h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne5" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6  my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ዶሮ</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">እርጥብ</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ክፍያ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne6">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #6</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">የተጠናቀቀ</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23 </h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne6" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0"> ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">እርጥብ</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 Min</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ክፍያ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne7">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0">ትእዛዝ #7</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">የተጠናቀቀ</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ, 23</h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne7" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6  my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">ምስር</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">እርጥብ</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ እይታዎች[</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የተላከበት ቀን </span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሂሳብ</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዛ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne8">
											<div class="d-flex align-items-center">
												<div class="form-check style-3 me-3">
													<input class="form-check-input" type="checkbox" value="">
												</div>
												<h5 class="font-w500 mb-0"ትእዛዝ> #8</h5>
											</div>
											<a href="javascript:void(0);" class="btn btn-outline-success bgl-success btn-sm">Completed</a>
											<p>June 1, 2020, 08:22 AM</p>
											<div class="d-flex align-tems-center">
												<svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20.4604 10.13C20.32 8.66891 19.8036 7.26908 18.9616 6.06681C18.1195 4.86455 16.9805 3.90083 15.6554 3.26949C14.3303 2.63815 12.8642 2.36072 11.4001 2.4642C9.93592 2.56768 8.5235 3.04856 7.30037 3.86C6.24957 4.56264 5.36742 5.48929 4.71731 6.57339C4.0672 7.65748 3.66526 8.8721 3.54037 10.13C3.41785 11.3797 3.57504 12.6409 4.00054 13.8223C4.42604 15.0036 5.10917 16.0755 6.00037 16.96L11.3004 22.27C11.3933 22.3637 11.5039 22.4381 11.6258 22.4889C11.7477 22.5397 11.8784 22.5658 12.0104 22.5658C12.1424 22.5658 12.2731 22.5397 12.3949 22.4889C12.5168 22.4381 12.6274 22.3637 12.7204 22.27L18.0004 16.96C18.8916 16.0755 19.5747 15.0036 20.0002 13.8223C20.4257 12.6409 20.5829 11.3797 20.4604 10.13ZM16.6004 15.55L12.0004 20.15L7.40037 15.55C6.72246 14.872 6.20317 14.0523 5.87984 13.1498C5.5565 12.2472 5.43715 11.2842 5.53037 10.33C5.62419 9.3611 5.93213 8.42516 6.43194 7.58984C6.93175 6.75452 7.61093 6.0407 8.42037 5.5C9.48131 4.79523 10.7267 4.41929 12.0004 4.41929C13.2741 4.41929 14.5194 4.79523 15.5804 5.5C16.3874 6.03861 17.065 6.74928 17.5647 7.58093C18.0644 8.41259 18.3737 9.3446 18.4704 10.31C18.5666 11.2674 18.4488 12.2343 18.1254 13.1405C17.8019 14.0468 17.281 14.8698 16.6004 15.55ZM12.0004 6.5C11.1104 6.5 10.2403 6.76392 9.5003 7.25838C8.76028 7.75285 8.18351 8.45565 7.84291 9.27792C7.50232 10.1002 7.4132 11.005 7.58684 11.8779C7.76047 12.7508 8.18905 13.5526 8.81839 14.182C9.44773 14.8113 10.2495 15.2399 11.1225 15.4135C11.9954 15.5872 12.9002 15.498 13.7224 15.1575C14.5447 14.8169 15.2475 14.2401 15.742 13.5001C16.2364 12.76 16.5004 11.89 16.5004 11C16.4977 9.80733 16.0228 8.66428 15.1794 7.82093C14.3361 6.97759 13.193 6.50264 12.0004 6.5ZM12.0004 13.5C11.5059 13.5 11.0226 13.3534 10.6114 13.0787C10.2003 12.804 9.87989 12.4135 9.69067 11.9567C9.50145 11.4999 9.45194 10.9972 9.54841 10.5123C9.64487 10.0273 9.88297 9.58186 10.2326 9.23223C10.5822 8.8826 11.0277 8.6445 11.5126 8.54803C11.9976 8.45157 12.5003 8.50108 12.9571 8.6903C13.4139 8.87952 13.8043 9.19995 14.079 9.61107C14.3537 10.0222 14.5004 10.5055 14.5004 11C14.5004 11.663 14.237 12.2989 13.7681 12.7678C13.2993 13.2366 12.6634 13.5 12.0004 13.5Z" fill="#FC8019"/>
												</svg>
												<h5 class="mb-0">ብሎክ Street, 23 </h5>
											</div>
											<h4 class="price">$ 5.59</h4>
											<h5 class=" cash font-w500">ክፍያ</h5>
											<span class="accordion-header-indicator style-1"></span>
										</div>
										<div id="default_collapseOne8" class="collapse accordion_body" data-bs-parent="#accordion-one">
											<div class="row">
												<div class="col-xl-3 col-xxl-6 col-sm-6  my-4 border-right">
													<div class="order-menu dlab-space">
														<h4 class="">የትዕዛዝ ምናሌ</h4>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start  mb-2">
															<img class="me-2" src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0">እርጥብ</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
														<div class="d-flex align-items-center justify-content-xl-center justify-content-lg-start">
															<img class="me-2" src="assets/images/popular-img/pic-1.jpg" alt="">
															<div>
																<h6 class="font-w600 text-nowrap mb-0 ">እርጥብ</h6>
																<p class="mb-0">x1</p>
															</div>
															<h6 class="text-primary mb-0 ps-3 ms-auto">+$5.59</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div>
															<h4 class="mb-2">እርጥብ</h4>
															<div class="d-flex align-items-center mb-4">
																<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
																</svg>
																<p class="mb-0 px-2">5.0</p>
																<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
																</svg>
																<p class="mb-0">1k+ ግምገማዎች</p>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-3">
															<span>የማስረከቢያ ሰአት ገደብ </span>
															<h6 class="mb-0">10 ደቂቃ</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<span>ርቀት</span>
															<h6 class="mb-0">2.5 Km</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 my-4 border-right">
													<div class="dlab-space">
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">ሁኔታ</p>
															<p class="mb-0">ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-4">
															<h6>የተጠናቀቀ</h6>	
															<h6>June 1, 2020</h6>
														</div>
														<div class="d-flex align-items-center justify-content-between mb-1">
															<p class="mb-0">Bills</p>
															<p class="mb-0">የተከፈለበት ቀን</p>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<h6>ትእዛዝ #1</h6>	
															<h6>June 1, 2020</h6>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-xxl-6 col-sm-6 mt-4 ms-sm-0 ms-3 ">
													<p class="fs-18 font-w500">ድምር</p>
													<h4 class="cate-title text-primary">$202.00</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap pagination-bx">
						<div class="mb-sm-0 mb-3 pagination-title">
							<p class="mb-0"><span>በማሳየት ላይ 1-5</span> ከ<span>100</span> ውሂብ</p>
						</div>
						<nav>
							<ul class="pagination pagination-gutter">
								<li class="page-item page-indicator">
									<a class="page-link" href="javascript:void(0)">
										<i class="la la-angle-left"></i></a>
								</li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
								</li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item page-indicator">
									<a class="page-link" href="javascript:void(0)">
										<i class="la la-angle-right"></i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
           <div class="copyright border-top">
   <p>Copyright © Designed   by <a href="https://themeforest.net/user/dexignlabs" target="_blank">SHEGA</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required assets/vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script>
	
	<script src="assets/js/dlabnav-init.js"></script>
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/bill.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:03 GMT -->
</html>