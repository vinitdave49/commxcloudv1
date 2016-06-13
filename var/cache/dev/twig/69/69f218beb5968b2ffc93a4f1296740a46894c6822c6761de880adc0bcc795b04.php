<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3c32ccbd87cdbfbf70233d0b1fd3adf4f17993174ad4fdb3a58eb9e4c5bd5fd8 extends Twig_Template
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
        $__internal_2c1e7b7092d2e1393c37df3d75a7a5b5a57e0f1be0003ff762346a3e1fa4d723 = $this->env->getExtension("native_profiler");
        $__internal_2c1e7b7092d2e1393c37df3d75a7a5b5a57e0f1be0003ff762346a3e1fa4d723->enter($__internal_2c1e7b7092d2e1393c37df3d75a7a5b5a57e0f1be0003ff762346a3e1fa4d723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2c1e7b7092d2e1393c37df3d75a7a5b5a57e0f1be0003ff762346a3e1fa4d723->leave($__internal_2c1e7b7092d2e1393c37df3d75a7a5b5a57e0f1be0003ff762346a3e1fa4d723_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
