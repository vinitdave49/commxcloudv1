<?php

/* CommcloudVoiceBundle:Supervisor:index.html.twig */
class __TwigTemplate_cfe4a0ae2d406b461405dc09213b8ebaa2fbe33c10b6ae4e49a10446e7616f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle::sidebar.html.twig", "CommcloudVoiceBundle:Supervisor:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle::sidebar.html.twig' %}*/
