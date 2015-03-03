<?php

/* TestPmaSPBundle:PmaPart3SP:new.html.twig */
class __TwigTemplate_830b8bdb78b95adf807d224531a5958d14be9e82520618ddc010176bb9ab5d2b extends Twig_Template
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
        echo "pmapart3sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "PMA - PARTE 3";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasPmaPart3($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <div class=\"row-fluid\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_pma_part3_sp_create", array("idpmasp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart3", array()), 'widget');
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
                        <fieldset>
                            <br>
                            <br>
                            <center>
                                <div class=\"row-fluid\">
                                    <table class=\"record_properties\">
                                        <tbody>
                                            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pmaPart3DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pmaPart3DetailSP"]) {
            // line 47
            echo "                                                <tr>
                                                    <td width=\"20px\" >
                                                        <strong>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()), "html", null, true);
            echo ".</strong>
                                                    </td>
                                                    <td width=\"320px\" ALIGN=RIGHT>
                                                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "question", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td width=\"120px\">
                                                    </td>
                                                    <td width=\"300px\">
                                                        <div id=\"jaxxes_testpmaspbundle_pmapart3sp_pmaPart3DetailSPs_";
            // line 57
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()) - 1), "html", null, true);
            echo "_answer\" class=\"span12\">
                                                            <table class=\"record_properties\">
                                                                <tbody>
                                                                    <tr>
                                                                        ";
            // line 61
            $context["i"] = 0;
            // line 62
            echo "                                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "pmaPart3DetailAlternatives", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pmaPart3DetailAlternative"]) {
                // line 63
                echo "                                                                            <td width=\"10px\">
                                                                                <input type=\"radio\" id=\"jaxxes_testpmaspbundle_pmapart3sp_pmaPart3DetailSPs_";
                // line 64
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()) - 1), "html", null, true);
                echo "_answer_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" name=\"jaxxes_testpmaspbundle_pmapart3sp[pmaPart3DetailSPs][";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()) - 1), "html", null, true);
                echo "][answer]\"  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart3DetailAlternative"], "alternative", array()), "html", null, true);
                echo "\" />                
                                                                            </td>
                                                                            <td width=\"50px\">
                                                                                <label for=\"jaxxes_testpmaspbundle_pmapart3sp_pmaPart3DetailSPs_";
                // line 67
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()) - 1), "html", null, true);
                echo "_answer_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pmaPart3DetailAlternative"], "alternative", array()), "html", null, true);
                echo "</label>
                                                                            </td>
                                                                            ";
                // line 69
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 70
                echo "                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart3DetailAlternative'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </td>
                                                    <td width=\"100px\">
                                                    </td>
                                                    <td width=\"20px\" >
                                                        <strong>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pmaPart3DetailSP"], "pmaPart3Detail", array()), "number", array()), "html", null, true);
            echo "</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <td>
                                                       <legend></legend>
                                                    </td>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                    <th>
                                                        <legend></legend>
                                                    </th>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pmaPart3DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 108
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
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pmaPart3DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 119
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
        return "TestPmaSPBundle:PmaPart3SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 119,  231 => 118,  218 => 108,  211 => 103,  181 => 79,  171 => 71,  165 => 70,  163 => 69,  154 => 67,  142 => 64,  139 => 63,  134 => 62,  132 => 61,  125 => 57,  117 => 52,  111 => 49,  107 => 47,  103 => 46,  86 => 32,  76 => 25,  72 => 24,  65 => 20,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
