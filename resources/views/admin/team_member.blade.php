@extends('admin.master')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Team Member</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Team Member list</h5>
                    <!-- Table with stripped rows -->
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top">
                        <a href="{{url('member_add')}}" class="btn btn-warning btn-sm "><i class="bi bi-plus"></i>Create</a>
                            <div class="datatable-search">
                                <input class="datatable-input" placeholder="Search..." type="search"
                                    title="Search within table">
                            </div>
                        </div>
                        <div class="datatable-container">
                            <table class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Higher Degree</th>
                                    <th scope="col">Degree 02</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col" colspan="3">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $team)
                                  <tr>
                                    <th scope="row">{{$team->id}}</th>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->position}}</td>
                                    <td>{{$team->study_field}}</td>
                                    <td>{{$team->graduation_info}}</td>
                                    <td class="text-center"><img src="{{$team->profile}}" class="rounded-circle col-sm-3"></td>                               
                                    <td><a href="delete/{{ $team->id }}" class="btn btn- btn-outline-danger"><i class="bi bi-trash bi-sm"></i></a></td>
                                    <td><a href="{{url('team_edit/'.$team->id)}}" class="btn btn- btn-outline-primary"><i class="fa fa-edit"></i>Edit</a></td>
                                    <td><a href="" class="btn btn- btn-outline-info"><i class="bi bi-info bi-sm"></i></a></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                        <div class="datatable-bottom">
                            <div class="datatable-info">Showing 1 to 10 of {{$count}} Entries</div>
                            <nav class="datatable-pagination">
                                <ul class="datatable-pagination-list"></ul>
                            </nav>
                        </div>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection