<?php

/* TestICESPBundle:ICESP:show.html.twig */
class __TwigTemplate_24caee45452771f394cc662f7fd558b93c17319e96146762c8dd90e018b3b314 extends Twig_Template
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
        echo "Prueba Final ";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12 content\">
                <h2>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th class=\"span3\">Gracias por Responder</th>
                                <td class=\"span4\">Gracias por completar la entrevista</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div class=\"row-fluid\">
                    <ul class=\"record_actions\">
                        <li>
                            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_next", array("codetest" => "ICE"));
        echo "\">
                                Siguiente prueba
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestICESPBundle:ICESP:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
