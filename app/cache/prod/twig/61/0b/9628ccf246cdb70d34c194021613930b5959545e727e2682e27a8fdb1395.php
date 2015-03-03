<?php

/* TestPmaSPBundle:PmaPart3SP:show.html.twig */
class __TwigTemplate_610b9628ccf246cdb70d34c194021613930b5959545e727e2682e27a8fdb1395 extends Twig_Template
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
        echo "pmapart3sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba 3 ";
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
                                <th class=\"span3\">Evaluado</th>
                                <td class=\"span4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado</th>
                                <td class=\"span4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart3", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"row-fluid\">
                    <center>
                        <h1>FACTOR N</h1>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            A la derecha hay dos sumas. Repáselas para comprobar si están bien
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <table class=\"record_properties\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <tbody>
                                <tr>
                                    <td width=\"700px\"></td>
                                    <td width=\"10px\"><legend>(a)</legend></td>
                                    <td width=\"40px\"></td>
                                    <td width=\"10px\"><legend>(b)</legend></td>
                                    <td width=\"80px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                </tr>
                                <tr>
                                    <td width=\"500px\"></td>
                                    <td width=\"10px\">16</td>
                                    <td width=\"40px\"></td>
                                    <td width=\"10px\">42</td>
                                    <td width=\"80px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                </tr>
                                <tr>
                                    <td width=\"500px\"></td>
                                    <td width=\"10px\">38</td>
                                    <td width=\"40px\"></td>
                                    <td width=\"10px\">61</td>
                                    <td width=\"80px\"></td>
                                    <td width=\"30px\">(a)</td>
                                    <td width=\"30px\">B</td>
                                    <td width=\"30px\">M</td>
                                </tr>
                                <tr>
                                    <td width=\"500px\"></td>
                                    <td width=\"10px\"><legend>45</legend></td>
                                    <td width=\"40px\"></td>
                                    <td width=\"10px\"><legend>83</legend></td>
                                    <td width=\"80px\"></td>
                                    <td width=\"30px\">(b)</td>
                                    <td width=\"30px\">B</td>
                                    <td width=\"30px\">M</td>
                                </tr>
                                <tr>
                                    <td width=\"500px\"></td>
                                    <td width=\"10px\">99</td>
                                    <td width=\"40px\"></td>
                                    <td width=\"10px\">176</td>
                                    <td width=\"80px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                    <td width=\"30px\"></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            La suma (a) está BIEN. Por eso se subraya la B en el margen.
                            <br>
                            <br>
                            La suma (b) está MAL. Por eso se subraya la M en el margen.
                            <br>
                            <br>
                            <br>
                            Ahora revise las sumas que siguen debajo. Si la respuesta está BIEN, seleccione la letra B, si está MAL seleccione  la M.
                            <br>
                            <br>
                            Tendrá usted que resolver otros semejantes. Trabaje de prisa, pero cuidando  no equivocarse. Tendrá SEIS MINUTOS para toda la prueba, si no termina, no se preocupe; es lo corriente..
                            <br>
                            <br>
                        </div>
                    </div>
                    
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\">
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_pma_part4_sp_new", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array()))), "html", null, true);
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
        return "TestPmaSPBundle:PmaPart3SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 127,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
