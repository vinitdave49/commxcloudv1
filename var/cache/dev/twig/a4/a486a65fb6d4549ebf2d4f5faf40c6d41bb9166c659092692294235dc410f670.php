<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d6f87da4efc7c4b593670312e5f5131f686764591e691af2ae3265f64bd746aa extends Twig_Template
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
        $__internal_8d65e0d3aba0e5869fca12b7ac0706b58783056492742e65ece721b17fd0e6bc = $this->env->getExtension("native_profiler");
        $__internal_8d65e0d3aba0e5869fca12b7ac0706b58783056492742e65ece721b17fd0e6bc->enter($__internal_8d65e0d3aba0e5869fca12b7ac0706b58783056492742e65ece721b17fd0e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8d65e0d3aba0e5869fca12b7ac0706b58783056492742e65ece721b17fd0e6bc->leave($__internal_8d65e0d3aba0e5869fca12b7ac0706b58783056492742e65ece721b17fd0e6bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
