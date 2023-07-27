import React, { Component } from "react";
import { Link } from "react-router-dom";
import IMG01 from "../../assets/images/logo.png";

class Login extends Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <div className="main-wrapper">
        <div className="account-content">
          <div className="container">
            <div className="account-logo">
              <Link to="/">
                <img src={IMG01} alt="Dreamguy's Technologies" />
              </Link>
            </div>

            <div className="account-box">
              <div className="account-wrapper">
                <h3 className="account-title">Login</h3>
                <p className="account-subtitle">Access to our dashboard</p>

                <form action="index.html">
                  <div className="form-group">
                    <label>Email Address</label>
                    <input className="form-control" type="text" />
                  </div>
                  <div className="form-group">
                    <div className="row">
                      <div className="col">
                        <label>Password</label>
                      </div>
                      <div className="col-auto">
                        <Link className="text-muted" to="/forgot-password">
                          Forgot password?
                        </Link>
                      </div>
                    </div>
                    <input className="form-control" type="password" />
                  </div>
                  <div className="form-group text-center">
                    <button className="btn btn-primary account-btn" type="submit">
                      Login
                    </button>
                  </div>
                  <div className="account-footer">
                    <p>
                      Don't have an account yet?{" "}
                      <Link to="/register">Register</Link>
                    </p>
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

export default Login;