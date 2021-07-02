@extends('layouts.app')

@section('content')

    <section class="main-section">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12 aos-init aos-animate" data-aos="fade-right">
                        <h2><span>Subscribe </span></h2>
                        <p>Get Our Newsletter</p>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="container">
                            {{--<div class="alert-icon">--}}
                                {{--<i class="zmdi zmdi-thumb-up"></i>--}}
                            {{--</div>--}}
                            <strong style="margin-right: 16px">{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="zmdi zmdi-close"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <div class="row">
                                <form action="/subscribe" method="post" class="row col-12">
                                    @csrf
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                                   style="border-color: grey">
                                        </div>
                                        @error('name')
                                        <span style="color: red; margin-left: 10px">{{ $errors->first('name') }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                   placeholder="Enter Email" style="border-color: grey">
                                        </div>
                                        @error('email')
                                        <span style="color: red; margin-left: 10px">{{ $errors->first('email') }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-round">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection