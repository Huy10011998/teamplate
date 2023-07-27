<template>
<!-- Header -->
<div class="header" id="heading">
			
	<!-- Logo -->
	<div class="header-left">
		<router-link to="/index" class="logo">
			<img src="../../assets/img/logo.png"  alt="Logo" class="sidebar-logo">
			<img src="../../assets/img/s-logo.png"  alt="Logo" class="mini-sidebar-logo">
		</router-link>
	</div>
	<!-- /Logo -->
	
	<a id="toggle_btn" href="javascript:void(0);">
		<span class="bar-icon">
			<span></span>
			<span></span>
			<span></span>
		</span>
	</a>
	
	<!-- Header Title -->
	<div class="page-title-box">
		<div class="top-nav-search">
				<a href="javascript:void(0);" class="responsive-search">
					<i class="fa fa-search"></i>
			   </a>
				<form action="search">
					<input class="form-control" type="text" placeholder="Search here">
					<button class="btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
	</div>
	<!-- /Header Title -->
	
	<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
	
	<!-- Header Menu -->
	<ul class="nav user-menu">
	
		<!-- Search -->
		<li class="nav-item">
			
		</li>
		<!-- /Search -->
	
		<!-- Flag -->
		<li class="nav-item dropdown has-arrow flag-nav">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
				<img src="../../assets/img/flags/us.png" alt="" height="20"> <span class="mr-1">English</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="../../assets/img/flags/us.png" alt="" height="16"> English
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="../../assets/img/flags/fr.png" alt="" height="16"> French
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="../../assets/img/flags/es.png" alt="" height="16"> Spanish
				</a>
				<a href="javascript:void(0);" class="dropdown-item">
					<img src="../../assets/img/flags/de.png" alt="" height="16"> German
				</a>
			</div>
		</li>
		<!-- /Flag -->
	
		<!-- Notifications -->
		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Notifications</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">  
						<li class="notification-message">
							<router-link to="/activities">
								<div class="media">
									<span class="avatar">
										<img alt="" src="../../assets/img/profiles/avatar-02.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
										<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
									</div>
								</div>
							</router-link>
						</li>
						<li class="notification-message">
							<router-link to="/activities">
								<div class="media">
									<span class="avatar">
										<img alt="" src="../../assets/img/profiles/avatar-03.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
										<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
									</div>
								</div>
							</router-link>
						</li>
						<li class="notification-message">
							<router-link to="/activities">
								<div class="media">
									<span class="avatar">
										<img alt="" src="../../assets/img/profiles/avatar-06.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
										<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
									</div>
								</div>
							</router-link>
						</li>
						<li class="notification-message">
							<router-link to="/activities">
								<div class="media">
									<span class="avatar">
										<img alt="" src="../../assets/img/profiles/avatar-17.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
										<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
									</div>
								</div>
							</router-link>
						</li>
						<li class="notification-message">
							<router-link to="/activities">
								<div class="media">
									<span class="avatar">
										<img alt="" src="../../assets/img/profiles/avatar-13.jpg">
									</span>
									<div class="media-body">
										<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
										<p class="noti-time"><span class="notification-time">2 days ago</span></p>
									</div>
								</div>
							</router-link>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<router-link to="/activities">View all Notifications</router-link>
				</div>
			</div>
		</li>
		<!-- /Notifications -->
		
		<!-- Message Notifications -->
		<li class="nav-item dropdown">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
			</a>
			<div class="dropdown-menu notifications">
				<div class="topnav-dropdown-header">
					<span class="notification-title">Messages</span>
					<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
				</div>
				<div class="noti-content">
					<ul class="notification-list">
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="../../assets/img/profiles/avatar-09.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author">Richard Miles </span>
										<span class="message-time">12:28 AM</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="../../assets/img/profiles/avatar-02.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author">John Doe</span>
										<span class="message-time">6 Mar</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="../../assets/img/profiles/avatar-03.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author"> Tarah Shropshire </span>
										<span class="message-time">5 Mar</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="../../assets/img/profiles/avatar-05.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author">Mike Litorus</span>
										<span class="message-time">3 Mar</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
						<li class="notification-message">
							<a href="#">
								<div class="list-item">
									<div class="list-left">
										<span class="avatar">
											<img alt="" src="../../assets/img/profiles/avatar-08.jpg">
										</span>
									</div>
									<div class="list-body">
										<span class="message-author"> Catherine Manseau </span>
										<span class="message-time">27 Feb</span>
										<div class="clearfix"></div>
										<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">View all Messages</a>
				</div>
			</div>
		</li>
		<!-- /Message Notifications -->

		<li class="nav-item dropdown has-arrow main-drop">
			<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
				<span class="user-img mr-1"><img src="../../assets/img/profiles/avatar-21.jpg" alt="">
				<span class="status online"></span></span>
				<span class="mr-1">Admin</span>
			</a>
			<div class="dropdown-menu"> 
				<router-link class="dropdown-item" to="/profile">My Profile</router-link>
				<router-link class="dropdown-item" to="/settings">Settings</router-link>
				<router-link class="dropdown-item" to="/login">Logout</router-link>
			</div>
		</li>
	</ul>
	<!-- /Header Menu -->
	
	<!-- Mobile Menu -->
	<div class="dropdown mobile-user-menu">
		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		<div class="dropdown-menu dropdown-menu-right">
			<router-link class="dropdown-item" to="/profile">My Profile</router-link>
			<router-link class="dropdown-item" to="/settings">Settings</router-link>
			<router-link class="dropdown-item" to="/login">Logout</router-link>
		</div>
	</div>
	<!-- /Mobile Menu -->
	
</div>
<!-- /Header -->
</template>
<script>
    export default {
        mounted() {
       // Variables declarations
    var $wrapper = $('.main-wrapper');
    var $pageWrapper = $('.page-wrapper');
    var $sidebarOverlay = $('.sidebar-overlay');
    // Small Sidebar
	if(screen.width >= 992) {
		$(document).on('click', '#toggle_btn', function() {
			if($('body').hasClass('mini-sidebar')) {
				$('body').removeClass('mini-sidebar');
				$('.subdrop + ul').slideDown();
			} else {
				$('body').addClass('mini-sidebar');
				$('.subdrop + ul').slideUp();
			}
			return false;
		});
		$(document).on('mouseover', function(e) {
			e.stopPropagation();
			if($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
				var targ = $(e.target).closest('.sidebar').length;
				if(targ) {
					$('body').addClass('expand-menu');
					$('.subdrop + ul').slideDown();
				} else {
					$('body').removeClass('expand-menu');
					$('.subdrop + ul').slideUp();
				}
				return false;
			}
		});
	}
    // Sidebar overlay
	function sidebar_overlay($target) {
		if($target.length) {
			$target.toggleClass('opened');
			$sidebarOverlay.toggleClass('opened');
			$('html').toggleClass('menu-opened');
			$sidebarOverlay.attr('data-reff', '#' + $target[0].id);
		}
	}
	// Mobile menu sidebar overlay
	$(document).on('click', '#mobile_btn', function() {
		var $target = $($(this).attr('href'));
		sidebar_overlay($target);
		$wrapper.toggleClass('slide-nav');
		$('#chat_sidebar').removeClass('opened');
		return false;
	});
    // Mobile Menu
	$(document).on('click', '#open_msg_box', function() {
		$wrapper.toggleClass('open-msg-box');
		return false;
	});
    // Page wrapper height
	var pHeight = $(window).height();
	$pageWrapper.css('min-height', pHeight);
	$(window).resize(function() {
		var prHeight = $(window).height();
		$pageWrapper.css('min-height', prHeight);
	});
    },
       computed: {
           currentPath() {
               return this.$route.name
           }
       }
    }
    </script>