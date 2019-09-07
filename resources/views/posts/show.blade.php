@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1>Article : {{ $post->title }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered table-striped">
        	<tr>
        		<th class="col-lg-3">ID</th>
        		<td>{{ $post->id }}</td>
        	</tr>
        	<tr>
        		<th class="col-lg-3">Title</th>
        		<td>{{ $post->title }}</td>
        	</tr>
        	<tr>
        		<th class="col-lg-3">Description</th>
        		<td>{!! $post->description !!}</td>
        	</tr>
          {{-- <tr>
            <th class="col-lg-3">Category</th>
            <td>{{ $articles->category->category }}</td>
          </tr>
          <tr>
            <th class="col-lg-3">Tags</th>
            <td>
              @foreach ($articles->tag as $tag)
                <p>{{ $tag->tag }}</p>
              @endforeach
            </td>
          </tr>
          <tr>
            <th class="col-lg-3">Publishing Status</th>
            <td>
              {{ $articles->publishing_status == true ? 'Ya' : 'Tidak' }}
            </td>
          </tr> --}}
          <tr>
            <th class="col-lg-3">Created At</th>
            <td>{{ $ConvertedDate3 = \Carbon\Carbon::parse($post->created_at)->formatLocalized('%d %b %y') }}</td>
          </tr>
          <tr>
            <th class="col-lg-3">Updated At</th>
            <td>{{ $ConvertedDate3 = \Carbon\Carbon::parse($post->updated_at)->formatLocalized('%d %b %y') }}</td>
          </tr>
         {{--  <tr>
            <th class="col-lg-3">Image</th>
            <td><img src="{{ url('/images/'.$articles->image) }}" width="500" height="auto"></td>
          </tr>
 --}}        </table>

      </div>
    </div>
  </div>
@endsection
