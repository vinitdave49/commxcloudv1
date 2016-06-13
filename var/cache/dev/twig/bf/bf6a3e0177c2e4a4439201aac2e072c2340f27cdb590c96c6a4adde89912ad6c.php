<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dd947b8a9a775c00a372a72038711fd9c68f0a2a8f878a6822e86c6d25dc973e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31d4070fce38b1bb962ad7c7120d2bc943641a761603ac8f9169057ec5f1ef1e = $this->env->getExtension("native_profiler");
        $__internal_31d4070fce38b1bb962ad7c7120d2bc943641a761603ac8f9169057ec5f1ef1e->enter($__internal_31d4070fce38b1bb962ad7c7120d2bc943641a761603ac8f9169057ec5f1ef1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d4070fce38b1bb962ad7c7120d2bc943641a761603ac8f9169057ec5f1ef1e->leave($__internal_31d4070fce38b1bb962ad7c7120d2bc943641a761603ac8f9169057ec5f1ef1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7964fbbe1c8691ceddfde0d82edcdef4feff08968182f37814ac09eaddd3da65 = $this->env->getExtension("native_profiler");
        $__internal_7964fbbe1c8691ceddfde0d82edcdef4feff08968182f37814ac09eaddd3da65->enter($__internal_7964fbbe1c8691ceddfde0d82edcdef4feff08968182f37814ac09eaddd3da65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7964fbbe1c8691ceddfde0d82edcdef4feff08968182f37814ac09eaddd3da65->leave($__internal_7964fbbe1c8691ceddfde0d82edcdef4feff08968182f37814ac09eaddd3da65_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d0e994a6d73b5ae08163849227fca38ff4c073fb3db6eeaf699de2a67a988f0 = $this->env->getExtension("native_profiler");
        $__internal_0d0e994a6d73b5ae08163849227fca38ff4c073fb3db6eeaf699de2a67a988f0->enter($__internal_0d0e994a6d73b5ae08163849227fca38ff4c073fb3db6eeaf699de2a67a988f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0d0e994a6d73b5ae08163849227fca38ff4c073fb3db6eeaf699de2a67a988f0->leave($__internal_0d0e994a6d73b5ae08163849227fca38ff4c073fb3db6eeaf699de2a67a988f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
