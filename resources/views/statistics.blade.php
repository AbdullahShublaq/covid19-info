@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    <div class="body">
                        <!-- Nav tabs -->
                        <div class="section-title col-12 aos-init aos-animate" data-aos="fade-up">
                            <h2><span>Statistics </span></h2>
                            <p>A summary of new and total cases per country updated daily.</p>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content m-t-10">
                            <div class="tab-pane table-responsive active" id="All">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>New Confirmed</th>
                                        <th>Total Confirmed</th>
                                        <th>New Deaths</th>
                                        <th>Total Deaths</th>
                                        <th>New Recovered</th>
                                        <th>Total Recovered</th>
                                        <th>Date</th>
                                        <th>Chart</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($result as $rs)
                                            <tr>
                                                <td>{{$rs['Country']}}</td>
                                                <td>{{$rs['NewConfirmed']}}</td>
                                                <td>{{$rs['TotalConfirmed']}}</td>
                                                <td>{{$rs['NewDeaths']}}</td>
                                                <td>{{$rs['TotalDeaths']}}</td>
                                                <td>{{$rs['NewRecovered']}}</td>
                                                <td>{{$rs['TotalRecovered']}}</td>
                                                <td>{{$rs['Date']}}</td>
                                                <td><a href="/chart?country={{$rs['Country']}}">Chart</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Country</th>
                                        <th>New Confirmed</th>
                                        <th>Total Confirmed</th>
                                        <th>New Deaths</th>
                                        <th>Total Deaths</th>
                                        <th>New Recovered</th>
                                        <th>Total Recovered</th>
                                        <th>Date</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection