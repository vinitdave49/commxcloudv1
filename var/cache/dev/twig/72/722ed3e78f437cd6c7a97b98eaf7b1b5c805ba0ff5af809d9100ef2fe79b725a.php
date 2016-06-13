<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_85d54add81f12afc79c0ef9ce72b3d1b16c1e81b9bb26cfa7d36774e23f19b29 extends Twig_Template
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
        $__internal_7c52fed984795401f2c0fc8e2c7388baf6c02187eeb6f9678b0c6ba08feac64a = $this->env->getExtension("native_profiler");
        $__internal_7c52fed984795401f2c0fc8e2c7388baf6c02187eeb6f9678b0c6ba08feac64a->enter($__internal_7c52fed984795401f2c0fc8e2c7388baf6c02187eeb6f9678b0c6ba08feac64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7c52fed984795401f2c0fc8e2c7388baf6c02187eeb6f9678b0c6ba08feac64a->leave($__internal_7c52fed984795401f2c0fc8e2c7388baf6c02187eeb6f9678b0c6ba08feac64a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
