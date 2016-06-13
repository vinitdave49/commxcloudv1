<?php

/* CommcloudVoiceBundle:Agent:callrecording_table.html.twig */
class __TwigTemplate_8de3b994c44e88aa29b482881602c779390346a1a7c1e7c6aa62982ccb872bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  
   
   
        ";
        // line 8
        echo "        \t<div class=\"box-body\">
\t\t\t";
        // line 10
        echo "\t\t\t\t<h3 class=\"box-title\">Call Recording</h3>
\t\t\t\t<div class=\"box-tools\">
\t\t\t\t\t<div class=\"input-group input-group-sm\" style=\"width: 150px;\">
\t\t\t\t\t\t<input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.box-header -->
\t\t\t <div class=\"row\">
             <div class=\"col-sm-12\">
\t\t\t\t";
        // line 24
        echo "\t\t\t\t";
        // line 25
        echo "\t\t\t\t<table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Call ID: activate to sort column descending\" style=\"width: 180px;\">Call Id</th>
\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Date: activate to sort column ascending\" style=\"width: 223px;\">Date</th>
\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"From: activate to sort column ascending\" style=\"width: 223px;\">From</th>
\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"To: activate to sort column ascending\" style=\"width: 223px;\">To</th>
\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Duration: activate to sort column ascending\" style=\"width: 223px;\">Duration</th>
\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Play Recording: activate to sort column ascending\" style=\"width: 223px;\">Play Recording</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 36
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "call_sid", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["call"], "date_created", array()), "Y-m-d\\TH:i:sP"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 40
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CommcloudVoiceBundle:Agent:getfromtoofcallrecording", array("call_sid" => $this->getAttribute(            // line 41
$context["call"], "call_sid", array()))));
            // line 42
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "duration", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<audio controls>
\t\t\t\t\t\t\t\t\t<source src=\"https://api.twilio.com/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "uri", array()), "html", null, true);
            echo ".mp3\" type=\"audio/mpeg\">
\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t
\t\t\t\t\t</tbody>
\t\t\t\t</table>\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<!-- /.box-body -->\t\t
\t\t</div>
    
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
<script type=\"text/javascript\">
//     \$('#example1').DataTable({
//       \"paging\": true,
//       \"lengthChange\": true,
//       \"searching\": true,
//       \"ordering\": true,
//       \"info\": true,
//       \"autoWidth\": false,
//       \"scrollX\": true
//     });
    
     \$( document ).ready(function() {
    console.log( \"ready!\" );
     \$(\"#loadingIMG\").css(\"display\", \"none\"); 
 });
    
 </script>
 ";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:callrecording_table.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 59,  111 => 51,  100 => 47,  94 => 44,  90 => 42,  88 => 41,  87 => 40,  82 => 38,  78 => 37,  75 => 36,  71 => 35,  59 => 25,  57 => 24,  42 => 10,  39 => 8,  34 => 4,  31 => 3,  27 => 78,  25 => 59,  23 => 3,  21 => 1,);
    }
}
/*  {#{% extends 'CommcloudVoiceBundle:Supervisor:base_filter.html.twig' %}#}*/
/* {#{% block title %}Call Recording Report{% endblock %}#}*/
/* {% block content %}*/
/*   */
/*    */
/*    */
/*         {#<div class="box">#}*/
/*         	<div class="box-body">*/
/* 			{#<div class="box-header">#}*/
/* 				<h3 class="box-title">Call Recording</h3>*/
/* 				<div class="box-tools">*/
/* 					<div class="input-group input-group-sm" style="width: 150px;">*/
/* 						<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">*/
/* 						<div class="input-group-btn">*/
/* 							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- /.box-header -->*/
/* 			 <div class="row">*/
/*              <div class="col-sm-12">*/
/* 				{#<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">#}*/
/* 				{#<table class="table table-hover">#}*/
/* 				<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/* 						<tr>*/
/* 							<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Call ID: activate to sort column descending" style="width: 180px;">Call Id</th>*/
/* 							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 223px;">Date</th>*/
/* 							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 223px;">From</th>*/
/* 							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending" style="width: 223px;">To</th>*/
/* 							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending" style="width: 223px;">Duration</th>*/
/* 							<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Play Recording: activate to sort column ascending" style="width: 223px;">Play Recording</th>*/
/* 						</tr>*/
/* 						<tbody>*/
/* 					{% for call in calls %}*/
/* 						<tr>*/
/* 							<td>{{ call.call_sid }}</td>*/
/* 							<td>{{ call.date_created|date('Y-m-d\\TH:i:sP') }}</td>*/
/* 							*/
/* 							{{ render(controller('CommcloudVoiceBundle:Agent:getfromtoofcallrecording',*/
/* 											{ 'call_sid': call.call_sid }*/
/* 							)) }}*/
/* 							*/
/* 							<td>{{ call.duration }}</td>*/
/* 							<td>*/
/* 								<audio controls>*/
/* 									<source src="https://api.twilio.com/{{call.uri}}.mp3" type="audio/mpeg">*/
/* 								</audio>*/
/* 							</td>*/
/* 						</tr>*/
/* 					{% endfor %}	*/
/* 					</tbody>*/
/* 				</table>						*/
/* 			</div>*/
/* 			<!-- /.box-body -->		*/
/* 		</div>*/
/*     */
/* {% endblock %}*/
/* {% block javascripts%}    */
/* <script type="text/javascript">*/
/* //     $('#example1').DataTable({*/
/* //       "paging": true,*/
/* //       "lengthChange": true,*/
/* //       "searching": true,*/
/* //       "ordering": true,*/
/* //       "info": true,*/
/* //       "autoWidth": false,*/
/* //       "scrollX": true*/
/* //     });*/
/*     */
/*      $( document ).ready(function() {*/
/*     console.log( "ready!" );*/
/*      $("#loadingIMG").css("display", "none"); */
/*  });*/
/*     */
/*  </script>*/
/*  {% endblock %}*/
/*     */
