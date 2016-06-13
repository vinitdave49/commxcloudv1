<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9cb264142e4a22944445145406c8004d86bd81060b0b5aa10e92cd27ef6e81bd extends Twig_Template
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
        $__internal_74beb0f2b3b4fab22e2908dd17117bcce1cb7e00bb71a4f7f251fdb7450e1c3d = $this->env->getExtension("native_profiler");
        $__internal_74beb0f2b3b4fab22e2908dd17117bcce1cb7e00bb71a4f7f251fdb7450e1c3d->enter($__internal_74beb0f2b3b4fab22e2908dd17117bcce1cb7e00bb71a4f7f251fdb7450e1c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_74beb0f2b3b4fab22e2908dd17117bcce1cb7e00bb71a4f7f251fdb7450e1c3d->leave($__internal_74beb0f2b3b4fab22e2908dd17117bcce1cb7e00bb71a4f7f251fdb7450e1c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
