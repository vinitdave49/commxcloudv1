<?php

/* CommcloudVoiceBundle:Supervisor:base_filter.html.twig */
class __TwigTemplate_0ecef692996f5dd7a8a4ab69a3d791a0f63a76392b6fbeb2e8cd9aebe8bd7c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'div' => array($this, 'block_div'),
            'button' => array($this, 'block_button'),
            'reportcontainer' => array($this, 'block_reportcontainer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1da5f05428dead1b20f0d996accce43bd11788e53ea783c5981d4fdedd9e708 = $this->env->getExtension("native_profiler");
        $__internal_c1da5f05428dead1b20f0d996accce43bd11788e53ea783c5981d4fdedd9e708->enter($__internal_c1da5f05428dead1b20f0d996accce43bd11788e53ea783c5981d4fdedd9e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor:base_filter.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"alert alert-danger alert-dismissible\" id=\"alertbox\" style=\"margin:10px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
                One or more Input parameters have not been provided for the report to run. Please select all the parameters and re-run the report.
            </div>            
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        ";
        // line 16
        echo "                            ";
        // line 17
        echo "                                ";
        // line 18
        echo "                                ";
        // line 19
        echo "                                ";
        // line 20
        echo "                                ";
        // line 21
        echo "                                ";
        // line 22
        echo "                                ";
        // line 23
        echo "                                ";
        // line 24
        echo "                                ";
        // line 25
        echo "                            ";
        // line 26
        echo "                        ";
        // line 27
        echo "                        ";
        $this->displayBlock('div', $context, $blocks);
        // line 29
        echo "                        <input type=\"hidden\" id=\"path\" class=\"form-control\" name=\"path\" value=\"123\"/>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                            \t<label>Date and Time range:</label>
                            \t<div class=\"input-group\">
                            \t\t<div class=\"input-group-addon\">
                            \t\t\t<i class=\"fa fa-clock-o\"></i>
                            \t\t</div>
                            \t\t<input type=\"text\" class=\"form-control pull-right\" id=\"reportdatetime\">
                            \t</div>
                            \t<br>
                            </div>                            
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>Run Report</label>
                                ";
        // line 45
        $this->displayBlock('button', $context, $blocks);
        // line 47
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 52
        $this->displayBlock('reportcontainer', $context, $blocks);
        // line 54
        echo "        </div>
    </div>
</section>
<script type=\"text/javascript\">
    \$(\"#alertbox\").hide();
    
    \$(\"#reportdatetime\").daterangepicker({
        \"showDropdowns\": true,
        \"timePicker\": true,
        \"timePicker24Hour\": true,
        \"timePickerIncrement\": 30,
        \"locale\":{
            'format': 'MM/DD/YYYY hh:mm'    
        },
        \"ranges\": {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, function(start, end, label) {
        console.log('New date range selected: ' + start.format(\"YYYY-MM-DD\") + ' to ' + end.format(\"YYYY-MM-DD\") + '(predefined range:' + label + ')');
        jsonDateData['startdatetime'] = start.format(\"YYYY-MM-DD hh:mm\");
        jsonDateData['enddatetime'] = end.format(\"YYYY-MM-DD hh:mm\");
    });
</script>
";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c1da5f05428dead1b20f0d996accce43bd11788e53ea783c5981d4fdedd9e708->leave($__internal_c1da5f05428dead1b20f0d996accce43bd11788e53ea783c5981d4fdedd9e708_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dbbd7ec67733f07db96a9df0aaa2a747b0038138ea80db35b212364837af2e5 = $this->env->getExtension("native_profiler");
        $__internal_6dbbd7ec67733f07db96a9df0aaa2a747b0038138ea80db35b212364837af2e5->enter($__internal_6dbbd7ec67733f07db96a9df0aaa2a747b0038138ea80db35b212364837af2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Report";
        
        $__internal_6dbbd7ec67733f07db96a9df0aaa2a747b0038138ea80db35b212364837af2e5->leave($__internal_6dbbd7ec67733f07db96a9df0aaa2a747b0038138ea80db35b212364837af2e5_prof);

    }

    // line 27
    public function block_div($context, array $blocks = array())
    {
        $__internal_5ff9c7d73e9472667d5236626b7f59c576075eff8ee75bff0a81647c31d8b4ff = $this->env->getExtension("native_profiler");
        $__internal_5ff9c7d73e9472667d5236626b7f59c576075eff8ee75bff0a81647c31d8b4ff->enter($__internal_5ff9c7d73e9472667d5236626b7f59c576075eff8ee75bff0a81647c31d8b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 28
        echo "                        ";
        
        $__internal_5ff9c7d73e9472667d5236626b7f59c576075eff8ee75bff0a81647c31d8b4ff->leave($__internal_5ff9c7d73e9472667d5236626b7f59c576075eff8ee75bff0a81647c31d8b4ff_prof);

    }

    // line 45
    public function block_button($context, array $blocks = array())
    {
        $__internal_3000b9270a66c847904772a9d1c8fae0ddf8a6e65ad491d26eb1b045a6ac03b3 = $this->env->getExtension("native_profiler");
        $__internal_3000b9270a66c847904772a9d1c8fae0ddf8a6e65ad491d26eb1b045a6ac03b3->enter($__internal_3000b9270a66c847904772a9d1c8fae0ddf8a6e65ad491d26eb1b045a6ac03b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button"));

        // line 46
        echo "                                ";
        
        $__internal_3000b9270a66c847904772a9d1c8fae0ddf8a6e65ad491d26eb1b045a6ac03b3->leave($__internal_3000b9270a66c847904772a9d1c8fae0ddf8a6e65ad491d26eb1b045a6ac03b3_prof);

    }

    // line 52
    public function block_reportcontainer($context, array $blocks = array())
    {
        $__internal_fdef54e98e1ef1c843630367a8ab6909d982107b496b58512fd36fab399e9140 = $this->env->getExtension("native_profiler");
        $__internal_fdef54e98e1ef1c843630367a8ab6909d982107b496b58512fd36fab399e9140->enter($__internal_fdef54e98e1ef1c843630367a8ab6909d982107b496b58512fd36fab399e9140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reportcontainer"));

        // line 53
        echo "            ";
        
        $__internal_fdef54e98e1ef1c843630367a8ab6909d982107b496b58512fd36fab399e9140->leave($__internal_fdef54e98e1ef1c843630367a8ab6909d982107b496b58512fd36fab399e9140_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fc27b71278a520c9ac26b54805cb6eb5abb485d6b4431a44855fa7a5f98f333 = $this->env->getExtension("native_profiler");
        $__internal_7fc27b71278a520c9ac26b54805cb6eb5abb485d6b4431a44855fa7a5f98f333->enter($__internal_7fc27b71278a520c9ac26b54805cb6eb5abb485d6b4431a44855fa7a5f98f333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7fc27b71278a520c9ac26b54805cb6eb5abb485d6b4431a44855fa7a5f98f333->leave($__internal_7fc27b71278a520c9ac26b54805cb6eb5abb485d6b4431a44855fa7a5f98f333_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor:base_filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 82,  181 => 53,  175 => 52,  168 => 46,  162 => 45,  155 => 28,  149 => 27,  137 => 10,  130 => 82,  100 => 54,  98 => 52,  91 => 47,  89 => 45,  71 => 29,  68 => 27,  66 => 26,  64 => 25,  62 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  48 => 17,  46 => 16,  38 => 10,  27 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="alert alert-danger alert-dismissible" id="alertbox" style="margin:10px;">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                 <h4><i class="icon fa fa-ban"></i> Alert!</h4>*/
/*                 One or more Input parameters have not been provided for the report to run. Please select all the parameters and re-run the report.*/
/*             </div>            */
/*             <div class="box-header">*/
/*                 <h3 class="box-title">{% block title %}Report{% endblock %}</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         {#<div class="col-md-3">#}*/
/*                             {#<div class="form-group">#}*/
/*                                 {#<label>Minutes</label>#}*/
/*                                 {#<select id="minutes" class="form-control">#}*/
/*                                 {#    <option value="0" selected="selected"></option>#}*/
/*                                 {#    <option value="15">Default(15mins)</option>#}*/
/*                                 {#    <option value="240">Last 4 hours</option>#}*/
/*                                 {#    <option value="480">Last 8 hours</option>                                     #}*/
/*                                 {#</select>#}*/
/*                                 {#<br>#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {% block div %}*/
/*                         {% endblock %}*/
/*                         <input type="hidden" id="path" class="form-control" name="path" value="123"/>*/
/*                         <div class="col-md-6">*/
/*                             <div class="form-group">*/
/*                             	<label>Date and Time range:</label>*/
/*                             	<div class="input-group">*/
/*                             		<div class="input-group-addon">*/
/*                             			<i class="fa fa-clock-o"></i>*/
/*                             		</div>*/
/*                             		<input type="text" class="form-control pull-right" id="reportdatetime">*/
/*                             	</div>*/
/*                             	<br>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>Run Report</label>*/
/*                                 {% block button %}*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% block reportcontainer %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*     $("#alertbox").hide();*/
/*     */
/*     $("#reportdatetime").daterangepicker({*/
/*         "showDropdowns": true,*/
/*         "timePicker": true,*/
/*         "timePicker24Hour": true,*/
/*         "timePickerIncrement": 30,*/
/*         "locale":{*/
/*             'format': 'MM/DD/YYYY hh:mm'    */
/*         },*/
/*         "ranges": {*/
/*             'Today': [moment(), moment()],*/
/*             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/*             'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/*             'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/*             'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/*             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/*         }*/
/*     }, function(start, end, label) {*/
/*         console.log('New date range selected: ' + start.format("YYYY-MM-DD") + ' to ' + end.format("YYYY-MM-DD") + '(predefined range:' + label + ')');*/
/*         jsonDateData['startdatetime'] = start.format("YYYY-MM-DD hh:mm");*/
/*         jsonDateData['enddatetime'] = end.format("YYYY-MM-DD hh:mm");*/
/*     });*/
/* </script>*/
/* {% block javascripts %}*/
/* {% endblock %}*/
