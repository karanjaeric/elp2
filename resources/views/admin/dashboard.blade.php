@extends('admin.layouts.master')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Scholars</span>
                <span class="info-box-number">
                  {{$analysisData['totalScholars']}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Female</span>
                <span class="info-box-number">  {{$analysisData['totalFemale']}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Male</span>
                <span class="info-box-number">  {{$analysisData['totalMale']}}</span>

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-globe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Global Scholars</span>
                <span class="info-box-number"> {{$analysisData['globalScholars']}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-globe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Local Scholars</span>
                <span class="info-box-number"> {{$analysisData['localScholars']}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">W2F alumni</span>
                <span class="info-box-number"> <span class="info-box-number">  {{$analysisData['wtf']}}</span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Top In District</span>
                <span class="info-box-number"> <span class="info-box-number">  {{$analysisData['topInDistrict']}}</span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Numbers at a glance</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Scholar enrollment</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                      <script>
                       $(function () {

                        'use strict'

                        /* ChartJS*/

                        // Get context with jQuery - using jQuery's .get() method.
                        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

                        var salesChartData = {
                          labels  : ['1998', '2003', '2008', '2013', '2018'],
                          datasets: [
                            {
                              backgroundColor     : 'rgba(210, 214, 222, 0.25)',
                              borderColor         : 'rgba(60,141,188,0.8)',
                              pointRadius          : false,
                              pointColor          : '#3b8bba',
                              pointStrokeColor    : 'rgba(60,141,188,1)',
                              pointHighlightFill  : '#fff',
                              pointHighlightStroke: 'rgba(60,141,188,1)',
                              data                : [2, 48, 150, 275, 478 ]
                            },
                            {
                              backgroundColor     : 'rgba(60,141,188,1)',
                              borderColor         : 'rgba(210, 214, 222, 1)',
                              pointRadius         : false,
                              pointColor          : 'rgba(210, 214, 222, 1)',
                              pointStrokeColor    : '#c1c7d1',
                              pointHighlightFill  : '#fff',
                              pointHighlightStroke: 'rgba(220,220,220,1)',
                              data                : [ 1, 20, 80, 137, 245 ]
                            },
                          ]
                        }

                        var salesChartOptions = {
                          maintainAspectRatio : false,
                          responsive : true,
                          legend: {
                            display: false
                          },
                          scales: {
                            xAxes: [{
                              gridLines : {
                                display : false,
                              }
                            }],
                            yAxes: [{
                              gridLines : {
                                display : false,
                              }
                            }]
                          }
                        }

                        // This will get the first returned node in the jQuery collection.
                        var salesChart = new Chart(salesChartCanvas, { 
                            type: 'line', 
                            data: salesChartData, 
                            options: salesChartOptions
                          }
                        )

                        //---------------------------
                        //- END MONTHLY SALES CHART -
                        //--------------------------
                      })
                      </script>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Milestones</strong>
                    </p>

                    <div class="progress-group">
                      Alumni
                      <span class="float-right"><b>160</b>/200</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Chapters
                      <span class="float-right"><b>310</b>/400</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: 75%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Internships</span>
                      <span class="float-right"><b>480</b>/800</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: 60%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      College counselling
                      <span class="float-right"><b>250</b>/500</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 50%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">456</h5>
                      <span class="description-text">Joined this year</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">167</h5>
                      <span class="description-text">College Counselling</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">57</h5>
                      <span class="description-text">Admissions</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">879</h5>
                      <span class="description-text">Joined Chapters</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
@endsection
    