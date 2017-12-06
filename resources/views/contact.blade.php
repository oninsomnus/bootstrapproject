@extends('layout')

@section('contenido')

  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <section class="probootstrap-section probootstrap-section-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1 class="mb0">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>



    <section class="probootstrap-section probootstrap-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row probootstrap-gutter0">
              <div class="col-md-4" id="probootstrap-sidebar">
                <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                  <h3>Pages</h3>
                  <ul class="probootstrap-side-menu">

                    <li>
                      <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                      <a href="{{route('courses')}}">Courses</a>
                    </li>
                    <li>
                      <a href="{{route('teachers')}}">Teachers</a>
                    </li>
                    <li>
                      <a href="{{route('events')}}">Events</a>
                    </li>
                    <li>
                      <a href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="active">
                      <a>Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <h2>Get In Touch</h2>
                <p>Contact us using the form below.</p>
                <form action="{{route('messages.store')}}" method="post" class="probootstrap-form">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                      {!! $errors->first('name', '<p style="color: red">:message</p>') !!}
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                      {!! $errors->first('email', '<p style="color: red">:message</p>') !!}
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                      {!! $errors->first('subject', '<p style="color: red">:message</p>') !!}
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                      {!! $errors->first('message', '<p style="color: red">:message</p>') !!}
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
            <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
          </div>
        </div>
      </div>
    </section>

  </div>

  @stop