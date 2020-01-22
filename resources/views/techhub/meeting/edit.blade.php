@extends('techhub.layouts.main')
@section('content')
<div class="page-content-wrapper">
  <form action="/meeting" method="POST">
    @csrf
    <input type="text" name="usertype" id="usertype" value="2" hidden>
    <div class="form-group row showcase_row_area">
      <div class="col-md-3 showcase_text_area">
        <label for="inputType1">Name</label>
      </div>
      <div class="col-md-9 showcase_content_area">
        <input type="text" class="form-control" id="name" name="name" value="{{$meeting->name}}">
      </div>
    </div>
    <div class="form-group row showcase_row_area">
      <div class="col-md-3 showcase_text_area">
        <label for="inputType1">Host</label>
      </div>
      <div class="col-md-9 showcase_content_area">
        <input type="text" class="form-control" id="host" name="host" value="{{$meeting->date}}">
      </div>
    </div>
    <div class="form-group row showcase_row_area">
      <div class="col-md-3 showcase_text_area">
        <label for="inputType1">Date</label>
      </div>
      <div class="col-md-9 showcase_content_area">
        <div class="form-inline">
          <div class="form-group">
            <select name="dd" class="form-control">
              <option value="">Date {{date('d', strtotime($meeting->date))}}</option>
              <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7">7 </option><option value="8">8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
            </div>
            <div class="form-group">
              <select name="mm" class="form-control">
                <option value="">Month {{date('m', strtotime($meeting->date))}}</option>
                <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Year {{date('Y', strtotime($meeting->date))}}</option>
                  <option value="2020" >2020 </option><option value="2021" >2021 </option><option value="2022" >2022 </option><option value="2023" >2023 </option><option value="2024" >2024 </option><option value="2025" >2025 </option></select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row showcase_row_area">
            <div class="col-md-3 showcase_text_area">
              <label for="inputType1">Description</label>
            </div>
            <div class="col-md-9 showcase_content_area">
              <textarea class="form-control" id="description" name="description">{{$meeting->description}}</textarea>
            </div>
          </div>
          <div class="form-group row showcase_row_area">
            <div class="col-md-3 showcase_text_area">
            </div>
            <div class="col-md-7 showcase_content_area">
              <button class="btn btn-primary" type="submit">Update Meeting</button>
            </div>
          </form>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </form>
          <div class="form-group row showcase_row_area">
            <table class="table table-hover table-sm">
              <thead>
                <tr class="solid-header">
                  <th class="pl-4">Name</th>
                  <th>Email</th>
                  <th>University</th>
                  <th>Course</th>
                  <th>Check-In</th>
                </tr>
              </thead>
              <tbody>
                @foreach($meeting->attendees as $attendee)
                <tr>
                  <td class="pr-0 pl-4">
                    {{$attendee->firstname}} {{$attendee->lastname}}
                  </td>
                  <td>
                    <small>{{ $attendee-> email }}</small>
                  </td>
                  <td>{{ $attendee-> university }}</td>
                  <td>{{ $attendee-> course }}</td>
                  <td>Check-In</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="col-md-10 showcase_content_area">
            </div>
            <div class="col-md-2 showcase_content_area">
              <a href="/attendees/export/{{$meeting->id}}"><button class="btn btn-success">Download List</button></a>
            </div>
        </div>
@endsection
