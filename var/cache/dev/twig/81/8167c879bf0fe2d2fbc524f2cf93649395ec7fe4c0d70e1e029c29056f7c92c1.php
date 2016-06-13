<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_report.html.twig */
class __TwigTemplate_bece6c87aee6d2f449136680029fce500062eedb93d5711381fe42aa96d8ae18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_report.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_report.html.twig", 1);
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
        $__internal_424f47e2584587ad7703d723e6946d99138c9b1789e7bb1be9100094d7d2985d = $this->env->getExtension("native_profiler");
        $__internal_424f47e2584587ad7703d723e6946d99138c9b1789e7bb1be9100094d7d2985d->enter($__internal_424f47e2584587ad7703d723e6946d99138c9b1789e7bb1be9100094d7d2985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424f47e2584587ad7703d723e6946d99138c9b1789e7bb1be9100094d7d2985d->leave($__internal_424f47e2584587ad7703d723e6946d99138c9b1789e7bb1be9100094d7d2985d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_395e688753097a304f157f2e0fcb51288baf6d72d19c9babd702a417485d28ee = $this->env->getExtension("native_profiler");
        $__internal_395e688753097a304f157f2e0fcb51288baf6d72d19c9babd702a417485d28ee->enter($__internal_395e688753097a304f157f2e0fcb51288baf6d72d19c9babd702a417485d28ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical Activity Duration Report";
        
        $__internal_395e688753097a304f157f2e0fcb51288baf6d72d19c9babd702a417485d28ee->leave($__internal_395e688753097a304f157f2e0fcb51288baf6d72d19c9babd702a417485d28ee_prof);

    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        $__internal_aa995317e45ebe68354bed245a53f0cb8b5aba04b5934abd16e1cdc6f3300f84 = $this->env->getExtension("native_profiler");
        $__internal_aa995317e45ebe68354bed245a53f0cb8b5aba04b5934abd16e1cdc6f3300f84->enter($__internal_aa995317e45ebe68354bed245a53f0cb8b5aba04b5934abd16e1cdc6f3300f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        echo "StartDate: ";
        echo twig_escape_filter($this->env, (isset($context["startdate"]) ? $context["startdate"] : $this->getContext($context, "startdate")), "html", null, true);
        echo "  <br> EndDate: ";
        echo twig_escape_filter($this->env, (isset($context["enddate"]) ? $context["enddate"] : $this->getContext($context, "enddate")), "html", null, true);
        echo " <br> Agent: ";
        echo twig_escape_filter($this->env, (isset($context["workername"]) ? $context["workername"] : $this->getContext($context, "workername")), "html", null, true);
        
        $__internal_aa995317e45ebe68354bed245a53f0cb8b5aba04b5934abd16e1cdc6f3300f84->leave($__internal_aa995317e45ebe68354bed245a53f0cb8b5aba04b5934abd16e1cdc6f3300f84_prof);

    }

    // line 4
    public function block_div($context, array $blocks = array())
    {
        $__internal_57b4f34321d6742e904ffaceb5f927a7d1574f78e7bb797970583f87c50892d0 = $this->env->getExtension("native_profiler");
        $__internal_57b4f34321d6742e904ffaceb5f927a7d1574f78e7bb797970583f87c50892d0->enter($__internal_57b4f34321d6742e904ffaceb5f927a7d1574f78e7bb797970583f87c50892d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table id=\"table\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"table_info\">
                <thead>
                    <tr role=\"row\">
                        <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"DateTime: activate to sort column descending\">DateTime</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Worker Name: activate to sort column ascending\">Worker Name</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Activity Name: activate to sort column ascending\">Activity Name</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Min. Duration: activate to sort column ascending\">Min. Duration</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Max. Duration: activate to sort column ascending\">Max. Duration</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Avg. Duration: activate to sort column ascending\">Avg. Duration</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"table\" rowspan=\"1\" colspan=\"1\" aria-label=\"Total Duration: activate to sort column ascending\">Total Duration</th>
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
            echo twig_escape_filter($this->env, (isset($context["workername"]) ? $context["workername"] : $this->getContext($context, "workername")), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "activityname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getMinDuration", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getMaxDuration", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getAvgDuration", array(), "method"), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "getTotalDuration", array(), "method"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_57b4f34321d6742e904ffaceb5f927a7d1574f78e7bb797970583f87c50892d0->leave($__internal_57b4f34321d6742e904ffaceb5f927a7d1574f78e7bb797970583f87c50892d0_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ed1fcac1b5a99a850fd1065f7874cffc3487c1c9afe3bef7df2496df8e416a1 = $this->env->getExtension("native_profiler");
        $__internal_0ed1fcac1b5a99a850fd1065f7874cffc3487c1c9afe3bef7df2496df8e416a1->enter($__internal_0ed1fcac1b5a99a850fd1065f7874cffc3487c1c9afe3bef7df2496df8e416a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
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
        
        $__internal_0ed1fcac1b5a99a850fd1065f7874cffc3487c1c9afe3bef7df2496df8e416a1->leave($__internal_0ed1fcac1b5a99a850fd1065f7874cffc3487c1c9afe3bef7df2496df8e416a1_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  140 => 36,  129 => 31,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  93 => 21,  89 => 20,  72 => 5,  66 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_report.html.twig' %}*/
/* {% block title %}Historical Activity Duration Report{% endblock %}*/
/* {% block input %}StartDate: {{ startdate }}  <br> EndDate: {{ enddate }} <br> Agent: {{ workername }}{% endblock %}*/
/* {% block div %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/*             <table id="table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">*/
/*                 <thead>*/
/*                     <tr role="row">*/
/*                         <th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="DateTime: activate to sort column descending">DateTime</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Worker Name: activate to sort column ascending">Worker Name</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Activity Name: activate to sort column ascending">Activity Name</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Min. Duration: activate to sort column ascending">Min. Duration</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Max. Duration: activate to sort column ascending">Max. Duration</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Avg. Duration: activate to sort column ascending">Avg. Duration</th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Total Duration: activate to sort column ascending">Total Duration</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for data in htdata %}*/
/*                         <tr role="row">*/
/*                             <td class="sorting_1">{{ data.getStartTime()|date('Y-m-d H:i') }}</td>*/
/*                             <td>{{ workername }}</td>*/
/*                             <td>{{ data.activityname }}</td>*/
/*                             <td>{{ data.getMinDuration()  }}</td>*/
/*                             <td>{{ data.getMaxDuration()  }}</td>*/
/*                             <td>{{ data.getAvgDuration()  }}</td>*/
/*                             <td>{{ data.getTotalDuration()  }}</td>*/
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
/*      */
/*      $( document ).ready(function() {*/
/*      console.log( "ready!" );*/
/*       $("#loadingIMG").css("display", "none"); */
/*  });*/
/*  </script>*/
/*  {% endblock %}*/
