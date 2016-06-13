<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2e8f68365436fd51f737b0474a6c7a72e4718e243dddf54917224772534d9144 extends Twig_Template
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
        $__internal_e8b0091250f315b18a400f96c97afb432fbdc2e0d6c32e8dcb74bd2c3f7ad1e0 = $this->env->getExtension("native_profiler");
        $__internal_e8b0091250f315b18a400f96c97afb432fbdc2e0d6c32e8dcb74bd2c3f7ad1e0->enter($__internal_e8b0091250f315b18a400f96c97afb432fbdc2e0d6c32e8dcb74bd2c3f7ad1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e8b0091250f315b18a400f96c97afb432fbdc2e0d6c32e8dcb74bd2c3f7ad1e0->leave($__internal_e8b0091250f315b18a400f96c97afb432fbdc2e0d6c32e8dcb74bd2c3f7ad1e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
