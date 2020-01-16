@extends('techhub.layouts.main')
@section('content')

<div class="page-content-wrapper">
  <div class="page-content-wrapper-inner">
    <div class="content-viewport">
      <div class="row">
        <div class="col-12 py-1">
          <p class="text-gray">Welcome aboard, Allen Clerk</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 equel-grid">
          <div class="grid">
            <div class="grid-body py-3">
              <div class="split-header">
                      <p class="card-title">Resources</p>
                      <div class="content-wrapper v-centered">
                        <span class="btn action-btn btn-refresh btn-xs component-flat">
                          <a href="/material/create">
                          <i class="mdi mdi-plus mdi-2x"></i>
                        </a>
                        </span>
                      </div>
                    </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-sm">
                <thead>
                  <tr class="solid-header">
                    <th>Name</th>
                    <th>Url</th>
                    <th>Description</th>
                    <th>Shared By</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($materials as $material)
                  <tr>
                    <td>
                      {{$material -> name }}
                    <td>
                      {{$material -> url }}
                    </td>
                    <td>{{$material -> writeup }}
                    </td>
                    <td>{{$material -> name }}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4 equel-grid">
          <div class="grid">
            <div class="grid-body">
              <div class="split-header">
                <p class="card-title">Meetings Log</p>
                <div class="btn-group">
                  <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                  </button>
                  <!--
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Expand View</a>
                    <a class="dropdown-item" href="#">Edit</a>
                  </div>
                -->
                </div>
              </div>
              <div class="vertical-timeline-wrapper">
                <div class="timeline-vertical dashboard-timeline">
                  @foreach($meetings as $meeting)
                  <div class="activity-log">
                    <p class="log-name">{{ $meeting->name }}</p>
                    <div class="log-details"> {{ $meeting->host }} <div class="wrapper mt-2">
                        <form action="/usermeeting" method="post">
                            @csrf
                            <input type="text" id="meetingid" name="meetingid" value="{{ $meeting->id}}" hidden>
                            <button type="submit" class="btn btn-xs btn-primary">Register</button>
                        </form>
                      </div>
                    </div>

                    <small class="log-time">{{ $currentdate->diffForHumans($meeting->date)}}</small>
                  </div>

                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content viewport ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="row">
      <div class="col-sm-6 text-center text-sm-right order-sm-1">
        <ul class="text-gray">
          <li><a href="#">Terms of use</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
        <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co" target="_blank">UXCANDY</a>. All rights reserved</small>
        <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
      </div>
    </div>
  </footer>
  <!-- partial -->
</div>
@endsection
