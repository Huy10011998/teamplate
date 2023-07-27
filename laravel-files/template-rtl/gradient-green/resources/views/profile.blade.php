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
                          <i class="feather-user"></i>
                        </span> Employee Profile </h3>
                    </div>
                    <div class="col p-0 text-end">
                        <ul class="breadcrumb bg-white float-end m-0 ps-0 pe-0">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Employee Profile</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Page Header -->
                <div class="page-header pt-3 mb-0">
                    <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <a href="#"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                                    <h6 class="text-muted">UI/UX Design Team</h6>
                                                    <small class="text-muted">Web Designer</small>
                                                    <div class="staff-id">Employee ID : FT-0001</div>
                                                    <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                                    <div class="staff-msg"><a class="btn btn-custom" href="#">Send Message</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Phone:</div>
                                                        <div class="text"><a href="">9876543210</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Email:</div>
                                                        <div class="text"><a href="">johndoe@example.com</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">24th July</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Address:</div>
                                                        <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <div class="text">Male</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Reports to:</div>
                                                        <div class="text">
                                                           <div class="avatar-box">
                                                              <div class="avatar avatar-xs">
                                                                 <img src="assets/img/profiles/avatar-16.jpg" alt="">
                                                              </div>
                                                           </div>
                                                           <a href="profile">
                                                                Jeffery Lalor
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-edit"><a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content p-0">
                
                    <!-- Profile Info Tab -->
                    <div id="emp_profile" class="pro-overview tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Personal Informations <a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></h3>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Passport No.</div>
                                                <div class="text">9876543210</div>
                                            </li>
                                            <li>
                                                <div class="title">Passport Exp Date.</div>
                                                <div class="text">9876543210</div>
                                            </li>
                                            <li>
                                                <div class="title">Tel</div>
                                                <div class="text"><a href="">9876543210</a></div>
                                            </li>
                                            <li>
                                                <div class="title">Nationality</div>
                                                <div class="text">Indian</div>
                                            </li>
                                            <li>
                                                <div class="title">Religion</div>
                                                <div class="text">Christian</div>
                                            </li>
                                            <li>
                                                <div class="title">Marital status</div>
                                                <div class="text">Married</div>
                                            </li>
                                            <li>
                                                <div class="title">Employment of spouse</div>
                                                <div class="text">No</div>
                                            </li>
                                            <li>
                                                <div class="title">No. of children</div>
                                                <div class="text">2</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Emergency Contact <a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></h3>
                                        <h5 class="section-title">Primary</h5>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Name</div>
                                                <div class="text">John Doe</div>
                                            </li>
                                            <li>
                                                <div class="title">Relationship</div>
                                                <div class="text">Father</div>
                                            </li>
                                            <li>
                                                <div class="title">Phone </div>
                                                <div class="text">9876543210, 9876543210</div>
                                            </li>
                                        </ul>
                                        <hr>
                                        <h5 class="section-title">Secondary</h5>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Name</div>
                                                <div class="text">Karen Wills</div>
                                            </li>
                                            <li>
                                                <div class="title">Relationship</div>
                                                <div class="text">Brother</div>
                                            </li>
                                            <li>
                                                <div class="title">Phone </div>
                                                <div class="text">9876543210, 9876543210</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Bank information</h3>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Bank name</div>
                                                <div class="text">ICICI Bank</div>
                                            </li>
                                            <li>
                                                <div class="title">Bank account No.</div>
                                                <div class="text">159843014641</div>
                                            </li>
                                            <li>
                                                <div class="title">IFSC Code</div>
                                                <div class="text">ICI24504</div>
                                            </li>
                                            <li>
                                                <div class="title">PAN No</div>
                                                <div class="text">TC000Y56</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Family Informations <a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Relationship</th>
                                                        <th>Date of Birth</th>
                                                        <th>Phone</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Leo</td>
                                                        <td>Brother</td>
                                                        <td>Feb 16th, 2019</td>
                                                        <td>9876543210</td>
                                                        <td class="text-end">
                                                            <div class="dropdown dropdown-action">
                                                                <a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill mb-0">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                            <div>Bsc Computer Science</div>
                                                            <span class="time">2000 - 2003</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                            <div>Msc Computer Science</div>
                                                            <span class="time">2000 - 2003</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill mb-0">
                                    <div class="card-body">
                                        <h3 class="card-title">Experience <a href="#" class="edit-icon"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
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
                    <!-- /Profile Info Tab -->
                    
                    
                    
                    
                    
                </div>

                </div>
                <!-- /Page Header -->
                
                
            </div>
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->

    <!--modal section starts here-->
    <div class="modal fade" id="add-new-list">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Add New List View</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form class="forms-sample">
              <div class="form-group row">
                <label for="view-name" class="col-sm-4 col-form-label">New View Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="view-name" placeholder="New View Name">
                </div>
              </div>
              <div class="form-group row pt-4">
                <label class="col-sm-4 col-form-label">Sharing Settings</label>
                <div class="col-sm-8">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Just For Me <i class="input-helper"></i></label>
                    </div><br />
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked=""> Share Filter with Everyone <i class="input-helper"></i></label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-gradient-primary ms-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </div>
            </form>
          </div>
       
        </div>
      </div>
    </div>

    <!-- Modal -->
        <div class="modal right fade" id="add_report" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog" role="document">
                <button type="button"class="btn-close md-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
                        <h4><img src="assets/img/reports.png" alt="Report" class="report-img">&nbsp;&nbsp;Add New Report</h4>
                    </div>

                    <div class="modal-body">
                        <div class="submit-section mt-0 text-start">
                              <button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Create</button>&nbsp;&nbsp;
                            <button type="button" class="btn btn-secondary btn-rounded cancel-button">Cancel</button>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-12">
                                <form>
                                      <div class="form-group">
                                        <label class="col-form-label">Choose a Report Type</label>
                                        <select class="form-control select">
                                            <option>Task Report</option>
                                            <option>Contact Report</option>
                                            <option>Company report</option>
                                         </select>
                                      </div>
                                </form>
                                <h5 class="py-4">Report Preview</h5>
                                <img src="assets/img/Report-Preview.png" class="img-fluid w-100" alt="Report">
                            </div>
                        </div>

                    </div>

                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!--system users Modal -->
        <div class="modal right fade" id="system-user" tabindex="-1" role="dialog" aria-modal="true">
          <div class="modal-dialog" role="document">
            <button type="button"class="btn-close md-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
                <div class="row w-100">
                  <div class="col-md-7 account">
                    <p class="User-name">System User</p>
                    <span><img src="assets/img/system-user.png" alt="User" class="user-image" /></span>
                    <span class="modal-title users">John Doe</span>&nbsp;
                    <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                    <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-md-5 text-end">
                    <ul class="list-unstyled list-style-none">
                        <li class="dropdown list-inline-item"><br />
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Actions </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Edit This Contact</a>
                                  <a class="dropdown-item" href="#">Change Contact Image</a>
                                  <a class="dropdown-item" href="#">Delete This Contact</a>
                                  <a class="dropdown-item" href="#">Clone This Contact</a>
                                  <a class="dropdown-item" href="#">Change Record Owner</a>
                                  <a class="dropdown-item" href="#">Generate Merge Document</a>
                                  <a class="dropdown-item" href="#">Change Contact To Lead</a>
                                  <a class="dropdown-item" href="#">Print This Contact</a>
                                  <a class="dropdown-item" href="#">Email This Contact</a>
                                  <a class="dropdown-item" href="#">Add New Task For Contact</a>
                                  <a class="dropdown-item" href="#">Add New Event For Contact</a>
                                  <a class="dropdown-item" href="#">Add Activity Set To Contact</a>
                                  <a class="dropdown-item" href="#">Add New Deal For Contact</a>
                                  <a class="dropdown-item" href="#">Add New Project For Contact</a>
                            </div>
                        </li>
                      
                    </ul>
                    
                  </div>
                </div>
               
              </div>

              <div class="card shadow p-2 due-dates">
                <div class="row m-0">
                  <div class="col">
                    <span>Title</span>
                    <p></p>
                  </div>
                  <div class="col">
                    <span>Companies</span>
                    <p></p>
                  </div>
                  <div class="col">
                    <span>Phone</span>
                    <p>9876764875</p>
                  </div>
                  <div class="col">
                    <span>Email</span>
                    <p>johndoe@gmail.com</p>
                  </div>
                  <div class="col">
                    <span>Contact owner</span>
                    <p>John Doe</p>
                  </div>
                </div>
              </div>

              <div class="modal-body">
                <div class="task-infos">
                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                        <li class="nav-item"><a class="nav-link active" href="#task-details" data-bs-toggle="tab">Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="#task-related" data-bs-toggle="tab">Related</a></li>
                        <li class="nav-item"><a class="nav-link" href="#task-activity" data-bs-toggle="tab">Activity</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="task-details">
                            <div class="crms-tasks">
                              <div class="tasks__item crms-task-item active">
                                <div class="accordion-header js-accordion-header">Name & Occupation</div> 
                                  <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                      <table class="table">
                                            <tbody>
                                              <tr>
                                                <td class="border-0">Record ID</td>
                                                <td class="border-0">124192692</td>
                                              </tr>
                                              <tr>
                                                <td class="border-0">Name</td>
                                                <td class="border-0">John Doe</td>
                                              </tr>
                                              <tr>
                                                <td>Company</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <td>Title</td>
                                                <td>-</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Contact Details</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <table class="table">
                                        <tbody>
                                          <tr>
                                            <td class="border-0">Email</td>
                                            <td class="border-0">johndoe@gmail.com</td>
                                          </tr>
                                          <tr>
                                            <td>Email Opted out</td>
                                            <td>
                                              <div class="form-check m-0 pl-0">
                                                <label class="form-check-label">
                                                  <input class="checkbox" type="checkbox"> <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>Phone</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Home Phone</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Mobile Phone</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Other Phone</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Assistant Phone</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Assistant Name</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Fax</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Linkedin</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Facebook</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>Twitter</td>
                                            <td></td>
                                          </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Address Information</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <td class="border-0">Mailling Address</td>
                                        <td class="border-0">-</td>
                                      </tr>
                                      <tr>
                                        <td>Other Address</td>
                                        <td>-</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Dates To Remember</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                  <table class="table">
                                        <tbody>
                                          <tr>
                                            <td class="border-0">Dates to Remember</td>
                                            <td class="border-0">-</td>
                                          </tr>
                                          <tr>
                                            <td>Date of Birth</td>
                                            <td>-</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                </div>
                                
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Additional Information</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <table class="table">
                                        <tbody>
                                              <tr>
                                                <td class="border-0">Date of Next Activity</td>
                                                <td class="border-0">-</td>
                                              </tr>
                                              <tr>
                                                <td>Date of Last Activity</td>
                                                <td>-</td>
                                              </tr>
                                              <tr>
                                                <td>Contact Owner</td>
                                                <td>John Doe</td>
                                              </tr>
                                              <tr>
                                                <td>Contact Created</td>
                                                <td>Jun 20, 2020</td>
                                              </tr>
                                          
                                            </tbody>
                                          </table>
                                </div>
                                
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Description Information</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                  <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="border-0">Description</td>
                                                <td class="border-0">Lorem Ipsum</td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item active">
                            <div class="accordion-header js-accordion-header">Tag List</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                  <table class="table">
                                        <tbody>
                                          <tr>
                                            <td class="border-0">Tag List</td>
                                            <td class="border-0">Lorem Ipsum</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                        </div>
                            
                        <div class="tab-pane task-related" id="task-related">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Companies</h4>
                                      <span>2</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-info card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Deals</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Projects</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-4">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Contacts</h4>
                                      <span></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Notes</h4>
                                      <span></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-info card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Files</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="crms-tasks  p-2">
                                    <div class="tasks__item crms-task-item active">
                                        <div class="accordion-header js-accordion-header">Companies <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Deals <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Projects <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Contacts <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Files <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="task-activity">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Total Activities</h4>
                                      <span>2</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-info card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Emails</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Tasks</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-4">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Events</h4>
                                      <span></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Last Activity</h4>
                                      <span>2</span>
                                    </div>
                                  </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="crms-tasks  p-2">
                                    <div class="tasks__item crms-task-item active">
                                        <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>

            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!--Deal details Modal -->
        <div class="modal right fade" id="project-details" tabindex="-1" role="dialog" aria-modal="true">
          <div class="modal-dialog" role="document">
            <button type="button"class="btn-close md-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
                <div class="row w-100">
                  <div class="col-md-7 account">
                    <p class="User-name">Project</p>
                    <span><img src="assets/img/c-logo.png" alt="User" class="user-image" /></span>
                    <span class="modal-title">Whirligig G990</span>&nbsp;
                    <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                    <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  </div>
                  <div class="col-md-5 text-end">
                    <ul class="list-unstyled list-style-none">
                        <li class="dropdown list-inline-item"><br />
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Actions </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Edit This Project</a>
                                  <a class="dropdown-item" href="#">Change Project Image</a>
                                  <a class="dropdown-item" href="#">Clone This Project</a>
                                  <a class="dropdown-item" href="#">Delete This Project</a>
                                  <a class="dropdown-item" href="#">Change Record Owner</a>
                                  <a class="dropdown-item" href="#">Generate Merge Document</a>
                                  <a class="dropdown-item" href="#">Print This Project</a>
                                  <a class="dropdown-item" href="#">Add New Task For Project</a>
                                  <a class="dropdown-item" href="#">Add New Event For Project</a>
                                  <a class="dropdown-item" href="#">Add Activity Set To Project</a>
                            </div>
                        </li>
                      
                    </ul>
                    
                  </div>
                </div>
               
              </div>

              <div class="card shadow p-2 due-dates">
                <div class="row m-0">
                  <div class="col">
                    <span>Title</span>
                    <p></p>
                  </div>
                  <div class="col">
                    <span>Companies</span>
                    <p></p>
                  </div>
                  <div class="col">
                    <span>Phone</span>
                    <p>9876764875</p>
                  </div>
                  <div class="col">
                    <span>Email</span>
                    <p>johndoe@gmail.com</p>
                  </div>
                  <div class="col">
                    <span>Contact owner</span>
                    <p>John Doe</p>
                  </div>
                </div>
              </div>

              <div class="modal-body project-pipeline">
                  <div class="row pb-2">
                    <div class="col">
                        <span>Pipeline: Deal Pipeline</span>
                    </div>
                    <div class="col text-end">
                        <span>Deal State: closed won</span>
                    </div>
                </div>
                  <div class="row">
                      <div class="pipeline-small flat pipeline-project p-2 w-100">
                        <a class="won noselect tipped-top text-white w-25" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Plan">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Plan</span>
                            <span class="stretched-link" data-bs-toggle="modal" data-bs-target="#pipeline-stage" data-bs-dismiss="modal"></span>
                        </a>
                        <a class="won noselect tipped-top bg-gray text-white w-12" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Design">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Design</span>
                            <span class="stretched-link" data-bs-toggle="modal" data-bs-target="#pipeline-stage" data-bs-dismiss="modal"></span>
                        </a>
                        <a class="won noselect tipped-top text-white w-25" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Develop">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Develop</span>
                            <span class="stretched-link" data-bs-toggle="modal" data-bs-target="#pipeline-stage" data-bs-dismiss="modal"></span>
                        </a>
                          
                        <a class="won noselect tipped-top text-white padding w-25" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="COmplete">&nbsp;Complete
                            
                        </a>
                    </div>
                  </div>
                <div class="task-infos pt-3">
                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                        <li class="nav-item"><a class="nav-link active" href="#pipeline-task-details" data-bs-toggle="tab">Details</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pipeline-task-related" data-bs-toggle="tab">Related</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="pipeline-task-details">
                            <div class="crms-tasks">
                              <div class="tasks__item crms-task-item active">
                                <div class="accordion-header js-accordion-header">Task Details</div> 
                                  <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                  <td>Record ID</td>
                                                  <td>124192692</td>
                                                </tr>
                                                <tr>
                                                  <td>Task Name</td>
                                                  <td>1. Personalize your account</td>
                                                </tr>
                                                <tr>
                                                  <td>Assigned To</td>
                                                  <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                  <td>Date Due</td>
                                                  <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                          <div class="tasks__item crms-task-item">
                            <div class="accordion-header js-accordion-header">Additional Information</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <table class="table">
                                        <tbody>
                                            <tr>
                                              <td>Start Date</td>
                                              <td>-</td>
                                            </tr>
                                            <tr>
                                              <td>Reminder Date</td>
                                              <td>-</td>
                                            </tr>
                                            <tr>
                                              <td>Repeats</td>
                                              <td></td>
                                            </tr>
                                            <tr>
                                              <td>Progress</td>
                                              <td>0%</td>
                                            </tr>
                                            <tr>
                                              <td>Priorit</td>
                                              <td>Medium</td>
                                            </tr>
                                            <tr>
                                              <td>Status</td>
                                              <td>Not Started</td>
                                            </tr>
                                            <tr>
                                              <td>Last Updated</td>
                                              <td>04-Jun-20</td>
                                            </tr>
                                            <tr>
                                              <td>Created</td>
                                              <td>03-Jun-20 1:14 AM</td>
                                            </tr>
                                            <tr>
                                              <td>Task Created By</td>
                                              <td>John Doe</td>
                                            </tr>
                                            <tr>
                                              <td>Task Owner</td>
                                              <td>John Doe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item">
                            <div class="accordion-header js-accordion-header">Related To</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                              <td>Related To</td>
                                              <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item">
                            <div class="accordion-header js-accordion-header">Description Information</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <table class="table">
                                          <tbody>
                                            <tr>
                                              <td>Description</td>
                                              <td>-</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                                
                            </div>
                          </div>
                          <div class="tasks__item crms-task-item">
                            <div class="accordion-header js-accordion-header">Task Comments</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <button class="btn btn-secondary text-white w-25">Add Comments</button>
                                </div>
                            </div>
                          </div>
                         
                          <div class="tasks__item crms-task-item">
                            <div class="accordion-header js-accordion-header">Permissions</div> 
                              <div class="accordion-body js-accordion-body">
                                <div class="accordion-body__contents">
                                      <table class="table">
                                          <tbody>
                                            <tr>
                                              <td>Task visibility</td>
                                              <td>Private</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                        </div>
                            
                        <div class="tab-pane task-related" id="pipeline-task-related">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Companies</h4>
                                      <span>2</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-info card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Deals</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Projects</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-4">
                                <div class="col-md-4">
                                  <div class="card bg-gradient-success card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Contacts</h4>
                                      <span></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Notes</h4>
                                      <span></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card bg-gradient-info card-img-holder text-white h-100">
                                    <div class="card-body">
                                      <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                      <h4 class="font-weight-normal mb-3">Files</h4>
                                      <span>1</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="crms-tasks  p-2">
                                    <div class="tasks__item crms-task-item active">
                                        <div class="accordion-header js-accordion-header">Companies <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Deals <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Projects <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Contacts <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tasks__item crms-task-item">
                                        <div class="accordion-header js-accordion-header">Files <span class="badge badge-secondary float-end">0</span></div> 
                                          <div class="accordion-body js-accordion-body">
                                            <div class="accordion-body__contents">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
              </div>
            </div>

            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->

        <!-- cchange pipeline stage Modal -->
        <div class="modal" id="pipeline-stage">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Change Pipeline Stage</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                 <form>
                  <div class="form-group">
              <label class="col-form-label">New Stage</label>
                <select class="form-control" id="related-to">
                    <option>Plan</option>
                    <option>Design</option>
                    <option>Develop</option>
                    <option>Complete</option>
                 </select>
              </div>
                 </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer text-center">
                <button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                <button type="button" class="btn btn-secondary btn-rounded cancel-button">Cancel</button>
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