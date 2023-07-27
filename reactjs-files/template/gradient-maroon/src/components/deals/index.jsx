import React, { Component } from "react";
import { Helmet } from "react-helmet";
import { Table } from 'antd';
import { Link } from "react-router-dom";
import 'antd/dist/antd.css';
import {itemRender,onShowSizeChange} from "../paginationfunction"
import "../antdstyle.css"
class Deals extends Component {

  constructor(props) {
    super(props);
    this.state = {
        show: null,
        isOpen: false,
      data: [
        {
         id: 1,
         dealname: "Bensolet",
         company: "Globex",
         forecast_close_date: "03-Jun-20 1:14 AM",
         userresponsible: "John Doe",
         dealvalue:"USD $‎180",
      },
    
      ],
    };
  }

  state = {
    selectedRowKeys: [],
  };
  selectRow = (record) => {
    const selectedRowKeys = [...this.state.selectedRowKeys];
    if (selectedRowKeys.indexOf(record.key) >= 0) {
      selectedRowKeys.splice(selectedRowKeys.indexOf(record.key), 1);
    } else {
      selectedRowKeys.push(record.key);
    }
    this.setState({ selectedRowKeys });
  }
  onSelectedRowKeysChange = (selectedRowKeys) => {
    this.setState({ selectedRowKeys });
  }

  handleShow = (value) => {
    this.setState({
      show: value,
    });
  };

  close=()=> {
    this.setState({ show: false });
  }
  
  render() {
    const { data } = this.state;

    const columns = [
     
      {
        title: "Deal Name",
        dataIndex: "dealname",
        render: (text, record) => (
          <><a href="#"><span className="person-circle-a person-circle">{text.charAt(0)}</span></a>
          <a href="#" data-toggle="modal" data-target="#project-details">{text} </a></>
          ),
        sorter: (a, b) => a.dealname.length - b.dealname.length,
      },
      {
        title: "Company",
        dataIndex: "company",
        render: (text, record) => (
          <><a href="#" data-toggle="modal" data-target="#company-details">{text}</a></>
          ),
        sorter: (a, b) => a.company.length - b.company.length,
      },
      {
        title: "Pipeline",
        dataIndex: "projectStatus",
        render: (text, record) => (
          <div className="pipeline-small flat ">
          <a className="won noselect tipped-top" data-toggle="tooltip" data-placement="top" data-original-title="stage: Prospecting">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
          <a className="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" data-original-title="stage: Qualification">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
          <a className="won noselect tipped-top" data-toggle="tooltip" data-placement="top" data-original-title="stage: Needs Analysis">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
          <a className="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" data-original-title="stage: Proposal">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
          <a className="won noselect tipped-top" data-toggle="tooltip" data-placement="top" data-original-title="stage: Negotiation">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
          <a className="won noselect tipped-top" data-toggle="tooltip" data-placement="top" data-original-title="stage: Closed Won">
            <span className="stretched-link" data-toggle="modal" data-target="#deal-details" />
          </a>
        </div>
          ),
        sorter: (a, b) => a.projectStatus.length - b.projectStatus.length,
      },
      {
        title: "Forecast Close Date",
        dataIndex: "forecast_close_date",
        render: (text, record) => (
          <>{text}</>
          ),
        sorter: (a, b) => a.forecast_close_date.length - b.forecast_close_date.length,
      },
      {
        title: "User Responsible",
        dataIndex: "userresponsible",
        render: (text, record) => (
          <>{text}</>
        ),
        sorter: (a, b) => a.userresponsible.length - b.userresponsible.length,
        
      },

      {
        title: "Deal Value",
        dataIndex: "dealvalue",
        render: (text, record) => (
          <>{text}</>
        ),
        sorter: (a, b) => a.dealvalue.length - b.dealvalue.length,
       
      },

      {
        title: "",
        dataIndex: "project",
        render: (text, record) => (
          <i className="fa fa-star" aria-hidden="true" />
          ),
      },

      {
        title: "Action",
        render: (text, record) => (
          <div className="dropdown dropdown-action">
          <a href="#" className="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i className="material-icons">more_vert</i></a>
          <div className="dropdown-menu dropdown-menu-right">
            <a className="dropdown-item" href="#">Edit This Deal</a>
            <a className="dropdown-item" href="#">Change Deal Image</a>
            <a className="dropdown-item" href="#">Clone This Deal</a>
            <a className="dropdown-item" href="#">Delete This Deal</a>
            <a className="dropdown-item" href="#">Change Record Owner</a>
            <a className="dropdown-item" href="#">Generate Merge Document</a>
            <a className="dropdown-item" href="#">Print This Deal</a>
            <a className="dropdown-item" href="#">Add New Task For Deal</a>
            <a className="dropdown-item" href="#">Add New Event For Deal</a>
            <a className="dropdown-item" href="#">Add Activity Set To Deal</a>
            <a className="dropdown-item" href="#">Convert To Deal</a>
          </div>
        </div>
          ),
        }
    ];

    const { selectedRowKeys } = this.state;
    const rowSelection = {
      selectedRowKeys,
      onChange: this.onSelectedRowKeysChange,
    };
    return (
      <div className="page-wrapper">
      <Helmet>
        <title>Deals - CRMS admin Template</title>
        <meta name="description" content="Reactify Blank Page" />
      </Helmet>
          <div className="content container-fluid">
            <div className="crms-title row bg-white">
              <div className="col">
                <h3 className="page-title m-0">
                  <span className="page-title-icon bg-gradient-primary text-white mr-2">
                    <i className="feather-radio" />
                  </span> Deals </h3>
              </div>
              <div className="col text-right">
                <ul className="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                  <li className="breadcrumb-item"><Link to="/">Dashboard</Link></li>
                  <li className="breadcrumb-item active">Deals</li>
                </ul>
              </div>
            </div>

                  <div className="page-header pt-3 mb-0 ">
						<div className="row">
							<div className="col">
                <div className="dropdown">
                  <a className="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> All Deals</a>
                  <div className="dropdown-menu">
                    <a className="dropdown-item" href="#">Recently Viewed</a>
                    <a className="dropdown-item" href="#">Items I'm following</a>
                    <a className="dropdown-item" href="#">All Deals</a>
                    <a className="dropdown-item" href="#">All Closed Deals</a>
                    <a className="dropdown-item" href="#">All Open Deals</a>
                    <a className="dropdown-item" href="#">My Deals</a>
                  </div>
                </div>
							</div>
							<div className="col text-right">
                <ul className="list-inline-item pl-0">
                  <li className="nav-item dropdown list-inline-item add-lists">
                    <a className="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                      <div className="nav-profile-text">
                        <i className="fa fa-th" aria-hidden="true" />
                      </div>
                    </a>
                    <div className="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                      <Link className="dropdown-item" to="/deals">List View</Link>
                      <Link className="dropdown-item" to="/deals-kanban-view">Kanban View</Link>
                      <a className="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
                    </div>
                  </li>
                  <li className="list-inline-item">
                    <button className="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_deal">New Deal</button>
                  </li>
                </ul>
              </div>
						</div>
					</div>
					

            <div className="row">
              <div className="col-md-12">
                <div className="card mb-0">
                  <div className="card-body">
                    <div className="table-responsive">
                     

                      <Table
                        rowSelection={rowSelection}
                        className="table"
                        style={{ overflowX: "auto" }}
                        columns={columns}
                        dataSource={data}
                        rowKey={(record) => record.id}
                      />
           

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="modal right fade" id="add_deal" tabIndex={-1} role="dialog" aria-modal="true">
        <div className="modal-dialog" role="document">
          <button type="button" className="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <div className="modal-content">
            <div className="modal-header">
              <h4 className="modal-title text-center">Add Deal</h4>
              <button type="button" className="close xs-close" data-dismiss="modal">×</button>
            </div>
            <div className="modal-body">
              <div className="row">
                <div className="col-md-12">
                  <form>
                    <h4>Task Details</h4>
                    <div className="form-group row">
                      <div className="col-md-6">
                        <label className="col-form-label">Deal Name <span className="text-danger">*</span></label>
                        <input className="form-control" type="text" name="deal-name" placeholder="Deal Name" />
                      </div>
                      <div className="col-md-6">
                        <label className="col-form-label">Company</label>
                        <select className="form-control">
                          <option>Select</option>
                        </select>
                      </div>
                    </div>
                    <h4>Additional Information</h4>
                    <div className="form-group row">
                      <div className="col-sm-6">
                        <label className="col-form-label">Caregory</label>
                        <select className="form-control">
                          <option>Email</option>
                          <option>Follow up</option>
                          <option>Get Started</option>
                          <option>Meeting</option>
                          <option>Phone call</option>
                        </select>
                      </div>
                      <div className="col-sm-6">
                        <label className="col-form-label">Probability Of Winning</label>
                        <input className="form-control" type="text" name="probability" placeholder="Probability Of Winning" />
                      </div>
                    </div>
                    <div className="form-group row">
                      <div className="col-sm-6">
                        <label className="col-form-label">Forecast Close Date <span className="text-danger">*</span></label>
                        <div className="cal-icon"><input className="form-control" type="text" placeholder="MM/DD/YY" /></div>
                      </div>
                      <div className="col-sm-6">
                        <label className="col-form-label">Actual Close Date <span className="text-danger">*</span></label>
                        <div className="cal-icon"><input className="form-control" type="text" placeholder="MM/DD/YY" /></div>
                      </div>
                    </div>
                    <div className="form-group row">
                      <div className="col-sm-6">
                        <label className="col-form-label">User Responsible</label>
                        <select className="form-control">
                          <option>John Doe</option>
                        </select>
                      </div>
                      <div className="col-sm-6">
                        <label className="col-form-label">Deal Value</label>
                        <div className="row">
                          <div className="col-md-4">
                            <select className="form-control">
                              <option>USD $</option>
                              <option>UGX $</option>
                            </select>
                          </div>
                          <div className="col-md-4">
                            <input type="text" name="amt" className="form-control" placeholder="Bid Amount" />
                          </div>
                          <div className="col-md-4">
                            <select className="form-control">
                              <option>Fixed Bid</option>
                              <option>Per Hour</option>
                              <option>Per Day</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4>Description Information</h4>
                    <div className="form-group row">
                      <div className="col-sm-12">
                        <label className="col-form-label">Description </label>
                        <textarea className="form-control" rows={3} id="description" placeholder="Description" defaultValue={""} />
                      </div>
                    </div>
                    <h4>Tag Information</h4>
                    <div className="form-group row">
                      <div className="col-sm-12">
                        <label className="col-form-label">Tag List</label>
                        <input type="text" className="form-control" name="tag-name" placeholder="Tag List" />
                      </div>
                    </div>
                    <h4>Pipeline &amp; Stages</h4>
                    <div className="form-group row">
                      <div className="col-sm-6">
                        <label className="col-form-label">Pipeline</label>
                        <select className="form-control">
                          <option>Deal Pipeline</option>
                        </select>
                      </div>
                      <div className="col-md-6">
                        <label className="col-form-label">Stage</label>
                        <select className="form-control">
                          <option>select</option>
                        </select>
                      </div>
                    </div>
                    <h4>Permissions</h4>
                    <div className="form-group row">
                      <div className="col-sm-6">
                        <label className="col-form-label">Visibility</label>
                        <select className="form-control">
                          <option>Everyone</option>
                          <option>Select a team</option>
                        </select>
                      </div>
                    </div>
                    <div className="text-center py-3">
                      <button type="button" className="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
                      <button type="button" className="btn btn-secondary btn-rounded">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>{/* modal-content */}
        </div>{/* modal-dialog */}
      </div>
      {/*modal section starts here*/}
      <div className="modal fade" id="add-new-list">
        <div className="modal-dialog">
          <div className="modal-content">
            {/* Modal Header */}
            <div className="modal-header">
              <h4 className="modal-title">Add New List View</h4>
              <button type="button" className="close" data-dismiss="modal">×</button>
            </div>
            {/* Modal body */}
            <div className="modal-body">
              <form className="forms-sample">
                <div className="form-group row">
                  <label htmlFor="view-name" className="col-sm-4 col-form-label">New View Name</label>
                  <div className="col-sm-8">
                    <input type="text" className="form-control" id="view-name" placeholder="New View Name" />
                  </div>
                </div>
                <div className="form-group row pt-4">
                  <label className="col-sm-4 col-form-label">Sharing Settings</label>
                  <div className="col-sm-8">
                    <div className="form-group">
                      <div className="form-check">
                        <label className="form-check-label">
                          <input type="radio" className="form-check-input" name="optionsRadios" id="optionsRadios1" defaultValue /> Just For Me <i className="input-helper" /></label>
                      </div><br />
                      <div className="form-check">
                        <label className="form-check-label">
                          <input type="radio" className="form-check-input" name="optionsRadios" id="optionsRadios2" defaultValue="option2" defaultChecked /> Share Filter with Everyone <i className="input-helper" /></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="text-center">
                  <button type="submit" className="btn btn-gradient-primary mr-2">Submit</button>
                  <button className="btn btn-light">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
        </div>
    );
  }
}

export default Deals;
