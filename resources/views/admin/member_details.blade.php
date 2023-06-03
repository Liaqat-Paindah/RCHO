@extends('admin.master')
@section('contents')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Teams</a></li>

            <li class="breadcrumb-item active">Team Member Details</li>
        </ol>
    </nav>
</div>

@endsection