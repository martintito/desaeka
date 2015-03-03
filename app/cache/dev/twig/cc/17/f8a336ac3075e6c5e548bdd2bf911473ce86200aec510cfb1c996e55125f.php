<?php

/* TestGatbSPBundle:GatbPart1SP:show.html.twig */
class __TwigTemplate_cc17f8a336ac3075e6c5e548bdd2bf911473ce86200aec510cfb1c996e55125f extends Twig_Template
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
        echo "gatbpart1sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba 1 Gatb ";
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
                <!--<h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>-->
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Evaluado :</th>
                                <td class=\"span4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "html", null, true);
        echo ".</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado :</th>
                                <td class=\"span4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart1", array()), "html", null, true);
        echo ".</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                
                <div class=\"row-fluid\">
                    <center>
                        <h2>PARTE 2</h2>
                        <h3>INSTRUCCIONES</h3>
                    </center>
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    En esta página hay algunos ejercicios de aritmética
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\"></td>
                                <td class=\"span5\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    Observe el <strong>ejercicio 1</strong>
                                    
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\"></td>
                                <td class=\"span5\">
                                    <strong>
                                        Alternativas
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    <!--
                                    En el ejercicio 1, la respuesta correcta es 5. <br>
                                    En la columna de respuestas para el ejercicio 1 la letra al lado del 5 es C. 
                                    Ahora mire a la parte de la hoja de respuestas que dice Parte 2 Práctica. 
                                    Observe que en la fila para el ejercicio de la práctica 1, el espacio bajo la letra C ha sido marcado.
                                    -->
                                    Para el ejercicio, resuelva la operación matemática señala para el ejercicio, en este caso de realizar la resta, en la columna de \"Respuestas\" la letra al lado del 5 es C. Ahora en la sección \"RESPUESTA\" deberá seleccionar la alternativa con la letra que corresponde a la respuesta, para el ejemplo será: \"Respuesta C\"
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\">
                                    <strong>
                                        1. RESTE ( - )
                                    </strong>
                                    <br>
                                    <center>
                                        9
                                        <br>
                                        4
                                        <br>
                                        _
                                    </center>
                                </td>
                                <td class=\"span5\">
                                    A 2<br>
                                    B 3<br>
                                    C 5<br>
                                    D 9<br>
                                    E ninguna de éstas
                                    <br>
                                    <br>
                                    <strong>
                                        Respuesta C
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    Observe el <strong>ejercicio 2</strong>
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\"></td>
                                <td class=\"span5\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    <!--
                                    En el ejercicio 2 la respuesta correcta es 6. <br>
                                    Seis no figura en la columna de respuestas. Por eso la letra E es la respuesta correcta. Observe que en la hoja de respuestas, el espacio bajo la letra E ha sido marcado en la fila para ejercicio de práctica 2 para indicar que ninguna de las respuestas dadas es correcta.
                                    -->
                                    Para el ejercicio, resuelva la operación matemática señala para el ejercicio, en este caso de realizar la suma, en la columna de \"Respuestas\" la respuesta es 6. Ahora en la sección \"RESPUESTA\" deberá seleccionar la alternativa con la letra que corresponde a la respuesta, para el ejemplo será: \"Respuesta E\"
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\">
                                    <strong>
                                        2. SUME ( + )
                                    </strong>
                                    <br>
                                    <center>
                                        2
                                        <br>
                                        4
                                        <br>
                                        _
                                    </center>
                                </td>
                                <td class=\"span5\">
                                    A 2<br>
                                    B 3<br>
                                    C 4<br>
                                    D 5<br>
                                    E ninguna de éstas
                                    <br>
                                    <br>
                                    <strong>
                                        Respuesta E
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\"></td>
                                <td class=\"span5\">
                                </td>
                            </tr>
                            
                            <tr>
                                <td class=\"span2\"></td>
                                <td class=\"span4\">
                                    <br>
                                    <ul class=\"record_actions\">
                                        <li>
                                            <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_gatb_part2_sp_new", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                                Empezar Prueba 2
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                                <td class=\"span1\"></td>
                                <td class=\"span2\">
                                </td>
                                <td class=\"span5\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:GatbPart1SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 165,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
