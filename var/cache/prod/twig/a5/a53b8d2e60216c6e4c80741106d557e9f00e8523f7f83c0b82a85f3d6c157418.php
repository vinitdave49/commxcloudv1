<?php

/* CommcloudVoiceBundle:Admin:createworker.html.twig */
class __TwigTemplate_fa6c302cfd0907656414bb9e99ae45f92d0925c1f0c8a0ea27bf03f0cc6b5e5f extends Twig_Template
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
        // line 2
        echo "<style>
.animatedbtn {
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    width: 50px;
    margin: 3px;
    transition-duration: 0.4s;
    cursor: pointer;
}

.animatedbtn {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.animatedbtn:hover {
    background-color: #555555;
    color: white;
}
</style>

<!-- Main content -->
<section class=\"content\">
    <div class=\"alert alert-danger\" id=\"alertbox\" style=\"margin:10px;\">
        ";
        // line 33
        echo "        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
        <span id=\"alertSpan\">Error while creating activity. Please try again</span>
    </div>     
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Create Worker</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">

                        <div class=\"col-md-6\">
                            <label>First Name</label>
                            <input type=\"text\" class=\"form-control\" id='wFName' name='wFName'>
                            <label>Last Name</label>
                            <input type=\"text\" class=\"form-control\" id='wLName' name='wLName'>
                            <label>Display Name</label>
                            <input type=\"text\" class=\"form-control\" id='wDisplayName' name='wDisplayName'>
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
                            <button type=\"button\"  id=\"btnsubmit\" name=\"btnsubmit\" class=\"btn btn-block btn-primary\">Create</button>
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
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Worker List</h3>
                </div>
            <!-- /.box-primary -->
            <!-- Modified by Shubhankar on May 11th -->
             <div class=\"box-body\">
                    ";
        // line 83
        echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                                    <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Login ID: activate to sort column descending\" style=\"width: 180px;\">Login ID</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Display Name: activate to sort column ascending\" style=\"width: 223px;\">Display Name</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Email: activate to sort column ascending\" style=\"width: 223px;\">Email</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Worker SID: activate to sort column ascending\" style=\"width: 223px;\">Worker SID</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Role: activate to sort column ascending\" style=\"width: 223px;\">Roles</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Skills: activate to sort column ascending\" style=\"width: 223px;\">Skills</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 223px;\">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["workers"]) ? $context["workers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["worker"]) {
            // line 99
            echo "                                        <tr role=\"row\">
                                            
                                            <td class=\"wLoginId\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wloginid", array()), "html", null, true);
            echo "</td>
                                            <td class=\"wDisplayName\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wDisplayName", array()), "html", null, true);
            echo "</td>
                                            <td class=\"wemail\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wemail", array()), "html", null, true);
            echo "</td>
                                            <td class=\"wsid\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wsid", array()), "html", null, true);
            echo "</td>
                                            <td class=\"wroles\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wroles", array()), "html", null, true);
            echo "</td>
                                            <td class=\"wskills\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wskills", array()), "html", null, true);
            echo "</td>
                                            ";
            // line 108
            echo "                                            <td>
                                                ";
            // line 110
            echo "                                                <div class=\"col-sm-6\">
                                                <button id=btnData class=\"viewEvent animatedbtn btn btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"vertical-align:middle\" data-wlname=";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wlname", array()), "html", null, true);
            echo " data-wfname=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wfname", array()), "html", null, true);
            echo " data-uniqueid=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wloginid", array()), "html", null, true);
            echo "><span>View</span></button>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                <button class=\"deleteEvent animatedbtn btn btn-lg\" style=\"vertical-align:middle\" data-wsid=";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wsid", array()), "html", null, true);
            echo " data-loginId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["worker"], "wloginid", array()), "html", null, true);
            echo "><span>Delete</span></button>
                                                </div>
                                                ";
            // line 117
            echo "                                                ";
            // line 118
            echo "                                                ";
            // line 119
            echo "                                                ";
            // line 120
            echo "                                                ";
            // line 121
            echo "                                                ";
            // line 122
            echo "                                                ";
            // line 123
            echo "                                                ";
            // line 124
            echo "                                                ";
            // line 125
            echo "                                                ";
            // line 126
            echo "                                                ";
            // line 127
            echo "                                                ";
            // line 128
            echo "                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['worker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";
        // line 136
        echo "               </div>
    
    <!-- Modal -->
  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\" style=\"border-radius:10px;\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\" align=\"center\">User Configuration</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group\">
                <label>Login ID</label>
                <input type=\"text\" class=\"form-control\" id='wLoginIdmodal' name='wLoginIdmodal' disabled>
                <label>First Name</label>
                <input type=\"text\" class=\"form-control\" id='wFNamemodal' name='wFNamemodal'>
                <label>Last Name</label>
                <input type=\"text\" class=\"form-control\" id='wLNamemodal' name='wLNamemodal'>
                <label>Display Name</label>
                <input type=\"text\" class=\"form-control\" id='wDisplayNamemodal' name='wDisplayNamemodal'>
                <label>Email</label>
                <input type=\"text\" class=\"form-control\" id='wemailmodal' name='wemailmodal'>
                <label>Worker SID</label>
                <input type=\"text\" class=\"form-control\" id='wSidmodal' name='wSidmodal' disabled>
                <label>Roles</label>
                    <select id=\"wrolesmodal\" name=\"wrolesmodal\" class=\"form-control\">
                        <option value=\"ROLE_USER\" selected=\"selected\">Agent</option>
                        <option value=\"ROLE_SUPERVISOR\">Supervisor</option>
                        <option value=\"ROLE_ADMIN\">Admin</option>
                    </select>
                <label>Skills</label>
                <input type=\"textarea\" row=\"4\" class=\"form-control\" id='wSkillsmodal' name='wSkillsmodal'>
                        </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Close</button>
          <button type=\"button\" id=\"btnupdate\" class=\"btn btn-primary\" data-dismiss=\"modal\">Save Changes</button>
        </div>
      </div>
      
    </div>
  </div>
</section>



<script type=\"text/javascript\">
    \$(\"#alertbox\").hide();
    \$('#example1').DataTable({
      \"paging\": true,
      \"lengthChange\": true,
      \"searching\": true,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": false
    });
    
    \$(function(){
    \$(\"#btnsubmit\").bind(\"click\", function() {
        \$.ajax({
            url: \"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("createworkeraction");
        echo "\",
            async: true,
            type: \"POST\",
            dataType: \"text\",
            data:{wFName:\$(\"#wFName\").val(), wLName:\$(\"#wLName\").val(),wdisplayname:\$(\"#wDisplayName\").val(),wemail:\$(\"#wemail\").val(),wSkills:\$(\"#wSkills\").val(),wroles:\$(\"#wroles\").val()},
            success: function(resultData) {
                \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                \$(\"#alertbox span\").html(\"Worker has been created\");
                \$(\"#alertbox\").show();                
            },
            error: function() {
                \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                \$(\"#alertbox span\").html(\"Error while creating Worker. Please try again\");
                \$(\"#alertbox\").show();                
            }
        })
    });
    
    \$('#btnupdate').bind(\"click\", function() {
        //alert(\$(\"#wLoginIdmodal\").val());
        \$.ajax({
            url: \"";
        // line 220
        echo $this->env->getExtension('routing')->getPath("updateworkerredirect");
        echo "\",
            async: true,
            type: \"POST\",
            dataType: \"text\",
            data:{
                wSid:\$(\"#wSidmodal\").val(),wLoginId:\$(\"#wLoginIdmodal\").val(), wFName:\$(\"#wFNamemodal\").val(), 
                wLName:\$(\"#wLNamemodal\").val(),wdisplaynameName:\$(\"#wDisplayNamemodal\").val(),wemail:\$(\"#wemailmodal\").val(),
                wSkills:\$(\"#wSkillsmodal\").val(),wroles:\$(\"#wrolesmodal\").val()
            },
            success: function(resultData) {
                \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                \$(\"#alertbox span\").html(\"Worker has been updated\");
                \$(\"#alertbox\").show();                
            },
            error: function() {
                \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                \$(\"#alertbox span\").html(\"Error while updating Worker. Please try again\");
                \$(\"#alertbox\").show(); 
            }
        })       
    });
    \$(\"#alertClose\").click(function() {
        \$(this).parent().removeClass('in');
    });
    
    \$('.deleteEvent').click( function(){
    //\$(document).on(\"click\", \".deleteEvent\", function() {
        if(confirm('Are you sure you want to delete this Agent?')){
            \$.ajax({
                url: \"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("deleteworkerredirect");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{
                    wSid:\$(this).data(\"wsid\"),wLoginId:\$(this).data(\"loginid\")
                },
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"Worker has been deleted\");
                    \$(\"#alertbox\").show();                     
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while deleting Worker. Please try again\");
                    \$(\"#alertbox\").show();                     
                }
            })
        }
    });
    
    //\$('.viewEvent').click( function(){
    \$(document).on(\"click\", \".viewEvent\", function() {
        var \$wLoginId=\$(this).data(\"uniqueid\");
        //var \$wLoginId=\$(this).closest(\"tr\").find(\"td[class='wLoginId']\").html();
        var \$wemail=\$(this).closest(\"tr\").find(\"td[class='wemail']\").html();
        var \$wDisplayName=\$(this).closest(\"tr\").find(\"td[class='wDisplayName']\").html();
        var \$wsid=\$(this).closest(\"tr\").find(\"td[class='wsid']\").html();
        var \$wroles=\$(this).closest(\"tr\").find(\"td[class='wroles']\").html();
        var \$wskills=\$(this).closest(\"tr\").find(\"td[class='wskills']\").html();
        var \$wfname=\$(this).data(\"wfname\");
        var \$wlname=\$(this).data(\"wlname\");
        \$('#wLoginIdmodal').val(\$wLoginId);
        \$('#wDisplayNamemodal').val(\$wDisplayName);
        \$('#wemailmodal').val(\$wemail);
        \$('#wrolesmodal').val(\$wroles);
        \$('#wSkillsmodal').val(\$wskills);
        \$('#wSidmodal').val(\$wsid);
        \$('#wFNamemodal').val(\$wfname);
        \$('#wLNamemodal').val(\$wlname);
        \$('#myModal').modal('show');
    });
    });
</script>
<!-- /.content -->";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:createworker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 249,  299 => 220,  275 => 199,  210 => 136,  204 => 131,  196 => 128,  194 => 127,  192 => 126,  190 => 125,  188 => 124,  186 => 123,  184 => 122,  182 => 121,  180 => 120,  178 => 119,  176 => 118,  174 => 117,  167 => 114,  157 => 111,  154 => 110,  151 => 108,  147 => 106,  143 => 105,  139 => 104,  135 => 103,  131 => 102,  127 => 101,  123 => 99,  119 => 98,  102 => 83,  51 => 33,  19 => 2,);
    }
}
/* {#Shubhankar added below CSS for Hover button 5/18/2016 3.03PM#}*/
/* <style>*/
/* .animatedbtn {*/
/*     border: none;*/
/*     color: white;*/
/*     padding: 7px;*/
/*     text-align: center;*/
/*     text-decoration: none;*/
/*     display: inline-block;*/
/*     font-size: 12px;*/
/*     width: 50px;*/
/*     margin: 3px;*/
/*     transition-duration: 0.4s;*/
/*     cursor: pointer;*/
/* }*/
/* */
/* .animatedbtn {*/
/*     background-color: white;*/
/*     color: black;*/
/*     border: 2px solid #555555;*/
/* }*/
/* */
/* .animatedbtn:hover {*/
/*     background-color: #555555;*/
/*     color: white;*/
/* }*/
/* </style>*/
/* */
/* <!-- Main content -->*/
/* <section class="content">*/
/*     <div class="alert alert-danger" id="alertbox" style="margin:10px;">*/
/*         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*         <h4><i class="icon fa fa-ban"></i> Alert!</h4>*/
/*         <span id="alertSpan">Error while creating activity. Please try again</span>*/
/*     </div>     */
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Create Worker</h3>*/
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
/*                             <input type="text" class="form-control" id='wDisplayName' name='wDisplayName'>*/
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
/*                             <button type="button"  id="btnsubmit" name="btnsubmit" class="btn btn-block btn-primary">Create</button>*/
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
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Worker List</h3>*/
/*                 </div>*/
/*             <!-- /.box-primary -->*/
/*             <!-- Modified by Shubhankar on May 11th -->*/
/*              <div class="box-body">*/
/*                     {#<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">#}*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                                     <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Login ID: activate to sort column descending" style="width: 180px;">Login ID</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Display Name: activate to sort column ascending" style="width: 223px;">Display Name</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 223px;">Email</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Worker SID: activate to sort column ascending" style="width: 223px;">Worker SID</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 223px;">Roles</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Skills: activate to sort column ascending" style="width: 223px;">Skills</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 223px;">Operations</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for worker in workers %}*/
/*                                         <tr role="row">*/
/*                                             */
/*                                             <td class="wLoginId">{{ worker.wloginid }}</td>*/
/*                                             <td class="wDisplayName">{{ worker.wDisplayName }}</td>*/
/*                                             <td class="wemail">{{worker.wemail}}</td>*/
/*                                             <td class="wsid">{{worker.wsid}}</td>*/
/*                                             <td class="wroles">{{worker.wroles}}</td>*/
/*                                             <td class="wskills">{{worker.wskills}}</td>*/
/*                                             {#<td>{{ dump(worker)}}</td>#}*/
/*                                             <td>*/
/*                                                 {#<button id=btnchangepass class="animatedbtn btn btn-lg" style="vertical-align:middle"><span>Change Password</span></button>#}*/
/*                                                 <div class="col-sm-6">*/
/*                                                 <button id=btnData class="viewEvent animatedbtn btn btn-lg" data-toggle="modal" data-target="#myModal" style="vertical-align:middle" data-wlname={{worker.wlname}} data-wfname={{worker.wfname}} data-uniqueid={{ worker.wloginid }}><span>View</span></button>*/
/*                                                 </div>*/
/*                                                 <div class="col-sm-6">*/
/*                                                 <button class="deleteEvent animatedbtn btn btn-lg" style="vertical-align:middle" data-wsid={{worker.wsid}} data-loginId={{ worker.wloginid }}><span>Delete</span></button>*/
/*                                                 </div>*/
/*                                                 {#Shubhankar added this dropdown button 6/7/2016#}*/
/*                                                 {#<div class="btn-group">#}*/
/*                                                 {#<button id=btnData type="button" class="btn btn-default viewEvent" data-wlname={{worker.wlname}} data-wfname={{worker.wfname}} data-uniqueid={{ worker.wloginid }}>View</button>#}*/
/*                                                 {#<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">#}*/
/*                                                 {#<span class="caret"></span>#}*/
/*                                                 {#<span class="sr-only">Toggle Dropdown</span>#}*/
/*                                                 {#</button>#}*/
/*                                                 {#<ul class="dropdown-menu" role="menu">#}*/
/*                                                 {#<li onclick="#" ><a href="#">Change Password</a></li>#}*/
/*                                                 {#<li class="deleteEvent" data-wsid={{worker.wsid}} data-loginId={{ worker.wloginid }}><a href="#">Delete</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                                 {#</div>#}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     {#</div>#}*/
/*                </div>*/
/*     */
/*     <!-- Modal -->*/
/*   <div class="modal fade" id="myModal" role="dialog">*/
/*     <div class="modal-dialog">*/
/*     */
/*       <!-- Modal content-->*/
/*       <div class="modal-content" style="border-radius:10px;">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title" align="center">User Configuration</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <div class="form-group">*/
/*                 <label>Login ID</label>*/
/*                 <input type="text" class="form-control" id='wLoginIdmodal' name='wLoginIdmodal' disabled>*/
/*                 <label>First Name</label>*/
/*                 <input type="text" class="form-control" id='wFNamemodal' name='wFNamemodal'>*/
/*                 <label>Last Name</label>*/
/*                 <input type="text" class="form-control" id='wLNamemodal' name='wLNamemodal'>*/
/*                 <label>Display Name</label>*/
/*                 <input type="text" class="form-control" id='wDisplayNamemodal' name='wDisplayNamemodal'>*/
/*                 <label>Email</label>*/
/*                 <input type="text" class="form-control" id='wemailmodal' name='wemailmodal'>*/
/*                 <label>Worker SID</label>*/
/*                 <input type="text" class="form-control" id='wSidmodal' name='wSidmodal' disabled>*/
/*                 <label>Roles</label>*/
/*                     <select id="wrolesmodal" name="wrolesmodal" class="form-control">*/
/*                         <option value="ROLE_USER" selected="selected">Agent</option>*/
/*                         <option value="ROLE_SUPERVISOR">Supervisor</option>*/
/*                         <option value="ROLE_ADMIN">Admin</option>*/
/*                     </select>*/
/*                 <label>Skills</label>*/
/*                 <input type="textarea" row="4" class="form-control" id='wSkillsmodal' name='wSkillsmodal'>*/
/*                         </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>*/
/*           <button type="button" id="btnupdate" class="btn btn-primary" data-dismiss="modal">Save Changes</button>*/
/*         </div>*/
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* */
/* */
/* <script type="text/javascript">*/
/*     $("#alertbox").hide();*/
/*     $('#example1').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": true,*/
/*       "searching": true,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": false*/
/*     });*/
/*     */
/*     $(function(){*/
/*     $("#btnsubmit").bind("click", function() {*/
/*         $.ajax({*/
/*             url: "{{ path('createworkeraction') }}",*/
/*             async: true,*/
/*             type: "POST",*/
/*             dataType: "text",*/
/*             data:{wFName:$("#wFName").val(), wLName:$("#wLName").val(),wdisplayname:$("#wDisplayName").val(),wemail:$("#wemail").val(),wSkills:$("#wSkills").val(),wroles:$("#wroles").val()},*/
/*             success: function(resultData) {*/
/*                 $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                 $("#alertbox span").html("Worker has been created");*/
/*                 $("#alertbox").show();                */
/*             },*/
/*             error: function() {*/
/*                 $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                 $("#alertbox span").html("Error while creating Worker. Please try again");*/
/*                 $("#alertbox").show();                */
/*             }*/
/*         })*/
/*     });*/
/*     */
/*     $('#btnupdate').bind("click", function() {*/
/*         //alert($("#wLoginIdmodal").val());*/
/*         $.ajax({*/
/*             url: "{{ path('updateworkerredirect') }}",*/
/*             async: true,*/
/*             type: "POST",*/
/*             dataType: "text",*/
/*             data:{*/
/*                 wSid:$("#wSidmodal").val(),wLoginId:$("#wLoginIdmodal").val(), wFName:$("#wFNamemodal").val(), */
/*                 wLName:$("#wLNamemodal").val(),wdisplaynameName:$("#wDisplayNamemodal").val(),wemail:$("#wemailmodal").val(),*/
/*                 wSkills:$("#wSkillsmodal").val(),wroles:$("#wrolesmodal").val()*/
/*             },*/
/*             success: function(resultData) {*/
/*                 $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                 $("#alertbox span").html("Worker has been updated");*/
/*                 $("#alertbox").show();                */
/*             },*/
/*             error: function() {*/
/*                 $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                 $("#alertbox span").html("Error while updating Worker. Please try again");*/
/*                 $("#alertbox").show(); */
/*             }*/
/*         })       */
/*     });*/
/*     $("#alertClose").click(function() {*/
/*         $(this).parent().removeClass('in');*/
/*     });*/
/*     */
/*     $('.deleteEvent').click( function(){*/
/*     //$(document).on("click", ".deleteEvent", function() {*/
/*         if(confirm('Are you sure you want to delete this Agent?')){*/
/*             $.ajax({*/
/*                 url: "{{ path('deleteworkerredirect') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{*/
/*                     wSid:$(this).data("wsid"),wLoginId:$(this).data("loginid")*/
/*                 },*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("Worker has been deleted");*/
/*                     $("#alertbox").show();                     */
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while deleting Worker. Please try again");*/
/*                     $("#alertbox").show();                     */
/*                 }*/
/*             })*/
/*         }*/
/*     });*/
/*     */
/*     //$('.viewEvent').click( function(){*/
/*     $(document).on("click", ".viewEvent", function() {*/
/*         var $wLoginId=$(this).data("uniqueid");*/
/*         //var $wLoginId=$(this).closest("tr").find("td[class='wLoginId']").html();*/
/*         var $wemail=$(this).closest("tr").find("td[class='wemail']").html();*/
/*         var $wDisplayName=$(this).closest("tr").find("td[class='wDisplayName']").html();*/
/*         var $wsid=$(this).closest("tr").find("td[class='wsid']").html();*/
/*         var $wroles=$(this).closest("tr").find("td[class='wroles']").html();*/
/*         var $wskills=$(this).closest("tr").find("td[class='wskills']").html();*/
/*         var $wfname=$(this).data("wfname");*/
/*         var $wlname=$(this).data("wlname");*/
/*         $('#wLoginIdmodal').val($wLoginId);*/
/*         $('#wDisplayNamemodal').val($wDisplayName);*/
/*         $('#wemailmodal').val($wemail);*/
/*         $('#wrolesmodal').val($wroles);*/
/*         $('#wSkillsmodal').val($wskills);*/
/*         $('#wSidmodal').val($wsid);*/
/*         $('#wFNamemodal').val($wfname);*/
/*         $('#wLNamemodal').val($wlname);*/
/*         $('#myModal').modal('show');*/
/*     });*/
/*     });*/
/* </script>*/
/* <!-- /.content -->*/
