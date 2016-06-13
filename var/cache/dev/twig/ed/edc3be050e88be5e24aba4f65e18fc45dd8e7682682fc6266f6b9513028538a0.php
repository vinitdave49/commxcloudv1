<?php

/* CommcloudVoiceBundle::agentchat.html.twig */
class __TwigTemplate_2d151c089077c4ed256dbe5fb84c78ff7742eaa820136fd048cf67b0c25b54c6 extends Twig_Template
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
        $__internal_5526aaef12a425fa5c9325c6b6b79c3e71a8856d0b227394a88b6b8dbaa623e4 = $this->env->getExtension("native_profiler");
        $__internal_5526aaef12a425fa5c9325c6b6b79c3e71a8856d0b227394a88b6b8dbaa623e4->enter($__internal_5526aaef12a425fa5c9325c6b6b79c3e71a8856d0b227394a88b6b8dbaa623e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle::agentchat.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Twilio IP Messaging.\">
    <meta name=\"author\" content=\"Ashwin Deshpande\">
    <title>City Chat</title>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
   
  </head>
  <body>
       <div id=\"abc\" data-path=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"></div>
    <div class=\"container\">
     <header>
  <a href=\"https://www.twilio.com/docs/api/ip-messaging/guides/quickstart-js\" 
    target=\"_blank\">Read the getting started guide
    <i class=\"fa fa-fw fa-external-link\"></i>
  </a>
  </header>

  <section>
    <div id=\"messages\"></div>
    <input id=\"chat-input\" type=\"text\" placeholder=\"say anything\" autofocus/>
  </section>

    </div>

    
   
    ";
        // line 33
        echo "    ";
        // line 34
        echo "    <script src=\"https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js\"></script>
    <script src=\"https://media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js\"></script>
   
    ";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "77f26b9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f26b9_0") : $this->env->getExtension('asset')->getAssetUrl("js/77f26b9_jQuery_1.js");
            // line 41
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "77f26b9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f26b9_1") : $this->env->getExtension('asset')->getAssetUrl("js/77f26b9_agentchat_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "77f26b9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f26b9_2") : $this->env->getExtension('asset')->getAssetUrl("js/77f26b9_worker_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        } else {
            // asset "77f26b9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_77f26b9") : $this->env->getExtension('asset')->getAssetUrl("js/77f26b9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
      
      <script>
      \"use strict\";
        window.onload = function(){
          (function () {
              var s = document.createElement('script');
              s.type = 'text/javascript';
              s.async = true;
              s.src = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/testJS/CustomChat.js"), "html", null, true);
        echo "';
              var x = document.getElementsByTagName('script')[0];
              x.parentNode.insertBefore(s, x);
              s.onload = function(){
               
              }
\t        })();

        }
      </script>
  </body>
</html>";
        
        $__internal_5526aaef12a425fa5c9325c6b6b79c3e71a8856d0b227394a88b6b8dbaa623e4->leave($__internal_5526aaef12a425fa5c9325c6b6b79c3e71a8856d0b227394a88b6b8dbaa623e4_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle::agentchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  95 => 43,  69 => 41,  65 => 37,  60 => 34,  58 => 33,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="Twilio IP Messaging.">*/
/*     <meta name="author" content="Ashwin Deshpande">*/
/*     <title>City Chat</title>*/
/*     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*    */
/*   </head>*/
/*   <body>*/
/*        <div id="abc" data-path="{{ name }}"></div>*/
/*     <div class="container">*/
/*      <header>*/
/*   <a href="https://www.twilio.com/docs/api/ip-messaging/guides/quickstart-js" */
/*     target="_blank">Read the getting started guide*/
/*     <i class="fa fa-fw fa-external-link"></i>*/
/*   </a>*/
/*   </header>*/
/* */
/*   <section>*/
/*     <div id="messages"></div>*/
/*     <input id="chat-input" type="text" placeholder="say anything" autofocus/>*/
/*   </section>*/
/* */
/*     </div>*/
/* */
/*     */
/*    */
/*     {#<script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>#}*/
/*     {#<script src="//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.9/twilio-ip-messaging.min.js"></script>#}*/
/*     <script src="https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>*/
/*     <script src="https://media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js"></script>*/
/*    */
/*     {% javascripts  '@CommcloudVoiceBundle/Resources/public/js/jQuery.js'*/
/*                     '@CommcloudVoiceBundle/Resources/public/testJS/agentchat.js'*/
/*                     '@CommcloudVoiceBundle/Resources/public/testJS/worker.js'*/
/*                           %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*      {% endjavascripts %}*/
/*       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*       */
/*       <script>*/
/*       "use strict";*/
/*         window.onload = function(){*/
/*           (function () {*/
/*               var s = document.createElement('script');*/
/*               s.type = 'text/javascript';*/
/*               s.async = true;*/
/*               s.src = '{{ asset('bundles/commcloudvoice/testJS/CustomChat.js')}}';*/
/*               var x = document.getElementsByTagName('script')[0];*/
/*               x.parentNode.insertBefore(s, x);*/
/*               s.onload = function(){*/
/*                */
/*               }*/
/* 	        })();*/
/* */
/*         }*/
/*       </script>*/
/*   </body>*/
/* </html>*/
