import React, { Component } from "react";
import { Link, withRouter } from "react-router-dom";
import { avatar17 } from '../imagepath';

class SidebarNav extends Component {
     
  render() {
    const exclusionArray = ["login", "register", "forgot-password", "error-404", "error-500","email","mail-view","components"];
    if (
      exclusionArray.indexOf(this.props.location.pathname.split("/")[1]) >= 0
    ) {
      return "";
    }
   const {  location } = this.props
   let pathname = location.pathname
   return (
    <div className="sidebar" id="sidebar">
    <div className="sidebar-inner slimscroll">
      <form action="search.html" className="mobile-view">
        <input className="form-control" type="text" placeholder="Search here" />
        <button className="btn" type="button"><i className="fa fa-search" /></button>
      </form>
      <div id="sidebar-menu" className="sidebar-menu">
        <ul>
          <li className="nav-item nav-profile">
            <a className="nav-link">
              <div className="nav-profile-image">
                <img src={avatar17} alt="profile" />
              </div>
              <div className="nav-profile-text d-flex flex-column">
                <span className="font-weight-bold mb-2">David Grey. H</span>
                <span className="text-white text-small">Project Manager</span>
              </div>
              <i className="mdi mdi-bookmark-check text-success nav-profile-badge" />
            </a>
          </li>
          <li className="menu-title"> 
            <span>Main</span>
          </li>
          <li className="submenu">
            <a className={`${pathname === "/" || pathname === "/projects-dashboard" ||
             pathname === "/leads-dashboard" ? "active subdrop" : ""}`}><i className="feather-home" /> <span> Dashboard</span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li><Link to="/" className={`${pathname === "/" ? "active" : ""}`}>Deals Dashboard</Link></li>
              <li><Link to="/projects-dashboard" className={`${pathname === "/projects-dashboard" ? "active" : ""}`}>Projects Dashboard</Link></li>
              <li><Link to="/leads-dashboard" className={`${pathname === "/leads-dashboard" ? "active" : ""}`}>Leads Dashboard</Link></li>
            </ul>
          </li>
          <li> 
            <Link className={`${pathname.includes("tasks") ? "active" : ""}`} to="/tasks"><i className="feather-check-square" /> <span>Tasks</span></Link>
          </li>
          <li> 
            <Link className={`${pathname.includes("contacts") ? "active" : ""}`} to="/contacts"><i className="feather-smartphone" /> <span>Contacts</span></Link>
          </li>
          <li> 
            <Link className={`${pathname.includes("companies") ? "active" : ""}`} to="/companies"><i className="feather-database" /> <span>Companies</span></Link>
          </li>
          <li> 
            <Link className={`${pathname === "/leads" ? "active" : ""}`} to="/leads"><i className="feather-user" /> <span>Leads</span></Link>
          </li>
          <li> 
            <Link className={`${pathname.includes("deals") ? "active" : ""}`} to="/deals"><i className="feather-radio" /> <span>Deals</span></Link>
          </li>
          <li> 
            <Link className={`${pathname === "/projects" ? "active" : ""}`} to="/projects"><i className="feather-grid" /> <span>Projects</span></Link>
          </li>
          <li> 
            <Link className={`${pathname.includes("reports") ? "active" : ""}`} to="/reports"><i className="feather-bar-chart-2" /> <span>Reports</span></Link>
          </li>
          <li> 
            <Link className={`${pathname.includes("activities") ? "active" : ""}`} to="/activities"><i className="feather-calendar" /> <span>Activities</span></Link>
          </li>
          <li> 
            <a className={`${pathname.includes("email") ? "active" : ""}`} href="/pink/email"><i className="feather-mail" /> <span>Email</span></a>
          </li>
          <li className="menu-title"> 
            <span>Pages</span>
          </li>
          <li className="submenu">
            <a className={`${pathname.includes("error-404") || pathname.includes("error-500") ? "active subdrop" : ""}`}><i className="feather-alert-triangle" /> <span> Error Pages </span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li><Link className={`${pathname.includes("error-404") ? "active" : ""}`} to="/error-404">404 Error </Link></li>
              <li><Link className={`${pathname.includes("error-500") ? "active" : ""}`} to="/error-500">500 Error </Link></li>
            </ul>
          </li>
          <li className="submenu">
            <a className={`${pathname.includes("faq") || pathname.includes("terms")
             || pathname.includes("privacy-policy") || pathname.includes("blank-page") ? "active subdrop" : ""}`}><i className="feather-list" /> <span> Pages </span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li><Link className={`${pathname.includes("faq") ? "active" : ""}`} to="/faq"> FAQ </Link></li>
              <li><Link className={`${pathname.includes("terms") ? "active" : ""}`} to="/terms"> Terms </Link></li>
              <li><Link className={`${pathname.includes("privacy-policy") ? "active" : ""}`} to="/privacy-policy"> Privacy Policy </Link></li>
              <li><Link className={`${pathname.includes("blank-page") ? "active" : ""}`} to="/blank-page"> Blank Page </Link></li>
            </ul>
          </li>
          <li className="menu-title"> 
            <span>UI Interface</span>
          </li>
          <li> 
            <a className={`${pathname.includes("components") ? "active" : ""}`} href="/pink/components"><i className="feather-layout" /> <span>Components</span></a>
          </li>
          <li className="submenu">
            <a className={`${pathname.includes("form-basic-inputs") || pathname.includes("form-input-groups")
            || pathname.includes("form-horizontal") || pathname.includes("form-vertical")
            || pathname.includes("form-mask") || pathname.includes("form-validation") ? "active subdrop" : ""}`}><i className="feather-credit-card" /> <span> Forms </span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li><Link className={`${pathname.includes("form-basic-inputs") ? "active" : ""}`} to="/form-basic-inputs">Basic Inputs </Link></li>
              <li><Link className={`${pathname.includes("form-input-groups") ? "active" : ""}`} to="/form-input-groups">Input Groups </Link></li>
              <li><Link className={`${pathname.includes("form-horizontal") ? "active" : ""}`} to="/form-horizontal">Horizontal Form </Link></li>
              <li><Link className={`${pathname.includes("form-vertical") ? "active" : ""}`} to="/form-vertical"> Vertical Form </Link></li>
              <li><Link className={`${pathname.includes("form-mask") ? "active" : ""}`} to="/form-mask"> Form Mask </Link></li>
              <li><Link className={`${pathname.includes("form-validation") ? "active" : ""}`} to="/form-validation"> Form Validation </Link></li>
            </ul>
          </li>
          <li className="submenu">
            <a className={`${pathname.includes("tables-basic") || pathname.includes("data-tables") ? "active subdrop" : ""}`}><i className="feather-box" /> <span> Tables </span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li><Link className={`${pathname.includes("tables-basic") ? "active" : ""}`} to="/tables-basic">Basic Tables </Link></li>
              <li><Link className={`${pathname.includes("data-tables") ? "active" : ""}`} to="/data-tables">Data Table </Link></li>
            </ul>
          </li>
          <li className="menu-title"> 
            <span>Extras</span>
          </li>
          <li className="submenu">
            <a><i className="feather-command" /> <span>Multi Level</span> <span className="menu-arrow" /></a>
            <ul className="sub-menus">
              <li className="submenu">
                <a> <span>Level 1</span> <span className="menu-arrow" /></a>
                <ul className="sub-menus">
                  <li><a><span>Level 2</span></a></li>
                  <li className="submenu">
                    <a> <span> Level 2</span> <span className="menu-arrow" /></a>
                    <ul className="sub-menus">
                      <li><a>Level 3</a></li>
                      <li><a>Level 3</a></li>
                    </ul>
                  </li>
                  <li><a> <span>Level 2</span></a></li>
                </ul>
              </li>
              <li>
                <a> <span>Level 1</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  );
}
}

export default withRouter(SidebarNav);
