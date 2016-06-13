<?php

/* CommcloudVoiceBundle::demosoftphone.html.twig */
class __TwigTemplate_4ff84c9ca014bb4d100fdb582fc442093faf8598fe1161f1dc390a6d033e46a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0203d41c745f35907f179992b85322cf58ad4d4b4c60904bb2e9173a6e7402a0 = $this->env->getExtension("native_profiler");
        $__internal_0203d41c745f35907f179992b85322cf58ad4d4b4c60904bb2e9173a6e7402a0->enter($__internal_0203d41c745f35907f179992b85322cf58ad4d4b4c60904bb2e9173a6e7402a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle::demosoftphone.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Twilio softphone.\">
    <meta name=\"author\" content=\"Ashwin Deshpande\">
    <title>City Chat</title>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
   
  </head>
  <body>
      <div id=\"control-sidebar-phone-tab\"></div>
      <script>
      \"use strict\";
        window.onload = function(){
          (function () {
              var s = document.createElement('script');
              s.type = 'text/javascript';
              s.async = true;
              s.src = '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/testJS/CustomSoftphone.js"), "html", null, true);
        echo "';
              var x = document.getElementsByTagName('script')[0];
              x.parentNode.insertBefore(s, x);
              s.onload = function(){
               
              }
       
\t      })();

        }
      </script>
   
  </body>
</html>";
        
        $__internal_0203d41c745f35907f179992b85322cf58ad4d4b4c60904bb2e9173a6e7402a0->leave($__internal_0203d41c745f35907f179992b85322cf58ad4d4b4c60904bb2e9173a6e7402a0_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle::demosoftphone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 22,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="Twilio softphone.">*/
/*     <meta name="author" content="Ashwin Deshpande">*/
/*     <title>City Chat</title>*/
/*     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*    */
/*   </head>*/
/*   <body>*/
/*       <div id="control-sidebar-phone-tab"></div>*/
/*       <script>*/
/*       "use strict";*/
/*         window.onload = function(){*/
/*           (function () {*/
/*               var s = document.createElement('script');*/
/*               s.type = 'text/javascript';*/
/*               s.async = true;*/
/*               s.src = '{{ asset('bundles/commcloudvoice/testJS/CustomSoftphone.js')}}';*/
/*               var x = document.getElementsByTagName('script')[0];*/
/*               x.parentNode.insertBefore(s, x);*/
/*               s.onload = function(){*/
/*                */
/*               }*/
/*        */
/* 	      })();*/
/* */
/*         }*/
/*       </script>*/
/*    */
/*   </body>*/
/* </html>*/
