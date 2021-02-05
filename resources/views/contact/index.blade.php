{{--
      ressources/views/homepage/show.blade.php
--}}

@extends('templates.index')

@section('title')
  Contact Us
@endsection

@section('banner')
  Contact Us
@endsection

@section('content')

  <div class="section section-map">
    <div class="col-sm-12" style="padding:0;">
      <!-- Map -->
      <div id="contact-us-map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.8493629745117!2d5.6812914516655!3d50.611336579397395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f41cf16f5fcf%3A0xcb72bfa803234f92!2sRue%20Charles%20Deli%C3%A8ge%209%2C%204623%20Fl%C3%A9ron!5e0!3m2!1sfr!2sbe!4v1612354743718!5m2!1sfr!2sbe"></iframe>
        <br />
        <small>
          <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.8493629745117!2d5.6812914516655!3d50.611336579397395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f41cf16f5fcf%3A0xcb72bfa803234f92!2sRue%20Charles%20Deli%C3%A8ge%209%2C%204623%20Fl%C3%A9ron!5e0!3m2!1sfr!2sbe!4v1612354743718!5m2!1sfr!2sbe"></a>
        </small>
        </iframe>
      </div>
      <!-- End Map -->
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <h3>Get in Touch with Us</h3>
        </hr>
        <div class="col-sm-6">
          <!-- Contact Info -->
          <p class="contact-us-details">
          <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
          <b>Phone:</b> +44 123 654321<br/>
          <b>Fax:</b> +44 123 654321<br/>
          <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>  </p>
          <!-- End Contact Info -->
        </div>
        <div class="col-sm-6">
        </div>
        </div>
    </div>
  </div>

@endsection
