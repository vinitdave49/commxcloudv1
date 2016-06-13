<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d95d9f1c88520226d82617626527a3ba664c8c4853672364b89f2eadd2f867e8 extends Twig_Template
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
        $__internal_c6cb951856870806c63b3802e66011a0d769a84e5aa55a13838dd663e673cfaa = $this->env->getExtension("native_profiler");
        $__internal_c6cb951856870806c63b3802e66011a0d769a84e5aa55a13838dd663e673cfaa->enter($__internal_c6cb951856870806c63b3802e66011a0d769a84e5aa55a13838dd663e673cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c6cb951856870806c63b3802e66011a0d769a84e5aa55a13838dd663e673cfaa->leave($__internal_c6cb951856870806c63b3802e66011a0d769a84e5aa55a13838dd663e673cfaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
