<template>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner">
		<perfect-scrollbar class="scroll-area"  :settings="settings" @ps-scroll-y="scrollHanle">
		<form action="search" class="mobile-view">
			<input class="form-control" type="text" placeholder="Search here">
			<button class="btn" type="button"><i class="fa fa-search"></i></button>
		</form>
		<div id="sidebar-menu" class="sidebar-menu">

			<ul>
				<li class="nav-item nav-profile">
				  <a href="#" class="nav-link">
					<div class="nav-profile-image">
					  <img src="../../assets/img/profiles/avatar-17.jpg" alt="profile">
					  
					</div>
					<div class="nav-profile-text d-flex flex-column">
					  <span class="font-weight-bold mb-2">David Grey. H</span>
					  <span class="text-white text-small">Project Manager</span>
					</div>
					<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				  </a>
				</li>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li class="submenu">
					<a href="#"><i class="feather-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li><router-link to="/index">Deals Dashboard</router-link></li>
						<li><router-link to="/projects-dashboard">Projects Dashboard</router-link></li>
						<li><router-link to="/leads-dashboard">Leads Dashboard</router-link></li>
					</ul>
				</li>
				
				<li> 
					<router-link to="/tasks"><i class="feather-check-square"></i> <span>Tasks</span></router-link>
				</li>
				<li> 
					<router-link to="/contacts"><i class="feather-smartphone"></i> <span>Contacts</span></router-link>
				</li>
				<li> 
					<router-link to="/companies"><i class="feather-database"></i> <span>Companies</span></router-link>
				</li>
				<li> 
					<router-link to="/leads"><i class="feather-user"></i> <span>Leads</span></router-link>
				</li>
				
				<li> 
					<router-link to="/deals" v-bind:class="{'active': currentPath == 'deals-kanban-view'}"><i class="feather-radio"></i> <span>Deals</span></router-link>
				</li>
				<li> 
					<router-link to="/projects"><i class="feather-grid"></i> <span>Projects</span></router-link>
				</li>
				<li> 
					<router-link to="/reports"><i class="feather-bar-chart-2"></i> <span>Reports</span></router-link>
				</li>
				<li> 
					<router-link to="/activities"><i class="feather-calendar"></i> <span>Activities</span></router-link>
				</li>
				<li> 
					<router-link to="/email"><i class="feather-mail"></i> <span>Email</span></router-link>
				</li>
				
				<li class="menu-title"> 
					<span>Pages</span>
				</li>
				
				<li class="submenu">
					<a href="#"><i class="feather-alert-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li><router-link to="/error-404">404 Error </router-link></li>
						<li><router-link to="/error-500">500 Error </router-link></li>
					</ul>
				</li>
				
				<li class="submenu">
					<a href="#"><i class="feather-list"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li><router-link to="/faq"> FAQ </router-link></li>
						<li><router-link to="/terms"> Terms </router-link></li>
						<li><router-link to="/privacy-policy"> Privacy Policy </router-link></li>
						<li><router-link to="/blank-page"> Blank Page </router-link></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>UI Interface</span>
				</li>
				<li> 
					<router-link to="/components"><i class="feather-layout"></i> <span>Components</span></router-link>
				</li>
				<li class="submenu">
					<a href="#"><i class="feather-credit-card"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li><router-link to="/form-basic-inputs">Basic Inputs </router-link></li>
						<li><router-link to="/form-input-groups">Input Groups </router-link></li>
						<li><router-link to="/form-horizontal">Horizontal Form </router-link></li>
						<li><router-link to="/form-vertical"> Vertical Form </router-link></li>
						<li><router-link to="/form-mask"> Form Mask </router-link></li>
						<li><router-link to="/form-validation"> Form Validation </router-link></li>
					</ul>
				</li>
				<li class="submenu"> 
					<a href="#"><i class="feather-box"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li><router-link to="/tables-basic">Basic Tables </router-link></li>
						<li><router-link to="/data-tables">Data Table </router-link></li>
					</ul>
				</li>
				<li class="menu-title"> 
					<span>Extras</span>
				</li>
				
				<li class="submenu">
					<a href="javascript:void(0);"><i class="feather-command"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
					<ul class="sub-menus">
						<li class="submenu">
							<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
							<ul class="sub-menus">
								<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
									<ul class="sub-menus">
										<li><a href="javascript:void(0);">Level 3</a></li>
										<li><a href="javascript:void(0);">Level 3</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void(0);"> <span>Level 1</span></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</perfect-scrollbar>
	</div>
</div>
<!-- /Sidebar -->
</template>
<script>
import {PerfectScrollbar}  from 'vue3-perfect-scrollbar'
import 'vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css'
   export default {
	   components: {
   PerfectScrollbar ,
 },
 mounted() {
	 $('#sidebar-menu a').on('click', function (e) {
	   if ($(this).parent().hasClass('submenu')) {
		 e.preventDefault();
	   }
	   if (!$(this).hasClass('subdrop')) {
		 $('ul', $(this).parents('ul:first')).slideUp(350);
		 $('a', $(this).parents('ul:first')).removeClass('subdrop');
		 $(this).next('ul').slideDown(350);
		 $(this).addClass('subdrop');
	   } else if ($(this).hasClass('subdrop')) {
		 $(this).removeClass('subdrop');
		 $(this).next('ul').slideUp(350);
	   }
	 });
	 $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');

   },
   computed: {
	   currentpage() {
		 return this.$route.path;
	   },
	 },
 data() {
	 return {
	   settings: {
suppressScrollX: true,
},
	   activeClass: 'active',
	 };
			 //  isactive : true
   },
   methods: {
   scrollHanle(evt) {
	 console.log(evt)
   }
 },
}
</script>
<style>
	  .scroll-area {
      position: relative;
      margin: auto;
      height: calc(100vh - 60px);
      background-color: transparent !important;
  }
.sidebar-menu ul ul a.active {
   color: #fff;
       background: linear-gradient(
90deg, rgba(241,176,69,1) 15%, rgba(128,156,246,1) 100%);
   text-decoration: underline;
}
.sidebar-menu ul li a.active {
   color: #fff;
       background: linear-gradient(
90deg, rgba(241,176,69,1) 15%, rgba(128,156,246,1) 100%);
}
</style>