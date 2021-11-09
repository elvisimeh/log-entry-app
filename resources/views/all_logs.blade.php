@extends('layouts.app')

@section('content')
  <div class="col-md-offset-3 col-md-9">
  <table id="dt">
<thead>
    <th>SN</th>
    <th>Project</th>
    <th>Severity</th>
    <th>Entry By</th>
</thead>
<tbody>
    <?php $sn =1 ?>
    @foreach($logs as $log)
    <tr>
        <td>{{$sn++}}.</td>
        <td>{{$log->project_name}}</td>
        <td>{{$log->severity}}</td>
        <td>{{$log->user}}</td>
    </tr>
    @endforeach
</tbody>
  </table>
  </div>


  <script>

$('#dt').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'pdfHtml5'
        ]
    });

  </script>

@endsection
