<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig */
class __TwigTemplate_7c30aeb7424762a2b6cc1ac3d9e2fc084b8c9fe760b73ecad5cb8f6ae943b38e extends Twig_Template
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
        $__internal_c686bba9866ff85f60ed2119dc66e35787ba1ba0773096ffd0ec04ca2c80843c = $this->env->getExtension("native_profiler");
        $__internal_c686bba9866ff85f60ed2119dc66e35787ba1ba0773096ffd0ec04ca2c80843c->enter($__internal_c686bba9866ff85f60ed2119dc66e35787ba1ba0773096ffd0ec04ca2c80843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c686bba9866ff85f60ed2119dc66e35787ba1ba0773096ffd0ec04ca2c80843c->leave($__internal_c686bba9866ff85f60ed2119dc66e35787ba1ba0773096ffd0ec04ca2c80843c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ad06249a554ce846cc3b827ce2ee39582b07990f536dba825ba092b1e056fc1 = $this->env->getExtension("native_profiler");
        $__internal_2ad06249a554ce846cc3b827ce2ee39582b07990f536dba825ba092b1e056fc1->enter($__internal_2ad06249a554ce846cc3b827ce2ee39582b07990f536dba825ba092b1e056fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical Task Queue Report";
        
        $__internal_2ad06249a554ce846cc3b827ce2ee39582b07990f536dba825ba092b1e056fc1->leave($__internal_2ad06249a554ce846cc3b827ce2ee39582b07990f536dba825ba092b1e056fc1_prof);

    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        $__internal_8ee722c8e01425274d8e022f99cb6d3f3ae28d79b1df5f70923f76422d1069ed = $this->env->getExtension("native_profiler");
        $__internal_8ee722c8e01425274d8e022f99cb6d3f3ae28d79b1df5f70923f76422d1069ed->enter($__internal_8ee722c8e01425274d8e022f99cb6d3f3ae28d79b1df5f70923f76422d1069ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        echo "StartDate: ";
        echo twig_escape_filter($this->env, (isset($context["starttime"]) ? $context["starttime"] : $this->getContext($context, "starttime")), "html", null, true);
        echo "  <br> EndDate: ";
        echo twig_escape_filter($this->env, (isset($context["endtime"]) ? $context["endtime"] : $this->getContext($context, "endtime")), "html", null, true);
        echo " <br> Task Queue Name: ";
        echo twig_escape_filter($this->env, (isset($context["taskqueuename"]) ? $context["taskqueuename"] : $this->getContext($context, "taskqueuename")), "html", null, true);
        
        $__internal_8ee722c8e01425274d8e022f99cb6d3f3ae28d79b1df5f70923f76422d1069ed->leave($__internal_8ee722c8e01425274d8e022f99cb6d3f3ae28d79b1df5f70923f76422d1069ed_prof);

    }

    // line 4
    public function block_div($context, array $blocks = array())
    {
        $__internal_0956bce91094fd4f729178e72c47fa5421a14ea66f3af3c9ed499cd3e4af002c = $this->env->getExtension("native_profiler");
        $__internal_0956bce91094fd4f729178e72c47fa5421a14ea66f3af3c9ed499cd3e4af002c->enter($__internal_0956bce91094fd4f729178e72c47fa5421a14ea66f3af3c9ed499cd3e4af002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["htdata"]) ? $context["htdata"] : $this->getContext($context, "htdata")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "                        <tr role=\"row\">
                            <td class=\"sorting_1\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "getStartTime", array(), "method"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["taskqueuename"]) ? $context["taskqueuename"] : $this->getContext($context, "taskqueuename")), "html", null, true);
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
        
        $__internal_0956bce91094fd4f729178e72c47fa5421a14ea66f3af3c9ed499cd3e4af002c->leave($__internal_0956bce91094fd4f729178e72c47fa5421a14ea66f3af3c9ed499cd3e4af002c_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_578486d91ea3a89e98eaa2f2be379f8a3392b87f5057e0ff65d542645fb09d40 = $this->env->getExtension("native_profiler");
        $__internal_578486d91ea3a89e98eaa2f2be379f8a3392b87f5057e0ff65d542645fb09d40->enter($__internal_578486d91ea3a89e98eaa2f2be379f8a3392b87f5057e0ff65d542645fb09d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_578486d91ea3a89e98eaa2f2be379f8a3392b87f5057e0ff65d542645fb09d40->leave($__internal_578486d91ea3a89e98eaa2f2be379f8a3392b87f5057e0ff65d542645fb09d40_prof);

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
        return array (  141 => 37,  129 => 31,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  93 => 21,  89 => 20,  72 => 5,  66 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
