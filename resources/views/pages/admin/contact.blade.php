@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">

	<div class="row">
        <div class="col-lg-12">
            <h1 class="heading-one" style="padding-top: 10px;"><b>Messages</b></h1>
        </div>
    </div>

    <div class="row">
    	<div class="col-lg-12">
    		<table class="table table-default display" id="myTable">
                <thead>
        			<tr>
        				<th class="col-lg-2">Name</th>
        				<th class="col-lg-2">Email</th>
        				<th class="col-lg-2">Subject</th>
                        <th class="col-lg-4">Message</th>
                        <th class="col-lg-2">Time</th>
        			</tr>
                </thead>
                <tbody>
        			@foreach ($get_contacts as $key => $item)
        			<tr>
        				<td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td>{{ $item->message }}</td>
                        <td>{{ $item->created_at }}</td>   	    			
                    </tr>
        			@endforeach
                </tbody>
    		</table>
    	</div>	
    </div>

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