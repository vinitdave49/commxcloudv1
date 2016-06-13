<?php

/* CommcloudVoiceBundle:Agent:content.html.twig */
class __TwigTemplate_68bba67dbd28f65deddc02be472045b0df96decca7ba98007f09177696f31bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle::sidebar.html.twig", "CommcloudVoiceBundle:Agent:content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29f4685ade9777151c7be94e44bd5fe766bf5ab3368fd02bc5ded6e5a13b1507 = $this->env->getExtension("native_profiler");
        $__internal_29f4685ade9777151c7be94e44bd5fe766bf5ab3368fd02bc5ded6e5a13b1507->enter($__internal_29f4685ade9777151c7be94e44bd5fe766bf5ab3368fd02bc5ded6e5a13b1507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Agent:content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f4685ade9777151c7be94e44bd5fe766bf5ab3368fd02bc5ded6e5a13b1507->leave($__internal_29f4685ade9777151c7be94e44bd5fe766bf5ab3368fd02bc5ded6e5a13b1507_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_90f71fa5c6046c9f29d96c63ebc9f372138ded2d797e84401f610c85d8293225 = $this->env->getExtension("native_profiler");
        $__internal_90f71fa5c6046c9f29d96c63ebc9f372138ded2d797e84401f610c85d8293225->enter($__internal_90f71fa5c6046c9f29d96c63ebc9f372138ded2d797e84401f610c85d8293225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
\t<!-- Content Header (Page header) -->
\t<section class=\"content-header\">
\t\t<h1>
            CommXCloud
         </h1>
\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
\t\t\t<li class=\"active\">CommXCloud</li>
\t\t</ol>
\t</section>

\t<!-- Main content -->
\t<section class=\"content\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\" id=\"userWid\">
\t\t\t\t<div class=\"box box-widget widget-user\">
\t\t\t\t\t<div class=\"widget-user-header bg-aqua-active\">
\t\t\t\t\t\t<h3 class=\"widget-user-username\"> </h3>
\t\t\t\t\t\t<h5 class=\"widget-user-desc\">Customer Service Rep</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-user-image\">
\t\t\t\t\t\t";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7d78dc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7d78dc_0") : $this->env->getExtension('asset')->getAssetUrl("images/e7d78dc_avatar_1_1.png");
            // line 28
            echo "\t\t\t\t\t\t<img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"User Avatar\"> ";
        } else {
            // asset "e7d78dc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7d78dc") : $this->env->getExtension('asset')->getAssetUrl("images/e7d78dc.png");
            echo "\t\t\t\t\t\t<img class=\"img-circle\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"User Avatar\"> ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 border-right\">
\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\"></h5>
\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Reservations Accepted</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 border-right\">
\t\t\t\t\t\t\t\t<div class=\"description-block\">
\t\t\t\t\t\t\t\t\t<h5 class=\"description-header\"></h5>
\t\t\t\t\t\t\t\t\t<span class=\"description-text\">Reservations Rejected</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\" id=\"statisticsContent\"></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\" id=\"workerStatscontent\"></div>
\t\t</div>

\t</section>
\t<!-- /.content -->
</div>
<!-- /.content-wrapper -->


";
        
        $__internal_90f71fa5c6046c9f29d96c63ebc9f372138ded2d797e84401f610c85d8293225->leave($__internal_90f71fa5c6046c9f29d96c63ebc9f372138ded2d797e84401f610c85d8293225_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  70 => 28,  66 => 27,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle::sidebar.html.twig' %} {% block content %}*/
/* */
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/* 	<!-- Content Header (Page header) -->*/
/* 	<section class="content-header">*/
/* 		<h1>*/
/*             CommXCloud*/
/*          </h1>*/
/* 		<ol class="breadcrumb">*/
/* 			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/* 			<li class="active">CommXCloud</li>*/
/* 		</ol>*/
/* 	</section>*/
/* */
/* 	<!-- Main content -->*/
/* 	<section class="content">*/
/* */
/* 		<div class="row">*/
/* 			<div class="col-md-3" id="userWid">*/
/* 				<div class="box box-widget widget-user">*/
/* 					<div class="widget-user-header bg-aqua-active">*/
/* 						<h3 class="widget-user-username"> </h3>*/
/* 						<h5 class="widget-user-desc">Customer Service Rep</h5>*/
/* 					</div>*/
/* 					<div class="widget-user-image">*/
/* 						{% image '@CommcloudVoiceBundle/Resources/public/images/avatar_1.png' %}*/
/* 						<img class="img-circle" src="{{ asset_url }}" alt="User Avatar"> {% endimage %}*/
/* 					</div>*/
/* 					<div class="box-footer">*/
/* 						<div class="row">*/
/* 							<div class="col-sm-6 border-right">*/
/* 								<div class="description-block">*/
/* 									<h5 class="description-header"></h5>*/
/* 									<span class="description-text">Reservations Accepted</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 border-right">*/
/* 								<div class="description-block">*/
/* 									<h5 class="description-header"></h5>*/
/* 									<span class="description-text">Reservations Rejected</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-12" id="statisticsContent"></div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-12" id="workerStatscontent"></div>*/
/* 		</div>*/
/* */
/* 	</section>*/
/* 	<!-- /.content -->*/
/* </div>*/
/* <!-- /.content-wrapper -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
