<?php

/* TestPmaSPBundle:Default:show.html.twig */
class __TwigTemplate_f64edcfd80096557c1e1988b24238f96fcd58a553f69d7c6f5533cc7622ac5a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::candidate.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
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
    public function block_id($context, array $blocks = array())
    {
        echo "pmasp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "TEST PMA ";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Candidato</th>
                                <td class=\"span4\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessCandidate", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <center>
                    <h1>";
        // line 23
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                    <br>
                    <h2>Introduccion</h2>
                </center>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                    </div>
                    <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                        A continuación va usted a responder a una serie de cinco pruebas. El objetivo de estas pruebas es ver como resuelve diferentes
                        problemas. Cada una de las cinco clases de problemas es importante.
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                    </div>
                    <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                        Acaso unos ejercicios sean más interesantes o más fáciles que otros. Unas personas resuelven mejor unos ejericicios; otras otros.
                        Usted procure hacerlo lo mejor posible.
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                    </div>
                    <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                        Lea cuidadosamente las instrucciones de cada prueba y cumpla exactamente lo que dicen. Asegúrese de que entiende bien los ejercicios
                        preparatorios antes que el examinador dé la señal de hacer los problemas de la prueba. Escuche atentamente las instrucciones del examinador.
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                    </div>
                    <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                        A continuación pase a revisar el primer subtest, lea primero los ejercicios preparatorios.
                    </div>
                </div>
                <br>
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                    </div>
                    <div class=\"span9\">
                        <ul class=\"record_actions\">
                            <li>
                                <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_pma_part1_sp_new", array("idpmasp" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                                    Iniciar Pruebas PMA
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestPmaSPBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 70,  66 => 23,  57 => 17,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
