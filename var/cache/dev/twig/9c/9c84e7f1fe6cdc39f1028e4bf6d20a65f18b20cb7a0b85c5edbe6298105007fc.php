<?php

/* CommcloudVoiceBundle:Supervisor:base_report.html.twig */
class __TwigTemplate_aebf3d8517bf60bab9450861eefb9764bac89e62dc931469c1ce757f7ee550a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'input' => array($this, 'block_input'),
            'div' => array($this, 'block_div'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f96e2042c1f7b27c026c3a9e2eeb2116c0bb35c6159288a8e612e24cc5100ea6 = $this->env->getExtension("native_profiler");
        $__internal_f96e2042c1f7b27c026c3a9e2eeb2116c0bb35c6159288a8e612e24cc5100ea6->enter($__internal_f96e2042c1f7b27c026c3a9e2eeb2116c0bb35c6159288a8e612e24cc5100ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor:base_report.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
                    <p class=\"text-left\">
                        <strong>";
        // line 8
        $this->displayBlock('input', $context, $blocks);
        echo "</strong>
                    </p>
                </div>
                <div class=\"box-body\">
                    <div id=\"table_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\"></div>
                            <div class=\"col-sm-6\"></div>
                        </div>
                        ";
        // line 17
        $this->displayBlock('div', $context, $blocks);
        // line 19
        echo "                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_f96e2042c1f7b27c026c3a9e2eeb2116c0bb35c6159288a8e612e24cc5100ea6->leave($__internal_f96e2042c1f7b27c026c3a9e2eeb2116c0bb35c6159288a8e612e24cc5100ea6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_420a85be5995c05a27606c99ab16393ceb16b22bb30474f953643eefe2b73173 = $this->env->getExtension("native_profiler");
        $__internal_420a85be5995c05a27606c99ab16393ceb16b22bb30474f953643eefe2b73173->enter($__internal_420a85be5995c05a27606c99ab16393ceb16b22bb30474f953643eefe2b73173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Report ";
        
        $__internal_420a85be5995c05a27606c99ab16393ceb16b22bb30474f953643eefe2b73173->leave($__internal_420a85be5995c05a27606c99ab16393ceb16b22bb30474f953643eefe2b73173_prof);

    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
        $__internal_633238cc33b0787d9ec8f6971b88c5c9109b6cf5c8b1248c33cffe85b98aec3f = $this->env->getExtension("native_profiler");
        $__internal_633238cc33b0787d9ec8f6971b88c5c9109b6cf5c8b1248c33cffe85b98aec3f->enter($__internal_633238cc33b0787d9ec8f6971b88c5c9109b6cf5c8b1248c33cffe85b98aec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "input"));

        
        $__internal_633238cc33b0787d9ec8f6971b88c5c9109b6cf5c8b1248c33cffe85b98aec3f->leave($__internal_633238cc33b0787d9ec8f6971b88c5c9109b6cf5c8b1248c33cffe85b98aec3f_prof);

    }

    // line 17
    public function block_div($context, array $blocks = array())
    {
        $__internal_401c43eff7f839b23e372e075710c3746af139f8719ace3ec3d2dc97435c0250 = $this->env->getExtension("native_profiler");
        $__internal_401c43eff7f839b23e372e075710c3746af139f8719ace3ec3d2dc97435c0250->enter($__internal_401c43eff7f839b23e372e075710c3746af139f8719ace3ec3d2dc97435c0250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 18
        echo "                        ";
        
        $__internal_401c43eff7f839b23e372e075710c3746af139f8719ace3ec3d2dc97435c0250->leave($__internal_401c43eff7f839b23e372e075710c3746af139f8719ace3ec3d2dc97435c0250_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7cf8182bca26a2223bf6d008daf65704e602692d008707a10763111268253f7 = $this->env->getExtension("native_profiler");
        $__internal_f7cf8182bca26a2223bf6d008daf65704e602692d008707a10763111268253f7->enter($__internal_f7cf8182bca26a2223bf6d008daf65704e602692d008707a10763111268253f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f7cf8182bca26a2223bf6d008daf65704e602692d008707a10763111268253f7->leave($__internal_f7cf8182bca26a2223bf6d008daf65704e602692d008707a10763111268253f7_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor:base_report.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  96 => 18,  90 => 17,  79 => 8,  67 => 6,  60 => 25,  52 => 19,  50 => 17,  38 => 8,  33 => 6,  26 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">{% block title %}Report {% endblock %}</h3>*/
/*                     <p class="text-left">*/
/*                         <strong>{% block input %}{% endblock %}</strong>*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6"></div>*/
/*                             <div class="col-sm-6"></div>*/
/*                         </div>*/
/*                         {% block div %}*/
/*                         {% endblock %}*/
/*                     </div>                    */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% block javascripts %}*/
/* {% endblock %}*/
