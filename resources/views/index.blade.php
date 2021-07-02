@extends('layouts.app')

@section('content')

    <!-- start hero -->
    <section id="hero">
        <div class="slider"
             style="background-image:url('http://www.ukpandi.com/-/preview/visualization-of-the-covid-19-virus.jpeg?width=1920&contain=False')">
            <div class="container">
                <div class="slider_text">
                    <h3 class="title" style="color: white!important; text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);">
                        <span>Welcome to</span> <br>
                        Covid 19 Info</h3>
                    <p class="sub-title" style="color: white!important; text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);">
                        This site provides information about the COVID 19 virus.
                    </p><br>
                    {{--<button class="btn btn-primary btn-round">View More</button>--}}
                </div>
                {{--<div class="slider_form row">--}}
                {{--<p class="col-12">Make an Appointment</p>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                {{--<div class="form-group">--}}
                {{--<input type="text" value="" placeholder="Enter Name" class="form-control m-b-15">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6 col-6">--}}
                {{--<div class="form-group">--}}
                {{--<input type="text" value="" placeholder="Enter Mobile" class="form-control m-b-15">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6 col-6">--}}
                {{--<div class="form-group">--}}
                {{--<input type="text" value="" placeholder="Enter Date" class="form-control m-b-15">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6 col-6">--}}
                {{--<select class="form-control m-b-15">--}}
                {{--<option selected="selected">Select Doctor</option>--}}
                {{--<option>Marc Parcival</option>--}}
                {{--<option>Alen Bailey</option>--}}
                {{--<option>Basil Andrew</option>--}}
                {{--<option>Giles Franklin</option>--}}
                {{--<option>Edgar Denzil</option>--}}
                {{--<option>Garfield Feris</option>--}}
                {{--</select>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6 col-6">--}}
                {{--<select class="form-control">--}}
                {{--<option selected="selected">Select Department</option>--}}
                {{--<option>Cardiology</option>--}}
                {{--<option>Pulmonology</option>--}}
                {{--<option>Gynecology</option>--}}
                {{--<option>Neurology</option>--}}
                {{--<option>Urology</option>--}}
                {{--<option>Gastrology</option>--}}
                {{--<option>Pediatrician</option>--}}
                {{--<option>Laboratory</option>--}}
                {{--</select>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-6">--}}
                {{--<button class="btn btn-primary btn-round btn-block m-t-0 m-b-0">Submit</button>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">

        <!-- Home Fun Fact -->
        <div class="fun-fact" style="background-color: #00cfd1!important">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-globe"></i>
                            <span class="counter timer" data-from="0" data-to="{{ $TotalConfirmed }}" data-speed="2500"
                                  data-fresh-interval="700">{{ number_format($TotalConfirmed) }}</span>
                            <p>Total Confirmed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-accounts-add"></i>
                            <span class="counter timer" data-from="0" data-to="{{ $NewConfirmed }}" data-speed="2500"
                                  data-fresh-interval="700">{{ number_format($NewConfirmed) }}</span>
                            <p>New Confirmed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-refresh"></i>
                            <span class="counter timer" data-from="0" data-to="{{ $TotalRecovered }}" data-speed="2500"
                                  data-fresh-interval="700">{{ number_format($TotalRecovered) }}</span>
                            <p>Total Recovered</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-mood-bad"></i>
                            <span class="counter timer" data-from="0" data-to="{{ $TotalRecovered }}" data-speed="2500"
                                  data-fresh-interval="700">{{ number_format($TotalDeaths) }}</span>
                            <p>Total Deaths</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Fun Fact -->

        <!-- Home About Us Section -->
        <div class="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>About </span>COVID 19</h2>
                        <p>COVID-19 affects different people in different ways. Most infected people will develop mild
                            to moderate illness and recover without hospitalization.</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-4">
                        <div class="box-img box-shadow" data-aos="fade-up">
                            <img src="https://exchange.uncc.edu/wp-content/uploads/sites/14/2020/06/COVID-19-700-by-450-1-scaled.jpg"
                                 alt="">
                            {{--<span class="section-line" data-aos="fade-up"></span>--}}
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-8">
                        <div class="common-cnt" data-aos="fade-up">
                            <div class="section-top">
                                <p><strong>Overview</strong></p>
                            </div>
                            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered
                                coronavirus.</p>
                            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory
                                illness and recover without requiring special treatment. Older people, and those with
                                underlying medical problems like cardiovascular disease, diabetes, chronic respiratory
                                disease, and cancer are more likely to develop serious illness.</p>
                            <p>The best way to prevent and slow down transmission is to be well informed about the
                                COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others
                                from infection by washing your hands or using an alcohol based rub frequently and not
                                touching your face. </p>
                            <p>
                                The COVID-19 virus spreads primarily through droplets of saliva or discharge from the
                                nose when an infected person coughs or sneezes, so it’s important that you also practice
                                respiratory etiquette (for example, by coughing into a flexed elbow).
                            </p>
                            <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" target="_blank"
                               class="btn btn-primary btn-simple btn-round margin-0" data-aos="flip-up"
                               style="background-color: white!important; font-size: 12px">
                                View More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About Us Section -->

        <!-- Home About Us Section -->
        <div class="our-best-service xl-slategray section-65-100">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>General </span>Information</h2>
                        {{--<p>Description text here...</p>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-cardio-monitoring.png')}}"
                                                           alt="Cardio Monitoring"></div>
                            <div class="service-cnt">
                                <div class="service-name">Most common symptoms</div>
                                <div class="service-dep">
                                    <ul>
                                        <li>fever</li>
                                        <li>dry cough</li>
                                        <li>tiredness</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-cardiology.png')}}"
                                                           alt="Cardiology">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Less common symptoms</div>
                                <div class="service-dep">
                                    <ul>
                                        <li>aches and pains</li>
                                        <li>sore throat</li>
                                        <li>diarrhoea</li>
                                        <li>conjunctivitis</li>
                                        <li>headache</li>
                                        <li>loss of taste or smell</li>
                                        <li>a rash on skin, or discolouration of fingers or toes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-pulmonary.png')}}"
                                                           alt="Pulmonary"></div>
                            <div class="service-cnt">
                                <div class="service-name">Serious symptoms</div>
                                <div class="service-dep">
                                    <ul>
                                        <li>difficulty breathing or shortness of breath</li>
                                        <li>chest pain or pressure</li>
                                        <li>loss of speech or movement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-traumatology.png')}}"
                                                           alt="Traumatology">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Prevention</div>
                                <div class="service-dep">
                                    <ul>
                                        <li>Wash your hands regularly with soap and water, or clean them with
                                            alcohol-based hand rub.
                                        </li>
                                        <li>Maintain at least 1 metre distance between you and people coughing or
                                            sneezing.
                                        </li>
                                        <li>Avoid touching your face.</li>
                                        <li>Cover your mouth and nose when coughing or sneezing.</li>
                                        <li>Stay home if you feel unwell.</li>
                                        <li>Refrain from smoking and other activities that weaken the lungs.</li>
                                        <li>Practice physical distancing by avoiding unnecessary travel and staying away
                                            from large groups of people.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-prostheses.png')}}"
                                                           alt="Prostheses">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Instructions</div>
                                <div class="service-dep">
                                    <ul>
                                        <li>Seek immediate medical attention if you have serious symptoms. Always call
                                            before visiting
                                            your doctor or health facility.
                                        </li>
                                        <li>People with mild symptoms who are otherwise healthy should manage their
                                            symptoms at home.
                                        </li>
                                        <li>On average it takes 5–6 days from when someone is infected with the virus
                                            for symptoms to
                                            show, however it can take up to 14 days.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="{{asset('assets/images/icon-orthodontics.png')}}"
                                                           alt="Orthodontics">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Vaccines</div>
                                <div class="service-dep">
                                    <ul>
                                        @foreach($vaccines as $vaccine)
                                            <li>{{$vaccine}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About Us Section -->

        <!-- Home Why choose us -->
        <div class="why-choose-us" style="margin-top: 10px">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>Story </span>of COVID 19</h2>
                    </div>
                </div>
                <div class="row justify-content-between">
                    {{--<div class="col-lg-6 col-md-12">--}}
                    {{--<div class="common-cnt">--}}
                    {{--<div class="section-top" data-aos="fade-down">--}}
                    {{--<p>Our goal is to make sure<br>--}}
                    {{--with advances in <br>--}}
                    {{--technology</p>--}}
                    {{--</div>--}}
                    {{--<p data-aos="fade-down" data-aos-duration="3000">Professional dental clinic 32roDent offers--}}
                    {{--the whole range of dentistry services:--}}
                    {{--treatment of caries, gum diseases, tooth whitening, implantation, dentures (crowns--}}
                    {{--installation), surgery, correction (braces) etc.</p>--}}
                    {{--<p>--}}
                    {{--<a class="btn btn-primary btn-round" data-aos="flip-up">More about practice</a>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-12">
                        <div class="box-img" data-aos="fade-up" data-aos-duration="3000">
                            <iframe style="width: 100%; height: 520px" src="https://www.youtube.com/embed/w5HvxsOo00E"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Why choose us -->

    </section>
@endsection

