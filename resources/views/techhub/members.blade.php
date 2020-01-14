@extends('techhub.layouts.main')
@section('content')
<div class="page-content-wrapper">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="solid-header">
        <th class="pl-4">name</th>
        <th>Email</th>
        <th>Github</th>
        <th>Course</th>
      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
      <tr>
        <td class="pr-0 pl-4">
          {{ $member-> firstname .' '.$member->lastname }}
        </td>
        <td>
          {{ $member->email}}
        </td>
        <td>{{ $member->github }}</td>
        <td>{{ $member-> course }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
