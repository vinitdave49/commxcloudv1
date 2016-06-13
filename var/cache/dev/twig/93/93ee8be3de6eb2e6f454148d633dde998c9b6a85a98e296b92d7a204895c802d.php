<?php

/* CommcloudVoiceBundle:Admin:createtaskqueue.html.twig */
class __TwigTemplate_c877affc69c9cdcc8f57cbee1f19ee9b5de5cbcc16ff7cdaebb3a72aaf10306d extends Twig_Template
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
        $__internal_23f1b6da00bf91c90d41de008f6739cd93c6d7acd09ea171559f779e870e5b25 = $this->env->getExtension("native_profiler");
        $__internal_23f1b6da00bf91c90d41de008f6739cd93c6d7acd09ea171559f779e870e5b25->enter($__internal_23f1b6da00bf91c90d41de008f6739cd93c6d7acd09ea171559f779e870e5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Admin:createtaskqueue.html.twig"));

        // line 1
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
<section class=\"content\">
    
    <div class=\"alert alert-danger\" id=\"alertbox\" style=\"margin:10px;\">
        ";
        // line 31
        echo "        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
        <span id=\"alertSpan\">Error while creating activity. Please try again</span>
    </div>     
    <div class=\"row\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Create TaskQueue</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                                <label>TaskQueue Name</label>
                                <input type=\"text\" id=\"tqName\" name=\"tqName\" class=\"form-control\" placeholder=\"Friendly Task Queue Name\">
                                <label>Reservation Activity</label>
                                <select id=\"reservationActivity\" name=\"reservationActivity\" class=\"form-control\">
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\" selected=\"selected\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                                </select>
                                <label>Assignment Activity</label>
                                <select id=\"assignmentActivity\" name=\"assignmentActivity\" class=\"form-control\">
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\" selected=\"selected\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                                </select>


                                <label>Max. Reserved Workers</label>
                                <input type=\"text\" id=\"maxreservWorkers\" name=\"maxreservWorkers\" class=\"form-control\" placeholder=\"Max. Reserved Workers\">


                                <label>Target Workers</label>
                                <input type=\"text\" id=\"targetWorkers\" name=\"targetWorkers\" class=\"form-control\" placeholder=\"languages HAS 'ru' AND name IN ['Jimmy', 'Bob', 'Alice']\">


                                <button type=\"button\" id=\"btnsubmit\" name=\"btnsubmit\" id=\"submit\" class=\"btn btn-block btn-primary\">Save</button>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Friendly Name</strong> is a descriptive name for the TaskQueue. Examples include \"USA Technical Support\" and \"Inside Sales\".</p>
                    <p><strong>Reservation Activity</strong> is the Activity that a Worker is transitioned to when they are reserved to perform a Task.</p>
                    <p><strong>Assignment Activity</strong> is the Activity that a Worker is transitioned to when they accept a reservation.</p>
                    <p><strong>Max Reserved Workers</strong> lets you specify the maximum number of workers to reserve for a task. The default is 1.</p>
                    <p>
                        <strong>Target Workers</strong> is an SQL-like expression that matches available Workers to this TaskQueue. Example:
                        <pre>languages HAS \"ru\" AND name IN [\"Jimmy\", \"Bob\", \"Alice\"]</pre>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Create TaskQueue</h3>
            </div>
            <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                    <thead>
                        <tr role=\"row\">
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"TaskQueue SID: activate to sort column descending\" style=\"width: 180px;\">TaskQueue ID</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"TaskQueue Name: activate to sort column ascending\" style=\"width: 223px;\">TaskQueue Name</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Reservation_Activity: activate to sort column ascending\" style=\"width: 223px;\">Reservation Activity</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Assignment_Activity: activate to sort column ascending\" style=\"width: 223px;\">Assignment Activity</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Assignment_Activity: activate to sort column ascending\" style=\"width: 223px;\">Max. Reserved Workers</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Assignment_Activity: activate to sort column ascending\" style=\"width: 223px;\">Target Workers</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 223px;\">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taskqueues"]) ? $context["taskqueues"] : $this->getContext($context, "taskqueues")));
        foreach ($context['_seq'] as $context["_key"] => $context["taskqueue"]) {
            // line 100
            echo "                            <tr>
                                <td class=\"taskqueueSid\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "sid", array()), "html", null, true);
            echo "</td>
                                <td class=\"taskqueueName\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "friendlyName", array()), "html", null, true);
            echo "</td>
                                <td class=\"taskqueueResAct\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "reservationActivityName", array()), "html", null, true);
            echo "</td>
                                <td class=\"taskqueueAssignAct\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "assignmentActivityName", array()), "html", null, true);
            echo "</td>
                                <td class=\"taskqueueMaxReserv\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "maxReservedWorkers", array()), "html", null, true);
            echo "</td>
                                <td class=\"taskqueueTarget\">";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "targetWorkers", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <div class=\"col-sm-6\">
                                    <button id=btnData class=\"viewEvent animatedbtn btn btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"vertical-align:middle\" data-uniqueid=";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "taskqueueSid", array()), "html", null, true);
            echo "><span>View</span></button>
                                    </div>
                                    <div class=\"col-sm-6\">
                                    <button class=\"deleteEvent animatedbtn btn btn-lg\" style=\"vertical-align:middle\" data-uniqueid=";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["taskqueue"], "taskqueueSid", array()), "html", null, true);
            echo "><span>Delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taskqueue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                <label>TaskQueue SID</label>
                <input type=\"text\" class=\"form-control\" id='taskqueueSidmodal' name='taskqueueSidmodal' disabled>
                <label>TaskQueue</label>
                <input type=\"text\" class=\"form-control\" id='taskqueueNameModal' name='taskqueueNameModal' disabled>
                <label>Reservation Activity</label>
                ";
        // line 140
        echo "                    <select id=\"taskqueueResActModal\" name=\"taskqueueResActModal\" class=\"form-control\">
                        <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
                        <option value=\"WAb7f02f442ef2784e2644305b36c632e8\" selected=\"selected\">Reserved</option>
                        <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                    </select>
                <label>Assignment Activity</label>
                    <select id=\"taskqueueAssignActModal\" name=\"taskqueueAssignActModal\" class=\"form-control\">
                        <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\" selected=\"selected\">Busy</option>
                        <option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
                        <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                    </select>
                ";
        // line 152
        echo "                ";
        // line 153
        echo "                
                <label>Max. Reserved workers</label>
                <input type=\"text\" class=\"form-control\" id='taskqueueMaxReservModal' name='taskqueueMaxReservModal'>
                <label>TaskQueue target workers</label>
                <input type=\"text\" class=\"form-control\" id='taskqueueTargetModal' name='taskqueueTargetModal'>
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
<script>

    \$('#example1').DataTable({
      \"paging\": true,
      \"lengthChange\": true,
      \"searching\": true,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    \$(\"#alertbox\").hide();    
    \$(function(){
    \$(\"#btnsubmit\").bind(\"click\", function() {
            \$.ajax({
                url: \"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("createtaskqueueaction");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{tqName:\$(\"#tqName\").val(),reservationActivity:\$(\"#reservationActivity\").val(),reservationActivityName:\$('#reservationActivity :selected').text(),
                assignmentActivity:\$(\"#assignmentActivity\").val(),assignmentActivityName:\$('#assignmentActivity :selected').text(),
                maxreservWorkers:\$(\"#maxreservWorkers\").val(),targetWorkers:\$(\"#targetWorkers\").val()},
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"TaskQueue has been created\");
                    \$(\"#alertbox\").show();
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while creating TaskQueue. Please try again\");
                    \$(\"#alertbox\").show();                    
                }
            })
        });
    \$(\"#alertClose\").click(function() {
        \$(this).parent().removeClass('in');
    });
    
    \$('#btnupdate').bind(\"click\", function() {
        //alert(\$(\"#wLoginIdmodal\").val());
        \$.ajax({
            url: \"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("updatetaskqueueredirect");
        echo "\",
            async: true,
            type: \"POST\",
            dataType: \"text\",
            data:{
                taskqueueSid:\$(\"#taskqueueSidmodal\").val(),taskqueueName:\$(\"#taskqueueNameModal\").val(), 
                taskqueueResActSid:\$(\"#taskqueueResActModal\").val(),taskqueueResAct:\$(\"#taskqueueResActModal option:selected\").text(), 
                taskqueueAssignActSid:\$(\"#taskqueueAssignActModal\").val(),taskqueueAssignAct:\$(\"#taskqueueAssignActModal option:selected\").text(),
                taskqueueMaxReserv:\$(\"#taskqueueMaxReservModal\").val(),taskqueueTarget:\$(\"#taskqueueTargetModal\").val(),
            },
            success: function(resultData) {
                \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                \$(\"#alertbox span\").html(\"TaskQueue has been updated\");
                \$(\"#alertbox\").show();                
            },
            error: function() {
                \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                \$(\"#alertbox span\").html(\"Error while updating TaskQueue. Please try again\");
                \$(\"#alertbox\").show();                
            }
        })
    });
    \$(\"#alertClose\").click(function() {
        \$(this).parent().removeClass('in');
    });
    
    \$('.deleteEvent').click( function(){
    //\$(document).on(\"click\", \".deleteEvent\", function() {
        if(confirm('Are you sure you want to delete this TaskQueue?')){
            \$.ajax({
                url: \"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("deletetaskqueueredirect");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{
                    taskqueueSid:\$(this).data(\"uniqueid\")
                },
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"TaskQueue has been deleted\");
                    \$(\"#alertbox\").show();                      
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while deleting TaskQueue. Please try again\");
                    \$(\"#alertbox\").show();
                }
            })
        }
    });
    
    //\$('.viewEvent').click( function(){
    \$(document).on(\"click\", \".viewEvent\", function() {
        var \$taskqueueSid=\$(this).data(\"uniqueid\");
        var \$taskqueueName=\$(this).closest(\"tr\").find(\"td[class='taskqueueName']\").html();
        var \$taskqueueResAct=\$(this).closest(\"tr\").find(\"td[class='taskqueueResAct']\").html();
        var \$taskqueueAssignAct=\$(this).closest(\"tr\").find(\"td[class='taskqueueAssignAct']\").html();
        var \$taskqueueMaxReserv=\$(this).closest(\"tr\").find(\"td[class='taskqueueMaxReserv']\").html();
        var \$taskqueueTarget=\$(this).closest(\"tr\").find(\"td[class='taskqueueTarget']\").html();
        
        \$('#taskqueueSidmodal').val(\$taskqueueSid);
        \$('#taskqueueNameModal').val(\$taskqueueName);
        \$(\"#taskqueueResActModal option:contains(\" + \$taskqueueResAct +\")\").attr(\"selected\", true);
        \$(\"#taskqueueAssignActModal option:contains(\" + \$taskqueueAssignAct +\")\").attr(\"selected\", true);       
        \$('#taskqueueMaxReservModal').val(\$taskqueueMaxReserv);
        \$('#taskqueueTargetModal').val(\$taskqueueTarget);
        \$('#myModal').modal('show');
    });
    });
</script>";
        
        $__internal_23f1b6da00bf91c90d41de008f6739cd93c6d7acd09ea171559f779e870e5b25->leave($__internal_23f1b6da00bf91c90d41de008f6739cd93c6d7acd09ea171559f779e870e5b25_prof);

    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:createtaskqueue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 240,  274 => 210,  245 => 184,  212 => 153,  210 => 152,  197 => 140,  173 => 117,  162 => 112,  156 => 109,  150 => 106,  146 => 105,  142 => 104,  138 => 103,  134 => 102,  130 => 101,  127 => 100,  123 => 99,  53 => 31,  22 => 1,);
    }
}
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
/* <section class="content">*/
/*     */
/*     <div class="alert alert-danger" id="alertbox" style="margin:10px;">*/
/*         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*         <h4><i class="icon fa fa-ban"></i> Alert!</h4>*/
/*         <span id="alertSpan">Error while creating activity. Please try again</span>*/
/*     </div>     */
/*     <div class="row">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Create TaskQueue</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                                 <label>TaskQueue Name</label>*/
/*                                 <input type="text" id="tqName" name="tqName" class="form-control" placeholder="Friendly Task Queue Name">*/
/*                                 <label>Reservation Activity</label>*/
/*                                 <select id="reservationActivity" name="reservationActivity" class="form-control">*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8" selected="selected">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                                 </select>*/
/*                                 <label>Assignment Activity</label>*/
/*                                 <select id="assignmentActivity" name="assignmentActivity" class="form-control">*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692" selected="selected">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                                 </select>*/
/* */
/* */
/*                                 <label>Max. Reserved Workers</label>*/
/*                                 <input type="text" id="maxreservWorkers" name="maxreservWorkers" class="form-control" placeholder="Max. Reserved Workers">*/
/* */
/* */
/*                                 <label>Target Workers</label>*/
/*                                 <input type="text" id="targetWorkers" name="targetWorkers" class="form-control" placeholder="languages HAS 'ru' AND name IN ['Jimmy', 'Bob', 'Alice']">*/
/* */
/* */
/*                                 <button type="button" id="btnsubmit" name="btnsubmit" id="submit" class="btn btn-block btn-primary">Save</button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p><strong>Friendly Name</strong> is a descriptive name for the TaskQueue. Examples include "USA Technical Support" and "Inside Sales".</p>*/
/*                     <p><strong>Reservation Activity</strong> is the Activity that a Worker is transitioned to when they are reserved to perform a Task.</p>*/
/*                     <p><strong>Assignment Activity</strong> is the Activity that a Worker is transitioned to when they accept a reservation.</p>*/
/*                     <p><strong>Max Reserved Workers</strong> lets you specify the maximum number of workers to reserve for a task. The default is 1.</p>*/
/*                     <p>*/
/*                         <strong>Target Workers</strong> is an SQL-like expression that matches available Workers to this TaskQueue. Example:*/
/*                         <pre>languages HAS "ru" AND name IN ["Jimmy", "Bob", "Alice"]</pre>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Create TaskQueue</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                     <thead>*/
/*                         <tr role="row">*/
/*                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="TaskQueue SID: activate to sort column descending" style="width: 180px;">TaskQueue ID</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="TaskQueue Name: activate to sort column ascending" style="width: 223px;">TaskQueue Name</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Reservation_Activity: activate to sort column ascending" style="width: 223px;">Reservation Activity</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Assignment_Activity: activate to sort column ascending" style="width: 223px;">Assignment Activity</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Assignment_Activity: activate to sort column ascending" style="width: 223px;">Max. Reserved Workers</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Assignment_Activity: activate to sort column ascending" style="width: 223px;">Target Workers</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 223px;">Operations</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for taskqueue in taskqueues %}*/
/*                             <tr>*/
/*                                 <td class="taskqueueSid">{{ taskqueue.sid }}</td>*/
/*                                 <td class="taskqueueName">{{ taskqueue.friendlyName }}</td>*/
/*                                 <td class="taskqueueResAct">{{ taskqueue.reservationActivityName}}</td>*/
/*                                 <td class="taskqueueAssignAct">{{ taskqueue.assignmentActivityName}}</td>*/
/*                                 <td class="taskqueueMaxReserv">{{ taskqueue.maxReservedWorkers}}</td>*/
/*                                 <td class="taskqueueTarget">{{ taskqueue.targetWorkers}}</td>*/
/*                                 <td>*/
/*                                     <div class="col-sm-6">*/
/*                                     <button id=btnData class="viewEvent animatedbtn btn btn-lg" data-toggle="modal" data-target="#myModal" style="vertical-align:middle" data-uniqueid={{  taskqueue.taskqueueSid }}><span>View</span></button>*/
/*                                     </div>*/
/*                                     <div class="col-sm-6">*/
/*                                     <button class="deleteEvent animatedbtn btn btn-lg" style="vertical-align:middle" data-uniqueid={{  taskqueue.taskqueueSid }}><span>Delete</span></button>*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*    <!-- Modal -->*/
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
/*                 <label>TaskQueue SID</label>*/
/*                 <input type="text" class="form-control" id='taskqueueSidmodal' name='taskqueueSidmodal' disabled>*/
/*                 <label>TaskQueue</label>*/
/*                 <input type="text" class="form-control" id='taskqueueNameModal' name='taskqueueNameModal' disabled>*/
/*                 <label>Reservation Activity</label>*/
/*                 {#<input type="text" class="form-control" id='taskqueueResActModal' name='taskqueueResActModal'>#}*/
/*                     <select id="taskqueueResActModal" name="taskqueueResActModal" class="form-control">*/
/*                         <option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/*                         <option value="WAb7f02f442ef2784e2644305b36c632e8" selected="selected">Reserved</option>*/
/*                         <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                     </select>*/
/*                 <label>Assignment Activity</label>*/
/*                     <select id="taskqueueAssignActModal" name="taskqueueAssignActModal" class="form-control">*/
/*                         <option value="WA81cd6c807dc20b2d1e829d226f2ac692" selected="selected">Busy</option>*/
/*                         <option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/*                         <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                     </select>*/
/*                 {#<label>Assignment Activity</label>#}*/
/*                 {#<input type="text" class="form-control" id='taskqueueAssignActModal' name='taskqueueAssignActModal'>#}*/
/*                 */
/*                 <label>Max. Reserved workers</label>*/
/*                 <input type="text" class="form-control" id='taskqueueMaxReservModal' name='taskqueueMaxReservModal'>*/
/*                 <label>TaskQueue target workers</label>*/
/*                 <input type="text" class="form-control" id='taskqueueTargetModal' name='taskqueueTargetModal'>*/
/*             </div>*/
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
/* <script>*/
/* */
/*     $('#example1').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": true,*/
/*       "searching": true,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": true*/
/*     });*/
/*     $("#alertbox").hide();    */
/*     $(function(){*/
/*     $("#btnsubmit").bind("click", function() {*/
/*             $.ajax({*/
/*                 url: "{{ path('createtaskqueueaction') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{tqName:$("#tqName").val(),reservationActivity:$("#reservationActivity").val(),reservationActivityName:$('#reservationActivity :selected').text(),*/
/*                 assignmentActivity:$("#assignmentActivity").val(),assignmentActivityName:$('#assignmentActivity :selected').text(),*/
/*                 maxreservWorkers:$("#maxreservWorkers").val(),targetWorkers:$("#targetWorkers").val()},*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("TaskQueue has been created");*/
/*                     $("#alertbox").show();*/
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while creating TaskQueue. Please try again");*/
/*                     $("#alertbox").show();                    */
/*                 }*/
/*             })*/
/*         });*/
/*     $("#alertClose").click(function() {*/
/*         $(this).parent().removeClass('in');*/
/*     });*/
/*     */
/*     $('#btnupdate').bind("click", function() {*/
/*         //alert($("#wLoginIdmodal").val());*/
/*         $.ajax({*/
/*             url: "{{ path('updatetaskqueueredirect') }}",*/
/*             async: true,*/
/*             type: "POST",*/
/*             dataType: "text",*/
/*             data:{*/
/*                 taskqueueSid:$("#taskqueueSidmodal").val(),taskqueueName:$("#taskqueueNameModal").val(), */
/*                 taskqueueResActSid:$("#taskqueueResActModal").val(),taskqueueResAct:$("#taskqueueResActModal option:selected").text(), */
/*                 taskqueueAssignActSid:$("#taskqueueAssignActModal").val(),taskqueueAssignAct:$("#taskqueueAssignActModal option:selected").text(),*/
/*                 taskqueueMaxReserv:$("#taskqueueMaxReservModal").val(),taskqueueTarget:$("#taskqueueTargetModal").val(),*/
/*             },*/
/*             success: function(resultData) {*/
/*                 $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                 $("#alertbox span").html("TaskQueue has been updated");*/
/*                 $("#alertbox").show();                */
/*             },*/
/*             error: function() {*/
/*                 $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                 $("#alertbox span").html("Error while updating TaskQueue. Please try again");*/
/*                 $("#alertbox").show();                */
/*             }*/
/*         })*/
/*     });*/
/*     $("#alertClose").click(function() {*/
/*         $(this).parent().removeClass('in');*/
/*     });*/
/*     */
/*     $('.deleteEvent').click( function(){*/
/*     //$(document).on("click", ".deleteEvent", function() {*/
/*         if(confirm('Are you sure you want to delete this TaskQueue?')){*/
/*             $.ajax({*/
/*                 url: "{{ path('deletetaskqueueredirect') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{*/
/*                     taskqueueSid:$(this).data("uniqueid")*/
/*                 },*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("TaskQueue has been deleted");*/
/*                     $("#alertbox").show();                      */
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while deleting TaskQueue. Please try again");*/
/*                     $("#alertbox").show();*/
/*                 }*/
/*             })*/
/*         }*/
/*     });*/
/*     */
/*     //$('.viewEvent').click( function(){*/
/*     $(document).on("click", ".viewEvent", function() {*/
/*         var $taskqueueSid=$(this).data("uniqueid");*/
/*         var $taskqueueName=$(this).closest("tr").find("td[class='taskqueueName']").html();*/
/*         var $taskqueueResAct=$(this).closest("tr").find("td[class='taskqueueResAct']").html();*/
/*         var $taskqueueAssignAct=$(this).closest("tr").find("td[class='taskqueueAssignAct']").html();*/
/*         var $taskqueueMaxReserv=$(this).closest("tr").find("td[class='taskqueueMaxReserv']").html();*/
/*         var $taskqueueTarget=$(this).closest("tr").find("td[class='taskqueueTarget']").html();*/
/*         */
/*         $('#taskqueueSidmodal').val($taskqueueSid);*/
/*         $('#taskqueueNameModal').val($taskqueueName);*/
/*         $("#taskqueueResActModal option:contains(" + $taskqueueResAct +")").attr("selected", true);*/
/*         $("#taskqueueAssignActModal option:contains(" + $taskqueueAssignAct +")").attr("selected", true);       */
/*         $('#taskqueueMaxReservModal').val($taskqueueMaxReserv);*/
/*         $('#taskqueueTargetModal').val($taskqueueTarget);*/
/*         $('#myModal').modal('show');*/
/*     });*/
/*     });*/
/* </script>*/
