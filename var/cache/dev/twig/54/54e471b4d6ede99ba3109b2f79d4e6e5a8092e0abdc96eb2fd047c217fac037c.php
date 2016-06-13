<?php

/* CommcloudVoiceBundle:Default:test.html.twig */
class __TwigTemplate_bb3197eaf207fbf5c37ed8a3e245e1257e1bbac7bb556a7a7e6682ca8691c610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f23324f5a31877f09ed978cf089af44348c4a63d87054f76ea2347fb4251f447 = $this->env->getExtension("native_profiler");
        $__internal_f23324f5a31877f09ed978cf089af44348c4a63d87054f76ea2347fb4251f447->enter($__internal_f23324f5a31877f09ed978cf089af44348c4a63d87054f76ea2347fb4251f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Default:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
         <meta charset=\"utf-8\"/>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
         <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\"/>
         <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
           <body  class=\"hold-transition skin-blue sidebar-mini\">
                <div id=\"abc\" data-path=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("commcloud_voice_token");
        echo "\"></div>
          <div class=\"phone-box\">
\t\t<div class=\"phone-header\"><h4> CommPhone </h4></div>
\t\t<div id =\"phone-box-content\" class=\"box box-primary\">
            <div class=\"box-body padding-override\" style=\"text-align:center;\" >
\t\t\t <!-- <div class=\"\" style=\" padding-bottom:5px;\">
\t\t\t    <button class=\"btn btn-block btn-default btn-sm btn-ready\" id=\"ready\">Ready</button>
\t\t\t    <button class=\"btn btn-not-ready btn-block btn-default btn-sm\" style=\"margin-top:0px;\" id=\"notready\">Not Ready</button> 
\t\t\t  </div>-->\t\t\t\t
\t\t\t<div class=\"form-group padding-override\" style=\"text-align:left;\">
\t\t\t\t<label>Worker Activity</label>
\t\t\t\t<select class=\"form-control\" id=\"workerActivity\">
\t\t\t\t\t<option value=\"WAb4bc7105ecbff4189f3a36050d3b7863\">Idle</option>
\t\t\t\t\t<option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
\t\t\t\t\t<option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
\t\t\t\t\t<option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\" selected=\"selected\">Offline</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t 
\t\t\t  <div class=\"box-header padding-override padding-bottom-override padding-top-override\" id=\"incomingcallalert\">
\t\t\t  </div>
\t\t\t  <div class=\"padding-override\">
\t\t\t    <input type=\"text\" class=\"form-control\" id=\"exampleInputPhone\" placeholder=\"Enter Phone Number to call\">
\t\t\t  </div>
\t\t\t  <div class=\"padding-override \">
\t\t\t    <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button1\" value=\"1\">1</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button2\" value=\"2\">2</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button3\" value=\"3\" >3</button>
\t\t\t  </div>
\t\t\t  <div class=\"padding-override padding-top-override\" >
\t\t\t    <button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button4\" value=\"1\">4</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button5\" value=\"1\">5</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button6\" value=\"1\">6</button>
\t\t\t  </div>
\t\t\t  <div class=\"padding-override padding-top-override\" >
\t\t\t    <button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button7\" value=\"7\">7</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button8\" value=\"8\">8</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button9\" value=\"9\">9</button>
\t\t\t  </div>
\t\t\t  <div class=\"padding-override padding-top-override\" >
\t\t\t    <button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"buttonstar\" value=\"*\">*</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"button0\" value=\"0\">0</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"buttonpound\" value=\"#\">#</button>
\t\t\t  </div>
\t\t\t  <div class=\"padding-override\" >
\t\t\t    <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" border-radius:0px\" id=\"makecall\">Call</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px; border-radius:0px\" id=\"answer\">Answer</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px;  border-radius:0px\" id=\"hangup\">Hang-Up</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px;  border-radius:0px\" onclick=\"holdAction()\" id=\"hold\">Hold</button>
\t\t\t\t<button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px;  border-radius:0px\" onclick=\"holdAction()\" id=\"unhold\">Un-Hold</button>
\t\t\t  </div>
\t\t\t  <div class=\"box-header padding-override padding-top-override padding-bottom-override\" >
\t\t\t    <div class=\"caller-info-div\" style=\"\" id=\"status\"> 
                </div>
\t\t\t  </div>
\t\t\t  <div class=\"bottom-div-text\" ><span>Ready Agents :</span> <span>1</span></div>
\t\t\t  <div class=\"bottom-div-text\" ><span>Call Queue :</span> <span>0</span></div>
\t\t\t</div>
        </div>
      </div>
      
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "      </body>";
        
        $__internal_f23324f5a31877f09ed978cf089af44348c4a63d87054f76ea2347fb4251f447->leave($__internal_f23324f5a31877f09ed978cf089af44348c4a63d87054f76ea2347fb4251f447_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4fe79150b7a774040f9e0f43d34a826ebdf3f100d19aaa929a81e31efc695ae = $this->env->getExtension("native_profiler");
        $__internal_a4fe79150b7a774040f9e0f43d34a826ebdf3f100d19aaa929a81e31efc695ae->enter($__internal_a4fe79150b7a774040f9e0f43d34a826ebdf3f100d19aaa929a81e31efc695ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CommCloud";
        
        $__internal_a4fe79150b7a774040f9e0f43d34a826ebdf3f100d19aaa929a81e31efc695ae->leave($__internal_a4fe79150b7a774040f9e0f43d34a826ebdf3f100d19aaa929a81e31efc695ae_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b8c1cde1705af7451fd12c55e2029476daaf1e929384f7c41516c49178c4846 = $this->env->getExtension("native_profiler");
        $__internal_7b8c1cde1705af7451fd12c55e2029476daaf1e929384f7c41516c49178c4846->enter($__internal_7b8c1cde1705af7451fd12c55e2029476daaf1e929384f7c41516c49178c4846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa03925_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_0") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_bootstrap.min_1.css");
            // line 12
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_1") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_AdminLTE.min_1.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_2") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins_2.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_3") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins.min_3.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_4") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_blue_4.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_5") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_commcloud_6.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_6") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_dataTables.bootstrap_7.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_7") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_daterangepicker_8.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_8") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_jquery.dataTables_9.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_9") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_skin-blue.min_10.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "aa03925"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
       
        ";
        
        $__internal_7b8c1cde1705af7451fd12c55e2029476daaf1e929384f7c41516c49178c4846->leave($__internal_7b8c1cde1705af7451fd12c55e2029476daaf1e929384f7c41516c49178c4846_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d1c09824e0812d55e8ec2c1ff28d766553b76bb946228d905f9e44181b01cca = $this->env->getExtension("native_profiler");
        $__internal_5d1c09824e0812d55e8ec2c1ff28d766553b76bb946228d905f9e44181b01cca->enter($__internal_5d1c09824e0812d55e8ec2c1ff28d766553b76bb946228d905f9e44181b01cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "          <script src=\"https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js\"></script>
          <script src=\"https://media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js\"></script>
          ";
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bfbf747_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfbf747_0") : $this->env->getExtension('asset')->getAssetUrl("js/bfbf747_jQuery_1.js");
            // line 92
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "bfbf747_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfbf747_1") : $this->env->getExtension('asset')->getAssetUrl("js/bfbf747_testJS_2.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "bfbf747"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bfbf747") : $this->env->getExtension('asset')->getAssetUrl("js/bfbf747.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 94
        echo "             
            
      
        \t
        ";
        
        $__internal_5d1c09824e0812d55e8ec2c1ff28d766553b76bb946228d905f9e44181b01cca->leave($__internal_5d1c09824e0812d55e8ec2c1ff28d766553b76bb946228d905f9e44181b01cca_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 94,  240 => 92,  236 => 89,  232 => 87,  226 => 86,  213 => 14,  145 => 12,  140 => 10,  134 => 9,  122 => 7,  115 => 99,  113 => 86,  49 => 25,  43 => 22,  40 => 21,  38 => 9,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*          <meta charset="utf-8"/>*/
/*          <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>*/
/*          <title>{% block title %}CommCloud{% endblock %}</title>*/
/*       */
/*         {% block stylesheets %}*/
/*           {% stylesheets '@CommcloudVoiceBundle/Resources/public/css/bootstrap.min.css' */
/*                          '@CommcloudVoiceBundle/Resources/public/css/*'  filter="cssrewrite"%}*/
/*               <link rel="stylesheet" href="{{ asset_url }}" />*/
/*           {% endstylesheets %}*/
/*         */
/*             <!-- Font Awesome -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             <!-- Ionicons -->*/
/*             <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*        */
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*            <body  class="hold-transition skin-blue sidebar-mini">*/
/*                 <div id="abc" data-path="{{ path('commcloud_voice_token') }}"></div>*/
/*           <div class="phone-box">*/
/* 		<div class="phone-header"><h4> CommPhone </h4></div>*/
/* 		<div id ="phone-box-content" class="box box-primary">*/
/*             <div class="box-body padding-override" style="text-align:center;" >*/
/* 			 <!-- <div class="" style=" padding-bottom:5px;">*/
/* 			    <button class="btn btn-block btn-default btn-sm btn-ready" id="ready">Ready</button>*/
/* 			    <button class="btn btn-not-ready btn-block btn-default btn-sm" style="margin-top:0px;" id="notready">Not Ready</button> */
/* 			  </div>-->				*/
/* 			<div class="form-group padding-override" style="text-align:left;">*/
/* 				<label>Worker Activity</label>*/
/* 				<select class="form-control" id="workerActivity">*/
/* 					<option value="WAb4bc7105ecbff4189f3a36050d3b7863">Idle</option>*/
/* 					<option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/* 					<option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/* 					<option value="WA7b56deb0d7cd97a69b663e4a62532ac7" selected="selected">Offline</option>*/
/* 				</select>*/
/* 			</div>*/
/* 			 */
/* 			  <div class="box-header padding-override padding-bottom-override padding-top-override" id="incomingcallalert">*/
/* 			  </div>*/
/* 			  <div class="padding-override">*/
/* 			    <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number to call">*/
/* 			  </div>*/
/* 			  <div class="padding-override ">*/
/* 			    <button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button1" value="1">1</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button2" value="2">2</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button3" value="3" >3</button>*/
/* 			  </div>*/
/* 			  <div class="padding-override padding-top-override" >*/
/* 			    <button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button4" value="1">4</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button5" value="1">5</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button6" value="1">6</button>*/
/* 			  </div>*/
/* 			  <div class="padding-override padding-top-override" >*/
/* 			    <button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button7" value="7">7</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button8" value="8">8</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button9" value="9">9</button>*/
/* 			  </div>*/
/* 			  <div class="padding-override padding-top-override" >*/
/* 			    <button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonstar" value="*">*</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="button0" value="0">0</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonpound" value="#">#</button>*/
/* 			  </div>*/
/* 			  <div class="padding-override" >*/
/* 			    <button class="btn btn-block btn-default btn-sm keypad-123" style=" border-radius:0px" id="makecall">Call</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" id="answer">Answer</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="hangup">Hang-Up</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" onclick="holdAction()" id="hold">Hold</button>*/
/* 				<button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" onclick="holdAction()" id="unhold">Un-Hold</button>*/
/* 			  </div>*/
/* 			  <div class="box-header padding-override padding-top-override padding-bottom-override" >*/
/* 			    <div class="caller-info-div" style="" id="status"> */
/*                 </div>*/
/* 			  </div>*/
/* 			  <div class="bottom-div-text" ><span>Ready Agents :</span> <span>1</span></div>*/
/* 			  <div class="bottom-div-text" ><span>Call Queue :</span> <span>0</span></div>*/
/* 			</div>*/
/*         </div>*/
/*       </div>*/
/*       */
/*         {% block javascripts %}*/
/*           <script src="https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>*/
/*           <script src="https://media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js"></script>*/
/*           {% javascripts  '@CommcloudVoiceBundle/Resources/public/js/jQuery.js' */
/*                           '@CommcloudVoiceBundle/Resources/public/testJS/testJS.js'*/
/*                           %}*/
/*               <script src="{{ asset_url }}"></script>*/
/*           {% endjavascripts %}*/
/*              */
/*             */
/*       */
/*         	*/
/*         {% endblock %}*/
/*       </body>*/
