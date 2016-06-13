<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4ac516133095035bd1f9b64ffef8a452376894033f5e06c3df3f037bb5a3f596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeb1f96e79fbdd22e63354e0ef96c8c45e89450ef07572c2180fb94dbb2fb620 = $this->env->getExtension("native_profiler");
        $__internal_aeb1f96e79fbdd22e63354e0ef96c8c45e89450ef07572c2180fb94dbb2fb620->enter($__internal_aeb1f96e79fbdd22e63354e0ef96c8c45e89450ef07572c2180fb94dbb2fb620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb1f96e79fbdd22e63354e0ef96c8c45e89450ef07572c2180fb94dbb2fb620->leave($__internal_aeb1f96e79fbdd22e63354e0ef96c8c45e89450ef07572c2180fb94dbb2fb620_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94a099c49debeefb07e42a0305623dade7df7f39d89c56c53aac88ede56fe53d = $this->env->getExtension("native_profiler");
        $__internal_94a099c49debeefb07e42a0305623dade7df7f39d89c56c53aac88ede56fe53d->enter($__internal_94a099c49debeefb07e42a0305623dade7df7f39d89c56c53aac88ede56fe53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94a099c49debeefb07e42a0305623dade7df7f39d89c56c53aac88ede56fe53d->leave($__internal_94a099c49debeefb07e42a0305623dade7df7f39d89c56c53aac88ede56fe53d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc280d07897db28e14561ba5da68b1fff995e71290a143bf18112e8daa01612b = $this->env->getExtension("native_profiler");
        $__internal_dc280d07897db28e14561ba5da68b1fff995e71290a143bf18112e8daa01612b->enter($__internal_dc280d07897db28e14561ba5da68b1fff995e71290a143bf18112e8daa01612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc280d07897db28e14561ba5da68b1fff995e71290a143bf18112e8daa01612b->leave($__internal_dc280d07897db28e14561ba5da68b1fff995e71290a143bf18112e8daa01612b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81bb81ea773fdc49d7751113a05c6d735dea7045eb9708f9a4e27532842c4279 = $this->env->getExtension("native_profiler");
        $__internal_81bb81ea773fdc49d7751113a05c6d735dea7045eb9708f9a4e27532842c4279->enter($__internal_81bb81ea773fdc49d7751113a05c6d735dea7045eb9708f9a4e27532842c4279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81bb81ea773fdc49d7751113a05c6d735dea7045eb9708f9a4e27532842c4279->leave($__internal_81bb81ea773fdc49d7751113a05c6d735dea7045eb9708f9a4e27532842c4279_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
