<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6e3759ad6a74308fa81a27ee8b73fe7f841dc55c352b23b0c248371441892d22 extends Twig_Template
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
        $__internal_b1ddbf32d79f019ae304db8a68fe8a537a5acd09eef56931dd2cac4b97cca9d8 = $this->env->getExtension("native_profiler");
        $__internal_b1ddbf32d79f019ae304db8a68fe8a537a5acd09eef56931dd2cac4b97cca9d8->enter($__internal_b1ddbf32d79f019ae304db8a68fe8a537a5acd09eef56931dd2cac4b97cca9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b1ddbf32d79f019ae304db8a68fe8a537a5acd09eef56931dd2cac4b97cca9d8->leave($__internal_b1ddbf32d79f019ae304db8a68fe8a537a5acd09eef56931dd2cac4b97cca9d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
