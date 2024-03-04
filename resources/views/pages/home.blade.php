
  @extends('layout.layout1')
  @section('page-content1')

  @include('components.main-header', ['videoSrc' => asset('Assets/video/header2.mp4'), 'header' =>'Discover the Beauty' , 'content' => '"Explore a world of elegance and charm as we guide you through the
  journey of unforgettable moments. Welcome to a place where dreams come
  to life."' , 'headerbtn' => 'Expore more','login_btn' => 'Login'])



  @include('components.about-section')
  @include('components.service-section')
  @include('components.testimonial-section')
  @include('components.contact-section')
  @include('components.footer-section')
  @endsection




