import React, { Component } from "react";
import { Helmet } from "react-helmet";
import { Link } from "react-router-dom";

class Error500 extends Component {
  render() {
    return (     
      <>
        <Helmet>
              <title>Error 500 - CRMS Admin Template</title>
              <meta name="description" content="Error"/>					
        </Helmet>
        <div className="error-box">
          <h1>500</h1>
          <h3><i className="fa fa-warning"></i> Oops! Something went wrong</h3>
          <p>The page you requested was not found.</p>
          <Link to="/" className="btn btn-custom btn-gradient-primary btn-rounded">Back to Home</Link>
        </div>		
      </>
    );
  }
}

export default Error500;
