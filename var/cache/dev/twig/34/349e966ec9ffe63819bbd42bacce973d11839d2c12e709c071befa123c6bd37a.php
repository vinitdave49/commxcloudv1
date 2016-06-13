<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_workerdatatable.html.twig */
class __TwigTemplate_09c218e17be5d874a17d1079ebcbd97295d420af9cd387453295394fa50514fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00d08d6948e1311f1b21e59663e94a473f005c34ec5ccf478d0a6e0c8d68be1b = $this->env->getExtension("native_profiler");
        $__internal_00d08d6948e1311f1b21e59663e94a473f005c34ec5ccf478d0a6e0c8d68be1b->enter($__internal_00d08d6948e1311f1b21e59663e94a473f005c34ec5ccf478d0a6e0c8d68be1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Realtime:rt_workerdatatable.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Realtime Worker Activity Report </h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div id=\"table_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                    \t\t\t<div class=\"box-body\">
                    \t\t\t\t<div class=\"row\">
                    \t\t\t\t\t<div class=\"col-md-8\">
                    \t\t\t\t\t\t<div class=\"chart-responsive\">
                    \t\t\t\t\t\t\t<canvas id=\"taskStatsRTChart\" style=\"height: 205px; width: 205px;\" height=\"205\" width=\"205\"></canvas>
                    \t\t\t\t\t\t</div>
                    \t\t\t\t\t</div>
                    \t\t\t\t</div>
                    \t\t\t</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<script type=\"text/javascript\">
//  \$(function () {
    \$('#table').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    \$('#activitytable').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    var response = '";
        // line 54
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["realtime_tasks"]) ? $context["realtime_tasks"] : $this->getContext($context, "realtime_tasks"))), "html", null, true);
        echo "';
    //var response = '{\"pending\":10,\"assigned\":90,\"reserved\":50}';
    response = response.replace(/&quot;/g,'\"');
    console.log(\"response is: \"+response);
    var jsonObj = \$.parseJSON(response);
    
    //var data = response.replace(/&quot;/g,'\"');//JSON.parse(response);

    for (key in jsonObj){
        console.log(\"key is \" + [ key ] + \", value is \" + jsonObj[key]['value']);
    }
\tvar ctx = \$(\"#taskStatsRTChart\").get(0).getContext('2d');
\tvar myDoughnutChart = new Chart(ctx).Doughnut(jsonObj);
//  });
 </script>";
        
        $__internal_00d08d6948e1311f1b21e59663e94a473f005c34ec5ccf478d0a6e0c8d68be1b->leave($__internal_00d08d6948e1311f1b21e59663e94a473f005c34ec5ccf478d0a6e0c8d68be1b_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_workerdatatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 54,  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Realtime Worker Activity Report </h3>*/
/*                 </div>*/
/*                 <!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                     			<div class="box-body">*/
/*                     				<div class="row">*/
/*                     					<div class="col-md-8">*/
/*                     						<div class="chart-responsive">*/
/*                     							<canvas id="taskStatsRTChart" style="height: 205px; width: 205px;" height="205" width="205"></canvas>*/
/*                     						</div>*/
/*                     					</div>*/
/*                     				</div>*/
/*                     			</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*             <!-- /.box -->*/
/*         </div>*/
/*         <!-- /.col -->*/
/*     </div>*/
/*     <!-- /.row -->*/
/* </section>*/
/* <script type="text/javascript">*/
/* //  $(function () {*/
/*     $('#table').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": true*/
/*     });*/
/*     $('#activitytable').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": true*/
/*     });*/
/*     var response = '{{ realtime_tasks|json_encode() }}';*/
/*     //var response = '{"pending":10,"assigned":90,"reserved":50}';*/
/*     response = response.replace(/&quot;/g,'"');*/
/*     console.log("response is: "+response);*/
/*     var jsonObj = $.parseJSON(response);*/
/*     */
/*     //var data = response.replace(/&quot;/g,'"');//JSON.parse(response);*/
/* */
/*     for (key in jsonObj){*/
/*         console.log("key is " + [ key ] + ", value is " + jsonObj[key]['value']);*/
/*     }*/
/* 	var ctx = $("#taskStatsRTChart").get(0).getContext('2d');*/
/* 	var myDoughnutChart = new Chart(ctx).Doughnut(jsonObj);*/
/* //  });*/
/*  </script>*/
