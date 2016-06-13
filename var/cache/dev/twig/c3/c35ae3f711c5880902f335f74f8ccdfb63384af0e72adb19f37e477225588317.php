<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5a5aaadd622760bd5534f0a492971b3500493cc188424925474d1e30fb3c0f3e extends Twig_Template
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
        $__internal_07be3ae6fe6a9175365efbe268726e4925aa729928bd9eb98d4f59299e3b5886 = $this->env->getExtension("native_profiler");
        $__internal_07be3ae6fe6a9175365efbe268726e4925aa729928bd9eb98d4f59299e3b5886->enter($__internal_07be3ae6fe6a9175365efbe268726e4925aa729928bd9eb98d4f59299e3b5886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_07be3ae6fe6a9175365efbe268726e4925aa729928bd9eb98d4f59299e3b5886->leave($__internal_07be3ae6fe6a9175365efbe268726e4925aa729928bd9eb98d4f59299e3b5886_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
