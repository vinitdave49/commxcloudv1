<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9a6522d5ea8777e64ad0e37ed5bcdf503158b16a8e617cb4bdfc74945744a860 extends Twig_Template
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
        $__internal_1ea89caff5035ca2af55b962a1daeb54ff3e196c9a33dcb155c01ac8373e766a = $this->env->getExtension("native_profiler");
        $__internal_1ea89caff5035ca2af55b962a1daeb54ff3e196c9a33dcb155c01ac8373e766a->enter($__internal_1ea89caff5035ca2af55b962a1daeb54ff3e196c9a33dcb155c01ac8373e766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1ea89caff5035ca2af55b962a1daeb54ff3e196c9a33dcb155c01ac8373e766a->leave($__internal_1ea89caff5035ca2af55b962a1daeb54ff3e196c9a33dcb155c01ac8373e766a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
