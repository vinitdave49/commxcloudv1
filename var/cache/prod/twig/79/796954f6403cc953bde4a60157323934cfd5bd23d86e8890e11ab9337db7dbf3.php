<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_workerdatatable.html.twig */
class __TwigTemplate_28d27a1d2c6f2bed5d277c6993d9f2152268362e7459f2e596e7c0826a1cc1e8 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["realtime_tasks"]) ? $context["realtime_tasks"] : null)), "html", null, true);
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
        return array (  74 => 54,  19 => 1,);
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
