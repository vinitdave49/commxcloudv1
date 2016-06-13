<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b35fbfcae753220a17d0a214aac198ac6209cad3244d3c843e1e7e600e0d507b extends Twig_Template
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
        $__internal_c038b0beba095adf7a5c3251e9f19b565c2e761541dcc70b0d39ca588f2205bf = $this->env->getExtension("native_profiler");
        $__internal_c038b0beba095adf7a5c3251e9f19b565c2e761541dcc70b0d39ca588f2205bf->enter($__internal_c038b0beba095adf7a5c3251e9f19b565c2e761541dcc70b0d39ca588f2205bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c038b0beba095adf7a5c3251e9f19b565c2e761541dcc70b0d39ca588f2205bf->leave($__internal_c038b0beba095adf7a5c3251e9f19b565c2e761541dcc70b0d39ca588f2205bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
