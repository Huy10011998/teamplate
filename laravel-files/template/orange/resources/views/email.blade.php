@extends('layout.mainlayout')
@section('content')		
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                  <div class="crms-title row bg-white">
                    <div class="col  p-0">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                          <i class="fa fa-envelope menu-icon" aria-hidden="true"></i>
                        </span> Email </h3>
                      </div>
                      <div class="col p-0 text-end">
                        <ul class="breadcrumb bg-white float-end m-0 ps-0 pe-0">
                          <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                          <li class="breadcrumb-item active">Email</li>
                        </ul>
                      </div>
                  </div>
            
                <!-- Page Header -->
                <div class="page-header py-3 mb-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Inbox</h3>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#compose-mail" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"><i class="fa fa-plus"></i> Compose</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="email-header">
                                    <div class="row mobile-view">
                                        <div class="top-action-left">
                                            <div class="float-start">
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">All</a>
                                                        <a class="dropdown-item" href="#">None</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Read</a>
                                                        <a class="dropdown-item" href="#">Unread</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Reply</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Mark As Read</a>
                                                        <a class="dropdown-item" href="#">Mark As Unread</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <a class="dropdown-item" href="#">Trash</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">New</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" data-bs-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Work</a>
                                                        <a class="dropdown-item" href="#">Family</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Primary</a>
                                                        <a class="dropdown-item" href="#">Promotions</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                    </div>
                                                </div>
                                                <button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-md-inline-block mb-3"><i class="fa fa-refresh"></i></button>
                                            </div>
                                            <div class="float-start d-none  d-sm-block">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                        </div>
                                        <div class="row top-action-right">
                                            <div class="col">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                    <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                                        
                                                </div>
                                                <p class="text-muted d-md-inline-block">Showing 10 of 112 </p>
                                            </div>

                                        </div>
                                        
                                    </div>
                                    <div class="row web-view">
                                        <div class="col top-action-left">
                                            <div class="float-start">
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">All</a>
                                                        <a class="dropdown-item" href="#">None</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Read</a>
                                                        <a class="dropdown-item" href="#">Unread</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Reply</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Mark As Read</a>
                                                        <a class="dropdown-item" href="#">Mark As Unread</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <a class="dropdown-item" href="#">Trash</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">New</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" data-bs-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Work</a>
                                                        <a class="dropdown-item" href="#">Family</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Primary</a>
                                                        <a class="dropdown-item" href="#">Promotions</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-start d-none d-sm-block">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                        </div>
                                        <div class="col-auto top-action-right">
                                            <div class="text-end">
                                                <button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
                                                <div class="btn-group">
                                                    <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                    <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-end pt-2">
                                                <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-content pt-3">
                                    <div class="table-responsive">
                                        <table class="table table-inbox table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                                    <td class="name">John Doe</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td><i class="fa fa-paperclip"></i></td>
                                                    <td class="mail-date">13:14</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Envato Account</td>
                                                    <td class="subject">Important account security update from Envato</td>
                                                    <td></td>
                                                    <td class="mail-date">8:42</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Twitter</td>
                                                    <td class="subject">HRMS Bootstrap Admin Template</td>
                                                    <td></td>
                                                    <td class="mail-date">30 Nov</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Richard Parker</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">18 Sep</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">John Smith</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">21 Aug</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">me, Robert Smith (3)</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">1 Aug</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Codecanyon</td>
                                                    <td class="subject">Welcome To Codecanyon</td>
                                                    <td></td>
                                                    <td class="mail-date">Jul 13</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Richard Miles</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td><i class="fa fa-paperclip"></i></td>
                                                    <td class="mail-date">May 14</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">John Smith</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">11/11/16</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                                    <td class="name">Mike Litorus</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">10/31/16</td>
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
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->


<!--compose mail-->
<!--modal section starts here-->
<div class="modal fade right" id="compose-mail">
    <div class="modal-dialog">
        <button type="button"class="btn-close md-close" data-bs-dismiss="modal"></button>
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Compose New Mail</h4>
            <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-0 border-0">
                  <div>
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
          			<div class="toggle" data-bs-toggle="modal" data-bs-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
          			</div>
           
        		</div>
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header p-3">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
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
				                        <div class="col text-end">
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
				                      <div class="col text-end">
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
				                      <div class="col  text-end">
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
				                    <div class="col text-end">
				                        <a class="reset text-white bg-dark font-Default">Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font" >Roboto</li>
				                  <li class="list-inline-item poppins-font">Poppins</li>
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
          	<div class="toggle" data-bs-toggle="modal" data-bs-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i></div>
           
        </div>
@endsection