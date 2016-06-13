<?php

/* CommcloudVoiceBundle:Admin:createtaskqueuetemplate.html.twig */
class __TwigTemplate_b2c65f4f28f94b8597a7151c58efd557f73ad33d2d3c177bb9bbf96113430e8f extends Twig_Template
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
        $__internal_197c9903964615c7f8520986b98a914b0612f46896f42064e89a6de9c5fe27bd = $this->env->getExtension("native_profiler");
        $__internal_197c9903964615c7f8520986b98a914b0612f46896f42064e89a6de9c5fe27bd->enter($__internal_197c9903964615c7f8520986b98a914b0612f46896f42064e89a6de9c5fe27bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Admin:createtaskqueuetemplate.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Create Task Queue Template</h3>
                    <!--<div class=\"box-tools pull-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t</div>-->
                </div>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h4>Task Queue Template</h4>
                            <input id=\"btnAdd\" type=\"button\" value=\"Add\" class=\"btn btn-danger btn-block btn-flat\" />
                            <br />
                            <br />
                        </div>
                        <div class=\"col-md-6\">
                            <div id=\"taskQueueTemplateContainer\">
                                <!-- Fields will be added here -->
                            </div>
                            <br/>
                            <input id=\"btnGet\" type=\"button\" value=\"Get Values\" class=\"btn btn-primary btn-block btn-flat\" />
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
<script>
//\t\$(function(){
\t\t\$(\"#btnAdd\").bind(\"click\", function () {
\t\t\tvar div = \$(\"<div id='element'/>\");
\t\t\tdiv.html(GetDynamicTextBox(\"\"));
\t\t\t\$(\"#taskQueueTemplateContainer\").append(div);
\t\t});
\t\tvar i = 0;
\t\t\$(\"#btnGet\").bind(\"click\", function () {
\t\t\tvar values = [];
\t\t\t\$(\"input[name=DynamicTextBox]\").each(function () {
\t\t\t\tvalues [i]= \$(this).val();
\t\t\t\ti++;
\t\t\t});
\t\t\t//console.log(values);
\t\t\tvar str_json = JSON.stringify(values);
\t\t\t//console.log(\"Activity Template: str_json: \"+str_json);
\t\t\t\$.ajax({url: \"taskqueue_template_action.php\", async: true,
\t\t\t\ttype: \"POST\", data: str_json,
\t\t\t\tsuccess: function(){
\t\t\t\t\t//response = \$(this).responseText;
\t\t\t\t\t//alert(resposne);
\t\t\t\t\t//if(response == \"success\"){
\t\t\t\t\t\t\$(\"#alert\").addClass(\"in alert-success\");
\t\t\t\t\t//}
\t\t\t\t},
\t\t\t\terror: function(){

\t\t\t\t}
\t\t\t})
\t\t});
// \t\t\$(\"body\").on(\"click\", \".remove\", function () {
// \t\t\t\$(this).closest(\"div\").remove();
// \t\t});
\t\t\$(\"#alertClose\").click(function(){
\t\t\t\$(this).parent().removeClass('in');
\t\t});
//\t});
\tfunction GetDynamicTextBox(value) {
\t\treturn '<input name = \"DynamicTextBox\" type=\"text\" value = \"' + value + '\" placeholder=\"Attribute Name\"/>' +
\t\t\t\t'<input type=\"button\" value=\"Remove\" class=\"btn btn-danger btn-block btn-flat\" onClick=\"removeElement(\\'taskQueueTemplateContainer\\', \\'element\\');\" />'
\t}

    function removeElement(parentDiv, childDiv) {
        if (childDiv == parentDiv) {
            alert(\"The parent div cannot be removed.\");
        }
        else if (document.getElementById(childDiv)) {
            var child = document.getElementById(childDiv);
            var parent = document.getElementById(parentDiv);
            parent.removeChild(child);
        }
        else {
            alert(\"Child div has already been removed or does not exist.\");
            return false;
        }
    }
</script>";
        
        $__internal_197c9903964615c7f8520986b98a914b0612f46896f42064e89a6de9c5fe27bd->leave($__internal_197c9903964615c7f8520986b98a914b0612f46896f42064e89a6de9c5fe27bd_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:createtaskqueuetemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Create Task Queue Template</h3>*/
/*                     <!--<div class="box-tools pull-right">*/
/* 						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/* 						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/* 					</div>-->*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <h4>Task Queue Template</h4>*/
/*                             <input id="btnAdd" type="button" value="Add" class="btn btn-danger btn-block btn-flat" />*/
/*                             <br />*/
/*                             <br />*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <div id="taskQueueTemplateContainer">*/
/*                                 <!-- Fields will be added here -->*/
/*                             </div>*/
/*                             <br/>*/
/*                             <input id="btnGet" type="button" value="Get Values" class="btn btn-primary btn-block btn-flat" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script>*/
/* //	$(function(){*/
/* 		$("#btnAdd").bind("click", function () {*/
/* 			var div = $("<div id='element'/>");*/
/* 			div.html(GetDynamicTextBox(""));*/
/* 			$("#taskQueueTemplateContainer").append(div);*/
/* 		});*/
/* 		var i = 0;*/
/* 		$("#btnGet").bind("click", function () {*/
/* 			var values = [];*/
/* 			$("input[name=DynamicTextBox]").each(function () {*/
/* 				values [i]= $(this).val();*/
/* 				i++;*/
/* 			});*/
/* 			//console.log(values);*/
/* 			var str_json = JSON.stringify(values);*/
/* 			//console.log("Activity Template: str_json: "+str_json);*/
/* 			$.ajax({url: "taskqueue_template_action.php", async: true,*/
/* 				type: "POST", data: str_json,*/
/* 				success: function(){*/
/* 					//response = $(this).responseText;*/
/* 					//alert(resposne);*/
/* 					//if(response == "success"){*/
/* 						$("#alert").addClass("in alert-success");*/
/* 					//}*/
/* 				},*/
/* 				error: function(){*/
/* */
/* 				}*/
/* 			})*/
/* 		});*/
/* // 		$("body").on("click", ".remove", function () {*/
/* // 			$(this).closest("div").remove();*/
/* // 		});*/
/* 		$("#alertClose").click(function(){*/
/* 			$(this).parent().removeClass('in');*/
/* 		});*/
/* //	});*/
/* 	function GetDynamicTextBox(value) {*/
/* 		return '<input name = "DynamicTextBox" type="text" value = "' + value + '" placeholder="Attribute Name"/>' +*/
/* 				'<input type="button" value="Remove" class="btn btn-danger btn-block btn-flat" onClick="removeElement(\'taskQueueTemplateContainer\', \'element\');" />'*/
/* 	}*/
/* */
/*     function removeElement(parentDiv, childDiv) {*/
/*         if (childDiv == parentDiv) {*/
/*             alert("The parent div cannot be removed.");*/
/*         }*/
/*         else if (document.getElementById(childDiv)) {*/
/*             var child = document.getElementById(childDiv);*/
/*             var parent = document.getElementById(parentDiv);*/
/*             parent.removeChild(child);*/
/*         }*/
/*         else {*/
/*             alert("Child div has already been removed or does not exist.");*/
/*             return false;*/
/*         }*/
/*     }*/
/* </script>*/
