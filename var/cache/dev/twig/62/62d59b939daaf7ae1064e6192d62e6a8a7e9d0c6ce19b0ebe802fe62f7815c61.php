<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_52cde2d4fccb1930d940820f52942b9de4675784230f84b0c8ba33c005b612bf extends Twig_Template
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
        $__internal_3e6ed781494909a27d5a0ec9d741bac0b95a6fb0eed28997da3eb4e25f26224a = $this->env->getExtension("native_profiler");
        $__internal_3e6ed781494909a27d5a0ec9d741bac0b95a6fb0eed28997da3eb4e25f26224a->enter($__internal_3e6ed781494909a27d5a0ec9d741bac0b95a6fb0eed28997da3eb4e25f26224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3e6ed781494909a27d5a0ec9d741bac0b95a6fb0eed28997da3eb4e25f26224a->leave($__internal_3e6ed781494909a27d5a0ec9d741bac0b95a6fb0eed28997da3eb4e25f26224a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
