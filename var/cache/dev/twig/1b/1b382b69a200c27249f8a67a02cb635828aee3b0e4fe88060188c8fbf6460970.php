<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8c0873889d8ab9c99e4c8b85ac1d08e85837f6b31b7e9721c744bad325a7f473 extends Twig_Template
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
        $__internal_5fa0021d722ab9aaf852160ddec4edd76219404d95e23b0b36b7af0ab7aea005 = $this->env->getExtension("native_profiler");
        $__internal_5fa0021d722ab9aaf852160ddec4edd76219404d95e23b0b36b7af0ab7aea005->enter($__internal_5fa0021d722ab9aaf852160ddec4edd76219404d95e23b0b36b7af0ab7aea005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5fa0021d722ab9aaf852160ddec4edd76219404d95e23b0b36b7af0ab7aea005->leave($__internal_5fa0021d722ab9aaf852160ddec4edd76219404d95e23b0b36b7af0ab7aea005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
