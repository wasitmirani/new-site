
@extends('layouts.frontend.master')

@section('content')
@component('frontend.components.breadcrumb',['title'=>"Contact Us"])

@endcomponent
<!--====== Start Contact Area ======-->
    @component('frontend.components.contactUs',['source'=>'franchise'])
    @endcomponent
<!--====== End Contact Area ======-->
<!--====== Start Map Area ======-->

<div class="map-area wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="map-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9498.22602704672!2d-2.250401!3d53.4763857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3b768e452e8b2bb!2seDropShip!5e0!3m2!1sen!2s!4v1628969777996!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div> <!-- /.map-box -->
</div> <!-- /.map-area -->
<!--====== End Map Area ======-->

@endsection
