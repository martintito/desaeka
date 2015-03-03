<?php

/* TestPmaSPBundle:PmaPart5SP:new.html.twig */
class __TwigTemplate_d153489fbf0da22ff06694691813232a692f56cda374e08632f64eede187eebe extends Twig_Template
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

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "pmapart5sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PMA - PARTE 5";
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
                <h1>
                    ";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "
                    ";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("<font size=\"5\" color=\"#6699CC\">
                            (Tiempo corriendo, faltan: %tiempo%)
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasPmaPart5($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_pma_part5_sp_create", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart5", array()), 'widget');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaSP", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado</th>
                                            <td class=\"span4\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        
                        <HR size=\"4\">
                        <fieldset>
                            <div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<h3>Letra: ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["letra"]) ? $context["letra"] : $this->getContext($context, "letra")), "html", null, true);
        echo "</h3>
                            </div>
                        </fieldset>
                        <HR size=\"4\">
                        
                        <br>
                            <br>
                      <!--  <fieldset>
                            <center>
\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <tbody>-->
                                        
\t\t\t\t\t\t\t\t<!--<table class=\"record_properties\">-->
\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        $context["i"] = 0;
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>";
            // line 62
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo ".</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart5DetailSPs", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), 'widget');
            echo "</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 67
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + (isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux"))) < (isset($context["tamano"]) ? $context["tamano"] : $this->getContext($context, "tamano")))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1) + (isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux"))), "html", null, true);
                echo ".</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 69
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart5DetailSPs", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + (isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux"))), array(), "array"), 'widget');
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"span3\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            if ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + ((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) * 2)) < (isset($context["tamano"]) ? $context["tamano"] : $this->getContext($context, "tamano")))) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 75
                echo twig_escape_filter($this->env, (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1) + ((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) * 2)), "html", null, true);
                echo ".</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 76
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart5DetailSPs", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + ((isset($context["aux"]) ? $context["aux"] : $this->getContext($context, "aux")) * 2)), array(), "array"), 'widget');
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 80
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<br> 
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--</table>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<TFOOT>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th COLSPAN=3 ALIGN=LEFT>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</TFOOT>
                                    <!--</table>
                                </div>
                            </center>
                        </fieldset>-->
                        <!--";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart5DetailSPs", array()), 'widget');
        echo "-->
                        
                    ";
        // line 102
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TestPmaSPBundle:PmaPart5SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 102,  207 => 100,  196 => 92,  186 => 84,  178 => 81,  176 => 80,  172 => 78,  167 => 76,  163 => 75,  159 => 74,  154 => 71,  149 => 69,  145 => 68,  141 => 67,  134 => 63,  130 => 62,  126 => 60,  122 => 59,  118 => 58,  100 => 43,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
