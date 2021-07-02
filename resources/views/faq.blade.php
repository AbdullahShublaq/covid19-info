@extends('layouts.app')

@section('content')
    <section class="main-section">

        <!-- FAQs -->
        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12 aos-init aos-animate" data-aos="fade-right">
                        <h2><span>FAQ </span></h2>
                        <p>Below are answers to commonly asked questions about COVID-19 vaccination.</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-lg-12">
                        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                            @foreach($faqs as $key => $faq)
                                <div class="panel panel-primary aos-init aos-animate" data-aos="fade-up" data-aos-duration="5000">
                                    <div class="panel-heading" role="tab" id="headingOne_{{$key}}">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_{{$key}}" aria-expanded="false" aria-controls="collapseOne_{{$key}}" class="collapsed">
                                                {{$faq->title}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne_{{$key}}" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne_{{$key}}" style="">
                                        <div class="panel-body">
                                            {{$faq->disc}}
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs -->

    </section>
@endsection