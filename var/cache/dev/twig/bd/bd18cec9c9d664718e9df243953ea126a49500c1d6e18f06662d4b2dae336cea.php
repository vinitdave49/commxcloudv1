<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e03945d532781ab25df9add08355e41cc04d15c94eb9d242313ca490a45513f7 extends Twig_Template
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
        $__internal_76e4fe8102851527f54298c8a617fb2cab82ed96f359e85523dae06c4d00ad6f = $this->env->getExtension("native_profiler");
        $__internal_76e4fe8102851527f54298c8a617fb2cab82ed96f359e85523dae06c4d00ad6f->enter($__internal_76e4fe8102851527f54298c8a617fb2cab82ed96f359e85523dae06c4d00ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_76e4fe8102851527f54298c8a617fb2cab82ed96f359e85523dae06c4d00ad6f->leave($__internal_76e4fe8102851527f54298c8a617fb2cab82ed96f359e85523dae06c4d00ad6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
