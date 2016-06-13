<?php

/* CommcloudVoiceBundle::demosoftphone.html.twig */
class __TwigTemplate_a19c5c6d10c728ea2b178f3c6e81e82c74dc2179dd0e42421ec46bf19478d067 extends Twig_Template
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
        return array (  42 => 22,  19 => 1,);
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
