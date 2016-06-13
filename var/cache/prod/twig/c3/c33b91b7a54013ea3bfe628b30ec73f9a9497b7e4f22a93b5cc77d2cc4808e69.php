<?php

/* CommcloudVoiceBundle:Supervisor:base_filter.html.twig */
class __TwigTemplate_e987032247693b38dc33ca5078e097c3fb86f95d282d715daace139b2dfcc342 extends Twig_Template
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
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Report";
    }

    // line 27
    public function block_div($context, array $blocks = array())
    {
        // line 28
        echo "                        ";
    }

    // line 45
    public function block_button($context, array $blocks = array())
    {
        // line 46
        echo "                                ";
    }

    // line 52
    public function block_reportcontainer($context, array $blocks = array())
    {
        // line 53
        echo "            ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor:base_filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 82,  154 => 53,  151 => 52,  147 => 46,  144 => 45,  140 => 28,  137 => 27,  131 => 10,  127 => 82,  97 => 54,  95 => 52,  88 => 47,  86 => 45,  68 => 29,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  55 => 22,  53 => 21,  51 => 20,  49 => 19,  47 => 18,  45 => 17,  43 => 16,  35 => 10,  24 => 1,);
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
