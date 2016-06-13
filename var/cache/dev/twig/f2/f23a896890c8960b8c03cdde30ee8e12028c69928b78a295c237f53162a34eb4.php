<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c923f7bd01d85bc6b998d8dce565d30e374b0454a4e8094d8b44714d267dbbde extends Twig_Template
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
        $__internal_b88a30925f9c6ecd839d53185e8a42502583e2e91532e37df0778fbc2ca65416 = $this->env->getExtension("native_profiler");
        $__internal_b88a30925f9c6ecd839d53185e8a42502583e2e91532e37df0778fbc2ca65416->enter($__internal_b88a30925f9c6ecd839d53185e8a42502583e2e91532e37df0778fbc2ca65416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b88a30925f9c6ecd839d53185e8a42502583e2e91532e37df0778fbc2ca65416->leave($__internal_b88a30925f9c6ecd839d53185e8a42502583e2e91532e37df0778fbc2ca65416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
