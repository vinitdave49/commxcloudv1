<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig */
class __TwigTemplate_3687571afceda265103c1b751916258e9803251e70bb809e0e6bdc0bf80f49aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_filter.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'div' => array($this, 'block_div'),
            'button' => array($this, 'block_button'),
            'reportcontainer' => array($this, 'block_reportcontainer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle:Supervisor:base_filter.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3f9a62ee4c576335026df1f4ac08fe7db4e45a7320a334709bfa3690e99a842 = $this->env->getExtension("native_profiler");
        $__internal_e3f9a62ee4c576335026df1f4ac08fe7db4e45a7320a334709bfa3690e99a842->enter($__internal_e3f9a62ee4c576335026df1f4ac08fe7db4e45a7320a334709bfa3690e99a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f9a62ee4c576335026df1f4ac08fe7db4e45a7320a334709bfa3690e99a842->leave($__internal_e3f9a62ee4c576335026df1f4ac08fe7db4e45a7320a334709bfa3690e99a842_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_76f561b3e7f4c0af97abe6fe60bac3270eb3832569a530f97671d839f51815ae = $this->env->getExtension("native_profiler");
        $__internal_76f561b3e7f4c0af97abe6fe60bac3270eb3832569a530f97671d839f51815ae->enter($__internal_76f561b3e7f4c0af97abe6fe60bac3270eb3832569a530f97671d839f51815ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical Activity Duration Report";
        
        $__internal_76f561b3e7f4c0af97abe6fe60bac3270eb3832569a530f97671d839f51815ae->leave($__internal_76f561b3e7f4c0af97abe6fe60bac3270eb3832569a530f97671d839f51815ae_prof);

    }

    // line 3
    public function block_div($context, array $blocks = array())
    {
        $__internal_2963dc9703d6b3d279777e9ad38cfeb6945abe07cb6c50e3d99d07f81f7ab4d3 = $this->env->getExtension("native_profiler");
        $__internal_2963dc9703d6b3d279777e9ad38cfeb6945abe07cb6c50e3d99d07f81f7ab4d3->enter($__internal_2963dc9703d6b3d279777e9ad38cfeb6945abe07cb6c50e3d99d07f81f7ab4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        echo "                                
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label>Worker Name</label>
            <select id=\"worker\" class=\"form-control\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workers"]) ? $context["workers"] : $this->getContext($context, "workers")));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "sid", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "friendly_name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </select>
        </div>                                
    </div>
";
        
        $__internal_2963dc9703d6b3d279777e9ad38cfeb6945abe07cb6c50e3d99d07f81f7ab4d3->leave($__internal_2963dc9703d6b3d279777e9ad38cfeb6945abe07cb6c50e3d99d07f81f7ab4d3_prof);

    }

    // line 15
    public function block_button($context, array $blocks = array())
    {
        $__internal_3075844d080ed6caa9cd2943cc8f39688cfb4d9e7d5c09199eac5059d3347d5e = $this->env->getExtension("native_profiler");
        $__internal_3075844d080ed6caa9cd2943cc8f39688cfb4d9e7d5c09199eac5059d3347d5e->enter($__internal_3075844d080ed6caa9cd2943cc8f39688cfb4d9e7d5c09199eac5059d3347d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button"));

        // line 16
        echo "<div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div> 
    <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\" >Run Report</button>
";
        
        $__internal_3075844d080ed6caa9cd2943cc8f39688cfb4d9e7d5c09199eac5059d3347d5e->leave($__internal_3075844d080ed6caa9cd2943cc8f39688cfb4d9e7d5c09199eac5059d3347d5e_prof);

    }

    // line 19
    public function block_reportcontainer($context, array $blocks = array())
    {
        $__internal_e4bf6999dfc31da8a316160d9914865655c6856fe4d29ec702fa4dbd3675f5e1 = $this->env->getExtension("native_profiler");
        $__internal_e4bf6999dfc31da8a316160d9914865655c6856fe4d29ec702fa4dbd3675f5e1->enter($__internal_e4bf6999dfc31da8a316160d9914865655c6856fe4d29ec702fa4dbd3675f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportcontainer"));

        // line 20
        echo "<div class=\"box-body\" id=\"reportcontainer\">
    
</div>
";
        
        $__internal_e4bf6999dfc31da8a316160d9914865655c6856fe4d29ec702fa4dbd3675f5e1->leave($__internal_e4bf6999dfc31da8a316160d9914865655c6856fe4d29ec702fa4dbd3675f5e1_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_765a269cba552c9ea680fdc1fec915b48467ca41023b6faea62f0aae460b759a = $this->env->getExtension("native_profiler");
        $__internal_765a269cba552c9ea680fdc1fec915b48467ca41023b6faea62f0aae460b759a->enter($__internal_765a269cba552c9ea680fdc1fec915b48467ca41023b6faea62f0aae460b759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "<script type=\"text/javascript\">
    var jsonDateData = {};

    \$('#runreport').click(function(){
  \$(\"#loadingIMG\").css(\"display\", \"block\");
        if(jsonDateData['startdatetime'] && jsonDateData['enddatetime']){
            //alert('StartDateTime: '+jsonDateData['startdatetime']);
            \$(\"#alertbox\").hide();
            \$('.form-control').each(function()
                {
                   var key = \$(this).attr('id');
                   jsonDateData[key] =\$(this).val();
               }
            );
            //console.log(jsonDateData);
            \$('#reportcontainer').load('";
        // line 40
        echo $this->env->getExtension('routing')->getPath("load_ht_activityduration_report");
        echo "', jsonDateData), function( response, status, xhr ) 
                {
                    if ( status == \"error\" ) 
                    {
                        var msg = \"Sorry but there was an error: \";
                        console.log( msg + xhr.status + \" \" + xhr.statusText );
                         \$(\"#loadingIMG\").css(\"display\", \"none\"); 
                    }
                }    
        }else{
            \$(\"#alertbox\").show();
            \$(\"#loadingIMG\").css(\"display\", \"none\");
        }
    });
</script> 
";
        
        $__internal_765a269cba552c9ea680fdc1fec915b48467ca41023b6faea62f0aae460b759a->leave($__internal_765a269cba552c9ea680fdc1fec915b48467ca41023b6faea62f0aae460b759a_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  124 => 25,  118 => 24,  108 => 20,  102 => 19,  93 => 16,  87 => 15,  77 => 11,  66 => 9,  62 => 8,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_filter.html.twig' %}*/
/* {% block title %}Historical Activity Duration Report{% endblock %}*/
/* {% block div %}                                */
/*     <div class="col-md-3">*/
/*         <div class="form-group">*/
/*             <label>Worker Name</label>*/
/*             <select id="worker" class="form-control">*/
/*                 {% for worker in workers %}*/
/*                     <option value="{{ worker.sid }}"> {{ worker.friendly_name }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>                                */
/*     </div>*/
/* {% endblock %}*/
/* {% block button %}*/
/* <div id="loadingIMG" class="loading" runat="server" style="display:none;">Loading&#8230;</div> */
/*     <button type="button" id="runreport" name="runreport" class="btn btn-block btn-primary" >Run Report</button>*/
/* {% endblock %}*/
/* {% block reportcontainer %}*/
/* <div class="box-body" id="reportcontainer">*/
/*     */
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script type="text/javascript">*/
/*     var jsonDateData = {};*/
/* */
/*     $('#runreport').click(function(){*/
/*   $("#loadingIMG").css("display", "block");*/
/*         if(jsonDateData['startdatetime'] && jsonDateData['enddatetime']){*/
/*             //alert('StartDateTime: '+jsonDateData['startdatetime']);*/
/*             $("#alertbox").hide();*/
/*             $('.form-control').each(function()*/
/*                 {*/
/*                    var key = $(this).attr('id');*/
/*                    jsonDateData[key] =$(this).val();*/
/*                }*/
/*             );*/
/*             //console.log(jsonDateData);*/
/*             $('#reportcontainer').load('{{ path('load_ht_activityduration_report') }}', jsonDateData), function( response, status, xhr ) */
/*                 {*/
/*                     if ( status == "error" ) */
/*                     {*/
/*                         var msg = "Sorry but there was an error: ";*/
/*                         console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                          $("#loadingIMG").css("display", "none"); */
/*                     }*/
/*                 }    */
/*         }else{*/
/*             $("#alertbox").show();*/
/*             $("#loadingIMG").css("display", "none");*/
/*         }*/
/*     });*/
/* </script> */
/* {% endblock %}*/
