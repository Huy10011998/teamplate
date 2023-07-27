<template>
    <div>
        <div class="main-wrapper">
            <layout-header></layout-header>
            <layout-navbar></layout-navbar>
            <!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<div class="content container-fluid">

					<!-- Page Header -->
					<div class="crms-title row bg-white mb-4">
                		<div class="col  p-0">
                			<h3 class="page-title">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="fa fa-object-group" aria-hidden="true"></i>
			                </span> Vertical Form </h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><router-link to="/index">Dashboard</router-link></li>
								<li class="breadcrumb-item active">Vertical Form</li>
							</ul>
                		</div>
                	</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Basic Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Email Address</label>
											<input type="email" class="form-control">
										</div>
										<div class="form-group">
											<label>Username</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="form-group">
											<label>Repeat Password</label>
											<input type="password" class="form-control">
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Address Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Address Line 1</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Address Line 2</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>City</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>State</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Country</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Postal Code</label>
											<input type="text" class="form-control">
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Two Column Vertical Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<h4 class="card-title">Personal Information</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Blood Group</label>
													<select class="select">
														<option>Select</option>
														<option value="1">A+</option>
														<option value="2">O+</option>
														<option value="3">B+</option>
														<option value="4">AB+</option>
													</select>
												</div>
												<div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control">
												</div>

												<div class="form-group">
													<label>Password</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Repeat Password</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<h4 class="card-title">Postal Address</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 1</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Address Line 2</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-0">
								<div class="card-header">
									<h4 class="card-title mb-0">Two Column Vertical Form</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<h4 class="card-title">Personal details</h4>
												<div class="form-group">
													<label>Name:</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Password:</label>
													<input type="password" class="form-control">
												</div>
												<div class="form-group">
													<label>State:</label>
													<select class="select">
														<option>Select State</option>
														<option value="1">California</option>
														<option value="2">Texas</option>
														<option value="3">Florida</option>
													</select>
												</div>
												<div class="form-group">
													<label>Your Message:</label>
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<h4 class="card-title">Personal details</h4>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>First Name:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Last Name:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Email:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label>Address line:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Country:</label>
															<select class="select">
																<option>Select Country</option>
																<option value="1">USA</option>
																<option value="2">France</option>
																<option value="3">India</option>
																<option value="4">Spain</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>State/Province:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>ZIP code:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>City:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- /Page Wrapper -->
        </diV>
        <!--theme settings modal-->

			<div class="modal right fade settings" id="settings"  role="dialog" aria-modal="true">
				<div class="toggle-close">
          			<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
          			</div>
           
        		</div>
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header p-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">Settings</h4>
						</div>

						<div class="modal-body pb-3">
							<div class="scroll">
							
				            <div>
				            	

				            	

				                <ul class="list-group">
				                    <li class="list-group-item border-0">
				                      <div class="row">
				                        <div class="col">
				                          <h5 class="pb-2">Primary Skin</h5>
				                        </div>
				                        <div class="col text-right">
				                          <a class="reset text-white bg-dark" id="ChangeprimaryDefault">Reset Default</a>
				                        </div>
				                      </div>
				                      <div class="theme-settings-swatches">
				                         <div class="themes">
												<div class="themes-body">
													<ul id="theme-change" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="theme-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="theme-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="theme-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="theme-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="theme-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="theme-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>
														

														<li class="list-inline-item"><span class="theme-orange bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="theme-blue bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="theme-grey bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="theme-lgrey bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="theme-dblue bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="theme-pink bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="theme-purple bg-plum-plate"></span></li>
														
													</ul>
												</div>
											</div>

				                         
				                      </div>
				                  	</li>
				              	</ul>
				              </div>

				              <div>
				                <ul class="list-group">
				                  <li class="list-group-item border-0">
				                     <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Header Style</h5>
				                      </div>
				                      <div class="col text-right">
				                        <a class="reset text-white bg-dark" id="ChageheaderDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change1" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="header-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="header-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="header-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="header-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="header-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="header-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="header-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				              </div>
				              <div>
				                <ul class="list-group m-0">
				                  <li class="list-group-item border-0">
				                    <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Apps Sidebar Style</h5>
				                      </div>
				                      <div class="col  text-right">
				                        <a class="reset text-white bg-dark" id="ChagesidebarDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change2" class="theme-colors border-0 list-inline-item list-unstyled">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="sidebar-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="sidebar-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="sidebar-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="sidebar-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="sidebar-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				                <div class="row Default-font">
				                	<div class="col">
				                        <h5 class="pb-2">Font Style</h5>
				                    </div>
				                    <div class="col text-right">
				                        <a class="reset text-white bg-dark font-Default">Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font">Roboto</li>
				                  <li class="list-inline-item poppins-font" >Poppins</li>
				                  <li class="list-inline-item montserrat-font" >Montserrat</li>
				                  <li class="list-inline-item inter-font">Inter</li>
				                </ul>
				            </div>
				            
				        </div>
						</div>

					</div>
				</div>
			</div>

		<!--theme settings-->
        <div class="sidebar-contact">
          	<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i></div>
           
        </div>
    </div>
</template>
<script>
	export default {
		mounted() {
            // Date Time Picker

if ($('.datetimepicker').length > 0) {
    $('.datetimepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        icons: {
            up: "fa fa-angle-up",
            down: "fa fa-angle-down",
            next: 'fa fa-angle-right',
            previous: 'fa fa-angle-left'
        }
    });
}

// Datatable

if ($('.datatable').length > 0) {
    $('.datatable').DataTable({
        "bFilter": false,
    });
}

// Select 2

if ($('.select').length > 0) {
    $('.select').select2({
        minimumResultsForSearch: -1,
        width: '100%'
    });
}
$(".roboto-font").click(function(){
          $("body").addClass("roboto");
          $("body").removeClass("inter");
          $("body").removeClass("monstret");
          $("body").removeClass("poppins");
        });
    $(".poppins-font").click(function(){
          $("body").removeClass("roboto");
          $("body").removeClass("inter");
          $("body").removeClass("monstret");
          $("body").addClass("poppins");
        });
    $(".montserrat-font").click(function(){
          $("body").removeClass("roboto");
          $("body").removeClass("inter");
          $("body").addClass("monstret");
          $("body").removeClass("poppins");
        });

   $(".inter-font").click(function(){
          $("body").removeClass("roboto");
          $("body").addClass("inter");
          $("body").removeClass("monstret");
          $("body").removeClass("poppins");
        });

   $(".font-Default").click(function(){
        $("body").removeClass("roboto");
          $("body").addClass("inter");
          $("body").removeClass("monstret");
          $("body").removeClass("poppins");
   })
			/*local storage*/
			!function ($) {
				'use strict';
				var topNavThemeClass = window.localStorage;
			}(window.jQuery),
				$(function () {
					var headerColors = `theme-default black-mode theme-orange theme-blue theme-grey theme-lgrey theme-dblue theme-pink 
    theme-purple theme-solid-pink theme-solid-orange theme-solid-purple theme-solid-blue theme-solid-green
     header-orange header-blue header-grey header-lgrey header-dblue header-pink 
    header-purple theme-dark theme-solid-black`;
					$(document).ready(function () {
						var navColor = localStorage.getItem('navbar-color');
						if (navColor) {
							$('body').removeClass(headerColors).addClass(navColor);
						}
					});
					$('#theme-change span').on('click', function () {
						if ($(this).hasClass("theme-default")) {
							$('body').removeClass(headerColors).addClass('theme-default');
							localStorage.setItem('navbar-color', 'theme-default');
						}
						if ($(this).hasClass("theme-solid-black")) {
							$('body').removeClass(headerColors).addClass('theme-solid-black');
							localStorage.setItem('navbar-color', 'theme-solid-black');
						}
						if ($(this).hasClass("theme-orange")) {
							$('body').removeClass(headerColors).addClass('theme-orange');
							localStorage.setItem('navbar-color', 'theme-orange');
						}
						if ($(this).hasClass("theme-dark")) {
							$('body').removeClass(headerColors).addClass('theme-dark');
							localStorage.setItem('navbar-color', 'theme-dark');
						}
						if ($(this).hasClass("theme-dark")) {
							$('body').removeClass(headerColors).addClass('theme-dark');
							localStorage.setItem('navbar-color', 'theme-dark');
						}
						if ($(this).hasClass("theme-blue")) {
							$('body').removeClass(headerColors).addClass('theme-blue');
							localStorage.setItem('navbar-color', 'theme-blue');
						}
						if ($(this).hasClass("theme-grey")) {
							$('body').removeClass(headerColors).addClass('theme-grey');
							localStorage.setItem('navbar-color', 'theme-grey');
						}
						if ($(this).hasClass("theme-lgrey")) {
							$('body').removeClass(headerColors).addClass('theme-lgrey');
							localStorage.setItem('navbar-color', 'theme-lgrey');
						}
						if ($(this).hasClass("theme-dblue")) {
							$('body').removeClass(headerColors).addClass('theme-dblue');
							localStorage.setItem('navbar-color', 'theme-dblue');
						}
						if ($(this).hasClass("theme-pink")) {
							$('body').removeClass(headerColors).addClass('theme-pink');
							localStorage.setItem('navbar-color', 'theme-pink');
						}
						if ($(this).hasClass("theme-purple")) {
							$('body').removeClass(headerColors).addClass('theme-purple');
							localStorage.setItem('navbar-color', 'theme-purple');
						}
						if ($(this).hasClass("theme-solid-pink")) {
							$('body').removeClass(headerColors).addClass('theme-solid-pink');
							localStorage.setItem('navbar-color', 'theme-solid-pink');
						}
						if ($(this).hasClass("theme-solid-orange")) {
							$('body').removeClass(headerColors).addClass('theme-solid-orange');
							localStorage.setItem('navbar-color', 'theme-solid-orange');
						}
						if ($(this).hasClass("theme-solid-purple")) {
							$('body').removeClass(headerColors).addClass('theme-solid-purple');
							localStorage.setItem('navbar-color', 'theme-solid-purple');
						}
						if ($(this).hasClass("theme-solid-blue")) {
							$('body').removeClass(headerColors).addClass('theme-solid-blue');
							localStorage.setItem('navbar-color', 'theme-solid-blue');
						}
						if ($(this).hasClass("theme-solid-green")) {
							$('body').removeClass(headerColors).addClass('theme-solid-green');
							localStorage.setItem('navbar-color', 'theme-solid-green');
						}
					});
					$('#ChangeprimaryDefault').on('click', function () {
						$('body').removeClass(headerColors).addClass('theme-default');
						localStorage.setItem('navbar-color', 'theme-default');
					});
					$('#ChangedarkDefault').on('click', function () {
						$('body').removeClass(headerColors).addClass('theme-default');
						localStorage.setItem('navbar-color', 'theme-default');
					});
				});
			/*local storage*/
			!function ($) {
				'use strict';
				var topNavThemeClass1 = window.localStorage;
			}(window.jQuery),
				$(function () {
					var headerColors1 = `theme-default black-mode header-solid-pink header-solid-orange header-solid-purple header-solid-blue header-solid-green 
    header-gradient-color1  header-gradient-color2 header-gradient-color3 header-gradient-color4 header-gradient-color5 header-gradient-color6
    header-gradient-color7 header-solid-black  `;
					$(document).ready(function () {
						var navColor1 = localStorage.getItem('navbar-color1');
						if (navColor1) {
							$('body').removeClass(headerColors1).addClass(navColor1);
						}
					});
					$('#theme-change1 span').on('click', function () {
						if ($(this).hasClass("theme-default")) {
							$('body').removeClass(headerColors1).addClass('theme-default');
							localStorage.setItem('navbar-color1', 'theme-default');
						}
						if ($(this).hasClass("header-solid-black")) {
							$('body').removeClass(headerColors1).addClass('header-solid-black');
							localStorage.setItem('navbar-color1', 'header-solid-black');
						}
						if ($(this).hasClass("header-solid-pink")) {
							$('body').removeClass(headerColors1).addClass('header-solid-pink');
							localStorage.setItem('navbar-color1', 'header-solid-pink');
						}
						if ($(this).hasClass("header-solid-orange")) {
							$('body').removeClass(headerColors1).addClass('header-solid-orange');
							localStorage.setItem('navbar-color1', 'header-solid-orange');
						}
						if ($(this).hasClass("header-solid-purple")) {
							$('body').removeClass(headerColors1).addClass('header-solid-purple');
							localStorage.setItem('navbar-color1', 'header-solid-purple');
						}
						if ($(this).hasClass("header-solid-blue")) {
							$('body').removeClass(headerColors1).addClass('header-solid-blue');
							localStorage.setItem('navbar-color1', 'header-solid-blue');
						}
						if ($(this).hasClass("header-solid-green")) {
							$('body').removeClass(headerColors1).addClass('header-solid-green');
							localStorage.setItem('navbar-color1', 'header-solid-green');
						}
						if ($(this).hasClass("header-gradient-color1")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color1');
							localStorage.setItem('navbar-color1', 'header-gradient-color1');
						}
						if ($(this).hasClass("header-gradient-color2")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color2');
							localStorage.setItem('navbar-color1', 'header-gradient-color2');
						}
						if ($(this).hasClass("header-gradient-color3")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color3');
							localStorage.setItem('navbar-color1', 'header-gradient-color3');
						}
						if ($(this).hasClass("header-gradient-color4")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color4');
							localStorage.setItem('navbar-color1', 'header-gradient-color4');
						}
						if ($(this).hasClass("header-gradient-color5")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color5');
							localStorage.setItem('navbar-color1', 'header-gradient-color5');
						}
						if ($(this).hasClass("header-gradient-color6")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color6');
							localStorage.setItem('navbar-color1', 'header-gradient-color6');
						}
						if ($(this).hasClass("header-gradient-color7")) {
							$('body').removeClass(headerColors1).addClass('header-gradient-color7');
							localStorage.setItem('navbar-color1', 'header-gradient-color7');
						}
					});
					$('#ChageheaderDefault').on('click', function () {
						$('body').removeClass(headerColors1).addClass('theme-default');
						localStorage.setItem('navbar-color1', 'theme-default');
					});
				});
			/*local storage*/
			!function ($) {
				'use strict';
				var topNavThemeClass2 = window.localStorage;
			}(window.jQuery),
				$(function () {
					var sidebarColors2 = `theme-default black-mode sidebar-solid-pink sidebar-solid-orange sidebar-solid-purple sidebar-solid-blue sidebar-solid-green 
    sidebar-gradient-color1  sidebar-gradient-color2 sidebar-gradient-color3 sidebar-gradient-color4 sidebar-gradient-color5 sidebar-gradient-color6
    sidebar-gradient-color7  sidebar-solid-black`;
					$(document).ready(function () {
						var navColor2 = localStorage.getItem('navbar-color2');
						if (navColor2) {
							$('body').removeClass(sidebarColors2).addClass(navColor2);
						}
					});
					$('#theme-change2 span').on('click', function () {
						if ($(this).hasClass("theme-default")) {
							$('body').removeClass(sidebarColors2).addClass('theme-default');
							localStorage.setItem('navbar-color2', 'theme-default');
						}
						if ($(this).hasClass("sidebar-solid-black")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-black');
							localStorage.setItem('navbar-color2', 'sidebar-solid-black');
						}
						if ($(this).hasClass("sidebar-solid-pink")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-pink');
							localStorage.setItem('navbar-color2', 'sidebar-solid-pink');
						}
						if ($(this).hasClass("sidebar-solid-orange")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-orange');
							localStorage.setItem('navbar-color2', 'sidebar-solid-orange');
						}
						if ($(this).hasClass("sidebar-solid-purple")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-purple');
							localStorage.setItem('navbar-color2', 'sidebar-solid-purple');
						}
						if ($(this).hasClass("sidebar-solid-blue")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-blue');
							localStorage.setItem('navbar-color2', 'sidebar-solid-blue');
						}
						if ($(this).hasClass("sidebar-solid-green")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-solid-green');
							localStorage.setItem('navbar-color2', 'sidebar-solid-green');
						}
						if ($(this).hasClass("sidebar-gradient-color1")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color1');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color1');
						}
						if ($(this).hasClass("sidebar-gradient-color2")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color2');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color2');
						}
						if ($(this).hasClass("sidebar-gradient-color3")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color3');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color3');
						}
						if ($(this).hasClass("sidebar-gradient-color4")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color4');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color4');
						}
						if ($(this).hasClass("sidebar-gradient-color5")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color5');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color5');
						}
						if ($(this).hasClass("sidebar-gradient-color6")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color6');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color6');
						}
						if ($(this).hasClass("sidebar-gradient-color7")) {
							$('body').removeClass(sidebarColors2).addClass('sidebar-gradient-color7');
							localStorage.setItem('navbar-color2', 'sidebar-gradient-color7');
						}
					});
					$('#ChagesidebarDefault').on('click', function () {
						$('body').removeClass(sidebarColors2).addClass('theme-default');
						localStorage.setItem('navbar-color2', 'theme-default');
					});
				});
		},
	}
</script>