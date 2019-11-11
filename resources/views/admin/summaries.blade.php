@extends('admin.layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <!-- /.row -->
                    <div class="row">
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-right-tabContent">
                  <div class="tab-pane fade show active" id="vert-tabs-right-home" role="tabpanel" aria-labelledby="vert-tabs-right-home-tab">
                <div class="chart">
                  <canvas id="barChart"></canvas>
                  <script>
                          var ctx = document.getElementById('barChart');
                              var barChart = new Chart(ctx, {
                                  type: 'horizontalBar',
                                  data: {
                                      labels: ['Gender', 'Global Scholars', 'W2F', 'Alumni', 'Interns', 'College Counselling', 'Chapters'],
                                      datasets: [{
                                          label: '# enrolled',
                                    data: [23, 34, 54, 23, 32, 67, 34],
                                    backgroundColor: 'rgba(254, 99, 132, 0.2)'},{
                                    data: [-34, -43, -54, -12, -32, -76, -143],
                                    type: 'horizontalBar',
                                          backgroundColor: [
                                              /*'rgba(254, 99, 132, 0.2)',*/
                                              'rgba(54, 162, 235, 0.2)',
                                              'rgba(255, 206, 86, 0.2)',
                                              'rgba(75, 192, 192, 0.2)',
                                              'rgba(153, 102, 255, 0.2)',
                                              'rgba(255, 159, 64, 0.2)'
                                          ],
                                          borderColor: [
                                              'rgba(255, 99, 132, 1)',
                                              'rgba(54, 162, 235, 1)',
                                              'rgba(255, 206, 86, 1)',
                                              'rgba(75, 192, 192, 1)',
                                              'rgba(153, 102, 255, 1)',
                                              'rgba(255, 159, 64, 1)'
                                          ],
                                          borderWidth: 1, 
                                    barThickness: 10
                                      }]
                                  },
                                  options: {
                                  animation: {
                                          duration: 1000 // general animation time
                                      },
                                  title: {
                                          display: true,
                                          text: 'Custom Chart Title'
                                      },
                                      scales: {
                                          yAxes: [{
                                      stacked: true ,
                                              ticks: {
                                                  beginAtZero: true
                                              }
                                          }]
                                      }
                                  }
                              });
                </script>
                </div>
                  </div>
                </div>
              </div>
              <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs nav-tabs-right h-100" id="vert-tabs-right-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-right-home-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-home" aria-selected="true">All</a>
                  <a class="nav-link" id="vert-tabs-right-profile-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-profile" aria-selected="false">Year</a>
                  <a class="nav-link" id="vert-tabs-right-messages-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-messages" aria-selected="false">Gender</a>
                  <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">Joining criteria</a>
                  <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">Category</a>
                  <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">University location</a>
                  <a class="nav-link" id="vert-tabs-right-settings-tab" data-toggle="pill" href="#vert-tabs-right-home" role="tab" aria-controls="vert-tabs-right-settings" aria-selected="false">Status</a>
                  </div>
              </div>
            </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection