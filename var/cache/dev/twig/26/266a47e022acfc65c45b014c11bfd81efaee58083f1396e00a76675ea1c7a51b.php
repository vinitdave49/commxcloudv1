<?php

/* CommcloudVoiceBundle::base.html.twig */
class __TwigTemplate_1aabc782cdffe1bfe22bdc1df8f30e8971d6f9763f4b294fa81eeb7ab8855d7e extends Twig_Template
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
        $__internal_888120ab86620c9a8d3c2b56c1630b0e3e5e2923827253e3d9e92115adb7b0a8 = $this->env->getExtension("native_profiler");
        $__internal_888120ab86620c9a8d3c2b56c1630b0e3e5e2923827253e3d9e92115adb7b0a8->enter($__internal_888120ab86620c9a8d3c2b56c1630b0e3e5e2923827253e3d9e92115adb7b0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "wDisplayName", array()), "html", null, true);
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
        
        $__internal_888120ab86620c9a8d3c2b56c1630b0e3e5e2923827253e3d9e92115adb7b0a8->leave($__internal_888120ab86620c9a8d3c2b56c1630b0e3e5e2923827253e3d9e92115adb7b0a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e54ef6678a88a877f55110de4453a2c79e48968482f950520c562a63835e69bd = $this->env->getExtension("native_profiler");
        $__internal_e54ef6678a88a877f55110de4453a2c79e48968482f950520c562a63835e69bd->enter($__internal_e54ef6678a88a877f55110de4453a2c79e48968482f950520c562a63835e69bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CommXCloud";
        
        $__internal_e54ef6678a88a877f55110de4453a2c79e48968482f950520c562a63835e69bd->leave($__internal_e54ef6678a88a877f55110de4453a2c79e48968482f950520c562a63835e69bd_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c9e1b9e8e855a08587c7ecb6f63df4af2e6e3a90d11121c5f3f9cf16331d389 = $this->env->getExtension("native_profiler");
        $__internal_2c9e1b9e8e855a08587c7ecb6f63df4af2e6e3a90d11121c5f3f9cf16331d389->enter($__internal_2c9e1b9e8e855a08587c7ecb6f63df4af2e6e3a90d11121c5f3f9cf16331d389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_1") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_AdminLTE.min_1.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_2") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins_2.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_3") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2__all-skins.min_3.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_4") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_blue_4.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_5") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_commcloud_6.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_6") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_dataTables.bootstrap_7.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_7") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_daterangepicker_8.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_8") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_jquery.dataTables_9.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
            // asset "aa03925_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925_9") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925_part_2_skin-blue.min_10.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "aa03925"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa03925") : $this->env->getExtension('asset')->getAssetUrl("css/aa03925.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        
        $__internal_2c9e1b9e8e855a08587c7ecb6f63df4af2e6e3a90d11121c5f3f9cf16331d389->leave($__internal_2c9e1b9e8e855a08587c7ecb6f63df4af2e6e3a90d11121c5f3f9cf16331d389_prof);

    }

    // line 134
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_559ec3273c70f85ffcc659f4f8af2b1911416d119bcbbb3ceb10ffebcf9cb980 = $this->env->getExtension("native_profiler");
        $__internal_559ec3273c70f85ffcc659f4f8af2b1911416d119bcbbb3ceb10ffebcf9cb980->enter($__internal_559ec3273c70f85ffcc659f4f8af2b1911416d119bcbbb3ceb10ffebcf9cb980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 135
        echo "             
            ";
        
        $__internal_559ec3273c70f85ffcc659f4f8af2b1911416d119bcbbb3ceb10ffebcf9cb980->leave($__internal_559ec3273c70f85ffcc659f4f8af2b1911416d119bcbbb3ceb10ffebcf9cb980_prof);

    }

    // line 138
    public function block_content($context, array $blocks = array())
    {
        $__internal_21f7593f0b6283bc01266b3b20f4dec7f29abcb1007e9ca012f80a495f27e9f4 = $this->env->getExtension("native_profiler");
        $__internal_21f7593f0b6283bc01266b3b20f4dec7f29abcb1007e9ca012f80a495f27e9f4->enter($__internal_21f7593f0b6283bc01266b3b20f4dec7f29abcb1007e9ca012f80a495f27e9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 139
        echo "            
            ";
        
        $__internal_21f7593f0b6283bc01266b3b20f4dec7f29abcb1007e9ca012f80a495f27e9f4->leave($__internal_21f7593f0b6283bc01266b3b20f4dec7f29abcb1007e9ca012f80a495f27e9f4_prof);

    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9629ea20802e332027270ca8f7b34d76a23a3cbe729c6813bb37a5fd8f1ee0c0 = $this->env->getExtension("native_profiler");
        $__internal_9629ea20802e332027270ca8f7b34d76a23a3cbe729c6813bb37a5fd8f1ee0c0->enter($__internal_9629ea20802e332027270ca8f7b34d76a23a3cbe729c6813bb37a5fd8f1ee0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_1") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_inputmask_2.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_2") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_moment.min_3.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_3") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_jquery.dataTables_4.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_4") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_Chart.min_1.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_5") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_app.min_2.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_6") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_bootstrap.min_3.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_7") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_dataTables.bootstrap_4.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_8") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_daterangepicker_5.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_9") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_demo_6.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_10") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_fastclick.min_7.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_11") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_icheck.min_8.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_12") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_inputmask.phone.extensions_10.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_13") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.history_13.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_14") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.slimscroll.min_14.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
            // asset "1b936eb_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb_15") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb_part_5_jquery.sparkline.min_15.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
          ";
        } else {
            // asset "1b936eb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b936eb") : $this->env->getExtension('asset')->getAssetUrl("js/1b936eb.js");
            echo "              <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "';
        \t  \twindow.transferurl = '";
        // line 183
        echo $this->env->getExtension('routing')->getPath("transferaction");
        echo "';
        \t</script>
";
        // line 186
        echo "        ";
        
        $__internal_9629ea20802e332027270ca8f7b34d76a23a3cbe729c6813bb37a5fd8f1ee0c0->leave($__internal_9629ea20802e332027270ca8f7b34d76a23a3cbe729c6813bb37a5fd8f1ee0c0_prof);

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
        return array (  518 => 186,  513 => 183,  509 => 182,  505 => 181,  499 => 177,  395 => 175,  390 => 170,  388 => 169,  386 => 168,  384 => 167,  382 => 166,  380 => 165,  374 => 164,  366 => 139,  360 => 138,  352 => 135,  346 => 134,  337 => 29,  334 => 27,  330 => 24,  262 => 22,  258 => 19,  255 => 18,  253 => 17,  251 => 16,  249 => 15,  247 => 14,  244 => 12,  238 => 11,  226 => 7,  215 => 187,  213 => 164,  188 => 141,  186 => 138,  183 => 137,  181 => 134,  171 => 126,  169 => 125,  166 => 123,  163 => 121,  161 => 120,  158 => 118,  156 => 117,  154 => 116,  152 => 115,  147 => 111,  143 => 109,  139 => 107,  132 => 102,  95 => 67,  93 => 66,  91 => 65,  89 => 64,  87 => 63,  85 => 62,  83 => 61,  77 => 56,  70 => 50,  54 => 36,  48 => 33,  45 => 32,  43 => 11,  40 => 10,  35 => 7,  27 => 1,);
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
