import React, { Component } from "react";
import { Helmet } from "react-helmet";
import { Table } from "antd";
import { Link } from "react-router-dom";

class Task extends Component {

  constructor(props) {
    super(props);
    this.state = {
      data: [
        {
          id: 1,
         name:"Add your customers",
         user: "John Doe",
         duedate: "02, Jan 2020",
         owner: "	John Doe",
         status: "Not started",
         },
         {
          id: 2,
         name: "Invite your team",
         user: "James amen",
         duedate: "02, Jan 2020",
         owner: "	John Doe",
         status: "Not started",
         },
         {
          id: 3,
         name:"Save your emails",
         user: "Williams",
         duedate: "02, Jan 2020",
         owner: "John Smith",
         status: "Not started",
         },
         {
          id: 4,
         name:"Save your emails",
         user: "Williams",
         duedate: "02, Jan 2020",
         owner: "John Smith",
         status: "Not started",
         },
         {
          id: 5,
         name:"Personalize your account",
         user: "David cravo",
         duedate: "02, Jan 2020",
         owner: "John Smith",
         status: "Not started",
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

  render() {
    const { data } = this.state;

    const columns = [     
      {
        title: "Task Name",
        dataIndex: "name",
        render: (text, record) => (
          <><a href="#" className="text-decoration-none"
             data-toggle="modal" data-target="#task-details-modal">{text}</a></>
          ),
        sorter: (a, b) => a.name.length - b.name.length,
      },
      {
        title: "Percent Complete Indicator",
        dataIndex: "",
        render: (text, record) => (
          <div className="progress">
              <div className="progress-bar bg-gradient-success" role="progressbar"
               style={{width:"25%"}} aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          ),
        sorter: (a, b) => a.user.length - b.user.length,
      },
      {
        title: "Responsible User",
        dataIndex: "user",
        render: (text, record) => (
          <><a href="#" data-toggle="modal" data-target="#system-user">{text}</a></>
          ),
        sorter: (a, b) => a.user.length - b.user.length,
      },
      {
        title: "Due Date",
        dataIndex: "duedate",
        render: (text, record) => (
          <>{text}</>
          ),
        sorter: (a, b) => a.duedate.length - b.duedate.length,
      },
      {
        title: "Task Owner",
        dataIndex: "owner",
        render: (text, record) => (
          <>{text}</>
          ),
        sorter: (a, b) => a.owner.length - b.owner.length,
      },
      {
        title: "Status",
        dataIndex: "status",
        render: (text, record) => (
          <label className="badge badge-gradient-success">{text}</label>
          ),
        sorter: (a, b) => a.status.length - b.status.length,
      },
      {
        title: "",
        dataIndex: "star",
        render: (text, record) => (
          <label className="container-checkbox">
            <input type="checkbox" />
            <span className="checkmark" />
          </label>
        ),
        sorter: (a, b) => a.star.length - b.star.length,
      },
      {
        title: "",
        dataIndex: "star",
        render: (text, record) => (
          <i className="fa fa-star" aria-hidden="true" />
        ),
        sorter: (a, b) => a.star.length - b.star.length,
      },

      {
        title: "Actions",
        dataIndex: "status",
        render: (text, record) => (
          <div className="dropdown dropdown-action">
            <a href="#" className="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i className="material-icons">more_vert</i></a>
            <div className="dropdown-menu dropdown-menu-right">
              <a className="dropdown-item" href="#">Edit this task</a>
              <a className="dropdown-item" href="#">Complete This Task</a>
              <a className="dropdown-item" href="#">Complete Task &amp; Clone</a>
              <a className="dropdown-item" href="#">Change Record Owner</a>
              <a className="dropdown-item" href="#">Delete This Tasks</a>
              <a className="dropdown-item" href="#">Clone This Tasks</a>
              <a className="dropdown-item" href="#">Print This Tasks</a>
            </div>
          </div>
        ),
      
      },
    ];

    const { selectedRowKeys } = this.state;
    const rowSelection = {
      selectedRowKeys,
      onChange: this.onSelectedRowKeysChange,
    };
    return (
      <div className="page-wrapper">
        <Helmet>
          <title>Tasks - CRMS admin Template</title>
          <meta name="description" content="Reactify Blank Page" />
        </Helmet>
          <div className="content container-fluid">
            <div className="crms-title row bg-white">
              <div className="col  p-0">
                <h3 className="page-title m-0">
                  <span className="page-title-icon bg-gradient-primary text-white mr-2">
                    <i className="feather-check-square"></i>
                  </span>{" "}
                  Tasks{" "}
                </h3>
              </div>
              <div className="col p-0 text-right">
                <ul className="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                  <li className="breadcrumb-item">
                    <Link to="/">Dashboard</Link>
                  </li>
                  <li className="breadcrumb-item active">Task</li>
                </ul>
              </div>
            </div>
            <div className="page-header pt-3 mb-0 ">
              <div className="row">
                <div className="col">
                  <div className="dropdown">
                    <a
                      className="dropdown-toggle recently-viewed"
                      href="#"
                      role="button"
                      data-toggle="dropdown"
                      aria-expanded="false"
                    >
                      {" "}
                      All Tasks{" "}
                    </a>
                    <div className="dropdown-menu">
                      <a className="dropdown-item" href="#">
                        Items I'm following
                      </a>
                      <a className="dropdown-item" href="#">
                        All Completed Tasks
                      </a>
                      <a className="dropdown-item" href="#">
                        My Delegated Tasks
                      </a>
                      <a className="dropdown-item" href="#">
                        My Completed Tasks
                      </a>
                      <a className="dropdown-item" href="#">
                        My Open Tasks
                      </a>
                      <a className="dropdown-item" href="#">
                        My Tasks
                      </a>
                      <a className="dropdown-item" href="#">
                        All Tasks
                      </a>
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
                        <a className="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
                      </div>
                    </li>
                    <li className="list-inline-item">
                      <button className="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_task">New Task</button>
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
                        // className="table"
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
        {/* Modal */}
        <div className="modal right fade" id="add_task" tabIndex={-1} role="dialog" aria-modal="true">
          <div className="modal-dialog" role="document">
            <button type="button" className="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <div className="modal-content">
              <div className="modal-header">
                <h4 className="modal-title text-center">Add Tasks</h4>
                <button type="button" className="close xs-close" data-dismiss="modal">×</button>
              </div>
              <div className="modal-body">
                <div className="row">
                  <div className="col-md-12">
                    <form>
                      <h4>Task Details</h4>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Task Name <span className="text-danger">*</span></label>
                          <input className="form-control" type="text" name="task-name" id="task-name" placeholder="Task Name" />
                        </div>
                        <div className="col-sm-6">
                          <label className="col-form-label">Assigned To</label>
                          <select className="form-control">
                            <option>Me</option>
                          </select>
                        </div>
                      </div>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Category</label>
                          <select className="form-control">
                            <option>Email</option>
                            <option>Follow up</option>
                            <option>Get Started</option>
                            <option>Meeting</option>
                            <option>Phone call</option>
                          </select>
                        </div>
                        <div className="col-sm-6">
                          <label className="col-form-label">Due Date <span className="text-danger">*</span></label>
                          <div className="cal-icon"><input className="form-control" type="text" placeholder="MM/DD/YY" /></div>
                        </div>
                      </div>
                      <h4>Additional Information</h4>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Start Date <span className="text-danger">*</span></label>
                          <div className="cal-icon"><input className="form-control" type="text" placeholder="MM/DD/YY" /></div>
                        </div>
                        <div className="col-sm-6">
                          <label className="col-form-label">Reminder Date <span className="text-danger">*</span></label>
                          <div className="cal-icon"><input className="form-control" type="text" placeholder="MM/DD/YY" /></div>
                        </div>
                      </div>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Progress</label>
                          <input className="form-control" type="text" name="progress" placeholder="Progress" />
                        </div>
                        <div className="col-sm-6">
                          <label className="col-form-label">Progress</label>
                          <input className="form-control" type="text" name="progress" placeholder="Progress" />
                        </div>
                      </div>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Priority</label>
                          <select className="form-control">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                          </select>
                        </div>
                        <div className="col-sm-6">
                          <label className="col-form-label">Priority</label>
                          <select className="form-control">
                            <option>Low</option>
                            <option>Medium</option>
                            <option>High</option>
                          </select>
                        </div>
                      </div>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Status</label>
                          <select className="form-control">
                            <option>Not Started</option>
                            <option>Inprogress</option>
                            <option>Deferred</option>
                            <option>Waiting</option>
                          </select>
                        </div>
                      </div>
                      <h4>Related To</h4>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Related To</label>
                          <select className="form-control">
                            <option>Select</option>
                            <option>Test</option>
                          </select>
                        </div>
                      </div>
                      <h4>Description Information</h4>
                      <div className="form-group row">
                        <div className="col-sm-12">
                          <label className="col-form-label">Description </label>
                          <textarea className="form-control" rows={3} id="description" placeholder="Description" defaultValue={""} />
                        </div>
                      </div>
                      <h4>Permissions</h4>
                      <div className="form-group row">
                        <div className="col-sm-6">
                          <label className="col-form-label">Permission</label>
                          <select className="form-control">
                            <option>Task Visibility</option>
                            <option>Private Task</option>
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
        </div>{/* modal */}
        </div>
      
    );
  }
}

export default Task;
