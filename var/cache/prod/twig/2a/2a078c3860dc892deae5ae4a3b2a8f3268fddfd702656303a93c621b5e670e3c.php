<?php

/* CommcloudVoiceBundle:Agent:workerstats.html.twig */
class __TwigTemplate_a687f7c4abe506028fdd9dbbff4b7a57a723025075ad1f73ce34577a1c97d48f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"box box-default\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Worker Statistics</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"chart-responsive\">
\t\t\t\t\t\t\t<canvas id=\"workerStatsRTChart\" style=\"height: 165px; width: 165px;\" height=\"165\" width=\"165\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<ul class=\"chart-legend clearfix\">
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-red\"></i>Pending Tasks</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-green\"></i>Assigned Tasks</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-yellow\"></i>Reserved Tasks</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"chart-responsive\">
\t\t\t\t\t\t\t<canvas id=\"workerStatsHTChart\" style=\"height: 165px; width: 165px;\" height=\"165\" width=\"165\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<ul class=\"chart-legend clearfix\">
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-red\"></i>Pending Tasks</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-green\"></i>Assigned Tasks</li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-circle-o text-yellow\"></i>Reserved Tasks</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t  
";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "

 <script>
var options = {
    scaleShowLabelBackdrop: true,
    scaleBackdropColor: 'rgba(255,255,255,0.75)',
    scaleBeginAtZero: true,
    scaleBackdropPaddingY: 2,
    scaleBackdropPaddingX: 2,
    scaleShowLine: true,
    segmentShowStroke: true,
    segmentStrokeColor: \"#fff\",
    segmentStrokeWidth: 2,
    animationSteps: 100,
    animationEasing: \"easeOutBounce\",
    animateRotate: true,
    animateScale: false
}
";
        // line 71
        echo "\t\t// Get context with jQuery - using jQuery's .get() method.
";
        // line 82
        echo "\tvar data = [
    {
        value: 300,
        color:\"#F7464A\",
        highlight: \"#FF5A5E\",
        label: \"Red\"
    },
    {
        value: 50,
        color: \"#46BFBD\",
        highlight: \"#5AD3D1\",
        label: \"Green\"
    },
    {
        value: 100,
        color: \"#FDB45C\",
        highlight: \"#FFC870\",
        label: \"Yellow\"
    }
]\t
var myDoughnutChart = new Chart(ctx[1]).Doughnut(data,options);
</script>
";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:workerstats.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 82,  101 => 71,  81 => 46,  78 => 45,  33 => 2,  30 => 1,  26 => 45,  23 => 44,  21 => 1,);
    }
}
/* {% block content %}*/
/* <div class="box box-default">*/
/* 			<div class="box-header with-border">*/
/* 				<h3 class="box-title">Worker Statistics</h3>*/
/* 				<div class="box-tools pull-right">*/
/* 					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/* 					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="box-body">*/
/* 				<div class="row">*/
/* 					<div class="col-md-8">*/
/* 						<div class="chart-responsive">*/
/* 							<canvas id="workerStatsRTChart" style="height: 165px; width: 165px;" height="165" width="165"></canvas>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-4">*/
/* 						<ul class="chart-legend clearfix">*/
/* 							<li><i class="fa fa-circle-o text-red"></i>Pending Tasks</li>*/
/* 							<li><i class="fa fa-circle-o text-green"></i>Assigned Tasks</li>*/
/* 							<li><i class="fa fa-circle-o text-yellow"></i>Reserved Tasks</li>*/
/* 						</ul>*/
/* 					</div>						*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-md-8">*/
/* 						<div class="chart-responsive">*/
/* 							<canvas id="workerStatsHTChart" style="height: 165px; width: 165px;" height="165" width="165"></canvas>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-4">*/
/* 						<ul class="chart-legend clearfix">*/
/* 							<li><i class="fa fa-circle-o text-red"></i>Pending Tasks</li>*/
/* 							<li><i class="fa fa-circle-o text-green"></i>Assigned Tasks</li>*/
/* 							<li><i class="fa fa-circle-o text-yellow"></i>Reserved Tasks</li>*/
/* 						</ul>*/
/* 					</div>						*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	  */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/*  <script>*/
/* var options = {*/
/*     scaleShowLabelBackdrop: true,*/
/*     scaleBackdropColor: 'rgba(255,255,255,0.75)',*/
/*     scaleBeginAtZero: true,*/
/*     scaleBackdropPaddingY: 2,*/
/*     scaleBackdropPaddingX: 2,*/
/*     scaleShowLine: true,*/
/*     segmentShowStroke: true,*/
/*     segmentStrokeColor: "#fff",*/
/*     segmentStrokeWidth: 2,*/
/*     animationSteps: 100,*/
/*     animationEasing: "easeOutBounce",*/
/*     animateRotate: true,*/
/*     animateScale: false*/
/* }*/
/* {#var response = function(){#}*/
/* {#	var xhttp = new XMLHttpRequest();#}*/
/* {#	xhttp.onload = function(){#}*/
/* {#		var response_string = this.responseText;#}*/
/* {#		console.log("Response String: "+response_string);#}*/
/* {#		data = JSON.parse(response_string)[0];#}*/
/* {#		console.log("Data received: "+data[0]['value']+data[1]['value']+data[2]['value']);#}*/
/* 		// Get context with jQuery - using jQuery's .get() method.*/
/* {#		var ctx = $("#workerStatsRTChart").get(0).getContext("2d");#}*/
/* {#		var myDoughnutChart = new Chart(ctx).Doughnut(data, options);#}*/
/* {#		var legend = myDoughnutChart.generateLegend();#}*/
/* {#		$("#legend").html(legend);#}*/
/* {#	};#}*/
/* {#	xhttp.open("POST", "", true);#}*/
/* {#	xhttp.send();#}*/
/* {#};#}*/
/* {#	response();#}*/
/* {# </script>#}*/
/* 	var data = [*/
/*     {*/
/*         value: 300,*/
/*         color:"#F7464A",*/
/*         highlight: "#FF5A5E",*/
/*         label: "Red"*/
/*     },*/
/*     {*/
/*         value: 50,*/
/*         color: "#46BFBD",*/
/*         highlight: "#5AD3D1",*/
/*         label: "Green"*/
/*     },*/
/*     {*/
/*         value: 100,*/
/*         color: "#FDB45C",*/
/*         highlight: "#FFC870",*/
/*         label: "Yellow"*/
/*     }*/
/* ]	*/
/* var myDoughnutChart = new Chart(ctx[1]).Doughnut(data,options);*/
/* </script>*/
/* {% endblock %}*/
