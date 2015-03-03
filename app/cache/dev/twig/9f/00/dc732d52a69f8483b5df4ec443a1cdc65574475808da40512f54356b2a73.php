<?php

/* SeleccionProcesBundle:Candidate:ResumePrivateShow.html.twig */
class __TwigTemplate_9f00dc732d52a69f8483b5df4ec443a1cdc65574475808da40512f54356b2a73 extends Twig_Template
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
        echo " Ficha del candidato ";
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
                <div class=\"table table-striped\">
\t\t\t\t\t<tr> </h3>Felicitaciones usted ha completado la Ficha de Candidato. </h3>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr> Continue con las pruebas asignadas
\t\t\t\t\t</tr>\t\t\t\t\t
                <br> 
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_index");
        echo "\">
                            Continuar con evaluación
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:Candidate:ResumePrivateShow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  49 => 12,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
