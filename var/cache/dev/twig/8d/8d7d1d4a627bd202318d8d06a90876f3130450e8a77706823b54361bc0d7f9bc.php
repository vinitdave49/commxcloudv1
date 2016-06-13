<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_20fef9c88fb5efbf1a7eaa36767f9bca55f32e95c2c756cdbb8f33e23799522d extends Twig_Template
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
        $__internal_83e5f169e88eb146fa93a4b65737fc38cc961cef5f521687bbdcddca5d718185 = $this->env->getExtension("native_profiler");
        $__internal_83e5f169e88eb146fa93a4b65737fc38cc961cef5f521687bbdcddca5d718185->enter($__internal_83e5f169e88eb146fa93a4b65737fc38cc961cef5f521687bbdcddca5d718185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_83e5f169e88eb146fa93a4b65737fc38cc961cef5f521687bbdcddca5d718185->leave($__internal_83e5f169e88eb146fa93a4b65737fc38cc961cef5f521687bbdcddca5d718185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
