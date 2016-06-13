<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f5e5058361d67c1a19a92b544b96028821dcb5bc4219e33251fa9c15cb6d85d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1498f3bc0755d31d90e003c148d63051a38017ca672e23014e503a29dc4ea308 = $this->env->getExtension("native_profiler");
        $__internal_1498f3bc0755d31d90e003c148d63051a38017ca672e23014e503a29dc4ea308->enter($__internal_1498f3bc0755d31d90e003c148d63051a38017ca672e23014e503a29dc4ea308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1498f3bc0755d31d90e003c148d63051a38017ca672e23014e503a29dc4ea308->leave($__internal_1498f3bc0755d31d90e003c148d63051a38017ca672e23014e503a29dc4ea308_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_486f02b4df2db8e88b1f1fafeeda64465bdcbaa2d3a7efa85f60bff612f675b9 = $this->env->getExtension("native_profiler");
        $__internal_486f02b4df2db8e88b1f1fafeeda64465bdcbaa2d3a7efa85f60bff612f675b9->enter($__internal_486f02b4df2db8e88b1f1fafeeda64465bdcbaa2d3a7efa85f60bff612f675b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_486f02b4df2db8e88b1f1fafeeda64465bdcbaa2d3a7efa85f60bff612f675b9->leave($__internal_486f02b4df2db8e88b1f1fafeeda64465bdcbaa2d3a7efa85f60bff612f675b9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7930eee5d75429bb7fb027d602d47dfa7e03a66a4d9b47d9c4fb46cf906a3971 = $this->env->getExtension("native_profiler");
        $__internal_7930eee5d75429bb7fb027d602d47dfa7e03a66a4d9b47d9c4fb46cf906a3971->enter($__internal_7930eee5d75429bb7fb027d602d47dfa7e03a66a4d9b47d9c4fb46cf906a3971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7930eee5d75429bb7fb027d602d47dfa7e03a66a4d9b47d9c4fb46cf906a3971->leave($__internal_7930eee5d75429bb7fb027d602d47dfa7e03a66a4d9b47d9c4fb46cf906a3971_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4bc22ac33ee0340b51cfb9afea081c8540e03ec3338b37009b0a88feb1b2549 = $this->env->getExtension("native_profiler");
        $__internal_d4bc22ac33ee0340b51cfb9afea081c8540e03ec3338b37009b0a88feb1b2549->enter($__internal_d4bc22ac33ee0340b51cfb9afea081c8540e03ec3338b37009b0a88feb1b2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d4bc22ac33ee0340b51cfb9afea081c8540e03ec3338b37009b0a88feb1b2549->leave($__internal_d4bc22ac33ee0340b51cfb9afea081c8540e03ec3338b37009b0a88feb1b2549_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
