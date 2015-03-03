<?php

/* TestICESPBundle:ICESP:new.html.twig */
class __TwigTemplate_ac20f85dc3f5f7400cd79af918899f3f67b4bdf685e60a2bc10132c211e4f508 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::candidate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba del ICE";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<!--<h1>";
        // line 7
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>-->
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h1>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                <br>
                <br>
                <div class=\"row-fluid\">
\t\t\t\t\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_ice_create", array("idspc" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionprocesscandidate", array()), "id", array())))));
        echo "
\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<left>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Pregunta</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "icespdetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entidad_respuesta"]) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>";
            // line 30
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo ". </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entidad_respuesta"], "icedetail", array()), "question", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t <tr>";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "icespdetails", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), 'widget');
            echo "</tr>\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br> \t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entidad_respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</left>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestICESPBundle:ICESP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  108 => 41,  102 => 37,  93 => 34,  90 => 33,  88 => 32,  84 => 31,  80 => 30,  77 => 29,  72 => 28,  70 => 27,  56 => 16,  49 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
