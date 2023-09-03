<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/favorite-menu.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:02 GMT -->
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
		<title>FoodDesk - Online Food Delivery Admin Dashboard</title>
	
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
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">ማስታወሻ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">ማንቂያዎች</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">ውውይት</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">የውውይት ዝርዝር</h6>
									<p class="mb-0">ሁሉንም ይመልከቱ</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>ዘሚካኤል ተፈራ</span>
												<p>ዘሚካኤል መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>ገብራኤል ካሳሁን</span>
												<p>ገብራኤል ከ 7 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>አቤል ሽመልስ</span>
												<p>አቤል መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>ለይኩን ተፈራ</span>
												<p>ለይኩን ከ 30 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>ሄኖክ ሳምሶን/span>
												<p>ሄኖክ ከ 15 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>ኖቤል ማርቆስ</span>
												<p>ኖቤል ከ 41 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>አበበ ከበደ</span>
												<p>አበበ መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>በረከት ሃይሉ</span>
												<p>በረከት መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>አበበ ሃይሉ</span>
												<p>አበበ መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>አበበ ሃይሉ</span>
												<p>አበበ መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>በረከት ሃይሉ</span>
												<p>በረከት መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>ኖቤል ማርቆስ</span>
												<p>ኖቤል ከ 41 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>ኖቤል ማርቆስ</span>
												<p>ኖቤል ከ 41 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
									<li class="dlab-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>አበበ ማርቆስ</span>
												<p>አበበ መስምር ላይ ነው</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">ከአበበ ጋር ይወያዩ</h6>
									<p class="mb-0 text-success">መስምር</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> መገለጫ ይመልከቱ</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> ወደ btn-የቅርብ ጓደኞች ያክሉ</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> ወደ ቡድን ያክሉ</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> አግድ</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ሰላም ከበደ እንዴት ነህ?
										<span class="msg_time">8:40 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										ሰላም አቤል ጥሩ ነኝ አመሰግናለሁ አንተስ?
										<span class="msg_time_send">8:55 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										እኔም ጥሩ ነኝ፣ ስለ ቻት አብነትህ አመሰግናለሁ
										<span class="msg_time">9:00 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										ምንም አይደል
										<span class="msg_time_send">9:05 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ቀጣዩን አብነቶችህን እፈልጋለሁ
										<span class="msg_time">9:07 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										እሺ አመሰግናለሁ መልካም ቀን
										<span class="msg_time_send">9:10 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ሰላም እንገናኝ
										<span class="msg_time">9:12 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ሰላም ከበደ እንዴት ነህ?
										<span class="msg_time">8:40 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										ሰላም ኻሊድ ጥሩ ነኝ አመሰግናለሁ?
										<span class="msg_time_send">8:55 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										እኔም ጥሩ ነኝ፣ ስለ ቻት አብነትህ አመሰግናለሁ
										<span class="msg_time">9:00 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
								<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ቀጣዩን አብነቶችህን እፈልጋለሁ
										<span class="msg_time">9:07 AM, ዛሬ</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										እሺ አመሰግናለሁ መልካም ቀን
										<span class="msg_time_send">9:10 AM, ዛሬ</span>
									</div>
									<div class="img_cont_msg">
										<img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										ሰላም እንገናኝ
										<span class="msg_time">9:12 AM, ዛሬ</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">ማሳወቂያዎች</h6>
									<p class="mb-0">ሁሉንም አሳይ</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">የአገልጋይ ሁኔታ</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>አበበ ከበደ ልደት</span>
												<p class="text-primary"> ዛሬ</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">ማህበራዊየአገልጋይ ሁኔታ</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>አበራ ይልማ ስሚዝ በእርስዎ ሁኔታ ላይ አስተያየት ሰጥቷል</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">የአገልጋይ ሁኔታ</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>ሄኖክ ሃይሉ</span>
												<p>አበበ መስመር ላይ ነው</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>መስፍን ሰለሞን</span>
												<p>ከበደ ከ 30 ደቂቃዎች በፊት ወጣ</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">ማስታወሻ</h6>
									<p class="mb-0">አዲስ ማስታወሻዎችን ያክሉ</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>አዲስ ትዕዛዝ ተሰጥቷል</span>
												<p>ነሐሴ 10 ቀን 2023</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube፣ የቪዲዮ ማጋራት ድህረ ገጽ...</span>
												<p>ነሐሴ 10 ቀን 2023</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>ጆን ብቻ ምርትህን ግዛ..</span>
												<p>ነሐሴ 10 ቀን 2023</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>አበበ ከበደ</span>
												<p>ነሐሴ 10 ቀን 2023</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
					<div class="container d-block my-0">
						<div class="d-flex align-items-center justify-content-sm-between justify-content-end">
							<div class="header-left">
								<div class="nav-item d-flex align-items-center">
									<div class="d-flex header-bx">									
										<select class="selectpicker">
											<option data-icon="fa-solid fa-location-dot mx-2">አዲስ አበባ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አዳማ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">ጎንደር</option>
											<option data-icon="fa-solid fa-location-dot mx-2">ባህር ዳር</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አክሱም</option> 
											<option data-icon="fa-solid fa-location-dot mx-2">ጅማ</option> 
											<option data-icon="fa-solid fa-location-dot mx-2">ጋምቤላ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አሶሳ</option>
											<option data-icon="fa-solid fa-location-dot mx-2">አሰላ</option>
										</select>
										<div class="input-group search-area2 ps-3" id="Serach-bar">
											<span class="input-group-text h-search"><a href="javascript:void(0)"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M16.6751 19.4916C16.2195 19.036 16.2195 18.2973 16.6751 17.8417C17.1307 17.3861 17.8694 17.3861 18.325 17.8417L22.9917 22.5084C23.4473 22.964 23.4473 23.7027 22.9917 24.1583C22.5361 24.6139 21.7974 24.6139 21.3417 24.1583L16.6751 19.4916Z" fill="var(--primary)"/>
											<path d="M12.8333 18.6667C16.055 18.6667 18.6666 16.055 18.6666 12.8333C18.6666 9.61168 16.055 7 12.8333 7C9.61163 7 6.99996 9.61168 6.99996 12.8333C6.99996 16.055 9.61163 18.6667 12.8333 18.6667ZM12.8333 21C8.32297 21 4.66663 17.3437 4.66663 12.8333C4.66663 8.32301 8.32297 4.66667 12.8333 4.66667C17.3436 4.66667 21 8.32301 21 12.8333C21 17.3437 17.3436 21 12.8333 21Z" fill="var(--primary)"/>
											</svg>
											</a></span>
											<input type="text" class="form-control"  placeholder="ዛሬ ምን መብላት ይፈልጋሉ">
											
										</div>
										<div class="search-drop">
											<div class="card tag-bx">
												<div class="card-header d-block border-0">
													<h4>Recently Searched</h4>
													<ul class="d-flex align-items-center flex-wrap">
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">መጠጦች</a></li>		
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">ፈጣን ምግቦች</a></li>																
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">ለስላሳዎች</a></li>	
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">ባሀላዊ ምግቦች</a></li>															
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded mt-3 mt-xl-0">ዘመናዊ ምግቦች</a></li>
													</ul>
												</div>
												<div class="swiper-slide">
													<div class="card mb-0">
														<div class="card-body pb-2 pt-3">
															<div class="text-center pop-cousin">
																<img src="assets/images/popular-img/pic-1.jpg" alt="">
																<a href= "javascript:void(0);"><h6>ፍርፍር</h6></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="card mb-0">
														<div class="card-body pb-2 pt-3">
															<div class="text-center pop-cousin">
																<img src="assets/images/popular-img/pic-1.jpg" alt="">
																<a href="javascript:void(0);"><h6>በየ አይነት</h6></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="card mb-0">
														<div class="card-body pb-2 pt-3">
															<div class="text-center pop-cousin">
																<img src="assets/images/popular-img/pic-1.jpg" alt="">
																<a href="javascript:void(0);"><h6>ሽሮ</h6></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="card mb-0">
														<div class="card-body pb-2 pt-3">
															<div class="text-center pop-cousin">
																<img src="assets/images/popular-img/pic-1.jpg" alt="">
																<a href="javascript:void(0);"><h6>ሩዝ</h6></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="card mb-0">
														<div class="card-body pb-2 pt-3">
															<div class="text-center pop-cousin">
																<img src="assets/images/popular-img/pic-1.jpg" alt="">
																<a href="javascript:void(0);"><h6>ፓስታ</h6></a>
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
														<h6 class="font-w500 mb-0 ms-2">Joshua</h6>
													</div>	
													<i class="fas fa-chevron-down"></i>
												</div>
												
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="app-profile.php" class="dropdown-item ai-icon ">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ms-2">Profile</span>
											</a>
											<a href="email-inbox.php" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">Inbox</span>
											</a>
											<a href="edit-profile.php" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">Edit Profile</span>
											</a>
											<a href="message.php" class="dropdown-item ai-icon ">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
													</g>
												</svg>
													<span class="ms-2">Message</span>
											</a>
											<a href="notification.php" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="var(--primary)"/>
													<circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
												</g>
											</svg>
											<span class="ms-2">Notification </span>
										</a>
										<a href="setting.php" class="dropdown-item ai-icon ">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"/>
													<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="var(--primary)"/>
												</g>
											</svg>
											<span class="ms-2">Settings </span>
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
				<div class="d-flex align-items-center justify-content-between mb-4">
					<div class="input-group search-area2 style-1">
						<span class="input-group-text p-0"><a href="javascript:void(0)"><svg  class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="#FC8019"/>
						</svg>
						</a></span>
						<input type="text" class="form-control p-0" placeholder="ዛሬ ምን መብላት ይፈልጋሉ...">
					</div>
					<ul class="grid-tab nav nav-pills" id="list-tab" role="tablist">
					  <li class="nav-item" role="presentation">
						<button class="nav-link me-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-list" type="button" role="tab" aria-controls="pills-list" aria-selected="true">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_730_817)">
							<path d="M8.03058 8.4253C7.38743 8.4253 6.74428 8.4253 6.10319 8.4253C5.08573 8.4253 4.07034 8.4253 3.05287 8.4253C2.80471 8.4253 2.54621 8.44598 2.29805 8.41909C2.37043 8.42943 2.44488 8.43977 2.51726 8.44805C2.45108 8.43771 2.39111 8.42323 2.32907 8.39841C2.39525 8.4253 2.46142 8.45425 2.5276 8.48113C2.46969 8.45425 2.41593 8.42323 2.36422 8.38394C2.42006 8.42737 2.4759 8.47079 2.53173 8.51422C2.49037 8.47907 2.45315 8.44184 2.41799 8.40048C2.46142 8.45632 2.50485 8.51215 2.54828 8.56799C2.50899 8.51629 2.47797 8.46459 2.45108 8.40462C2.47797 8.47079 2.50692 8.53697 2.5338 8.60315C2.50899 8.54111 2.49244 8.48113 2.48417 8.41496C2.49451 8.48734 2.50485 8.56179 2.51312 8.63417C2.49244 8.42943 2.50692 8.2185 2.50692 8.01376C2.50692 7.5588 2.50692 7.10384 2.50692 6.65094C2.50692 5.62521 2.50692 4.5974 2.50692 3.57167C2.50692 3.32351 2.48624 3.065 2.51312 2.81684C2.50278 2.88922 2.49244 2.96367 2.48417 3.03605C2.49451 2.96987 2.50899 2.9099 2.5338 2.84786C2.50692 2.91404 2.47797 2.98021 2.45108 3.04639C2.47797 2.98849 2.50899 2.93472 2.54828 2.88302C2.50485 2.93885 2.46142 2.99469 2.41799 3.05053C2.45315 3.00917 2.49037 2.97194 2.53173 2.93679C2.4759 2.98021 2.42006 3.02364 2.36422 3.06707C2.41593 3.02778 2.46763 2.99676 2.5276 2.96987C2.46142 2.99676 2.39525 3.02571 2.32907 3.0526C2.39111 3.02778 2.45108 3.01124 2.51726 3.00296C2.44488 3.0133 2.37043 3.02364 2.29805 3.03192C2.50278 3.01123 2.71372 3.02571 2.91845 3.02571C3.37342 3.02571 3.82838 3.02571 4.28127 3.02571C5.30701 3.02571 6.33481 3.02571 7.36055 3.02571C7.60871 3.02571 7.86721 3.00503 8.11537 3.03192C8.04299 3.02158 7.96854 3.01124 7.89616 3.00296C7.96234 3.0133 8.02231 3.02778 8.08435 3.0526C8.01818 3.02571 7.952 2.99676 7.88582 2.96987C7.94373 2.99676 7.9975 3.02778 8.0492 3.06707C7.99336 3.02364 7.93752 2.98021 7.88169 2.93679C7.92305 2.97194 7.96027 3.00917 7.99543 3.05053C7.952 2.99469 7.90857 2.93885 7.86514 2.88302C7.90444 2.93472 7.93546 2.98642 7.96234 3.04639C7.93546 2.98021 7.9065 2.91404 7.87962 2.84786C7.90444 2.9099 7.92098 2.96987 7.92925 3.03605C7.91891 2.96367 7.90857 2.88922 7.9003 2.81684C7.92098 3.02158 7.9065 3.23251 7.9065 3.43725C7.9065 3.89221 7.9065 4.34717 7.9065 4.80007C7.9065 5.8258 7.9065 6.85361 7.9065 7.87934C7.9065 8.1275 7.92718 8.38601 7.9003 8.63417C7.91064 8.56179 7.92098 8.48734 7.92925 8.41496C7.91891 8.48113 7.90444 8.54111 7.87962 8.60315C7.9065 8.53697 7.93546 8.47079 7.96234 8.40462C7.93546 8.46252 7.90444 8.51629 7.86514 8.56799C7.90857 8.51215 7.952 8.45632 7.99543 8.40048C7.96027 8.44184 7.92305 8.47907 7.88169 8.51422C7.93752 8.47079 7.99336 8.42737 8.0492 8.38394C7.9975 8.42323 7.9458 8.45425 7.88582 8.48113C7.952 8.45425 8.01818 8.4253 8.08435 8.39841C8.02231 8.42323 7.96234 8.43977 7.89616 8.44805C7.96854 8.43771 8.04299 8.42737 8.11537 8.41909C8.08849 8.42323 8.05954 8.4253 8.03058 8.4253C7.81551 8.42943 7.59837 8.51422 7.44534 8.66726C7.30264 8.80995 7.19304 9.0457 7.20338 9.2525C7.22406 9.69299 7.56735 10.09 8.03058 10.0797C8.43592 10.0714 8.8247 9.92047 9.11216 9.63095C9.39341 9.3497 9.5423 8.97332 9.55885 8.57833C9.56092 8.51009 9.55885 8.44391 9.55885 8.37567C9.55885 7.97447 9.55885 7.57121 9.55885 7.17001C9.55885 6.0264 9.55885 4.88279 9.55885 3.73918C9.55885 3.46413 9.56298 3.18908 9.55885 2.91404C9.55058 2.35154 9.24244 1.78283 8.71923 1.54088C8.48762 1.43334 8.27875 1.37544 8.01818 1.37337C7.98716 1.37337 7.9582 1.37337 7.92718 1.37337C6.9821 1.37337 6.03702 1.37337 5.09194 1.37337C4.20269 1.37337 3.31344 1.37337 2.42627 1.37337C2.00853 1.37337 1.59906 1.52226 1.30127 1.82213C1.0014 2.12199 0.852506 2.52939 0.852506 2.95126C0.852506 3.27387 0.852506 3.59855 0.852506 3.92116C0.852506 5.06891 0.852506 6.21666 0.852506 7.36441C0.852506 7.72631 0.852506 8.08821 0.852506 8.45218C0.852506 8.48113 0.852506 8.51009 0.852506 8.54111C0.854574 8.79961 0.914547 9.01261 1.02002 9.24216C1.26197 9.76537 1.83068 10.0735 2.39318 10.0818C3.22038 10.0921 4.04759 10.0818 4.87479 10.0818C5.86744 10.0818 6.86216 10.0818 7.8548 10.0818C7.91271 10.0818 7.97061 10.0818 8.02852 10.0818C8.46073 10.0818 8.8764 9.70126 8.85572 9.25457C8.83918 8.80374 8.49589 8.4253 8.03058 8.4253ZM8.03058 11.9202C7.27369 11.9202 6.51887 11.9202 5.76197 11.9202C4.72383 11.9202 3.68569 11.9202 2.64754 11.9202C2.56275 11.9202 2.47797 11.9182 2.39318 11.9202C1.72314 11.9306 1.16064 12.3442 0.935227 12.9708C0.821486 13.2851 0.854574 13.6615 0.854574 13.9924C0.854574 15.1008 0.854574 16.2072 0.854574 17.3157C0.854574 17.7872 0.854574 18.2566 0.854574 18.7281C0.854574 18.8378 0.854574 18.9494 0.854574 19.059C0.854574 19.4892 1.01588 19.9255 1.34263 20.2171C1.65076 20.4922 2.02507 20.6287 2.43661 20.6287C2.55862 20.6287 2.67856 20.6287 2.80058 20.6287C3.27829 20.6287 3.75807 20.6287 4.23578 20.6287C5.33596 20.6287 6.43408 20.6287 7.53426 20.6287C7.66868 20.6287 7.80517 20.6287 7.93959 20.6287C8.23325 20.6287 8.5083 20.5749 8.773 20.4363C9.26726 20.1799 9.55885 19.6298 9.56298 19.0838C9.56298 18.9887 9.56298 18.8957 9.56298 18.8005C9.56298 17.7541 9.56298 16.7056 9.56298 15.6592C9.56298 15.136 9.56298 14.6149 9.56298 14.0917C9.56298 13.8518 9.57953 13.6036 9.55678 13.3637C9.52369 12.9832 9.381 12.613 9.09354 12.3483C8.79989 12.0774 8.43385 11.9285 8.03058 11.9202C7.59837 11.912 7.1827 12.307 7.20338 12.7474C7.22406 13.2024 7.56735 13.5643 8.03058 13.5747C8.05954 13.5747 8.08849 13.5767 8.11744 13.5809C8.04506 13.5705 7.97061 13.5602 7.89823 13.5519C7.96441 13.5622 8.02438 13.5767 8.08642 13.6015C8.02025 13.5747 7.95407 13.5457 7.88789 13.5188C7.9458 13.5457 7.99956 13.5767 8.05127 13.616C7.99543 13.5726 7.93959 13.5292 7.88376 13.4857C7.92512 13.5209 7.96234 13.5581 7.9975 13.5995C7.95407 13.5436 7.91064 13.4878 7.86721 13.432C7.9065 13.4837 7.93752 13.5354 7.96441 13.5953C7.93752 13.5292 7.90857 13.463 7.88169 13.3968C7.9065 13.4588 7.92305 13.5188 7.93132 13.585C7.92098 13.5126 7.91064 13.4382 7.90237 13.3658C7.92305 13.5705 7.90857 13.7815 7.90857 13.9862C7.90857 14.4412 7.90857 14.8961 7.90857 15.349C7.90857 16.3747 7.90857 17.4026 7.90857 18.4283C7.90857 18.6764 7.92925 18.9349 7.90237 19.1831C7.91271 19.1107 7.92305 19.0363 7.93132 18.9639C7.92098 19.0301 7.9065 19.0901 7.88169 19.1521C7.90857 19.0859 7.93752 19.0197 7.96441 18.9536C7.93752 19.0115 7.9065 19.0652 7.86721 19.1169C7.91064 19.0611 7.95407 19.0053 7.9975 18.9494C7.96234 18.9908 7.92512 19.028 7.88376 19.0632C7.93959 19.0197 7.99543 18.9763 8.05127 18.9329C7.99956 18.9722 7.94786 19.0032 7.88789 19.0301C7.95407 19.0032 8.02025 18.9742 8.08642 18.9474C8.02438 18.9722 7.96441 18.9887 7.89823 18.997C7.97061 18.9866 8.04506 18.9763 8.11744 18.968C7.91271 18.9887 7.70177 18.9742 7.49704 18.9742C7.04207 18.9742 6.58711 18.9742 6.13422 18.9742C5.10848 18.9742 4.08068 18.9742 3.05494 18.9742C2.80678 18.9742 2.54828 18.9949 2.30012 18.968C2.3725 18.9784 2.44695 18.9887 2.51933 18.997C2.45315 18.9866 2.39318 18.9722 2.33114 18.9474C2.39731 18.9742 2.46349 19.0032 2.52967 19.0301C2.47176 19.0032 2.41799 18.9722 2.36629 18.9329C2.42213 18.9763 2.47797 19.0197 2.5338 19.0632C2.49244 19.028 2.45522 18.9908 2.42006 18.9494C2.46349 19.0053 2.50692 19.0611 2.55035 19.1169C2.51105 19.0652 2.48003 19.0135 2.45315 18.9536C2.48003 19.0197 2.50899 19.0859 2.53587 19.1521C2.51105 19.0901 2.49451 19.0301 2.48624 18.9639C2.49658 19.0363 2.50692 19.1107 2.51519 19.1831C2.49451 18.9784 2.50899 18.7674 2.50899 18.5627C2.50899 18.1077 2.50899 17.6528 2.50899 17.1999C2.50899 16.1741 2.50899 15.1463 2.50899 14.1206C2.50899 13.8724 2.48831 13.6139 2.51519 13.3658C2.50485 13.4382 2.49451 13.5126 2.48624 13.585C2.49658 13.5188 2.51105 13.4588 2.53587 13.3968C2.50899 13.463 2.48003 13.5292 2.45315 13.5953C2.48003 13.5374 2.51105 13.4837 2.55035 13.432C2.50692 13.4878 2.46349 13.5436 2.42006 13.5995C2.45522 13.5581 2.49244 13.5209 2.5338 13.4857C2.47797 13.5292 2.42213 13.5726 2.36629 13.616C2.41799 13.5767 2.46969 13.5457 2.52967 13.5188C2.46349 13.5457 2.39731 13.5747 2.33114 13.6015C2.39318 13.5767 2.45315 13.5602 2.51933 13.5519C2.44695 13.5622 2.3725 13.5726 2.30012 13.5809C2.50485 13.5602 2.71579 13.5747 2.92052 13.5747C3.36514 13.5747 3.80977 13.5747 4.25439 13.5747C5.27599 13.5747 6.29759 13.5747 7.32126 13.5747C7.55908 13.5747 7.79483 13.5747 8.03265 13.5747C8.46487 13.5747 8.88054 13.1941 8.85986 12.7474C8.83918 12.2987 8.49589 11.9202 8.03058 11.9202ZM11.7406 4.64703C12.026 4.64703 12.3093 4.64703 12.5947 4.64703C13.2771 4.64703 13.9617 4.64703 14.6441 4.64703C15.4672 4.64703 16.2902 4.64703 17.1133 4.64703C17.8288 4.64703 18.5423 4.64703 19.2578 4.64703C19.6053 4.64703 19.9527 4.65324 20.3001 4.64703C20.3043 4.64703 20.3105 4.64703 20.3146 4.64703C20.7468 4.64703 21.1625 4.26652 21.1418 3.81983C21.1211 3.37107 20.7778 2.99262 20.3146 2.99262C20.0292 2.99262 19.7459 2.99262 19.4605 2.99262C18.7781 2.99262 18.0935 2.99262 17.4111 2.99262C16.588 2.99262 15.765 2.99262 14.9419 2.99262C14.2264 2.99262 13.5129 2.99262 12.7974 2.99262C12.4499 2.99262 12.1025 2.98642 11.7551 2.99262C11.7509 2.99262 11.7447 2.99262 11.7406 2.99262C11.3084 2.99262 10.8927 3.37314 10.9134 3.81983C10.932 4.26652 11.2774 4.64703 11.7406 4.64703ZM17.0678 6.80604C16.4681 6.80604 15.8684 6.80604 15.2666 6.80604C14.3091 6.80604 13.3537 6.80604 12.3962 6.80604C12.177 6.80604 11.9577 6.80604 11.7385 6.80604C11.3063 6.80604 10.8906 7.18656 10.9113 7.63325C10.932 8.08201 11.2753 8.46045 11.7385 8.46045C12.3383 8.46045 12.938 8.46045 13.5398 8.46045C14.4973 8.46045 15.4527 8.46045 16.4102 8.46045C16.6294 8.46045 16.8486 8.46045 17.0678 8.46045C17.5 8.46045 17.9157 8.07994 17.895 7.63325C17.8764 7.18449 17.5331 6.80604 17.0678 6.80604ZM11.7406 15.1939C12.026 15.1939 12.3093 15.1939 12.5947 15.1939C13.2771 15.1939 13.9617 15.1939 14.6441 15.1939C15.4672 15.1939 16.2902 15.1939 17.1133 15.1939C17.8288 15.1939 18.5423 15.1939 19.2578 15.1939C19.6053 15.1939 19.9527 15.2001 20.3001 15.1939C20.3043 15.1939 20.3105 15.1939 20.3146 15.1939C20.7468 15.1939 21.1625 14.8134 21.1418 14.3667C21.1211 13.9179 20.7778 13.5395 20.3146 13.5395C20.0292 13.5395 19.7459 13.5395 19.4605 13.5395C18.7781 13.5395 18.0935 13.5395 17.4111 13.5395C16.588 13.5395 15.765 13.5395 14.9419 13.5395C14.2264 13.5395 13.5129 13.5395 12.7974 13.5395C12.4499 13.5395 12.1025 13.5333 11.7551 13.5395C11.7509 13.5395 11.7447 13.5395 11.7406 13.5395C11.3084 13.5395 10.8927 13.92 10.9134 14.3667C10.932 14.8155 11.2774 15.1939 11.7406 15.1939ZM17.0678 17.3529C16.4681 17.3529 15.8684 17.3529 15.2666 17.3529C14.3091 17.3529 13.3537 17.3529 12.3962 17.3529C12.177 17.3529 11.9577 17.3529 11.7385 17.3529C11.3063 17.3529 10.8906 17.7334 10.9113 18.1801C10.932 18.6289 11.2753 19.0073 11.7385 19.0073C12.3383 19.0073 12.938 19.0073 13.5398 19.0073C14.4973 19.0073 15.4527 19.0073 16.4102 19.0073C16.6294 19.0073 16.8486 19.0073 17.0678 19.0073C17.5 19.0073 17.9157 18.6268 17.895 18.1801C17.8764 17.7334 17.5331 17.3529 17.0678 17.3529Z" fill="#7E808C"/>
							</g>
							<defs>
							<clipPath id="clip0_730_817">
							<rect x="0.410156" y="0.411743" width="21.1765" height="21.1765" fill="white"/>
							</clipPath>
							</defs>
							</svg>
						</button>
					  </li>
					  <li class="nav-item " role="presentation">
						<button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill" data-bs-target="#pills-grid" type="button" role="tab" aria-controls="pills-grid" aria-selected="false">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 4H6.66667C5.95942 4 5.28115 4.28095 4.78105 4.78105C4.28095 5.28115 4 5.95942 4 6.66667V12C4 12.7072 4.28095 13.3855 4.78105 13.8856C5.28115 14.3857 5.95942 14.6667 6.66667 14.6667H12C12.7072 14.6667 13.3855 14.3857 13.8856 13.8856C14.3857 13.3855 14.6667 12.7072 14.6667 12V6.66667C14.6667 5.95942 14.3857 5.28115 13.8856 4.78105C13.3855 4.28095 12.7072 4 12 4ZM6.66667 12V6.66667H12V12H6.66667ZM25.3333 4H20C19.2928 4 18.6145 4.28095 18.1144 4.78105C17.6143 5.28115 17.3333 5.95942 17.3333 6.66667V12C17.3333 12.7072 17.6143 13.3855 18.1144 13.8856C18.6145 14.3857 19.2928 14.6667 20 14.6667H25.3333C26.0406 14.6667 26.7189 14.3857 27.219 13.8856C27.719 13.3855 28 12.7072 28 12V6.66667C28 5.95942 27.719 5.28115 27.219 4.78105C26.7189 4.28095 26.0406 4 25.3333 4ZM20 12V6.66667H25.3333V12H20ZM12 17.3333H6.66667C5.95942 17.3333 5.28115 17.6143 4.78105 18.1144C4.28095 18.6145 4 19.2928 4 20V25.3333C4 26.0406 4.28095 26.7189 4.78105 27.219C5.28115 27.719 5.95942 28 6.66667 28H12C12.7072 28 13.3855 27.719 13.8856 27.219C14.3857 26.7189 14.6667 26.0406 14.6667 25.3333V20C14.6667 19.2928 14.3857 18.6145 13.8856 18.1144C13.3855 17.6143 12.7072 17.3333 12 17.3333ZM6.66667 25.3333V20H12V25.3333H6.66667ZM25.3333 17.3333H20C19.2928 17.3333 18.6145 17.6143 18.1144 18.1144C17.6143 18.6145 17.3333 19.2928 17.3333 20V25.3333C17.3333 26.0406 17.6143 26.7189 18.1144 27.219C18.6145 27.719 19.2928 28 20 28H25.3333C26.0406 28 26.7189 27.719 27.219 27.219C27.719 26.7189 28 26.0406 28 25.3333V20C28 19.2928 27.719 18.6145 27.219 18.1144C26.7189 17.6143 26.0406 17.3333 25.3333 17.3333ZM20 25.3333V20H25.3333V25.3333H20Z" fill="#FC8019"/>
						</svg>
						</button>
					  </li>
					</ul>
				</div>
				
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
						<div class="card h-auto">
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table table-list i-table style-1 mb-4 border-0" id="guestTable-all3">
										<thead>
											<tr>
												<th class="bg-none">
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="" id="checkAll">
													</div>
												</th>
												<th>Menu</th>
												<th>Date</th>
												<th>Address</th>
												<th>Total</th>
												<th>Status</th>
												<th class="bg-none"></th>
												<th class="bg-none"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="media-bx d-flex py-3  align-items-center">
														<img class="me-3 rounded-circle" src="assets/images/popular-img/pic-1.jpg" alt="assets/images">
														<div>
															<h5 class="mb-0">Fish Burger</h5>
															<p class="mb-0">1x </p>
														</div>
													</div>
												</td>
												<td>
													<div>
														<p class="mb-0">June 1, 2020, 08:22 AM</p>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.4604 9.63C20.32 8.16891 19.8036 6.76908 18.9616 5.56681C18.1195 4.36455 16.9805 3.40083 15.6554 2.76949C14.3303 2.13815 12.8642 1.86072 11.4001 1.9642C9.93592 2.06768 8.5235 2.54856 7.30037 3.36C6.24957 4.06264 5.36742 4.98929 4.71731 6.07339C4.0672 7.15748 3.66526 8.3721 3.54037 9.63C3.41785 10.8797 3.57504 12.1409 4.00054 13.3223C4.42604 14.5036 5.10917 15.5755 6.00037 16.46L11.3004 21.77C11.3933 21.8637 11.5039 21.9381 11.6258 21.9889C11.7477 22.0397 11.8784 22.0658 12.0104 22.0658C12.1424 22.0658 12.2731 22.0397 12.3949 21.9889C12.5168 21.9381 12.6274 21.8637 12.7204 21.77L18.0004 16.46C18.8916 15.5755 19.5747 14.5036 20.0002 13.3223C20.4257 12.1409 20.5829 10.8797 20.4604 9.63ZM16.6004 15.05L12.0004 19.65L7.40037 15.05C6.72246 14.372 6.20317 13.5523 5.87984 12.6498C5.5565 11.7472 5.43715 10.7842 5.53037 9.83C5.62419 8.8611 5.93213 7.92516 6.43194 7.08984C6.93175 6.25452 7.61093 5.5407 8.42037 5C9.48131 4.29523 10.7267 3.91929 12.0004 3.91929C13.2741 3.91929 14.5194 4.29523 15.5804 5C16.3874 5.53861 17.065 6.24928 17.5647 7.08093C18.0644 7.91259 18.3737 8.8446 18.4704 9.81C18.5666 10.7674 18.4488 11.7343 18.1254 12.6405C17.8019 13.5468 17.281 14.3698 16.6004 15.05ZM12.0004 6C11.1104 6 10.2403 6.26392 9.5003 6.75838C8.76028 7.25285 8.18351 7.95565 7.84291 8.77792C7.50232 9.60019 7.4132 10.505 7.58684 11.3779C7.76047 12.2508 8.18905 13.0526 8.81839 13.682C9.44773 14.3113 10.2495 14.7399 11.1225 14.9135C11.9954 15.0872 12.9002 14.998 13.7224 14.6575C14.5447 14.3169 15.2475 13.7401 15.742 13.0001C16.2364 12.26 16.5004 11.39 16.5004 10.5C16.4977 9.30733 16.0228 8.16428 15.1794 7.32093C14.3361 6.47759 13.193 6.00264 12.0004 6ZM12.0004 13C11.5059 13 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9135 9.69067 11.4567C9.50145 10.9999 9.45194 10.4972 9.54841 10.0123C9.64487 9.52732 9.88297 9.08186 10.2326 8.73223C10.5822 8.3826 11.0277 8.1445 11.5126 8.04803C11.9976 7.95157 12.5003 8.00108 12.9571 8.1903C13.4139 8.37952 13.8043 8.69995 14.079 9.11107C14.3537 9.52219 14.5004 10.0055 14.5004 10.5C14.5004 11.163 14.237 11.7989 13.7681 12.2678C13.2993 12.7366 12.6634 13 12.0004 13Z" fill="#FC8019"/>
														</svg>
														<h5 class="mb-0">Elm Street, 23 Yogyakarta</h5>
													</div>
													<span>2,97 Km</span>
												</td>
												<td>
													<div>
														<h4 class="text-primary">$ 5.59</h4>
													</div>
												</td>
												<td><span class="badge badge-xl light badge-success">Completed</span></td>
												<td>
													<div>
														<a href="javascript:void(0);" class="btn btn-outline-primary">Order Again</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropstart">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="media-bx d-flex py-3  align-items-center">
														<img class="me-3 rounded-circle" src="assets/images/popular-img/review-img/pic-1.jpg" alt="assets/images">
														<div>
															<h5 class="mb-0">Pepperoni Pizza</h5>
															<p class="mb-0">1x </p>
														</div>
													</div>
												</td>
												<td>
													<div>
														<p class="mb-0">June 1, 2020, 08:22 AM</p>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.4604 9.63C20.32 8.16891 19.8036 6.76908 18.9616 5.56681C18.1195 4.36455 16.9805 3.40083 15.6554 2.76949C14.3303 2.13815 12.8642 1.86072 11.4001 1.9642C9.93592 2.06768 8.5235 2.54856 7.30037 3.36C6.24957 4.06264 5.36742 4.98929 4.71731 6.07339C4.0672 7.15748 3.66526 8.3721 3.54037 9.63C3.41785 10.8797 3.57504 12.1409 4.00054 13.3223C4.42604 14.5036 5.10917 15.5755 6.00037 16.46L11.3004 21.77C11.3933 21.8637 11.5039 21.9381 11.6258 21.9889C11.7477 22.0397 11.8784 22.0658 12.0104 22.0658C12.1424 22.0658 12.2731 22.0397 12.3949 21.9889C12.5168 21.9381 12.6274 21.8637 12.7204 21.77L18.0004 16.46C18.8916 15.5755 19.5747 14.5036 20.0002 13.3223C20.4257 12.1409 20.5829 10.8797 20.4604 9.63ZM16.6004 15.05L12.0004 19.65L7.40037 15.05C6.72246 14.372 6.20317 13.5523 5.87984 12.6498C5.5565 11.7472 5.43715 10.7842 5.53037 9.83C5.62419 8.8611 5.93213 7.92516 6.43194 7.08984C6.93175 6.25452 7.61093 5.5407 8.42037 5C9.48131 4.29523 10.7267 3.91929 12.0004 3.91929C13.2741 3.91929 14.5194 4.29523 15.5804 5C16.3874 5.53861 17.065 6.24928 17.5647 7.08093C18.0644 7.91259 18.3737 8.8446 18.4704 9.81C18.5666 10.7674 18.4488 11.7343 18.1254 12.6405C17.8019 13.5468 17.281 14.3698 16.6004 15.05ZM12.0004 6C11.1104 6 10.2403 6.26392 9.5003 6.75838C8.76028 7.25285 8.18351 7.95565 7.84291 8.77792C7.50232 9.60019 7.4132 10.505 7.58684 11.3779C7.76047 12.2508 8.18905 13.0526 8.81839 13.682C9.44773 14.3113 10.2495 14.7399 11.1225 14.9135C11.9954 15.0872 12.9002 14.998 13.7224 14.6575C14.5447 14.3169 15.2475 13.7401 15.742 13.0001C16.2364 12.26 16.5004 11.39 16.5004 10.5C16.4977 9.30733 16.0228 8.16428 15.1794 7.32093C14.3361 6.47759 13.193 6.00264 12.0004 6ZM12.0004 13C11.5059 13 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9135 9.69067 11.4567C9.50145 10.9999 9.45194 10.4972 9.54841 10.0123C9.64487 9.52732 9.88297 9.08186 10.2326 8.73223C10.5822 8.3826 11.0277 8.1445 11.5126 8.04803C11.9976 7.95157 12.5003 8.00108 12.9571 8.1903C13.4139 8.37952 13.8043 8.69995 14.079 9.11107C14.3537 9.52219 14.5004 10.0055 14.5004 10.5C14.5004 11.163 14.237 11.7989 13.7681 12.2678C13.2993 12.7366 12.6634 13 12.0004 13Z" fill="#FC8019"/>
														</svg>
														<h5 class="mb-0">Elm Street, 23 Yogyakarta</h5>
													</div>
													<span>2,97 Km</span>
												</td>
												<td>
													<div>
														<h4 class="text-primary">$ 5.59</h4>
													</div>
												</td>
												<td><span class="badge badge-xl light  badge-success">Completed</span></td>
												<td>
													<div>
														<a href="javascript:void(0);" class="btn btn-outline-primary">Order Again</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropstart">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="media-bx d-flex py-3  align-items-center">
														<img class="me-3 rounded-circle" src="assets/images/popular-img/pic-2.jpg" alt="assets/images">
														<div>
															<h5 class="mb-0">Beef Burger</h5>
															<p class="mb-0">1x </p>
														</div>
													</div>
												</td>
												<td>
													<div>
														<p class="mb-0">June 1, 2020, 08:22 AM</p>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.4604 9.63C20.32 8.16891 19.8036 6.76908 18.9616 5.56681C18.1195 4.36455 16.9805 3.40083 15.6554 2.76949C14.3303 2.13815 12.8642 1.86072 11.4001 1.9642C9.93592 2.06768 8.5235 2.54856 7.30037 3.36C6.24957 4.06264 5.36742 4.98929 4.71731 6.07339C4.0672 7.15748 3.66526 8.3721 3.54037 9.63C3.41785 10.8797 3.57504 12.1409 4.00054 13.3223C4.42604 14.5036 5.10917 15.5755 6.00037 16.46L11.3004 21.77C11.3933 21.8637 11.5039 21.9381 11.6258 21.9889C11.7477 22.0397 11.8784 22.0658 12.0104 22.0658C12.1424 22.0658 12.2731 22.0397 12.3949 21.9889C12.5168 21.9381 12.6274 21.8637 12.7204 21.77L18.0004 16.46C18.8916 15.5755 19.5747 14.5036 20.0002 13.3223C20.4257 12.1409 20.5829 10.8797 20.4604 9.63ZM16.6004 15.05L12.0004 19.65L7.40037 15.05C6.72246 14.372 6.20317 13.5523 5.87984 12.6498C5.5565 11.7472 5.43715 10.7842 5.53037 9.83C5.62419 8.8611 5.93213 7.92516 6.43194 7.08984C6.93175 6.25452 7.61093 5.5407 8.42037 5C9.48131 4.29523 10.7267 3.91929 12.0004 3.91929C13.2741 3.91929 14.5194 4.29523 15.5804 5C16.3874 5.53861 17.065 6.24928 17.5647 7.08093C18.0644 7.91259 18.3737 8.8446 18.4704 9.81C18.5666 10.7674 18.4488 11.7343 18.1254 12.6405C17.8019 13.5468 17.281 14.3698 16.6004 15.05ZM12.0004 6C11.1104 6 10.2403 6.26392 9.5003 6.75838C8.76028 7.25285 8.18351 7.95565 7.84291 8.77792C7.50232 9.60019 7.4132 10.505 7.58684 11.3779C7.76047 12.2508 8.18905 13.0526 8.81839 13.682C9.44773 14.3113 10.2495 14.7399 11.1225 14.9135C11.9954 15.0872 12.9002 14.998 13.7224 14.6575C14.5447 14.3169 15.2475 13.7401 15.742 13.0001C16.2364 12.26 16.5004 11.39 16.5004 10.5C16.4977 9.30733 16.0228 8.16428 15.1794 7.32093C14.3361 6.47759 13.193 6.00264 12.0004 6ZM12.0004 13C11.5059 13 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9135 9.69067 11.4567C9.50145 10.9999 9.45194 10.4972 9.54841 10.0123C9.64487 9.52732 9.88297 9.08186 10.2326 8.73223C10.5822 8.3826 11.0277 8.1445 11.5126 8.04803C11.9976 7.95157 12.5003 8.00108 12.9571 8.1903C13.4139 8.37952 13.8043 8.69995 14.079 9.11107C14.3537 9.52219 14.5004 10.0055 14.5004 10.5C14.5004 11.163 14.237 11.7989 13.7681 12.2678C13.2993 12.7366 12.6634 13 12.0004 13Z" fill="#FC8019"/>
														</svg>
														<h5 class="mb-0">Elm Street, 23 Yogyakarta</h5>
													</div>
													<span>2,97 Km</span>
												</td>
												<td>
													<div>
														<h4 class="text-primary">$ 5.59</h4>
													</div>
												</td>
												<td><span class="badge badge-xl light badge-primary">Delivering</span></td>
												<td>
													<div>
														<a href="javascript:void(0);" class="btn btn-outline-primary">Order Again</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropstart">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="media-bx d-flex py-3  align-items-center">
														<img class="me-3 rounded-circle" src="assets/images/popular-img/review-img/pic-2.jpg" alt="assets/images">
														<div>
															<h5 class="mb-0">Japanese Ramen</h5>
															<p class="mb-0">1x </p>
														</div>
													</div>
												</td>
												<td>
													<div>
														<p class="mb-0">June 1, 2020, 08:22 AM</p>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.4604 9.63C20.32 8.16891 19.8036 6.76908 18.9616 5.56681C18.1195 4.36455 16.9805 3.40083 15.6554 2.76949C14.3303 2.13815 12.8642 1.86072 11.4001 1.9642C9.93592 2.06768 8.5235 2.54856 7.30037 3.36C6.24957 4.06264 5.36742 4.98929 4.71731 6.07339C4.0672 7.15748 3.66526 8.3721 3.54037 9.63C3.41785 10.8797 3.57504 12.1409 4.00054 13.3223C4.42604 14.5036 5.10917 15.5755 6.00037 16.46L11.3004 21.77C11.3933 21.8637 11.5039 21.9381 11.6258 21.9889C11.7477 22.0397 11.8784 22.0658 12.0104 22.0658C12.1424 22.0658 12.2731 22.0397 12.3949 21.9889C12.5168 21.9381 12.6274 21.8637 12.7204 21.77L18.0004 16.46C18.8916 15.5755 19.5747 14.5036 20.0002 13.3223C20.4257 12.1409 20.5829 10.8797 20.4604 9.63ZM16.6004 15.05L12.0004 19.65L7.40037 15.05C6.72246 14.372 6.20317 13.5523 5.87984 12.6498C5.5565 11.7472 5.43715 10.7842 5.53037 9.83C5.62419 8.8611 5.93213 7.92516 6.43194 7.08984C6.93175 6.25452 7.61093 5.5407 8.42037 5C9.48131 4.29523 10.7267 3.91929 12.0004 3.91929C13.2741 3.91929 14.5194 4.29523 15.5804 5C16.3874 5.53861 17.065 6.24928 17.5647 7.08093C18.0644 7.91259 18.3737 8.8446 18.4704 9.81C18.5666 10.7674 18.4488 11.7343 18.1254 12.6405C17.8019 13.5468 17.281 14.3698 16.6004 15.05ZM12.0004 6C11.1104 6 10.2403 6.26392 9.5003 6.75838C8.76028 7.25285 8.18351 7.95565 7.84291 8.77792C7.50232 9.60019 7.4132 10.505 7.58684 11.3779C7.76047 12.2508 8.18905 13.0526 8.81839 13.682C9.44773 14.3113 10.2495 14.7399 11.1225 14.9135C11.9954 15.0872 12.9002 14.998 13.7224 14.6575C14.5447 14.3169 15.2475 13.7401 15.742 13.0001C16.2364 12.26 16.5004 11.39 16.5004 10.5C16.4977 9.30733 16.0228 8.16428 15.1794 7.32093C14.3361 6.47759 13.193 6.00264 12.0004 6ZM12.0004 13C11.5059 13 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9135 9.69067 11.4567C9.50145 10.9999 9.45194 10.4972 9.54841 10.0123C9.64487 9.52732 9.88297 9.08186 10.2326 8.73223C10.5822 8.3826 11.0277 8.1445 11.5126 8.04803C11.9976 7.95157 12.5003 8.00108 12.9571 8.1903C13.4139 8.37952 13.8043 8.69995 14.079 9.11107C14.3537 9.52219 14.5004 10.0055 14.5004 10.5C14.5004 11.163 14.237 11.7989 13.7681 12.2678C13.2993 12.7366 12.6634 13 12.0004 13Z" fill="#FC8019"/>
														</svg>
														<h5 class="mb-0">Elm Street, 23 Yogyakarta</h5>
													</div>
													<span>2,97 Km</span>
												</td>
												<td>
													<div>
														<h4 class="text-primary">$ 5.59</h4>
													</div>
												</td>
												<td><span class="badge badge-xl light badge-primary">Delivering</span></td>
												<td>
													<div>
														<a href="javascript:void(0);" class="btn btn-outline-primary ">Order Again</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropstart">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr class="dlab-table-bottom-line">
												<td>
													<div class="form-check style-3">
													  <input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="media-bx d-flex py-3  align-items-center">
														<img class="me-3 rounded-circle" src="assets/images/popular-img/review-img/pic-3.jpg" alt="assets/images">
														<div>
															<h5 class="mb-0">Vegan Pizza</h5>
															<p class="mb-0">1x </p>
														</div>
													</div>
												</td>
												<td>
													<div>
														<p class="mb-0">June 1, 2020, 08:22 AM</p>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.4604 9.63C20.32 8.16891 19.8036 6.76908 18.9616 5.56681C18.1195 4.36455 16.9805 3.40083 15.6554 2.76949C14.3303 2.13815 12.8642 1.86072 11.4001 1.9642C9.93592 2.06768 8.5235 2.54856 7.30037 3.36C6.24957 4.06264 5.36742 4.98929 4.71731 6.07339C4.0672 7.15748 3.66526 8.3721 3.54037 9.63C3.41785 10.8797 3.57504 12.1409 4.00054 13.3223C4.42604 14.5036 5.10917 15.5755 6.00037 16.46L11.3004 21.77C11.3933 21.8637 11.5039 21.9381 11.6258 21.9889C11.7477 22.0397 11.8784 22.0658 12.0104 22.0658C12.1424 22.0658 12.2731 22.0397 12.3949 21.9889C12.5168 21.9381 12.6274 21.8637 12.7204 21.77L18.0004 16.46C18.8916 15.5755 19.5747 14.5036 20.0002 13.3223C20.4257 12.1409 20.5829 10.8797 20.4604 9.63ZM16.6004 15.05L12.0004 19.65L7.40037 15.05C6.72246 14.372 6.20317 13.5523 5.87984 12.6498C5.5565 11.7472 5.43715 10.7842 5.53037 9.83C5.62419 8.8611 5.93213 7.92516 6.43194 7.08984C6.93175 6.25452 7.61093 5.5407 8.42037 5C9.48131 4.29523 10.7267 3.91929 12.0004 3.91929C13.2741 3.91929 14.5194 4.29523 15.5804 5C16.3874 5.53861 17.065 6.24928 17.5647 7.08093C18.0644 7.91259 18.3737 8.8446 18.4704 9.81C18.5666 10.7674 18.4488 11.7343 18.1254 12.6405C17.8019 13.5468 17.281 14.3698 16.6004 15.05ZM12.0004 6C11.1104 6 10.2403 6.26392 9.5003 6.75838C8.76028 7.25285 8.18351 7.95565 7.84291 8.77792C7.50232 9.60019 7.4132 10.505 7.58684 11.3779C7.76047 12.2508 8.18905 13.0526 8.81839 13.682C9.44773 14.3113 10.2495 14.7399 11.1225 14.9135C11.9954 15.0872 12.9002 14.998 13.7224 14.6575C14.5447 14.3169 15.2475 13.7401 15.742 13.0001C16.2364 12.26 16.5004 11.39 16.5004 10.5C16.4977 9.30733 16.0228 8.16428 15.1794 7.32093C14.3361 6.47759 13.193 6.00264 12.0004 6ZM12.0004 13C11.5059 13 11.0226 12.8534 10.6114 12.5787C10.2003 12.304 9.87989 11.9135 9.69067 11.4567C9.50145 10.9999 9.45194 10.4972 9.54841 10.0123C9.64487 9.52732 9.88297 9.08186 10.2326 8.73223C10.5822 8.3826 11.0277 8.1445 11.5126 8.04803C11.9976 7.95157 12.5003 8.00108 12.9571 8.1903C13.4139 8.37952 13.8043 8.69995 14.079 9.11107C14.3537 9.52219 14.5004 10.0055 14.5004 10.5C14.5004 11.163 14.237 11.7989 13.7681 12.2678C13.2993 12.7366 12.6634 13 12.0004 13Z" fill="#FC8019"/>
														</svg>
														<h5 class="mb-0">Elm Street, 23 Yogyakarta</h5>
													</div>
													<span>2,97 Km</span>
												</td>
												<td>
													<div>
														<h4 class="text-primary">$ 5.59</h4>
													</div>
												</td>
												<td><span class="badge badge-xl  light badge-danger">Canceled</span></td>
												<td>
													<div>
														<a href="javascript:void(0);" class="btn btn-outline-primary">Order Again</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropstart">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="pills-grid" role="tabpanel" aria-labelledby="pills-grid-tab">
						<div class="row">
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card dishe-bx b-hover style-1">
										<i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/pic-3.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="font-w500 mb-1">ባህላዊ ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>ዶሮ ወጥ</h4></a>
												<h3 class=" mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card dishe-bx b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/pic-1.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="font-w500 mb-1">ፈጣን ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>ፍርፍር</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card dishe-bx b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-pointer c-heart"></i>
									<div class="card-body pt-3 pb-0">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/pic-2.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="font-w500 mb-1">ፈጣን ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="page-error-404.php"><h4>በየ አይነት</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card dishe-bx b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-pointer c-heart"></i>
									
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/pic-4.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="font-w500 mb-1">ፈጣን ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-0">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>እርጥብ</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card review b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/review-img/pic-1.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="'font-w500 mb-1">ባህላዊ ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>ስጋ ወጥ</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
													<a href="javascript:void(0);"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card review b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/review-img/pic-2.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="font-w500 mb-1">ባህላዊ ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>ምስር</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card review b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/review-img/pic-3.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4 class="mb-1 font-w500">ባህላዊ ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>ዶሮ ወጥ</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-sm-6">
								<div class="card review b-hover style-1">
									<i class="fa-solid fa-heart ms-auto c-pointer c-heart"></i>
									<div class="card-body pb-0 pt-3">
										<div class="text-center mb-2">
											<img src="assets/images/popular-img/review-img/pic-4.jpg" alt="">
										</div>
										<div class="border-bottom pb-3">
											<h4>ፈጣን ምግብ</h4>
											<div class="d-flex align-items-center">
												<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"/>
												</svg>
												<p class="font-w500 mb-0 px-2">5.0</p>
												<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"/>
												</svg>
												<p class=" font-w500 mb-0">1k+ Reviews</p>
												<svg class="mx-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="2" cy="2.5" r="2" fill="#C4C4C4"/>
												</svg>
												<p class="font-w500 mb-0">2.97km</p>

											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-2">
										<div class="common d-flex align-items-center justify-content-between" >
											<div>
												<a href="javascript:void(0);"><h4>እርጥብ</h4></a>
												<h3 class="mb-0 text-primary">ብር-5.59</h3>
											</div>
											<div class="plus c-pointer">
												<div class="sub-bx">
												
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-xl-between justify-content-center flex-wrap pagination-bx">
								<div class="mb-sm-0 mb-3 pagination-title">
									<p class="mb-0"><span>Showing 1-5</span> from <span>100</span> data</p>
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
			መብት © የተነደፈ  by <a href="https://" target="_blank">shega tech</a> 2023</p>
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

	<!-- Dashboard 1 -->
	<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script>

	<script src="assets/js/dlabnav-init.js"></script>
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	
<script>
	
	$(document).ready(function(){
  $(".plus").click(function(){
    $(this).toggleClass("active");
	
  });
});
$(document).ready(function(){
  $(".c-heart").click(function(){
    $(this).toggleClass("active");
	
  });
});

</script>
	
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/favorite-menu.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:03 GMT -->
</html>