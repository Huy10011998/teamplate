@extends('layout.mainlayout')
@section('content')		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">

                	<div class="crms-title row bg-white">
                		<div class="col">
                			<h3 class="page-title m-0">
			                <span class="page-title-icon bg-gradient-primary text-white me-2">
			                  <i class="feather-database"></i>
			                </span> Companies </h3>
                		</div>
                		<div class="col text-end">
                			<ul class="breadcrumb bg-white float-end m-0 ps-0 pe-0">
								<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
								<li class="breadcrumb-item active">Companies</li>
							</ul>
                		</div>
                	</div>
					
					<!-- Page Header -->
					<div class="page-header pt-3 mb-0 ">
						<div class="row">
							<div class="col">
								<div class="dropdown">
									<a class="dropdown-toggle recently-viewed" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Recently Viewed</a>
									<div class="dropdown-menu dropdown-menu-list">
										<a class="dropdown-item" href="#">Recently Viewed</a>
				                        <a class="dropdown-item" href="#">Items I'm following</a>
				                        <a class="dropdown-item" href="#">All Companies</a>
				                        <a class="dropdown-item" href="#">Companies added in the last 24 hours</a>
				                        <a class="dropdown-item" href="#">Companies added in the last 7 days</a>
				                        <a class="dropdown-item" href="#">Companies with no notes in the last month</a>
				                        <a class="dropdown-item" href="#">Companies with no notes in the last 7 days</a>
									</div>
								</div>
							</div>
							<div class="col text-end">
								<ul class="list-inline-item pl-0">
					                <li class="nav-item dropdown list-inline-item add-lists">
					                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
					                        <div class="nav-profile-text">
					                          <i class="fa fa-th" aria-hidden="true"></i>
					                        </div>
					                    </a>
					                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
					                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#add-new-list">Add New List View</a>
					                    </div>
					                </li>
					                <li class="list-inline-item">
					                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-bs-toggle="modal" data-bs-target="#add_company">New Company</button>
					                </li>
					            </ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Content Starts -->
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped table-nowrap custom-table mb-0 datatable">
											<thead>
												<tr>
													<th class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</th>
													<th>Company</th>
													<th>Phone</th>
													<th>Billing Street</th>
													<th>Billing City</th>
													<th>Billing State</th>
													<th>Billing Country</th>
													<th></th>
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Clampett Oil and Gas Corp.</a>
													</td>
													<td>8754554531</td>
													<td>
													 Escalon Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>United States</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Acme Corporation</a>
													</td>
													<td>8754554531</td>
													<td>
														1000 Escalon Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>USA</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo3.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Soylent Corp</a>
													</td>
													<td>8754554531</td>
													<td>
														Havier Street	
													</td>
													<td>Soylent Corp</td>
													<td>CA</td>
													<td>India</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox"> 
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Umbrella </a>
													</td>
													<td>8754554531</td>
													<td>
														1000 Escalon Street	
													</td>
													<td> Umbrella</td>
													<td>CA</td>
													<td>Europe</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Clampett Oil and Gas Corp.</a>
													</td>
													<td>8754554531</td>
													<td>
													  Nephew Street	
													</td>
													<td>Palo Alto</td>
													<td>CA</td>
													<td>United States</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox">
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo2.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Silicon Valley</a>
													</td>
													<td>8754554531</td>
													<td>
													 Albert Street	
													</td>
													<td>Palo Alto</td>
													<td>-</td>
													<td>India</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td class="checkBox"> 
														<label class="container-checkbox">
														  	<input type="checkbox">
														  	<span class="checkmark"></span>
														</label>
													</td>
													<td>
														<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo3.png"></a>
														<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Fringe </a>
													</td>
													<td>8754554531</td>
													<td>
														RVN Road	
													</td>
													<td> Umbrella</td>
													<td>CA</td>
													<td>USA</td>
						                            <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
						                            <td class="text-center">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#">Edit This Company</a>
								                                <a class="dropdown-item" href="#">Change Organization Image</a>
								                                <a class="dropdown-item" href="#">Delete This Organization</a>
								                                <a class="dropdown-item" href="#">Change Record Owner</a>
								                                <a class="dropdown-item" href="#">Generate Merge Document</a>
								                                <a class="dropdown-item" href="#">Print This Organization</a>
								                                <a class="dropdown-item" href="#">Add New Task For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Event For Organization</a>
								                                <a class="dropdown-item" href="#">Add Activity Set To Organization</a>
								                                <a class="dropdown-item" href="#">Add New Contact For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
								                                <a class="dropdown-item" href="#">Add New Project For Organization</a>
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
					<!-- /Content End -->
					
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
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>
                </form>
              </div>
           
            </div>
          </div>
        </div>

		<!-- Modal -->
			<div class="modal right fade" id="add_company" tabindex="-1" role="dialog" aria-modal="true">
				<div class="modal-dialog" role="document">
					<button type="button"class="btn-close md-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
					<div class="modal-content">

						<div class="modal-header">
		                    <h4 class="modal-title text-center">Add Company</h4>
		                    <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
		                  </div>

						<div class="modal-body">
							<div class="row">
						        <div class="col-md-12">
						            <form>
						            	<h4>Organization Name</h4>
						            	<div class="form-group row">
				                            <div class="col-md-12">
				                            	<label class="col-form-label">Organization Name <span class="text-danger">*</span></label>
                              					<input class="form-control" type="text" placeholder="Organization Name" name="organization" >
				                            </div>
				                        </div>
						                <div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Organization</label>
					                            <select class=" form-control form-select">
					                                <option>Select</option>
					                            </select>
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Title</label>
                            					<input type="text" class="form-control"  name="title" placeholder="Title">
											</div>
										</div>
										<h4>Organization Contact Details</h4>
										
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Phone</label>
                            					<input type="text" class="form-control" name="phone" placeholder="Phone">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Fax</label>
                            					<input type="text" class="form-control" name="fax" placeholder="Fax">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Website</label>
                            					<input type="text" class="form-control" name="website" placeholder="Website">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Linkedin</label>
                            					<input type="text" class="form-control"  name="linkedin" placeholder="Linkedin">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Facebook</label>
                            					<input type="text" class="form-control"  name="fb" placeholder="Facebook">
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Twitter</label>
                            					<input type="text" class="form-control"  name="twitter" placeholder="Twitter">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Email Domains</label>
                            					<input type="text" class="form-control"  name="domains" placeholder="Email Domains">
											</div>
											
										</div>
										<h4>Address Information</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Billing Address</label>
                            					<textarea class="form-control" rows="3" name="billing-address" placeholder="Billing Address"></textarea>
											</div>
											<div class="col-sm-6 mt-3">
												<label class="col-form-label"></label><br>
                            					<input type="text" class="form-control" placeholder="Billing City" name="billing-city">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Billing State" name="billing-state">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Billing Postal code" name="billing-postal-code">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Billing Country</label>
					                            <select class=" form-control form-select">
					                                <option>India</option>
					                                <option>US</option>
					                                <option>Japan</option>
					                            </select>
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Shipping Address</label>
                            					<textarea class="form-control" rows="3" name="shipping-address" placeholder="Shipping Address"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Shipping City" name="shipping-city">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control" placeholder="Shipping State" name="shipping-state">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control"  placeholder="Shipping Postal code" name="shipping-postal-code">
											</div>
											<div class="col-sm-6">
												<select class=" form-control form-select">
					                                <option>India</option>
					                                <option>US</option>
					                                <option>Japan</option>
					                            </select>
											</div>
										</div>
										<h4>Additional Information</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Dates To Remember <span class="text-danger">*</span></label>
				                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
											</div>
										</div>
										
										<h4>Description Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Description </label>
				                            	<textarea class="form-control" rows="3" id="description" placeholder="Description"></textarea>
											</div>
										</div>
										<h4>Tag Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Tag List</label>
                            					<input type="text" class="form-control" name="tag-name" placeholder="Tag List">
											</div>
										</div>
										<h4>Permissions</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Permission</label>
					                        	<select class=" form-control form-select">
					                                <option>Task Visibility</option>
					                                <option>Private Task</option>
					                         	</select>
											</div>
											
										</div>
						                <div class="text-center py-3">
						                	<button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
						                	<button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
						                </div>
						            </form>
						        </div>
							</div>

						</div>

					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!--system users Modal -->
            <div class="modal right fade" id="company-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button"class="btn-close md-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="btn-close xs-close" data-bs-dismiss="modal"></button>
                    <div class="row w-100">
                      <div class="col-md-7 account d-flex">
                      	<div class="company_img">
                      		<img src="assets/img/c-logo.png" alt="User" class="user-image" class="img-fluid" />
                  		</div>
                  		<div>
                  			<p class="mb-0">Company</p>
                  			<span class="modal-title">Clampett Oil and Gas Corp</span>
                    		<span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>
                    		<span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  		</div>

                      </div>
                      <div class="col-md-5 text-end">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Company</a>
                              		<a class="dropdown-item" href="#">Change Organization Image</a>
                              		<a class="dropdown-item" href="#">Delete This Organization</a>
                              		<a class="dropdown-item" href="#">Change Record Owner</a>
                              		<a class="dropdown-item" href="#">Generate Merge Document</a>
                              		<a class="dropdown-item" href="#">Print This Organization</a>
                              		<a class="dropdown-item" href="#">Add New Task For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Event For Organization</a>
                              		<a class="dropdown-item" href="#">Add Activity Set To Organization</a>
                              		<a class="dropdown-item" href="#">Add New Contact For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Project For Organization</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card due-dates">
                  	<div class="card-body">
	                    <div class="row">
	                      <div class="col">
	                        <span>Title</span>
	                        <p>Enquiry</p>
	                      </div>
	                      <div class="col">
	                        <span>Companies</span>
	                        <p>Acme Corp</p>
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
                  </div>

                  <div class="modal-body">
                    <div class="task-infos">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#task-details" data-bs-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-related" data-bs-toggle="tab">Related</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-activity" data-bs-toggle="tab">Activity</a></li>
							
							<li class="nav-item"><a class="nav-link" href="#task-news" data-bs-toggle="tab">News</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Organization Name</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
										    <table class="table">
				                                <tbody>
				                                  <tr>
				                                    <td class="border-0">Record ID</td>
				                                    <td class="border-0">124192692</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Organization Name</td>
				                                    <td>Clampett Oil and Gas Corp.</td>
				                                  </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Organization Contact Details</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Phone</td>
			                                    <td class="border-0">(626) 847-1294</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Fax</td>
			                                    <td>1234</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Website</td>
			                                    <td>google.com</td>
			                                  </tr>
			                                  <tr>
			                                    <td>LinkedIn</td>
			                                    <td>Lorem ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Facebook</td>
			                                    <td>lorem Ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Twitter</td>
			                                    <td>Not Started</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Email Domains</td>
			                                    <td>abc@gmail.com</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Address Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								        <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Billing Address</td>
			                                    <td class="border-0">1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Shipping Addres</td>
			                                    <td>United States</td>
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
			                                    <td>Dates to remember</td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Organization Created</td>
			                                    <td>03-Jun-20 1:14 AM</td>
			                                  </tr>
			                                   <tr>
			                                    <td>Date of Next Activity </td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Date of Last Activity </td>
			                                    <td>27/01/2006</td>
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
			                                    <td>Lorem ipsum </td>
			                                  </tr>
			                                </tbody>
			                             </table>
								    </div>
							    </div>
							  </div>
							 
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Tag Information</div> 
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
								<div class="row">
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
		                                  <span>2</span>
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
		                        <div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Company Name</th>
																	<th>Phone</th>
																	<th>Billing Country</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo2.png"></a>
																		<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Clampett Oil and Gas Corp.</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="avatar flex-shrink-0"><img alt="" src="assets/img/c-logo.png"></a>
																		<a href="#" data-bs-toggle="modal" data-bs-target="#company-details">Acme Corporation</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Deal Name</th>
																	<th>Company</th>
																	<th>User Responsible</th>
																	<th>Deal Value</th>
																	<th></th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Bensolet
																	</td>
																	<td>Globex</td>
																	<td>John Doe</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Ansanio tech
																	</td>
																	<td>Lecto</td>
																	<td>John Smith</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Project Name</th>
																	<th>Status</th>
																	<th>User Responsible</th>
																	<th>Date Created</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Completed</td>
																	<td>Williams</td>
																	<td>13-Jul-20 11:37 PM</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Title</th>
																	<th>phone</th>
																	<th>Email</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Call Enquiry</td>
																	<td>987675656</td>
																	<td>william@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		John Doe
																	</td>
																	<td>Enquiry</td>
																	<td>987675656</td>
																	<td>john@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Phone call</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Phone Enquiry</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
		                        </div>
							</div>
							<div class="tab-pane" id="task-activity">
								<div class="row">
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
		                                  <h4 class="font-weight-normal mb-3">Last Activity</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Upcoming Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Phone Enquiry</td>
																	<td>David</td>
																	<td>13-Jul-20 11:37 PM</td>
																	
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Past Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-end">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
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
		                        </div>
							</div>
							<div class="tab-pane" id="task-news">
								<div class="row">
									<div class="col-md-12">
										<h4>News Items</h4>
										<p>Current news items about this Organization are sourced from Google News</p>
									</div>
								</div>
							</div>
						</div>
                   
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
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