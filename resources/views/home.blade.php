@extends('layouts.app')

@section('content')

    @push('style')
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    @endpush
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}
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
                    <div class="card-body">
                        <form action="/send_message" method="post">
                            @csrf
                            <textarea name="message"></textarea>
                            <button type="submit" class="btn btn-primary btn-round">Send Message</button>
                        </form>

                        <script>
                            CKEDITOR.replace('message');
                            CKEDITOR.config.language = 'en';
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
