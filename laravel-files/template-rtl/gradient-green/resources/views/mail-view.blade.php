@extends('layout.mainlayout')
@section('content')		
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                <div class="crms-title row bg-white">
                    <div class="col  p-0">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white ms-2">
                          <i class="fa fa-envelope menu-icon" aria-hidden="true"></i>
                        </span> View Message </h3>
                    </div>
                    <div class="col p-0 text-end">
                        <ul class="breadcrumb bg-white float-end m-0 ps-0 pe-0">
                          <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
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
                        <div class="col-auto float-end ms-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#compose-mail" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"><i class="fa fa-plus"></i> Compose</a>
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
                                                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o"></i></button>
                                                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Reply"> <i class="fa fa-reply"></i></button>
                                                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Forward"> <i class="fa fa-share"></i></button>
                                                    </div>
                                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="tooltip" title="Print"> <i class="fa fa-print"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sender-info">
                                            <div class="sender-img">
                                                <img width="40" alt="" src="assets/img/profiles/avatar-02.jpg" class="rounded-circle">
                                            </div>
                                            <div class="receiver-details float-start">
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
                                            <div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
                                            <div class="attach-info"> <a href="#" class="attach-filename">webdesign.png</a> <div class="attach-fileize"> 1.42 MB</div></div>
                                        </li>
                                        <li>
                                            <div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
                                            <div class="attach-info"> <a href="#" class="attach-filename">webdevelopment.png</a> <div class="attach-fileize"> 1.1 MB</div></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mailview-footer">
                                    <div class="row">
                                        <div class="col-sm-6 left-action">
                                            <button type="button" class="btn btn-white"><i class="fa fa-reply"></i> Reply</button>
                                            <button type="button" class="btn btn-white"><i class="fa fa-share"></i> Forward</button>
                                        </div>
                                        <div class="col-sm-6 right-action">
                                            <button type="button" class="btn btn-white"><i class="fa fa-print"></i> Print</button>
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
        
    </div>
    <!-- /Main Wrapper -->

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