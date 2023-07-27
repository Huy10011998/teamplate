import React, { Component } from "react";
import { Helmet } from "react-helmet";
import Select from 'react-select';
import { Link } from "react-router-dom";

class Settings extends Component {
    constructor(props) {
		super(props);
		this.state = {	
			country_list:[
                {label : "USA",value : 1},
                {label : "France",value : 2},
                {label : "India",value : 3},
                {label : "Spain",value : 4},
            ],
			state_list:[
                {label : "California",value : 1},
                {label : "Texas",value : 2},
                {label : "Tamilnadu",value : 3},
                {label : "Florida",value : 4},
            ],
		}
	}

  render() {
    const { country_list,state_list } = this.state
    return (
        <div className="page-wrapper">
            <Helmet>
                <title>Settings - CRMS admin Template</title>
                <meta name="description" content="Reactify Blank Page" />
            </Helmet>
            <div className="content container-fluid">

                <div className="crms-title row bg-white">
                    <div className="col  p-0">
                        <h3 className="page-title m-0">
                        <span className="page-title-icon bg-gradient-primary text-white mr-2">
                          <i className="fa fa-cog" aria-hidden="true"></i>
                        </span> Settings </h3>
                    </div>
                    <div className="col p-0 text-right">
                        <ul className="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li className="breadcrumb-item"><Link to="/">Dashboard</Link></li>
                            <li className="breadcrumb-item active">Settings</li>
                        </ul>
                    </div>
                </div>
                
                
                <div className="row pt-4">
                    <div className="col-md-12">
                        <div className="card mb-0">
                            <div className="card-body">
                                <form>
                                <div className="row">
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Company Name <span className="text-danger">*</span></label>
                                            <input className="form-control" type="text" defaultValue="Dreamguy's Technologies" />
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Contact Person</label>
                                            <input className="form-control " defaultValue="Daniel Porter" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-sm-12">
                                        <div className="form-group">
                                            <label>Address</label>
                                            <input className="form-control " defaultValue="3864 Quiet Valley Lane, Sherman Oaks, CA, 91403" type="text" />
                                        </div>
                                    </div>
                                    <div className="col-sm-6 col-md-6 col-lg-3">
                                        <div className="form-group">
                                            <label>Country</label>
                                            <Select
                                                placeholder = "Select Country"
                                                options={country_list}
                                            />
                                        </div>
                                    </div>
                                    <div className="col-sm-6 col-md-6 col-lg-3">
                                        <div className="form-group">
                                            <label>City</label>
                                            <input className="form-control" defaultValue="Sherman Oaks" type="text" />
                                        </div>
                                    </div>
                                    <div className="col-sm-6 col-md-6 col-lg-3">
                                        <div className="form-group">
                                            <label>State/Province</label>
                                            <Select
                                                placeholder = "Select State"
                                                options={state_list}
                                            />
                                        </div>
                                    </div>
                                    <div className="col-sm-6 col-md-6 col-lg-3">
                                        <div className="form-group">
                                            <label>Postal Code</label>
                                            <input className="form-control" defaultValue="91403" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Email</label>
                                            <input className="form-control" defaultValue="danielporter@example.com" type="email" />
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Phone Number</label>
                                            <input className="form-control" defaultValue="818-978-7102" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Mobile Number</label>
                                            <input className="form-control" defaultValue="818-635-5579" type="text" />
                                        </div>
                                    </div>
                                    <div className="col-sm-6">
                                        <div className="form-group">
                                            <label>Fax</label>
                                            <input className="form-control" defaultValue="818-978-7102" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div className="row">
                                    <div className="col-sm-12">
                                        <div className="form-group">
                                            <label>Website Url</label>
                                            <input className="form-control" defaultValue="https://www.example.com" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div className="submit-section">
                                    <button className="btn btn-primary submit-btn">Save</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    );
  }
}

export default Settings;
