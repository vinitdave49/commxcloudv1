<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1f27dd2c62326e13770daf72d0763a31c8636f6c39232941d509bb82600d9064 extends Twig_Template
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
        $__internal_e3b8da6c49859c88b786588e8dcf00b46a235cf5e50e62d41d73b7b06f9e83fe = $this->env->getExtension("native_profiler");
        $__internal_e3b8da6c49859c88b786588e8dcf00b46a235cf5e50e62d41d73b7b06f9e83fe->enter($__internal_e3b8da6c49859c88b786588e8dcf00b46a235cf5e50e62d41d73b7b06f9e83fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e3b8da6c49859c88b786588e8dcf00b46a235cf5e50e62d41d73b7b06f9e83fe->leave($__internal_e3b8da6c49859c88b786588e8dcf00b46a235cf5e50e62d41d73b7b06f9e83fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
