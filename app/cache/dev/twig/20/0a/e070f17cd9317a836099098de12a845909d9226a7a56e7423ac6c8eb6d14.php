<?php

/* SeleccionProcesBundle:SelectionProcessCandidateTest:end.html.twig */
class __TwigTemplate_200ae070f17cd9317a836099098de12a845909d9226a7a56e7423ac6c8eb6d14 extends Twig_Template
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
        echo "seleccionprocess";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Proceso de evaluación";
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
                <br>
                <h2>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                
                <div class=\"row-fluid\">
                    <table class=\"record_properties\">
                        <tbody>
                            <tr> 
                                <td width=\"40px\" ></td>
                                <th width=\"120px\">Candidato :</th>
                                <td width=\"520px\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "candidate", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "candidate", array()), "lastName", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr> 
                                <td width=\"10px\" ></td>
                                <th  colspan=2 height=\"10px\"></th>
                            </tr>
                            <tr> 
                                <td width=\"40px\" ></td>
                                <th width=\"120px\">Cargo :</th>
                                <td width=\"520px\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                
                 <br>
                 <br>
                 <center>
                    <h3>Felicitaciones terminó todas las pruebas del proceso de selección</h3>
                 </center>
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
        return "SeleccionProcesBundle:SelectionProcessCandidateTest:end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  64 => 21,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
