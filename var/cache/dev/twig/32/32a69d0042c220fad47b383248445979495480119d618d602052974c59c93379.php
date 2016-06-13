<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e17b593126617fc005a20844d8cb3a1ef5b82490a5f2df73bfff0f25fcff3019 extends Twig_Template
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
        $__internal_9da975d7f1c09dbf5f677a17aad77bc811aa9143c252d511c23dc4b5c9c2d4c2 = $this->env->getExtension("native_profiler");
        $__internal_9da975d7f1c09dbf5f677a17aad77bc811aa9143c252d511c23dc4b5c9c2d4c2->enter($__internal_9da975d7f1c09dbf5f677a17aad77bc811aa9143c252d511c23dc4b5c9c2d4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9da975d7f1c09dbf5f677a17aad77bc811aa9143c252d511c23dc4b5c9c2d4c2->leave($__internal_9da975d7f1c09dbf5f677a17aad77bc811aa9143c252d511c23dc4b5c9c2d4c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
