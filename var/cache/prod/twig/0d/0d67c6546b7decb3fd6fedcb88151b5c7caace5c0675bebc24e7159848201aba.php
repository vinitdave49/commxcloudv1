<?php

/* CommcloudVoiceBundle:Supervisor:base_report.html.twig */
class __TwigTemplate_e8d67611f7bf382c936a6bfef620443e0a3b676022e6e7d25a9fc9b46d3b10bb extends Twig_Template
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Report ";
    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
    }

    // line 17
    public function block_div($context, array $blocks = array())
    {
        // line 18
        echo "                        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor:base_report.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  75 => 18,  72 => 17,  67 => 8,  61 => 6,  57 => 25,  49 => 19,  47 => 17,  35 => 8,  30 => 6,  23 => 1,);
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
