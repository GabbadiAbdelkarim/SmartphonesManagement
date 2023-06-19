<?php

/* EMSISmartPhoneBundle:Default:addCommande.html.twig */
class __TwigTemplate_dbacaba0185ac272c18b73c4c9204a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), 'form_start');
        echo "
    <table>
        <tr>
            <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Smartphone"), 'label');
        echo "</td>
            <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Smartphone"), 'widget');
        echo "</td>
            <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Smartphone"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Quantite"), 'label');
        echo "</td>
            <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Quantite"), 'widget');
        echo "</td>
            <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Quantite"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Prixtotal"), 'label');
        echo "</td>
            <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Prixtotal"), 'widget');
        echo "</td>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Prixtotal"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "user"), 'label');
        echo "</td>
            <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "user"), 'widget');
        echo "</td>
            <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "user"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Ajouter"), 'label');
        echo "</td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Ajouter"), 'widget');
        echo "</td>
            <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Annuler"), 'label');
        echo "</td>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), "Annuler"), 'widget');
        echo "</td>
        </tr>
    </table>
    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fcmd"]) ? $context["fcmd"] : $this->getContext($context, "fcmd")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "EMSISmartPhoneBundle:Default:addCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  88 => 23,  84 => 22,  80 => 21,  74 => 18,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  31 => 3,  28 => 2,);
    }
}
