<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0a7f2a990ddc331ec3838e4febbe3b71901617d0698f0475adfd5a0938ac0913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f8bdde756ac171ab40e4fbc07335708d98cd7e5714f0f6d11c151bee166449e9 = $this->env->getExtension("native_profiler");
        $__internal_f8bdde756ac171ab40e4fbc07335708d98cd7e5714f0f6d11c151bee166449e9->enter($__internal_f8bdde756ac171ab40e4fbc07335708d98cd7e5714f0f6d11c151bee166449e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bdde756ac171ab40e4fbc07335708d98cd7e5714f0f6d11c151bee166449e9->leave($__internal_f8bdde756ac171ab40e4fbc07335708d98cd7e5714f0f6d11c151bee166449e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e85a35445d20f8ebb05aeedc1b4d260d6e4acca13edeba99732458561ae16275 = $this->env->getExtension("native_profiler");
        $__internal_e85a35445d20f8ebb05aeedc1b4d260d6e4acca13edeba99732458561ae16275->enter($__internal_e85a35445d20f8ebb05aeedc1b4d260d6e4acca13edeba99732458561ae16275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e85a35445d20f8ebb05aeedc1b4d260d6e4acca13edeba99732458561ae16275->leave($__internal_e85a35445d20f8ebb05aeedc1b4d260d6e4acca13edeba99732458561ae16275_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b65daa6383312b8c4acd854508d4ba968c4da78dbeeb30638977abeeb09462f = $this->env->getExtension("native_profiler");
        $__internal_0b65daa6383312b8c4acd854508d4ba968c4da78dbeeb30638977abeeb09462f->enter($__internal_0b65daa6383312b8c4acd854508d4ba968c4da78dbeeb30638977abeeb09462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b65daa6383312b8c4acd854508d4ba968c4da78dbeeb30638977abeeb09462f->leave($__internal_0b65daa6383312b8c4acd854508d4ba968c4da78dbeeb30638977abeeb09462f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_235f7f76d5dd1ada2e5fbd1b26bb3930b65353a11126601ca3dd07b8c2f0524b = $this->env->getExtension("native_profiler");
        $__internal_235f7f76d5dd1ada2e5fbd1b26bb3930b65353a11126601ca3dd07b8c2f0524b->enter($__internal_235f7f76d5dd1ada2e5fbd1b26bb3930b65353a11126601ca3dd07b8c2f0524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_235f7f76d5dd1ada2e5fbd1b26bb3930b65353a11126601ca3dd07b8c2f0524b->leave($__internal_235f7f76d5dd1ada2e5fbd1b26bb3930b65353a11126601ca3dd07b8c2f0524b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
