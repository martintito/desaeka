<?php

/* TestPmaSPBundle:PmaPart1SP:new.html.twig */
class __TwigTemplate_1aa94f003872eab517115bdd0727b4954f62fe90a88a4a8d25c84ecbf458989f extends Twig_Template
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
        echo "pmapart1sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PMA - PARTE 1";
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
                <h1>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "
                    ";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("<font size=\"5\" color=\"#6699CC\">
                            (Tiempo corriendo, faltan: %tiempo%)
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasPmaPart1($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 17
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_pma_part1_sp_create", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart1", array()), 'widget');
        echo "
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaSP", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado</th>
                                            <td class=\"span4\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <br>
                            <br>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <tbody>
                                            ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart1DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pmaPart1DetailSP"]) {
            // line 46
            echo "                                                <tr>
                                                    <td class=\"span1\" >
                                                        <strong>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "number", array()), "html", null, true);
            echo ".</strong>
                                                    </td>
                                                    <td class=\"span3\">
                                                        <strong>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "word", array()), "html", null, true);
            echo "</strong>
                                                    </td>
                                                    <td class=\"span2\">
                                                        A. ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "fieldA", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        B. ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "fieldB", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        C. ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "fieldC", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span2\">
                                                        D. ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "fieldD", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span3\">
                                                        ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart1DetailSPs", array()), ($this->getAttribute($this->getAttribute($context["pmaPart1DetailSP"], "pmaPart1Detail", array()), "number", array()) - 1), array(), "array"), "answer", array()), 'widget');
            echo "
                                                    </td>
                                                </tr>
                                                
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart1DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "
                                                </th>
                                                
                                            </tr>
                                        </TFOOT>
                                    </table>
                                </div>
                                
                            </center>
                        </fieldset>
                        <!--";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart1DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 87
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
        return "TestPmaSPBundle:PmaPart1SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 87,  177 => 86,  164 => 76,  157 => 71,  146 => 66,  140 => 63,  134 => 60,  128 => 57,  122 => 54,  116 => 51,  110 => 48,  106 => 46,  102 => 45,  85 => 31,  75 => 24,  71 => 23,  64 => 19,  60 => 17,  56 => 12,  52 => 11,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
