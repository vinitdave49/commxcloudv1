<?php

/* CommcloudVoiceBundle:Admin:configureproject.html.twig */
class __TwigTemplate_f22e81f511e1eefaaf22237dbc23196c02b6dc17044a2f1093e21922adf53973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle::sidebar.html.twig", "CommcloudVoiceBundle:Admin:configureproject.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_457d1823da81876056a92e16cfbb1b32f4215ce991214323b00dc4a2cae195ab = $this->env->getExtension("native_profiler");
        $__internal_457d1823da81876056a92e16cfbb1b32f4215ce991214323b00dc4a2cae195ab->enter($__internal_457d1823da81876056a92e16cfbb1b32f4215ce991214323b00dc4a2cae195ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Admin:configureproject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_457d1823da81876056a92e16cfbb1b32f4215ce991214323b00dc4a2cae195ab->leave($__internal_457d1823da81876056a92e16cfbb1b32f4215ce991214323b00dc4a2cae195ab_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:configureproject.html.twig";
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
