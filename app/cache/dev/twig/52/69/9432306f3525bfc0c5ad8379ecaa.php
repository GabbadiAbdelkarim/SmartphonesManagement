<?php

/* EMSISmartPhoneBundle:Default:listUser.html.twig */
class __TwigTemplate_52699432306f3525bfc0c5ad8379ecaa extends Twig_Template
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
    </style>
</head>
<body>
<div class=\"bs-example\">
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Login
            </th>
            <th>
                Mot de Passe
            </th>
            <th>
                User
            </th>
            <th>
                Role
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Login"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Mtp"), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "user"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "Role"), "intitule"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  90 => 44,  86 => 43,  82 => 42,  78 => 41,  74 => 40,  71 => 39,  67 => 38,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
