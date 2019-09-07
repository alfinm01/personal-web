@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>

                <h2><a href="{{ url('admin/profile/') }}"><i class="fa fa-male"></i> Profile</a></h2> <br>

                <h2><a href="{{ url('admin/articles/') }}"><i class="fa fa-table"></i> Articles</a></h2> <br>

                <h2><a href="{{ url('admin/contact/') }}"><i class="fa fa-edit"></i> Contacts</a></h2>        
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection