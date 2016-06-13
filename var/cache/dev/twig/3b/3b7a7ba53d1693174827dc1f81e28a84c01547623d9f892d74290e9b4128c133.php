<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f9249a9d087418927600d6b07a76aaa9412ac3017d34643b5b509e1bdd737bc4 extends Twig_Template
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
        $__internal_ef242d8523492ad4c446864691d435d29ea8502974dffe1b0a7b17708be2d162 = $this->env->getExtension("native_profiler");
        $__internal_ef242d8523492ad4c446864691d435d29ea8502974dffe1b0a7b17708be2d162->enter($__internal_ef242d8523492ad4c446864691d435d29ea8502974dffe1b0a7b17708be2d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ef242d8523492ad4c446864691d435d29ea8502974dffe1b0a7b17708be2d162->leave($__internal_ef242d8523492ad4c446864691d435d29ea8502974dffe1b0a7b17708be2d162_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
