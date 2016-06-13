<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_174a39dfb1f65e4f060843e140f089fccafc740649e8ea5d66d344d178c46b21 extends Twig_Template
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
        $__internal_dea364df21f31548d49e5891fc204321ad31e8aa08c37e54840ab5da3025298a = $this->env->getExtension("native_profiler");
        $__internal_dea364df21f31548d49e5891fc204321ad31e8aa08c37e54840ab5da3025298a->enter($__internal_dea364df21f31548d49e5891fc204321ad31e8aa08c37e54840ab5da3025298a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_dea364df21f31548d49e5891fc204321ad31e8aa08c37e54840ab5da3025298a->leave($__internal_dea364df21f31548d49e5891fc204321ad31e8aa08c37e54840ab5da3025298a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
