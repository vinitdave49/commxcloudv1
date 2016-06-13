<?php

/* CommcloudVoiceBundle:Supervisor:index.html.twig */
class __TwigTemplate_4d1f01352bb4d4d31579290152824c8b35dc010f5ff716ffa5d5976ab85e2cfd extends Twig_Template
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
        $__internal_714091b8b170f2354a5bb059c578863118386f2d09f533a5a4bd8bc057c398be = $this->env->getExtension("native_profiler");
        $__internal_714091b8b170f2354a5bb059c578863118386f2d09f533a5a4bd8bc057c398be->enter($__internal_714091b8b170f2354a5bb059c578863118386f2d09f533a5a4bd8bc057c398be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_714091b8b170f2354a5bb059c578863118386f2d09f533a5a4bd8bc057c398be->leave($__internal_714091b8b170f2354a5bb059c578863118386f2d09f533a5a4bd8bc057c398be_prof);

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
