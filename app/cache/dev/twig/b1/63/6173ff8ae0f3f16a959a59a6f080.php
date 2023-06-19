<?php

/* EMSISmartPhoneBundle:Default:listRole.html.twig */
class __TwigTemplate_b1636173ff8ae0f3f16a959a59a6f080 extends Twig_Template
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
                Intitule
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "intitule"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:listRole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  69 => 32,  65 => 31,  62 => 30,  58 => 29,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
