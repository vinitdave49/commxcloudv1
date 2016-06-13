<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_4a1cb7765a736a9eab34cd6e242f5d3d57a7ffecbec1b0a89a53e46a2e7a2a50 extends Twig_Template
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
        $__internal_2e2d57620eb46c50ab3b667a8d0e5b1d1818561a476f5ef58cd5afc8aeae05cb = $this->env->getExtension("native_profiler");
        $__internal_2e2d57620eb46c50ab3b667a8d0e5b1d1818561a476f5ef58cd5afc8aeae05cb->enter($__internal_2e2d57620eb46c50ab3b667a8d0e5b1d1818561a476f5ef58cd5afc8aeae05cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2e2d57620eb46c50ab3b667a8d0e5b1d1818561a476f5ef58cd5afc8aeae05cb->leave($__internal_2e2d57620eb46c50ab3b667a8d0e5b1d1818561a476f5ef58cd5afc8aeae05cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
