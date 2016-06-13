<?php

/* CommcloudVoiceBundle:Agent:callrecording.html.twig */
class __TwigTemplate_f529f7c51275ea99f54db632ae38c3784a4f0c36b900fdeb41b332455cd8fc17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle:Supervisor:base_filter.html.twig", "CommcloudVoiceBundle:Agent:callrecording.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "Call Recording Report";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  
   <div class=\"box box-primary\">
            <div class=\"alert alert-danger alert-dismissible\" id=\"alertbox\" style=\"display: none;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div> 
              
            ";
        // line 14
        echo "            ";
        // line 15
        echo "            ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "            
    ";
        // line 21
        echo "    ";
        // line 22
        echo "        </div>
  ";
    }

    // line 24
    public function block_button($context, array $blocks = array())
    {
        // line 25
        echo "  <div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div>   
    <button type=\"button\" id=\"runreport_callrecording\" name=\"runreport_callrecording\" class=\"btn btn-block btn-primary\"> Run Report </button>
";
    }

    // line 28
    public function block_reportcontainer($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"box-body\" id=\"callrecording\">

</div>
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        echo "    
<script type=\"text/javascript\">
    var jsonDateData = {};
    //alert(EndDateTime + StartDateTime);
    \$('#runreport_callrecording').click(function()
        {
              \$(\"#loadingIMG\").css(\"display\", \"block\");
            // \$(\"#GIFIMG\").attr(\"display\",\"block\");
            \$('.form-control').each(function()
                {
\t               var key = \$(this).attr('id');
\t               jsonDateData[key] =\$(this).val();
\t           }
            );
            console.log(jsonDateData);
            \$('#callrecording').load('";
        // line 49
        echo $this->env->getExtension('routing')->getPath("load_callrecording_table");
        echo "', jsonDateData), function( response, status, xhr ) 
                {
                    if ( status == \"error\" ) 
                    {
                        var msg = \"Sorry but there was an error: \";
                        console.log( msg + xhr.status + \" \" + xhr.statusText );
                    }
                    console.log(\"success img\");
                    \$(\"#loadingIMG\").css(\"display\", \"none\"); 
                }
             
        }
        
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:callrecording.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 49,  91 => 34,  84 => 29,  81 => 28,  75 => 25,  72 => 24,  67 => 22,  65 => 21,  62 => 19,  60 => 18,  58 => 17,  56 => 16,  54 => 15,  52 => 14,  41 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/*  {% extends 'CommcloudVoiceBundle:Supervisor:base_filter.html.twig' %}*/
/*  {% block title %}Call Recording Report{% endblock %}*/
/* {% block content %}*/
/*   */
/*    <div class="box box-primary">*/
/*             <div class="alert alert-danger alert-dismissible" id="alertbox" style="display: none;">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <h4><i class="icon fa fa-ban"></i> Alert!</h4>*/
/*                 Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire*/
/*                 soul, like these sweet mornings of spring which I enjoy with my whole heart.*/
/*             </div> */
/*               */
/*             {#<div id="GIFIMG" style="display:block;">#}*/
/*             {#    <img src="pic_mountain.jpg" alt="Mountain View" style="width:304px;height:228px;">#}*/
/*             {#</div>#}*/
/*     {#        <div class="box-header">#}*/
/*     {#            <h3 class="box-title">Recordings :</h3>#}*/
/*     {#        </div>#}*/
/*             */
/*     {#        <div class="box-body" id="reportcontainer">#}*/
/*     {#</div>#}*/
/*         </div>*/
/*   {% endblock %} */
/*   {% block button %}*/
/*   <div id="loadingIMG" class="loading" runat="server" style="display:none;">Loading&#8230;</div>   */
/*     <button type="button" id="runreport_callrecording" name="runreport_callrecording" class="btn btn-block btn-primary"> Run Report </button>*/
/* {% endblock %}*/
/* {% block reportcontainer %}*/
/* <div class="box-body" id="callrecording">*/
/* */
/* </div>*/
/* {% endblock %}*/
/*   */
/*   {% block javascripts %}    */
/* <script type="text/javascript">*/
/*     var jsonDateData = {};*/
/*     //alert(EndDateTime + StartDateTime);*/
/*     $('#runreport_callrecording').click(function()*/
/*         {*/
/*               $("#loadingIMG").css("display", "block");*/
/*             // $("#GIFIMG").attr("display","block");*/
/*             $('.form-control').each(function()*/
/*                 {*/
/* 	               var key = $(this).attr('id');*/
/* 	               jsonDateData[key] =$(this).val();*/
/* 	           }*/
/*             );*/
/*             console.log(jsonDateData);*/
/*             $('#callrecording').load('{{ path('load_callrecording_table') }}', jsonDateData), function( response, status, xhr ) */
/*                 {*/
/*                     if ( status == "error" ) */
/*                     {*/
/*                         var msg = "Sorry but there was an error: ";*/
/*                         console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                     }*/
/*                     console.log("success img");*/
/*                     $("#loadingIMG").css("display", "none"); */
/*                 }*/
/*              */
/*         }*/
/*         */
/*     );*/
/* </script>*/
/* {% endblock %}*/
