<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_report.html.twig */
class __TwigTemplate_1c714d27b0f2932ecfb4fe14109087cc48931bbd261500c995017974872e7f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_report.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_report.html.twig", 1);
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
        $__internal_ea2b45dfe0348a7575854bbd8e5cc6da304777e39192fbf1f4d71148ed611a3e = $this->env->getExtension("native_profiler");
        $__internal_ea2b45dfe0348a7575854bbd8e5cc6da304777e39192fbf1f4d71148ed611a3e->enter($__internal_ea2b45dfe0348a7575854bbd8e5cc6da304777e39192fbf1f4d71148ed611a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2b45dfe0348a7575854bbd8e5cc6da304777e39192fbf1f4d71148ed611a3e->leave($__internal_ea2b45dfe0348a7575854bbd8e5cc6da304777e39192fbf1f4d71148ed611a3e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af09617c183555119f2a5e92622b991193ff619da4479cc6924cd35a609195f6 = $this->env->getExtension("native_profiler");
        $__internal_af09617c183555119f2a5e92622b991193ff619da4479cc6924cd35a609195f6->enter($__internal_af09617c183555119f2a5e92622b991193ff619da4479cc6924cd35a609195f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical Workflow Report";
        
        $__internal_af09617c183555119f2a5e92622b991193ff619da4479cc6924cd35a609195f6->leave($__internal_af09617c183555119f2a5e92622b991193ff619da4479cc6924cd35a609195f6_prof);

    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        $__internal_fa5908cfddec012f9fd4e7cb94f09dc2abfc573b2d7a6185850e2246b62b9dc6 = $this->env->getExtension("native_profiler");
        $__internal_fa5908cfddec012f9fd4e7cb94f09dc2abfc573b2d7a6185850e2246b62b9dc6->enter($__internal_fa5908cfddec012f9fd4e7cb94f09dc2abfc573b2d7a6185850e2246b62b9dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        echo "StartDate: ";
        echo twig_escape_filter($this->env, (isset($context["startdate"]) ? $context["startdate"] : $this->getContext($context, "startdate")), "html", null, true);
        echo "  <br> EndDate: ";
        echo twig_escape_filter($this->env, (isset($context["enddate"]) ? $context["enddate"] : $this->getContext($context, "enddate")), "html", null, true);
        echo " <br> Workflow: ";
        echo twig_escape_filter($this->env, (isset($context["workflowname"]) ? $context["workflowname"] : $this->getContext($context, "workflowname")), "html", null, true);
        
        $__internal_fa5908cfddec012f9fd4e7cb94f09dc2abfc573b2d7a6185850e2246b62b9dc6->leave($__internal_fa5908cfddec012f9fd4e7cb94f09dc2abfc573b2d7a6185850e2246b62b9dc6_prof);

    }

    // line 4
    public function block_div($context, array $blocks = array())
    {
        $__internal_c92821d1943cf23645a7ba3af0139b93f3b58b07bda0cabe93b3d3640cac6fba = $this->env->getExtension("native_profiler");
        $__internal_c92821d1943cf23645a7ba3af0139b93f3b58b07bda0cabe93b3d3640cac6fba->enter($__internal_c92821d1943cf23645a7ba3af0139b93f3b58b07bda0cabe93b3d3640cac6fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table id=\"table\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
                <thead>
                    <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"DateTime: activate to sort column descending\">DateTime</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Workflow Name: activate to sort column ascending\">Workflow Name</th>                        
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Entered: activate to sort column ascending\">Tasks Entered</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Cancelled: activate to sort column ascending\">Tasks Cancelled</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Deleted: activate to sort column ascending\">Tasks Deleted</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Moved: activate to sort column ascending\">Tasks Moved</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Tasks Timed Out In Workflow: activate to sort column ascending\">Tasks Timed Out In Workflow</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Avg. Task Acceptance Time: activate to sort column ascending\">Avg. Task Acceptance Time</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["htdata"]) ? $context["htdata"] : $this->getContext($context, "htdata")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 22
            echo "                        <tr role=\"row\">
                            <td class=\"sorting_1\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "getStartTime", array(), "method"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["workflowname"]) ? $context["workflowname"] : $this->getContext($context, "workflowname")), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskEntered", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskCanceled", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskDeleted", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTaskMoved", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTasksTimedOutInWorkfow", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAvgTaskAcceptanceTime", array(), "method"), "html", null, true);
            echo "</td>                                                
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_c92821d1943cf23645a7ba3af0139b93f3b58b07bda0cabe93b3d3640cac6fba->leave($__internal_c92821d1943cf23645a7ba3af0139b93f3b58b07bda0cabe93b3d3640cac6fba_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41f73eb6bc4cfe30dfd7b6d15b5b98a7ca37513ec5286e6e1e1c885784442d32 = $this->env->getExtension("native_profiler");
        $__internal_41f73eb6bc4cfe30dfd7b6d15b5b98a7ca37513ec5286e6e1e1c885784442d32->enter($__internal_41f73eb6bc4cfe30dfd7b6d15b5b98a7ca37513ec5286e6e1e1c885784442d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "<script type=\"text/javascript\">
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
        
        $__internal_41f73eb6bc4cfe30dfd7b6d15b5b98a7ca37513ec5286e6e1e1c885784442d32->leave($__internal_41f73eb6bc4cfe30dfd7b6d15b5b98a7ca37513ec5286e6e1e1c885784442d32_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 39,  145 => 38,  134 => 33,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  94 => 22,  90 => 21,  72 => 5,  66 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_report.html.twig' %}*/
/* {% block title %}Historical Workflow Report{% endblock %}*/
/* {% block input %}StartDate: {{ startdate }}  <br> EndDate: {{ enddate }} <br> Workflow: {{ workflowname }}{% endblock %}*/
/* {% block div %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/*                 <thead>*/
/*                     <tr role="row">*/
/*                         <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="DateTime: activate to sort column descending">DateTime</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Workflow Name: activate to sort column ascending">Workflow Name</th>                        */
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Entered: activate to sort column ascending">Tasks Entered</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Cancelled: activate to sort column ascending">Tasks Cancelled</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Deleted: activate to sort column ascending">Tasks Deleted</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Moved: activate to sort column ascending">Tasks Moved</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Tasks Timed Out In Workflow: activate to sort column ascending">Tasks Timed Out In Workflow</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Avg. Task Acceptance Time: activate to sort column ascending">Avg. Task Acceptance Time</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for data in htdata %}*/
/*                         <tr role="row">*/
/*                             <td class="sorting_1">{{ data.getStartTime()|date('Y-m-d H:i') }}</td>*/
/*                             <td>{{ workflowname }}</td>*/
/*                             <td>{{ data.getTaskEntered() }}</td>*/
/*                             <td>{{ data.getTaskCanceled() }}</td>*/
/*                             <td>{{ data.getTaskDeleted() }}</td>*/
/*                             <td>{{ data.getTaskMoved() }}</td>*/
/*                             <td>{{ data.getTasksTimedOutInWorkfow() }}</td>*/
/*                             <td>{{ data.getAvgTaskAcceptanceTime() }}</td>                                                */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
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
/*  */
/*  </script>*/
/*  {% endblock %}*/
