<?php

/* EMSISmartPhoneBundle:Default:listPhones.html.twig */
class __TwigTemplate_fd47836ff27c15560294a4f038e64d9c extends Twig_Template
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
                Marque
            </th>
            <th>
                Modele
            </th>
            <th>
                Couleur
            </th>
            <th>
                Taille
            </th>
            <th>
                Prix
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phones"]) ? $context["phones"] : $this->getContext($context, "phones")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "marque"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "modele"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "couleur"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "taille"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prix"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:listPhones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  97 => 48,  93 => 47,  89 => 46,  85 => 45,  81 => 44,  77 => 43,  74 => 42,  70 => 41,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
