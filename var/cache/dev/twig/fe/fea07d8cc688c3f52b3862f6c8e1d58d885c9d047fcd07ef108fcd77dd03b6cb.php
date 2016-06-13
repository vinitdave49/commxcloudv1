<?php

/* ::base.html.twig */
class __TwigTemplate_3285f86ac4018418e7fdd11fd1ec85da6f48029f8505b488b4485b6f2d7b070e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e26c577b5451fb43c6f2f8dd30932ee78de74ad20d5f8a6ccd32d9513ab3cf3 = $this->env->getExtension("native_profiler");
        $__internal_2e26c577b5451fb43c6f2f8dd30932ee78de74ad20d5f8a6ccd32d9513ab3cf3->enter($__internal_2e26c577b5451fb43c6f2f8dd30932ee78de74ad20d5f8a6ccd32d9513ab3cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2e26c577b5451fb43c6f2f8dd30932ee78de74ad20d5f8a6ccd32d9513ab3cf3->leave($__internal_2e26c577b5451fb43c6f2f8dd30932ee78de74ad20d5f8a6ccd32d9513ab3cf3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b9ddca6383e426842a991dd9db428ad5c7dfb0314540cc5f77b25b2a8402686 = $this->env->getExtension("native_profiler");
        $__internal_8b9ddca6383e426842a991dd9db428ad5c7dfb0314540cc5f77b25b2a8402686->enter($__internal_8b9ddca6383e426842a991dd9db428ad5c7dfb0314540cc5f77b25b2a8402686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b9ddca6383e426842a991dd9db428ad5c7dfb0314540cc5f77b25b2a8402686->leave($__internal_8b9ddca6383e426842a991dd9db428ad5c7dfb0314540cc5f77b25b2a8402686_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e9989e2af553dbd3496b227d959c9ae8f6b85b72539e2dfcedb5cd313b01905 = $this->env->getExtension("native_profiler");
        $__internal_2e9989e2af553dbd3496b227d959c9ae8f6b85b72539e2dfcedb5cd313b01905->enter($__internal_2e9989e2af553dbd3496b227d959c9ae8f6b85b72539e2dfcedb5cd313b01905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e9989e2af553dbd3496b227d959c9ae8f6b85b72539e2dfcedb5cd313b01905->leave($__internal_2e9989e2af553dbd3496b227d959c9ae8f6b85b72539e2dfcedb5cd313b01905_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a2c0640ccb815fba3513542b3cd2e50e07684f9070faf2bb492947004b1b615 = $this->env->getExtension("native_profiler");
        $__internal_0a2c0640ccb815fba3513542b3cd2e50e07684f9070faf2bb492947004b1b615->enter($__internal_0a2c0640ccb815fba3513542b3cd2e50e07684f9070faf2bb492947004b1b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a2c0640ccb815fba3513542b3cd2e50e07684f9070faf2bb492947004b1b615->leave($__internal_0a2c0640ccb815fba3513542b3cd2e50e07684f9070faf2bb492947004b1b615_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f9677eb4d5a5ad4cbf63fbffd018981fe431fe6332b65368adcbde17d898255 = $this->env->getExtension("native_profiler");
        $__internal_4f9677eb4d5a5ad4cbf63fbffd018981fe431fe6332b65368adcbde17d898255->enter($__internal_4f9677eb4d5a5ad4cbf63fbffd018981fe431fe6332b65368adcbde17d898255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4f9677eb4d5a5ad4cbf63fbffd018981fe431fe6332b65368adcbde17d898255->leave($__internal_4f9677eb4d5a5ad4cbf63fbffd018981fe431fe6332b65368adcbde17d898255_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
