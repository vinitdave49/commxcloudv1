<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5ecff0aa8056ff4c5e0502ee4552536d6f49c4b43b1ae372a13b7c62f206a7ef extends Twig_Template
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
        $__internal_6a016f523936338ef179709b23769238b2a58c968042fecea001edac6abfebf8 = $this->env->getExtension("native_profiler");
        $__internal_6a016f523936338ef179709b23769238b2a58c968042fecea001edac6abfebf8->enter($__internal_6a016f523936338ef179709b23769238b2a58c968042fecea001edac6abfebf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6a016f523936338ef179709b23769238b2a58c968042fecea001edac6abfebf8->leave($__internal_6a016f523936338ef179709b23769238b2a58c968042fecea001edac6abfebf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
