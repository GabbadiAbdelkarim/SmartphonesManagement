<?php

/* EMSISmartPhoneBundle:Default:registered.html.twig */
class __TwigTemplate_f0a749187eaa8281c95384e730756236 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
        .bs-example{
            margin: 20px;
        }
        hr{
            margin: 60px 0;
        }
    </style>
</head>
<body background=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/emsismartphone/img/bac.png"), "html", null, true);
        echo "\">
<div class=\"bs-example\" ALIGN=\"CENTER\">
    <ul class=\"nav nav-pills\" ALIGN=\"CENTER\">
        <li class=\"active\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_registered");
        echo "\">Home</a></li>
        <li class=\"active\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_addCommande");
        echo "\" >Ajouter commande</a>

        </li>
    </ul>

    </br>
    </br></br></br>
    <hr>
</div>


<div>
    ";
        // line 35
        $this->env->loadTemplate("EMSISmartPhoneBundle:Default:listPhones.html.twig")->display($context);
        echo "</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  58 => 23,  53 => 21,  47 => 18,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
