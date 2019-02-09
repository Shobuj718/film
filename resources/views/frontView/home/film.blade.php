<!DOCTYPE html>
<html>
<head>
	<title>Film</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="row">
	<div class="col-md-10">
		<h2>This is film related information</h2>
		<table id="example" class="display" style="width:100%">
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
        <tbody> <?php $i = 0; ?>
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
        <tfoot>
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
        </tfoot>
    </table>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
	</script>

</body>
</html>