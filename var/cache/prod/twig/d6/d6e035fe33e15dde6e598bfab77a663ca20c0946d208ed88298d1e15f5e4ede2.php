<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig */
class __TwigTemplate_2716487a049cf31001ff70b57d59879ecd900f3933de401546735dcbf2e445bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"box box-primary\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Realtime Call List Report</h3>
\t</div>
\t<div class=\"box-body table-responsive no-padding\">
\t\t<table id=\"table\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
\t\t\t<thead>
\t\t\t\t<tr role=\"row\">
\t\t\t\t\t<th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Start Time: activate to sort column descending\">Start Time</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"From: activate to sort column ascending\">From</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"To: activate to sort column ascending\">To</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Direction: activate to sort column ascending\">Direction</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Status: activate to sort column ascending\">Status</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Call ID: activate to sort column ascending\">Call ID</th>
\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Duration: activate to sort column ascending\">Duration</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 22
            echo "\t\t\t\t<tr role=\"row\">
\t\t\t\t\t<td class=\"sorting_1\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "start_time", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "from", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "to", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "direction", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "sid", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "duration", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
<script type=\"text/javascript\">
\t\$('#table').DataTable({
\t\t\"paging\": true,
\t\t\"lengthChange\": false,
\t\t\"searching\": false,
\t\t\"ordering\": true,
\t\t\"info\": true,
\t\t\"autoWidth\": false,
\t\t\"scrollX\": true
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 23,  51 => 22,  47 => 21,  26 => 2,  20 => 1,);
    }
}
/* {% block content %}*/
/* */
/* <div class="box box-primary">*/
/* 	<div class="box-header">*/
/* 		<h3 class="box-title">Realtime Call List Report</h3>*/
/* 	</div>*/
/* 	<div class="box-body table-responsive no-padding">*/
/* 		<table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/* 			<thead>*/
/* 				<tr role="row">*/
/* 					<th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Start Time: activate to sort column descending">Start Time</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending">From</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending">To</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Direction: activate to sort column ascending">Direction</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Call ID: activate to sort column ascending">Call ID</th>*/
/* 					<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Duration: activate to sort column ascending">Duration</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for call in calls %}*/
/* 				<tr role="row">*/
/* 					<td class="sorting_1">{{ call.start_time }}</td>*/
/* 					<td>{{ call.from }}</td>*/
/* 					<td>{{ call.to }}</td>*/
/* 					<td>{{ call.direction }}</td>*/
/* 					<td>{{ call.sid }}</td>*/
/* 					<td>{{ call.status }}</td>*/
/* 					<td>{{ call.duration }}</td>*/
/* 				</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* 	$('#table').DataTable({*/
/* 		"paging": true,*/
/* 		"lengthChange": false,*/
/* 		"searching": false,*/
/* 		"ordering": true,*/
/* 		"info": true,*/
/* 		"autoWidth": false,*/
/* 		"scrollX": true*/
/* 	});*/
/* </script>*/
/* {% endblock %}*/
/* */
