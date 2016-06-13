<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuereport.html.twig */
class __TwigTemplate_543444f7268843eae842cea715fda8a79528c0f712875131e95b1afa189600f8 extends Twig_Template
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
        // line 1
        echo "<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Realtime - TaskQueue Report</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>Minutes</label>
                                <select id=\"minutes\" class=\"form-control\">
                                    <option value=\"0\" selected=\"selected\"></option>
                                    <option value=\"15\">Default(15mins)</option>
                                    <option value=\"240\">Last 4 hours</option>
                                    <option value=\"480\">Last 8 hours</option>                                     
                                </select>
                                <br>
                                <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\">Run Report</button>
                            </div>                                
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>TaskQueue Name</label>
                                <select id=\"taskqueue\" class=\"form-control\">
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taskqueues"]) ? $context["taskqueues"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["taskqueue"]) {
            // line 29
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "sid", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "friendly_name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taskqueue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                                </select>
                                <br>
                                <button type=\"button\" id=\"stopreport\" name=\"stopreport\" class=\"btn btn-block btn-primary\">Stop Report</button>                                
                            </div>                                
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>Start Date</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" id=\"startdate\" class=\"form-control\" data-inputmask=\"'alias': 'yyyy/mm/dd'\" data-mask=\"\">
                                </div>
                            <!-- /.input group -->
                            </div>                               
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>End Date</label>
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"text\" id=\"enddate\" class=\"form-control\" data-inputmask=\"'alias': 'yyyy/mm/dd'\" data-mask=\"\">
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class=\"box-body\" id=\"reportcontainer\">
                
            </div>
            <!-- /.box-primary -->
        </div>
    </div>
</section>
<!-- /.content -->
<script type=\"text/javascript\">
  //  \$(document).ready(function(){
        \$(\"#stopreport\").hide();
        \$(\"#startdate\").inputmask(\"yyyy/mm/dd\", {\"placeholder\": \"yyyy/mm/dd\"});
        \$(\"#enddate\").inputmask(\"yyyy/mm/dd\", {\"placeholder\": \"yyyy/mm/dd\"});
        var auto_refresh;
    \t\$('#runreport').click(function(){
  
    \t    var jsonData = {};
    \t    
    \t    \$('.form-control').each(function(){
    \t       //alert(\$(this).attr('id')+\" is \"+\$(this).val());
    \t       var key = \$(this).attr('id');
    \t       jsonData[key] =\$(this).val()
    \t    });
    \t    
    \t    //console.log(jsonData);
    \t    
            \$('#reportcontainer').load('";
        // line 89
        echo $this->env->getExtension('routing')->getPath("load_rt_taskqueue_report");
        echo "', jsonData), function( response, status, xhr ) {
            if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
            auto_refresh = setInterval(function(){
                \$('#reportcontainer').load('";
        // line 96
        echo $this->env->getExtension('routing')->getPath("load_rt_taskqueue_report");
        echo "', jsonData), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                        var msg = \"Sorry but there was an error: \";
                        console.log( msg + xhr.status + \" \" + xhr.statusText );
                    }
                }
            }, 10000);
            \$(\"#stopreport\").show();
            \$(\"#runreport\").hide();
\t    });
\t    
\t    \$(\"#stopreport\").click(function(){
\t       clearInterval(auto_refresh); 
\t       \$(\"#runreport\").show();
\t       \$(\"#stopreport\").hide();
\t    });
\t    
  //  });
</script>";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_taskqueuereport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 96,  123 => 89,  63 => 31,  52 => 29,  48 => 28,  19 => 1,);
    }
}
/* <!-- Main content -->*/
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Realtime - TaskQueue Report</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>Minutes</label>*/
/*                                 <select id="minutes" class="form-control">*/
/*                                     <option value="0" selected="selected"></option>*/
/*                                     <option value="15">Default(15mins)</option>*/
/*                                     <option value="240">Last 4 hours</option>*/
/*                                     <option value="480">Last 8 hours</option>                                     */
/*                                 </select>*/
/*                                 <br>*/
/*                                 <button type="button" id="runreport" name="runreport" class="btn btn-block btn-primary">Run Report</button>*/
/*                             </div>                                */
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>TaskQueue Name</label>*/
/*                                 <select id="taskqueue" class="form-control">*/
/*                                     {% for taskqueue in taskqueues %}*/
/*                                         <option value="{{ taskqueue.sid }}"> {{ taskqueue.friendly_name }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                                 <br>*/
/*                                 <button type="button" id="stopreport" name="stopreport" class="btn btn-block btn-primary">Stop Report</button>                                */
/*                             </div>                                */
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>Start Date</label>*/
/*                                 <div class="input-group">*/
/*                                     <div class="input-group-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                     </div>*/
/*                                     <input type="text" id="startdate" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">*/
/*                                 </div>*/
/*                             <!-- /.input group -->*/
/*                             </div>                               */
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>End Date</label>*/
/*                                 <div class="input-group">*/
/*                                     <div class="input-group-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                     </div>*/
/*                                     <input type="text" id="enddate" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask="">*/
/*                                 </div>*/
/*                             </div>                                */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*             <div class="box-body" id="reportcontainer">*/
/*                 */
/*             </div>*/
/*             <!-- /.box-primary -->*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- /.content -->*/
/* <script type="text/javascript">*/
/*   //  $(document).ready(function(){*/
/*         $("#stopreport").hide();*/
/*         $("#startdate").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});*/
/*         $("#enddate").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});*/
/*         var auto_refresh;*/
/*     	$('#runreport').click(function(){*/
/*   */
/*     	    var jsonData = {};*/
/*     	    */
/*     	    $('.form-control').each(function(){*/
/*     	       //alert($(this).attr('id')+" is "+$(this).val());*/
/*     	       var key = $(this).attr('id');*/
/*     	       jsonData[key] =$(this).val()*/
/*     	    });*/
/*     	    */
/*     	    //console.log(jsonData);*/
/*     	    */
/*             $('#reportcontainer').load('{{ path('load_rt_taskqueue_report') }}', jsonData), function( response, status, xhr ) {*/
/*             if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/*             auto_refresh = setInterval(function(){*/
/*                 $('#reportcontainer').load('{{ path('load_rt_taskqueue_report') }}', jsonData), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                         var msg = "Sorry but there was an error: ";*/
/*                         console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                     }*/
/*                 }*/
/*             }, 10000);*/
/*             $("#stopreport").show();*/
/*             $("#runreport").hide();*/
/* 	    });*/
/* 	    */
/* 	    $("#stopreport").click(function(){*/
/* 	       clearInterval(auto_refresh); */
/* 	       $("#runreport").show();*/
/* 	       $("#stopreport").hide();*/
/* 	    });*/
/* 	    */
/*   //  });*/
/* </script>*/
