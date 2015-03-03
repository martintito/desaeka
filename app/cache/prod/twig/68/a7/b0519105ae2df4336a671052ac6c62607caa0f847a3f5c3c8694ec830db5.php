<?php

/* TestGatbSPBundle:GatbPart5SP:show.html.twig */
class __TwigTemplate_68a7b0519105ae2df4336a671052ac6c62607caa0f847a3f5c3c8694ec830db5 extends Twig_Template
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
        echo "gatbpart5sp";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Finalizó las 5 pruebas del GATB";
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
                <h2>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Test :</th>
                                <td class=\"span4\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart5", array()), "html", null, true);
        echo ".</td>
                            </tr>
                            <tr>
                                <th class=\"span3\">Evaluado :</th>
                                <td class=\"span4\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "html", null, true);
        echo ".</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <center>
                    <h3>Felicitaciones terminó la prueba GATB</h3>
                </center>
                <br>
                <div class=\"row-fluid\">
                    <ul class=\"record_actions\">
                        <li>
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_next", array("codetest" => "GTB"));
        echo "\">
                                Siguiente
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestGatbSPBundle:GatbPart5SP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  70 => 24,  63 => 20,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
