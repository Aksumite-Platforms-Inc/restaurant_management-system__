<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/deliver-main.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:19 GMT -->
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
											<input type="text" class="form-control"  placeholder="What do you want eat today">
											
										</div>
										<div class="search-drop">
											<div class="card tag-bx">
												<div class="card-header d-block border-0">
													<h4>በቅርብ ጊዜ ፈልገዋል</h4>
													<ul class="d-flex align-items-center flex-wrap">
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Bakery</a></li>		
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Burger</a></li>																
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Beverage</a></li>	
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded me-2">Chicken</a></li>															
														<li><a href="javascript:void(0);" class="btn btn-outline-light btn-rounded mt-3 mt-xl-0">Pizza</a></li>
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
																				<a href="javascript:void(0);"><h6>ፍርፍር</h6></a>
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
														<h6 class="font-w500 mb-0 ms-2">አበበ</h6>
													</div>	
													<i class="fas fa-chevron-down"></i>
												</div>
												
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="app-profile.php" class="dropdown-item ai-icon ">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
												<span class="ms-2">መገለጫ</span>
											</a>
											<a href="email-inbox.php" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">የገቢ መልእክት ሳጥን</span>
											</a>
											<a href="edit-profile.php" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">ኤዲት መገለጫ</span>
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
							<li><a href="food-order.php">የምግብ ማዘዣ</a></li>
							<li><a href="favorite-menu.php">ተወዳጅ ምናሌ</a></li>
							<li><a href="message.php">መልእክት</a></li>	
							<li><a href="order-history.php">የትዕዛዝ ታሪክ</a></li>	
							<li><a href="notification.php">ማስታወቂያ</a></li>	
							<li><a href="bill.php">ሂሳብ</a></li>	
							<li><a href="setting.php">ቅንብሮች</a></li>	
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
							<li><a href="restro-setting.php">ቅንብሮች</a></li>
							
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
					<p><strong>AASTU - የመስመር ላይ የምግብ አቅርቦት አስተዳዳሪ ዳሽቦርድ</strong> © 2022 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> SHEGA </p>
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
					<div class="col-xl-5">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h4 class="cate-title">መገለጫ</h4>
							</div>
							<div class="card-body pt-2">
								<div class="d-profile">
									<div class="d-flex justify-content-between mb-3 mb-sm-0">
										<div class="d-flex">
											<img src="assets/images/chat-img/pic-6.jpg" alt="">
											<div>
												<h3 class="font-w700">አበበ ከበደ</h3>
												<div class="d-flex align-items-center">
													<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 0.500031L9.79611 6.02789H15.6085L10.9062 9.4443L12.7023 14.9722L8 11.5558L3.29772 14.9722L5.09383 9.4443L0.391548 6.02789H6.20389L8 0.500031Z" fill="#FC8019"></path>
													</svg>
													<p class="mb-0 px-2">5.0</p>
													<svg class="me-2" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="2" cy="2.50003" r="2" fill="#C4C4C4"></circle>
													</svg>
													<p class="mb-0">1k+ ግምገማዎች</p>
												</div>
												<p>Join June 2020</p>
												<a href="edit-profile.php" class="btn btn-light btn-sm">ኤዲት መገለጫ</a>
											</div>
										</div>
										<div>
											<div class="dropdown dropstart">
												<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</a>
												<div class="dropdown-menu" style="margin: 0px;">
													<a class="dropdown-item" href="javascript:void(0);">ኤዲት</a>
													<a class="dropdown-item" href="javascript:void(0);">አጥፋ</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-4 col-xxl-6 col-sm-4 sp15">
										<div class="card">
											<div class="card-body p-4">
												<div class="text-center">
													<svg  class="mb-2" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12.8596 26C12.481 26 12.1069 25.8538 11.8233 25.5688L7.42915 21.1522C6.85695 20.5778 6.85695 19.6449 7.42915 19.0705C8.00135 18.4954 8.92798 18.4954 9.50018 19.0705L13.0335 22.6219L23.7065 15.2583C24.373 14.7985 25.285 14.9689 25.7425 15.6388C26.2007 16.3094 26.0311 17.2254 25.3639 17.6859L13.6883 25.7414C13.4361 25.9148 13.1475 26 12.8596 26Z" fill="#A6C44A"/>
													<path d="M12.8596 17C12.481 17 12.1069 16.8538 11.8233 16.5688L7.42915 12.1522C6.85695 11.577 6.85695 10.6449 7.42915 10.0705C8.00135 9.49539 8.92798 9.49539 9.50018 10.0705L13.0335 13.6219L23.7065 6.25835C24.373 5.79854 25.285 5.96895 25.7425 6.63883C26.2007 7.30945 26.0311 8.2254 25.3639 8.68594L13.6883 16.7422C13.4361 16.9155 13.1475 17 12.8596 17Z" fill="#A6C44A"/>
													</svg>
													<h4 class="mb-0">932</h4>
													<p class="mb-0">አልቋል</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-xxl-6 col-sm-4 sp15">
										<div class="card">
											<div class="card-body p-4">
												<div class="text-center pt-2">
													<svg  class="mb-2" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12.2101 24C5.61008 24 0.210083 18.6 0.210083 12C0.210083 5.4 5.61008 0 12.2101 0C18.8101 0 24.2101 5.4 24.2101 12C24.2101 18.6 18.8101 24 12.2101 24ZM12.2101 2.5C7.01008 2.5 2.71008 6.8 2.71008 12C2.71008 17.2 7.01008 21.5 12.2101 21.5C17.4101 21.5 21.7101 17.2 21.7101 12C21.7101 6.8 17.4101 2.5 12.2101 2.5Z" fill="#FC8019"/>
													<path d="M10.31 16.7002C10.01 16.7002 9.61003 16.6002 9.41003 16.3002L6.91003 13.8002C6.41003 13.3002 6.41003 12.5002 6.91003 12.0002C7.41003 11.5002 8.21003 11.5002 8.71003 12.0002L10.31 13.6002L15.71 8.2002C16.21 7.7002 17.01 7.7002 17.51 8.2002C18.01 8.7002 18.01 9.5002 17.51 10.0002L11.21 16.3002C10.91 16.6002 10.61 16.7002 10.31 16.7002Z" fill="#FC8019"/>
													</svg>
													<h4 class="mb-0">1,032</h4>
													<p class="mb-0">ደረሰ</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-xxl-12 col-sm-4 sp15">
										<div class="card">
											<div class="card-body p-4">
												<div class="text-center">
													<svg class="mb-2" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.5 4C14.1266 4 11.8066 4.70379 9.83317 6.02237C7.85978 7.34095 6.32171 9.21509 5.41345 11.4078C4.5052 13.6005 4.26756 16.0133 4.73058 18.3411C5.19361 20.6689 6.3365 22.8071 8.01473 24.4853C9.69296 26.1636 11.8312 27.3064 14.1589 27.7695C16.4867 28.2325 18.8995 27.9949 21.0922 27.0866C23.285 26.1783 25.1591 24.6403 26.4777 22.6669C27.7963 20.6935 28.5 18.3734 28.5 16C28.5 14.4242 28.1897 12.8637 27.5866 11.4078C26.9835 9.9519 26.0996 8.62903 24.9853 7.51472C23.871 6.40042 22.5481 5.5165 21.0922 4.91345C19.6363 4.31039 18.0759 4 16.5 4ZM16.5 25.6C14.6013 25.6 12.7453 25.037 11.1665 23.9821C9.58783 22.9273 8.35737 21.428 7.63077 19.6738C6.90417 17.9196 6.71405 15.9894 7.08447 14.1272C7.45489 12.2649 8.3692 10.5544 9.71179 9.21178C11.0544 7.8692 12.7649 6.95489 14.6272 6.58447C16.4894 6.21405 18.4196 6.40416 20.1738 7.13076C21.928 7.85737 23.4273 9.08782 24.4821 10.6665C25.537 12.2453 26.1 14.1013 26.1 16C26.1 18.5461 25.0886 20.9879 23.2883 22.7883C21.4879 24.5886 19.0461 25.6 16.5 25.6Z" fill="#EB5757"/>
													<path d="M16.5003 10C16.182 10 15.8768 10.1264 15.6517 10.3515C15.4267 10.5765 15.3003 10.8817 15.3003 11.2V17.2C15.3003 17.5183 15.4267 17.8235 15.6517 18.0485C15.8768 18.2736 16.182 18.4 16.5003 18.4C16.8185 18.4 17.1238 18.2736 17.3488 18.0485C17.5738 17.8235 17.7003 17.5183 17.7003 17.2V11.2C17.7003 10.8817 17.5738 10.5765 17.3488 10.3515C17.1238 10.1264 16.8185 10 16.5003 10ZM17.3523 19.972L17.1723 19.816L16.9563 19.708L16.7283 19.6C16.5345 19.5629 16.3346 19.5742 16.1462 19.6328C15.9578 19.6914 15.7868 19.7955 15.6483 19.936C15.5403 20.0466 15.4548 20.177 15.3963 20.32C15.3271 20.4703 15.2942 20.6347 15.3003 20.8C15.3016 21.1148 15.4266 21.4165 15.6483 21.64C15.7646 21.7496 15.8984 21.8388 16.0443 21.904C16.1879 21.9675 16.3432 22.0003 16.5003 22.0003C16.6573 22.0003 16.8126 21.9675 16.9563 21.904C17.1021 21.8388 17.236 21.7496 17.3523 21.64C17.574 21.4165 17.6989 21.1148 17.7003 20.8C17.7 20.6392 17.6673 20.48 17.6043 20.332C17.5431 20.1975 17.4577 20.0755 17.3523 19.972Z" fill="#EB5757"/>
													</svg>
													<h4 class="mb-0">102</h4>
													<p class="mb-0">ተሰርዟል</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card h-auto">
									<div class="card-body p-3">
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div class="d-flex align-items-center mb-3 mb-sm-0 content-space">
												<div class="icon-bx d-inline-block text-center bg-success me-3">
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9 30H23C24.3261 30 25.5979 29.4732 26.5355 28.5355C27.4732 27.5979 28 26.3261 28 25V19C28 17.6739 27.4732 16.4021 26.5355 15.4645C25.5979 14.5268 24.3261 14 23 14H9C7.67392 14 6.40215 14.5268 5.46447 15.4645C4.52678 16.4021 4 17.6739 4 19V25C4 26.3261 4.52678 27.5979 5.46447 28.5355C6.40215 29.4732 7.67392 30 9 30ZM6 19C6 18.2044 6.31607 17.4413 6.87868 16.8787C7.44129 16.3161 8.20435 16 9 16H23C23.7956 16 24.5587 16.3161 25.1213 16.8787C25.6839 17.4413 26 18.2044 26 19V25C26 25.7956 25.6839 26.5587 25.1213 27.1213C24.5587 27.6839 23.7956 28 23 28H9C8.20435 28 7.44129 27.6839 6.87868 27.1213C6.31607 26.5587 6 25.7956 6 25V19Z" fill="white"/>
													<path d="M16 26C16.7912 26 17.5645 25.7654 18.2223 25.3259C18.8801 24.8864 19.3928 24.2616 19.6955 23.5307C19.9983 22.7998 20.0775 21.9956 19.9232 21.2196C19.7688 20.4437 19.3879 19.731 18.8285 19.1716C18.269 18.6122 17.5563 18.2312 16.7804 18.0769C16.0045 17.9225 15.2002 18.0017 14.4693 18.3045C13.7384 18.6072 13.1137 19.1199 12.6741 19.7777C12.2346 20.4355 12 21.2089 12 22C12 23.0609 12.4215 24.0783 13.1716 24.8284C13.9217 25.5786 14.9392 26 16 26ZM16 20C16.3956 20 16.7823 20.1173 17.1112 20.3371C17.4401 20.5568 17.6964 20.8692 17.8478 21.2346C17.9992 21.6001 18.0388 22.0022 17.9616 22.3902C17.8844 22.7781 17.6939 23.1345 17.4142 23.4142C17.1345 23.6939 16.7782 23.8844 16.3902 23.9616C16.0022 24.0387 15.6001 23.9991 15.2347 23.8478C14.8692 23.6964 14.5569 23.44 14.3371 23.1111C14.1173 22.7822 14 22.3956 14 22C14 21.4696 14.2107 20.9609 14.5858 20.5858C14.9609 20.2107 15.4696 20 16 20ZM16 2C15.7348 2 15.4805 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3V8.59L12.46 6.05C12.2687 5.88617 12.0227 5.80057 11.771 5.81029C11.5193 5.82001 11.2806 5.92434 11.1025 6.10244C10.9244 6.28053 10.82 6.51927 10.8103 6.77095C10.8006 7.02262 10.8862 7.2687 11.05 7.46L15.29 11.71C15.3822 11.8 15.4908 11.8713 15.61 11.92C15.7334 11.9723 15.866 11.9992 16 11.9992C16.134 11.9992 16.2666 11.9723 16.39 11.92C16.5092 11.8713 16.6179 11.8 16.71 11.71L21 7.46C21.1639 7.2687 21.2495 7.02262 21.2397 6.77095C21.23 6.51927 21.1257 6.28053 20.9476 6.10244C20.7695 5.92434 20.5308 5.82001 20.2791 5.81029C20.0274 5.80057 19.7813 5.88617 19.59 6.05L17 8.59V3C17 2.73478 16.8947 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2Z" fill="white"/>
													</svg>
												</div>
												<div>
													<p class="mb-0">የዛሬ ገቢዎች</p>
													<h4>$240 ብር</h4>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<div class="icon-bx d-inline-block text-center bg-primary me-3">
													<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M4 19V25C4 26.3261 4.52678 27.5979 5.46447 28.5355C6.40215 29.4732 7.67392 30 9 30H23C24.3261 30 25.5979 29.4732 26.5355 28.5355C27.4732 27.5979 28 26.3261 28 25V19C28 17.6739 27.4732 16.4021 26.5355 15.4645C25.5979 14.5268 24.3261 14 23 14H9C7.67392 14 6.40215 14.5268 5.46447 15.4645C4.52678 16.4021 4 17.6739 4 19ZM26 19V25C26 25.7956 25.6839 26.5587 25.1213 27.1213C24.5587 27.6839 23.7956 28 23 28H9C8.20435 28 7.44129 27.6839 6.87868 27.1213C6.31607 26.5587 6 25.7956 6 25V19C6 18.2044 6.31607 17.4413 6.87868 16.8787C7.44129 16.3161 8.20435 16 9 16H23C23.7956 16 24.5587 16.3161 25.1213 16.8787C25.6839 17.4413 26 18.2044 26 19Z" fill="white"/>
													<path d="M16 25.9999C16.7911 25.9999 17.5644 25.7653 18.2222 25.3258C18.88 24.8863 19.3927 24.2616 19.6955 23.5307C19.9982 22.7998 20.0774 21.9955 19.9231 21.2196C19.7688 20.4437 19.3878 19.7309 18.8284 19.1715C18.269 18.6121 17.5562 18.2311 16.7803 18.0768C16.0044 17.9225 15.2001 18.0017 14.4692 18.3044C13.7383 18.6072 13.1136 19.1199 12.6741 19.7777C12.2346 20.4355 12 21.2088 12 21.9999C12 23.0608 12.4214 24.0782 13.1715 24.8284C13.9217 25.5785 14.9391 25.9999 16 25.9999ZM16 19.9999C16.3955 19.9999 16.7822 20.1172 17.1111 20.337C17.44 20.5568 17.6963 20.8691 17.8477 21.2346C17.9991 21.6 18.0387 22.0022 17.9615 22.3901C17.8844 22.7781 17.6939 23.1344 17.4142 23.4142C17.1345 23.6939 16.7781 23.8843 16.3901 23.9615C16.0022 24.0387 15.6 23.9991 15.2346 23.8477C14.8691 23.6963 14.5568 23.44 14.337 23.1111C14.1173 22.7822 14 22.3955 14 21.9999C14 21.4695 14.2107 20.9608 14.5858 20.5857C14.9608 20.2107 15.4695 19.9999 16 19.9999ZM16.71 2.28994C16.617 2.19621 16.5064 2.12182 16.3845 2.07105C16.2627 2.02028 16.132 1.99414 16 1.99414C15.868 1.99414 15.7372 2.02028 15.6154 2.07105C15.4935 2.12182 15.3829 2.19621 15.29 2.28994L11.05 6.53994C10.8564 6.72692 10.745 6.98315 10.7403 7.25226C10.7356 7.52138 10.838 7.78133 11.025 7.97494C11.2119 8.16855 11.4682 8.27995 11.7373 8.28464C12.0064 8.28933 12.2664 8.18692 12.46 7.99994L15 5.40994V10.9999C15 11.2652 15.1053 11.5195 15.2929 11.707C15.4804 11.8946 15.7347 11.9999 16 11.9999C16.2652 11.9999 16.5195 11.8946 16.7071 11.707C16.8946 11.5195 17 11.2652 17 10.9999V5.40994L19.54 7.99994C19.7262 8.18468 19.9776 8.28883 20.24 8.28994C20.3799 8.29755 20.5199 8.27567 20.6508 8.22571C20.7817 8.17575 20.9007 8.09883 21 7.99994C21.1862 7.81258 21.2908 7.55912 21.2908 7.29494C21.2908 7.03075 21.1862 6.7773 21 6.58994L16.71 2.28994Z" fill="white"/>
													</svg>
												</div>
												<div>
													<p class="mb-0">የዛሬ ገቢዎች</p>
													<h4>113 ብር</h4>
												</div>
											</div>
										</div>
										<hr>
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<p>ጠቅላላ ጉዞ</p>
												<h4 class="mb-0 font-w700">15 </h4>
											</div>
											<div>
												<p>ጠቅላላ ርቀት</p>
												<h4 class="mb-0 font-w700">15 Km</h4>
											</div>
											<div>
												<p>ጠቅላላ ጊዜ</p>
												<h4 class="mb-0 font-w700">90 ደቂቃ</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="card h-auto m-0">
									<div class="card-body p-3">
										<div class="d-flex  align-items-center justify-content-between">
											<div class="d-flex">
												<div class="icon-bx d-inline-block text-center bg-info me-sm-4 me-2">
													<svg  width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10.6 9.8999C5.1 9.8999 0.625 14.3749 0.625 19.8749C0.625 25.3749 5.1 29.8499 10.6 29.8499C16.1 29.8499 20.575 25.3749 20.575 19.8749C20.55 14.3499 16.1 9.8999 10.6 9.8999Z" fill="white"/>
													<path d="M21.4 2.6748C17.9 2.6748 14.825 4.4998 13.05 7.2248C14.075 7.4248 15.025 7.7498 15.95 8.1748C17.25 6.5998 19.2 5.5998 21.4 5.5998C25.3 5.5998 28.45 8.7498 28.45 12.6498C28.45 15.8248 26.325 18.5248 23.45 19.3998C23.45 19.5498 23.475 19.6998 23.475 19.8498C23.475 20.7248 23.375 21.5998 23.225 22.4248C27.875 21.5748 31.375 17.4998 31.375 12.6248C31.375 7.1498 26.9 2.6748 21.4 2.6748Z" fill="white"/>
													</svg>
												</div>
												<div>
													<p class="mb-0">የእኔ ነጥቦች</p>
													<h4 class="cate-title">3456</h4>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<p class="mb-0">ሽልማቱን ይመልከቱ</p>
												<div class="icon-bx style-1">
													<a href="javascript:void(0);"><i class="fa-solid fa-chevron-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-xl-7">
						<div class="row">
							<div class="col-xl-4 col-sm-4">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="icon-bx style-2 d-inline-block text-center mb-3">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M20 5.6001C10.96 5.6001 3.59998 12.9601 3.59998 22.0001C3.59998 26.7601 5.67998 31.2801 9.27998 34.4001H19.2V32.8001C19.2 32.3601 19.56 32.0001 20 32.0001C20.44 32.0001 20.8 32.3601 20.8 32.8001V34.4001H30.72C34.32 31.2801 36.4 26.7601 36.4 22.0001C36.4 12.9601 29.04 5.6001 20 5.6001ZM19.2 8.8001C19.2 8.3601 19.56 8.0001 20 8.0001C20.44 8.0001 20.8 8.3601 20.8 8.8001V11.2001C20.8 11.6401 20.44 12.0001 20 12.0001C19.56 12.0001 19.2 11.6401 19.2 11.2001V8.8001ZM9.19998 22.8001H6.79998C6.35998 22.8001 5.99998 22.4401 5.99998 22.0001C5.99998 21.5601 6.35998 21.2001 6.79998 21.2001H9.19998C9.63998 21.2001 9.99998 21.5601 9.99998 22.0001C9.99998 22.4401 9.63998 22.8001 9.19998 22.8001ZM12.92 30.2001L11.24 31.8801C11.08 32.0401 10.88 32.1201 10.68 32.1201C10.48 32.1201 10.28 32.0401 10.12 31.8801C9.79998 31.5601 9.79998 31.0801 10.12 30.7601L11.8 29.0801C12.12 28.7601 12.6 28.7601 12.92 29.0801C13.24 29.4001 13.24 29.8801 12.92 30.2001ZM12.92 14.9201C12.76 15.0801 12.56 15.1601 12.36 15.1601C12.16 15.1601 11.96 15.0801 11.8 14.9201L10.12 13.2401C9.79998 12.9201 9.79998 12.4401 10.12 12.1201C10.44 11.8001 10.92 11.8001 11.24 12.1201L12.92 13.8001C13.24 14.1201 13.24 14.6001 12.92 14.9201ZM25.36 17.7601L22.44 20.6801C22.64 21.0801 22.76 21.5201 22.76 22.0001C22.76 23.5601 21.52 24.8001 19.96 24.8001C18.4 24.8001 17.16 23.5601 17.16 22.0001C17.16 20.4401 18.4 19.2001 19.96 19.2001C20.44 19.2001 20.88 19.3201 21.28 19.5201L24.2 16.6001C24.52 16.2801 25 16.2801 25.32 16.6001C25.68 16.9201 25.68 17.4401 25.36 17.7601ZM29.92 31.9201C29.76 32.0801 29.56 32.1601 29.36 32.1601C29.16 32.1601 28.96 32.0801 28.8 31.9201L27.12 30.2401C26.8 29.9201 26.8 29.4001 27.12 29.1201C27.44 28.8001 27.92 28.8001 28.24 29.1201L29.36 30.2401C29.36 30.2401 29.36 30.2401 29.36 30.2001C31.36 27.9601 32.44 25.0801 32.44 22.0401C32.44 19.0001 31.36 16.1201 29.36 13.8801C29.36 13.8801 29.36 13.8801 29.36 13.8401L28.24 14.9601C28.08 15.1201 27.88 15.2001 27.68 15.2001C27.48 15.2001 27.28 15.1201 27.12 14.9601C26.8 14.6401 26.8 14.1201 27.12 13.8401L28.8 12.1601C29.12 11.8401 29.6 11.8401 29.92 12.1601C32.56 14.7601 34 18.2401 34 22.0001C34 25.7201 32.56 29.2401 29.92 31.9201ZM21.2 22.0001C21.2 22.6401 20.68 23.2001 20 23.2001C19.32 23.2001 18.8 22.6401 18.8 22.0001C18.8 21.3201 19.32 20.8001 20 20.8001C20.68 20.8001 21.2 21.3201 21.2 22.0001Z" fill="#A6C44A"/>
												</svg>
											</div>
											
											<h4>50%</h4>
											<p class="mb-0">አፈጻጸም</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-4">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="icon-bx style-2 d-inline-block text-center mb-3">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M33.7872 10.0495H33.4681C33.0851 10.0495 32.766 10.2361 32.5106 10.485C31.1064 12.289 29.3191 14.0309 27.0213 15.8349C26.766 16.0838 26.5745 16.3948 26.5745 16.7681V32.818C26.5745 33.4401 27.0851 34 27.7872 34H33.7872C34.4255 34 35 33.5023 35 32.818V11.1693C35 10.5472 34.4894 10.0495 33.7872 10.0495ZM23.5745 17.639C23.1915 17.4524 22.6809 17.4524 22.2979 17.7012C20.4468 18.9454 18.4681 20.0652 16.4255 21.1227C16.0426 21.3093 15.7872 21.7448 15.7872 22.1803V32.818C15.7872 33.4401 16.2979 34 17 34H23C23.6383 34 24.2128 33.5023 24.2128 32.818V18.6966C24.2128 18.2611 23.9574 17.8256 23.5745 17.639ZM12.8511 22.4291C12.5319 22.2425 12.0851 22.1803 11.7021 22.3669C9.7234 23.2378 7.74468 23.9843 5.82979 24.5442C5.31915 24.6686 5 25.1663 5 25.664V32.818C5 33.4401 5.51064 34 6.21277 34H12.2128C12.8511 34 13.4255 33.5023 13.4255 32.818V23.4245C13.4255 23.0512 13.1702 22.6779 12.8511 22.4291ZM27.6596 12.8489L28.2979 7.93439C28.3617 7.3123 27.9149 6.69021 27.2766 6.628L22.234 6.00591C21.5957 5.9437 20.9574 6.37916 20.8936 7.00126C20.8298 7.62335 21.2766 8.24544 21.9149 8.30765L24.0213 8.55648C21.0851 11.2315 14.5745 16.5815 5.95745 19.3187C5.31915 19.5053 5 20.1896 5.19149 20.8117C5.38298 21.3093 5.82979 21.6204 6.34043 21.6204C6.46809 21.6204 6.59574 21.6204 6.7234 21.5582C15.7234 18.6966 22.4255 13.2222 25.5532 10.2983L25.234 12.4757C25.1702 13.0977 25.617 13.7198 26.2553 13.782C26.3191 13.782 26.383 13.782 26.383 13.782C27.0213 13.8443 27.5957 13.4088 27.6596 12.8489Z" fill="#FC8019"/>
												</svg>
											</div>
											<h4>80%</h4>
											<p class="mb-0">ዝቅተኛ አፈጻጸም</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-sm-4">
								<div class="card">
									<div class="card-body">
										<div class="text-center">
											<div class="icon-bx style-2 d-inline-block text-center mb-3">
												<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M33.75 17.5H27.5C26.8096 17.5 26.25 18.0596 26.25 18.75V33.75C26.25 34.4404 26.8096 35 27.5 35H33.75C34.4404 35 35 34.4404 35 33.75V18.75C35 18.0596 34.4404 17.5 33.75 17.5Z" fill="#EB5757"/>
												<path d="M23.75 17.5H17.5C16.8096 17.5 16.25 18.0596 16.25 18.75V33.75C16.25 34.4404 16.8096 35 17.5 35H23.75C24.4404 35 25 34.4404 25 33.75V18.75C25 18.0596 24.4404 17.5 23.75 17.5Z" fill="#EB5757"/>
												<path d="M13.75 17.5H7.5C6.80964 17.5 6.25 18.0596 6.25 18.75V33.75C6.25 34.4404 6.80964 35 7.5 35H13.75C14.4404 35 15 34.4404 15 33.75V18.75C15 18.0596 14.4404 17.5 13.75 17.5Z" fill="#EB5757"/>
												<path d="M11.25 11.2499H28.75L26.8 12.7374C26.5881 12.8906 26.4297 13.1064 26.3468 13.3544C26.264 13.6023 26.261 13.87 26.3383 14.1198C26.4156 14.3696 26.5692 14.5888 26.7776 14.7467C26.986 14.9046 27.2386 14.9931 27.5 14.9999C27.7705 14.9999 28.0336 14.9122 28.25 14.7499L33.25 10.9999C33.4052 10.8835 33.5312 10.7325 33.618 10.5589C33.7048 10.3854 33.75 10.194 33.75 9.99991C33.7486 9.8048 33.7014 9.61273 33.6125 9.43908C33.5235 9.26543 33.395 9.11503 33.2375 8.99991L28.2375 5.24991C28.1054 5.15224 27.9553 5.08156 27.7958 5.04189C27.6363 5.00222 27.4706 4.99435 27.3081 5.01873C27.1456 5.0431 26.9895 5.09925 26.8487 5.18395C26.7079 5.26866 26.5852 5.38027 26.4875 5.51241C26.3898 5.64456 26.3191 5.79464 26.2795 5.9541C26.2398 6.11356 26.2319 6.27928 26.2563 6.44178C26.2807 6.60428 26.3368 6.76039 26.4215 6.9012C26.5062 7.042 26.6179 7.16474 26.75 7.26241L28.75 8.74991H11.25C10.9185 8.74991 10.6005 8.88161 10.3661 9.11603C10.1317 9.35045 10 9.66839 10 9.99991C10 10.3314 10.1317 10.6494 10.3661 10.8838C10.6005 11.1182 10.9185 11.2499 11.25 11.2499V11.2499Z" fill="#EB5757"/>
												</svg>
											</div>
											<h4>75%</h4>
											<p class="mb-0">አማካይ አፈጻጸም</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card h-auto">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
									<h3 class="font-w700">አፈጻጸም ስታትስቲክስ</h3>
									<div class="d-flex align-items-center">
										<select class="form-control default-select  me-0 ms-0  border" style="display: none;">
											<option>በዚህ ወር</option>
											<option>በዚህ ሳምንት</option>
											<option>ባለፈው ሳምንት</option>
										</select>
										
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between flex-wrap mb-4">
									<ul class="d-flex mb-4 mb-sm-0">
										<li><svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="6" cy="6.5" r="4.5" fill="white" stroke="var(--primary)" stroke-width="3"/>
										</svg>በዚህ ሳምንት
										<div class="ms-4">
											<h4>75%</h4>
										</div>
										</li>
										<li class="ms-4"><svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="6" cy="6.5" r="4.5" fill="white" stroke="#EB5757" stroke-width="3"/>
											</svg>ባለፈው ሳምንት
												<div class="ms-4">
											<h4>69%</h4>
										</div>
										</li>
									</ul>
									<div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span>አማካይ አፈጻጸም</span>
											<h4 class="font-w700 mb-0">77%</h4>
										</div>
										<div class="progress default-progress">
											<div class="progress-bar bg-gradient1 progress-animated bg-danger" style="width: 77%; height:10px;" role="progressbar">
												<span class="sr-only">45% ተተናቋል</span>
											</div>
										</div>
									</div>
								</div>
								<div id="activity"></div>
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
   <p>Copyright © Designed   by <a href="https://themeforest.net/user/dexignlabs" target="_blank">SHEGA</a> 2023</p>
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
	
	<!-- Apex Chart -->
	<script src="assets/vendor/apexchart/apexchart.js"></script>


	<!-- Dashboard 1 -->
	<script src="assets/js/dashboard/dashboard-4.js"></script>
	
	<script src="assets/js/dlabnav-init.js"></script>
    <script src="assets/js/custom.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/deliver-main.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:21 GMT -->
</html>