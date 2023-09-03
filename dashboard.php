<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:03 GMT -->
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
												<div class="card-body pt-0">
													<h4>ታዋቂ ምግቦች</h4>
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
									
																		<div class="dropdown header-2 ">
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
											<a href="app-.php" class="dropdown-item ai-icon ">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ms-2">መግለጫ</span>
											</a>
											<a href="email-inbox.php" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">የገቢ መልእክት ሳጥን</span>
											</a>
											<a href="edit-.php" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">ኤዲት </span>
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
												<span class="ms-1">ውጣ </span>
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
							<li><a href="index-3.php">ዳሽቦርድ ጨለማ</a></li>
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
					<div class="col-xl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card income-bx">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-4 col-lg-4 col-6">
												<div class="line position-relative">
													<p class="font-w500 mb-0">ጠቅላላ ገቢ</p>
													<h2 class="mb-0 text-primary">ብር-12,890,00</h2>
												</div>
											</div>
											<div class="col-xl-3 col-lg-3 col-6">
												<p class="font-w500 text-success mb-0">ገቢ</p>
												<h4 class="cate-title data">ብር-4345,00</h4>
												<ul class="d-flex align-items-center">
													<li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_1055_214)">
													<path d="M17.4375 9C17.4375 4.33125 13.6688 0.5625 9 0.5625C4.33125 0.562499 0.5625 4.33125 0.5625 9C0.562499 13.6687 4.33125 17.4375 9 17.4375C13.6687 17.4375 17.4375 13.6687 17.4375 9ZM8.4375 12.4313L8.4375 7.25625L6.975 8.55C6.6375 8.83125 6.1875 8.775 5.90625 8.49375C5.79375 8.325 5.7375 8.15625 5.7375 7.9875C5.7375 7.7625 5.85 7.5375 6.01875 7.425L8.71875 5.0625C8.775 5.00625 8.83125 5.00625 8.8875 4.95C8.94375 4.95 8.94375 4.95 9 4.89375C9.05625 4.89375 9.05625 4.89375 9.1125 4.89375L9.16875 4.89375C9.225 4.89375 9.225 4.89375 9.28125 4.89375L9.3375 4.89375C9.39375 4.89375 9.39375 4.89375 9.45 4.95C9.45 4.95 9.50625 4.95 9.50625 5.00625L9.5625 5.0625C9.5625 5.0625 9.5625 5.0625 9.61875 5.11875L11.9812 7.5375C12.2625 7.81875 12.2625 8.325 11.9812 8.60625C11.7 8.8875 11.1937 8.8875 10.9125 8.60625L9.84375 7.48125L9.84375 12.4875C9.84375 12.8813 9.50625 13.275 9.05625 13.275C8.775 13.1625 8.4375 12.825 8.4375 12.4313Z" fill="#1FBF75"/>
													</g>
													<defs>
													<clipPath id="clip0_1055_214">
													<rect width="18" height="18" fill="white" transform="translate(18) rotate(90)"/>
													</clipPath>
													</defs>
													</svg>
													</li>
													<li class="font-w600 text-success ms-2">+15%</li>
												</ul>
											</div>
											<div class="col-xl-2 col-lg-2 col-6">
												<p class="font-w500 text-danger mb-0">ወጪ</p>
												<h4 class="cate-title data">ብር-2890,00</h4>
												<ul class="d-flex align-items-center">
													<li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g clip-path="url(#clip0_1055_221)">
														<path d="M0.5625 9C0.5625 13.6688 4.33125 17.4375 9 17.4375C13.6687 17.4375 17.4375 13.6688 17.4375 9C17.4375 4.33125 13.6688 0.5625 9 0.5625C4.33125 0.5625 0.5625 4.33125 0.5625 9ZM9.5625 5.56875L9.5625 10.7438L11.025 9.45C11.3625 9.16875 11.8125 9.225 12.0938 9.50625C12.2063 9.675 12.2625 9.84375 12.2625 10.0125C12.2625 10.2375 12.15 10.4625 11.9812 10.575L9.28125 12.9375C9.225 12.9938 9.16875 12.9938 9.1125 13.05C9.05625 13.05 9.05625 13.05 9 13.1063C8.94375 13.1063 8.94375 13.1063 8.8875 13.1063L8.83125 13.1063C8.775 13.1063 8.775 13.1063 8.71875 13.1063L8.6625 13.1063C8.60625 13.1063 8.60625 13.1062 8.55 13.05C8.55 13.05 8.49375 13.05 8.49375 12.9938L8.4375 12.9375C8.4375 12.9375 8.4375 12.9375 8.38125 12.8812L6.01875 10.4625C5.7375 10.1813 5.7375 9.675 6.01875 9.39375C6.3 9.1125 6.80625 9.1125 7.0875 9.39375L8.15625 10.5187L8.15625 5.5125C8.15625 5.11875 8.49375 4.725 8.94375 4.725C9.225 4.8375 9.5625 5.175 9.5625 5.56875Z" fill="#EB5757"/>
														</g>
														<defs>
														<clipPath id="clip0_1055_221">
														<rect width="18" height="18" fill="white" transform="translate(0 18) rotate(-90)"/>
														</clipPath>
														</defs>
														</svg>
													</li>
													<li class="font-w600 text-danger ms-2">-10%</li>
												</ul>
											</div>
											<div class="col-xl-3 align-self-center col-lg-3 col-3">
												<div class="text-end text-sm-start text-xl-end text-nowrap">
													<a  href="withdrow.php" class="btn btn-primary">ወጪ <svg class="ms-2" width="10" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.8 7.9C3.53 7.31 2.8 6.7 2.8 5.75C2.8 4.66 3.81 3.9 5.5 3.9C6.92 3.9 7.63 4.44 7.89 5.3C8.01 5.7 8.34 6 8.76 6H9.06C9.72 6 10.19 5.35 9.96 4.73C9.54 3.55 8.56 2.57 7 2.19V1.5C7 0.67 6.33 0 5.5 0C4.67 0 4 0.67 4 1.5V2.16C2.06 2.58 0.5 3.84 0.5 5.77C0.5 8.08 2.41 9.23 5.2 9.9C7.7 10.5 8.2 11.38 8.2 12.31C8.2 13 7.71 14.1 5.5 14.1C3.85 14.1 3 13.51 2.67 12.67C2.52 12.28 2.18 12 1.77 12H1.49C0.82 12 0.35 12.68 0.6 13.3C1.17 14.69 2.5 15.51 4 15.83V16.5C4 17.33 4.67 18 5.5 18C6.33 18 7 17.33 7 16.5V15.85C8.95 15.48 10.5 14.35 10.5 12.3C10.5 9.46 8.07 8.49 5.8 7.9Z" fill="white"/>
													</svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="card style-4">
									<div class="card-body py-0 px-0">
										<canvas id="activeUser" class="h-80"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-sm-6">
								<div class="card income style-2">
									<div class="card-body">
										<div class="d-flex align-itens-center flex-xl-nowrap flex-wrap">
											<div>
												<h4 class="cate-title data">አፈጻጸም
												</h4>
												<span>.</span>
											</div>
											<div>
												<div id="redial"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body pb-0">
										<div class="d-flex align-items-center justify-content-between mb-2">
											<h4 class="cate-title mb-0">የትዕዛዝ መጠን</h4>
											<select class="form-control default-select style-1 w-auto border" style="display: none;">
												<option>ወር</option>
												<option>የዚህ ወር</option>
												<option>ያለፈው ወር</option>
											</select>
										</div>
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div class="d-flex align-items-center flex md-nowrap flex-wrap mb-3 mb-md-0">
												<div class="icon-bx bg-primary d-inline-block text-center me-3">
													<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20 8.5C20 4.09 16.41 0.5 12 0.5C7.58998 0.5 3.99998 4.09 3.99998 8.5C3.99998 12.91 7.58998 16.5 12 16.5C16.41 16.5 20 12.91 20 8.5ZM6.99998 8.5C6.99998 5.74 9.23997 3.5 12 3.5C14.76 3.5 17 5.74 17 8.5C17 11.26 14.76 13.5 12 13.5C9.23997 13.5 6.99998 11.26 6.99998 8.5ZM14.4 18.5H9.59998C4.35998 18.5 0.0999756 22.76 0.0999756 28C0.0999756 28.83 0.769976 29.5 1.59998 29.5H22.4C23.23 29.5 23.9 28.83 23.9 28C23.9 22.76 19.64 18.5 14.4 18.5ZM3.26998 26.5C3.94998 23.64 6.52998 21.5 9.59998 21.5H14.4C17.47 21.5 20.05 23.64 20.73 26.5H3.26998Z" fill="white"/>
													</svg>
												</div>
												<div class="me-3">
													<p class="mb-0">የትዕዛዝ ድምር</p>
													<h4 class="font-w600 mb-0">25.307</h4>
												</div>
												<div class="card style-3 m-0  mt-sm-0  mt-3 mt-sm-0 ms-md-0 ms-lg-3">
													<div class="card-body p-3">
														<div class="d-flex align-items-center justify-content-between mb-2">
															<span>ዓላማ
															</span>
															<h6 class="font-w500 mb-0 data">3.982</h6>
														</div>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only">45% ተጠናቀቀ</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<div class="me-4">
													<ul class="d-flex"> 
														<li class="text-nowrap"><svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="6" cy="6.5" r="4.5" fill="white" stroke="#FC8019" stroke-width="3"/>
														</svg>የዚህ ወር
														</li>
													</ul>
													<h4 class="font-w600 mb-0">1324</h4>
												</div>
												<div>
													<ul class="d-flex"> 
														<li class="text-nowrap"><svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="6" cy="6.5" r="4.5" fill="white" stroke="#EB5757" stroke-width="3"/>
														</svg>ያለፈው ወር
														</li>
													</ul>
													<h4 class="mb-0 font-w600">1324</h4>
												</div>
											</div>
										</div>
										<div id="activityz"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body pb-0">
										<h4 class="cate-title">እንቅስቃሴ</h4>
										<div id="chartBar5"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-4">
											<div class="icon-bx style-3 me-3">
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M8.26295 22.2499C7.87445 22.2499 7.49046 22.1006 7.19946 21.8096L2.68971 17.2999C2.10246 16.7134 2.10246 15.7609 2.68971 15.1744C3.27696 14.5871 4.22796 14.5871 4.81521 15.1744L8.44145 18.8006L19.3952 11.2819C20.0792 10.8124 21.0152 10.9864 21.4847 11.6704C21.955 12.3551 21.781 13.2904 21.0962 13.7606L9.11346 21.9859C8.85471 22.1629 8.55845 22.2499 8.26295 22.2499Z" fill="#FC8019"/>
												<path d="M8.26295 13.982C7.87445 13.982 7.49046 13.8328 7.19946 13.5418L2.68971 9.03203C2.10246 8.44479 2.10246 7.49304 2.68971 6.90654C3.27696 6.31929 4.22796 6.31929 4.81521 6.90654L8.44145 10.5328L19.3952 3.01404C20.0792 2.54454 21.0152 2.71854 21.4847 3.40254C21.955 4.08729 21.781 5.02254 21.0962 5.49279L9.11346 13.7188C8.85471 13.8958 8.55845 13.982 8.26295 13.982Z" fill="#FC8019"/>
												</svg>
											</div>
											<div>
												<p class="font-w500 mb-0">ጠቅላላ ትዕዛዝ</p>
												<h4 class="cate-title mb-0">2.678</h4>
											</div>
										</div>
										<div class="d-flex align-items-center mb-4">
											<div class="icon-bx style-3 me-3">
												<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9 18.5C4.05 18.5 0 14.45 0 9.5C0 4.55 4.05 0.5 9 0.5C13.95 0.5 18 4.55 18 9.5C18 14.45 13.95 18.5 9 18.5ZM9 2.375C5.1 2.375 1.875 5.6 1.875 9.5C1.875 13.4 5.1 16.625 9 16.625C12.9 16.625 16.125 13.4 16.125 9.5C16.125 5.6 12.9 2.375 9 2.375Z" fill="#FC8019"/>
												<path d="M7.57496 13.0251C7.34996 13.0251 7.04996 12.9501 6.89996 12.7251L5.02496 10.8501C4.64996 10.4751 4.64996 9.87515 5.02496 9.50015C5.39996 9.12515 5.99996 9.12515 6.37496 9.50015L7.57496 10.7001L11.625 6.65015C12 6.27515 12.6 6.27515 12.975 6.65015C13.35 7.02515 13.35 7.62515 12.975 8.00015L8.24996 12.7251C8.02496 12.9501 7.79996 13.0251 7.57496 13.0251Z" fill="#FC8019"/>
												</svg>
											</div>
											<div>
												<p class="font-w500 mb-0">የተጠናቀቀ ጠቅላላ ትእዛዝ </p>
												<h4 class="cate-title mb-0">1.234</h4>
											</div>
										</div>
										<div class="d-flex align-items-center mb-4">
											<div class="icon-bx style-3 me-3">
												<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.00002 0.5C7.21998 0.5 5.47992 1.02784 3.99988 2.01678C2.51983 3.00571 1.36628 4.41132 0.685089 6.05586C0.00389956 7.7004 -0.174331 9.51 0.172937 11.2558C0.520204 13.0017 1.37737 14.6053 2.63605 15.864C3.89472 17.1227 5.49837 17.9798 7.2442 18.3271C8.99004 18.6744 10.7996 18.4961 12.4442 17.8149C14.0887 17.1338 15.4943 15.9802 16.4833 14.5002C17.4722 13.0201 18 11.2801 18 9.50002C18 8.31812 17.7672 7.14779 17.3149 6.05586C16.8627 4.96393 16.1997 3.97177 15.364 3.13604C14.5283 2.30032 13.5361 1.63738 12.4442 1.18509C11.3522 0.732792 10.1819 0.5 9.00002 0.5ZM9.00002 16.7C7.57599 16.7 6.18394 16.2778 4.99991 15.4866C3.81587 14.6955 2.89303 13.571 2.34808 12.2553C1.80312 10.9397 1.66054 9.49203 1.93835 8.09536C2.21617 6.6987 2.9019 5.41578 3.90884 4.40884C4.91578 3.4019 6.1987 2.71616 7.59537 2.43835C8.99203 2.16054 10.4397 2.30312 11.7553 2.84807C13.071 3.39302 14.1955 4.31587 14.9866 5.4999C15.7778 6.68394 16.2 8.07599 16.2 9.50002C16.2 11.4096 15.4415 13.2409 14.0912 14.5912C12.7409 15.9415 10.9096 16.7 9.00002 16.7Z" fill="#FC8019"/>
												<path d="M9.0002 5C8.7615 5 8.53259 5.09482 8.3638 5.2636C8.19502 5.43239 8.1002 5.66131 8.1002 5.9V10.4C8.1002 10.6387 8.19502 10.8676 8.3638 11.0364C8.53259 11.2052 8.7615 11.3 9.0002 11.3C9.2389 11.3 9.46781 11.2052 9.6366 11.0364C9.80538 10.8676 9.9002 10.6387 9.9002 10.4V5.9C9.9002 5.66131 9.80538 5.43239 9.6366 5.2636C9.46781 5.09482 9.2389 5 9.0002 5ZM9.6392 12.479L9.5042 12.362L9.3422 12.281L9.1712 12.2C9.02587 12.1722 8.87593 12.1806 8.73465 12.2246C8.59336 12.2685 8.46509 12.3467 8.3612 12.452C8.28024 12.5349 8.21607 12.6327 8.1722 12.74C8.12033 12.8527 8.09567 12.976 8.1002 13.1C8.10119 13.3361 8.19493 13.5624 8.3612 13.73C8.44843 13.8122 8.54882 13.8791 8.6582 13.928C8.76593 13.9756 8.88242 14.0002 9.0002 14.0002C9.11798 14.0002 9.23447 13.9756 9.3422 13.928C9.45158 13.8791 9.55197 13.8122 9.6392 13.73C9.80547 13.5624 9.89921 13.3361 9.9002 13.1C9.89997 12.9794 9.87548 12.86 9.8282 12.749C9.78236 12.6481 9.71828 12.5566 9.6392 12.479Z" fill="#FC8019"/>
												</svg>
											</div>
											<div>
												<p class="font-w500 mb-0">የተስረዘ ጠቅላላ ትዕዛዝ </p>
												<h4 class="cate-title mb-0">123</h4>
											</div>
										</div>
										<div class="d-flex align-items-center mb-0">
											<div class="icon-bx style-3 me-3">
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.1156 12.8117C19.1156 13.1545 19.0927 13.4973 19.047 13.8383C19.0576 13.7609 19.0681 13.6818 19.0787 13.6045C18.9873 14.2795 18.808 14.9404 18.5425 15.568C18.5724 15.4977 18.6023 15.4274 18.6304 15.3588C18.3738 15.9652 18.0398 16.5348 17.639 17.0568C17.6847 16.9971 17.7304 16.9391 17.7761 16.8793C17.3718 17.4031 16.9007 17.8725 16.3787 18.2768C16.4384 18.2311 16.4964 18.1854 16.5562 18.1397C16.0341 18.5404 15.4646 18.8744 14.8582 19.1311C14.9285 19.1012 14.9988 19.0713 15.0673 19.0432C14.4398 19.3068 13.7789 19.4879 13.1039 19.5793C13.1812 19.5688 13.2603 19.5582 13.3377 19.5477C12.6574 19.6373 11.9666 19.6373 11.2845 19.5477C11.3619 19.5582 11.441 19.5688 11.5183 19.5793C10.8433 19.4879 10.1824 19.3086 9.55484 19.0432C9.62516 19.0731 9.69547 19.1029 9.76402 19.1311C9.15758 18.8744 8.58805 18.5404 8.06598 18.1397C8.12574 18.1854 8.18375 18.2311 8.24351 18.2768C7.71969 17.8725 7.25035 17.4014 6.84605 16.8793C6.89176 16.9391 6.93746 16.9971 6.98316 17.0568C6.58238 16.5348 6.2484 15.9652 5.99176 15.3588C6.02164 15.4291 6.05152 15.4994 6.07965 15.568C5.81597 14.9404 5.63492 14.2795 5.54351 13.6045C5.55406 13.6818 5.56461 13.7609 5.57515 13.8383C5.48551 13.158 5.48551 12.4672 5.57515 11.7852C5.56461 11.8625 5.55406 11.9416 5.54351 12.019C5.63492 11.344 5.81422 10.683 6.07965 10.0555C6.04976 10.1258 6.01988 10.1961 5.99176 10.2647C6.2484 9.65821 6.58238 9.08868 6.98316 8.56661C6.93746 8.62637 6.89176 8.68438 6.84605 8.74415C7.25035 8.22032 7.72144 7.75098 8.24351 7.34669C8.18375 7.39239 8.12574 7.43809 8.06598 7.48379C8.58805 7.08301 9.15758 6.74903 9.76402 6.49239C9.69371 6.52227 9.6234 6.55215 9.55484 6.58028C10.1824 6.31661 10.8433 6.13555 11.5183 6.04415C11.441 6.05469 11.3619 6.06524 11.2845 6.07579C11.9648 5.98614 12.6556 5.98614 13.3377 6.07579C13.2603 6.06524 13.1812 6.05469 13.1039 6.04415C13.7789 6.13555 14.4398 6.31485 15.0673 6.58028C14.997 6.5504 14.9267 6.52051 14.8582 6.49239C15.4646 6.74903 16.0341 7.08301 16.5562 7.48379C16.4964 7.43809 16.4384 7.39239 16.3787 7.34669C16.9025 7.75098 17.3718 8.22208 17.7761 8.74415C17.7304 8.68438 17.6847 8.62637 17.639 8.56661C18.0398 9.08868 18.3738 9.65821 18.6304 10.2647C18.6005 10.1943 18.5707 10.124 18.5425 10.0555C18.8062 10.683 18.9873 11.344 19.0787 12.019C19.0681 11.9416 19.0576 11.8625 19.047 11.7852C19.0927 12.1262 19.1156 12.469 19.1156 12.8117C19.1156 13.0367 19.214 13.274 19.3722 13.434C19.5252 13.5869 19.7748 13.7012 19.9945 13.6906C20.2212 13.6801 20.4568 13.6063 20.6168 13.434C20.775 13.2617 20.8752 13.0508 20.8734 12.8117C20.8716 11.9328 20.7398 11.0398 20.4673 10.2031C20.2037 9.39102 19.8257 8.60704 19.3283 7.91094C19.0646 7.54004 18.7781 7.18321 18.4617 6.85626C18.1435 6.52754 17.7972 6.23751 17.4334 5.95977C16.7548 5.43946 15.9972 5.04747 15.1974 4.75215C14.3748 4.44981 13.4941 4.29161 12.6205 4.25645C11.7345 4.22129 10.8275 4.33028 9.97496 4.57286C9.15758 4.80489 8.35953 5.16348 7.64937 5.63106C6.94625 6.09336 6.29762 6.65411 5.76148 7.30274C5.46969 7.65782 5.19371 8.02872 4.95816 8.42247C4.72086 8.81797 4.52926 9.23458 4.35347 9.66172C4.02125 10.4721 3.84019 11.3352 3.7734 12.207C3.70484 13.0912 3.78922 13.9982 3.99664 14.8596C4.19879 15.691 4.53629 16.5049 4.98101 17.2361C5.41695 17.9533 5.96363 18.6213 6.59117 19.1785C7.22398 19.7393 7.93238 20.2227 8.70406 20.5707C9.12594 20.7623 9.56012 20.9311 10.0066 21.0559C10.4636 21.1842 10.9312 21.2615 11.4023 21.316C12.2935 21.4215 13.2005 21.3617 14.0777 21.1842C14.9162 21.0137 15.7371 20.699 16.4841 20.2824C17.2171 19.8729 17.9009 19.3455 18.481 18.7373C19.0664 18.1256 19.5726 17.4225 19.9488 16.6649C20.3337 15.8914 20.6168 15.0652 20.7468 14.2109C20.8171 13.7451 20.8664 13.2793 20.8664 12.8082C20.8664 12.5832 20.7679 12.3459 20.6097 12.1859C20.4568 12.033 20.2072 11.9188 19.9875 11.9293C19.7607 11.9398 19.5252 12.0137 19.3652 12.1859C19.2158 12.3617 19.1156 12.5727 19.1156 12.8117Z" fill="#FC8019"/>
												<path d="M12.3128 18.2328C12.5378 18.2328 12.7751 18.1344 12.935 17.9762C13.0879 17.8233 13.2022 17.5737 13.1917 17.3539C13.1811 17.1272 13.1073 16.8916 12.935 16.7317C12.7628 16.5735 12.5518 16.475 12.3128 16.475C12.0878 16.475 11.8505 16.5735 11.6905 16.7317C11.5376 16.8846 11.4233 17.1342 11.4339 17.3539C11.4444 17.5807 11.5182 17.8162 11.6905 17.9762C11.8628 18.1344 12.0755 18.2328 12.3128 18.2328ZM10.6077 10.8518C10.6077 10.7375 10.6147 10.625 10.6305 10.5108C10.62 10.5881 10.6094 10.6672 10.5989 10.7446C10.6305 10.5178 10.6903 10.2963 10.7782 10.0854C10.7483 10.1557 10.7184 10.226 10.6903 10.2946C10.7782 10.0889 10.8907 9.89554 11.026 9.718C10.9803 9.77776 10.9346 9.83577 10.8889 9.89554C11.026 9.71975 11.1825 9.56331 11.3583 9.4262C11.2985 9.4719 11.2405 9.51761 11.1807 9.56331C11.3583 9.42796 11.5516 9.31546 11.7573 9.22757C11.687 9.25745 11.6167 9.28733 11.5481 9.31546C11.759 9.22757 11.9805 9.1678 12.2073 9.13616C12.1299 9.14671 12.0508 9.15725 11.9735 9.1678C12.2003 9.13968 12.4288 9.13968 12.6555 9.1678C12.5782 9.15725 12.4991 9.14671 12.4217 9.13616C12.6485 9.1678 12.87 9.22581 13.0827 9.3137C13.0124 9.28382 12.9421 9.25393 12.8735 9.22581C13.0792 9.3137 13.2725 9.4262 13.4501 9.56155C13.3903 9.51585 13.3323 9.47014 13.2725 9.42444C13.4483 9.56155 13.6047 9.718 13.7419 9.89378C13.6961 9.83401 13.6504 9.776 13.6047 9.71624C13.7401 9.89378 13.8526 10.0871 13.9405 10.2928C13.9106 10.2225 13.8807 10.1522 13.8526 10.0836C13.9405 10.2963 14.0002 10.516 14.0301 10.7446C14.0196 10.6672 14.009 10.5881 13.9985 10.5108C14.0266 10.7375 14.0266 10.966 13.9985 11.191C14.009 11.1137 14.0196 11.0346 14.0301 10.9573C13.9985 11.184 13.9387 11.4055 13.8508 11.6182C13.8807 11.5479 13.9106 11.4776 13.9387 11.409C13.8508 11.6147 13.7383 11.808 13.6012 11.9873C13.6469 11.9276 13.6926 11.8696 13.7383 11.8098C13.6012 11.9856 13.4448 12.142 13.269 12.2791C13.3288 12.2334 13.3868 12.1877 13.4465 12.142C13.2708 12.2756 13.0809 12.3846 12.8805 12.4742C12.6239 12.5885 12.3831 12.7678 12.1844 12.9647C11.7239 13.4235 11.4673 14.0405 11.4374 14.6873C11.4321 14.8157 11.4356 14.944 11.4356 15.0723C11.4356 15.2973 11.534 15.5346 11.6923 15.6946C11.8452 15.8475 12.0948 15.9617 12.3145 15.9512C12.5413 15.9407 12.7768 15.8668 12.9368 15.6946C13.095 15.5223 13.1934 15.3114 13.1934 15.0723C13.1934 14.893 13.1864 14.7137 13.2092 14.5362C13.1987 14.6135 13.1881 14.6926 13.1776 14.77C13.1987 14.6293 13.2356 14.494 13.2901 14.3621C13.2602 14.4325 13.2303 14.5028 13.2022 14.5713C13.2602 14.4342 13.3358 14.3076 13.4272 14.1881C13.3815 14.2479 13.3358 14.3059 13.2901 14.3657C13.378 14.2549 13.4782 14.1565 13.5889 14.0686C13.5292 14.1143 13.4711 14.16 13.4114 14.2057C13.5819 14.0756 13.7735 14 13.9616 13.9016C14.1954 13.7785 14.4098 13.6168 14.6102 13.4463C14.9635 13.1457 15.2624 12.7467 15.4487 12.3213C15.5577 12.0717 15.6561 11.8239 15.7053 11.5549C15.7545 11.2842 15.7897 11.0065 15.7756 10.7305C15.751 10.1961 15.6157 9.69339 15.3696 9.22054C14.9319 8.3803 14.1057 7.73694 13.1917 7.50139C12.6626 7.36604 12.1299 7.36429 11.5956 7.46624C11.3407 7.5137 11.1069 7.60862 10.8678 7.71057C10.6903 7.78616 10.5216 7.87932 10.3651 7.99182C9.91862 8.31175 9.53015 8.70901 9.26999 9.19944C8.99929 9.70921 8.85163 10.2735 8.84988 10.8535C8.84812 11.0785 8.94831 11.3158 9.10652 11.4758C9.25945 11.6287 9.50905 11.743 9.72878 11.7325C10.2069 11.7096 10.6059 11.3457 10.6077 10.8518Z" fill="#FC8019"/>
												</svg>
											</div>
											<div>
												<p class="font-w500 mb-0">ትእዛዝ በመጠባበቅ ላይ</p>
												<h4 class="cate-title mb-0">432</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-sm-6">
								<div class="card">
									<div class="card-body pb-0">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="cate-title">ተወዳጅ ምግብ</h4>
											<div class="dropdown dropstart">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="javascript:void(0);">ኤዲት</a>
													<a class="dropdown-item" href="javascript:void(0);">ሰርዝ</a>
												</div>
											</div>
										</div>
										<div id="piechart"></div>
										<h6 class="font-w700 mb-3">ታዋቂዎቹ</h6>
										<div class="d-flex justify-content-between mb-2">
											<span><svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="16" height="16" rx="4" fill="var(--primary)"/>
											</svg>
											ባህላዊ ምግቦች (27%)</span>
											<h6>763</h6>
										</div>
										<div class="d-flex justify-content-between mb-2">
											<span><svg  class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="16" height="16" rx="4" fill="#EB5757"/>
											</svg>
											ፈጣን ምግቦች (50%)</span>
											<h6>763</h6>
										</div>
										<div class="d-flex justify-content-between mb-2">
											<span><svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect width="16" height="16" rx="4" fill="#1FBF75"/>
											</svg>
											ዘመናዊ ምግቦች (23%)</span>
											<h6>69</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card bg-primary food-grap">
									<div class="card-body pb-0">
										<div class="data-info">
											<p class="font-w500 mb-0">የደረሰ ትዕዛዝ</p>
											<h3>932</h3>
											<div class=" data-content d-flex justify-content-between align-items-center  pb-2">
												<span>ባህላዊ ምግቦች (27%)</span>
												<h6 class="mb-0">763</h6>
											</div>
											<div class=" data-content d-flex justify-content-between align-items-center py-2">
												<span>ፈጣን ምግቦች (50%)</span>
												<h6 class="mb-0">321</h6>
											</div>
											<div class="data-content d-flex border-0 align-items-center justify-content-between pt-2">
												<span>ዘመናዊ ምግቦች (23%)</span>
												<h6 class="mb-0">69</h6>
											</div>
										</div>
									</div>
									<div class="card-footer p-0 border-0">
										<div class="pt-line mt-3">
											<span class="peity-line" data-width="100%" style="display: none;">4,7,4,9,5,6,8,3,1,3,5,6</span>
										</div>
									</div>
								</div>
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
			<p>የቅጂ መብት © የተነደፈ  by <a href="https://" target="_blank"> ሽጋ</a> 2023</p>
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
	
	<!-- Apex Chart -->
	<script src="assets/vendor/apexchart/apexchart.js"></script>

	<script src="assets/vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/vendor/peity/jquery.peity.min.js"></script>
	<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script>

	<!-- Dashboard 1 -->
	<script src="assets/js/dashboard/dashboard-2.js"></script>
	
	<script src="assets/js/dlabnav-init.js"></script>
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:09 GMT -->
</html>