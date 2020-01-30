@extends('techhub.layouts.main')
@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-md-10">
    </div>
    <div class="col-md-2">
      @if($user->usertype == 1)
      <a href="/meeting/create"><button class="btn btn-success">Add Meeting</button></a>
      @endif
    </div>
  </div>
  <table class="table table-hover table-sm">
    <thead>
      <tr class="solid-header">
        <th class="pl-4">Name</th>
        <th>Host</th>
        <th>Date</th>
        <th>Venue</th>
      </tr>
    </thead>
    <tbody>
      @foreach($meetings as $meeting)
      <tr>
        <td class="pr-0 pl-4">
          <a href="/meeting/{{$meeting->id}}/edit">
            {{ $meeting-> name }}
          </a>
        </td>
        <td>
          <small>{{ $meeting-> host }}</small>
        </td>
        <td>{{ $meeting-> date }}</td>
        <td>{{ $meeting-> venue }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
