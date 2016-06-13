<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c51830db3b234207eb99bcd9a61e27799627dbccca31c0027b8173533235adf6 extends Twig_Template
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
        $__internal_f7cbca49a37f00b1ad5438bee898679c27bc4362016ca7ce5d82f33cfcd632bb = $this->env->getExtension("native_profiler");
        $__internal_f7cbca49a37f00b1ad5438bee898679c27bc4362016ca7ce5d82f33cfcd632bb->enter($__internal_f7cbca49a37f00b1ad5438bee898679c27bc4362016ca7ce5d82f33cfcd632bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f7cbca49a37f00b1ad5438bee898679c27bc4362016ca7ce5d82f33cfcd632bb->leave($__internal_f7cbca49a37f00b1ad5438bee898679c27bc4362016ca7ce5d82f33cfcd632bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
