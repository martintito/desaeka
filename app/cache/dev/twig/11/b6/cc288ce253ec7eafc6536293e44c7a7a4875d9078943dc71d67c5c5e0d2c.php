<?php

/* RavenSPBundle:Default:show.html.twig */
class __TwigTemplate_11b6cc288ce253ec7eafc6536293e44c7a7a4875d9078943dc71d67c5c5e0d2c extends Twig_Template
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
        echo "Prueba ";
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
                                <th class=\"span3\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</th>
                                
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
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_next", array("codetest" => "RVN"));
        echo "\">
                                Siguiente
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
        return "RavenSPBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 29,  55 => 18,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
