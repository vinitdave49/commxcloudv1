<?php

/* CommcloudVoiceBundle:Supervisor/Historical:ht_calllist_filter.html.twig */
class __TwigTemplate_c918217b15777f200a2df931afdfee25d6844640cd78be076016abf851a1be49 extends Twig_Template
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
        $__internal_68f03c8fd29634cc454bbf250ef42234bc169604316635cf7d48770d7c6ae4a2 = $this->env->getExtension("native_profiler");
        $__internal_68f03c8fd29634cc454bbf250ef42234bc169604316635cf7d48770d7c6ae4a2->enter($__internal_68f03c8fd29634cc454bbf250ef42234bc169604316635cf7d48770d7c6ae4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Supervisor/Historical:ht_calllist_filter.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Historical Call List Report</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                                <label>Status</label>
                                <select id=\"status\" class=\"form-control\">
                                    <option selected disabled hidden style='display: none' value=''></option>
                                    <option value=\"cancelled\">Cancelled</option>
                                    <option value=\"completed\">Completed</option>
                                    <option value=\"busy\">Busy</option>
                                    <option value=\"no-answer\">No-Answer</option>                                     
                                </select>
                                <br>
                                <div id=\"loadingIMG\" class=\"loading\" runat=\"server\" style=\"display:none;\">Loading&#8230;</div>   
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
                        <div class=\"col-md-3\">
                            <div class=\"form-group\">
                            \t<label>Date and Time range:</label>
                            \t<div class=\"input-group\">
                            \t\t<div class=\"input-group-addon\">
                            \t\t\t<i class=\"fa fa-clock-o\"></i>
                            \t\t</div>
                            \t\t<input type=\"text\" class=\"form-control pull-right\" id=\"reportdatetime\">
                            \t</div>
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
    var jsonDateData = {};
    
    \$(\"#to\").inputmask({\"mask\": \"(999) 999-9999\"});
    \$(\"#from\").inputmask({\"mask\": \"(999) 999-9999\"});
    
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

    \$('#runreport').click(function(){
          \$(\"#loadingIMG\").css(\"display\", \"block\");
      //alert('Report is executed!!!');
        \$('.form-control').each(function()
            {
               var key = \$(this).attr('id');
               jsonDateData[key] =\$(this).val();
           }
        );
        console.log(jsonDateData);
        \$('#reportcontainer').load('";
        // line 106
        echo $this->env->getExtension('routing')->getPath("load_ht_calllist_report");
        echo "', jsonDateData), function( response, status, xhr ) 
            {
                if ( status == \"error\" ) 
                {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }    
       
    });
</script> ";
        
        $__internal_68f03c8fd29634cc454bbf250ef42234bc169604316635cf7d48770d7c6ae4a2->leave($__internal_68f03c8fd29634cc454bbf250ef42234bc169604316635cf7d48770d7c6ae4a2_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Supervisor/Historical:ht_calllist_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 106,  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Historical Call List Report</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                                 <label>Status</label>*/
/*                                 <select id="status" class="form-control">*/
/*                                     <option selected disabled hidden style='display: none' value=''></option>*/
/*                                     <option value="cancelled">Cancelled</option>*/
/*                                     <option value="completed">Completed</option>*/
/*                                     <option value="busy">Busy</option>*/
/*                                     <option value="no-answer">No-Answer</option>                                     */
/*                                 </select>*/
/*                                 <br>*/
/*                                 <div id="loadingIMG" class="loading" runat="server" style="display:none;">Loading&#8230;</div>   */
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
/*                         <div class="col-md-3">*/
/*                             <div class="form-group">*/
/*                             	<label>Date and Time range:</label>*/
/*                             	<div class="input-group">*/
/*                             		<div class="input-group-addon">*/
/*                             			<i class="fa fa-clock-o"></i>*/
/*                             		</div>*/
/*                             		<input type="text" class="form-control pull-right" id="reportdatetime">*/
/*                             	</div>*/
/*                             </div>                            */
/*                         </div>*/
/*                             */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="box-body" id="reportcontainer">*/
/*                 */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*     var jsonDateData = {};*/
/*     */
/*     $("#to").inputmask({"mask": "(999) 999-9999"});*/
/*     $("#from").inputmask({"mask": "(999) 999-9999"});*/
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
/* */
/*     $('#runreport').click(function(){*/
/*           $("#loadingIMG").css("display", "block");*/
/*       //alert('Report is executed!!!');*/
/*         $('.form-control').each(function()*/
/*             {*/
/*                var key = $(this).attr('id');*/
/*                jsonDateData[key] =$(this).val();*/
/*            }*/
/*         );*/
/*         console.log(jsonDateData);*/
/*         $('#reportcontainer').load('{{ path('load_ht_calllist_report') }}', jsonDateData), function( response, status, xhr ) */
/*             {*/
/*                 if ( status == "error" ) */
/*                 {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }    */
/*        */
/*     });*/
/* </script> */
