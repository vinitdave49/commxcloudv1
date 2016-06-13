<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_activityduration_filter.html.twig */
class __TwigTemplate_eafe9811d34d20f9e82a469683d19852adb3f661be2c3f75ce9051b4b1b57136 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Historical Activity Duration Report";
    }

    // line 3
    public function block_div($context, array $blocks = array())
    {
        echo "                                
    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label>Worker Name</label>
            <select id=\"worker\" class=\"form-control\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workers"]) ? $context["workers"] : null));
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
    }

    // line 15
    public function block_button($context, array $blocks = array())
    {
        // line 16
        echo "<div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div> 
    <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\" >Run Report</button>
";
    }

    // line 19
    public function block_reportcontainer($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"box-body\" id=\"reportcontainer\">
    
</div>
";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  108 => 40,  91 => 25,  88 => 24,  81 => 20,  78 => 19,  72 => 16,  69 => 15,  62 => 11,  51 => 9,  47 => 8,  38 => 3,  32 => 2,  11 => 1,);
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
