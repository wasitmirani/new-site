<section class="our-services our-services-v1 pt-150 pb-100" style="background-image: url(assets/img/services/dots-pattern-bg.png);">
    <div class="container">
        <div class="service-area-internal">
            <div class="section-particle-effect d-none d-lg-block">
                <img class="particle-1 animate-zoominout" src="{{asset('assets/img/particle/gradient-ball-shape.png')}}" alt="ball shape">
                <img class="particle-3 animate-rotate-me" src="{{asset('assets/img/particle/gradient-curve-shape.png')}}" alt="curve shape">
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title mb-105 text-center section-title-ocean-blue">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Most popular selling channels</span>
                        </div>
                        <h2>We Offer Channels  <br class="d-none d-md-block">
                            <span>Integrations</span>
                            Across
                        </h2>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.service-area-internal -->
    </div> <!-- /.container -->
    <div class="service-area-content">
        <div class="container-fluid">
            <div class="row">
                @if(!empty($channels))
                @foreach ($channels as $item)
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <div class="single-service-box single-service-box-v2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-thumbnail">
                            <img src="{{asset('assets/img/services/'.$item->thumbnail)}}" alt="{{$item->title}} channels {{config('app.name')}}">
                        </div>
                        <div class="service-box-content">
                            <h5 class="service-box-title">{{$item->title}} integration</h5>
                            <div class="service-box-btn">
                                <a href="{{route('integration',['slug'=>$item->slug])}}"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @if($loop->iteration  >5)
                @break
                @endif

                @endforeach
                @endif


            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.service-area-content -->
 </section>
