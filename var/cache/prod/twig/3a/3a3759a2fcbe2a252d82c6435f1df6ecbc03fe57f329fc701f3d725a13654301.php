<?php

/* CommcloudVoiceBundle:Login:login.html.twig */
class __TwigTemplate_3f95f56e9529b78dfde2e94ba0d41323c4aa4d5eed2e7d82f9bd1b0ec8df6649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>CommCloud | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
     ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body class=\"hold-transition login-page\" style=\"background-image: url(/web/images/cloud-background.jpg)\">
    <!--http://commcloud-voice-ashwindeshpande06.c9users.io/symfony/web/images/cloud-background.jpg-->
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"#\"><b>CommCloud</b></a>
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
    ";
        // line 39
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 40
            echo "        ";
            // line 41
            echo "        <div> <font color=\"red\"> <center> Invalid Username or Bad Password </center> </font> </div>
    ";
        }
        // line 43
        echo "
            <form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    ";
        // line 47
        echo "                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"LoginId\" />
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    ";
        // line 52
        echo "                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/> ";
        // line 53
        echo "                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                ";
        // line 57
        echo "                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                        <!-- <input type=\"submit\" name=\"submit\"> -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            ";
        // line 75
        echo "        </form>
    </div>
    <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    <script>
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    
    </script>
</body>

</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "          ";
        // line 11
        echo "          ";
        // line 12
        echo "          ";
        // line 13
        echo "          ";
        // line 14
        echo "          
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/skin-blue.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/_all-skins.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/blue.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/commcloud.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/css/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <!-- Ionicons -->
            <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
       
        ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "          ";
        // line 82
        echo "          ";
        // line 83
        echo "          ";
        // line 84
        echo "          ";
        // line 85
        echo "          ";
        // line 86
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/js/jQuery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/js/app.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/commcloudvoice/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <!-- ChartJS Script Import -->
        \t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js\"></script>
        \t
        ";
    }

    public function getTemplateName()
    {
        return "CommcloudVoiceBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 89,  188 => 88,  184 => 87,  179 => 86,  177 => 85,  175 => 84,  173 => 83,  171 => 82,  169 => 81,  166 => 80,  155 => 21,  151 => 20,  147 => 19,  143 => 18,  139 => 17,  135 => 16,  131 => 15,  128 => 14,  126 => 13,  124 => 12,  122 => 11,  120 => 10,  117 => 9,  103 => 94,  101 => 80,  94 => 75,  76 => 57,  72 => 53,  70 => 52,  62 => 47,  57 => 44,  54 => 43,  50 => 41,  48 => 40,  46 => 39,  33 => 28,  31 => 9,  21 => 1,);
    }
}
/* <html>*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>CommCloud | Log in</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*      {% block stylesheets %}*/
/*           {#{% stylesheets '@CommcloudVoiceBundle/Resources/public/css/bootstrap.min.css' #}*/
/*           {#               '@CommcloudVoiceBundle/Resources/public/css/*'  filter="cssrewrite"%}#}*/
/*           {#    <link rel="stylesheet" href="{{ asset_url }}" />#}*/
/*           {#{% endstylesheets %}#}*/
/*           */
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/AdminLTE.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/skin-blue.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/_all-skins.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/blue.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/commcloud.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/commcloudvoice/css/jquery-jvectormap-1.2.2.css') }}">*/
/*             <!-- Font Awesome -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             <!-- Ionicons -->*/
/*             <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*        */
/*         {% endblock %}*/
/* </head>*/
/* */
/* <body class="hold-transition login-page" style="background-image: url(/web/images/cloud-background.jpg)">*/
/*     <!--http://commcloud-voice-ashwindeshpande06.c9users.io/symfony/web/images/cloud-background.jpg-->*/
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="#"><b>CommCloud</b></a>*/
/*         </div>*/
/*         <!-- /.login-logo -->*/
/*         <div class="login-box-body">*/
/*             <p class="login-box-msg">Sign in to start your session</p>*/
/*     {% if error %}*/
/*         {#<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}*/
/*         <div> <font color="red"> <center> Invalid Username or Bad Password </center> </font> </div>*/
/*     {% endif %}*/
/* */
/*             <form action="{{ path('login_check') }}" method="post">*/
/*                 <div class="form-group has-feedback">*/
/*                     {#<label for="username">Username:</label> #}*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="LoginId" />*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     {# <label for="password">Password:</label>#}*/
/*                     <input type="password" id="password" name="_password" class="form-control" placeholder="Password"/> {# If you want to control the URL the user is redirected to on success (more details below) #}*/
/*                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                 </div>*/
/*                 {#*/
/*                 <input type="hidden" name="_target_path" value="/account" /> #}*/
/*                 <div class="row">*/
/*                     <div class="col-xs-8">*/
/*                         <div class="checkbox icheck">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Remember Me*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.col -->*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*                         <!-- <input type="submit" name="submit"> -->*/
/*                     </div>*/
/*                     <!-- /.col -->*/
/*                 </div>*/
/*             </div>*/
/*             {#*/
/*             <button type="submit">login</button> #}*/
/*         </form>*/
/*     </div>*/
/*     <!-- /.login-box-body -->*/
/*     </div>*/
/*     <!-- /.login-box -->*/
/*         {% block javascripts %}*/
/*           {#{% javascripts  '@CommcloudVoiceBundle/Resources/public/js/jQuery.js' #}*/
/*           {#                '@CommcloudVoiceBundle/Resources/public/js/bootstrap.min.js'#}*/
/*           {#                '@CommcloudVoiceBundle/Resources/public/js/icheck.min.js'  %}#}*/
/*           {#    <script src="{{ asset_url }}"></script>#}*/
/*           {#{% endjavascripts %}#}*/
/*             <script src="{{ asset('bundles/commcloudvoice/js/jQuery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/commcloudvoice/js/bootstrap.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/commcloudvoice/js/app.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/commcloudvoice/js/icheck.min.js') }}"></script>*/
/*             <!-- ChartJS Script Import -->*/
/*         	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>*/
/*         	*/
/*         {% endblock %}*/
/*     <script>*/
/*         $('input').iCheck({*/
/*             checkboxClass: 'icheckbox_square-blue',*/
/*             radioClass: 'iradio_square-blue',*/
/*             increaseArea: '20%' // optional*/
/*         });*/
/*     */
/*     </script>*/
/* </body>*/
/* */
/* </html>*/
