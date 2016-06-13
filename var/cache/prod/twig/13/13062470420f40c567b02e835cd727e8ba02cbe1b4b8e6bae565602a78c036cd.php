<?php

/* CommcloudVoiceBundle:Admin:createactivity.html.twig */
class __TwigTemplate_536b2d8cc95180a043da5be65929ee8d231b3ec662ac10b338ad5d904295e63d extends Twig_Template
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
        // line 30
        echo "        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4>
        <span id=\"alertSpan\">Error while creating activity. Please try again</span>
    </div>    
    
    <div class=\"row\">
        ";
        // line 36
        echo "            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Create Activity</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                                <div class=\"form-group\">
                                    <label>Activity Name</label>
                                    <input type=\"text\" id=\"actName\" name=\"actName\" class=\"form-control\" placeholder=\"Friendly Activity Name\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Availability</label>
                                    <div id=\"availability\">
                                        <input type=\"radio\" name=\"availability\" class=\"availability\" id=\"Available\" value=1 checked=\"\">Available
                                    </div>
                                    <div>
                                        <input type=\"radio\" name=\"availability\" class=\"availability\"  id=\"NotAvailable\" value=0>Not Available
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"button\" id=\"btnsubmit\" name=\"btnsubmit\" class=\"btn btn-block btn-primary\">Save</button>
                                </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Friendly Name</strong> is a descriptive name for the Activity. Examples include \"Offline\", \"Busy\" and \"Wrapping Up\".</p>
                        <p>An <strong>Availability</strong> type of 'available' means that Workers currently engaged in this Activity are eligible for Task assignment.</p>
                    </div>
                </div>
            </div>
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Activity List</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                                    <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Activity SID: activate to sort column descending\" style=\"width: 180px;\">Activity ID</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Activity Name: activate to sort column ascending\" style=\"width: 223px;\">Activity Name</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Availability: activate to sort column ascending\" style=\"width: 223px;\">Availability</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 223px;\">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 87
            echo "                                        <tr>
                                            <td id=\"activitysid\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "activitySid", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "friendlyName", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    <a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                        <span data-bind=\"label\" class=\"activity-label\">
                                                            ";
            // line 94
            if ($this->getAttribute($context["activity"], "available", array())) {
                // line 95
                echo "                                                                Available
                                                            ";
            } else {
                // line 97
                echo "                                                                Not Available
                                                            ";
            }
            // line 99
            echo "                                                        </span>
                                                        <span class=\"caret\"></span>
                                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                                    </a>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                        <li><a href=\"#\">Available</a></li>
                                                        <li><a href=\"#\">Not Available</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"col-sm-6\" id=\"btnupdatediv\">
                                                <button data-activity-id=";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "activitySid", array()), "html", null, true);
            echo " type=\"button\" id=\"btnupdate\" name=\"btnupdate\" class=\"updateEvent animatedbtn btn btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"vertical-align:middle\">Save</button>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                <button data-activity-id=";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "activitySid", array()), "html", null, true);
            echo " type=\"button\" class=\"delete animatedbtn btn btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\" style=\"vertical-align:middle\">Delete</button>
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
            echo "                                                
                                            </td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        ";
        // line 140
        echo "</section>
<script>
    \$(\"#alertbox\").hide();
//\$(function(){
    \$('#example1').DataTable({
      \"paging\": true,
      \"lengthChange\": true,
      \"searching\": true,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"scrollX\": true
    });
    \$(\"#btnsubmit\").bind(\"click\", function() {
            \$.ajax({
                url: \"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("createactivityredirect");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{actName:\$(\"#actName\").val(), availability:\$(\".availability:checked\").val()},
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"Activity has been created\");
                    \$(\"#alertbox\").show();
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while creating Activity. Please try again\");
                    \$(\"#alertbox\").show();
                }
            })
        });
    function handlerName(event) {
        alert(event.data.msg);
    }
    \$('.updateEvent').click( function(){
        var \$act_sid = \$(this).data(\"activity-id\");
        var \$act_availability=\$(this).closest(\"tr\").find(\"span[class='activity-label']\");
            \$.ajax({
                url: \"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("updateactivityredirect");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{actSid:\$act_sid, availability:\$act_availability.html()},
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"Activity has been updated\");
                    \$(\"#alertbox\").show();                    
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while updating Activity. Please try again\");
                    \$(\"#alertbox\").show();                    
                }
            })
    });
    \$('.delete').click( function(){
    //\$(document).on(\"click\", \".delete\", function() {
    
        var \$act_sid = \$(this).data(\"activity-id\");
       // var \$act_availability=\$(this).closest(\"tr\").find(\"span[class='activity-label']\");
       if(confirm('Are you sure you want to delete this Activity?')){
            \$.ajax({
                url: \"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("deleteactivityredirect");
        echo "\",
                async: true,
                type: \"POST\",
                dataType: \"text\",
                data:{actSid:\$act_sid},
                success: function(resultData) {
                    \$(\"#alertbox\").addClass(\"alert-success\").removeClass(\"alert-danger\");
                    \$(\"#alertbox span\").html(\"Activity has been deleted\");
                    \$(\"#alertbox\").show();                    
                },
                error: function() {
                    \$(\"#alertbox\").addClass(\"alert-danger\").removeClass(\"alert-success\");
                    \$(\"#alertbox span\").html(\"Error while deleting Activity. Please try again\");
                    \$(\"#alertbox\").show();                    
                }
            })
       }
    });
    
    // \$(function(){
        \$(\".dropdown-menu li a\").click(function(){
            var \$target = \$( event.currentTarget );
            \$target.closest( '.btn-group' )
            .find( '[data-bind=\"label\"]' ).text( \$target.text() )
            .end()
            .children( '.dropdown-toggle' ).dropdown( 'toggle' );
            return false;
        });
  //  });
//});
</script>";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Admin:createactivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 203,  244 => 179,  217 => 155,  200 => 140,  189 => 130,  180 => 126,  178 => 125,  176 => 124,  174 => 123,  172 => 122,  170 => 121,  168 => 120,  166 => 119,  164 => 118,  162 => 117,  157 => 114,  151 => 111,  137 => 99,  133 => 97,  129 => 95,  127 => 94,  119 => 89,  115 => 88,  112 => 87,  108 => 86,  56 => 36,  49 => 30,  19 => 1,);
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
/*     <div class="alert alert-danger" id="alertbox" style="margin:10px;">*/
/*         {#<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>#}*/
/*         <h4><i class="icon fa fa-ban"></i> Alert!</h4>*/
/*         <span id="alertSpan">Error while creating activity. Please try again</span>*/
/*     </div>    */
/*     */
/*     <div class="row">*/
/*         {#<div class="col-xs-12">#}*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Create Activity</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                                 <div class="form-group">*/
/*                                     <label>Activity Name</label>*/
/*                                     <input type="text" id="actName" name="actName" class="form-control" placeholder="Friendly Activity Name">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label>Availability</label>*/
/*                                     <div id="availability">*/
/*                                         <input type="radio" name="availability" class="availability" id="Available" value=1 checked="">Available*/
/*                                     </div>*/
/*                                     <div>*/
/*                                         <input type="radio" name="availability" class="availability"  id="NotAvailable" value=0>Not Available*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <button type="button" id="btnsubmit" name="btnsubmit" class="btn btn-block btn-primary">Save</button>*/
/*                                 </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <p><strong>Friendly Name</strong> is a descriptive name for the Activity. Examples include "Offline", "Busy" and "Wrapping Up".</p>*/
/*                         <p>An <strong>Availability</strong> type of 'available' means that Workers currently engaged in this Activity are eligible for Task assignment.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="box box-primary">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Activity List</h3>*/
/*                 </div>*/
/*                 <!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                                     <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Activity SID: activate to sort column descending" style="width: 180px;">Activity ID</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Activity Name: activate to sort column ascending" style="width: 223px;">Activity Name</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Availability: activate to sort column ascending" style="width: 223px;">Availability</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 223px;">Operations</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         {% for activity in activities %}*/
/*                                         <tr>*/
/*                                             <td id="activitysid">{{ activity.activitySid }}</td>*/
/*                                             <td>{{ activity.friendlyName }}</td>*/
/*                                             <td>*/
/*                                                 <div class="btn-group">*/
/*                                                     <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                                                         <span data-bind="label" class="activity-label">*/
/*                                                             {% if activity.available %}*/
/*                                                                 Available*/
/*                                                             {% else %}*/
/*                                                                 Not Available*/
/*                                                             {% endif %}*/
/*                                                         </span>*/
/*                                                         <span class="caret"></span>*/
/*                                                         <span class="sr-only">Toggle Dropdown</span>*/
/*                                                     </a>*/
/*                                                     <ul class="dropdown-menu" role="menu">*/
/*                                                         <li><a href="#">Available</a></li>*/
/*                                                         <li><a href="#">Not Available</a></li>*/
/*                                                     </ul>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="col-sm-6" id="btnupdatediv">*/
/*                                                 <button data-activity-id={{ activity.activitySid }} type="button" id="btnupdate" name="btnupdate" class="updateEvent animatedbtn btn btn-lg" data-toggle="modal" data-target="#myModal" style="vertical-align:middle">Save</button>*/
/*                                                 </div>*/
/*                                                 <div class="col-sm-6">*/
/*                                                 <button data-activity-id={{ activity.activitySid }} type="button" class="delete animatedbtn btn btn-lg" data-toggle="modal" data-target="#myModal" style="vertical-align:middle">Delete</button>*/
/*                                                 </div>*/
/*                                                 {#<div class="btn-group">#}*/
/*                                                 {#<button data-activity-id={{ activity.activitySid }} type="button" id="btnupdate" name="btnupdate" class="btn btn-default updateEvent" data-toggle="modal" data-target="#myModal" style="vertical-align:middle">Save</button>#}*/
/*                                                 {#<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">#}*/
/*                                                 {#<span class="caret"></span>#}*/
/*                                                 {#<span class="sr-only">Toggle Dropdown</span>#}*/
/*                                                 {#</button>#}*/
/*                                                 {#<ul class="dropdown-menu" role="menu">#}*/
/*                                                 {#<li class="delete" data-activity-id={{ activity.activitySid }}><a href="#">Delete</a></li>#}*/
/*                                                 {#</ul>#}*/
/*                                                 {#</div>                                                #}*/
/*                                                 */
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.box-body -->*/
/*                 </div>*/
/*             </div>*/
/*         {#</div>#}*/
/* </section>*/
/* <script>*/
/*     $("#alertbox").hide();*/
/* //$(function(){*/
/*     $('#example1').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": true,*/
/*       "searching": true,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false,*/
/*       "scrollX": true*/
/*     });*/
/*     $("#btnsubmit").bind("click", function() {*/
/*             $.ajax({*/
/*                 url: "{{ path('createactivityredirect') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{actName:$("#actName").val(), availability:$(".availability:checked").val()},*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("Activity has been created");*/
/*                     $("#alertbox").show();*/
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while creating Activity. Please try again");*/
/*                     $("#alertbox").show();*/
/*                 }*/
/*             })*/
/*         });*/
/*     function handlerName(event) {*/
/*         alert(event.data.msg);*/
/*     }*/
/*     $('.updateEvent').click( function(){*/
/*         var $act_sid = $(this).data("activity-id");*/
/*         var $act_availability=$(this).closest("tr").find("span[class='activity-label']");*/
/*             $.ajax({*/
/*                 url: "{{ path('updateactivityredirect') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{actSid:$act_sid, availability:$act_availability.html()},*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("Activity has been updated");*/
/*                     $("#alertbox").show();                    */
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while updating Activity. Please try again");*/
/*                     $("#alertbox").show();                    */
/*                 }*/
/*             })*/
/*     });*/
/*     $('.delete').click( function(){*/
/*     //$(document).on("click", ".delete", function() {*/
/*     */
/*         var $act_sid = $(this).data("activity-id");*/
/*        // var $act_availability=$(this).closest("tr").find("span[class='activity-label']");*/
/*        if(confirm('Are you sure you want to delete this Activity?')){*/
/*             $.ajax({*/
/*                 url: "{{ path('deleteactivityredirect') }}",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 dataType: "text",*/
/*                 data:{actSid:$act_sid},*/
/*                 success: function(resultData) {*/
/*                     $("#alertbox").addClass("alert-success").removeClass("alert-danger");*/
/*                     $("#alertbox span").html("Activity has been deleted");*/
/*                     $("#alertbox").show();                    */
/*                 },*/
/*                 error: function() {*/
/*                     $("#alertbox").addClass("alert-danger").removeClass("alert-success");*/
/*                     $("#alertbox span").html("Error while deleting Activity. Please try again");*/
/*                     $("#alertbox").show();                    */
/*                 }*/
/*             })*/
/*        }*/
/*     });*/
/*     */
/*     // $(function(){*/
/*         $(".dropdown-menu li a").click(function(){*/
/*             var $target = $( event.currentTarget );*/
/*             $target.closest( '.btn-group' )*/
/*             .find( '[data-bind="label"]' ).text( $target.text() )*/
/*             .end()*/
/*             .children( '.dropdown-toggle' ).dropdown( 'toggle' );*/
/*             return false;*/
/*         });*/
/*   //  });*/
/* //});*/
/* </script>*/
