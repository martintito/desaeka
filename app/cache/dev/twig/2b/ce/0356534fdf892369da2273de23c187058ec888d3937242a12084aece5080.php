<?php

/* RavenSPBundle:Default:instruc.html.twig */
class __TwigTemplate_2bce0356534fdf892369da2273de23c187058ec888d3937242a12084aece5080 extends Twig_Template
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
        echo "pmapart4sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba RAVEN";
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
                    <center>
                    
                        <h1>BIENVENIDO AL TEST RAVEN</h1>
                    </center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>                   
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
\t\t\t\t\t\t\tEl Test consiste en decidir cual a tu criterio es la figura que resta en las placas que se te mostrarán.
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\tDisponés de 45 minutos para resolver las 60 placas del test.
                            <br>
\t\t\t\t\t\t\tEste Test es en su 100% el famoso Test de Raven para medir la inteligencia.
                            <br>
                            <br>
\t\t\t\t\t\t\tAl finalizar las placas obtendrás tu coeficiente intelectual en base a los valores estadisticos para su edad                            
\t\t\t\t\t\t\t<br>                            
                            <br>                            
                        </div>
                    </div>
                    <br>
                    <br>                   
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("rv_new");
        echo "\">
                                        Empezar la prueba
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
        return "RavenSPBundle:Default:instruc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
