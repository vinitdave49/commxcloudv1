<?php

/* CommcloudVoiceBundle::chat.html.twig */
class __TwigTemplate_f14f60aeaa4da73b996edaac909a832740e99bb9b67f8f0845ed757183781b15 extends Twig_Template
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
        $__internal_3603c0289df9225ca37c67c25ba5cd41e981a664fe8dc6e7009ee3ca32637164 = $this->env->getExtension("native_profiler");
        $__internal_3603c0289df9225ca37c67c25ba5cd41e981a664fe8dc6e7009ee3ca32637164->enter($__internal_3603c0289df9225ca37c67c25ba5cd41e981a664fe8dc6e7009ee3ca32637164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle::chat.html.twig"));

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
   <script src=\"https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js\"></script>
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

    
   
    <script src=\"//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js\"></script>
    <script src=\"//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.9/twilio-ip-messaging.min.js\"></script>
   
   
    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "94e69ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94e69ce_0") : $this->env->getExtension('asset')->getAssetUrl("js/94e69ce_jQuery_1.js");
            // line 40
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
            // asset "94e69ce_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94e69ce_1") : $this->env->getExtension('asset')->getAssetUrl("js/94e69ce_chat_2.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        } else {
            // asset "94e69ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_94e69ce") : $this->env->getExtension('asset')->getAssetUrl("js/94e69ce.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
     ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "      ";
        // line 43
        echo "      ";
        // line 44
        echo "      ";
        // line 45
        echo "      ";
        // line 46
        echo "      ";
        // line 47
        echo "      ";
        // line 48
        echo "      ";
        // line 49
        echo "      ";
        // line 50
        echo "      ";
        // line 51
        echo "      ";
        // line 52
        echo "      ";
        // line 53
        echo "               
      ";
        // line 55
        echo "\t     ";
        // line 56
        echo "
      ";
        // line 58
        echo "      ";
        // line 59
        echo "      ";
        // line 60
        echo "  </body>
</html>";
        
        $__internal_3603c0289df9225ca37c67c25ba5cd41e981a664fe8dc6e7009ee3ca32637164->leave($__internal_3603c0289df9225ca37c67c25ba5cd41e981a664fe8dc6e7009ee3ca32637164_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle::chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 60,  118 => 59,  116 => 58,  113 => 56,  111 => 55,  108 => 53,  106 => 52,  104 => 51,  102 => 50,  100 => 49,  98 => 48,  96 => 47,  94 => 46,  92 => 45,  90 => 44,  88 => 43,  86 => 42,  66 => 40,  62 => 36,  37 => 14,  22 => 1,);
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
/*    <script src="https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>*/
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
/*     <script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>*/
/*     <script src="//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.9/twilio-ip-messaging.min.js"></script>*/
/*    */
/*    */
/*     {% javascripts  '@CommcloudVoiceBundle/Resources/public/js/jQuery.js'*/
/*                     '@CommcloudVoiceBundle/Resources/public/testJS/chat.js'*/
/*                     */
/*                           %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*      {% endjavascripts %}*/
/*       {#<script>#}*/
/*       {#"use strict";#}*/
/*       {#  window.onload = function(){#}*/
/*       {#    (function () {#}*/
/*       {#        var s = document.createElement('script');#}*/
/*       {#        s.type = 'text/javascript';#}*/
/*       {#        s.async = true;#}*/
/*       {#        s.src = '{{ asset('bundles/commcloudvoice/testJS/CustomChat.js')}}';#}*/
/*       {#        var x = document.getElementsByTagName('script')[0];#}*/
/*       {#        x.parentNode.insertBefore(s, x);#}*/
/*       {#        s.onload = function(){#}*/
/*                */
/*       {#        }#}*/
/* 	     {#   })();#}*/
/* */
/*       {#  }#}*/
/*       {#</script>#}*/
/*       {#<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>#}*/
/*   </body>*/
/* </html>*/
