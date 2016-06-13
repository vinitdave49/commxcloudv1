<?php

/* CommcloudVoiceBundle::base.html.twig */
class __TwigTemplate_0a806a2c53f7615ad8f05c9c18e74285456b8246c232bc1853f5b7f7c140b931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
         <meta charset=\"utf-8\"/>
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
         <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\"/>
         <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      
        ";
        // line 10
        echo "        
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body  class=\"hold-transition skin-blue sidebar-mini\" >
         <div id=\"abc\" data-path=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("commcloud_voice_token");
        echo "\"></div>
         <div class=\"modal fade\" id=\"transferModal\" role=\"dialog\">
           <div class=\"modal-dialog\">
    
      <!-- Modal content-->
      <div class=\"modal-content\" style=\"border-radius:10px;\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
          <h4 class=\"modal-title\" align=\"center\">User Configuration</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group\">
                <table id=\"transerWorker\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"transerWorker_info\">
                ";
        // line 50
        echo "                    <thead>
                        <tr role=\"row\">
                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"transerWorker\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Login ID: activate to sort column descending\" style=\"width: 180px;\">Login ID</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"transerWorker\" rowspan=\"1\" colspan=\"1\" aria-label=\"Display Name: activate to sort column ascending\" style=\"width: 223px;\">Display Name</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"transerWorker\" rowspan=\"1\" colspan=\"1\" aria-label=\"Worker SID: activate to sort column ascending\" style=\"width: 223px;\">Worker SID</th>
                            ";
        // line 56
        echo "                        </tr>
                    </thead>
                    <tbody>
                       
                        ";
        // line 61
        echo "                        ";
        // line 62
        echo "                        ";
        // line 63
        echo "                        ";
        // line 64
        echo "                        ";
        // line 65
        echo "                        ";
        // line 66
        echo "                        ";
        // line 67
        echo "                    </tbody>
                </table>

        </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Close</button>
          <button type=\"button\" id=\"btntransfer\" class=\"btn btn-primary\" data-dismiss=\"modal\">Transfer</button>
        </div>
      </div>
      
    </div>
         </div>
        <div class=\"wrapper\">
              <!-- Main Header -->
              <header class=\"main-header\">
        
                <!-- Logo -->
                <a href=\"/web/app.php/app/content\" class=\"logo\">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class=\"logo-mini\"><b>C</b>C</span>
                  <!-- logo for regular state and mobile devices -->
                  <span class=\"logo-lg\"><b>CommXCloud</b></span>
                </a>
        
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                  <!-- Sidebar toggle button-->
                  <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                  </a>
                   <div class=\"navbar-custom-menu\">
        \t\t        <ul class=\"nav navbar-nav\">
        \t\t              <li class=\"user user-menu\">
            \t\t\t\t\t            <a href=\"#\" >
            \t\t\t\t\t              <span>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "wDisplayName", array()), "html", null, true);
        echo "</span>
            \t\t\t\t\t             </a>
                              </li>
        \t\t            <li class=\"user user-menu\">
                                ";
        // line 107
        echo "                                
                                  <!--<a href=\"logout_action.php\" class=\"btn btn-default btn-flat\">Sign out</a>-->
            \t\t\t\t\t            <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"\" id=\"signOut\" >Sign out</a>
                                ";
        // line 111
        echo "                              </li>


        \t\t\t       ";
        // line 115
        echo "        \t\t        ";
        // line 116
        echo "        \t\t\t\t      ";
        // line 117
        echo "                  ";
        // line 118
        echo "        \t\t\t\t
        \t\t\t\t      ";
        // line 120
        echo "                  ";
        // line 121
        echo "        \t\t\t
            \t\t\t      ";
        // line 123
        echo "                              
                     ";
        // line 125
        echo "        \t\t\t    \t  ";
        // line 126
        echo "        \t\t\t    \t  <li>
                        <a id=\"side-bar-ctrl\" href=\"#\" data-toggle=\"control-sidebar\"><i  class=\"fa fa-gears\"></i></a>
                      </li>
        \t\t\t      </ul>
        \t\t       </div>
                </nav>
              </header>
              
            ";
        // line 134
        $this->displayBlock('sidebar', $context, $blocks);
        // line 137
        echo "            
            ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "           
         
          <div id=\"dialog\" title=\"Transfer dialog\" style=\"display:none\">
              <p>This is Transfer Dialog</p>
          </div>
    <script>
      function display(test) {
          \$(\"#dialog\").dialog();
      }
    </script>
         
          <!-- Main Footer -->
          <footer class=\"main-footer\">
            <!-- To the right -->
            <div class=\"pull-right hidden-xs\">
              Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
          </footer>
            
        </div>
       
        ";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 187
        echo "        
       
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "CommXCloud";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        
          ";
        // line 14
        echo "          ";
        // line 15
        echo "          ";
        // line 16
        echo "          ";
        // line 17
        echo "          ";
        // line 18
        echo "        
          ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa03925_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_0") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_bootstrap.min_1.css");
            // line 22
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_1") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_AdminLTE.min_1.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_2") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins_2.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_3") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins.min_3.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_4") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_blue_4.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_5") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_commcloud_6.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_6") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_dataTables.bootstrap_7.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_7") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_daterangepicker_8.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_8") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_jquery.dataTables_9.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_9") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_skin-blue.min_10.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "aa03925"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        
            <!-- Font Awesome -->
            ";
        // line 27
        echo "            <!-- Ionicons -->
            ";
        // line 29
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\"/>
       
        ";
    }

    // line 134
    public function block_sidebar($context, array $blocks = array())
    {
        // line 135
        echo "             
            ";
    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
        // line 139
        echo "            
            ";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "          ";
        // line 166
        echo "          ";
        // line 167
        echo "          ";
        // line 168
        echo "          ";
        // line 169
        echo "          ";
        // line 170
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1b936eb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_0") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_jQuery_1.js");
            // line 175
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_1") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_inputmask_2.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_2") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_moment.min_3.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_3") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_jquery.dataTables_4.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_4") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_Chart.min_1.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_5") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_app.min_2.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_6") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_bootstrap.min_3.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_7") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_dataTables.bootstrap_4.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_8") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_daterangepicker_5.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_9") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_demo_6.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_10") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_fastclick.min_7.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_11") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_icheck.min_8.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_12") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_inputmask.phone.extensions_10.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_13") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.history_13.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_14") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.slimscroll.min_14.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_15") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.sparkline.min_15.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "1b936eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
          ";
        }
        unset($context["asset_url"]);
        // line 177
        echo "          
          
         
        \t<script>
        \t  \twindow.workerjsUrl = '";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/testJS/worker.js"), "html", null, true);
        echo "';
        \t  \twindow.identitypath = '";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "';
        \t  \twindow.transferurl = '";
        // line 183
        echo $this->env->getExtension('routing')->getPath("transferaction");
        echo "';
        \t</script>
";
        // line 186
        echo "        ";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 186,  480 => 183,  476 => 182,  472 => 181,  466 => 177,  362 => 175,  357 => 170,  355 => 169,  353 => 168,  351 => 167,  349 => 166,  347 => 165,  344 => 164,  339 => 139,  336 => 138,  331 => 135,  328 => 134,  322 => 29,  319 => 27,  315 => 24,  247 => 22,  243 => 19,  240 => 18,  238 => 17,  236 => 16,  234 => 15,  232 => 14,  229 => 12,  226 => 11,  220 => 7,  212 => 187,  210 => 164,  185 => 141,  183 => 138,  180 => 137,  178 => 134,  168 => 126,  166 => 125,  163 => 123,  160 => 121,  158 => 120,  155 => 118,  153 => 117,  151 => 116,  149 => 115,  144 => 111,  140 => 109,  136 => 107,  129 => 102,  92 => 67,  90 => 66,  88 => 65,  86 => 64,  84 => 63,  82 => 62,  80 => 61,  74 => 56,  67 => 50,  51 => 36,  45 => 33,  42 => 32,  40 => 11,  37 => 10,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*          <meta charset="utf-8"/>*/
/*          <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>*/
/*          <title>{% block title %}CommXCloud{% endblock %}</title>*/
/*       */
/*         {#<link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/font-css/font-awesome.min.css') }}">#}*/
/*         */
/*         {% block stylesheets %}*/
/*         */
/*           {#{% stylesheets #}*/
/*           {#  '@CommcloudVoiceBundle/Resources/public/font-css/*'#}*/
/*           {# filter="?cssrewrite" %}#}*/
/*           {#  <link rel="stylesheet" href="{{ asset_url }}" />#}*/
/*           {#{% endstylesheets %}#}*/
/*         */
/*           {% stylesheets  */
/*                          '@CommcloudVoiceBundle/Resources/public/css/bootstrap.min.css' */
/*                          '@CommcloudVoiceBundle/Resources/public/css/*'  filter="cssrewrite"%}*/
/*               <link rel="stylesheet" href="{{ asset_url }}" />*/
/*           {% endstylesheets %}*/
/*         */
/*             <!-- Font Awesome -->*/
/*             {#<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">#}*/
/*             <!-- Ionicons -->*/
/*             {#<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">#}*/
/*             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>*/
/*        */
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body  class="hold-transition skin-blue sidebar-mini" >*/
/*          <div id="abc" data-path="{{ path('commcloud_voice_token') }}"></div>*/
/*          <div class="modal fade" id="transferModal" role="dialog">*/
/*            <div class="modal-dialog">*/
/*     */
/*       <!-- Modal content-->*/
/*       <div class="modal-content" style="border-radius:10px;">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*           <h4 class="modal-title" align="center">User Configuration</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <div class="form-group">*/
/*                 <table id="transerWorker" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="transerWorker_info">*/
/*                 {#<table id="table_1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="table_info">#}*/
/*                     <thead>*/
/*                         <tr role="row">*/
/*                             <th class="sorting_asc" tabindex="0" aria-controls="transerWorker" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Login ID: activate to sort column descending" style="width: 180px;">Login ID</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="transerWorker" rowspan="1" colspan="1" aria-label="Display Name: activate to sort column ascending" style="width: 223px;">Display Name</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="transerWorker" rowspan="1" colspan="1" aria-label="Worker SID: activate to sort column ascending" style="width: 223px;">Worker SID</th>*/
/*                             {#<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 223px;">Operations</th>#}*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                        */
/*                         {#{% for worker in workers %}#}*/
/*                         {#<tr>#}*/
/*                         {#    <td>{{worker.wsid}}</td>#}*/
/*                         {#    <td>{{worker.wroles}}</td>#}*/
/*                         {#    <td>{{worker.wskills}}</td>#}*/
/*                         {#    <td><button class="viewEvent animatedbtn btn btn-lg" data-toggle="modal" data-target="#myModal" style="vertical-align:middle" data-uniqueid={{worker|json_encode()}}><span>View</span></button>#}*/
/*                         {#{% endfor %}#}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*         </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>*/
/*           <button type="button" id="btntransfer" class="btn btn-primary" data-dismiss="modal">Transfer</button>*/
/*         </div>*/
/*       </div>*/
/*       */
/*     </div>*/
/*          </div>*/
/*         <div class="wrapper">*/
/*               <!-- Main Header -->*/
/*               <header class="main-header">*/
/*         */
/*                 <!-- Logo -->*/
/*                 <a href="/web/app.php/app/content" class="logo">*/
/*                   <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*                   <span class="logo-mini"><b>C</b>C</span>*/
/*                   <!-- logo for regular state and mobile devices -->*/
/*                   <span class="logo-lg"><b>CommXCloud</b></span>*/
/*                 </a>*/
/*         */
/*                 <!-- Header Navbar -->*/
/*                 <nav class="navbar navbar-static-top" role="navigation">*/
/*                   <!-- Sidebar toggle button-->*/
/*                   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                   </a>*/
/*                    <div class="navbar-custom-menu">*/
/*         		        <ul class="nav navbar-nav">*/
/*         		              <li class="user user-menu">*/
/*             					            <a href="#" >*/
/*             					              <span>{{app.user.wDisplayName}}</span>*/
/*             					             </a>*/
/*                               </li>*/
/*         		            <li class="user user-menu">*/
/*                                 {#<div class="pull-right" style="z-index: 1000">#}*/
/*                                 */
/*                                   <!--<a href="logout_action.php" class="btn btn-default btn-flat">Sign out</a>-->*/
/*             					            <a href="{{ path('logout') }}" class="" id="signOut" >Sign out</a>*/
/*                                 {#</div>#}*/
/*                               </li>*/
/* */
/* */
/*         			       {# <li class="dropdown user user-menu">#}*/
/*         		        {#    <a href="#" class="dropdown-toggle" data-toggle="dropdown">#}*/
/*         				      {#    <i class="fa fa-user"></i>#}*/
/*                   {#        <span class="hidden-xs">#}*/
/*         				*/
/*         				      {#    </span>#}*/
/*                   {#      </a>#}*/
/*         			*/
/*             			      {#<ul class="dropdown-menu">#}*/
/*                               */
/*                      {#   </ul>#}*/
/*         			    	  {#</li>#}*/
/*         			    	  <li>*/
/*                         <a id="side-bar-ctrl" href="#" data-toggle="control-sidebar"><i  class="fa fa-gears"></i></a>*/
/*                       </li>*/
/*         			      </ul>*/
/*         		       </div>*/
/*                 </nav>*/
/*               </header>*/
/*               */
/*             {% block sidebar %}*/
/*              */
/*             {% endblock %}*/
/*             */
/*             {% block content%}*/
/*             */
/*             {% endblock %}*/
/*            */
/*          */
/*           <div id="dialog" title="Transfer dialog" style="display:none">*/
/*               <p>This is Transfer Dialog</p>*/
/*           </div>*/
/*     <script>*/
/*       function display(test) {*/
/*           $("#dialog").dialog();*/
/*       }*/
/*     </script>*/
/*          */
/*           <!-- Main Footer -->*/
/*           <footer class="main-footer">*/
/*             <!-- To the right -->*/
/*             <div class="pull-right hidden-xs">*/
/*               Anything you want*/
/*             </div>*/
/*             <!-- Default to the left -->*/
/*             <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.*/
/*           </footer>*/
/*             */
/*         </div>*/
/*        */
/*         {% block javascripts %}*/
/*           {#<script src="https://static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>#}*/
/*           {# <script type="text/javascript" src="CustomSoftphone.js"></script>#}*/
/*           {#<script src="//media.twiliocdn.com/sdk/rtc/js/ip-messaging/v0.9/twilio-ip-messaging.min.js"></script>#}*/
/*           {#<script src="//media.twiliocdn.com/sdk/js/common/v0.1/twilio-common.min.js"></script>#}*/
/*           {#<script src="https://media.twiliocdn.com/taskrouter/js/v1.1.1/taskrouter.min.js"></script>#}*/
/*           {% javascripts  '@CommcloudVoiceBundle/Resources/public/js/jQuery.js' */
/*                           '@CommcloudVoiceBundle/Resources/public/js/inputmask.js'*/
/*                           '@CommcloudVoiceBundle/Resources/public/js/moment.min.js'*/
/*                           '@CommcloudVoiceBundle/Resources/public/js/jquery.dataTables.js'*/
/*                           '@CommcloudVoiceBundle/Resources/public/js/*'  %}*/
/*               <script src="{{ asset_url }}"></script>*/
/*           {% endjavascripts %}*/
/*           */
/*           */
/*          */
/*         	<script>*/
/*         	  	window.workerjsUrl = '{{ asset('bundles/commcloudvoice/testJS/worker.js') }}';*/
/*         	  	window.identitypath = '{{ app.user.username }}';*/
/*         	  	window.transferurl = '{{ path('transferaction') }}';*/
/*         	</script>*/
/* {#<script src="https://cdnjs.cloudflare.com/ajax/libs/history.js/1.8/bundled-uncompressed/html4+html5/jquery.history.js"></script>#}*/
/*         {% endblock %}*/
/*         */
/*        */
/*     </body>*/
/* </html>*/
/* */
