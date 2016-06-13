<?php

/* CommcloudVoiceBundle:Agent:callhistory.html.twig */
class __TwigTemplate_5fa9e59b86837ba08dbd2c8abf320c650da2a52062fd29261c428fcef631aeb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
    
    <div class=\"box\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3 class=\"box-title\">Call History</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body table-responsive no-padding\">
\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Call SID</th>
\t\t\t\t\t\t\t<th>From</th>
\t\t\t\t\t\t\t<th>To</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Duration</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calls"]) ? $context["calls"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 24
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "sid", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "from", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "to", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "duration", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t
\t\t\t\t\t</tbody>
\t\t\t\t</table>\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"box-footer clearfix\">
              <ul class=\"pagination pagination-sm no-margin pull-right\">
                <li><a href=\"#\">«</a></li>
                <li><a href=\"#\">1</a></li>
                <li><a href=\"#\">2</a></li>
                <li><a href=\"#\">3</a></li>
                <li><a href=\"#\">»</a></li>
              </ul>
            </div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Agent:callhistory.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  74 => 29,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  55 => 24,  51 => 23,  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block content %}*/
/* */
/*     */
/*     <div class="box">*/
/* 			<div class="box-header">*/
/* 				<h3 class="box-title">Call History</h3>*/
/* 				<div class="box-tools pull-right">*/
/* 					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="box-body table-responsive no-padding">*/
/* 				<table class="table table-hover">*/
/* 					<tbody>*/
/* 						<tr>*/
/* 							<th>Call SID</th>*/
/* 							<th>From</th>*/
/* 							<th>To</th>*/
/* 							<th>Status</th>*/
/* 							<th>Duration</th>*/
/* 						</tr>*/
/* 					*/
/* 						{% for call in calls %}*/
/* 							<tr>*/
/* 								<td>{{call.sid}}</td>*/
/* 								<td>{{call.from }}</td>*/
/* 								<td>{{call.to}}</td>*/
/* 								<td>{{call.status}}</td>*/
/* 								<td>{{call.duration}}</td>*/
/* 							</tr>*/
/* 						{% endfor %}*/
/* 						*/
/* 					</tbody>*/
/* 				</table>						*/
/* 			</div>*/
/* 			<div class="box-footer clearfix">*/
/*               <ul class="pagination pagination-sm no-margin pull-right">*/
/*                 <li><a href="#">«</a></li>*/
/*                 <li><a href="#">1</a></li>*/
/*                 <li><a href="#">2</a></li>*/
/*                 <li><a href="#">3</a></li>*/
/*                 <li><a href="#">»</a></li>*/
/*               </ul>*/
/*             </div>*/
/* 		</div>*/
/* */
/* {% endblock %}*/
