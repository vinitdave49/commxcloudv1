<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_393be070b0bd93ccbd189161b56a4b542490d77aa598eda705da9d5e66383a8c extends Twig_Template
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
        $__internal_902601b40f6cdf6032429c2a67eb7d3fc2ca972b67a7cd456cfef26f5b396b82 = $this->env->getExtension("native_profiler");
        $__internal_902601b40f6cdf6032429c2a67eb7d3fc2ca972b67a7cd456cfef26f5b396b82->enter($__internal_902601b40f6cdf6032429c2a67eb7d3fc2ca972b67a7cd456cfef26f5b396b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_902601b40f6cdf6032429c2a67eb7d3fc2ca972b67a7cd456cfef26f5b396b82->leave($__internal_902601b40f6cdf6032429c2a67eb7d3fc2ca972b67a7cd456cfef26f5b396b82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
