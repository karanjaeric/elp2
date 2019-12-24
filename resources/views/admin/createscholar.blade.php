@extends('admin.layouts.master')
@section('content')

    <form action="{{route('scholars.store')}}" method="POST">
        {{@csrf_field()}}
        <div class="modal-body">
            <div class="form-group">
                <input placeholder="Pf Number" id="pf_number" type="text"
                       name="pf_number"
                       class="form-control">
                <has-error field="pf_number"></has-error>
            </div>

            <div class="form-group">
                <input placeholder="First Name" id="first_name" type="text" name="first_name"
                       class="form-control">
                <has-error field="first_name"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Middle Name" id="middle_name" type="text" name="middle_name" class="form-control"
                >
                <has-error field="middle_name"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Surname" id="surname" type="text" name="surname"
                       class="form-control">
                <has-error field="surname"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="ID Number" id="id_number" type="text" name="id_number"
                       class="form-control">
                <has-error field="id_number"></has-error>
            </div>
            <div class="form-group">
                <select id="gender_id" name="gender_id" class="form-control"
                >
                    <option value="">Select Gender</option>
                    @foreach($genders as $gender)
                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endforeach

                </select>
                <has-error field="gender_id"></has-error>
            </div>
            <div class="form-group">
                <select id="county_id"
                        name="county_id"
                        class="form-control"
                >
                    <option value="">Select County of Residence</option>
                    @foreach($counties as $county)
                        <option value="{{$county->id}}">{{$county->name}}</option>
                    @endforeach


                </select>
                <has-error field="county_id"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Email1" id="email1" type="email" name="email1"
                       class="form-control">
                <has-error field="email1"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Email2" id="email2" type="email" name="email2"
                       class="form-control">
                <has-error field="email2"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Phone Number" id="phone_number" type="text"
                       name="phone_number"
                       class="form-control">
                <has-error field="phone_number"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="Phone Number2" id="phone_number2" type="text"
                       name="phone_number2"
                       class="form-control">
                <has-error field="phone_number2"></has-error>
            </div>
            <div class="form-group">
                <input placeholder="family_contact" id="family_contact"
                       type="text" name="family_contact"
                       class="form-control"
                >
                <has-error field="family_contact"></has-error>
            </div>
            <div class="form-group">
                <select id="family_contact_relationship"
                        name="contact_relationship_id" class="form-control"
                >
                    <option value="">Select Contact Relationship</option>
                    @foreach($contactRelationships as $contactRelationship)
                        <option value="{{$contactRelationship->id}}">{{$contactRelationship->name}}</option>
                    @endforeach

                </select>
                <has-error field="contact_relationship_id"></has-error>
            </div>
            <div class="form-group">
                <select id="high_school_id" name="high_school_id"
                        class="form-control"
                >
                    <option value="">Select High School</option>
                    @foreach($highSchools as $highSchool)
                        <option value="{{$highSchool->id}}">{{$highSchool->name}}</option>
                    @endforeach

                </select>
                <has-error :form="form" field="high_school_id"></has-error>
            </div>
            <div class="form-group">
                <select id="mean_grade_id" name="mean_grade_id" class="form-control"
                >
                    <option value="">Select Grade</option>
                    @foreach($meanGrades as $grade)
                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                    @endforeach

                </select>
                <has-error field="mean_grade_id"></has-error>
            </div>

            <div class="form-group">
                <select id="elp_class_id" name="elp_class_id" class="form-control"
                >
                    <option value="">Select ELP Class</option>
                    @foreach($elpClasses as $elpClass)
                        <option value="{{$elpClass->id}}">{{$elpClass->name}}</option>
                    @endforeach

                </select>
                <has-error field="elp_class_id"></has-error>
            </div>
            <div class="form-group">
                <select id="selection_criteria_id"
                        name="selection_criteria_id" class="form-control"
                >
                    <option value="">Selection Criteria</option>
                    @foreach($selectionCriteria as $criteria)
                        <option value="{{$criteria->id}}">{{$criteria->name}}</option>
                    @endforeach

                </select>
                <has-error field="selection_ctiteria"></has-error>
            </div>
            <div class="form-group">
                <select id="university_id"
                        name="university_id" class="form-control"
                >
                    <option value="">Choose University</option>
                    @foreach($universities as $university)
                        <option value="{{$university->id}}">{{$university->name}}</option>
                    @endforeach
                </select>
                <has-error field="university_id"></has-error>
            </div>
            <div class="form-group">
                <select id="branch_id"
                        name="branch_id" class="form-control"
                >
                    <option value="">Choose Branch</option>
                    @foreach($branches as $branch)
                        <option value="{{$branch->id}}">{{$branch->name}}</option>
                    @endforeach

                </select>
                <has-error field="branch_id"></has-error>
            </div>
            <div class="form-group">
                <select id="course_id"
                        name="course_id" class="form-control"
                >
                    <option value="">Choose Course</option>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
                <has-error field="course"></has-error>
            </div>
        </div>
        <div class="modal-footer">
            <button type="Submit" class="btn btn-primary">Create</button>

        </div>
    </form>

@endsection