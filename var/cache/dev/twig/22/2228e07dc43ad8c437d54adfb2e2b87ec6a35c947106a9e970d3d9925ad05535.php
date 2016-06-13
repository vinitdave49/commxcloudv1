<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_204999109f334250392bb55fda23f16bd3eeb25d71a67bbe9ff9c37c121598e6 extends Twig_Template
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
        $__internal_0f1a82028de3b2a5e3f9f27513ac6f56b6becc7634c06a34f8c9a49ff0bbdb7f = $this->env->getExtension("native_profiler");
        $__internal_0f1a82028de3b2a5e3f9f27513ac6f56b6becc7634c06a34f8c9a49ff0bbdb7f->enter($__internal_0f1a82028de3b2a5e3f9f27513ac6f56b6becc7634c06a34f8c9a49ff0bbdb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0f1a82028de3b2a5e3f9f27513ac6f56b6becc7634c06a34f8c9a49ff0bbdb7f->leave($__internal_0f1a82028de3b2a5e3f9f27513ac6f56b6becc7634c06a34f8c9a49ff0bbdb7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
