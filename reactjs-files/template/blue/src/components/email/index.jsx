import React, { Component } from "react";
import { Helmet } from "react-helmet";
import { Link } from "react-router-dom";

class Email extends Component {    
  render() {
    return (
       <div className="page-wrapper">
        <Helmet>
          <title>Inbox - CRMS Admin Template</title>
          <meta name="description" content="Inbox"/>					
        </Helmet>
       {/* Page Content */}
       <div className="content container-fluid">
         <div className="crms-title row bg-white">
           <div className="col  p-0">
             <h3 className="page-title m-0">
               <span className="page-title-icon bg-gradient-primary text-white mr-2">
                 <i className="fa fa-envelope menu-icon" aria-hidden="true" />
               </span> Email </h3>
           </div>
           <div className="col p-0 text-right">
             <ul className="breadcrumb bg-white float-right m-0 pl-0 pr-0">
               <li className="breadcrumb-item"><Link to="/">Dashboard</Link></li>
               <li className="breadcrumb-item active">Email</li>
             </ul>
           </div>
         </div>
         {/* Page Header */}
         <div className="page-header py-3 mb-0">
           <div className="row align-items-center">
             <div className="col">
               <h3 className="page-title">Inbox</h3>
             </div>
             <div className="col-auto float-right ml-auto">
               <a href="#" data-toggle="modal" data-target="#compose-mail" className="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"><i className="fa fa-plus" /> Compose</a>
             </div>
           </div>
         </div>
         {/* /Page Header */}
         <div className="row">
           <div className="col-md-12">
             <div className="card mb-0">
               <div className="card-body">
                 <div className="email-header">
                   <div className="row mobile-view">
                     <div className="top-action-left">
                       <div className="float-left">
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i className="fa fa-angle-down " /></button>
                           <div className="dropdown-menu">
                             <a className="dropdown-item" href="#">All</a>
                             <a className="dropdown-item" href="#">None</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Read</a>
                             <a className="dropdown-item" href="#">Unread</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i className="fa fa-angle-down " /></button>
                           <div className="dropdown-menu">
                             <a className="dropdown-item" href="#">Reply</a>
                             <a className="dropdown-item" href="#">Forward</a>
                             <a className="dropdown-item" href="#">Archive</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Mark As Read</a>
                             <a className="dropdown-item" href="#">Mark As Unread</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Delete</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown"><i className="fa fa-folder" /> <i className="fa fa-angle-down" /></button>
                           <div role="menu" className="dropdown-menu">
                             <a className="dropdown-item" href="#">Social</a>
                             <a className="dropdown-item" href="#">Forums</a>
                             <a className="dropdown-item" href="#">Updates</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Spam</a>
                             <a className="dropdown-item" href="#">Trash</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">New</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" data-toggle="dropdown" className="btn btn-white dropdown-toggle"><i className="fa fa-tags" /> <i className="fa fa-angle-down" /></button>
                           <div role="menu" className="dropdown-menu">
                             <a className="dropdown-item" href="#">Work</a>
                             <a className="dropdown-item" href="#">Family</a>
                             <a className="dropdown-item" href="#">Social</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Primary</a>
                             <a className="dropdown-item" href="#">Promotions</a>
                             <a className="dropdown-item" href="#">Forums</a>
                           </div>
                         </div>
                         <button type="button" title="Refresh" data-toggle="tooltip" className="btn btn-white d-md-inline-block mb-3"><i className="fa fa-refresh" /></button>
                       </div>
                       <div className="float-left d-none  d-sm-block">
                         <input type="text" placeholder="Search Messages" className="form-control search-message" />
                       </div>
                     </div>
                     <div className="row top-action-right">
                       <div className="col">
                         <input type="text" placeholder="Search Messages" className="form-control search-message" />
                       </div>
                       <div className="col">
                         <div className="btn-group">
                           <a className="btn btn-white"><i className="fa fa-angle-left" /></a>
                           <a className="btn btn-white"><i className="fa fa-angle-right" /></a>
                         </div>
                         <p className="text-muted d-md-inline-block">Showing 10 of 112 </p>
                       </div>
                     </div>
                   </div>
                   <div className="row web-view">
                     <div className="col top-action-left">
                       <div className="float-left">
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i className="fa fa-angle-down " /></button>
                           <div className="dropdown-menu">
                             <a className="dropdown-item" href="#">All</a>
                             <a className="dropdown-item" href="#">None</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Read</a>
                             <a className="dropdown-item" href="#">Unread</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i className="fa fa-angle-down " /></button>
                           <div className="dropdown-menu">
                             <a className="dropdown-item" href="#">Reply</a>
                             <a className="dropdown-item" href="#">Forward</a>
                             <a className="dropdown-item" href="#">Archive</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Mark As Read</a>
                             <a className="dropdown-item" href="#">Mark As Unread</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Delete</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" className="btn btn-white dropdown-toggle" data-toggle="dropdown"><i className="fa fa-folder" /> <i className="fa fa-angle-down" /></button>
                           <div role="menu" className="dropdown-menu">
                             <a className="dropdown-item" href="#">Social</a>
                             <a className="dropdown-item" href="#">Forums</a>
                             <a className="dropdown-item" href="#">Updates</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Spam</a>
                             <a className="dropdown-item" href="#">Trash</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">New</a>
                           </div>
                         </div>
                         <div className="btn-group dropdown-action">
                           <button type="button" data-toggle="dropdown" className="btn btn-white dropdown-toggle"><i className="fa fa-tags" /> <i className="fa fa-angle-down" /></button>
                           <div role="menu" className="dropdown-menu">
                             <a className="dropdown-item" href="#">Work</a>
                             <a className="dropdown-item" href="#">Family</a>
                             <a className="dropdown-item" href="#">Social</a>
                             <div className="dropdown-divider" /> 
                             <a className="dropdown-item" href="#">Primary</a>
                             <a className="dropdown-item" href="#">Promotions</a>
                             <a className="dropdown-item" href="#">Forums</a>
                           </div>
                         </div>
                       </div>
                       <div className="float-left d-none d-sm-block">
                         <input type="text" placeholder="Search Messages" className="form-control search-message" />
                       </div>
                     </div>
                     <div className="col-auto top-action-right">
                       <div className="text-right">
                         <button type="button" title="Refresh" data-toggle="tooltip" className="btn btn-white d-none d-md-inline-block"><i className="fa fa-refresh" /></button>
                         <div className="btn-group">
                           <a className="btn btn-white"><i className="fa fa-angle-left" /></a>
                           <a className="btn btn-white"><i className="fa fa-angle-right" /></a>
                         </div>
                       </div>
                       <div className="text-right pt-2">
                         <span className="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div className="email-content pt-3">
                   <div className="table-responsive">
                     <table className="table table-inbox table-hover">
                       <thead>
                         <tr>
                         </tr>
                       </thead>
                       <tbody>
                         <tr className="unread clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star starred" /></span></td>
                           <td className="name">John Doe</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td><i className="fa fa-paperclip" /></td>
                           <td className="mail-date">13:14</td>
                         </tr>
                         <tr className="unread clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">Envato Account</td>
                           <td className="subject">Important account security update from Envato</td>
                           <td />
                           <td className="mail-date">8:42</td>
                         </tr>
                         <tr className="clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">Twitter</td>
                           <td className="subject">HRMS Bootstrap Admin Template</td>
                           <td />
                           <td className="mail-date">30 Nov</td>
                         </tr>
                         <tr className="unread clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">Richard Parker</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td />
                           <td className="mail-date">18 Sep</td>
                         </tr>
                         <tr className="clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">John Smith</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td />
                           <td className="mail-date">21 Aug</td>
                         </tr>
                         <tr className="clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">me, Robert Smith (3)</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td />
                           <td className="mail-date">1 Aug</td>
                         </tr>
                         <tr className="unread clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">Codecanyon</td>
                           <td className="subject">Welcome To Codecanyon</td>
                           <td />
                           <td className="mail-date">Jul 13</td>
                         </tr>
                         <tr className="clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">Richard Miles</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td><i className="fa fa-paperclip" /></td>
                           <td className="mail-date">May 14</td>
                         </tr>
                         <tr className="unread clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star-o" /></span></td>
                           <td className="name">John Smith</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td />
                           <td className="mail-date">11/11/16</td>
                         </tr>
                         <tr className="clickable-row" data-href="/blue/mail-view">
                           <td>
                             <label className="container-checkbox">
                               <input type="checkbox" />
                               <span className="checkmark" />
                             </label>
                           </td>
                           <td><span className="mail-important"><i className="fa fa-star starred" /></span></td>
                           <td className="name">Mike Litorus</td>
                           <td className="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                           <td />
                           <td className="mail-date">10/31/16</td>
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
       {/* /Page Content */}
       <div className="modal fade right" id="compose-mail">
        <div className="modal-dialog">
          <button type="button" className="close md-close" data-dismiss="modal">×</button>
          <div className="modal-content">
            {/* Modal Header */}
            <div className="modal-header">
              <h4 className="modal-title">Compose New Mail</h4>
              <button type="button" className="close xs-close" data-dismiss="modal">×</button>
            </div>
            {/* Modal body */}
            <div className="modal-body pb-0">
              <div className="row">
                <div className="col-sm-12">
                  <div className="card mb-0 border-0">
                    <div>
                      <form>
                        <div className="form-group">
                          <input type="email" placeholder="To" className="form-control" />
                        </div>
                        <div className="row">
                          <div className="col-md-6">
                            <div className="form-group">
                              <input type="email" placeholder="Cc" className="form-control" />
                            </div>
                          </div>
                          <div className="col-md-6">
                            <div className="form-group">
                              <input type="email" placeholder="Bcc" className="form-control" />
                            </div>
                          </div>
                        </div>
                        <div className="form-group">
                          <input type="text" placeholder="Subject" className="form-control" />
                        </div>
                        <div className="form-group">
                          <textarea rows={4} className="form-control" placeholder="Enter your message here" defaultValue={""} />
                        </div>
                        <div className="form-group mb-0">
                          <div className="text-center">
                            <button className="btn btn-primary"><span>Send</span> <i className="fa fa-send m-l-5" /></button>
                            <button className="btn btn-success m-l-5" type="button"><span>Draft</span> <i className="fa fa-floppy-o m-l-5" /></button>
                            <button className="btn btn-danger m-l-5" type="button"><span>Delete</span> <i className="fa fa-trash-o m-l-5" /></button>
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
     </div>
    );
  }
}

export default Email;
