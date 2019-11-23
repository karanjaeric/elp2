@extends('admin.layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <!-- /.card-header -->
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Scholars Listing</h3>

                        <div class="card-tools">
                            <a class="btn btn-success" href="{{route('scholars.create')}}">Add Scholar<i
                                        class="fas fa-user-plus fa-fw"></i></a>

                        </div>
                    </div>
                </div>
                <table class="table table-hover table-responsive table-striped table-bordered">
                    <tbody>

                    <tr>
                        <th>#</th>
                        <th>PF Number</th>
                        <th>Name</th>
                        <th>High School</th>
                        <th>Gender</th>
                        <th>Mean Grade</th>
                        <th>ELP Class</th>
                        <th>Selection Criteria</th>
                        <th>County of Residence</th>
                        <th>Branch Posting</th>
                        <th>Phone Number</th>
                        <th>Email1</th>
                        <th>Email2</th>
                        <th>Family Contact</th>
                        <th>University</th>
                        <th>Course</th>
                    </tr>
                    @foreach($scholars as $scholar)
                    <tr>
                        <td>{{$scholar->id}}</td>
                        <td>{{$scholar->pf_number}}</td>
                        <td>{{$scholar->name}}</td>
                        <td>{{$scholar->high_school}}</td>
                        <td>{{$scholar->gender}}</td>
                        <td>{{$scholar->mean_grade}}</td>
                        <td>{{$scholar->elp_class}}</td>
                        <td>{{$scholar->selection_criteria}}</td>
                        <td>{{$scholar->county_of_residence}}</td>
                        <td>{{$scholar->branch_posting}}</td>
                        <td>{{$scholar->phone_number}}</td>
                        <td>{{$scholar->email1}}</td>
                        <td>{{$scholar->email2}}</td>
                        <td>{{$scholar->family_contact}}</td>
                        <td>{{$scholar->university->name}}</td>
                        <td>{{$scholar->course->name}}</td>
                        @endforeach
                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection