<?php

/* CommcloudVoiceBundle:Login:login.html.twig */
class __TwigTemplate_53d449b82e55401877abca7846505912dfbbc5413c640c472cdc7f89885742e3 extends Twig_Template
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
        $__internal_56b9d2b3912b0a9f775000640250931016908c9dfdd3c1c99cba64e349e1db15 = $this->env->getExtension("native_profiler");
        $__internal_56b9d2b3912b0a9f775000640250931016908c9dfdd3c1c99cba64e349e1db15->enter($__internal_56b9d2b3912b0a9f775000640250931016908c9dfdd3c1c99cba64e349e1db15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommcloudVoiceBundle:Login:login.html.twig"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_56b9d2b3912b0a9f775000640250931016908c9dfdd3c1c99cba64e349e1db15->leave($__internal_56b9d2b3912b0a9f775000640250931016908c9dfdd3c1c99cba64e349e1db15_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcf72e4c4878745e6047e571b8c216b04de735d5de1c03be40e8bb1824a396d5 = $this->env->getExtension("native_profiler");
        $__internal_fcf72e4c4878745e6047e571b8c216b04de735d5de1c03be40e8bb1824a396d5->enter($__internal_fcf72e4c4878745e6047e571b8c216b04de735d5de1c03be40e8bb1824a396d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fcf72e4c4878745e6047e571b8c216b04de735d5de1c03be40e8bb1824a396d5->leave($__internal_fcf72e4c4878745e6047e571b8c216b04de735d5de1c03be40e8bb1824a396d5_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_869d2de1512f893216a0eea191cb63adb5014284c2f5420fee998c156cebea19 = $this->env->getExtension("native_profiler");
        $__internal_869d2de1512f893216a0eea191cb63adb5014284c2f5420fee998c156cebea19->enter($__internal_869d2de1512f893216a0eea191cb63adb5014284c2f5420fee998c156cebea19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_869d2de1512f893216a0eea191cb63adb5014284c2f5420fee998c156cebea19->leave($__internal_869d2de1512f893216a0eea191cb63adb5014284c2f5420fee998c156cebea19_prof);

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
        return array (  207 => 89,  203 => 88,  199 => 87,  194 => 86,  192 => 85,  190 => 84,  188 => 83,  186 => 82,  184 => 81,  178 => 80,  164 => 21,  160 => 20,  156 => 19,  152 => 18,  148 => 17,  144 => 16,  140 => 15,  137 => 14,  135 => 13,  133 => 12,  131 => 11,  129 => 10,  123 => 9,  106 => 94,  104 => 80,  97 => 75,  79 => 57,  75 => 53,  73 => 52,  65 => 47,  60 => 44,  57 => 43,  53 => 41,  51 => 40,  49 => 39,  36 => 28,  34 => 9,  24 => 1,);
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
