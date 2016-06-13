<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig */
class __TwigTemplate_0cb8a32fd76b51833f170820b16f882412fb278fc5d43f8e621a71831ad4c612 extends Twig_Template
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
        $__internal_a4dd2c94e173f27e16853473ae09fbfde7249c8bf0653825cb056891eb0cb981 = $this->env->getExtension("native_profiler");
        $__internal_a4dd2c94e173f27e16853473ae09fbfde7249c8bf0653825cb056891eb0cb981->enter($__internal_a4dd2c94e173f27e16853473ae09fbfde7249c8bf0653825cb056891eb0cb981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a4dd2c94e173f27e16853473ae09fbfde7249c8bf0653825cb056891eb0cb981->leave($__internal_a4dd2c94e173f27e16853473ae09fbfde7249c8bf0653825cb056891eb0cb981_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_bc8cb30b0be3a5d65ff8ce2a44d2ce4d918b1444029f2e5045c4c91fe8c46b83 = $this->env->getExtension("native_profiler");
        $__internal_bc8cb30b0be3a5d65ff8ce2a44d2ce4d918b1444029f2e5045c4c91fe8c46b83->enter($__internal_bc8cb30b0be3a5d65ff8ce2a44d2ce4d918b1444029f2e5045c4c91fe8c46b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : $this->getContext($context, "calls")));
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
        
        $__internal_bc8cb30b0be3a5d65ff8ce2a44d2ce4d918b1444029f2e5045c4c91fe8c46b83->leave($__internal_bc8cb30b0be3a5d65ff8ce2a44d2ce4d918b1444029f2e5045c4c91fe8c46b83_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_report.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  60 => 22,  56 => 21,  35 => 2,  23 => 1,);
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
