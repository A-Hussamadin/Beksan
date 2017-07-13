@extends('shared.layout')
@section('style')



<link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 
                    <h2>Clinics</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><button class="btn btn-round btn-primary" onclick="location.href='/dashboard/clinics/create';"><i class="fa fa-plus" style="margin-right:5px;"></i>Add Clinic</button>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                  @endif
                  @if ($clinics->isEmpty())
                    <p> There is no Clinics.</p>
                  @else
                  
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                <th>Name</th>
                <th>phone</th>
                <th>Address</th>
                <th>JoinedAt</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($clinics as $clinic)
                <tr>
                  <td>{!! $clinic->id !!} </td>
                  <td> <a href="{!! action('Admin\ClinicsController@edit', $clinic->id) !!}">{!! $clinic->name !!}</a> </td>
                  <td>{!! $clinic->phone !!}</td>
                  <td>{!! $clinic->Address !!}</td>
                  <td>{!! $clinic->created_at !!}</td>
                  <td><a href="{!! action('Admin\ClinicsController@show', $clinic->id) !!}" class="btn btn-primary">Doctors</a></td>
                </tr>
              @endforeach
                      </tbody>
                    </table>
                    @endif
                  </div>
                </div>
              </div>
</div>
                
@endsection

@section('script')



 <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
@endsection