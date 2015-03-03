<?php

/* VirtualInterviewBundle:Default:interview.html.twig */
class __TwigTemplate_dbf25569a08fe7cdf50ae76e95c04fb6bbe3b75fe8ec4fc04c2df61e797e9cb6 extends Twig_Template
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
        echo "Entrevista Virtual ";
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
                <div class=\"table table-striped\">
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("interview_create", array("spc" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))));
        echo "
                    <fieldset>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t";
        // line 19
        $context["i"] = 1;
        // line 20
        echo "\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entidad_respuesta"]) {
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"span6\">";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ". 
\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entidad_respuesta"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"span6\">\t
\t\t\t\t\t\t\t\t\t\t";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), 'widget');
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
            // line 29
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 30
            echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entidad_respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
                    </fieldset>

\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
                    ";
        // line 37
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
        return "VirtualInterviewBundle:Default:interview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  105 => 36,  98 => 31,  91 => 30,  89 => 29,  84 => 27,  78 => 24,  74 => 23,  67 => 21,  64 => 20,  62 => 19,  56 => 16,  49 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
