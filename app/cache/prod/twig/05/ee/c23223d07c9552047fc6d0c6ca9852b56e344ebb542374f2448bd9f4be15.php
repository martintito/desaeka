<?php

/* TestGatbSPBundle:GatbPart4SP:show.html.twig */
class __TwigTemplate_05eec23223d07c9552047fc6d0c6ca9852b56e344ebb542374f2448bd9f4be15 extends Twig_Template
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
        echo "gatbpart4sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba 4 Gatb ";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart4", array()), "html", null, true);
        echo ".</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"row-fluid\">
                    <center>
                        <h2>PARTE 5</h2>
                        <h3>INSTRUCCIONES</h3>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En esta página hay algunos problemas de aritmética. <strong>Observe el ejercicio 1 abajo.</strong>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                            </div>
                            <div class=\"span5\">
                            </div>
                            <div class=\"span5\">
                                <strong>Respuestas</strong>
                            </div>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                                1.
                            </div>
                            <div class=\"span5\">
                                Si toma media hora hacer<br> 
                                una pieza de tela ¿Cuántas <br>
                                piezas se pueden terminar en <br>
                                ocho horas?
                            </div>
                            <div class=\"span5\">
                                A 8 piezas<br>
                                B 10 piezas<br>
                                C 16 piezas<br>
                                D 24 piezas<br>
                                E ninguna de éstas
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--En el ejercicio 1 la respuesta correcta es 16 piezas. En la columna de respuestas arriba, la letra correspondiente a 16 piezas es la C. Mire en la hoja de respuestas en la Parte 6 la casilla de práctica. Observe que en la fila para el ejercicio de práctica 1, el espacio bajo la letra C ha sido marcado.-->
                            En el ejercicio 1 la respuesta correcta es 16 piezas. La respuesta a seleccionar sería la correspondiente a 16 piezas es decir la letra C.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <strong>
                                Ahora observe el ejercicio 2.
                            </strong>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                            </div>
                            <div class=\"span5\">
                            </div>
                            <div class=\"span5\">
                                <strong>Respuestas</strong>
                            </div>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                                2.
                            </div>
                            <div class=\"span5\">
                                Si Juan gasta en alimentos la <br>
                                sexta parte de su jornal y <br>
                                gana S/. 47.40 ¿Cuánto <br>
                                gasta en alimentos?
                            </div>
                            <div class=\"span5\">
                                A S/. 5.20<br>
                                B S/. 6.90<br>
                                C S/. 7.00<br>
                                D S/. 7.60<br>
                                E ninguna de éstas<br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--En el ejercicio 2 la respuesta correcta es S/. 7.90 no figura en al columna de respuestas. Por eso la letra E es la respuesta correcta. Observe que en la fila para el ejercicio de práctica 2 el espacio bajo la letra E ha sido marcado para indicar que ninguna de las repuestas dadas es correcta.-->
                            En el ejercicio 2 la respuesta correcta es S/. 7.90  no figura entre las alternativas de respuestas. Por eso la letra E es la respuesta correcta, lo que indica que ninguna de las repuestas dadas es correcta.
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--Ahora hará los ejercicios de la práctica 3 y 4. Siga las instrucciones en cada uno. Marque el espacio bajo la letra que corresponda en la casilla de práctica de Parte 6 de la hoja de respuestas. No haga marcas en este libro. Haga sus cálculos, en el papel en blanco proporcionado. Cuando termine con estos ejercicios de práctica, pare y espere más instrucciones.-->
                            Ahora hará los ejercicios de la práctica 3 y 4. Siga las instrucciones en cada uno. 
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                            </div>
                            <div class=\"span5\">
                            </div>
                            <div class=\"span5\">
                                <strong>Respuestas</strong>
                            </div>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                                3.
                            </div>
                            <div class=\"span5\">
                                Si Tomás ganas S/. 0.75 por <br>
                                hora. ¿Cuánto gana en 5 <br>
                                horas?<br>
                            </div>
                            <div class=\"span5\">
                                A S/. 4.00<br>
                                B S/. 4.75<br>
                                C S/. 4.90<br>
                                D S/. 5.25<br>
                                E ninguna de éstas
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                            </div>
                            <div class=\"span5\">
                            </div>
                            <div class=\"span5\">
                                <strong>Respuestas</strong>
                            </div>
                        </div>
                    </div>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span1\">
                                4.
                            </div>
                            <div class=\"span5\">
                                Si a una tabla de 4 ½ pies de <br>
                                largo se le corta una pieza de<br> 
                                1 ½ pies de largo. ¿De qué <br>
                                tamaño es el resto de la tabla
                            </div>
                            <div class=\"span5\">
                                A S/. 2 pies<br>
                                B S/. 2 ½ pies<br>
                                C S/. 3 pies<br>
                                D S/. 3 ½ pies<br>
                                E ninguna de éstas
                            </div>
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
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_gatb_part5_sp_new", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba 5
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:GatbPart4SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 226,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
