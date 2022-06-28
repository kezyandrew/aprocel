@extends('layouts.master')
@section('content')
<div class="page-nav no-margin row">
    <div class="container">
      <div class="row">
        <h2>Contact Us</h2>
        <ul>
          <li>
            <a href="#"><i class="fas fa-home"></i> Home</a>
          </li>
          <li><i class="fas fa-angle-double-right"></i> Contact US</li>
        </ul>
      </div>
    </div>
  </div>

  <!--  ************************* Contact Us Starts Here ************************** -->

  <div style="margin-top: 0px" class="row no-margin">
                                                                          

    <iframe  style="width: 100%"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.555850826793!2d30.186154212773072!3d-0.5432786436581966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x29f5f46faa014a4!2sBushenyi%20Ishaka%20Municipal%20Council%20Officee!5e0!3m2!1sen!2sug!4v1614693069922!5m2!1sen!2sug" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <div class="row contact-rooo no-margin">
    <div class="container">
      <div class="row">
        <div style="padding: 20px" class="col-sm-7">
          <h2>Contact Form</h2>
          <br />
          <div class="row cont-row">
            <div class="col-sm-3">
              <label>Enter Name </label><span>:</span>
            </div>
            <div class="col-sm-8">
              <input
                type="text"
                placeholder="Enter Name"
                name="name"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cont-row">
            <div class="col-sm-3">
              <label>Email Address </label><span>:</span>
            </div>
            <div class="col-sm-8">
              <input
                type="text"
                name="name"
                placeholder="Enter Email Address"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cont-row">
            <div class="col-sm-3">
              <label>Mobile Number</label><span>:</span>
            </div>
            <div class="col-sm-8">
              <input
                type="text"
                name="name"
                placeholder="Enter Mobile Number"
                class="form-control input-sm"
              />
            </div>
          </div>
          <div class="row cont-row">
            <div class="col-sm-3">
              <label>Enter Message</label><span>:</span>
            </div>
            <div class="col-sm-8">
              <textarea
                rows="5"
                placeholder="Enter Your Message"
                class="form-control input-sm"
              ></textarea>
            </div>
          </div>
          <div style="margin-top: 10px" class="row">
            <div style="padding-top: 10px" class="col-sm-3">
              <label></label>
            </div>
            <div class="col-sm-8">
              <button class="btn btn-primary btn-sm">Send Message</button>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div style="margin: 50px" class="serv">
            <h2 style="margin-top: 10px">Address</h2>

            APROCEL, <br />
            Bushenyi Town Council<br />
            Bushenyi District<br />
            Phone:+256-772463443<br />
            Email:bushdpc@yahoo.com<br />
            Website:www.aprocel.org<br />
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  <!--  ************************* Footer Starts Here ************************** -->
