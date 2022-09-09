<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bulk Ledger import, Export</title>
	
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">
				<form method="post" action="{{ route('bulk_ledger_import') }}" enctype="multipart/form-data" class="mb-2">
						@csrf
						<input type="file" name="file"><br><br>
						<button class="btn btn-success">Import Bulk Ledger</button>
						<a class="btn btn-warning" href="{{ route('bulk_ledger_export') }}">Export Bulk Ledger</a>
				</form>
				
		    <table class="table table-stripped" id="tblUser">
				<thead>
					<th>Sr.</th>
					<th>Date</th>
					<th>Academic Year</th>
					<th>Session</th>
					<th>Alloted Category</th>
					<th>Voucher Type</th>
					<th>Voucher No.</th>
					<th>Roll No.</th>
					<th>Admno/UniqueId</th>
					<th>Status</th>
					<th>Fee Category</th>
					<th>Faculty</th>
					<th>Program</th>
					<th>Department</th>
					<th>Batch</th>
					<th>Receipt No.</th>
					<th>Fee Head</th>
					<th>Due Amount</th>
					<th>Paid Amount</th>
					<th>Concession Amount</th>
					<th>Scholarship Amount</th>
					<th>Reverse Concession Amount</th>
					<th>Write Off Amount</th>
					<th>Adjusted Amount</th>
					<th>Refund Amount</th>
					<th>Fund TranCfer Amount</th>
					<th>Remarks</th>
				</thead>
				<tbody>
				
					@foreach($bulk_ledger as $bl)
						<tr>
							<td>{{ $bl->Sr }}</td>
							<td>{{ $bl->Date }}</td>
							<td>{{ "$bl->Academic Year" }}</td>
							<td>{{ $bl->Session }}</td>
							<td>{{ "$bl->Alloted Category" }}</td>
							<td>{{ "$bl->Voucher Type" }}</td>
							<td>{{ "$bl->Voucher No" }}</td>
							<td>{{ "$bl->Roll No" }}</td>
							<td>{{ "$bl->Admno/UniqueId" }}</td>
							<td>{{ $bl->Status }}</td>
							<td>{{ "$bl->Fee Category" }}</td>
							<td>{{ $bl->Faculty }}</td>
							<td>{{ $bl->Program }}</td>
							<td>{{ $bl->Department }}</td>
							<td>{{ $bl->Batch }}</td>
							<td>{{ "$bl->Receipt No" }}</td>
							<td>{{ "$bl->Fee Head" }}</td>
							<td>{{ "$bl->Due Amount" }}</td>
							<td>{{ "$bl->Paid Amount" }}</td>
							<td>{{ "$bl->Concession Amount" }}</td>
							<td>{{ "$bl->Scholarship Amount" }}</td>
							<td>{{ "$bl->Reverse Concession Amount" }}</td>
							<td>{{ "$bl->Write Off Amount" }}</td>
							<td>{{ "$bl->Adjusted Amount" }}</td>
							<td>{{ "$bl->Refund Amount" }}</td>
							<td>{{ "$bl->Fund TranCfer Amount" }}</td>
							<td>{{ "$bl->Remarks" }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			
			</div>
        </div>
    </body>
	<script>
		jQuery(document).ready(function($) {
			$('#tblUser').DataTable({
				scrollX: true,
				scrollY: true,
			});
		} );
</script>
</html>
