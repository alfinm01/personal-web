@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">

	<div class="row">
        <div class="col-lg-12">
            <h1 class="heading-one" style="padding-top: 10px;"><b>Profile</b></h1>
        </div>
    </div>

    <!-- Projects -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Projects</b>
                <a href="{{url('/profile')}}" class="btn btn-success pull-right" style="display: inline; margin-left: 10px;">View in Blog</a>
                <a href="{{url('admin/profile/projects/create')}}" class="btn btn-default pull-right" style="display: inline;">New Project</a>
            </h1>  
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-12">
    		<table class="table table-default display" id="myTable">
                <thead>
        			<tr>
        				<th class="col-lg-1">No</th>
        				<th class="col-lg-8">Project</th>
        				<th class="col-lg-3">Action</th>
        			</tr>
                </thead>
                <tbody>
        			@foreach ($projects as $key => $item)
        			<tr>
        				<td>{{ $key + 1 }}</td>
        				<td>{{ $item->project_title }}</td>
    	    			<td>
    		    			<a href="{{ url('admin/profile/projects/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
    		    			<a href="{{ url('admin/profile/projects/'.$item->id) }}" class="btn btn-info">Detail</a>
    		    			<form action="{{ url('admin/profile/projects/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
    			                {{ method_field('delete') }}
    			                {{ csrf_field() }}
    			                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
    		                </form>
    	                </td>
                    </tr>
        			@endforeach
                </tbody>
    		</table>
    	</div>	
    </div>

    <!-- Personal Qualities -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Personal Qualities</b>
                <a href="{{url('/profile')}}" class="btn btn-success pull-right" style="display: inline; margin-left: 10px;">View in Blog</a>
                <a href="{{url('admin/profile/personal-qualities/create')}}" class="btn btn-default pull-right" style="display: inline;">New Qualities</a>
            </h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-default display" id="myTable">
                <thead>
                    <tr>
                        <th class="col-lg-1">No</th>
                        <th class="col-lg-8">Topic</th>
                        <th class="col-lg-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personal_qualities as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->topic }}</td>
                        <td>
                            <a href="{{ url('admin/profile/personal-qualities/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('admin/profile/personal-qualities/'.$item->id) }}" class="btn btn-info">Detail</a>
                            <form action="{{ url('admin/profile/personal-qualities/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>

    <!-- Institution -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Institution</b></h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="{{ url('/admin/profile/institution'.$institution->id) }}" method="POST">
            {{ method_field('PUT') }}
              <div class="form-group col-lg-12">
                Institution <input type="text" name="institution" id="institution" value="{{ $institution->institution }}"> <br>
                Description <br>
                <textarea name="description" id="description" class="form-control my-editor">{{ $institution->description }}</textarea> <br>
                {{csrf_field()}}
                <input type="submit" value="Save">
              </div>
            </form>
        </div>
    </div>

    <!-- Skills -->
    <!--
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Skills</b>
                <a href="{{url('/profile')}}" class="btn btn-success pull-right" style="display: inline; margin-left: 10px;">View in Blog</a>
                <a href="{{url('admin/profile/skills/create')}}" class="btn btn-default pull-right" style="display: inline;">New Skills</a>
            </h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-default display" id="myTable">
                <thead>
                    <tr>
                        <th class="col-lg-1">No</th>
                        <th class="col-lg-8">Skill</th>
                        <th class="col-lg-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skills as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->skill }}</td>
                        <td>
                            <a href="{{ url('admin/profile/skills/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('admin/profile/skills/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
    -->

    <!-- Facts -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Facts</b></h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-horizontal" action="{{ url('/admin/profile/facts'.$facts->id) }}" method="POST">
            {{ method_field('PUT') }}
              <div class="form-group col-lg-12">
                Internships <input type="number" name="internships" id="internships" value="{{ $facts->internship }}"> <br>
                Hours Of Code Per Day <input type="number" name="code_hour" id="code_hour" value="{{ $facts->code_hour }}"> <br>
                Competition Experiences <input type="number" name="competition" id="competition" value="{{ $facts->competition }}"> <br>
                {{csrf_field()}}
                <input type="submit" value="Save">
              </div>
            </form>
        </div>
    </div>

    <!-- Affiliates -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Affiliates</b>
                <a href="{{url('/profile')}}" class="btn btn-success pull-right" style="display: inline; margin-left: 10px;">View in Blog</a>
                <a href="{{url('admin/profile/affiliates/create')}}" class="btn btn-default pull-right" style="display: inline;">New Affiliate</a>
            </h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-default display" id="myTable">
                <thead>
                    <tr>
                        <th class="col-lg-1">No</th>
                        <th class="col-lg-4">Affiliates</th>
                        <th class="col-lg-4">Logo</th>
                        <th class="col-lg-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($affiliates as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ url('/images'.$item->logo) }}</td>
                        <td>
                            <form action="{{ url('admin/profile/affiliates/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>

    <!-- Testimonials -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 10px;"><b>Testimonials</b>
                <a href="{{url('/profile')}}" class="btn btn-success pull-right" style="display: inline; margin-left: 10px;">View in Blog</a>
                <a href="{{url('admin/profile/testimonials/create')}}" class="btn btn-default pull-right" style="display: inline;">New Testimonial</a>
            </h1>  
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-default display" id="myTable">
                <thead>
                    <tr>
                        <th class="col-lg-1">No</th>
                        <th class="col-lg-8">Name of Testimoner</th>
                        <th class="col-lg-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ url('admin/profile/testimonials/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('admin/profile/testimonials/'.$item->id) }}" class="btn btn-info">Detail</a>
                            <form action="{{ url('admin/profile/testimonials/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>  
    </div>
    <hr>

</div>

@endsection

@section('script')
    <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('table.display').DataTable();
        } );
    </script>
@endsection