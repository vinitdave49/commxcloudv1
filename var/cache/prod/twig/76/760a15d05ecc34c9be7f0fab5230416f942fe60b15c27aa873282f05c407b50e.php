<?php

/* CommcloudVoiceBundle::sidebar.html.twig */
class __TwigTemplate_f50b5154a0609d07db2bc03be4412b1b6d2727ed54ef330aedd68afc22a95423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CommcloudVoiceBundle::base.html.twig", "CommcloudVoiceBundle::sidebar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CommcloudVoiceBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<style>
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
<div id=\"wrappercontent\" class=\"content-wrapper\">

    <!-- Modal -->
  
</div>
";
    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        // line 38
        echo "<aside class=\"main-sidebar\">

    <!-- sidebar -->
    <section class=\"sidebar\">
        <!-- Sidebar Menu -->

        <!-- User Sidebar-->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"active\">
                <a href=\"/web/app.php/app/content\" id=\"commcloud\">
                    <i class=\"fa fa-link\"></i>
                    <span>CommXCloud</span>
                </a>
            </li>
            ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 55
            echo "            <li>
                <a href=\"#\">
                    <i class=\"fa fa-share\"></i>
                    <span>Statistics</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                    <li>
                        <a href=\"/load_rt_calllist_filter\" id=\"Call_List\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Call List</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/load_ht_calllist_filter\" id=\"Call_History\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Call History</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/agent/list\" id=\"Agent_List\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Agent List</span>
                        </a>
                    </li>
                    ";
            // line 81
            echo "                    ";
            // line 82
            echo "                    ";
            // line 83
            echo "                    ";
            // line 84
            echo "                    ";
            // line 85
            echo "                    ";
            // line 86
            echo "                    ";
            // line 87
            echo "                    

                </ul>
            </li>
            ";
        }
        // line 91
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPERVISOR")) {
            // line 92
            echo "            <li>
                <a href=\"#\">
                    <i class=\"fa fa-share\"></i>
                    <span>Reports</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                    <li>
                        <a href=\"#\" id=\"realtime\">
                            <i class=\"fa fa-share\"></i>
                            <span>Realtime</span>
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </a>
                        <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                            <li>
                                <a href=\"/load_rt_taskqueue_report_filter\" id=\"rt_taskqueue\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>TaskQueue</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_rt_workflow_report_filter\" id=\"rt_workflow\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Workflow</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_rt_worker_report_filter\" id=\"rt_worker\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Worker</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_rt_calllist_filter\" id=\"rt_call_list\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Call List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" id=\"historical\">
                            <i class=\"fa fa-share\"></i>
                            <span>Historical</span>
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </a>
                        <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                            <li>
                                <a href=\"/load_ht_taskqueue_report_filter\" id=\"ht_taskqueue\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>TaskQueue</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_ht_workflow_report_filter\" id=\"ht_workflow\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Workflow</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_ht_activityduration_filter\" id=\"ht_activityduration\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Activity Duration</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/load_ht_calllist_filter\" id=\"ht_call_list\" class=\"load-menu\">
                                    <i class=\"fa fa-link\"></i>
                                    <span>Call History</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href \"#\" id=\"qm\">
                    <i class=\"fa fa-share\"></i>
                    <span>Quality Monitoring</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                    ";
            // line 175
            echo "                    ";
            // line 176
            echo "                    ";
            // line 177
            echo "                    ";
            // line 178
            echo "                    ";
            // line 179
            echo "                    ";
            // line 180
            echo "                    ";
            // line 181
            echo "                    <li>
                        <a href=\"/call/recording\" id=\"CallRecording_List\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Call Recordings</span>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        }
        // line 189
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 190
            echo "            <li>
                <a href=\"#\">
                    <i class=\"fa fa-share\"></i>
                    <span>Create/Edit</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                    <li>
                        <a href=\"/createactivity\" id=\"activity\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Activity</span>
                        </a>
                    </li>                    
                    <li>
                        <a href=\"/createtaskqueue\" id=\"taskqueue\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>TaskQueue</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/createworker\" id=\"worker1\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Worker</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"/createworkflow\" id=\"workflow\" class=\"load-menu\">
                            <i class=\"fa fa-link\"></i>
                            <span>Workflow</span>
                        </a>
                    </li>

                  
                </ul>
            </li>
            ";
        }
        // line 226
        echo "        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->

</aside>
<aside class=\"control-sidebar control-sidebar-light \" style=\"position: absolute;top: 0px; height:640px;background-color:#F9FAFC;\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-phone-tab\" data-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-phone\"></i></a></li>
        <li class=\"\"><a href=\"#control-sidebar-chat-tab\" data-toggle=\"tab\" aria-expanded=\"false\"><i class=\"fa fa-weixin\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">

   <div class=\"form-group padding-override\" style=\"text-align:left;\">
                                <label>Worker Activity</label>
                                <select class=\"form-control\" id=\"workerActivity\">
                                    <option value=\"WAb4bc7105ecbff4189f3a36050d3b7863\">Idle</option>
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\" selected=\"selected\">Offline</option>
                                </select>
                            </div>

        <!--  layout Setting (@Krishna: Include Phone Here) -->
        <div id=\"control-sidebar-phone-tab\" class=\"tab-pane active\">
            <div>
                <h4 class=\"control-sidebar-heading\"></h4>
                </br>
                <div id=\"phonebox\" class=\"\">
                    <!--phone-box-->
                    <div id=\"phoneheader\" class=\"phone-header-inside\">
                        <h4> CommXPhone <i class=\"fa fa-toggle-off\" id=\"target\" style=\"padding-left:87px;\"></i></input>  </h4> </div>
                    <!--phone-header-->
                    <div id=\"phone-box-content\" class=\"box box-primary\">
                        <div class=\"box-body padding-override\" style=\"text-align:center;\">

                           <!-- <div class=\"form-group padding-override\" style=\"text-align:left;\">
                                <label>Worker Activity</label>
                                <select class=\"form-control\" id=\"workerActivity\">
                                    <option value=\"WAb4bc7105ecbff4189f3a36050d3b7863\">Idle</option>
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\" selected=\"selected\">Offline</option>
                                </select>
                            </div> -->

                            <div class=\"box-header padding-override padding-bottom-override padding-top-override\" id=\"incomingcallalert\">
                            </div>
                            </br>
                            <div class=\"padding-override\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPhone\" placeholder=\"Enter Phone Number to call\">
                            </div>
                            <div class=\"padding-override \">
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button1\" value=\"1\">1</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button2\" value=\"2\">2</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" margin-top:0px;\" id=\"button3\" value=\"3\">3</button>
                            </div>
                            <div class=\"padding-override padding-top-override\">
                                <button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button4\" value=\"1\">4</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button5\" value=\"1\">5</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-456\" style=\"margin-top:0px;\" id=\"button6\" value=\"1\">6</button>
                            </div>
                            <div class=\"padding-override padding-top-override\">
                                <button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button7\" value=\"7\">7</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button8\" value=\"8\">8</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-789\" style=\"margin-top:0px;\" id=\"button9\" value=\"9\">9</button>
                            </div>
                            <div class=\"padding-override padding-top-override\">
                                <button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"buttonstar\" value=\"*\">*</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"button0\" value=\"0\">0</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-0\" style=\"margin-top:0px;\" id=\"buttonpound\" value=\"#\">#</button>
                            </div>
                            <div class=\"padding-override\">
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\" border-radius:0px\" id=\"makecall\">Call</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px; border-radius:0px\" id=\"answer\">Answer</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px;  border-radius:0px\" id=\"hangup\">Hang-Up</button>
                            </div>
                            <div class=\"padding-override\">
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"border-radius:0px\" id=\"hold\">Hold</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px; border-radius:0px\" data-toggle=\"modal\" data-target=\"#transferModal\" id=\"transfer\">Transfer</button>
                                <button class=\"btn btn-block btn-default btn-sm keypad-123\" style=\"margin-top:0px;  border-radius:0px\" id=\"conference\">Conference</button>
                            </div>
                            <div class=\"box-header padding-override padding-top-override padding-bottom-override\">
                                <div class=\"caller-info-div\" style=\"\" id=\"status\">
                                </div>
                            </div>
                            <div id=\"ongoingActivity\" class=\"bottom-div-text\"><span id=\"callstatus\">Currently No active call</span> <span></span></div>
                            <div class=\"bottom-div-text\"><span>Call Queue :</span> <span>0</span></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.tab-pane -->

        <!-- Settings tab content (@Krishna: Include Chat Here)-->
        <div class=\"tab-pane\" id=\"control-sidebar-chat-tab\">
            <form method=\"post\">

                <div class=\"\">

                    <div id=\"chatbox\" class=\"chat-box box direct-chat direct-chat-warning\" style=\"height: 414px; border-top-color:#3c8dbc;  \">

                        <div class=\"box-header with-border\" style=\"background-color:#3c8dbc; color:white;\">
                            <h3 class=\"box-title\">Direct Chat <i class=\"fa fa-toggle-off\" id=\"chatTarget\" style=\"padding-left:160px;\"></i>  </h3>

                            <div class=\"box-tools pull-right\">
                                <!--<span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge bg-yellow\">3</span>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Contacts\" data-widget=\"chat-pane-toggle\">
                                    <i class=\"fa fa-comments\"></i></button>-->
                                   
                                ";
        // line 343
        echo "                                ";
        // line 344
        echo "                                ";
        // line 345
        echo "                                ";
        // line 346
        echo "                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            <!-- Conversations are loaded here -->
                            <div id=\"messages\" class=\"direct-chat-messages\">
                                <!-- Message. Default to the left -->
                                ";
        // line 354
        echo "                                ";
        // line 355
        echo "                                ";
        // line 356
        echo "                                ";
        // line 357
        echo "                                ";
        // line 358
        echo "                                ";
        // line 359
        echo "                                ";
        // line 360
        echo "                                ";
        // line 361
        echo "                                ";
        // line 362
        echo "                                ";
        // line 363
        echo "                                ";
        // line 364
        echo "                                ";
        // line 365
        echo "                                ";
        // line 366
        echo "                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                ";
        // line 370
        echo "                                ";
        // line 371
        echo "                                ";
        // line 372
        echo "                                ";
        // line 373
        echo "                                ";
        // line 374
        echo "                                ";
        // line 375
        echo "                                ";
        // line 376
        echo "                                ";
        // line 377
        echo "                                ";
        // line 378
        echo "                                ";
        // line 379
        echo "                                ";
        // line 380
        echo "                                ";
        // line 381
        echo "                                ";
        // line 382
        echo "                                <!-- /.direct-chat-msg -->

                                <!-- Message. Default to the left -->
                                ";
        // line 386
        echo "                                ";
        // line 387
        echo "                                ";
        // line 388
        echo "                                ";
        // line 389
        echo "                                ";
        // line 390
        echo "                                ";
        // line 391
        echo "                                ";
        // line 392
        echo "                                ";
        // line 393
        echo "                                ";
        // line 394
        echo "                                ";
        // line 395
        echo "                                ";
        // line 396
        echo "                                ";
        // line 397
        echo "                                ";
        // line 398
        echo "                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                ";
        // line 402
        echo "                                ";
        // line 403
        echo "                                ";
        // line 404
        echo "                                ";
        // line 405
        echo "                                ";
        // line 406
        echo "                                ";
        // line 407
        echo "                                ";
        // line 408
        echo "                                ";
        // line 409
        echo "                                ";
        // line 410
        echo "                                ";
        // line 411
        echo "                                ";
        // line 412
        echo "                                ";
        // line 413
        echo "                                ";
        // line 414
        echo "                                <!-- /.direct-chat-msg -->

                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            ";
        // line 421
        echo "                            ";
        // line 422
        echo "                            ";
        // line 423
        echo "                            ";
        // line 424
        echo "                            ";
        // line 425
        echo "
                            ";
        // line 427
        echo "                            ";
        // line 428
        echo "                            ";
        // line 429
        echo "                            ";
        // line 430
        echo "                            ";
        // line 431
        echo "                            ";
        // line 432
        echo "                            ";
        // line 433
        echo "                            ";
        // line 434
        echo "                            ";
        // line 435
        echo "                            ";
        // line 436
        echo "                            ";
        // line 437
        echo "                            ";
        // line 438
        echo "                            ";
        // line 439
        echo "                            ";
        // line 440
        echo "
                            ";
        // line 442
        echo "                            ";
        // line 443
        echo "                            ";
        // line 444
        echo "                            ";
        // line 445
        echo "                            ";
        // line 446
        echo "                            ";
        // line 447
        echo "                            ";
        // line 448
        echo "                            ";
        // line 449
        echo "                            ";
        // line 450
        echo "                            ";
        // line 451
        echo "                            ";
        // line 452
        echo "                            ";
        // line 453
        echo "                            ";
        // line 454
        echo "                            ";
        // line 455
        echo "
                            ";
        // line 457
        echo "                            ";
        // line 458
        echo "                            ";
        // line 459
        echo "                            ";
        // line 460
        echo "                            ";
        // line 461
        echo "                            ";
        // line 462
        echo "                            ";
        // line 463
        echo "                            ";
        // line 464
        echo "                            ";
        // line 465
        echo "                            ";
        // line 466
        echo "                            ";
        // line 467
        echo "                            ";
        // line 468
        echo "                            ";
        // line 469
        echo "                            ";
        // line 470
        echo "
                            ";
        // line 472
        echo "                            ";
        // line 473
        echo "                            ";
        // line 474
        echo "                            ";
        // line 475
        echo "                            ";
        // line 476
        echo "                            ";
        // line 477
        echo "                            ";
        // line 478
        echo "                            ";
        // line 479
        echo "                            ";
        // line 480
        echo "                            ";
        // line 481
        echo "                            ";
        // line 482
        echo "                            ";
        // line 483
        echo "                            ";
        // line 484
        echo "                            ";
        // line 485
        echo "
                            ";
        // line 487
        echo "                            ";
        // line 488
        echo "                            ";
        // line 489
        echo "                            ";
        // line 490
        echo "                            ";
        // line 491
        echo "                            ";
        // line 492
        echo "                            ";
        // line 493
        echo "                            ";
        // line 494
        echo "                            ";
        // line 495
        echo "                            ";
        // line 496
        echo "                            ";
        // line 497
        echo "                            ";
        // line 498
        echo "                            ";
        // line 499
        echo "                            ";
        // line 500
        echo "
                            ";
        // line 502
        echo "                            ";
        // line 503
        echo "                            ";
        // line 504
        echo "                            ";
        // line 505
        echo "                            ";
        // line 506
        echo "                            ";
        // line 507
        echo "                            ";
        // line 508
        echo "                            ";
        // line 509
        echo "                            ";
        // line 510
        echo "                            ";
        // line 511
        echo "                            ";
        // line 512
        echo "                            ";
        // line 513
        echo "                            ";
        // line 514
        echo "                            ";
        // line 515
        echo "                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.box-body -->
                        <div class=\"box-footer\">
                            <form id=\"form1\" action=\"#\" method=\"post\">
                                <div class=\"input-group\" style=\"bottom:0px\">
                                    <input type=\"text\" id=\"type-msg\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\" style=\"height:100px;\" >
                                    <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-blue btn-flat\" style=\"height:100px; background-color:#3c8dbc; color:white\" id=\"chat-input\">Send</button>
                          </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-footer-->
                    </div>

                </div>

            </form>
        </div>
        <!-- /.tab-pane -->

    </div>
</aside>
";
    }

    // line 541
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
        // line 542
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    // window.onload = function(){

    //   var navLinks = document.querySelectorAll('.load-menu');

    // \tvar updateContent = function(data) {
    // \t  // Check to make sure that this state object is not null.
    // \t // console.log(\"data :\" + data);

    // \t  if (data == null) {
    // \t    // \$('.content-wrapper').textContent = stateObj.content;
    // \t    // console.log(\"\$('.content-wrapper').textContent\" + \$('.content-wrapper').textContent);
    // \t     return;
    // \t  \t  //console.log(\"state obj:\" + stateObj.state);

    // \t  }
    // \t  else {
    // \t  \tconsole.log(\"in else block\");
    // \t  \t//console.log(\"data.content \" + data.content);
    // \t   //\$('.content-wrapper').innerHTML = data.content;
    // \t   \$('.content-wrapper').empty().append(data.content);
    // \t   //console.log(\"\$('.content-wrapper').textContent \" + \$('.content-wrapper').innerHTML);
    // \t  }
    // \t};

    // \t// Attach click listeners for each of the nav links.
    // \tfor (var i = 0; i < navLinks.length; i++) {
    // \t  navLinks[i].addEventListener('click', function(e) {
    // \t    e.preventDefault();

    // \t    // Fetch the page data using the URL in the link.
    // \t    var pageURL =  this.attributes['href'].value;
    // \t    console.log(pageURL);
    // \t    var pageTitle = this.attributes['id'].value.replace(/[#_1]/g, \"\").toLowerCase();
    // \t    \$(\".content-wrapper\").empty();
    // \t\tif(document.getElementById('theImg')){ document.getElementById('theImg').remove(); }
    // \t\t\$(\".content-wrapper\").append(\"<div style='margin:auto;left:50%;right:50%;top:50%;bottom:0px;z-index: 1000;opacity: 0.50;position:fixed;'><img id='theImg' src='";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "'/></div>\");
    // \t\ttry{
    //     \t     var xmlhttp = new XMLHttpRequest();   
    //     \t     xmlhttp.onreadystatechange = function() {
    //                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    //                     //var data = JSON.parse(xmlhttp.responseText);
    //                     var data = xmlhttp.responseText;
    //                     //console.log(\"data\" + data);
    //           \t\t    \$('#theImg').remove();
    //           \t    \tPage[pageTitle].content = data || null;
    //           \t    \tupdateContent(Page[pageTitle]);
    //           \t     \thistory.pushState(Page[pageTitle], e.target.textContent, pageURL);
    //                  }
    //              };
    //              xmlhttp.open(\"POST\", \"/web/app_dev.php/app\" + pageURL, true);
    //              xmlhttp.send();
    //     \t\t}
    // \t\tcatch(e){
    // \t\t\tconsole.log(e);
    // \t\t}

    // \t  });
    // \t}

    // \twindow.addEventListener('popstate', function(event) {
    //     \t//\tHistory.replaceState({data:\"any kind of data object\"}, \"State Title\", \"?urlforthestate=1\");
    //     \tconsole.log('popstate fired!' + event);
    //     \tconsole.log(event.state.content);
    //     \t\t//\$(\".content-wrapper\").textContent = event;
    //     \t  updateContent(event.state)
    //     \t});
    //     \t//console.log(\"\$('.content-wrapper').html()\" + \$('.content-wrapper').html());

    //     \thistory.replaceState({
    //           content: \$('.content-wrapper').html()
    //          // photo: photoEl.src
    //         }, document.title, document.location.href);

    // }


    // \tvar Page = {
    // \t\tcalllist : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\tcallhistory : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\tagentlist : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\tcallrecordinglist : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\trtcalllist : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\trttaskqueue : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\trtworkflow : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\trtworker : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\trtcalllist : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\thttaskqueue : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\thtworkflow : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\thtworker : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\thtworkeractivitydurationbytaskqueue : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\thtactivityduration : {
    // \t\t\tcontent :\"\"
    // \t\t},
    // \t\tactivity: {

    // \t\t},
    // \t\ttaskqueue: {

    // \t\t},
    // \t\tworker: {

    // \t\t},
    // \t\tworkflow: {

    // \t\t}
    // \t}


    \$(function() {

        // Prepare
        var History = window.History; // Note: We are using a capital H instead of a lower h
        var origTitle = document.title;
        if (!History.enabled) {
            // History.js is disabled for this browser.
            // This is because we can optionally choose to support HTML4 browsers or not.
            return false;
        }
        History.pushState({
            state: window.location.pathname,
            data1: \$(\".content-wrapper\").html()
        }, origTitle, window.location.pathname);
        // Bind to StateChange Event
       // History.Adapter.bind(window, 'statechange', function() { // Note: We are using statechange instead of popstate
        //    var State = History.getState();
       //     History.log(State.data, State.title, State.url);
       //     console.log(\"state data: \" + State.data);
       //     console.log(\"state url: \" + State.url);
       //     updateContent(State.data.data1, State.url);
       // });
        if (History.getCurrentIndex() == 0) {
            History.Adapter.trigger(window, 'statechange');
        }
        var navLinks = document.querySelectorAll('.load-menu');
        for (var i = 0; i < navLinks.length; i++) {
            navLinks[i].addEventListener('click', function(e) {
                e.preventDefault();
                var pageURL = '/web/app.php/app' + \$(this).attr('href');
                \$.get(pageURL, function(data) {
                    console.log(pageURL);
                    //\$(\".content-wrapper\").html(data);
                    updateContent(data, pageURL);
                });

            });
        }

    });

    function updateContent(data, pageURL) {
        if (data == null) return;
        if(pageURL == null) return;
        console.log(pageURL);
       // console.log(\"href: \" + \$(this).attr('href'));
        \$(\".content-wrapper\").html(data);
        // History.pushState({
        //     state: \$(this).attr('href'),
        //     data1: \$(\".content-wrapper\").html()
        // }, \$(\"this\").text(), '/web/app_dev.php/app/content');
        // History.pushState({state: '/web/app_dev.php'+\$(this).attr('href'), data1: document.documentElement.outerHTML}, \$(\"this\").text(), pageURL);

    }

    \$(\"#target\").click(function() {
        if (\$(\"#target\").hasClass(\"fa-toggle-off\")) {
            \$(\"#phonebox\").addClass(\"phone-box\");
            \$(\"#phoneheader\").removeClass(\"phone-header-inside\").addClass(\"phone-header\");
            \$(\"#target\").removeClass(\"fa-toggle-off\").addClass(\"fa-toggle-on\");
            \$(\"#target\").css(\"padding-left\", \"67px\");
            \$('.control-sidebar').removeClass('control-sidebar-open');
        }
        else {
            \$(\"#phonebox\").removeClass(\"phone-box\").addClass(\"phone-box1\");
            \$(\"#phoneheader\").removeClass(\"phone-header\").addClass(\"phone-header-inside\");
            \$(\"#target\").removeClass(\"fa-toggle-on\").addClass(\"fa-toggle-off\");
            \$(\"#target\").css(\"padding-left\", \"87px\");
            \$('.control-sidebar').addClass('control-sidebar-open');
        }
    });

    \$(\"#chatTarget\").click(function() {
         if (\$(\"#chatTarget\").hasClass(\"fa-toggle-off\")) {
             \$(\"#chatbox\").removeClass(\"chat-box\").addClass(\"phone-box\");
             \$('.control-sidebar').removeClass('control-sidebar-open');
             \$(\"#chatTarget\").removeClass(\"fa-toggle-off\").addClass(\"fa-toggle-on\");
             \$(\"#chatTarget\").css(\"padding-left\", \"110px\");
        }
        else{
            \$(\"#chatbox\").removeClass(\"phone-box\").addClass(\"chat-box\");
            \$('.control-sidebar').addClass('control-sidebar-open');
            \$(\"#chatTarget\").removeClass(\"fa-toggle-on\").addClass(\"fa-toggle-off\");
            \$(\"#collapse-btn\").attr('display', 'block');
            \$(\"#chatTarget\").css(\"padding-left\", \"160px\");
        }
    });

    \$('#phoneheader').click(function() {
        if (\$(\"#target\").hasClass(\"fa-toggle-on\")) {
            \$('#phone-box-content').slideToggle('slow');
            // \$(\"#side-bar-ctrl\").hide();
        }
        else {
            \$('#phone-box-content').show();
        }
    });
    
    //   function func1()
    //     {
    //          //onkeypress=\"func1();\"
    //         if(event.keyCode == 13){ 
    //             event.preventDefault();
    //             console.log(\"click chat-input\");
                   
    // \t\t  \tprivateChannel.sendMessage(document.getElementById('type-msg').value);
    // \t\t  \tdocument.getElementById('type-msg').textContent ='';
    //             return false;
    //             }
    //     }  
        
        // \tdocument.getElementById('type-msg').addEventListener('keydown', function(e) {
        // \t\t  \tif(e.keyCode == 13){ 
        //               e.preventDefault();
        //               console.log(\"click chat-input\")
        //               document.getElementById('type-msg').value  ='';
        // \t\t  \t   privateChannel.sendMessage(document.getElementById('type-msg').value);
        \t\t  \t   
        // \t\t  \t   return false;
        // \t\t  \t}
    \t\t  //\t});
    
            
    \$(document).ready(function() {
        console.log(\"loggign\");
         var table = \$('#transerWorker').DataTable();
        \$('#transerWorker tbody').on( 'click', 'tr', function () {
            if ( \$(this).hasClass('selected') ) {
                \$(this).removeClass('selected');
            }
            else {
                table.\$('tr.selected').removeClass('selected');
                \$(this).addClass('selected');
            }
        });
        
       
         
        
        // \$('#btntransfer').click( function () {
        //     // var loginId = \$.map(table.rows('.selected').data(), function (item) {
        //     //     return item[0]
        //     // });
            
        //     if(table.rows('.selected').data()[0]){
        //         var loginId = table.rows('.selected').data()[0][0];
        //         alert(\"selected agent id :\"+loginId);
        //         \$.ajax({
        //             type: \"POST\", 
        //             //data: {callsid : workerModule.cc_worker._getcallsid()}, 
        //             data: {callsid : conn.parameters.CallSid}, 
        //             url: \"/web/app_dev.php/transfercallaction\",
        //             }).success(function(msg) {
        //             console.log(\"Call is on Hold\");
        //         });
        //     }else{
        //         alert(\"No Agent is selected\");
        //     }
        //     console.log(loginId);
        //     //alert( table.rows('.selected').data().length +' row(s) selected' );
        // } );
    } );
    // \$(\"#transfer\").bind(\"click\", function() {
    //     \$.ajax({
    //         url: \"";
        // line 842
        echo $this->env->getExtension('routing')->getPath("transferaction");
        echo "\",
    //         async: true,
    //         type: \"POST\",
    //         dataType: \"text\",
    //         success: function(resultData) {
    //             \$(\"#alert\").addClass(\"in alert-success\");
    //             var table = \$('#transerWorker').DataTable();
    //             table.clear();
    //             table.rows.add(jQuery.parseJSON(resultData)).draw();
    
    //             // \$('#transerWorker').DataTable( {
    //             //     data: jQuery.parseJSON(resultData),
    //             //     columns: [
    //             //         { title: \"LoginId\" },
    //             //         { title: \"Name\" },
    //             //         { title: \"Worker SID\" },
    //             //     ]
    //             // } );                
    //             \$('#transferModal').modal('show');
    //         },
    //         error: function() {
    //             alert(\"Error!!!\");
    //         }
    //     })
    // });

    \$(\".fa-gears\").click(function() {
        console.log(\"open\");
        \$('#phone-box-content').show();
    });
    
    \$( \".wrapper\" ).scroll(function() {
  // alert(\"scrolled\");
});
    
</script>

<script>
    \"use strict\";

    (function() {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/testJS/CustomSoftphone.js"), "html", null, true);
        echo "';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        s.onload = function() {
         console.log(\"custom softphone js loaded\");
         (function () {
               var s = document.createElement('script');
               s.type = 'text/javascript';
               s.async = true;
               s.src = '";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/testJS/CustomChat.js"), "html", null, true);
        echo "';
               var x = document.getElementsByTagName('script')[0];
               x.parentNode.insertBefore(s, x);
               s.onload = function(){
               console.log(\"custom chat js loaded\");
              }
\t    })();
        }
    })();
    
  
</script>
";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1122 => 895,  1110 => 886,  1063 => 842,  797 => 579,  757 => 542,  752 => 541,  724 => 515,  722 => 514,  720 => 513,  718 => 512,  716 => 511,  714 => 510,  712 => 509,  710 => 508,  708 => 507,  706 => 506,  704 => 505,  702 => 504,  700 => 503,  698 => 502,  695 => 500,  693 => 499,  691 => 498,  689 => 497,  687 => 496,  685 => 495,  683 => 494,  681 => 493,  679 => 492,  677 => 491,  675 => 490,  673 => 489,  671 => 488,  669 => 487,  666 => 485,  664 => 484,  662 => 483,  660 => 482,  658 => 481,  656 => 480,  654 => 479,  652 => 478,  650 => 477,  648 => 476,  646 => 475,  644 => 474,  642 => 473,  640 => 472,  637 => 470,  635 => 469,  633 => 468,  631 => 467,  629 => 466,  627 => 465,  625 => 464,  623 => 463,  621 => 462,  619 => 461,  617 => 460,  615 => 459,  613 => 458,  611 => 457,  608 => 455,  606 => 454,  604 => 453,  602 => 452,  600 => 451,  598 => 450,  596 => 449,  594 => 448,  592 => 447,  590 => 446,  588 => 445,  586 => 444,  584 => 443,  582 => 442,  579 => 440,  577 => 439,  575 => 438,  573 => 437,  571 => 436,  569 => 435,  567 => 434,  565 => 433,  563 => 432,  561 => 431,  559 => 430,  557 => 429,  555 => 428,  553 => 427,  550 => 425,  548 => 424,  546 => 423,  544 => 422,  542 => 421,  534 => 414,  532 => 413,  530 => 412,  528 => 411,  526 => 410,  524 => 409,  522 => 408,  520 => 407,  518 => 406,  516 => 405,  514 => 404,  512 => 403,  510 => 402,  505 => 398,  503 => 397,  501 => 396,  499 => 395,  497 => 394,  495 => 393,  493 => 392,  491 => 391,  489 => 390,  487 => 389,  485 => 388,  483 => 387,  481 => 386,  476 => 382,  474 => 381,  472 => 380,  470 => 379,  468 => 378,  466 => 377,  464 => 376,  462 => 375,  460 => 374,  458 => 373,  456 => 372,  454 => 371,  452 => 370,  447 => 366,  445 => 365,  443 => 364,  441 => 363,  439 => 362,  437 => 361,  435 => 360,  433 => 359,  431 => 358,  429 => 357,  427 => 356,  425 => 355,  423 => 354,  414 => 346,  412 => 345,  410 => 344,  408 => 343,  290 => 226,  252 => 190,  249 => 189,  238 => 181,  236 => 180,  234 => 179,  232 => 178,  230 => 177,  228 => 176,  226 => 175,  142 => 92,  139 => 91,  132 => 87,  130 => 86,  128 => 85,  126 => 84,  124 => 83,  122 => 82,  120 => 81,  93 => 55,  91 => 54,  73 => 38,  70 => 37,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'CommcloudVoiceBundle::base.html.twig' %} */
/* {% block content %}*/
/* {{ parent()}}*/
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
/* <div id="wrappercontent" class="content-wrapper">*/
/* */
/*     <!-- Modal -->*/
/*   */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/* <aside class="main-sidebar">*/
/* */
/*     <!-- sidebar -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar Menu -->*/
/* */
/*         <!-- User Sidebar-->*/
/*         <ul class="sidebar-menu">*/
/*             <li class="header">Menu</li>*/
/*             <!-- Optionally, you can add icons to the links -->*/
/*             <li class="active">*/
/*                 <a href="/web/app.php/app/content" id="commcloud">*/
/*                     <i class="fa fa-link"></i>*/
/*                     <span>CommXCloud</span>*/
/*                 </a>*/
/*             </li>*/
/*             {% if is_granted('ROLE_USER') %}*/
/*             <li>*/
/*                 <a href="#">*/
/*                     <i class="fa fa-share"></i>*/
/*                     <span>Statistics</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu menu-open" style="display: none;">*/
/*                     <li>*/
/*                         <a href="/load_rt_calllist_filter" id="Call_List" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Call List</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/load_ht_calllist_filter" id="Call_History" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Call History</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/agent/list" id="Agent_List" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Agent List</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     {#Shubhankar removed this SMS from sidebar 6/9/2016#}*/
/*                     {#  <li>#}*/
/*                     {#    <a href="/sms" id="SMS_List" class="load-menu">#}*/
/*                     {#        <i class="fa fa-link"></i>#}*/
/*                     {#        <span>SMS</span>#}*/
/*                     {#    </a>#}*/
/*                     {#</li>#}*/
/*                     */
/* */
/*                 </ul>*/
/*             </li>*/
/*             {% endif %} {% if is_granted('ROLE_SUPERVISOR') %}*/
/*             <li>*/
/*                 <a href="#">*/
/*                     <i class="fa fa-share"></i>*/
/*                     <span>Reports</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu menu-open" style="display: none;">*/
/*                     <li>*/
/*                         <a href="#" id="realtime">*/
/*                             <i class="fa fa-share"></i>*/
/*                             <span>Realtime</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu menu-open" style="display: none;">*/
/*                             <li>*/
/*                                 <a href="/load_rt_taskqueue_report_filter" id="rt_taskqueue" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>TaskQueue</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_rt_workflow_report_filter" id="rt_workflow" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Workflow</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_rt_worker_report_filter" id="rt_worker" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Worker</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_rt_calllist_filter" id="rt_call_list" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Call List</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#" id="historical">*/
/*                             <i class="fa fa-share"></i>*/
/*                             <span>Historical</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu menu-open" style="display: none;">*/
/*                             <li>*/
/*                                 <a href="/load_ht_taskqueue_report_filter" id="ht_taskqueue" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>TaskQueue</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_ht_workflow_report_filter" id="ht_workflow" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Workflow</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_ht_activityduration_filter" id="ht_activityduration" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Activity Duration</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="/load_ht_calllist_filter" id="ht_call_list" class="load-menu">*/
/*                                     <i class="fa fa-link"></i>*/
/*                                     <span>Call History</span>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>*/
/*                 <a href "#" id="qm">*/
/*                     <i class="fa fa-share"></i>*/
/*                     <span>Quality Monitoring</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu menu-open" style="display: none;">*/
/*                     {#Shubhankar removed call transcripts on 6/9/2016#}*/
/*                     {#<li>#}*/
/*                     {#    <a href="#" id="transcripts">#}*/
/*                     {#        <i class="fa fa-link"></i>#}*/
/*                     {#        <span>Call Transcripts</span>#}*/
/*                     {#    </a>#}*/
/*                     {#</li>#}*/
/*                     <li>*/
/*                         <a href="/call/recording" id="CallRecording_List" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Call Recordings</span>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/*             {% endif %} {% if is_granted('ROLE_ADMIN') %}*/
/*             <li>*/
/*                 <a href="#">*/
/*                     <i class="fa fa-share"></i>*/
/*                     <span>Create/Edit</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu menu-open" style="display: none;">*/
/*                     <li>*/
/*                         <a href="/createactivity" id="activity" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Activity</span>*/
/*                         </a>*/
/*                     </li>                    */
/*                     <li>*/
/*                         <a href="/createtaskqueue" id="taskqueue" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>TaskQueue</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/createworker" id="worker1" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Worker</span>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/createworkflow" id="workflow" class="load-menu">*/
/*                             <i class="fa fa-link"></i>*/
/*                             <span>Workflow</span>*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                   */
/*                 </ul>*/
/*             </li>*/
/*             {% endif %}*/
/*         </ul>*/
/*         <!-- /.sidebar-menu -->*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* */
/* </aside>*/
/* <aside class="control-sidebar control-sidebar-light " style="position: absolute;top: 0px; height:640px;background-color:#F9FAFC;">*/
/*     <!-- Create the tabs -->*/
/*     <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*         <li class="active"><a href="#control-sidebar-phone-tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-phone"></i></a></li>*/
/*         <li class=""><a href="#control-sidebar-chat-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-weixin"></i></a></li>*/
/*     </ul>*/
/*     <!-- Tab panes -->*/
/*     <div class="tab-content">*/
/* */
/*    <div class="form-group padding-override" style="text-align:left;">*/
/*                                 <label>Worker Activity</label>*/
/*                                 <select class="form-control" id="workerActivity">*/
/*                                     <option value="WAb4bc7105ecbff4189f3a36050d3b7863">Idle</option>*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7" selected="selected">Offline</option>*/
/*                                 </select>*/
/*                             </div>*/
/* */
/*         <!--  layout Setting (@Krishna: Include Phone Here) -->*/
/*         <div id="control-sidebar-phone-tab" class="tab-pane active">*/
/*             <div>*/
/*                 <h4 class="control-sidebar-heading"></h4>*/
/*                 </br>*/
/*                 <div id="phonebox" class="">*/
/*                     <!--phone-box-->*/
/*                     <div id="phoneheader" class="phone-header-inside">*/
/*                         <h4> CommXPhone <i class="fa fa-toggle-off" id="target" style="padding-left:87px;"></i></input>  </h4> </div>*/
/*                     <!--phone-header-->*/
/*                     <div id="phone-box-content" class="box box-primary">*/
/*                         <div class="box-body padding-override" style="text-align:center;">*/
/* */
/*                            <!-- <div class="form-group padding-override" style="text-align:left;">*/
/*                                 <label>Worker Activity</label>*/
/*                                 <select class="form-control" id="workerActivity">*/
/*                                     <option value="WAb4bc7105ecbff4189f3a36050d3b7863">Idle</option>*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7" selected="selected">Offline</option>*/
/*                                 </select>*/
/*                             </div> -->*/
/* */
/*                             <div class="box-header padding-override padding-bottom-override padding-top-override" id="incomingcallalert">*/
/*                             </div>*/
/*                             </br>*/
/*                             <div class="padding-override">*/
/*                                 <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number to call">*/
/*                             </div>*/
/*                             <div class="padding-override ">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button1" value="1">1</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button2" value="2">2</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style=" margin-top:0px;" id="button3" value="3">3</button>*/
/*                             </div>*/
/*                             <div class="padding-override padding-top-override">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button4" value="1">4</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button5" value="1">5</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-456" style="margin-top:0px;" id="button6" value="1">6</button>*/
/*                             </div>*/
/*                             <div class="padding-override padding-top-override">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button7" value="7">7</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button8" value="8">8</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-789" style="margin-top:0px;" id="button9" value="9">9</button>*/
/*                             </div>*/
/*                             <div class="padding-override padding-top-override">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonstar" value="*">*</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="button0" value="0">0</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-0" style="margin-top:0px;" id="buttonpound" value="#">#</button>*/
/*                             </div>*/
/*                             <div class="padding-override">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style=" border-radius:0px" id="makecall">Call</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" id="answer">Answer</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="hangup">Hang-Up</button>*/
/*                             </div>*/
/*                             <div class="padding-override">*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style="border-radius:0px" id="hold">Hold</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px; border-radius:0px" data-toggle="modal" data-target="#transferModal" id="transfer">Transfer</button>*/
/*                                 <button class="btn btn-block btn-default btn-sm keypad-123" style="margin-top:0px;  border-radius:0px" id="conference">Conference</button>*/
/*                             </div>*/
/*                             <div class="box-header padding-override padding-top-override padding-bottom-override">*/
/*                                 <div class="caller-info-div" style="" id="status">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="ongoingActivity" class="bottom-div-text"><span id="callstatus">Currently No active call</span> <span></span></div>*/
/*                             <div class="bottom-div-text"><span>Call Queue :</span> <span>0</span></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- /.tab-pane -->*/
/* */
/*         <!-- Settings tab content (@Krishna: Include Chat Here)-->*/
/*         <div class="tab-pane" id="control-sidebar-chat-tab">*/
/*             <form method="post">*/
/* */
/*                 <div class="">*/
/* */
/*                     <div id="chatbox" class="chat-box box direct-chat direct-chat-warning" style="height: 414px; border-top-color:#3c8dbc;  ">*/
/* */
/*                         <div class="box-header with-border" style="background-color:#3c8dbc; color:white;">*/
/*                             <h3 class="box-title">Direct Chat <i class="fa fa-toggle-off" id="chatTarget" style="padding-left:160px;"></i>  </h3>*/
/* */
/*                             <div class="box-tools pull-right">*/
/*                                 <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>*/
/*                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                                 </button>*/
/*                                 <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">*/
/*                                     <i class="fa fa-comments"></i></button>-->*/
/*                                    */
/*                                 {#<button type="button" class="btn btn-box-tool" data-widget=""><i id="chatTarget" class="fa fa-toggle-off"></i>#}*/
/*                                 {#</button>#}*/
/*                                 {# <button type="button" id="collapse-btn" class="btn btn-box-tool" data-widget="collapse" style="display: block;"><i class="fa fa-minus"></i>#}*/
/*                                 {#</button>#}*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.box-header -->*/
/*                         <div class="box-body">*/
/*                             <!-- Conversations are loaded here -->*/
/*                             <div id="messages" class="direct-chat-messages">*/
/*                                 <!-- Message. Default to the left -->*/
/*                                 {#<div class="direct-chat-msg">#}*/
/*                                 {#    <div class="direct-chat-info clearfix">#}*/
/*                                 {#        <span class="direct-chat-name pull-left">Alexander Pierce</span>#}*/
/*                                 {#        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-info -->#}*/
/*                                 {#    <img class="direct-chat-img" src="../../images/e7d78dc_avatar_1_1.png" alt="message user image">#}*/
/*                                 {#    <!-- /.direct-chat-img -->#}*/
/*                                 {#    <div class="direct-chat-text">#}*/
/*                                 {#        Is this template really for free? That's unbelievable!#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-text -->#}*/
/*                                 {#</div>#}*/
/*                                 <!-- /.direct-chat-msg -->*/
/* */
/*                                 <!-- Message to the right -->*/
/*                                 {#<div class="direct-chat-msg right">#}*/
/*                                 {#    <div class="direct-chat-info clearfix">#}*/
/*                                 {#        <span class="direct-chat-name pull-right">Sarah Bullock</span>#}*/
/*                                 {#        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-info -->#}*/
/*                                 {#    <img class="direct-chat-img" src="../../images/e7d78dc_avatar_1_1.png" alt="message user image">#}*/
/*                                 {#    <!-- /.direct-chat-img -->#}*/
/*                                 {#    <div class="direct-chat-text">#}*/
/*                                 {#        You better believe it!#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-text -->#}*/
/*                                 {#</div>#}*/
/*                                 <!-- /.direct-chat-msg -->*/
/* */
/*                                 <!-- Message. Default to the left -->*/
/*                                 {#<div class="direct-chat-msg">#}*/
/*                                 {#    <div class="direct-chat-info clearfix">#}*/
/*                                 {#        <span class="direct-chat-name pull-left">Alexander Pierce</span>#}*/
/*                                 {#        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-info -->#}*/
/*                                 {#    <img class="direct-chat-img" src="../../images/e7d78dc_avatar_1_1.png" alt="message user image">#}*/
/*                                 {#    <!-- /.direct-chat-img -->#}*/
/*                                 {#    <div class="direct-chat-text">#}*/
/*                                 {#        Working with AdminLTE on a great new app! Wanna join?#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-text -->#}*/
/*                                 {#</div>#}*/
/*                                 <!-- /.direct-chat-msg -->*/
/* */
/*                                 <!-- Message to the right -->*/
/*                                 {#<div class="direct-chat-msg right">#}*/
/*                                 {#    <div class="direct-chat-info clearfix">#}*/
/*                                 {#        <span class="direct-chat-name pull-right">Sarah Bullock</span>#}*/
/*                                 {#        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-info -->#}*/
/*                                 {#    <img class="direct-chat-img" src="../../images/e7d78dc_avatar_1_1.png" alt="message user image">#}*/
/*                                 {#    <!-- /.direct-chat-img -->#}*/
/*                                 {#    <div class="direct-chat-text">#}*/
/*                                 {#        I would love to.#}*/
/*                                 {#    </div>#}*/
/*                                 {#    <!-- /.direct-chat-text -->#}*/
/*                                 {#</div>#}*/
/*                                 <!-- /.direct-chat-msg -->*/
/* */
/*                             </div>*/
/*                             <!--/.direct-chat-messages-->*/
/* */
/*                             <!-- Contacts are loaded here -->*/
/*                             {#<div class="direct-chat-contacts">#}*/
/*                             {#    <ul class="contacts-list">#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      Count Dracula#}*/
/*                             {#      <small class="contacts-list-date pull-right">2/28/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">How have you been? I was...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      Sarah Doe#}*/
/*                             {#      <small class="contacts-list-date pull-right">2/23/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">I will be waiting for...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      Nadia Jolie#}*/
/*                             {#      <small class="contacts-list-date pull-right">2/20/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">I'll call you back at...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      Nora S. Vans#}*/
/*                             {#      <small class="contacts-list-date pull-right">2/10/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">Where is your new...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      John K.#}*/
/*                             {#      <small class="contacts-list-date pull-right">1/27/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">Can I take a look at...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#        <li>#}*/
/*                             {#            <a href="#">#}*/
/*                             {#                <img class="contacts-list-img" src="../../images/e7d78dc_avatar_1_1.png" alt="User Image">#}*/
/* */
/*                             {#                <div class="contacts-list-info">#}*/
/*                             {#                    <span class="contacts-list-name">#}*/
/*                             {#      Kenneth M.#}*/
/*                             {#      <small class="contacts-list-date pull-right">1/4/2015</small>#}*/
/*                             {#    </span>#}*/
/*                             {#                    <span class="contacts-list-msg">Never mind I found...</span>#}*/
/*                             {#                </div>#}*/
/*                             {#                <!-- /.contacts-list-info -->#}*/
/*                             {#            </a>#}*/
/*                             {#        </li>#}*/
/*                             {#        <!-- End Contact Item -->#}*/
/*                             {#    </ul>#}*/
/*                             {#    <!-- /.contatcts-list -->#}*/
/*                             {#</div>#}*/
/*                             <!-- /.direct-chat-pane -->*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                         <div class="box-footer">*/
/*                             <form id="form1" action="#" method="post">*/
/*                                 <div class="input-group" style="bottom:0px">*/
/*                                     <input type="text" id="type-msg" name="message" placeholder="Type Message ..." class="form-control" style="height:100px;" >*/
/*                                     <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-blue btn-flat" style="height:100px; background-color:#3c8dbc; color:white" id="chat-input">Send</button>*/
/*                           </span>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <!-- /.box-footer-->*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </form>*/
/*         </div>*/
/*         <!-- /.tab-pane -->*/
/* */
/*     </div>*/
/* </aside>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %} */
/* {{ parent() }}*/
/* <script>*/
/*     // window.onload = function(){*/
/* */
/*     //   var navLinks = document.querySelectorAll('.load-menu');*/
/* */
/*     // 	var updateContent = function(data) {*/
/*     // 	  // Check to make sure that this state object is not null.*/
/*     // 	 // console.log("data :" + data);*/
/* */
/*     // 	  if (data == null) {*/
/*     // 	    // $('.content-wrapper').textContent = stateObj.content;*/
/*     // 	    // console.log("$('.content-wrapper').textContent" + $('.content-wrapper').textContent);*/
/*     // 	     return;*/
/*     // 	  	  //console.log("state obj:" + stateObj.state);*/
/* */
/*     // 	  }*/
/*     // 	  else {*/
/*     // 	  	console.log("in else block");*/
/*     // 	  	//console.log("data.content " + data.content);*/
/*     // 	   //$('.content-wrapper').innerHTML = data.content;*/
/*     // 	   $('.content-wrapper').empty().append(data.content);*/
/*     // 	   //console.log("$('.content-wrapper').textContent " + $('.content-wrapper').innerHTML);*/
/*     // 	  }*/
/*     // 	};*/
/* */
/*     // 	// Attach click listeners for each of the nav links.*/
/*     // 	for (var i = 0; i < navLinks.length; i++) {*/
/*     // 	  navLinks[i].addEventListener('click', function(e) {*/
/*     // 	    e.preventDefault();*/
/* */
/*     // 	    // Fetch the page data using the URL in the link.*/
/*     // 	    var pageURL =  this.attributes['href'].value;*/
/*     // 	    console.log(pageURL);*/
/*     // 	    var pageTitle = this.attributes['id'].value.replace(/[#_1]/g, "").toLowerCase();*/
/*     // 	    $(".content-wrapper").empty();*/
/*     // 		if(document.getElementById('theImg')){ document.getElementById('theImg').remove(); }*/
/*     // 		$(".content-wrapper").append("<div style='margin:auto;left:50%;right:50%;top:50%;bottom:0px;z-index: 1000;opacity: 0.50;position:fixed;'><img id='theImg' src='{{ asset('') }}'/></div>");*/
/*     // 		try{*/
/*     //     	     var xmlhttp = new XMLHttpRequest();   */
/*     //     	     xmlhttp.onreadystatechange = function() {*/
/*     //                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {*/
/*     //                     //var data = JSON.parse(xmlhttp.responseText);*/
/*     //                     var data = xmlhttp.responseText;*/
/*     //                     //console.log("data" + data);*/
/*     //           		    $('#theImg').remove();*/
/*     //           	    	Page[pageTitle].content = data || null;*/
/*     //           	    	updateContent(Page[pageTitle]);*/
/*     //           	     	history.pushState(Page[pageTitle], e.target.textContent, pageURL);*/
/*     //                  }*/
/*     //              };*/
/*     //              xmlhttp.open("POST", "/web/app_dev.php/app" + pageURL, true);*/
/*     //              xmlhttp.send();*/
/*     //     		}*/
/*     // 		catch(e){*/
/*     // 			console.log(e);*/
/*     // 		}*/
/* */
/*     // 	  });*/
/*     // 	}*/
/* */
/*     // 	window.addEventListener('popstate', function(event) {*/
/*     //     	//	History.replaceState({data:"any kind of data object"}, "State Title", "?urlforthestate=1");*/
/*     //     	console.log('popstate fired!' + event);*/
/*     //     	console.log(event.state.content);*/
/*     //     		//$(".content-wrapper").textContent = event;*/
/*     //     	  updateContent(event.state)*/
/*     //     	});*/
/*     //     	//console.log("$('.content-wrapper').html()" + $('.content-wrapper').html());*/
/* */
/*     //     	history.replaceState({*/
/*     //           content: $('.content-wrapper').html()*/
/*     //          // photo: photoEl.src*/
/*     //         }, document.title, document.location.href);*/
/* */
/*     // }*/
/* */
/* */
/*     // 	var Page = {*/
/*     // 		calllist : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		callhistory : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		agentlist : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		callrecordinglist : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		rtcalllist : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		rttaskqueue : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		rtworkflow : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		rtworker : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		rtcalllist : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		httaskqueue : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		htworkflow : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		htworker : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		htworkeractivitydurationbytaskqueue : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		htactivityduration : {*/
/*     // 			content :""*/
/*     // 		},*/
/*     // 		activity: {*/
/* */
/*     // 		},*/
/*     // 		taskqueue: {*/
/* */
/*     // 		},*/
/*     // 		worker: {*/
/* */
/*     // 		},*/
/*     // 		workflow: {*/
/* */
/*     // 		}*/
/*     // 	}*/
/* */
/* */
/*     $(function() {*/
/* */
/*         // Prepare*/
/*         var History = window.History; // Note: We are using a capital H instead of a lower h*/
/*         var origTitle = document.title;*/
/*         if (!History.enabled) {*/
/*             // History.js is disabled for this browser.*/
/*             // This is because we can optionally choose to support HTML4 browsers or not.*/
/*             return false;*/
/*         }*/
/*         History.pushState({*/
/*             state: window.location.pathname,*/
/*             data1: $(".content-wrapper").html()*/
/*         }, origTitle, window.location.pathname);*/
/*         // Bind to StateChange Event*/
/*        // History.Adapter.bind(window, 'statechange', function() { // Note: We are using statechange instead of popstate*/
/*         //    var State = History.getState();*/
/*        //     History.log(State.data, State.title, State.url);*/
/*        //     console.log("state data: " + State.data);*/
/*        //     console.log("state url: " + State.url);*/
/*        //     updateContent(State.data.data1, State.url);*/
/*        // });*/
/*         if (History.getCurrentIndex() == 0) {*/
/*             History.Adapter.trigger(window, 'statechange');*/
/*         }*/
/*         var navLinks = document.querySelectorAll('.load-menu');*/
/*         for (var i = 0; i < navLinks.length; i++) {*/
/*             navLinks[i].addEventListener('click', function(e) {*/
/*                 e.preventDefault();*/
/*                 var pageURL = '/web/app.php/app' + $(this).attr('href');*/
/*                 $.get(pageURL, function(data) {*/
/*                     console.log(pageURL);*/
/*                     //$(".content-wrapper").html(data);*/
/*                     updateContent(data, pageURL);*/
/*                 });*/
/* */
/*             });*/
/*         }*/
/* */
/*     });*/
/* */
/*     function updateContent(data, pageURL) {*/
/*         if (data == null) return;*/
/*         if(pageURL == null) return;*/
/*         console.log(pageURL);*/
/*        // console.log("href: " + $(this).attr('href'));*/
/*         $(".content-wrapper").html(data);*/
/*         // History.pushState({*/
/*         //     state: $(this).attr('href'),*/
/*         //     data1: $(".content-wrapper").html()*/
/*         // }, $("this").text(), '/web/app_dev.php/app/content');*/
/*         // History.pushState({state: '/web/app_dev.php'+$(this).attr('href'), data1: document.documentElement.outerHTML}, $("this").text(), pageURL);*/
/* */
/*     }*/
/* */
/*     $("#target").click(function() {*/
/*         if ($("#target").hasClass("fa-toggle-off")) {*/
/*             $("#phonebox").addClass("phone-box");*/
/*             $("#phoneheader").removeClass("phone-header-inside").addClass("phone-header");*/
/*             $("#target").removeClass("fa-toggle-off").addClass("fa-toggle-on");*/
/*             $("#target").css("padding-left", "67px");*/
/*             $('.control-sidebar').removeClass('control-sidebar-open');*/
/*         }*/
/*         else {*/
/*             $("#phonebox").removeClass("phone-box").addClass("phone-box1");*/
/*             $("#phoneheader").removeClass("phone-header").addClass("phone-header-inside");*/
/*             $("#target").removeClass("fa-toggle-on").addClass("fa-toggle-off");*/
/*             $("#target").css("padding-left", "87px");*/
/*             $('.control-sidebar').addClass('control-sidebar-open');*/
/*         }*/
/*     });*/
/* */
/*     $("#chatTarget").click(function() {*/
/*          if ($("#chatTarget").hasClass("fa-toggle-off")) {*/
/*              $("#chatbox").removeClass("chat-box").addClass("phone-box");*/
/*              $('.control-sidebar').removeClass('control-sidebar-open');*/
/*              $("#chatTarget").removeClass("fa-toggle-off").addClass("fa-toggle-on");*/
/*              $("#chatTarget").css("padding-left", "110px");*/
/*         }*/
/*         else{*/
/*             $("#chatbox").removeClass("phone-box").addClass("chat-box");*/
/*             $('.control-sidebar').addClass('control-sidebar-open');*/
/*             $("#chatTarget").removeClass("fa-toggle-on").addClass("fa-toggle-off");*/
/*             $("#collapse-btn").attr('display', 'block');*/
/*             $("#chatTarget").css("padding-left", "160px");*/
/*         }*/
/*     });*/
/* */
/*     $('#phoneheader').click(function() {*/
/*         if ($("#target").hasClass("fa-toggle-on")) {*/
/*             $('#phone-box-content').slideToggle('slow');*/
/*             // $("#side-bar-ctrl").hide();*/
/*         }*/
/*         else {*/
/*             $('#phone-box-content').show();*/
/*         }*/
/*     });*/
/*     */
/*     //   function func1()*/
/*     //     {*/
/*     //          //onkeypress="func1();"*/
/*     //         if(event.keyCode == 13){ */
/*     //             event.preventDefault();*/
/*     //             console.log("click chat-input");*/
/*                    */
/*     // 		  	privateChannel.sendMessage(document.getElementById('type-msg').value);*/
/*     // 		  	document.getElementById('type-msg').textContent ='';*/
/*     //             return false;*/
/*     //             }*/
/*     //     }  */
/*         */
/*         // 	document.getElementById('type-msg').addEventListener('keydown', function(e) {*/
/*         // 		  	if(e.keyCode == 13){ */
/*         //               e.preventDefault();*/
/*         //               console.log("click chat-input")*/
/*         //               document.getElementById('type-msg').value  ='';*/
/*         // 		  	   privateChannel.sendMessage(document.getElementById('type-msg').value);*/
/*         		  	   */
/*         // 		  	   return false;*/
/*         // 		  	}*/
/*     		  //	});*/
/*     */
/*             */
/*     $(document).ready(function() {*/
/*         console.log("loggign");*/
/*          var table = $('#transerWorker').DataTable();*/
/*         $('#transerWorker tbody').on( 'click', 'tr', function () {*/
/*             if ( $(this).hasClass('selected') ) {*/
/*                 $(this).removeClass('selected');*/
/*             }*/
/*             else {*/
/*                 table.$('tr.selected').removeClass('selected');*/
/*                 $(this).addClass('selected');*/
/*             }*/
/*         });*/
/*         */
/*        */
/*          */
/*         */
/*         // $('#btntransfer').click( function () {*/
/*         //     // var loginId = $.map(table.rows('.selected').data(), function (item) {*/
/*         //     //     return item[0]*/
/*         //     // });*/
/*             */
/*         //     if(table.rows('.selected').data()[0]){*/
/*         //         var loginId = table.rows('.selected').data()[0][0];*/
/*         //         alert("selected agent id :"+loginId);*/
/*         //         $.ajax({*/
/*         //             type: "POST", */
/*         //             //data: {callsid : workerModule.cc_worker._getcallsid()}, */
/*         //             data: {callsid : conn.parameters.CallSid}, */
/*         //             url: "/web/app_dev.php/transfercallaction",*/
/*         //             }).success(function(msg) {*/
/*         //             console.log("Call is on Hold");*/
/*         //         });*/
/*         //     }else{*/
/*         //         alert("No Agent is selected");*/
/*         //     }*/
/*         //     console.log(loginId);*/
/*         //     //alert( table.rows('.selected').data().length +' row(s) selected' );*/
/*         // } );*/
/*     } );*/
/*     // $("#transfer").bind("click", function() {*/
/*     //     $.ajax({*/
/*     //         url: "{{ path('transferaction') }}",*/
/*     //         async: true,*/
/*     //         type: "POST",*/
/*     //         dataType: "text",*/
/*     //         success: function(resultData) {*/
/*     //             $("#alert").addClass("in alert-success");*/
/*     //             var table = $('#transerWorker').DataTable();*/
/*     //             table.clear();*/
/*     //             table.rows.add(jQuery.parseJSON(resultData)).draw();*/
/*     */
/*     //             // $('#transerWorker').DataTable( {*/
/*     //             //     data: jQuery.parseJSON(resultData),*/
/*     //             //     columns: [*/
/*     //             //         { title: "LoginId" },*/
/*     //             //         { title: "Name" },*/
/*     //             //         { title: "Worker SID" },*/
/*     //             //     ]*/
/*     //             // } );                */
/*     //             $('#transferModal').modal('show');*/
/*     //         },*/
/*     //         error: function() {*/
/*     //             alert("Error!!!");*/
/*     //         }*/
/*     //     })*/
/*     // });*/
/* */
/*     $(".fa-gears").click(function() {*/
/*         console.log("open");*/
/*         $('#phone-box-content').show();*/
/*     });*/
/*     */
/*     $( ".wrapper" ).scroll(function() {*/
/*   // alert("scrolled");*/
/* });*/
/*     */
/* </script>*/
/* */
/* <script>*/
/*     "use strict";*/
/* */
/*     (function() {*/
/*         var s = document.createElement('script');*/
/*         s.type = 'text/javascript';*/
/*         s.async = true;*/
/*         s.src = '{{ asset('bundles/commcloudvoice/testJS/CustomSoftphone.js')}}';*/
/*         var x = document.getElementsByTagName('script')[0];*/
/*         x.parentNode.insertBefore(s, x);*/
/*         s.onload = function() {*/
/*          console.log("custom softphone js loaded");*/
/*          (function () {*/
/*                var s = document.createElement('script');*/
/*                s.type = 'text/javascript';*/
/*                s.async = true;*/
/*                s.src = '{{ asset('bundles/commcloudvoice/testJS/CustomChat.js')}}';*/
/*                var x = document.getElementsByTagName('script')[0];*/
/*                x.parentNode.insertBefore(s, x);*/
/*                s.onload = function(){*/
/*                console.log("custom chat js loaded");*/
/*               }*/
/* 	    })();*/
/*         }*/
/*     })();*/
/*     */
/*   */
/* </script>*/
/* {% endblock %}*/
