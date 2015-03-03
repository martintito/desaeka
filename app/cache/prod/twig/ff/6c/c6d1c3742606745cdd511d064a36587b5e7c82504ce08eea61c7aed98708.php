<?php

/* VirtualInterviewBundle:Default:interviewShow.html.twig */
class __TwigTemplate_ff6cc6d1c3742606745cdd511d064a36587b5e7c82504ce08eea61c7aed98708 extends Twig_Template
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
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <div class=\"row-fluid\">
                    <fieldset>
                    <legend><h2> Entrevista Virtual</h2></legend>
\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><h4 class=\"span6\">Pregunta</h4></th>
\t\t\t\t\t\t\t\t<th><h4 class=\"span6\" align=\"center\">Respuesta</h4></th>
\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 18
        $context["i"] = 0;
        // line 19
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["virtualInterviewSelectionProcessCandidateList"]) ? $context["virtualInterviewSelectionProcessCandidateList"] : $this->getContext($context, "virtualInterviewSelectionProcessCandidateList")));
        foreach ($context['_seq'] as $context["_key"] => $context["entidad_respuesta"]) {
            // line 20
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"span6\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entidad_respuesta"], "VirtualInterviewQuestion", array()), "orden", array()), "html", null, true);
            echo ". 
\t\t\t\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entidad_respuesta"], "VirtualInterviewQuestion", array()), "question", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"span6\">\t
\t\t\t\t\t\t\t\t";
            // line 25
            $context["rpta"] = $this->getAttribute($context["entidad_respuesta"], "Answer", array());
            // line 26
            echo "\t\t\t\t\t\t\t\t";
            if ((null === (isset($context["rpta"]) ? $context["rpta"] : $this->getContext($context, "rpta")))) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t<p align=\"center\">-</p>
\t\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "  
\t\t\t\t\t\t\t\t\t<p>";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["rpta"]) ? $context["rpta"] : $this->getContext($context, "rpta")), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            // line 33
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 34
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entidad_respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t</table>

                    </fieldset>
                </div>
                <br>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("resume_new");
        echo "\">
                            Continuar con ficha de candidato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "VirtualInterviewBundle:Default:interviewShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  102 => 36,  95 => 34,  93 => 33,  89 => 31,  84 => 29,  81 => 28,  77 => 27,  74 => 26,  72 => 25,  66 => 22,  62 => 21,  59 => 20,  54 => 19,  52 => 18,  38 => 6,  35 => 5,  29 => 3,);
    }
}
