@extends('layouts.app')

@section('content')
   <section id="widget-grid" class="">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">             
            <div class="jarviswidget jarviswidget-color-darken" >
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Tabla estandar </h2>
                </header>
                                
                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>			                
                                <tr>
                                 <th>id</th>
    <th>backup application id</th>
    <th>folder name</th>
    <th>status</th>
    <th>mode</th>
    <th>size in gb</th>
    <th>files</th>
    <th>s3 path</th>
    <th>start time</th>
    <th>completed time</th>
    <th>duration</th>
    <th>zip start time</th>
    <th>zip completed time</th>
    <th>s3 start time</th>
    <th>s3 completed time</th>
    <th>log error</th>
    <th>observations</th>
    <th>created at</th>
    <th>updated at</th>
    
                                 <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($backupDetailApplications as $row)
                                <tr>
                                    <td>{!!  $row->id !!}</td>
    <td>{!!  $row->backup_application_id !!}</td>
    <td>{!!  $row->folder_name !!}</td>
    <td>{!!  $row->status !!}</td>
    <td>{!!  $row->mode !!}</td>
    <td>{!!  $row->size_in_gb !!}</td>
    <td>{!!  $row->files !!}</td>
    <td>{!!  $row->s3_path !!}</td>
    <td>{!!  $row->start_time !!}</td>
    <td>{!!  $row->completed_time !!}</td>
    <td>{!!  $row->duration !!}</td>
    <td>{!!  $row->zip_start_time !!}</td>
    <td>{!!  $row->zip_completed_time !!}</td>
    <td>{!!  $row->s3_start_time !!}</td>
    <td>{!!  $row->s3_completed_time !!}</td>
    <td>{!!  $row->log_error !!}</td>
    <td>{!!  $row->observations !!}</td>
    <td>{!!  $row->created_at !!}</td>
    <td>{!!  $row->updated_at !!}</td>
    
                                    <td>   
                                        {!! Form::open(['route' => ['backupdetailapplications.delete',$row->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('backupdetailapplications.show', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{!! route('backupdetailapplications.edit', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div> 
        </article>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="{{url('/')}}/js/libs/jquery-3.2.1.min.js"><\/script>');
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        if (!window.jQuery.ui) {
            document.write('<script src="{{url('/')}}/js/libs/jquery-ui.min.js"><\/script>');
        }
    </script>
    <script src="{{url('/')}}/js/plugin/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/js/plugin/datatables/dataTables.colVis.min.js"></script>
    <script src="{{url('/')}}/js/plugin/datatables/dataTables.tableTools.min.js"></script>
    <script src="{{url('/')}}/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<script>
    var responsiveHelper_dt_basic = undefined;

    var breakpointDefinition = {
        tablet : 1024,
        phone : 480
    };
    $('#dt_basic').dataTable({
        "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
        "t"+
        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
        "autoWidth" : true,
        "oLanguage": {
            "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
        },
        "preDrawCallback" : function() {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper_dt_basic) {
                responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
            }
        },
        "rowCallback" : function(nRow) {
        responsiveHelper_dt_basic.createExpandIcon(nRow);
        },
        "drawCallback" : function(oSettings) {
        responsiveHelper_dt_basic.respond();
        }
    });

</script>


@endsection
