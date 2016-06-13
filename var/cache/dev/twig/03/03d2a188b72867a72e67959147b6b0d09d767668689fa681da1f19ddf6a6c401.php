<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_75932ea2aa1fe082c64c77f3c0c93722f6360de2e42ed9d80883a7affa56565f extends Twig_Template
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
        $__internal_f9db7d1fc3c2f40293e8f868de268a040cc2dc7cfea8c31527ff65e68a8ca81a = $this->env->getExtension("native_profiler");
        $__internal_f9db7d1fc3c2f40293e8f868de268a040cc2dc7cfea8c31527ff65e68a8ca81a->enter($__internal_f9db7d1fc3c2f40293e8f868de268a040cc2dc7cfea8c31527ff65e68a8ca81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f9db7d1fc3c2f40293e8f868de268a040cc2dc7cfea8c31527ff65e68a8ca81a->leave($__internal_f9db7d1fc3c2f40293e8f868de268a040cc2dc7cfea8c31527ff65e68a8ca81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
