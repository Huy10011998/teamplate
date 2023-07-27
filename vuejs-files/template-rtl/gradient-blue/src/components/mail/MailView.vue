<template>
    <div>
        <div class="main-wrapper">
            <layout-header></layout-header>
            <layout-navbaremail></layout-navbaremail>
            <!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">

                	<div class="crms-title row bg-white">
			            <div class="col  p-0">
			                <h3 class="page-title m-0">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="fa fa-envelope menu-icon" aria-hidden="true"></i>
			                </span> View Message </h3>
			            </div>
			            <div class="col p-0 text-right">
			                <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
			                  <li class="breadcrumb-item"><router-link to="/index">Dashboard</router-link></li>
			                  <li class="breadcrumb-item active">Message</li>
			                </ul>
			            </div>
			        </div>
				
					<!-- Page Header -->
					<div class="page-header py-3 mb-0">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">View Message</h3>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" data-toggle="modal" data-target="#compose-mail" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"><i class="fa fa-plus"></i> Compose</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
			
					<div class="row">
						<div class="col-sm-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="mailview-content">
										<div class="mailview-header">
											<div class="row">
												<div class="col-sm-9">
													<div class="text-ellipsis m-b-10">
														<span class="mail-view-title">CRMS Bootstrap Admin Template</span>
													</div>
												</div>
												<div class="col-sm-3">
													<div class="mail-view-action">
														<div class="btn-group">
															<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></button>
															<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Reply"> <i class="fa fa-reply"></i></button>
															<button type="button" class="btn btn-white btn-sm mr-1" data-toggle="tooltip" title="Forward"> <i class="fa fa-share"></i></button>
														</div>
														<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Print"> <i class="fa fa-print"></i></button>
													</div>
												</div>
											</div>
											<div class="sender-info">
												<div class="sender-img">
													<img width="40" alt="" src="../../assets/img/profiles/avatar-02.jpg" class="rounded-circle">
												</div>
												<div class="receiver-details float-left">
													<span class="sender-name">John Doe (johnjoe@example.com)</span>
													<span class="receiver-name">
														to
														<span>me</span>, <span>Richard</span>, <span>Paul</span>
													</span>	
												</div>	
												<div class="mail-sent-time">
													<span class="mail-time">18 Feb 2019 9:42 AM</span>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="mailview-inner">
											<p>Hello Richard,</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>Thanks,<br>
											John Doe</p>
										</div>
									</div>
									<div class="mail-attachments">
										<p><i class="fa fa-paperclip"></i> 2 Attachments - <a href="#">View all</a> | <a href="#">Download all</a></p>
										<ul class="attachments clearfix">
											<li>
												<div class="attach-file"><i class="fa fa-file-pdf-o"></i></div>
												<div class="attach-info"> <a href="#" class="attach-filename">daily_meeting.pdf</a> <div class="attach-fileize"> 842 KB</div></div>
											</li>
											<li>
												<div class="attach-file"><i class="fa fa-file-word-o"></i></div>
												<div class="attach-info"> <a href="#" class="attach-filename">documentation.docx</a> <div class="attach-fileize"> 2,305 KB</div></div>
											</li>
											<li>
												<div class="attach-file"><img src="../../assets/img/placeholder.jpg" alt="Attachment"></div>
												<div class="attach-info"> <a href="#" class="attach-filename">webdesign.png</a> <div class="attach-fileize"> 1.42 MB</div></div>
											</li>
											<li>
												<div class="attach-file"><img src="../../assets/img/placeholder.jpg" alt="Attachment"></div>
												<div class="attach-info"> <a href="#" class="attach-filename">webdevelopment.png</a> <div class="attach-fileize"> 1.1 MB</div></div>
											</li>
										</ul>
									</div>
									<div class="mailview-footer">
										<div class="row">
											<div class="col-sm-6 left-action">
												<button type="button" class="btn btn-white"><i class="fa fa-reply"></i> Reply</button>
												<button type="button" class="btn btn-white ml-1"><i class="fa fa-share"></i> Forward</button>
											</div>
											<div class="col-sm-6 right-action">
												<button type="button" class="btn btn-white mr-1"><i class="fa fa-print"></i> Print</button>
												<button type="button" class="btn btn-white"><i class="fa fa-trash-o"></i> Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
			</div>
			<!-- /Page Wrapper -->
        </diV>
      <!--compose mail-->
   	 <!--modal section starts here-->
        <div class="modal fade right" id="compose-mail">
            <div class="modal-dialog">
              <button type="button" class="close md-close" data-dismiss="modal">&times;</button>
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Compose New Mail</h4>
                  <button type="button" class="close xs-close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card mb-0">
                        <div class="card-body">
                          <form>
                            <div class="form-group">
                              <input type="email" placeholder="To" class="form-control">
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="email" placeholder="Cc" class="form-control">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="email" placeholder="Bcc" class="form-control">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <input type="text" placeholder="Subject" class="form-control">
                            </div>
                            <div class="form-group">
                              <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                            </div>
                            <div class="form-group mb-0">
                              <div class="text-center">
                                <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                <button class="btn btn-danger m-l-5" type="button"><span>Delete</span> <i class="fa fa-trash-o m-l-5"></i></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             
              </div>
            </div>
          </div>
  
  
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
                                    <li class="list-inline-item poppins-font">Poppins</li>
                                    <li class="list-inline-item montserrat-font">Montserrat</li>
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
        // Email Inbox

    if ($('.clickable-row').length > 0) {
        $('.clickable-row').on('click', function() {
            window.location = $(this).data("href");
        });
    }


    if ($('.clickable-row').length > 0) {
        $('.clickable-row').on('click', function() {
            window.location = $(this).data("href");
        });
    }
    // Check all email

    $(document).on('click', '#check_all', function() {
        $('.checkmail').click();
        return false;
    });
    if ($('.checkmail').length > 0) {
        $('.checkmail').each(function() {
            $(this).on('click', function() {
                if ($(this).closest('tr').hasClass('checked')) {
                    $(this).closest('tr').removeClass('checked');
                } else {
                    $(this).closest('tr').addClass('checked');
                }
            });
        });
    }

    // Mail important

    $(document).on('click', '.mail-important', function() {
        $(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');
    });

  

    // Task Complete

    $(document).on('click', '#task_complete', function() {
        $(this).toggleClass('task-completed');
        return false;
    });
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








            /*tabs*/
            var accordion = (function () {

                var $accordion = $('.crms-tasks');
                var $accordion_header = $accordion.find('.js-accordion-header');
                var $accordion_item = $('.js-accordion-item');

                // default settings 
                var settings = {
                    // animation speed
                    speed: 400,

                    // close all other accordion items if true
                    oneOpen: false
                };

                return {
                    // pass configurable object literal
                    init: function ($settings) {
                        $accordion_header.on('click', function () {
                            accordion.toggle($(this));
                        });

                        $.extend(settings, $settings);

                        // ensure only one accordion is active if oneOpen is true
                        if (settings.oneOpen && $('.crms-task-item.active').length > 1) {
                            $('.crms-task-item.active:not(:first)').removeClass('active');
                        }

                        // reveal the active accordion bodies
                        $('.crms-task-item.active').find('> .js-accordion-body').show();
                    },
                    toggle: function ($this) {

                        if (settings.oneOpen && $this[0] != $this.closest('.crms-tasks').find('> .crms-task-item.active > .js-accordion-header')[0]) {
                            $this.closest('.crms-tasks')
                                .find('> .crms-task-item')
                                .removeClass('active')
                                .find('.js-accordion-body')
                                .slideUp()
                        }

                        // show/hide the clicked accordion item
                        $this.closest('.crms-task-item').toggleClass('active');
                        $this.next().stop().slideToggle(settings.speed);
                    }
                }
            })();
            accordion.init({
                speed: 300,
                oneOpen: true
            });
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

        },
    }
</script>