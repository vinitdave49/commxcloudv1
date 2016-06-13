<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4c4701efdafa8a50ffc7249f0f6108b97a7ce1924591b36424708e79f925e145 extends Twig_Template
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
        $__internal_c94f99e9b15381a5d7965983d97953d92122c08058affcda579a15eec7831288 = $this->env->getExtension("native_profiler");
        $__internal_c94f99e9b15381a5d7965983d97953d92122c08058affcda579a15eec7831288->enter($__internal_c94f99e9b15381a5d7965983d97953d92122c08058affcda579a15eec7831288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c94f99e9b15381a5d7965983d97953d92122c08058affcda579a15eec7831288->leave($__internal_c94f99e9b15381a5d7965983d97953d92122c08058affcda579a15eec7831288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
