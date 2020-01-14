@extends('techhub.layouts.main')
@section('content')
<div class="page-content-wrapper">
  <div class="row">
    <div class="col-md-10">
    </div>
    <div class="col-md-2">
      <a href="/meeting/create"><button class="btn btn-success">Add Meeting</button></a>
    </div>
  </div>
  <table class="table table-hover table-sm">
    <thead>
      <tr class="solid-header">
        <th class="pl-4">name</th>
        <th>host</th>
        <th>date</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($meetings as $meeting)
      <tr>
        <td class="pr-0 pl-4">
          {{ $meeting-> name }}
        </td>
        <td>
          <small>{{ $meeting-> host }}</small>
        </td>
        <td>{{ $meeting-> date }}</td>
        <td>{{ $meeting-> description }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
