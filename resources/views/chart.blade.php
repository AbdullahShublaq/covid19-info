@extends('layouts.app')

@section('content')

    @push('style')
        <style>
            #line-chart {
                min-height: 400px;
            }
        </style>
    @endpush

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    <div class="body">

                        <div class="col-12 text-center">
                            <label class="label label-success">Statistics Chart of {{$country}}</label>
                            <div id="line-chart"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--date('Y-m-d h:i:s', strtotime($yourDate));--}}
    @push('script')
        <script>
            var data = [
                    @foreach($cases as $case)
                        {y: '{{date('Y-m-d', strtotime($case['Date']))}}', c: {{$case['Confirmed']}}, d: {{$case['Deaths']}}, r: {{$case['Recovered']}}, a: {{$case['Active']}}},
                    @endforeach
                ],
                config = {
                    data: data,
                    xkey: 'y',
                    ykeys: ['c', 'd', 'r', 'a'],
                    labels: ['Confirmed', 'Deaths', 'Recovered', 'Active'],
                    fillOpacity: 0.6,
                    hideHover: 'auto',
                    behaveLikeLine: true,
                    resize: true,
                    lineColors: ['blue', 'red', 'green', 'orange']
                };
            config.element = 'line-chart';
            Morris.Line(config);
            config.element = 'stacked';
            config.stacked = true;
        </script>
    @endpush
@endsection