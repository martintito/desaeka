<?php

/* TestPmaSPBundle:PmaPart4SP:show.html.twig */
class __TwigTemplate_08a8fb8735419bb20541abcebf3578659208f362ad7e79e5da1a9d6aa888d6f1 extends Twig_Template
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
        echo "Prueba PMA ";
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
                                <th class=\"span3\">Evaluado : </th>
                                <td class=\"span4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo ".</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Test Finalizado : </th>
                                <td class=\"span4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart4", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                
                <div class=\"row-fluid\">
                    <center>
                    
                        <h1>FACTOR F</h1>
                    </center>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Observe la lista de palabras que sigue. Cada una de ellas empieza por d.
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            <table class=\"record_properties\">
                                <tbody>
                                    <tr>
                                        <th class=\"span5\"></th>
                                        <td class=\"span4\">
                                            1. diente.<br>
                                            2. dado.<br>
                                            3. decir.<br>
                                            4. Danubio.<br>
                                            5. dinamita.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>                   
                    <div class=\"row-fluid\">
                        <div class=\"span2\">
                        </div>
                        <div class=\"span9\" STYLE=\"font-family: Arial; font-size: 18px; color: black\">
                            Asegúrese de que entiende lo que tiene que hacer. Cuando se dé la señal, se le indicará otra letra. Escribirá usted todas las palabras que se le ocurran empezando por esa letra.
\t\t\t\t\t\t\t<br>
                            Si alguna palabra no sabe como se escribe, escríbala lo mejor que sepa, y siga sin pararse.
                            <br>
                            Escriba las palabras lo más rápido que pueda.
                            <br>
                            <br>
                            Tendrá CINCO MINUTOS para toda la prueba.
                            <br>
                            Escribirá una palabra en cada renglón, por orden de numeración.
                            <br>
                            No pare de escribir, hasta que acabe el tiempo.
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_pma_part5_sp_new", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array()))), "html", null, true);
        echo "\">
                                        Empezar Prueba Factor F
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
        return "TestPmaSPBundle:PmaPart4SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 92,  68 => 22,  61 => 18,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
