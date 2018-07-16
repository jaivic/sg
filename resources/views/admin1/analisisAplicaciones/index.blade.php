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
    <th>aplicacion id</th>
    <th>aplicacion nombre</th>
    <th>aplicacion url</th>
    <th>page bytes</th>
    <th>page bytes text</th>
    <th>page load time</th>
    <th>page load time text</th>
    <th>pagespeed score</th>
    <th>pagespeed score text</th>
    <th>yslow score</th>
    <th>yslow score text</th>
    <th>sqale index</th>
    <th>sqale index text</th>
    <th>sqale index trend</th>
    <th>sqale debt ratio</th>
    <th>sqale debt ratio text</th>
    <th>sqale debt ratio trend</th>
    <th>performance</th>
    <th>performance qualification</th>
    <th>aplicacion sonar key</th>
    <th>fecha</th>
    <th>created at</th>
    <th>updated at</th>
    
                                 <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($analisisAplicaciones as $row)
                                <tr>
                                    <td>{!!  $row->id !!}</td>
    <td>{!!  $row->aplicacion_id !!}</td>
    <td>{!!  $row->aplicacion_nombre !!}</td>
    <td>{!!  $row->aplicacion_url !!}</td>
    <td>{!!  $row->page_bytes !!}</td>
    <td>{!!  $row->page_bytes_text !!}</td>
    <td>{!!  $row->page_load_time !!}</td>
    <td>{!!  $row->page_load_time_text !!}</td>
    <td>{!!  $row->pagespeed_score !!}</td>
    <td>{!!  $row->pagespeed_score_text !!}</td>
    <td>{!!  $row->yslow_score !!}</td>
    <td>{!!  $row->yslow_score_text !!}</td>
    <td>{!!  $row->sqale_index !!}</td>
    <td>{!!  $row->sqale_index_text !!}</td>
    <td>{!!  $row->sqale_index_trend !!}</td>
    <td>{!!  $row->sqale_debt_ratio !!}</td>
    <td>{!!  $row->sqale_debt_ratio_text !!}</td>
    <td>{!!  $row->sqale_debt_ratio_trend !!}</td>
    <td>{!!  $row->performance !!}</td>
    <td>{!!  $row->performance_qualification !!}</td>
    <td>{!!  $row->aplicacion_sonar_key !!}</td>
    <td>{!!  $row->fecha !!}</td>
    <td>{!!  $row->created_at !!}</td>
    <td>{!!  $row->updated_at !!}</td>
    
                                    <td>   
                                        {!! Form::open(['route' => ['analisisaplicaciones.delete',$row->id], 'method' => 'delete']) !!}
                                        <div class='btn-group'>
                                            <a href="{!! route('analisisaplicaciones.show', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                            <a href="{!! route('analisisaplicaciones.edit', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
