<?php

/* CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_filter.html.twig */
class __TwigTemplate_495449c419a27d7182684a5c72dec871e5f4584784a518fc7158b873e3b8de7c extends Twig_Template
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
        $__internal_6e1c443579cad134ecdeec8a59a9ab72acfd543e890c80226ef9c123ee7d1e48 = $this->env->getExtension("native_profiler");
        $__internal_6e1c443579cad134ecdeec8a59a9ab72acfd543e890c80226ef9c123ee7d1e48->enter($__internal_6e1c443579cad134ecdeec8a59a9ab72acfd543e890c80226ef9c123ee7d1e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_filter.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Realtime Call List</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>Status</label>
                                <select id=\"status\" class=\"form-control\">
                                    <option selected disabled hidden style='display: none' value=''></option>
                                    <option value=\"in-progress\">In-Progress</option>
                                    <option value=\"queued\">Queued</option>
                                    <option value=\"ringing\">Ringing</option>
                                </select>
                                <br>           
                                <button type=\"button\" id=\"runreport\" name=\"runreport\" class=\"btn btn-block btn-primary\" >Run Report</button>                                
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>To</label>
                            \t<div class=\"input-group\">
                            \t\t<div class=\"input-group-addon\">
                            \t\t\t<i class=\"fa fa-phone\"></i>
                            \t\t</div>
                                    <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask': '(999) 999-9999'\" data-mask=\"\" id=\"to\">
                                </div>
                                <br>
                                <button type=\"button\" id=\"stopreport\" name=\"stopreport\" class=\"btn btn-block btn-primary\">Stop Report</button>                                
                            </div>                                
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>From</label>
                            \t<div class=\"input-group\">
                            \t\t<div class=\"input-group-addon\">
                            \t\t\t<i class=\"fa fa-phone\"></i>
                            \t\t</div>                                
                                    <input type=\"text\" class=\"form-control\" data-inputmask=\"'mask': '(999) 999-9999'\" data-mask=\"\" id=\"from\">
                                </div>
                            </div>                                
                        </div>                        
                    </div>
                            
                </div>
            </div>
        </div>
        <div class=\"box-body\" id=\"reportcontainer\">
                
        </div>
    </div>
</div>
</section>
<script type=\"text/javascript\">
    var jsonReportData = {};
    \$(\":input\").inputmask();
    \$(\"#stopreport\").hide();
    var auto_refresh;
    
    \$('#runreport').click(function(){
      //alert('Report is executed!!!');
        \$('.form-control').each(function()
            {
               var key = \$(this).attr('id');
               jsonReportData[key] =\$(this).val();
           }
        );
        //console.log(jsonReportData);
        \$('#reportcontainer').load('";
        // line 73
        echo $this->env->getExtension('routing')->getPath("load_rt_calllist_report");
        echo "', jsonReportData), function( response, status, xhr ) 
        {
            if ( status == \"error\" ) 
            {
                var msg = \"Sorry but there was an error: \";
                console.log( msg + xhr.status + \" \" + xhr.statusText );
            }
        }
        
        auto_refresh = setInterval(function(){
                \$('#reportcontainer').load('";
        // line 83
        echo $this->env->getExtension('routing')->getPath("load_rt_calllist_report");
        echo "', jsonReportData), function( response, status, xhr ) 
                {
                    if ( status == \"error\" ) 
                    {
                        var msg = \"Sorry but there was an error: \";
                        console.log( msg + xhr.status + \" \" + xhr.statusText );
                    }
                }
            }, 10000);
        \$(\"#stopreport\").show();
        \$(\"#runreport\").hide();
    });
    
    \$(\"#stopreport\").click(function(){
       clearInterval(auto_refresh); 
       \$(\"#runreport\").show();
       \$(\"#stopreport\").hide();
    });    
</script> ";
        
        $__internal_6e1c443579cad134ecdeec8a59a9ab72acfd543e890c80226ef9c123ee7d1e48->leave($__internal_6e1c443579cad134ecdeec8a59a9ab72acfd543e890c80226ef9c123ee7d1e48_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Realtime:rt_calllist_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 83,  96 => 73,  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Realtime Call List</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>Status</label>*/
/*                                 <select id="status" class="form-control">*/
/*                                     <option selected disabled hidden style='display: none' value=''></option>*/
/*                                     <option value="in-progress">In-Progress</option>*/
/*                                     <option value="queued">Queued</option>*/
/*                                     <option value="ringing">Ringing</option>*/
/*                                 </select>*/
/*                                 <br>           */
/*                                 <button type="button" id="runreport" name="runreport" class="btn btn-block btn-primary" >Run Report</button>                                */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>To</label>*/
/*                             	<div class="input-group">*/
/*                             		<div class="input-group-addon">*/
/*                             			<i class="fa fa-phone"></i>*/
/*                             		</div>*/
/*                                     <input type="text" class="form-control" data-inputmask="'mask': '(999) 999-9999'" data-mask="" id="to">*/
/*                                 </div>*/
/*                                 <br>*/
/*                                 <button type="button" id="stopreport" name="stopreport" class="btn btn-block btn-primary">Stop Report</button>                                */
/*                             </div>                                */
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>From</label>*/
/*                             	<div class="input-group">*/
/*                             		<div class="input-group-addon">*/
/*                             			<i class="fa fa-phone"></i>*/
/*                             		</div>                                */
/*                                     <input type="text" class="form-control" data-inputmask="'mask': '(999) 999-9999'" data-mask="" id="from">*/
/*                                 </div>*/
/*                             </div>                                */
/*                         </div>                        */
/*                     </div>*/
/*                             */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-body" id="reportcontainer">*/
/*                 */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*     var jsonReportData = {};*/
/*     $(":input").inputmask();*/
/*     $("#stopreport").hide();*/
/*     var auto_refresh;*/
/*     */
/*     $('#runreport').click(function(){*/
/*       //alert('Report is executed!!!');*/
/*         $('.form-control').each(function()*/
/*             {*/
/*                var key = $(this).attr('id');*/
/*                jsonReportData[key] =$(this).val();*/
/*            }*/
/*         );*/
/*         //console.log(jsonReportData);*/
/*         $('#reportcontainer').load('{{ path('load_rt_calllist_report') }}', jsonReportData), function( response, status, xhr ) */
/*         {*/
/*             if ( status == "error" ) */
/*             {*/
/*                 var msg = "Sorry but there was an error: ";*/
/*                 console.log( msg + xhr.status + " " + xhr.statusText );*/
/*             }*/
/*         }*/
/*         */
/*         auto_refresh = setInterval(function(){*/
/*                 $('#reportcontainer').load('{{ path('load_rt_calllist_report') }}', jsonReportData), function( response, status, xhr ) */
/*                 {*/
/*                     if ( status == "error" ) */
/*                     {*/
/*                         var msg = "Sorry but there was an error: ";*/
/*                         console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                     }*/
/*                 }*/
/*             }, 10000);*/
/*         $("#stopreport").show();*/
/*         $("#runreport").hide();*/
/*     });*/
/*     */
/*     $("#stopreport").click(function(){*/
/*        clearInterval(auto_refresh); */
/*        $("#runreport").show();*/
/*        $("#stopreport").hide();*/
/*     });    */
/* </script> */
