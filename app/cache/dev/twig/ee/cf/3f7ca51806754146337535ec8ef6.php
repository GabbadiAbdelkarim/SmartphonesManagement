<?php

/* EMSISmartPhoneBundle:Default:admin.html.twig */
class __TwigTemplate_eecf3f7ca51806754146337535ec8ef6 extends Twig_Template
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
        echo "    <!DOCTYPE html>
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
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_admin");
        echo "\">Home</a></li>
            <li class=\"dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Ajouter<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_addCommande");
        echo "\">commande</a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_addPhone");
        echo "\">smartphone</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_addUser");
        echo "\">utilisateur</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Modifier<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_listCommande");
        echo "\">Commande</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_listPhones");
        echo "\">SmartPhone</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_listUser");
        echo "\">Utilisateur</a></li>
                </ul>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Supprimer<b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_listCommande");
        echo "\">Commande</a></li>
                    <li><a href=\"emsi_smart_phone_listPhones\">SmartPhone</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("emsi_smart_phone_listUser");
        echo "\">Utilisateur</a></li>
                </ul>
            </li>
        </ul>
        <hr>
    </div>

    </body>
    </body>
    </html>";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  96 => 43,  87 => 37,  82 => 35,  78 => 34,  69 => 28,  64 => 26,  60 => 25,  53 => 21,  47 => 18,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
