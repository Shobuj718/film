@extends('admin.master')

@section('page-title')
	All Film Data
@endsection

@section('content-heading')
	All Film List
@endsection

@section('main-content')

	

	<div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>Film Name</th>
                    <th>Description</th>
                    <th>Realese Date</th>
                    <th>Rating</th>
                    <th>Ticket Price</th>
                    <th>Country</th>
                    <th>Genre</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 0; ?>
            @foreach($films as $film)
                <tr class="odd gradeX">
                    <td>{{ ++$i }}</td>
                    <td>{{ $film->name }}</td>
                    <td>{{ $film->description }}</td>
                    <td>{{ $film->realeseDate }}</td>
                    <td>{{ $film->rating }}</td>
                    <td>{{ $film->ticketPrice }}</td>
                    <td>{{ $film->country }}</td>
                    <td>{{ $film->genre }}</td>
                    <td>{{ $film->genre }}</td>

                    <td class="center"><a style="color:blue" href="{{ url('/films/'.$film->id.'/edit') }}">Edit</a> | <a style="color:blue" href="{{ url('/films/delete/'.$film->id) }}">Delete</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection