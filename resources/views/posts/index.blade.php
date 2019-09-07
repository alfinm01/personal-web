@extends('admin.layouts.main')

@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">

	<div class="row">
        <div class="col-lg-12">
            <h1 class="heading-one" style="padding-top: 10px;"><b>Articles</b></h1>
        </div>
    </div>

    <hr>
    <div class="row" style="padding-bottom: 10px;">   
        <div class="col-lg-12">
            <form action="{{ url('admin/categories') }}" method="post" style="display: inline; margin: 0px;padding-bottom: 15px;"">
                <input type="text" name="category" id="category">
                {{ csrf_field() }}
                <input type="submit" value="Add New Category" class="btn btn-info">
            </form>
            <h1 class="heading-two" style="font-size: 25px; padding-bottom: 15px; display: inline;"><b> </b>
                <a href="{{ url('admin/articles/create') }}" class="btn btn-primary pull-right" style="display: inline; margin-left: 10px;">New Article</a>
                <a href="{{ url('/articles') }}" class="btn btn-success pull-right" style="display: inline; ">View in Blog</a>
            </h1>  
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-12">
    		<table class="table table-default display" id="myTable">
                <thead>
        			<tr>
        				<th class="col-lg-1">No</th>
        				<th class="col-lg-2">Title</th>
                        <th class="col-lg-2">Category</th>
                        <th class="col-lg-4">Tags</th>
        				<th class="col-lg-3">Action</th>
        			</tr>
                </thead>
                <tbody style="text-align: center;">
        			@foreach ($articles as $key => $item)
        			<tr>
        				<td>{{ $key + 1 }}</td>
        				<td>{{ $item->title }}</td>
                        <td>{{ $item->category->category }}</td>
                        <td>
                            @foreach ($item->tag as $tag)
                                <p style="display: inline;">{{ $tag->tag }}</p>
                            @endforeach
                        </td>
    	    			<td>
    		    			<a href="{{ url('admin/articles/'.$item->id.'/edit') }}" class="btn btn-primary">Edit</a>
    		    			<a href="{{ url('admin/articles/'.$item->id) }}" class="btn btn-info">Detail</a>
    		    			<form action="{{ url('admin/articles/'.$item->id) }}" method="post" style="display: inline; margin: 0px; padding: 0px;">
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