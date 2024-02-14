@extends('student.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Students
                            <a href="{{ url('students/') }}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('students/' . $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <h4>Students</h4>
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name ="name" value ="{{ $student->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="text" name ="age" value ="{{ $student->age }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name ="address" value ="{{ $student->address }}" class="form-control">
                            </div>

                            <h4>Academic</h4>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name ="course" value ="{{ $student->academic->course }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Year</label>
                                <input type="text" name ="year" value ="{{ $student->academic->year }}"
                                    class="form-control">
                            </div>

                            <h4>Country</h4>
                            <div class="mb-3">
                                <label>Continent</label>
                                <input type="text" name ="course" value ="{{ $student->country->continent }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Country Name</label>
                                <input type="text" name ="year" value ="{{ $student->country->country_name }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Capital</label>
                                <input type="text" name ="year" value ="{{ $student->country->capital }}"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
