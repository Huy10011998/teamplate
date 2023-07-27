import React, { Component } from "react";
import config from "config";

import { Route, BrowserRouter as Router, Switch } from "react-router-dom";
import Header from "./components/header/index";
//dashboard
import Dashboard from "./components/dashboard";
import ProjectDashboard from "./components/dashboard/projectdashboard";
 import LeadDashboard from "./components/dashboard/leaddashboard";
//pages
import FAQ from "./components/pages/faq";
import Privacypolicy from "./components/pages/privacy";
import Terms from "./components/pages/terms";
import BlankPage from "./components/pages/blank";
//error
import Error404 from "./components/error/error-404";
import Error500 from "./components/error/error-500";
//email
import Components from "./components/components";
//component
import Email from "./components/email";
import Mailview from "./components/email/mail-view";
import Lead from "./components/lead";
import Ledaskanbanview from "./components/lead/kanbanview";
import Task from "./components/task";
import BasicTable from "./components/table/basictable";
import DataTable from "./components/table/datatable";
import BasicInput from "./components/forms/basic-input";
import InputGroup from "./components/forms/form-input-group";
import HorizontalForm from "./components/forms/horizontal-form";
import VerticalForm from "./components/forms/vertical-form";
import FormMask from "./components/forms/form-mask";
import Project from "./components/project";
import Projectkanbanview from "./components/project/kanbanview";
//activities
import Reports from "./components/report";
import Activities from "./components/activites";
import Deals from "./components/deals";
import Dealskanbanview from "./components/deals/dealskanbanview";

import FormValidation from "./components/forms/form-validation";
import Profile from "./components/profile";
import Settings from "./components/settings";
import Contacts from "./components/contact";
import Company from "./components/company";
import Sidebarnav from "./components/sidebar";
import ComponentSidebar from "./components/sidebar/componentsidebar";
import EmailSidebar from "./components/sidebar/emailsidebar";

import 'antd/dist/antd.css';
import "./assets/css/bootstrap-rtl.min.css"
import "./assets/css/font-awesome.min.css"
import "./assets/css/feather.css";
import "./assets/css/line-awesome.min.css";
import "./assets/css/theme-settings.css";
import "./assets/css/style.css";
import "react-datepicker/dist/react-datepicker.css";
import "./assets/js/bootstrap.min.js";
import "./assets/js/jquery.slimscroll.min.js";
import "./assets/js/theme-settings.js";
import "./assets/js/app.js";
// import "./assets/js/sticky.js";

class AppUniversal extends Component {
  componentDidMount(){
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
  }
render() {
  const url = this.props.location.pathname.split("/")[1];
  const exclusionArray = ["login", "register", "forgot-password", "error-404", "error-500"];
  return (
    <Router basename={`${config.publicPath}`}>
      <div className="main-wrapper">
        <Route render={(props) => <Header {...props} />} />
          { url === "components" ? <Route render={(props) => <ComponentSidebar {...props} />} /> : 
          url === "email" || url === "mail-view" ? <Route render={(props) => <EmailSidebar {...props} />} /> :
            <Route render={(props) => <Sidebarnav {...props} />} />
          }        
        <Switch>
          {/* Dashboard */}
          <Route path="/" exact component={Dashboard} />
          <Route path="/projects-dashboard" exact component={ProjectDashboard} />
          <Route path="/leads-dashboard" exact component={LeadDashboard} /> 
          <Route path="/tasks" exact component={Task} />
          <Route path="/contacts" exact component={Contacts} />
          <Route path="/companies" exact component={Company} />
          <Route path="/leads" exact component={Lead} />
          <Route path="/leads-kanban-view" exact component={Ledaskanbanview} />          
          <Route path="/deals" exact component={Deals} />
          <Route path="/deals-kanban-view" exact component={Dealskanbanview} />
          <Route path="/projects" exact component={Project} />
          <Route path="/projects-kanban-view" exact component={Projectkanbanview} />
          <Route path="/reports" exact component={Reports} />
          <Route path="/activities" exact component={Activities} />
          <Route path="/email" exact component={Email} />
          <Route path="/mail-view" exact component={Mailview} />
          {/* Error Pages */}
          <Route path="/error-404" exact component={Error404} />
          <Route path="/error-500" exact component={Error500} />
          {/* Pages */}
          <Route path="/faq" exact component={FAQ} />
          <Route path="/terms" exact component={Terms} />
          <Route path="/privacy-policy" exact component={Privacypolicy} />
          <Route path="/blank-page" exact component={BlankPage} />  
          {/* UI Interface */}        
          <Route path="/components" exact component={Components} />
          {/* Forms */}        
          <Route path="/form-basic-inputs" exact component={BasicInput} />
          <Route path="/form-input-groups" exact component={InputGroup} />
          <Route path="/form-horizontal" exact component={HorizontalForm} />
          <Route path="/form-vertical" exact component={VerticalForm} />
          <Route path="/form-mask" exact component={FormMask} />
          <Route path="/form-validation" exact component={FormValidation} />
          {/* ForTablesms */}        
          <Route path="/tables-basic" exact component={BasicTable} />
          <Route path="/data-tables" exact component={DataTable} />

          <Route path="/profile" exact component={Profile} />
          <Route path="/settings" exact component={Settings} />
        </Switch>
      </div>
     
      {/*theme settings modal*/}
      <div className="modal right fade settings" id="settings" role="dialog" aria-modal="true">
          <div className="toggle-close">
            <div className="toggle" data-toggle="modal" data-target="#settings"><i className="fa fa-cog fa-w-16 fa-spin fa-2x" />
            </div>
          </div>
          <div className="modal-dialog" role="document">
            <div className="modal-content">
              <div className="modal-header p-3">
                <button type="button" className="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 className="modal-title" id="myModalLabel2">Settings</h4>
              </div>
              <div className="modal-body pb-3">
                <div className="scroll">
                  <div>
                    <ul className="list-group">
                      <li className="list-group-item border-0">
                        <div className="row">
                          <div className="col">
                            <h5 className="pb-2">Primary Skin</h5>
                          </div>
                          <div className="col text-right">
                            <a className="reset text-white bg-dark" id="ChangeprimaryDefault">Reset Default</a>
                          </div>
                        </div>
                        <div className="theme-settings-swatches">
                          <div className="themes">
                            <div className="themes-body">
                              <ul id="theme-change" className="theme-colors border-0 list-inline-item list-unstyled mb-0">
                                <li className="theme-title">Solid Color</li>
                                <li className="list-inline-item"><span className="theme-solid-black bg-black" /></li>
                                <li className="list-inline-item"><span className="theme-solid-pink bg-primary" /></li>
                                <li className="list-inline-item"><span className="theme-solid-orange bg-secondary1" /></li> 
                                <li className="list-inline-item"><span className="theme-solid-purple bg-success" /></li>
                                {/* <li class="list-inline-item"><span class="theme-solid-blue bg-info"></span></li> */}
                                <li className="list-inline-item"><span className="theme-solid-green bg-warnings" /></li>
                                <li><br /></li>
                                <li><hr /></li>
                                <li className="theme-title">Gradient Color</li>
                                <li className="list-inline-item"><span className="theme-orange bg-sunny-morning" /></li>
                                <li className="list-inline-item"><span className="theme-blue bg-tempting-azure" /></li> 
                                <li className="list-inline-item"><span className="theme-grey bg-amy-crisp" /></li>
                                <li className="list-inline-item"><span className="theme-lgrey bg-mean-fruit" /></li>
                                <li className="list-inline-item"><span className="theme-dblue bg-malibu-beach" /></li> 
                                <li className="list-inline-item"><span className="theme-pink bg-ripe-malin" /></li> 
                                <li className="list-inline-item"><span className="theme-purple bg-plum-plate" /></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <ul className="list-group">
                      <li className="list-group-item border-0">
                        <div className="row">
                          <div className="col">
                            <h5 className="pb-2">Header Style</h5>
                          </div>
                          <div className="col text-right">
                            <a className="reset text-white bg-dark" id="ChageheaderDefault">Reset Default</a>
                          </div>
                        </div>
                        <div className="theme-settings-swatches">
                          <div className="themes">
                            <div className="themes-body">
                              <ul id="theme-change1" className="theme-colors border-0 list-inline-item list-unstyled mb-0">
                                <li className="theme-title">Solid Color</li>
                                <li className="list-inline-item"><span className="header-solid-black bg-black" /></li>
                                <li className="list-inline-item"><span className="header-solid-pink bg-primary" /></li>
                                <li className="list-inline-item"><span className="header-solid-orange bg-secondary1" /></li> 
                                <li className="list-inline-item"><span className="header-solid-purple bg-success" /></li>
                                {/* <li class="list-inline-item"><span class="header-solid-blue bg-info"></span></li> */}
                                <li className="list-inline-item"><span className="header-solid-green bg-warnings" /></li>
                                <li><br /></li>
                                <li><hr /></li>
                                <li className="theme-title">Gradient Color</li>
                                <li className="list-inline-item"><span className="header-gradient-color1 bg-sunny-morning" /></li>
                                <li className="list-inline-item"><span className="header-gradient-color2 bg-tempting-azure" /></li> 
                                <li className="list-inline-item"><span className="header-gradient-color3 bg-amy-crisp" /></li>
                                <li className="list-inline-item"><span className="header-gradient-color4 bg-mean-fruit" /></li>
                                <li className="list-inline-item"><span className="header-gradient-color5 bg-malibu-beach" /></li> 
                                <li className="list-inline-item"><span className="header-gradient-color6 bg-ripe-malin" /></li> 
                                <li className="list-inline-item"><span className="header-gradient-color7 bg-plum-plate" /></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div>
                    <ul className="list-group m-0">
                      <li className="list-group-item border-0">
                        <div className="row">
                          <div className="col">
                            <h5 className="pb-2">Apps Sidebar Style</h5>
                          </div>
                          <div className="col  text-right">
                            <a className="reset text-white bg-dark" id="ChagesidebarDefault">Reset Default</a>
                          </div>
                        </div>
                        <div className="theme-settings-swatches">
                          <div className="themes">
                            <div className="themes-body">
                              <ul id="theme-change2" className="theme-colors border-0 list-inline-item list-unstyled">
                                <li className="theme-title">Solid Color</li>
                                <li className="list-inline-item"><span className="sidebar-solid-black bg-black" /></li>
                                <li className="list-inline-item"><span className="sidebar-solid-pink bg-primary" /></li>
                                <li className="list-inline-item"><span className="sidebar-solid-orange bg-secondary1" /></li> 
                                <li className="list-inline-item"><span className="sidebar-solid-purple bg-success" /></li>
                                {/* <li class="list-inline-item"><span class="sidebar-solid-blue bg-info"></span></li> */}
                                <li className="list-inline-item"><span className="sidebar-solid-green bg-warnings" /></li>
                                <li><br /></li>
                                <li><hr /></li>
                                <li className="theme-title">Gradient Color</li>
                                <li className="list-inline-item"><span className="sidebar-gradient-color1 bg-sunny-morning" /></li>
                                <li className="list-inline-item"><span className="sidebar-gradient-color2 bg-tempting-azure" /></li> 
                                <li className="list-inline-item"><span className="sidebar-gradient-color3 bg-amy-crisp" /></li>
                                <li className="list-inline-item"><span className="sidebar-gradient-color4 bg-mean-fruit" /></li>
                                <li className="list-inline-item"><span className="sidebar-gradient-color5 bg-malibu-beach" /></li> 
                                <li className="list-inline-item"><span className="sidebar-gradient-color6 bg-ripe-malin" /></li> 
                                <li className="list-inline-item"><span className="sidebar-gradient-color7 bg-plum-plate" /></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div className="row Default-font">
                      <div className="col">
                        <h5 className="pb-2">Font Style</h5>
                      </div>
                      <div className="col text-right">
                        <a className="reset text-white bg-dark font-Default">Reset Default</a>
                      </div>
                    </div>
                    <ul className="list-inline-item list-unstyled font-family border-0 p-0">
                      <li className="list-inline-item roboto-font">Roboto</li>
                      <li className="list-inline-item poppins-font">Poppins</li>
                      <li className="list-inline-item montserrat-font">Montserrat</li>
                      <li className="list-inline-item inter-font">Inter</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {/*theme settings*/}        
        {exclusionArray.indexOf(url) >= 0 ? "" : <div className="sidebar-contact">
          <div className="toggle" data-toggle="modal" data-target="#settings"><i className="fa fa-cog fa-w-16 fa-spin fa-2x" /></div>
        </div> }
    </Router>
  );
};
}
export default AppUniversal;
