<?php

/* CommcloudVoiceBundle:Agent:callrecording.html.twig */
class __TwigTemplate_8d30f8c115cc598c76cf1e32248492d28cf3d14270a3460f0b346861f76d2041 extends Twig_Template
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
        $__internal_4702057770475122f58e8885304d644139e720933ad0af65be3367e174916808 = $this->env->getExtension("native_profiler");
        $__internal_4702057770475122f58e8885304d644139e720933ad0af65be3367e174916808->enter($__internal_4702057770475122f58e8885304d644139e720933ad0af65be3367e174916808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Agent:callrecording.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4702057770475122f58e8885304d644139e720933ad0af65be3367e174916808->leave($__internal_4702057770475122f58e8885304d644139e720933ad0af65be3367e174916808_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a8ba5f1f8f1b78efb6a5ca2d8fbbba8ea90cdacaaa87f7c15480c5a8a95f85b = $this->env->getExtension("native_profiler");
        $__internal_9a8ba5f1f8f1b78efb6a5ca2d8fbbba8ea90cdacaaa87f7c15480c5a8a95f85b->enter($__internal_9a8ba5f1f8f1b78efb6a5ca2d8fbbba8ea90cdacaaa87f7c15480c5a8a95f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Call Recording Report";
        
        $__internal_9a8ba5f1f8f1b78efb6a5ca2d8fbbba8ea90cdacaaa87f7c15480c5a8a95f85b->leave($__internal_9a8ba5f1f8f1b78efb6a5ca2d8fbbba8ea90cdacaaa87f7c15480c5a8a95f85b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8fd3788f62a928f06564d9aa7e38271b4824f331941cec38c90975540b85554a = $this->env->getExtension("native_profiler");
        $__internal_8fd3788f62a928f06564d9aa7e38271b4824f331941cec38c90975540b85554a->enter($__internal_8fd3788f62a928f06564d9aa7e38271b4824f331941cec38c90975540b85554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8fd3788f62a928f06564d9aa7e38271b4824f331941cec38c90975540b85554a->leave($__internal_8fd3788f62a928f06564d9aa7e38271b4824f331941cec38c90975540b85554a_prof);

    }

    // line 24
    public function block_button($context, array $blocks = array())
    {
        $__internal_ac283e76d7f7b8c2f457bc9ca07c92639e1a26b54cc99f0067175b96e827cbe0 = $this->env->getExtension("native_profiler");
        $__internal_ac283e76d7f7b8c2f457bc9ca07c92639e1a26b54cc99f0067175b96e827cbe0->enter($__internal_ac283e76d7f7b8c2f457bc9ca07c92639e1a26b54cc99f0067175b96e827cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button"));

        // line 25
        echo "  <div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div>   
    <button type=\"button\" id=\"runreport_callrecording\" name=\"runreport_callrecording\" class=\"btn btn-block btn-primary\"> Run Report </button>
";
        
        $__internal_ac283e76d7f7b8c2f457bc9ca07c92639e1a26b54cc99f0067175b96e827cbe0->leave($__internal_ac283e76d7f7b8c2f457bc9ca07c92639e1a26b54cc99f0067175b96e827cbe0_prof);

    }

    // line 28
    public function block_reportcontainer($context, array $blocks = array())
    {
        $__internal_1a4bf73e1e1668a383f5aec9acecb140b1bbd9910c36ee4d8499e2c55b453c72 = $this->env->getExtension("native_profiler");
        $__internal_1a4bf73e1e1668a383f5aec9acecb140b1bbd9910c36ee4d8499e2c55b453c72->enter($__internal_1a4bf73e1e1668a383f5aec9acecb140b1bbd9910c36ee4d8499e2c55b453c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportcontainer"));

        // line 29
        echo "<div class=\"box-body\" id=\"callrecording\">

</div>
";
        
        $__internal_1a4bf73e1e1668a383f5aec9acecb140b1bbd9910c36ee4d8499e2c55b453c72->leave($__internal_1a4bf73e1e1668a383f5aec9acecb140b1bbd9910c36ee4d8499e2c55b453c72_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d509db8578a02b35b090dbabc83077b7774c5fc479ec9e8985996c299b74dba9 = $this->env->getExtension("native_profiler");
        $__internal_d509db8578a02b35b090dbabc83077b7774c5fc479ec9e8985996c299b74dba9->enter($__internal_d509db8578a02b35b090dbabc83077b7774c5fc479ec9e8985996c299b74dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d509db8578a02b35b090dbabc83077b7774c5fc479ec9e8985996c299b74dba9->leave($__internal_d509db8578a02b35b090dbabc83077b7774c5fc479ec9e8985996c299b74dba9_prof);

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
        return array (  143 => 49,  121 => 34,  111 => 29,  105 => 28,  96 => 25,  90 => 24,  82 => 22,  80 => 21,  77 => 19,  75 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
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
