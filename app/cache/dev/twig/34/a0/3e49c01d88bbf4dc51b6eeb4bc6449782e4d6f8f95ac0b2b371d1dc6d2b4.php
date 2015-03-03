<?php

/* TestGatbSPBundle:GatbPart3SP:show.html.twig */
class __TwigTemplate_34a03e49c01d88bbf4dc51b6eeb4bc6449782e4d6f8f95ac0b2b371d1dc6d2b4 extends Twig_Template
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
        echo "gatbpart3sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba 3 Gatb ";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart3", array()), "html", null, true);
        echo ".</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"row-fluid\">
                    <center>
                        <h2>PARTE 4</h2>
                        <h3>INSTRUCCIONES</h3>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            En esta página hay algunos ejercicios que consisten en buscar las dos palabras que tengan sentidos IGUALES U OPUESTOS.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <strong>
                                Observe el ejercicio 1.
                            </strong>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span2\">
                                1.
                            </div>
                            <div class=\"span2\">
                                a. grande
                            </div>
                            <div class=\"span2\">
                                b. enorme
                            </div>
                            <div class=\"span2\">
                                c. seco
                            </div>
                            <div class=\"span2\">
                                d. despacio
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--
                            <strong>GRANDE Y ENORME</strong>, 
                            tienen el 
                            <strong>MISMO </strong>
                            sentido. La letra para grande es 
                            <strong>a </strong>
                            y la letra para enorme es la 
                            <strong>b</strong>
                            . Ahora gire su hoja de respuestas y mire la parte de la hoja que dice Parte 4 Práctica. Observe en la fila para ejercicio de práctica 1 el espacio bajo la letra a-b ha sido marcado.
                            -->
                            
                            <strong>GRANDE Y ENORME</strong>, 
                            tienen el 
                            <strong>MISMO </strong> 
                            sentido. La letra para grande es <strong>a </strong> y la letra para enorme es la <strong>b</strong> . 
                            Ahora la respuesta a la pregunta sería \"respuestas a-b\".
                        </div>
                    </div>
                    <br>
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
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span2\">
                                2.
                            </div>
                            <div class=\"span2\">
                                a. triste
                            </div>
                            <div class=\"span2\">
                                b. leal
                            </div>
                            <div class=\"span2\">
                                c. antiguo
                            </div>
                            <div class=\"span2\">
                                d. desleal
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--
                            <strong>LEAL y DESLEAL</strong>, 
                            tienen significados 
                            <strong>OPUESTOS</strong>. 
                            La letra leal es la 
                            <strong>b </strong>
                            y la letra para desleal es la 
                            <strong>d</strong>
                             Por eso se a marcado el espacio bajo las letras b-d en la fila para ejercicio de Practica 2 en la hoja de respuestas.
                             -->
                             
                             <strong>LEAL y DESLEAL</strong>, 
                             tienen significados 
                             <strong>OPUESTOS</strong>. 
                             La letra leal es la <strong>b </strong> y la letra para desleal es la <strong>d</strong> 
                             Por eso la respuesta a la pregunta sería \"respuestas  b-d\".
                        </div>
                    </div>
                    <br>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <!--
                            Aquí hay algunos ejercicios de práctica. En cada ejercicio busque las dos palabras que tengan significados 
                            <strong>IGUALES</strong> o significados 
                            <strong>OPUESTOS</strong>. 
                            Después marque el espacio bajo la combinación de letras que corresponden en la hoja de respuesta para la 
                            <strong>Parte 4 Práctica</strong>. 
                            No haga marcas en este libro. Haga marcas claras en los espacios de respuestas.
                            -->
                            
                            Aquí hay algunos ejercicios de práctica. En cada ejercicio busque las dos palabras que tengan significados 
                            <strong>IGUALES</strong> o significados 
                            <strong>OPUESTOS</strong>. 
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span2\">
                                3.
                            </div>
                            <div class=\"span2\">
                                a. suave
                            </div>
                            <div class=\"span2\">
                                b. correcto
                            </div>
                            <div class=\"span2\">
                                c. equivocado
                            </div>
                            <div class=\"span2\">
                                d. similar
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span2\">
                                4.
                            </div>
                            <div class=\"span2\">
                                a. abierto
                            </div>
                            <div class=\"span2\">
                                b. caer
                            </div>
                            <div class=\"span2\">
                                c. comenzar
                            </div>
                            <div class=\"span2\">
                                d. terminar
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <div class=\"span2\">
                                5.
                            </div>
                            <div class=\"span2\">
                                a. entretenido
                            </div>
                            <div class=\"span2\">
                                b. menudo
                            </div>
                            <div class=\"span2\">
                                c. torpe
                            </div>
                            <div class=\"span2\">
                                d. gracioso
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
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_gatb_part4_sp_new", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba 4
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
        return "TestGatbSPBundle:GatbPart3SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 247,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
