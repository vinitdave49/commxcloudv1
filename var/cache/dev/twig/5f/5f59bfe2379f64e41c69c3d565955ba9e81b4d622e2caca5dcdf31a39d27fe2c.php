<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_437e0af634ebdb4fc13967c24caacfed1dfc6a870fd7a55235ae2b05208a178e extends Twig_Template
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
        $__internal_513050e01858b978f9ca448c07a4198989da19802581ad440de7614818c44b16 = $this->env->getExtension("native_profiler");
        $__internal_513050e01858b978f9ca448c07a4198989da19802581ad440de7614818c44b16->enter($__internal_513050e01858b978f9ca448c07a4198989da19802581ad440de7614818c44b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_513050e01858b978f9ca448c07a4198989da19802581ad440de7614818c44b16->leave($__internal_513050e01858b978f9ca448c07a4198989da19802581ad440de7614818c44b16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
