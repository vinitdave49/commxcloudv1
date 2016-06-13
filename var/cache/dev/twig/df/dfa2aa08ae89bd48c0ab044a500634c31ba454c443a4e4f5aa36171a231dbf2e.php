<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuedatatable.html.twig */
class __TwigTemplate_18d7c868c4231067658486628f2e6acb3acf8fe0dcbbf5f24ca7c985b730fc7b extends Twig_Template
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
        $__internal_4f31a841388f13653ef022cc91bdc53ed992582779583d51806528d8f414658d = $this->env->getExtension("native_profiler");
        $__internal_4f31a841388f13653ef022cc91bdc53ed992582779583d51806528d8f414658d->enter($__internal_4f31a841388f13653ef022cc91bdc53ed992582779583d51806528d8f414658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuedatatable.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Realtime Task Queue Report </h3>
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
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Total Workers: activate to sort column descending\">Total Workers</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Total Available Workers: activate to sort column ascending\">Total Available Workers</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Longest Task Waiting Age: activate to sort column ascending\">Longest Task Waiting Age</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realtime_data"]) ? $context["realtime_data"] : $this->getContext($context, "realtime_data")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 27
            echo "                                            <tr role=\"row\">
                                                <td class=\"sorting_1\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "total_eligible_workers", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "total_available_workers", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "longest_task_waiting_age", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                                    </tbody>
                                    ";
        // line 36
        echo "                                    ";
        // line 37
        echo "                                    ";
        // line 38
        echo "                                    ";
        // line 39
        echo "                                    ";
        // line 40
        echo "                                    ";
        // line 41
        echo "                                    ";
        // line 42
        echo "                                </table>
                            </div>
                            <div class=\"col-md-6\">
                                <table id=\"activitytable\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
                                    <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Activity Name: activate to sort column descending\">Activity Name</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Total Workers: activate to sort column ascending\">Total Workers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realtime_activitystats"]) ? $context["realtime_activitystats"] : $this->getContext($context, "realtime_activitystats")));
        foreach ($context['_seq'] as $context["key"] => $context["data"]) {
            // line 54
            echo "                                            <tr role=\"row\">
                                                <td class=\"sorting_1\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "friendly_name", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "workers", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                                    </tbody>
                                    ";
        // line 62
        echo "                                    ";
        // line 63
        echo "                                    ";
        // line 64
        echo "                                    ";
        // line 65
        echo "                                    ";
        // line 66
        echo "                                    ";
        // line 67
        echo "                                </table>                                
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                        \t\t<div class=\"box box-default\">
                        \t\t\t<div class=\"box-header with-border\">
                        \t\t\t\t<h3 class=\"box-title\">Task Statistics</h3>
                        \t\t\t\t<div class=\"box-tools pull-right\">
                        \t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        \t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                        \t\t\t\t</div>
                        \t\t\t</div>
                        \t\t\t<div class=\"box-body with-border\">
                        \t\t\t\t<div class=\"row\">
                        \t\t\t\t\t<div class=\"col-md-8\">
                        \t\t\t\t\t\t<div class=\"chart-responsive\">
                        \t\t\t\t\t\t\t<canvas id=\"taskStatsRTChart\" style=\"height: 205px; width: 205px;\" height=\"205\" width=\"205\"></canvas>
                        \t\t\t\t\t\t</div>
                        \t\t\t\t\t</div>
                        \t\t\t\t\t";
        // line 88
        echo "                        \t\t\t\t\t";
        // line 89
        echo "                        \t\t\t\t\t";
        // line 90
        echo "                        \t\t\t\t\t";
        // line 91
        echo "                        \t\t\t\t\t";
        // line 92
        echo "                        \t\t\t\t\t";
        // line 93
        echo "                        \t\t\t\t\t";
        // line 94
        echo "                        \t\t\t\t</div>
                        \t\t\t</div>
                        \t\t</div>
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
        // line 129
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
        
        $__internal_4f31a841388f13653ef022cc91bdc53ed992582779583d51806528d8f414658d->leave($__internal_4f31a841388f13653ef022cc91bdc53ed992582779583d51806528d8f414658d_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuedatatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 129,  170 => 94,  168 => 93,  166 => 92,  164 => 91,  162 => 90,  160 => 89,  158 => 88,  136 => 67,  134 => 66,  132 => 65,  130 => 64,  128 => 63,  126 => 62,  122 => 59,  113 => 56,  109 => 55,  106 => 54,  102 => 53,  89 => 42,  87 => 41,  85 => 40,  83 => 39,  81 => 38,  79 => 37,  77 => 36,  73 => 33,  64 => 30,  60 => 29,  56 => 28,  53 => 27,  49 => 26,  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Realtime Task Queue Report </h3>*/
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
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Total Workers: activate to sort column descending">Total Workers</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Total Available Workers: activate to sort column ascending">Total Available Workers</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Longest Task Waiting Age: activate to sort column ascending">Longest Task Waiting Age</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for data in realtime_data %}*/
/*                                             <tr role="row">*/
/*                                                 <td class="sorting_1">{{ data.total_eligible_workers }}</td>*/
/*                                                 <td>{{ data.total_available_workers }}</td>*/
/*                                                 <td>{{ data.longest_task_waiting_age }}</td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                     {#<tfoot>#}*/
/*                                     {#    <tr>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Total Workers</th>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Total Available Workers</th>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Longest Task Waiting Age</th>#}*/
/*                                     {#    </tr>#}*/
/*                                     {#</tfoot>#}*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <table id="activitytable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/*                                     <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Activity Name: activate to sort column descending">Activity Name</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Total Workers: activate to sort column ascending">Total Workers</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for key, data in realtime_activitystats %}*/
/*                                             <tr role="row">*/
/*                                                 <td class="sorting_1">{{ data.friendly_name }}</td>*/
/*                                                 <td>{{ data.workers }}</td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                     {#<tfoot>#}*/
/*                                     {#    <tr>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Activity Name</th>#}*/
/*                                     {#        <th rowspan="1" colspan="1">Total Workers</th>#}*/
/*                                     {#    </tr>#}*/
/*                                     {#</tfoot>#}*/
/*                                 </table>                                */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                         		<div class="box box-default">*/
/*                         			<div class="box-header with-border">*/
/*                         				<h3 class="box-title">Task Statistics</h3>*/
/*                         				<div class="box-tools pull-right">*/
/*                         					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                         					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                         				</div>*/
/*                         			</div>*/
/*                         			<div class="box-body with-border">*/
/*                         				<div class="row">*/
/*                         					<div class="col-md-8">*/
/*                         						<div class="chart-responsive">*/
/*                         							<canvas id="taskStatsRTChart" style="height: 205px; width: 205px;" height="205" width="205"></canvas>*/
/*                         						</div>*/
/*                         					</div>*/
/*                         					{#<div class="col-md-4">#}*/
/*                         					{#	<ul class="chart-legend clearfix">#}*/
/*                         					{#		<li><i class="fa fa-circle-o text-red"></i>Pending Tasks</li>#}*/
/*                         					{#		<li><i class="fa fa-circle-o text-green"></i>Assigned Tasks</li>#}*/
/*                         					{#		<li><i class="fa fa-circle-o text-yellow"></i>Reserved Tasks</li>#}*/
/*                         					{#	</ul>#}*/
/*                         					{#</div>						#}*/
/*                         				</div>*/
/*                         			</div>*/
/*                         		</div>*/
/*                             </div>*/
/*                         </div>                        */
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
