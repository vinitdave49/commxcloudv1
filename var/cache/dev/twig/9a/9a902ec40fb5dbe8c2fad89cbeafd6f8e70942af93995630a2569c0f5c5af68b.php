<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_75b5810bddbb601a27de33670c8ed1b6c29fb985bfa00ab3d8d95a49f7c73e43 extends Twig_Template
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
        $__internal_fbb84023db2b0674f3a8070c628ceb726cef87977072450232f493f0f61949bc = $this->env->getExtension("native_profiler");
        $__internal_fbb84023db2b0674f3a8070c628ceb726cef87977072450232f493f0f61949bc->enter($__internal_fbb84023db2b0674f3a8070c628ceb726cef87977072450232f493f0f61949bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fbb84023db2b0674f3a8070c628ceb726cef87977072450232f493f0f61949bc->leave($__internal_fbb84023db2b0674f3a8070c628ceb726cef87977072450232f493f0f61949bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
