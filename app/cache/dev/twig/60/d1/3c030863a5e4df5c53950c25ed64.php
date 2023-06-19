<?php

/* EMSISmartPhoneBundle:Default:login.html.twig */
class __TwigTemplate_60d13c030863a5e4df5c53950c25ed64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'icons' => array($this, 'block_icons'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Gestion des SmartPhones</title>

";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        $this->displayBlock('icons', $context, $blocks);
        // line 27
        echo "    </head>
<body background=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/img/back.jpg"), "html", null, true);
        echo "\">
";
        // line 29
        $this->displayBlock('container', $context, $blocks);
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "    </body>

</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,100,300,500\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/css/form-elements.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 19
    public function block_icons($context, array $blocks = array())
    {
        // line 20
        echo "    <!-- Favicon and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/ico/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
";
    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"top-content\">

        <div class=\"inner-bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-sm-offset-2 text\">
                        <h1><center><strong>EMSI 3IIR3</strong> Login Form</center></h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                        <div class=\"form-top\">
                            <div class=\"form-top-left\">
                                <p>Enter your username and password to log on:</p>
                            </div>
                            <div class=\"form-top-right\">
                                <i class=\"fa fa-key\"></i>
                            </div>
                        </div>
                        <div class=\"form-bottom\">
                            <form role=\"form\" action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_login");
        echo "\" method=\"POST\" class=\"login-form\">
                                <div class=\"form-group\">
                                    <label class=\"sr-only\" for=\"form-username\">Login</label>
                                    <input type=\"text\" name=\"login\" placeholder=\"Login...\" class=\"form-username form-control\" id=\"form-username\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"sr-only\" for=\"form-password\">Password</label>
                                    <input type=\"password\" name=\"mtp\" placeholder=\"Password...\" class=\"form-password form-control\" id=\"form-password\">
                                </div>
                                <button type=\"submit\" class=\"btn\">Sign in!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 col-sm-offset-3 social-login\">
                        <h3>...or login with:</h3>
                        <div class=\"social-login-buttons\">
                            <a class=\"btn btn-link-1 btn-link-1-facebook\" href=\"#\">
                                <i class=\"fa fa-facebook\"></i> Facebook
                            </a>
                            <a class=\"btn btn-link-1 btn-link-1-twitter\" href=\"#\">
                                <i class=\"fa fa-twitter\"></i> Twitter
                            </a>
                            <a class=\"btn btn-link-1 btn-link-1-google-plus\" href=\"#\">
                                <i class=\"fa fa-google-plus\"></i> Google Plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    ";
        // line 84
        if (array_key_exists("name", $context)) {
            // line 85
            echo "        <div class=\"alert-info fade in\">

            <strong>Bonjour ";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>

        </div>
    ";
        }
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "<!-- Javascript -->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/js/scripts.js"), "html", null, true);
        echo "\"></script>
    <!--[if lt IE 10]>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/js/placeholder.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 99,  204 => 97,  200 => 96,  196 => 95,  192 => 94,  189 => 93,  186 => 92,  177 => 87,  173 => 85,  171 => 84,  134 => 50,  112 => 30,  109 => 29,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  84 => 20,  81 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 12,  56 => 11,  50 => 102,  48 => 92,  46 => 29,  42 => 28,  39 => 27,  37 => 19,  35 => 11,  23 => 1,);
    }
}
