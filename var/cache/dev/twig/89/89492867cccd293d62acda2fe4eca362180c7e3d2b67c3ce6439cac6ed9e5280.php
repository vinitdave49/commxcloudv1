<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9e270eeacd186bbafc6239048a060786e4ed5bab83d64a451945298a00d97351 extends Twig_Template
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
        $__internal_419f5f41d7d860458113d87dc82fe78a5a4b4da11817267c5271d741f13eaa13 = $this->env->getExtension("native_profiler");
        $__internal_419f5f41d7d860458113d87dc82fe78a5a4b4da11817267c5271d741f13eaa13->enter($__internal_419f5f41d7d860458113d87dc82fe78a5a4b4da11817267c5271d741f13eaa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_419f5f41d7d860458113d87dc82fe78a5a4b4da11817267c5271d741f13eaa13->leave($__internal_419f5f41d7d860458113d87dc82fe78a5a4b4da11817267c5271d741f13eaa13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
