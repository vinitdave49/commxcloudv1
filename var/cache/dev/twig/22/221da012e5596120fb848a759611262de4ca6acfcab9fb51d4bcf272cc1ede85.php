<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_filter.html.twig */
class __TwigTemplate_47a53affa81aaa1d752cdab00c333bb367b62878caaf3182345aad2a13d54866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_filter.html.twig", "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_filter.html.twig", 1);
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
        $__internal_279f79d42e6d89f24babd9812529f8b7f00e86222ff885c99142da953ae8db3d = $this->env->getExtension("native_profiler");
        $__internal_279f79d42e6d89f24babd9812529f8b7f00e86222ff885c99142da953ae8db3d->enter($__internal_279f79d42e6d89f24babd9812529f8b7f00e86222ff885c99142da953ae8db3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279f79d42e6d89f24babd9812529f8b7f00e86222ff885c99142da953ae8db3d->leave($__internal_279f79d42e6d89f24babd9812529f8b7f00e86222ff885c99142da953ae8db3d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd43478acf4306910eebad234d85508b6bc9c2cd673031fc5d9067cf85c18146 = $this->env->getExtension("native_profiler");
        $__internal_fd43478acf4306910eebad234d85508b6bc9c2cd673031fc5d9067cf85c18146->enter($__internal_fd43478acf4306910eebad234d85508b6bc9c2cd673031fc5d9067cf85c18146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Historical TaskQueue Report";
        
        $__internal_fd43478acf4306910eebad234d85508b6bc9c2cd673031fc5d9067cf85c18146->leave($__internal_fd43478acf4306910eebad234d85508b6bc9c2cd673031fc5d9067cf85c18146_prof);

    }

    // line 3
    public function block_div($context, array $blocks = array())
    {
        $__internal_9b9eda928282f72af325b80df5f8aa854258bdd74a28636bbe3443c6449ae0bf = $this->env->getExtension("native_profiler");
        $__internal_9b9eda928282f72af325b80df5f8aa854258bdd74a28636bbe3443c6449ae0bf->enter($__internal_9b9eda928282f72af325b80df5f8aa854258bdd74a28636bbe3443c6449ae0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 4
        echo "    <div class=\"col-md-3\">
        <div class=\"form-group\">
            <label>TaskQueue Name</label>
            <select id=\"taskqueue\" class=\"form-control\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taskqueues"]) ? $context["taskqueues"] : $this->getContext($context, "taskqueues")));
        foreach ($context['_seq'] as $context["_key"] => $context["taskqueue"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "sid", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "friendly_name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taskqueue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </select>
        </div>                                
    </div>
";
        
        $__internal_9b9eda928282f72af325b80df5f8aa854258bdd74a28636bbe3443c6449ae0bf->leave($__internal_9b9eda928282f72af325b80df5f8aa854258bdd74a28636bbe3443c6449ae0bf_prof);

    }

    // line 15
    public function block_button($context, array $blocks = array())
    {
        $__internal_3f0513b30bdc1f02b3c21f1af31432f3589aca94bc4f512e728a34c88ac45393 = $this->env->getExtension("native_profiler");
        $__internal_3f0513b30bdc1f02b3c21f1af31432f3589aca94bc4f512e728a34c88ac45393->enter($__internal_3f0513b30bdc1f02b3c21f1af31432f3589aca94bc4f512e728a34c88ac45393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button"));

        // line 16
        echo "<div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div>   
    <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\" >Run Report</button>
";
        
        $__internal_3f0513b30bdc1f02b3c21f1af31432f3589aca94bc4f512e728a34c88ac45393->leave($__internal_3f0513b30bdc1f02b3c21f1af31432f3589aca94bc4f512e728a34c88ac45393_prof);

    }

    // line 19
    public function block_reportcontainer($context, array $blocks = array())
    {
        $__internal_bf0fc4a974e983f417991f7846bb7709bd6e5651cae22cd4b73e77eef737fb02 = $this->env->getExtension("native_profiler");
        $__internal_bf0fc4a974e983f417991f7846bb7709bd6e5651cae22cd4b73e77eef737fb02->enter($__internal_bf0fc4a974e983f417991f7846bb7709bd6e5651cae22cd4b73e77eef737fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportcontainer"));

        // line 20
        echo "<div class=\"box-body\" id=\"reportcontainer\">
    
</div>
";
        
        $__internal_bf0fc4a974e983f417991f7846bb7709bd6e5651cae22cd4b73e77eef737fb02->leave($__internal_bf0fc4a974e983f417991f7846bb7709bd6e5651cae22cd4b73e77eef737fb02_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa94ab4836ff9f0dda7fca018c8a81bd27b7355f7174edae7fd5972c20eb45b8 = $this->env->getExtension("native_profiler");
        $__internal_aa94ab4836ff9f0dda7fca018c8a81bd27b7355f7174edae7fd5972c20eb45b8->enter($__internal_aa94ab4836ff9f0dda7fca018c8a81bd27b7355f7174edae7fd5972c20eb45b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
<script type=\"text/javascript\">
    var jsonDateData = {};

    \$('#runreport').click(function(){
         \$(\"#loadingIMG\").css(\"display\", \"block\");
        if (jsonDateData['startdatetime'] && jsonDateData['enddatetime']){
            \$('.form-control').each(function()
                {
\t               var key = \$(this).attr('id');
\t               jsonDateData[key] =\$(this).val();
\t           }
            );
            console.log(jsonDateData);
            \$('#reportcontainer').load('";
        // line 38
        echo $this->env->getExtension('routing')->getPath("load_ht_taskqueue_report");
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
        
        $__internal_aa94ab4836ff9f0dda7fca018c8a81bd27b7355f7174edae7fd5972c20eb45b8->leave($__internal_aa94ab4836ff9f0dda7fca018c8a81bd27b7355f7174edae7fd5972c20eb45b8_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_taskqueue_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  118 => 24,  108 => 20,  102 => 19,  93 => 16,  87 => 15,  77 => 11,  66 => 9,  62 => 8,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle:Supervisor:base_filter.html.twig' %}*/
/* {% block title %}Historical TaskQueue Report{% endblock %}*/
/* {% block div %}*/
/*     <div class="col-md-3">*/
/*         <div class="form-group">*/
/*             <label>TaskQueue Name</label>*/
/*             <select id="taskqueue" class="form-control">*/
/*                 {% for taskqueue in taskqueues %}*/
/*                     <option value="{{ taskqueue.sid }}"> {{ taskqueue.friendly_name }}</option>*/
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
/* */
/*     $('#runreport').click(function(){*/
/*          $("#loadingIMG").css("display", "block");*/
/*         if (jsonDateData['startdatetime'] && jsonDateData['enddatetime']){*/
/*             $('.form-control').each(function()*/
/*                 {*/
/* 	               var key = $(this).attr('id');*/
/* 	               jsonDateData[key] =$(this).val();*/
/* 	           }*/
/*             );*/
/*             console.log(jsonDateData);*/
/*             $('#reportcontainer').load('{{ path('load_ht_taskqueue_report') }}', jsonDateData), function( response, status, xhr ) */
/*             {*/
/*                 if ( status == "error" ) */
/*                 {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/*         }else{*/
/*             $('#alertbox').show();*/
/*               $("#loadingIMG").css("display", "none");*/
/*         }*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
