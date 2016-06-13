<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_workflowdatatable.html.twig */
class __TwigTemplate_bf7cbf21248fbde150a779ec590693634ef61c50ccc8e51da7e02b7e15f6ae33 extends Twig_Template
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
        $__internal_55d377094851993dbc6ed8ae9ccbcf6289e39b1ef97ed270b65a0235fedecbf8 = $this->env->getExtension("native_profiler");
        $__internal_55d377094851993dbc6ed8ae9ccbcf6289e39b1ef97ed270b65a0235fedecbf8->enter($__internal_55d377094851993dbc6ed8ae9ccbcf6289e39b1ef97ed270b65a0235fedecbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Realtime:rt_workflowdatatable.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Realtime Workflow Report </h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div id=\"table_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\"></div>
                            <div class=\"col-sm-6\"></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <table id=\"table\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
                                    <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Longest Task Waiting Age: activate to sort column ascending\">Longest Task Waiting Age</th>
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Total Tasks: activate to sort column descending\">Total Tasks</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr role=\"row\">
                                                <td class=\"sorting_1\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realtime_stats"]) ? $context["realtime_stats"] : $this->getContext($context, "realtime_stats")), "longest_task_waiting_age", array()), "html", null, true);
        echo "</td>
                                                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realtime_stats"]) ? $context["realtime_stats"] : $this->getContext($context, "realtime_stats")), "total_tasks", array()), "html", null, true);
        echo "</td>
                                            </tr>
                                    </tbody>
                                    ";
        // line 31
        echo "                                    ";
        // line 32
        echo "                                    ";
        // line 33
        echo "                                    ";
        // line 34
        echo "                                    ";
        // line 35
        echo "                                    ";
        // line 36
        echo "                                </table>
                            </div>
                            <div class=\"col-md-6\">
        \t\t\t\t\t\t<div class=\"chart-responsive\">
        \t\t\t\t\t\t\t<canvas id=\"taskStatsRTChart\" style=\"height: 205px; width: 205px;\" height=\"205\" width=\"205\"></canvas>
        \t\t\t\t\t\t</div>
            \t\t\t\t\t<div class=\"col-md-4\">
            \t\t\t\t\t\t<ul class=\"chart-legend clearfix\">
            \t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-red\"></i>Pending Tasks</li>
            \t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-green\"></i>Assigned Tasks</li>
            \t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-yellow\"></i>Reserved Tasks</li>
            \t\t\t\t\t\t</ul>
            \t\t\t\t\t</div>\t\t\t\t\t\t
            \t\t\t\t</div>
            \t\t\t</div>
            \t\t</div>                                
                </div>
            </div>
        </div>
    </div>
</section>
<script type=\"text/javascript\">
 // \$(function () {
    \$('#table').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    var response = '";
        // line 68
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
 // });
 </script>";
        
        $__internal_55d377094851993dbc6ed8ae9ccbcf6289e39b1ef97ed270b65a0235fedecbf8->leave($__internal_55d377094851993dbc6ed8ae9ccbcf6289e39b1ef97ed270b65a0235fedecbf8_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_workflowdatatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 68,  69 => 36,  67 => 35,  65 => 34,  63 => 33,  61 => 32,  59 => 31,  53 => 27,  49 => 26,  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Realtime Workflow Report </h3>*/
/*                 </div>*/
/*                 <!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6"></div>*/
/*                             <div class="col-sm-6"></div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/*                                     <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Longest Task Waiting Age: activate to sort column ascending">Longest Task Waiting Age</th>*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Total Tasks: activate to sort column descending">Total Tasks</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                             <tr role="row">*/
/*                                                 <td class="sorting_1">{{ realtime_stats.longest_task_waiting_age }}</td>*/
/*                                                 <td>{{ realtime_stats.total_tasks }}</td>*/
/*                                             </tr>*/
/*                                     </tbody>*/
/*                                     {#<tfoot>#}*/
/*                                     {#    <tr>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Longest Task Waiting Age</th>                                            #}*/
/*                                     {#        <th rowspan="1" colspan="1">Total Tasks</th>#}*/
/*                                     {#    </tr>#}*/
/*                                     {#</tfoot>#}*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*         						<div class="chart-responsive">*/
/*         							<canvas id="taskStatsRTChart" style="height: 205px; width: 205px;" height="205" width="205"></canvas>*/
/*         						</div>*/
/*             					<div class="col-md-4">*/
/*             						<ul class="chart-legend clearfix">*/
/*             							<li><i class="fa fa-circle-o text-red"></i>Pending Tasks</li>*/
/*             							<li><i class="fa fa-circle-o text-green"></i>Assigned Tasks</li>*/
/*             							<li><i class="fa fa-circle-o text-yellow"></i>Reserved Tasks</li>*/
/*             						</ul>*/
/*             					</div>						*/
/*             				</div>*/
/*             			</div>*/
/*             		</div>                                */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*  // $(function () {*/
/*     $('#table').DataTable({*/
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
/*  // });*/
/*  </script>*/
