<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/restro-setting.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:19 GMT -->
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
													<h4>Recently Searched</h4>
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
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="swiper-slide">
																	<div class="card mb-0">
																		<div class="card-body pb-2 pt-3">
																			<div class="text-center pop-cousin">
																				<img src="assets/images/popular-img/pic-1.jpg" alt="">
																				<a href="javascript:void(0);"><h6>እርጥብ</h6></a>
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
												<span class="ms-2">መግለጫ</span>
											</a>
											<a href="email-inbox.php" class="dropdown-item ai-icon">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
												<span class="ms-2">የገቢ መልእክት ሳጥን</span>
											</a>
											<a href="edit-profile.php" class="dropdown-item ai-icon">
												<svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
												<span class="ms-2">ኤዲት መግለጫ</span>
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
											<span class="ms-2">ቅንጅት </span>
										</a>
											<a href="login.php" class="dropdown-item ai-icon ms-1">
												<svg  xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
												<span class="ms-1">ይውጡ </span>
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
					<div class="col-xl-4">
						<div class="card">
							<div class="card-body px-3">
								<div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
									<a href="javascript:void(0);" class="nav-link active setting-bx d-flex" id="pills-account-tab" data-bs-toggle="tab" data-bs-target="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 6C13.2426 6 14.25 4.99264 14.25 3.75C14.25 2.50736 13.2426 1.5 12 1.5C10.7574 1.5 9.75 2.50736 9.75 3.75C9.75 4.99264 10.7574 6 12 6Z" fill="#3D4152"/>
											<path d="M13.5 6.75H10.5C9.50544 6.75 8.55161 7.14509 7.84835 7.84835C7.14509 8.55161 6.75 9.50544 6.75 10.5V14.25C6.75 14.4489 6.82902 14.6397 6.96967 14.7803C7.11032 14.921 7.30109 15 7.5 15C7.69891 15 7.88968 14.921 8.03033 14.7803C8.17098 14.6397 8.25 14.4489 8.25 14.25V10.5C8.2513 10.0358 8.39616 9.58335 8.6647 9.2047C8.93325 8.82605 9.31234 8.53974 9.75 8.385V21.75C9.75 21.9489 9.82902 22.1397 9.96967 22.2803C10.1103 22.421 10.3011 22.5 10.5 22.5C10.6989 22.5 10.8897 22.421 11.0303 22.2803C11.171 22.1397 11.25 21.9489 11.25 21.75V15.615C11.7331 15.799 12.2669 15.799 12.75 15.615V21.75C12.75 21.9489 12.829 22.1397 12.9697 22.2803C13.1103 22.421 13.3011 22.5 13.5 22.5C13.6989 22.5 13.8897 22.421 14.0303 22.2803C14.171 22.1397 14.25 21.9489 14.25 21.75V8.385C14.6877 8.53974 15.0668 8.82605 15.3353 9.2047C15.6038 9.58335 15.7487 10.0358 15.75 10.5V14.25C15.75 14.4489 15.829 14.6397 15.9697 14.7803C16.1103 14.921 16.3011 15 16.5 15C16.6989 15 16.8897 14.921 17.0303 14.7803C17.171 14.6397 17.25 14.4489 17.25 14.25V10.5C17.25 10.0075 17.153 9.51991 16.9645 9.06494C16.7761 8.60997 16.4999 8.19657 16.1517 7.84835C15.8034 7.50013 15.39 7.22391 14.9351 7.03545C14.4801 6.847 13.9925 6.75 13.5 6.75Z" fill="#3D4152"/>
										</svg>
										<div class="setting-info">
											<h6>Account</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</a>
									<a href="javascript:void(0);" class="nav-link setting-bx d-flex" id="pills-notification-tab" data-bs-toggle="tab" data-bs-target="#pills-notification" role="tab" aria-controls="pills-notification" aria-selected="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18 12C20.4853 12 22.5 9.98528 22.5 7.5C22.5 5.01472 20.4853 3 18 3C15.5147 3 13.5 5.01472 13.5 7.5C13.5 9.98528 15.5147 12 18 12Z" fill="#3D4152"/>
												<path d="M21.75 21H2.25C2.05109 21 1.86032 20.921 1.71967 20.7803C1.57902 20.6397 1.5 20.4489 1.5 20.25V7.5C1.5 7.30109 1.57902 7.11032 1.71967 6.96967C1.86032 6.82902 2.05109 6.75 2.25 6.75H11.25C11.4489 6.75 11.6397 6.82902 11.7803 6.96967C11.921 7.11032 12 7.30109 12 7.5C12 7.69891 11.921 7.88968 11.7803 8.03033C11.6397 8.17098 11.4489 8.25 11.25 8.25H3V19.5H21V12.75C21 12.5511 21.079 12.3603 21.2197 12.2197C21.3603 12.079 21.5511 12 21.75 12C21.9489 12 22.1397 12.079 22.2803 12.2197C22.421 12.3603 22.5 12.5511 22.5 12.75V20.25C22.5 20.4489 22.421 20.6397 22.2803 20.7803C22.1397 20.921 21.9489 21 21.75 21Z" fill="#3D4152"/>
											</svg>
										<div class="setting-info">
											<h6>Notification</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</a>
									<a href="javascript:void(0);" class="nav-link setting-bx d-flex" id="pills-security-tab" data-bs-toggle="tab" data-bs-target="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.0003 22.5C11.8942 22.4995 11.7894 22.4765 11.6928 22.4325C7.55282 20.595 4.79282 17.01 3.44282 11.7675L2.25032 6.93C2.21223 6.77899 2.22209 6.61987 2.27854 6.47473C2.33498 6.32958 2.43521 6.2056 2.56532 6.12L3.12032 5.7525C5.79533 3.97063 8.69586 2.55315 11.7453 1.5375C11.8987 1.48659 12.0644 1.48659 12.2178 1.5375C15.2677 2.5555 18.1682 3.97551 20.8428 5.76L21.3978 6.1275C21.5333 6.20741 21.6402 6.32789 21.7035 6.4719C21.7668 6.61591 21.7831 6.77617 21.7503 6.93L20.5428 11.7675C19.2303 17.0175 16.4628 20.595 12.2928 22.4325C12.2009 22.4745 12.1014 22.4974 12.0003 22.5ZM3.85532 7.08L4.93532 11.4C6.09782 16.0425 8.47532 19.245 12.0003 20.925C15.5253 19.245 17.9028 16.0425 19.0653 11.4075L20.1453 7.0875L20.0328 7.0125C17.5381 5.34834 14.8381 4.01472 12.0003 3.045C9.16549 4.01281 6.46803 5.34389 3.97532 7.005L3.85532 7.08Z" fill="#3D4152"/>
										<path d="M12.4357 1.6425C12.3395 1.57281 12.2282 1.52695 12.1108 1.50869C11.9935 1.49044 11.8735 1.50031 11.7607 1.5375C8.71343 2.55612 5.81545 3.97611 3.14318 5.76L2.58818 6.1275C2.45543 6.20953 2.35157 6.33093 2.29107 6.47477C2.23058 6.61862 2.21646 6.77775 2.25068 6.93L3.45818 11.7675C4.77068 17.0175 7.53818 20.595 11.7082 22.4325C11.8216 22.4805 11.9451 22.4999 12.0677 22.4889C12.1904 22.4779 12.3085 22.4369 12.4115 22.3694C12.5146 22.3019 12.5994 22.2101 12.6586 22.1021C12.7177 21.9941 12.7493 21.8732 12.7507 21.75V2.25C12.7501 2.13102 12.7213 2.01387 12.6665 1.90823C12.6117 1.8026 12.5326 1.71152 12.4357 1.6425Z" fill="#3D4152"/>
										</svg>
									
										<div class="setting-info">
											<h6>Security</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</a>
									<a href="javascript:void(0);" class="nav-link setting-bx d-flex" id="pills-payment-tab" data-bs-toggle="tab" data-bs-target="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 13.5C14.4853 13.5 16.5 11.4853 16.5 9C16.5 6.51472 14.4853 4.5 12 4.5C9.51472 4.5 7.5 6.51472 7.5 9C7.5 11.4853 9.51472 13.5 12 13.5Z" fill="#3D4152"/>
											<path d="M16.5 19.5C16.351 19.5009 16.2052 19.4573 16.081 19.375C15.9569 19.2926 15.8601 19.1752 15.8029 19.0376C15.7458 18.9 15.731 18.7485 15.7603 18.6025C15.7896 18.4564 15.8617 18.3224 15.9675 18.2175L20.4675 13.7175C20.7238 13.4479 20.8955 13.1092 20.9615 12.7431C21.0276 12.3771 20.985 11.9997 20.839 11.6575C20.6931 11.3154 20.4501 11.0235 20.1402 10.8178C19.8303 10.6121 19.4669 10.5016 19.095 10.5H15.675C15.4761 10.5 15.2853 10.421 15.1446 10.2803C15.004 10.1397 14.925 9.94891 14.925 9.75C14.925 9.55109 15.004 9.36032 15.1446 9.21967C15.2853 9.07902 15.4761 9 15.675 9H19.095C19.7684 9.00008 20.4266 9.19982 20.9865 9.57397C21.5464 9.94812 21.9827 10.4799 22.2404 11.102C22.4981 11.7241 22.5655 12.4087 22.4342 13.0692C22.3028 13.7296 21.9786 14.3363 21.5025 14.8125L17.0025 19.3125C16.8638 19.4348 16.6849 19.5016 16.5 19.5ZM7.49998 19.5C7.40127 19.5006 7.30343 19.4817 7.21205 19.4443C7.12067 19.407 7.03756 19.352 6.96748 19.2825L2.46748 14.7825C1.99978 14.303 1.6839 13.6962 1.55936 13.038C1.43483 12.3799 1.50719 11.6996 1.76737 11.0824C2.02755 10.4652 2.464 9.93838 3.0221 9.56797C3.5802 9.19757 4.23515 9 4.90498 9H8.32498C8.52389 9 8.71466 9.07902 8.85531 9.21967C8.99596 9.36032 9.07498 9.55109 9.07498 9.75C9.07498 9.94891 8.99596 10.1397 8.85531 10.2803C8.71466 10.421 8.52389 10.5 8.32498 10.5H4.90498C4.52952 10.5018 4.16296 10.6145 3.85135 10.8239C3.53973 11.0334 3.29696 11.3302 3.15352 11.6772C3.01008 12.0242 2.97237 12.4058 3.04513 12.7742C3.11789 13.1425 3.29788 13.4811 3.56248 13.7475L8.06248 18.2475C8.16001 18.3556 8.22399 18.4897 8.24661 18.6334C8.26924 18.7772 8.24953 18.9245 8.1899 19.0573C8.13027 19.1901 8.03328 19.3026 7.91078 19.3812C7.78827 19.4599 7.64553 19.5011 7.49998 19.5Z" fill="#3D4152"/>
											</svg>
										<div class="setting-info">
											<h6>Payment</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</a>
									<a href="javascript:void(0);" class="nav-link setting-bx d-flex" id="pills-help-tab" data-bs-toggle="tab" data-bs-target="#pills-help" role="tab" aria-controls="pills-help" aria-selected="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.5 10.5C6.15685 10.5 7.5 9.15685 7.5 7.5C7.5 5.84315 6.15685 4.5 4.5 4.5C2.84315 4.5 1.5 5.84315 1.5 7.5C1.5 9.15685 2.84315 10.5 4.5 10.5Z" fill="#3D4152"/>
											<path d="M19.5 10.5C21.1569 10.5 22.5 9.15685 22.5 7.5C22.5 5.84315 21.1569 4.5 19.5 4.5C17.8431 4.5 16.5 5.84315 16.5 7.5C16.5 9.15685 17.8431 10.5 19.5 10.5Z" fill="#3D4152"/>
											<path d="M12 10.5C13.6569 10.5 15 9.15685 15 7.5C15 5.84315 13.6569 4.5 12 4.5C10.3431 4.5 9 5.84315 9 7.5C9 9.15685 10.3431 10.5 12 10.5Z" fill="#3D4152"/>
											<path d="M4.5 19.5C6.15685 19.5 7.5 18.1569 7.5 16.5C7.5 14.8431 6.15685 13.5 4.5 13.5C2.84315 13.5 1.5 14.8431 1.5 16.5C1.5 18.1569 2.84315 19.5 4.5 19.5Z" fill="#3D4152"/>
											<path d="M19.5 19.5C21.1569 19.5 22.5 18.1569 22.5 16.5C22.5 14.8431 21.1569 13.5 19.5 13.5C17.8431 13.5 16.5 14.8431 16.5 16.5C16.5 18.1569 17.8431 19.5 19.5 19.5Z" fill="#3D4152"/>
											<path d="M12 19.5C13.6569 19.5 15 18.1569 15 16.5C15 14.8431 13.6569 13.5 12 13.5C10.3431 13.5 9 14.8431 9 16.5C9 18.1569 10.3431 19.5 12 19.5Z" fill="#3D4152"/>
											</svg>
										<div class="setting-info">
											<h6>Help</h6>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</a>
									<a href="javascript:void(0);" class="nav-link setting-bx d-flex" id="pills-policy-tab" data-bs-toggle="tab" data-bs-target="#pills-policy" role="tab" aria-controls="pills-policy" aria-selected="false">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M4.125 6.75C5.57475 6.75 6.75 5.57475 6.75 4.125C6.75 2.67525 5.57475 1.5 4.125 1.5C2.67525 1.5 1.5 2.67525 1.5 4.125C1.5 5.57475 2.67525 6.75 4.125 6.75Z" fill="#3D4152"/>
													<path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="#3D4152"/>
													<path d="M20.25 4.5C19.6533 4.5 19.081 4.73705 18.659 5.15901C18.2371 5.58097 18 6.15326 18 6.75C18.0003 7.17783 18.1226 7.5967 18.3525 7.9575C18.5623 8.28735 18.8544 8.55685 19.2 8.73945C19.5457 8.92205 19.9329 9.01144 20.3236 8.99883C20.7144 8.98621 21.095 8.87202 21.4282 8.66751C21.7613 8.46299 22.0354 8.17521 22.2235 7.83251C22.4116 7.48981 22.5071 7.10403 22.5007 6.71317C22.4943 6.32231 22.3862 5.93986 22.187 5.60351C21.9878 5.26715 21.7044 4.98849 21.3648 4.79499C21.0251 4.60149 20.6409 4.49982 20.25 4.5Z" fill="#3D4152"/>
													<path d="M7.5 22.5C8.74264 22.5 9.75 21.4926 9.75 20.25C9.75 19.0074 8.74264 18 7.5 18C6.25736 18 5.25 19.0074 5.25 20.25C5.25 21.4926 6.25736 22.5 7.5 22.5Z" fill="#3D4152"/>
													<path d="M10.41 11.16C10.3113 11.1606 10.2134 11.1416 10.122 11.1043C10.0307 11.067 9.94754 11.012 9.87746 10.9425L4.91996 5.99999C4.77675 5.85678 4.69629 5.66253 4.69629 5.45999C4.69629 5.25746 4.77675 5.06321 4.91996 4.91999C5.06318 4.77678 5.25743 4.69632 5.45996 4.69632C5.6625 4.69632 5.85675 4.77678 5.99996 4.91999L10.9575 9.87749C11.0632 9.9824 11.1354 10.1164 11.1647 10.2625C11.194 10.4085 11.1791 10.56 11.122 10.6976C11.0649 10.8352 10.9681 10.9526 10.8439 11.035C10.7198 11.1173 10.5739 11.1609 10.425 11.16H10.41ZM13.8975 11.5425C13.7364 11.5405 13.5802 11.4867 13.4521 11.389C13.324 11.2913 13.2307 11.155 13.1861 11.0001C13.1415 10.8453 13.148 10.6803 13.2045 10.5294C13.261 10.3785 13.3646 10.2499 13.5 10.1625L18.585 6.92249C18.753 6.81508 18.9569 6.77884 19.1517 6.82174C19.3465 6.86464 19.5163 6.98316 19.6237 7.15124C19.7311 7.31933 19.7674 7.52319 19.7245 7.718C19.6816 7.9128 19.563 8.08258 19.395 8.18999L14.31 11.43C14.1863 11.5067 14.043 11.5458 13.8975 11.5425ZM8.24996 19.68C8.1196 19.6804 7.99139 19.6467 7.87798 19.5824C7.76458 19.5181 7.66989 19.4254 7.60326 19.3133C7.53663 19.2012 7.50037 19.0738 7.49803 18.9434C7.4957 18.8131 7.52739 18.6844 7.58996 18.57L10.29 13.62C10.3894 13.445 10.5543 13.3166 10.7484 13.2631C10.9425 13.2097 11.1499 13.2355 11.325 13.335C11.5 13.4345 11.6284 13.5994 11.6818 13.7935C11.7353 13.9876 11.7094 14.195 11.61 14.37L8.90996 19.32C8.84136 19.4328 8.74421 19.5255 8.62833 19.5887C8.51244 19.6519 8.38193 19.6834 8.24996 19.68Z" fill="#3D4152"/>
													</svg>
											<div class="setting-info">
												<h6>Privacy Policy</h6>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
											</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-account" role="tabpanel" tabindex="0" aria-labelledby="pills-account-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-body">
											<h3 class="mb-4">Account</h3>
											<p class="fs-18">Photo Profile</p>
											<div class= "setting-img d-flex align-items-center mb-4">
												 <div class="avatar-upload d-flex align-items-center">
													<div class=" change position-relative d-flex">
														<div class="avatar-preview">
															<div id="imagePreview" style="background-image: url(assets/images/no-img-avatar.png);"> 			
															</div>
														</div>
														<div class="change-btn d-flex align-items-center flex-wrap">
															<input type='file' class="form-control"  id="imageUpload" accept=".png, .jpg, .jpeg" />
															<label for="imageUpload" class="dlab-upload">Choose File</label>
															<a href="javascript:void" class="btn remove-img ms-2">Remove</a>
														</div>
													</div>
														
												</div>
													
											</div>
											
											<div class="row">
												<div class="col-xl-6 col-sm-6">
													<div class="setting-input">
														<label for="exampleInputtext" class="form-label">Username</label>
														<input type="text" class="form-control" id="exampleInputtext" placeholder="Jordan Nico">
													</div>
													<div class="setting-input">
														<label  class="form-label">Email address</label>
														<input type="email" class="form-control" placeholder="ordanico@mail.com">
													</div>
													<div class="setting-input">
														<p class="fs-18 mb-2">Your Location</p>
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
													
													</div>
												</div>
												<div class="col-xl-6 col-sm-6">
													<div class="setting-input">
														<label  class="form-label">Phone</label>
														<input type="number" class="form-control"  placeholder="+123456789">
													</div>
													<div class="setting-input">
														 <label  class="form-label">Password</label>
														<input type="password" class="form-control"  placeholder="••••••••">
													</div>
													<div class="setting-input">
														<label class="form-label">Address Details</label>
															<textarea class="form-control py-3" rows="3"></textarea>
													</div>
													<a href="javascript:void(0);" class="btn btn-primary float-end w-50 btn-md">Save Setting</a>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-notification" role="tabpanel" tabindex="0" aria-labelledby="pills-notification-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-header border-0 pb-0">
											<h4>Notification</h4>
										</div>
										<div class="card-body">
											<div class="d-flex align-items-center">
												<svg class="me-3" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="#FC8019"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="#FC8019"/>
													<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="#fda65e"/>
												</svg>
												<span> order due to rains</span>
												<span class="ms-auto">now</span>
											</div>
											<hr>
											<div class="d-flex align-items-center">
												<svg class="me-3" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="#FC8019"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="#FC8019"/>
													<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="#fda65e"/>
												</svg>
												<span> track your order now! .</span>
												<span class="ms-auto text-nowrap">1min ago</span>
											</div>
											<hr>
											<div class="d-flex align-items-center">
												<svg class="me-3" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="#FC8019"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="#FC8019"/>
													<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="#fda65e"/>
												</svg>
												<span>Your order today.</span>
												<span class="ms-auto text-nowrap">2min ago</span>
											</div>
											<hr>
											<div class="d-flex align-items-center">
												<svg class="me-3" width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M25.125 21.125L26.9952 23.2623C27.6771 24.0417 28.8616 24.1206 29.6409 23.4387C29.7036 23.3839 29.7625 23.325 29.8173 23.2623L31.6875 21.125H36.375C35.2848 26.5762 30.4985 30.5 24.9393 30.5H14.0607C8.5015 30.5 3.71523 26.5762 2.625 21.125H25.125Z" fill="#FC8019"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M36.375 9.875H2.625C3.71523 4.4238 8.5015 0.5 14.0607 0.5H24.9393C30.4985 0.5 35.2848 4.4238 36.375 9.875Z" fill="#FC8019"/>
													<path opacity="0.3" d="M36.375 13.625H2.625C1.58947 13.625 0.75 14.4645 0.75 15.5C0.75 16.5355 1.58947 17.375 2.625 17.375H36.375C37.4105 17.375 38.25 16.5355 38.25 15.5C38.25 14.4645 37.4105 13.625 36.375 13.625Z" fill="#fda65e"/>
												</svg>
												<span>Your arrive today.</span>
												<span class="ms-auto text-nowrap">5min ago</span>
											</div>
											<hr>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-security" role="tabpanel" tabindex="0" aria-labelledby="pills-security-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-xl-3">
													<div class="contact-title">
														<h4 class="mb-xl-0 mb-2">Contact-info</h4>													
													</div>
												</div>
												<div class="col-xl-8">
													<div class="setting-input mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control" placeholder="Jordan Nico">
													</div>
													<div class="setting-input">
														<label for="exampleInputEmail1" class="form-label">Email address</label>
														<input type="email" class="form-control" id="exampleInputEmail1" placeholder="ordanico@mail.com">
													</div>
												</div>
												<div class="col-xl-3">
													<div class="area-affected">
														<h4 class="mb-xl-0 mb-2 text-nowrap">Areas affedted</h4>
														<span>choose one or more</span>
													</div>
												</div>
												<div class="col-xl-8">
													<div class="row">
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">Moblie Apps(s)</span>
															</div>
														</div>
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">Moblie Apps(s)</span>
															</div>
														</div>
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">Api</span>
															</div>
														</div>
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">Moblie web</span>
															</div>
														</div>
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">Main website</span>
															</div>
														</div>
														<div class="col-xl-6 col-sm-6">
															<div class="form-check form-switch d-flex align-items-center mb-3">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
															  <span class="text-nowrap">other</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-3">
													<h4 class="mb-xl-0 mb-2">Description</h4>
												</div>
												<div class="col-xl-8">
													<div>
														<div class="setting-input">
															<textarea class="form-control" rows="3"></textarea>
														</div>
													</div>
													<a href="javascript:void(0);" class="btn btn-primary btn-md">Save Setting</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-payment" role="tabpanel" tabindex="0" aria-labelledby="pills-payment-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">Payble Email id</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<input type="email" class="form-control"  placeholder="ordanico@mail.com">
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">Currency</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<select class="form-control default-select wide ms-0">
													  <option selected>Australian dollar</option>
													  <option value="1">United States dollar</option>
													  <option value="2">Indian Rupee</option>
													  <option value="3">Yen</option>
													  <option value="3">Riyal</option>
													  <option value="3">Taiwan dollar</option>
													  <option value="3">U.A.E. Dirham</option>
													</select>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">Need Payer Address</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<div class="d-flex aligs-items-center face-id">
														<div class="form-check me-3">
														  <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
														  <label class="form-check-label" for="flexRadioDefault1">Yes</label>
														</div>
														<div class="form-check me-3">
														  <input class="form-check-input me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
														  <label class="form-check-label" for="flexRadioDefault4">No</label>
														</div>
													</div>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">Payment Type</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<div class="d-flex aligs-items-center face-id">
														<div class="form-check me-3">
														  <input class="form-check-input me-2" type="radio" name="flexRadio" id="flexRadioDefault5">
														  <label class="form-check-label" for="flexRadioDefault3">Online</label>
														</div>
														<div class="form-check me-3">
														  <input class="form-check-input me-2" type="radio" name="flexRadio" id="flexRadioDefault6">
														  <label class="form-check-label" for="flexRadioDefault4">Offline</label>
														</div>
													</div>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">item</h6>
												</div>
												<div class="col-xl-8 mb-3">
														<select class="form-control default-select wide ms-0">
														  <option selected>Selected Field</option>
														  <option value="1">Pizza</option>
														  <option value="2">Burger</option>
														  <option value="3">Bakery</option>
														  <option value="3">chicken</option>
														  <option value="3">Patties</option>
														</select>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">Amount</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<select class="form-control default-select wide ms-0">
													  <option selected>Selected Field</option>
													  <option value="1">100</option>
													  <option value="2">200</option>
													  <option value="3">500</option>
													  <option value="3">1000</option>
													  <option value="3">2000</option>
													</select>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">quantity</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<select class="form-control default-select wide ms-0">
													  <option selected>Selected Field</option>
													  <option value="1">1</option>
													  <option value="2">2</option>
													  <option value="3">3</option>
													  <option value="3">4</option>
													  <option value="3">5</option>
													</select>
												</div>
												<div class="col-xl-4 mb-3">
													<h6 class="mb-0">language</h6>
												</div>
												<div class="col-xl-8 mb-3">
													<select class="form-control default-select wide ms-0 mb-3">
													  <option selected>Selected Field</option>
													  <option value="1">English(u.k)</option>
													  <option value="2">English(usa)</option>
													  <option value="3">Hindi</option>
													  <option value="3">Japanese</option>
													  <option value="3">Chinese</option>
													</select>
												</div>
													<button class="btn btn-primary w-auto ms-auto me-3">Save Setting </button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-help" role="tabpanel" tabindex="0" aria-labelledby="pills-help-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-body">
											<div>
												<div>
													<h4>How we can Help You ?</h4>
													<div class="input-group search-area2 w-100 style-1 mb-3">
														<span class="input-group-text p-0"><a href="javascript:void(0)"><svg  class="me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="#FC8019"/>
														</svg>
														</a></span>
														<input type="text" class="form-control p-0" placeholder="Search Help.....">
													</div>
													<h4>What's new</h4>
													<div class="d-flex align-items-center justify-content-between mb-1">
														<h6 class="font-w500 mb-0"><a href="javascript:void(0);" class="text-priamry">Check your Booking Status</a></h6>
														<div class="form-check form-switch d-flex align-items-center">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-1">
														<h6 class="font-w500 mb-0"><a href="javascript:void(0);" class="text-priamry">Checkout of FoodDesk</a></h6>
														<div class="form-check form-switch d-flex align-items-center">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-1">
														<h6 class="font-w500 mb-0"><a href="javascript:void(0);" class="text-priamry">Order Tracking Problem</a></h6>
														<div class="form-check form-switch d-flex align-items-center">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-1">
														<h6 class="font-w500"><a href="javascript:void(0);" class="text-priamry">Login issue</a></h6>
														<div class="form-check form-switch d-flex align-items-center">
															  <input class="form-check-input me-2" type="checkbox" role="switch">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-policy" role="tabpanel" tabindex="0" aria-labelledby="pills-policy-tab">
								<div class="setting-right">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-xl-4">
													<h6>Privacy policy Generator</h6>
													<span>Let select the paltforms where your Privacy policy will be used on</span>
												</div>
												<div class="col-xl-8">
													<h6>What kind of personal information do you collect from user?</h6>
													<p class="mb-2">Click all that apply</p>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll">
														</div>
														<span>Email address</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-1">
														</div>
														<span>First name and last namr</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-2">
														</div>
														<span>Phone number</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-3">
														</div>
														<span>Address,state,pin code,city</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-4">
														</div>
														<span>social media profile information(ie,connect with twitter)</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-5">
														</div>
														<span>other</span>
													</div>
												</div>
												<div class="col-xl-4"></div>
												<div class="col-xl-8">
													<h6>Select addtional information you collect from a device (moblie/tablet)</h6>
													<p class="mb-2">Skip selecting an option if none apply to you</p>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-6">
														</div>
														<span>Location</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-7">
														</div>
														<span>Contactlist</span>
													</div>
													<div class="d-flex align-items-center mb-1">
														<div class="form-check style-3 me-3">
															<input class="form-check-input" type="checkbox" value="" id="checkAll-8">
														</div>
														<span>Camera</span>
													</div>
												</div>
												<div class="col-xl-4"></div>
												<div class="col-xl-8 face-id">
													<h6>Do you use tracking and/or analytics tools,such as Google Analytics</h6>
													<P class="mb-2">Skip selecting an option if none apply to you</P>
													<div class="form-check me-3">
														  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
														  <label class="form-check-label" for="flexRadioDefault7">Yes</label>
													</div>
													<div class="form-check me-3">
														  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
														  <label class="form-check-label" for="flexRadioDefault8">No</label>
													</div>
												</div>
											</div>
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
   <p>Copyright © Designed   by <a href="https://themeforest.net/user/dexignlabs" target="_blank">DexignLab</a> 2022</p>
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
    
    	<script>
		function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
		$("#imageUpload").change(function() {
			readURL(this);
		});
	
		$('.remove-img').on('click', function() {
		var imageUrl = "assets/images/no-img-avatar.png";
		$('.avatar-preview, #imagePreview').removeAttr('style');
		$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
	});




	</script>
</body>

<!-- Mirrored from www.fooddesk.dexignlab.com/xhtml/restro-setting.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2023 10:09:19 GMT -->
</html>