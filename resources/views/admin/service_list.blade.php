@extends('admin.master')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item active">Services</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Gallery</h5>
                    <!-- Table with stripped rows -->
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top">
                            <a href="{{url('service_add')}}" class="btn btn-warning btn-sm "><i class="bi bi-plus"></i>New
                                Service</a>
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
                                        <th scope="col">Title</th>
                                        <th scope="col">Desc</th>
                                        <th scope="col img-center">Image</th>
                                        <th scope="col" colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Services as $Service)
                                    <tr>
                                        <th scope="row">{{$Service->id}}</th>
                                        <td>{{$Service->title}}</td>
                                        <td>{{$Service->desc}}</td>
                                        <td class="text-center"><img src="{{$Service->image}}" class="col-sm-2"></td>
                                        <td><a href="delete_service/{{ $Service->id }}" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash bi-sm"></i></a>
                                        </td>

                                        <td><a href="{{url('img_edit/'.$Service->id)}}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i>Edit</a>
                                        </td>
                                        <td><a href="" class="btn btn-sm btn-outline-info"><i class="bi bi-info bi-sm"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="datatable-bottom">
                            <div class="datatable-info">Showing 1 to 10 of {{$count}} Entries</div>
                            <nav class="datatable-pagination">

                                <div class="text-center">
                                    {{ $Services->links('My-Paginate') }}
                                </div>
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