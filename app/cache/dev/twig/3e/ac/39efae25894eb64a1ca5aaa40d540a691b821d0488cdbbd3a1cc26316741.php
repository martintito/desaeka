<?php

/* VirtualInterviewBundle:Default:interviewEdit.html.twig */
class __TwigTemplate_3eac39efae25894eb64a1ca5aaa40d540a691b821d0488cdbbd3a1cc26316741 extends Twig_Template
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
        echo "Entrevista virtual ";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h2>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                <br>
                <div class=\"row-fluid\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <fieldset>
\t\t\t\t\t
\t\t\t\t\t\t<left>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<table class=\"record_properties\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Pregunta</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t\t";
        // line 26
        $context["i"] = 0;
        // line 27
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entidad_respuesta"]) {
            // line 28
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>";
            // line 29
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo ". </tr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entidad_respuesta"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 31
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t <tr>";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "answers", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), 'widget');
            echo "</tr>\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t<br> \t\t
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entidad_respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</left>
                    </fieldset>
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
                    ";
        // line 41
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
        return "VirtualInterviewBundle:Default:interviewEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  104 => 40,  98 => 36,  89 => 33,  86 => 32,  84 => 31,  80 => 30,  76 => 29,  73 => 28,  68 => 27,  66 => 26,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
