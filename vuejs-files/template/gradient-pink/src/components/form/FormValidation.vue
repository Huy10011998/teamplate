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
                        </span> Form Validation</h3>
                    </div>
                    <div class="col p-0 text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li class="breadcrumb-item"><router-link to="/index">Dashboard</router-link></li>
                            <li class="breadcrumb-item active">Form Validation</li>
                        </ul>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">
                    
                        <!-- Custom Boostrap Validation -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Custom Bootstrap Form Validation</h5>
                                <p class="card-text pt-3">For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your form. For server side validation <a class="py-3" href="https://getbootstrap.com/docs/4.1/components/forms/#server-side" target="_blank">read full documentation</a>.</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">First Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="First Name" value="Mark" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Last Name</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last Name" value="Otto" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">City</label>
                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">State</label>
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Zip</label>
                                                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Custom Boostrap Validation -->
                        
                        <!-- Default Browser Validation -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Browser Defaults</h5>
                                <p class="card-text py-3">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below.</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault01">First Name</label>
                                                    <input type="text" class="form-control" id="validationDefault01" placeholder="First Name" value="Mark" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefault02">Last Name</label>
                                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last Name" value="Otto" required>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationDefaultUsername">Username</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault03">City</label>
                                                    <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationDefault04">State</label>
                                                    <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationDefault05">Zip</label>
                                                    <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                    <label class="form-check-label" for="invalidCheck2">
                                                        Agree to terms and conditions
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Default Browser Validation -->

                        <!-- Server Side Validation -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Server Side</h5>
                                <p class="card-text py-3">We recommend using client side validation, but in case you require server side, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">First Name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First Name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Last Name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last Name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServerUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                </div>
                                                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer03">City</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer04">State</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer05">Zip</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Server Side Validation -->
                        
                        <!-- Supported Elements -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Supported Elements</h5>
                                <p class="card-text">Form validation styles are also available for bootstrap custom form controls.</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm">
                                        <form class="was-validated">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                                <div class="invalid-feedback">Example invalid feedback text</div>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                                <div class="invalid-feedback">More example invalid feedback text</div>
                                            </div>
                                            <div class="form-group">
                                                <select class="custom-select" required>
                                                    <option value="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                                            </div>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Supported Elements -->
                        
                        <!-- Validation Tooltips -->
                        <div class="card mb-0">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Tooltips</h5>
                                <p class="card-text">You can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">First Name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First Name" value="Mark" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">Last Name</label>
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last Name" value="Otto" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltipUsername">Username</label>
                                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" required>
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip03">City</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">State</label>
                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip05">Zip</label>
                                            <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Validation Tooltips -->
                        
                    </div>
                </div>
                <!-- /Row -->
            
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

      window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);



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