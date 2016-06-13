<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_filter.html.twig */
class __TwigTemplate_268bdf6214c173b34b2ac4590738556143c9ef7d54c211b302722189e5a5ec4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_filter.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_filter.html.twig", 1);
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
        $__internal_937bb41b171bd76bb5d1a4a7b87548f8d7681139a248588047c5f27f2822fc1e = $this->env->getExtension("native_profiler");
        $__internal_937bb41b171bd76bb5d1a4a7b87548f8d7681139a248588047c5f27f2822fc1e->enter($__internal_937bb41b171bd76bb5d1a4a7b87548f8d7681139a248588047c5f27f2822fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_937bb41b171bd76bb5d1a4a7b87548f8d7681139a248588047c5f27f2822fc1e->leave($__internal_937bb41b171bd76bb5d1a4a7b87548f8d7681139a248588047c5f27f2822fc1e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_17266c3cd1dfb5e7d3909c6687fb8a6fcdd18be8157381e33f6f389f46e61222 = $this->env->getExtension("native_profiler");
        $__internal_17266c3cd1dfb5e7d3909c6687fb8a6fcdd18be8157381e33f6f389f46e61222->enter($__internal_17266c3cd1dfb5e7d3909c6687fb8a6fcdd18be8157381e33f6f389f46e61222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical Workflow Report";
        
        $__internal_17266c3cd1dfb5e7d3909c6687fb8a6fcdd18be8157381e33f6f389f46e61222->leave($__internal_17266c3cd1dfb5e7d3909c6687fb8a6fcdd18be8157381e33f6f389f46e61222_prof);

    }

    // line 3
    public function block_div($context, array $blocks = array())
    {
        $__internal_05bd883f1d3ac90fdeee738e77506f15c38212eb6b6b4cf96b1bb98d605f01a8 = $this->env->getExtension("native_profiler");
        $__internal_05bd883f1d3ac90fdeee738e77506f15c38212eb6b6b4cf96b1bb98d605f01a8->enter($__internal_05bd883f1d3ac90fdeee738e77506f15c38212eb6b6b4cf96b1bb98d605f01a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 4
        echo "    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label>Workflow Name</label>
            <select id=\"workflow\" class=\"form-control\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workflows"]) ? $context["workflows"] : $this->getContext($context, "workflows")));
        foreach ($context['_seq'] as $context["_key"] => $context["workflow"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["workflow"], "sid", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["workflow"], "friendly_name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workflow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </select>
        </div>                                
    </div>
";
        
        $__internal_05bd883f1d3ac90fdeee738e77506f15c38212eb6b6b4cf96b1bb98d605f01a8->leave($__internal_05bd883f1d3ac90fdeee738e77506f15c38212eb6b6b4cf96b1bb98d605f01a8_prof);

    }

    // line 15
    public function block_button($context, array $blocks = array())
    {
        $__internal_d80a7da34a0b7fbde467376dfbf9d2af954b5461bbe3acad9e1b341bd13667f4 = $this->env->getExtension("native_profiler");
        $__internal_d80a7da34a0b7fbde467376dfbf9d2af954b5461bbe3acad9e1b341bd13667f4->enter($__internal_d80a7da34a0b7fbde467376dfbf9d2af954b5461bbe3acad9e1b341bd13667f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button"));

        // line 16
        echo "<div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div>   
    <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\" >Run Report</button>
";
        
        $__internal_d80a7da34a0b7fbde467376dfbf9d2af954b5461bbe3acad9e1b341bd13667f4->leave($__internal_d80a7da34a0b7fbde467376dfbf9d2af954b5461bbe3acad9e1b341bd13667f4_prof);

    }

    // line 19
    public function block_reportcontainer($context, array $blocks = array())
    {
        $__internal_2a116930792ae5122deede8bd96022f4a5a7539d665d26b2928fbaff4ef34416 = $this->env->getExtension("native_profiler");
        $__internal_2a116930792ae5122deede8bd96022f4a5a7539d665d26b2928fbaff4ef34416->enter($__internal_2a116930792ae5122deede8bd96022f4a5a7539d665d26b2928fbaff4ef34416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportcontainer"));

        // line 20
        echo "<div class=\"box-body\" id=\"reportcontainer\">
    
</div>
";
        
        $__internal_2a116930792ae5122deede8bd96022f4a5a7539d665d26b2928fbaff4ef34416->leave($__internal_2a116930792ae5122deede8bd96022f4a5a7539d665d26b2928fbaff4ef34416_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8100000a55d45e290acc1ab2e299e46efa964fe1530cedb06fad9c210ff1eae = $this->env->getExtension("native_profiler");
        $__internal_e8100000a55d45e290acc1ab2e299e46efa964fe1530cedb06fad9c210ff1eae->enter($__internal_e8100000a55d45e290acc1ab2e299e46efa964fe1530cedb06fad9c210ff1eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
<script type=\"text/javascript\">
    var jsonDateData = {};
    //alert(EndDateTime + StartDateTime);
    \$('#runreport').click(function(){
         \$(\"#loadingIMG\").css(\"display\", \"block\");
        if (jsonDateData['startdatetime'] && jsonDateData['enddatetime']){
            \$('.form-control').each(function(){
\t               var key = \$(this).attr('id');
\t               jsonDateData[key] =\$(this).val();
\t           });
            console.log(jsonDateData);
            \$('#reportcontainer').load('";
        // line 36
        echo $this->env->getExtension('routing')->getPath("load_ht_workflow_report");
        echo "', jsonDateData), function( response, status, xhr ) 
            {
                if ( status == \"error\" ) 
                {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }            
        }else{
            \$('#alertbox').show();
            \$(\"#loadingIMG\").css(\"display\", \"none\");
        }
    });
</script>
";
        
        $__internal_e8100000a55d45e290acc1ab2e299e46efa964fe1530cedb06fad9c210ff1eae->leave($__internal_e8100000a55d45e290acc1ab2e299e46efa964fe1530cedb06fad9c210ff1eae_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_workflow_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  118 => 24,  108 => 20,  102 => 19,  93 => 16,  87 => 15,  77 => 11,  66 => 9,  62 => 8,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_filter.html.twig' %}*/
/* {% block title %}Historical Workflow Report{% endblock %}*/
/* {% block div %}*/
/*     <div class="col-md-3">*/
/*         <div class="form-group">*/
/*             <label>Workflow Name</label>*/
/*             <select id="workflow" class="form-control">*/
/*                 {% for workflow in workflows %}*/
/*                     <option value="{{ workflow.sid }}"> {{ workflow.friendly_name }}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>                                */
/*     </div>*/
/* {% endblock %}*/
/* {% block button %}*/
/* <div id="loadingIMG" class="loading" runat="server" style="display:none;">Loading&#8230;</div>   */
/*     <button type="button" id="runreport" name="runreport" class="btn btn-block btn-primary" >Run Report</button>*/
/* {% endblock %}*/
/* {% block reportcontainer %}*/
/* <div class="box-body" id="reportcontainer">*/
/*     */
/* </div>*/
/* {% endblock %}*/
/* {% block javascripts %}    */
/* <script type="text/javascript">*/
/*     var jsonDateData = {};*/
/*     //alert(EndDateTime + StartDateTime);*/
/*     $('#runreport').click(function(){*/
/*          $("#loadingIMG").css("display", "block");*/
/*         if (jsonDateData['startdatetime'] && jsonDateData['enddatetime']){*/
/*             $('.form-control').each(function(){*/
/* 	               var key = $(this).attr('id');*/
/* 	               jsonDateData[key] =$(this).val();*/
/* 	           });*/
/*             console.log(jsonDateData);*/
/*             $('#reportcontainer').load('{{ path('load_ht_workflow_report') }}', jsonDateData), function( response, status, xhr ) */
/*             {*/
/*                 if ( status == "error" ) */
/*                 {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }            */
/*         }else{*/
/*             $('#alertbox').show();*/
/*             $("#loadingIMG").css("display", "none");*/
/*         }*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
