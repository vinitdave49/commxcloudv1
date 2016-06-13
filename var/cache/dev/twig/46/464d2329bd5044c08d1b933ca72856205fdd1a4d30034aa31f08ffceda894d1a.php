<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_cd376f2f32c38a51f97eed90ac070a7f5035a50aabe955419bca34e241ab122c extends Twig_Template
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
        $__internal_52f01276d21ce229770b4da2ca2f06b5e25f079b66af827053f0e158cb72c156 = $this->env->getExtension("native_profiler");
        $__internal_52f01276d21ce229770b4da2ca2f06b5e25f079b66af827053f0e158cb72c156->enter($__internal_52f01276d21ce229770b4da2ca2f06b5e25f079b66af827053f0e158cb72c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_52f01276d21ce229770b4da2ca2f06b5e25f079b66af827053f0e158cb72c156->leave($__internal_52f01276d21ce229770b4da2ca2f06b5e25f079b66af827053f0e158cb72c156_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
