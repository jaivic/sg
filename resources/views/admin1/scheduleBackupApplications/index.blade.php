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
    <th>instance name</th>
    <th>lunes</th>
    <th>martes</th>
    <th>miercoles</th>
    <th>jueves</th>
    <th>viernes</th>
    <th>sabado</th>
    <th>domingo</th>
    <th>hora programada</th>
    <th>description</th>
    <th>status</th>
    <th>is linea base</th>
    <th>instance type</th>
    <th>is ansible</th>
    <th>aplicacion id</th>
    <th>environment id</th>
    <th>instancia id</th>
    <th>domain</th>
    <th>forward time</th>
    <th>created at</th>
    <th>updated at</th>
    
                                 <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($scheduleBackupApplications as $row)
                                <tr>
                                    <td>{!!  $row->id !!}</td>
    <td>{!!  $row->instance_name !!}</td>
    <td>{!!  $row->lunes !!}</td>
    <td>{!!  $row->martes !!}</td>
    <td>{!!  $row->miercoles !!}</td>
    <td>{!!  $row->jueves !!}</td>
    <td>{!!  $row->viernes !!}</td>
    <td>{!!  $row->sabado !!}</td>
    <td>{!!  $row->domingo !!}</td>
    <td>{!!  $row->hora_programada !!}</td>
    <td>{!!  $row->description !!}</td>
    <td>{!!  $row->status !!}</td>
    <td>{!!  $row->is_linea_base !!}</td>
    <td>{!!  $row->instance_type !!}</td>
    <td>{!!  $row->is_ansible !!}</td>
    <td>{!!  $row->aplicacion_id !!}</td>
    <td>{!!  $row->environment_id !!}</td>
    <td>{!!  $row->instancia_id !!}</td>
    <td>{!!  $row->domain !!}</td>
    <td>{!!  $row->forward_time !!}</td>
    <td>{!!  $row->created_at !!}</td>
    <td>{!!  $row->updated_at !!}</td>
    
                                    <td>   
                                        {!! Form::open(['route' => ['schedulebackupapplications.delete',$row->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('schedulebackupapplications.show', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{!! route('schedulebackupapplications.edit', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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