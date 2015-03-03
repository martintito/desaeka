<?php

/* SeleccionProcesBundle:SelectionProcessCandidateTest:show.html.twig */
class __TwigTemplate_dc754b6e457aad8f7f43e56075409d7c9a1a73400e03366f1b7ee752dd6b2b57 extends Twig_Template
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
                <div class=\"row-fluid\">
                    <div class=\"span1\"></div>
                    <div class=\"span9\">
                        <div class=\"span9\">
                            <h4>Listado de pruebas a realizar</h4>
                        </div>
                    </div>
                </div>
                <div class=\"row-fluid\">
                    <div class=\"span1\"></div>
                    <div class=\"span5\">
                        <table class=\"table table-striped\">
                            <thead>
                                <tr>
                                    <th class=\"span7\">Prueba</th>
                                    <th class=\"span7\">Tiempo</th>
                                    <th class=\"span2\">Realizado</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectionProcessCandidateTests"]) ? $context["selectionProcessCandidateTests"] : $this->getContext($context, "selectionProcessCandidateTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["selectionProcessCandidateTest"]) {
            // line 58
            echo "                                <tr>
                                    <td class=\"span7\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["selectionProcessCandidateTest"], "selectionProcessTest", array()), "definitionTest", array()), "name", array()), "html", null, true);
            echo "</td>
                                    <td class=\"span7\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["selectionProcessCandidateTest"], "selectionProcessTest", array()), "definitionTest", array()), "time", array()), "html", null, true);
            echo " minutos</td>
                                    <td class=\"span7\">
                                        ";
            // line 62
            if ($this->getAttribute($context["selectionProcessCandidateTest"], "realized", array())) {
                // line 63
                echo "                                            <img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "check.jpg")), "html", null, true);
                echo "\">
                                        ";
            } else {
                // line 65
                echo "                                            <img alt=\"Fotografía\"  width=\"20px\" height=\"10px\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes_jaxxes"]) ? $context["directorio_imagenes_jaxxes"] : $this->getContext($context, "directorio_imagenes_jaxxes")) . "menos.jpg")), "html", null, true);
                echo "\">
                                        ";
            }
            // line 67
            echo "                                    </td>
                                    
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectionProcessCandidateTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <br>
                <br>
                
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("sp_candidato_test_make");
        echo "\">
                            Resolver Prueba
                        </a>
                    </li>
                </ul>
                
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
        return "SeleccionProcesBundle:SelectionProcessCandidateTest:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 81,  147 => 71,  138 => 67,  132 => 65,  126 => 63,  124 => 62,  119 => 60,  115 => 59,  112 => 58,  108 => 57,  78 => 30,  64 => 21,  53 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
