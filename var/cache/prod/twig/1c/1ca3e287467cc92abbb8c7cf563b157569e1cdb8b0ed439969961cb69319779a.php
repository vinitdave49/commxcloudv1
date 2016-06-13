<?php

/* CommcloudVoiceBundle:Admin:createworker_backup.html.twig */
class __TwigTemplate_456c273627f0394823a447003c53e736ec75713179505e379d153bab6c8c47e7 extends Twig_Template
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
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Create Worker!!!!</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">

                        <div class=\"col-md-6\">
                            <label>First Name</label>
                            <input type=\"text\" class=\"form-control\" id='wFName' name='wFName'>
                            <label>Last Name</label>
                            <input type=\"text\" class=\"form-control\" id='wLName' name='wLName'>
                            <label>Display Name</label>
                            <input type=\"text\" class=\"form-control\" id='wName' name='wName'>
                            <label>Email</label>
                            <input type=\"text\" class=\"form-control\" id='wemail' name='wemail'>
                            <label>Role</label>
                                <select id=\"wroles\" name=\"wroles\" class=\"form-control\">
                                    <option value=\"ROLE_USER\" selected=\"selected\">Agent</option>
                                    <option value=\"ROLE_SUPERVISOR\">Supervisor</option>
                                    <option value=\"ROLE_ADMIN\">Admin</option>
                                </select>
                            <label>Skills</label>
                            <input type=\"textarea\" row=\"4\" class=\"form-control\" id='wSkills' name='wSkills'>
                            <button type=\"button\"  id=\"btnsubmit\" name=\"btnsubmit\" class=\"btn btn-block btn-danger\">Create</button>
                        </div>
                        <div class=\"col-md-6\">
                            <h4>Display Name</h4> is a descriptive name for this worker. Examples include \"Alice Smith\" or \"apac-inside-sales asmith\".
                            Consider a name that will allow you to easily identify the real-world Worker.
                            <br><h4>Skills</h4> each Worker's unique properties as a JSON document.
                            TaskQueues route Tasks to Workers based on these attributes.
                            <p>Example:{\"name\": \"Alice\", \"technical_skill\": 5, \"languages\": [\"ru\", \"en\"]}
                            </p>
                            </div>
                        </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box-primary -->
        </div>
    </div>
</section>
<script>
//\$(function(){
    \$(\"#btnsubmit\").bind(\"click\", function() {
            \$.ajax({
                url: \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("createworkeraction");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{wFName:\$(\"#wFName\").val(), wLName:\$(\"#wLName\").val(),wName:\$(\"#wName\").val(),wemail:\$(\"#wemail\").val(),wSkills:\$(\"#wSkills\").val(),wroles:\$(\"#wroles\").val()},
                success: function(resultData) {
                    \$(\"#alert\").addClass(\"in alert-success\");
                    alert(resultData);
                },
                error: function() {
                    alert(\"Error!!!\");
                }
            })
        });
    \$(\"#alertClose\").click(function() {
        \$(this).parent().removeClass('in');
    });
//});
</script>
<!-- /.content -->";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:createworker_backup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 50,  19 => 1,);
    }
}
/* <!-- Main content -->*/
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Create Worker!!!!</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/* */
/*                         <div class="col-md-6">*/
/*                             <label>First Name</label>*/
/*                             <input type="text" class="form-control" id='wFName' name='wFName'>*/
/*                             <label>Last Name</label>*/
/*                             <input type="text" class="form-control" id='wLName' name='wLName'>*/
/*                             <label>Display Name</label>*/
/*                             <input type="text" class="form-control" id='wName' name='wName'>*/
/*                             <label>Email</label>*/
/*                             <input type="text" class="form-control" id='wemail' name='wemail'>*/
/*                             <label>Role</label>*/
/*                                 <select id="wroles" name="wroles" class="form-control">*/
/*                                     <option value="ROLE_USER" selected="selected">Agent</option>*/
/*                                     <option value="ROLE_SUPERVISOR">Supervisor</option>*/
/*                                     <option value="ROLE_ADMIN">Admin</option>*/
/*                                 </select>*/
/*                             <label>Skills</label>*/
/*                             <input type="textarea" row="4" class="form-control" id='wSkills' name='wSkills'>*/
/*                             <button type="button"  id="btnsubmit" name="btnsubmit" class="btn btn-block btn-danger">Create</button>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <h4>Display Name</h4> is a descriptive name for this worker. Examples include "Alice Smith" or "apac-inside-sales asmith".*/
/*                             Consider a name that will allow you to easily identify the real-world Worker.*/
/*                             <br><h4>Skills</h4> each Worker's unique properties as a JSON document.*/
/*                             TaskQueues route Tasks to Workers based on these attributes.*/
/*                             <p>Example:{"name": "Alice", "technical_skill": 5, "languages": ["ru", "en"]}*/
/*                             </p>*/
/*                             </div>*/
/*                         </div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*             <!-- /.box-primary -->*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script>*/
/* //$(function(){*/
/*     $("#btnsubmit").bind("click", function() {*/
/*             $.ajax({*/
/*                 url: "{{ path('createworkeraction') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{wFName:$("#wFName").val(), wLName:$("#wLName").val(),wName:$("#wName").val(),wemail:$("#wemail").val(),wSkills:$("#wSkills").val(),wroles:$("#wroles").val()},*/
/*                 success: function(resultData) {*/
/*                     $("#alert").addClass("in alert-success");*/
/*                     alert(resultData);*/
/*                 },*/
/*                 error: function() {*/
/*                     alert("Error!!!");*/
/*                 }*/
/*             })*/
/*         });*/
/*     $("#alertClose").click(function() {*/
/*         $(this).parent().removeClass('in');*/
/*     });*/
/* //});*/
/* </script>*/
/* <!-- /.content -->*/
