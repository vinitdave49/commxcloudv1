<?php

/* CommcloudVoiceBundle:Agent:agentlist.html.twig */
class __TwigTemplate_f16e0d5bf0e4e19940d1ae004597612d1f30e9b4ddfb892c60681c40d50dbf4b extends Twig_Template
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
        $__internal_b8a259977d5d7c0455189768f476f073ed7be30a5ffc20b861d49bc1ff3e8a41 = $this->env->getExtension("native_profiler");
        $__internal_b8a259977d5d7c0455189768f476f073ed7be30a5ffc20b861d49bc1ff3e8a41->enter($__internal_b8a259977d5d7c0455189768f476f073ed7be30a5ffc20b861d49bc1ff3e8a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Agent:agentlist.html.twig"));

        // line 1
        echo "<section class=\"content\">
\t<div class=\"row\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3 class=\"box-title\">Agent List</h3>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<table id=\"agentTable\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"agentTable_info\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"agentTable\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Name: activate to sort column descending\">Name</th>
\t\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"agentTable\" rowspan=\"1\" colspan=\"1\" aria-label=\"Skills: activate to sort column ascending\">Skills</th>
\t\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"agentTable\" rowspan=\"1\" colspan=\"1\" aria-label=\"Activity Status: activate to sort column ascending\">Status</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>\t
\t\t\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workers"]) ? $context["workers"] : $this->getContext($context, "workers")));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 19
            echo "\t\t\t\t\t\t\t<tr role=\"row\">
\t\t\t\t\t\t\t\t<td class=\"sorting_1\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "friendly_name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "attributes", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["worker"], "activity_name", array()) == "Idle")) {
                // line 23
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "activity_name", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 24
$context["worker"], "activity_name", array()) == "Offline")) {
                // line 25
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "activity_name", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t\t\t<td><span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "activity_name", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
\t\$('#agentTable').DataTable();
</script>

";
        
        $__internal_b8a259977d5d7c0455189768f476f073ed7be30a5ffc20b861d49bc1ff3e8a41->leave($__internal_b8a259977d5d7c0455189768f476f073ed7be30a5ffc20b861d49bc1ff3e8a41_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:agentlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  77 => 29,  71 => 27,  65 => 25,  63 => 24,  58 => 23,  56 => 22,  52 => 21,  48 => 20,  45 => 19,  41 => 18,  22 => 1,);
    }
}
/* <section class="content">*/
/* 	<div class="row">*/
/* 		<div class="box box-primary">*/
/* 			<div class="box-header">*/
/* 				<h3 class="box-title">Agent List</h3>*/
/* 			</div>*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<table id="agentTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="agentTable_info">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th class="sorting_asc" tabindex="0" aria-controls="agentTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>*/
/* 								<th class="sorting" tabindex="0" aria-controls="agentTable" rowspan="1" colspan="1" aria-label="Skills: activate to sort column ascending">Skills</th>*/
/* 								<th class="sorting" tabindex="0" aria-controls="agentTable" rowspan="1" colspan="1" aria-label="Activity Status: activate to sort column ascending">Status</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>	*/
/* 							{% for worker in workers %}*/
/* 							<tr role="row">*/
/* 								<td class="sorting_1">{{ worker.friendly_name }}</td>*/
/* 								<td>{{ worker.attributes }}</td>*/
/* 								{% if worker.activity_name == "Idle" %}*/
/* 								<td><span class="label label-success">{{ worker.activity_name }}</span></td>*/
/* 								{% elseif worker.activity_name == "Offline" %}*/
/* 								<td><span class="label label-danger">{{ worker.activity_name }}</span></td>*/
/* 								{% else %}*/
/* 								<td><span class="label label-warning">{{ worker.activity_name }}</span></td>*/
/* 								{% endif %}*/
/* 							</tr>*/
/* 							{% endfor %}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script>*/
/* 	$('#agentTable').DataTable();*/
/* </script>*/
/* */
/* */
