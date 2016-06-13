<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_aeb919616670201274d2f0b33ee0f151afbf2e0b9ccf9b2d16c7101553b1a841 extends Twig_Template
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
        $__internal_4b924d059e435b00c740645b9e08cf9de8efcce74e89102561deb20658cb99bd = $this->env->getExtension("native_profiler");
        $__internal_4b924d059e435b00c740645b9e08cf9de8efcce74e89102561deb20658cb99bd->enter($__internal_4b924d059e435b00c740645b9e08cf9de8efcce74e89102561deb20658cb99bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4b924d059e435b00c740645b9e08cf9de8efcce74e89102561deb20658cb99bd->leave($__internal_4b924d059e435b00c740645b9e08cf9de8efcce74e89102561deb20658cb99bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
