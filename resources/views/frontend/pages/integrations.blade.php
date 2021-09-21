
@extends('layouts.frontend.master')

@push('styles')
<style>


element.style {
    visibility: visible;
    animation-duration: 1500ms;
    animation-delay: 0ms;
    animation-name: fadeInUp;
}
.single-feature-box.single-feature-box-v3:hover {
    border-color: #473bf0 !important;
    background-color: #473bf0 !important;
    -webkit-box-shadow: 0px 10px 30px 0px rgb(71 59 240 / 36%);
    box-shadow: 0px 10px 30px 0px rgb(71 59 240 / 36%);
}
.single-feature-box.single-feature-box-v3:after {
    background: #473bf0;

}


</style>
@endpush
@section('content')
@component('frontend.components.breadcrumb',['title'=>"Integrations Channels"])

@endcomponent
<section class="our-services border-top-blue pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-70">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">Popular Integrations</span>
                    </div>
                    <h2>Integrations Now Amazingly Easier With   <br class="d-none d-md-block"> Our Innovative Solutions</h2>
                </div>
            </div> <!-- /.col-lg-8 -->
        </div> <!-- /.row -->
        <div class="our-services-content-wrapper">
            <div class="row">
                @foreach ($channels as $item)
                <div class="col-xl-4  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=> $item->icon,'name'=> $item->title,'color'=>6,'url'=>route('integration',['slug'=> $item->slug])])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                @endforeach


            </div> <!-- /.row -->

        </div> <!-- /.our-services-content-wrapper -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->

@endsection
