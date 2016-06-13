<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4da05fb948b311f3ef44cf554126c3036acc6f1f7c8a6f3d2eea0188d9ae19fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68762036db285c2c3be8244c19663dc283cc3fbe574a3d9ae8345b6643654069 = $this->env->getExtension("native_profiler");
        $__internal_68762036db285c2c3be8244c19663dc283cc3fbe574a3d9ae8345b6643654069->enter($__internal_68762036db285c2c3be8244c19663dc283cc3fbe574a3d9ae8345b6643654069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_68762036db285c2c3be8244c19663dc283cc3fbe574a3d9ae8345b6643654069->leave($__internal_68762036db285c2c3be8244c19663dc283cc3fbe574a3d9ae8345b6643654069_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe48804fc5b5beccbb859a130fc8001af3bae5388150c1de509b29ee25031320 = $this->env->getExtension("native_profiler");
        $__internal_fe48804fc5b5beccbb859a130fc8001af3bae5388150c1de509b29ee25031320->enter($__internal_fe48804fc5b5beccbb859a130fc8001af3bae5388150c1de509b29ee25031320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fe48804fc5b5beccbb859a130fc8001af3bae5388150c1de509b29ee25031320->leave($__internal_fe48804fc5b5beccbb859a130fc8001af3bae5388150c1de509b29ee25031320_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
