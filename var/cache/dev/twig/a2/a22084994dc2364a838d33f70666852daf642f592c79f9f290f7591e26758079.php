<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_75e5359afbca55b61747de0e891d2f2eeeb65feaaa0ec52e0f864888651c1f96 extends Twig_Template
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
        $__internal_869c758a49c6b757bcb3d576f77be99f3bf744fa13a8e68a098fcf776e149fc1 = $this->env->getExtension("native_profiler");
        $__internal_869c758a49c6b757bcb3d576f77be99f3bf744fa13a8e68a098fcf776e149fc1->enter($__internal_869c758a49c6b757bcb3d576f77be99f3bf744fa13a8e68a098fcf776e149fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_869c758a49c6b757bcb3d576f77be99f3bf744fa13a8e68a098fcf776e149fc1->leave($__internal_869c758a49c6b757bcb3d576f77be99f3bf744fa13a8e68a098fcf776e149fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
