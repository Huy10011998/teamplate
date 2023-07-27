import React, { Component } from "react";
import { Helmet } from "react-helmet";
import { Link } from "react-router-dom";
import {ReportsImg} from "../imagepath";

class Reports extends Component {
  constructor(props) {
    super(props);
    this.state = {
      show: null,
    };
  }

  handleShow = (value) => {
    this.setState({
      show: value,
    });
  };

  close = () => {
    this.setState({ show: false });
  };
  render() {
    return (
        <div className="page-wrapper">
          <Helmet>
            <title>Reports - CRMS admin Template</title>
            <meta name="description" content="Reactify Blank Page" />
          </Helmet>
          <div className="content container-fluid">
            <div className="crms-title row bg-white">
              <div className="col  p-0">
                <h3 className="page-title m-0">
                  <span className="page-title-icon bg-gradient-primary text-white mr-2">
                    <i className="feather-bar-chart-2"></i>
                  </span>
                  Reports
                </h3>
              </div>
              <div className="col p-0 text-right">
                <ul className="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                  <li className="breadcrumb-item">
                    <Link to="/">Dashboard</Link>
                  </li>
                  <li className="breadcrumb-item active">Reports</li>
                </ul>
              </div>
            </div>

            <div className="page-header pt-3 mb-0 ">
              <div className="row">
                <div className="col">
                  <h4 className="advanced-report">Advanced Reporting</h4>
                </div>
                <div className="col text-right">
                  <ul className="list-inline-item pl-0">
                    <li className="list-inline-item">
                      <button
                        className="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"
                        id="add-task"
                        data-toggle="modal"
                        data-target="#add_report"
                        onClick={() => this.handleShow("report")}
                      >
                        New Report
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div className="row m-0">
              <div className="col-md-12 p-0">
                <div className="card">
                  <div className="card-body">
                    <p className="m-0">
                      Welcome to Advanced Reporting! Need help? Check out our{" "}
                      <a href="#">articles</a> or watch the{" "}
                      <a href="#">video</a>.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div className="row all-reports m-0">
              <div className="col-md-4 p-0">
                <ul
                  className="nav nav-tabs card p-0 mb-0"
                  id="reports"
                  role="tablist"
                >
                  <li className="nav-item w-100">
                    <a
                      className="nav-link active"
                      data-toggle="tab"
                      href="#personal-reports"
                      role="tab"
                      aria-controls="personal-reports"
                    >
                      My Personal Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#shared-reports"
                      role="tab"
                      aria-controls="shared-reports"
                    >
                      Shared Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#all-reports"
                      role="tab"
                      aria-controls="all-reports"
                    >
                      All Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#task-reports"
                      role="tab"
                      aria-controls="task-reports"
                    >
                      Task Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#contact-reports"
                      role="tab"
                      aria-controls="contact-reports"
                    >
                      Contact Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#company-reports"
                      role="tab"
                      aria-controls="company-reports"
                    >
                      Company Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#lead-reports"
                      role="tab"
                      aria-controls="lead-reports"
                    >
                      Lead Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#deal-reports"
                      role="tab"
                      aria-controls="deal-reports"
                    >
                      Deal Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#project-reports"
                      role="tab"
                      aria-controls="project-reports"
                    >
                      Project Reports
                    </a>
                  </li>
                  <li className="nav-item w-100">
                    <a
                      className="nav-link"
                      data-toggle="tab"
                      href="#other-reports"
                      role="tab"
                      aria-controls="other-reports"
                    >
                      Other Reports
                    </a>
                  </li>
                </ul>
              </div>

              <div className="col-md-8 pr-0 Reports">
                <div className="tab-content pt-0">
                  <div
                    className="tab-pane active"
                    id="personal-reports"
                    role="tabpanel"
                  >
                    <div className="table-responsive">
                      <div className="card">
                        <div className="card-body">
                          <h4 className="pb-3">My Personal Reports</h4>
                          <table className="table table-striped custom-table">
                            <thead>
                              <tr>
                                <th>Report Name</th>
                                <th>Date Created</th>
                                <th>Created By</th>
                                <th>Scheduled</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Inventry</td>
                                <td>07, Aug 2020</td>
                                <td>John Doe</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <td>Project Management</td>
                                <td>02, April 2020</td>
                                <td>John Doe</td>
                                <td>-</td>
                              </tr>
                              <tr>
                                <td>Evaluation</td>
                                <td>02, june 2020</td>
                                <td>John Doe</td>
                                <td>-</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="shared-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Shared Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Shared Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="all-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">All Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">All Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="task-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Task Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Task Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div
                    className="tab-pane"
                    id="contact-reports"
                    role="tabpanel"
                  >
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Contact Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Contact Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div
                    className="tab-pane"
                    id="company-reports"
                    role="tabpanel"
                  >
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Company Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Company Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="lead-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Lead Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Lead Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="deal-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Deal Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Deal Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div
                    className="tab-pane"
                    id="project-reports"
                    role="tabpanel"
                  >
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Project Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Project Report</a>
                              </td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Evaluation</td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div className="tab-pane" id="other-reports" role="tabpanel">
                    <div className="table-responsive card">
                      <div className="card-body">
                        <h4 className="pb-3">Other Reports</h4>
                        <table className="table table-striped custom-table">
                          <thead>
                            <tr>
                              <th>Report Name</th>
                              <th>Date Created</th>
                              <th>Created By</th>
                              <th>Scheduled</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Event Report</a>
                              </td>
                              <td>02, june 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Inventry</td>
                              <td>07, Aug 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
                            </tr>
                            <tr>
                              <td>Project Management</td>
                              <td>02, April 2020</td>
                              <td>John Doe</td>
                              <td>-</td>
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
          <div className="modal right fade" id="add_report" tabIndex={-1} role="dialog" aria-modal="true">
        <div className="modal-dialog" role="document">
          <button type="button" className="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <div className="modal-content">
            <div className="modal-header">
              <button type="button" className="close xs-close" data-dismiss="modal">×</button>
              <h4 className="mb-0"><img src={ReportsImg} alt="Report" className="report-img" />&nbsp;&nbsp;Add New Report</h4>
            </div>
            <div className="modal-body">
              <div className="submit-section mt-0 text-left">
                <button type="button" className="border-0 btn btn-primary btn-gradient-primary btn-rounded">Create</button>&nbsp;&nbsp;
                <button type="button" className="btn btn-secondary btn-rounded cancel-button">Cancel</button>
              </div>
              <div className="row pt-2">
                <div className="col-md-12">
                  <form>
                    <div className="form-group">
                      <label className="col-form-label">Choose a Report Type</label>
                      <select className="form-control">
                        <option>Task Report</option>
                        <option>Contact Report</option>
                        <option>Company report</option>
                      </select>
                    </div>
                  </form>
                  <h4 className="pb-2">Report Preview</h4>
                  <div className="table-responsive">
                    <div className="card">
                      <table className="table table-striped custom-table">
                        <thead>
                          <tr>
                            <th>Report Name</th>
                            <th>Date Created</th>
                            <th>Created By</th>
                            <th>Company</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Inventry</td>
                            <td>07, Aug 2020</td>
                            <td>John Doe</td>
                            <td>Solemen</td>
                          </tr>
                          <tr>
                            <td>Project Management</td>
                            <td>02, April 2020</td>
                            <td>John Doe</td>
                            <td>Claimpett</td>
                          </tr>
                          <tr>
                            <td>Evaluation</td>
                            <td>02, june 2020</td>
                            <td>John Doe</td>
                            <td>umbrella</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>{/* modal-content */}
        </div>{/* modal-dialog */}
      </div>
        </div>
    );
  }
}

export default Reports;
