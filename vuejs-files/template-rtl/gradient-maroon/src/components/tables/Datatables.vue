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
			                  <i class="la la-table"></i>
			                </span> Data Tables</h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><router-link to="/index">Dashboard</router-link></li>
								<li class="breadcrumb-item active">Data Tables</li>
							</ul>
                		</div>
                	</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card mb-0">
								<div class="card-header">
									<h4 class="card-title mb-0">Default Datatable</h4>
									<p class="card-text py-3">
										This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
									</p>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="datatable table table-stripped mb-0 datatables">
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>$163,000</td>
												</tr>
											</tbody>
										</table>
									</div>
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
				                        <a class="reset text-white bg-dark font-Default" onclick="ChangeFontDefault()">Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font" onclick="changeFonts1();">Roboto</li>
				                  <li class="list-inline-item poppins-font" onclick="changeFonts2();">Poppins</li>
				                  <li class="list-inline-item montserrat-font" onclick="changeFonts3();">Montserrat</li>
				                  <li class="list-inline-item inter-font" onclick="changeFonts4();">Inter</li>
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
            // Datatable

if ($('.datatable').length > 0) {
    $('.datatable').DataTable({
        "bFilter": false,
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