<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig */
class __TwigTemplate_d77d5a1224ee5b0346d390930a12ea81e70ae543ce7b0f1fb478bec30e624dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_report.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'input' => array($this, 'block_input'),
            'div' => array($this, 'block_div'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle:Supervisor:base_report.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Historical Task Queue Report";
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        echo "StartDate: ";
        echo twig_escape_filter($this->env, (isset($context["starttime"]) ? $context["starttime"] : null), "html", null, true);
        echo "  <br> EndDate: ";
        echo twig_escape_filter($this->env, (isset($context["endtime"]) ? $context["endtime"] : null), "html", null, true);
        echo " <br> Task Queue Name: ";
        echo twig_escape_filter($this->env, (isset($context["taskqueuename"]) ? $context["taskqueuename"] : null), "html", null, true);
    }

    // line 4
    public function block_div($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table id=\"table\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
                <thead>
                    <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"DateTime: activate to sort column descending\">DateTime</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Taskqueue Name: activate to sort column ascending\">Taskqueue Name</th>                        
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Entered: activate to sort column ascending\">Tasks Entered</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Cancelled: activate to sort column ascending\">Tasks Cancelled</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Deleted: activate to sort column ascending\">Tasks Deleted</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Moved: activate to sort column ascending\">Tasks Moved</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Avg. Task Acceptance Time: activate to sort column ascending\">Avg. Task Acceptance Time</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["htdata"]) ? $context["htdata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "                        <tr role=\"row\">
                            <td class=\"sorting_1\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "getStartTime", array(), "method"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["taskqueuename"]) ? $context["taskqueuename"] : null), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskEntered", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskCanceled", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskDeleted", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskMoved", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAvgTaskAcceptanceTime", array(), "method"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                </tbody>
            </table>
        </div>
    </div>
";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
<script type=\"text/javascript\">
    \$('#table').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    
    \$( document ).ready(function() {
    console.log( \"ready!\" );
     \$(\"#loadingIMG\").css(\"display\", \"none\"); 
 });
 </script>
 ";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  108 => 31,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  72 => 21,  68 => 20,  51 => 5,  48 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_report.html.twig' %}*/
/* {% block title %}Historical Task Queue Report{% endblock %}*/
/* {% block input %}StartDate: {{ starttime }}  <br> EndDate: {{ endtime }} <br> Task Queue Name: {{ taskqueuename }}{% endblock %}*/
/* {% block div %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/*                 <thead>*/
/*                     <tr role="row">*/
/*                         <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="DateTime: activate to sort column descending">DateTime</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Taskqueue Name: activate to sort column ascending">Taskqueue Name</th>                        */
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Entered: activate to sort column ascending">Tasks Entered</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Cancelled: activate to sort column ascending">Tasks Cancelled</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Deleted: activate to sort column ascending">Tasks Deleted</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Moved: activate to sort column ascending">Tasks Moved</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Avg. Task Acceptance Time: activate to sort column ascending">Avg. Task Acceptance Time</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for data in htdata %}*/
/*                         <tr role="row">*/
/*                             <td class="sorting_1">{{ data.getStartTime()|date('Y-m-d H:i') }}</td>*/
/*                             <td>{{ taskqueuename }}</td>*/
/*                             <td>{{ data.getTaskEntered() }}</td>*/
/*                             <td>{{ data.getTaskCanceled() }}</td>*/
/*                             <td>{{ data.getTaskDeleted() }}</td>*/
/*                             <td>{{ data.getTaskMoved() }}</td>*/
/*                             <td>{{ data.getAvgTaskAcceptanceTime() }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts%}    */
/* <script type="text/javascript">*/
/*     $('#table').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": true*/
/*     });*/
/*     */
/*     $( document ).ready(function() {*/
/*     console.log( "ready!" );*/
/*      $("#loadingIMG").css("display", "none"); */
/*  });*/
/*  </script>*/
/*  {% endblock %}*/
