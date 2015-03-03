<?php

/* TestGatbSPBundle:GatbPart1SP:new.html.twig */
class __TwigTemplate_94512dd0333059193cd0c0d0828d3d124abbea45fdac9ba143cb24785320e75b extends Twig_Template
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
        echo "gatbpart1sp";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GATB - Parte 1";
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
                        </font>", array("%tiempo%" => $this->env->getExtension('extension_jaxxes')->cuentaAtrasGatbPart1($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "selectionProcessCandidate", array()), "candidate", array()), "birthDate", array()))), "messages");
        // line 18
        echo "                </h1>
                <br>
                <br>
                <div class=\"row-fluid\">
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("test_gatb_part1_sp_create", array("idgatbsp" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "id", array())))));
        echo "  
                    
                        <fieldset>
                            <!--
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart1", array()), 'widget');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbSP", array()), 'widget');
        echo "
                            -->
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <th class=\"span3\">Evaluado :</th>
                                            <td class=\"span4\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbSP", array()), "html", null, true);
        echo ".</td>
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
                                        <THEAD>
                                            <tr>
                                                <th class=\"span1\">
                                                    
                                                </th>
                                                <td class=\"span4\">
                                                    
                                                </td>
                                                <th class=\"span1\">
                                                    
                                                </th>
                                                <td class=\"span4\">
                                                    
                                                </td>
                                                <td class=\"span5\">
                                                    
                                                </td>
                                            </tr>
                                        </THEAD>
                                        <tbody>
                                            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gatbPart1DetailSPs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["gatbPart1DetailSP"]) {
            // line 68
            echo "                                                <tr>
                                                    <th class=\"span1\">
                                                        <strong>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart1DetailSP"], "gatbPart1Detail", array()), "number", array()), "html", null, true);
            echo ".</strong>
                                                    </th>
                                                    <td class=\"span4\" STYLE=\"font-family: Arial; font-size: 15px; color: black\">
                                                        ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart1DetailSP"], "gatbPart1Detail", array()), "questionI", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <th class=\"span1\">
                                                        <strong>-</strong>
                                                    </th>
                                                    <td class=\"span4\" STYLE=\"font-family: Arial; font-size: 15px; color: black\">
                                                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["gatbPart1DetailSP"], "gatbPart1Detail", array()), "questionD", array()), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"span5\" height=\"20\">
                                                        <!--";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart1DetailSPs", array()), ($this->getAttribute($this->getAttribute($context["gatbPart1DetailSP"], "gatbPart1Detail", array()), "number", array()) - 1), array(), "array"), "equal", array()), 'widget');
            echo "-->
                                                        ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart1DetailSPs", array()), ($this->getAttribute($this->getAttribute($context["gatbPart1DetailSP"], "gatbPart1Detail", array()), "number", array()) - 1), array(), "array"), "answer", array()), 'widget');
            echo "
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
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatbPart1DetailSP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                        </tbody>
                                        <TFOOT>
                                            <tr>
                                                <th></th>
                                                <th COLSPAN=3 ALIGN=LEFT>
                                                    ";
        // line 109
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
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gatbPart1DetailSPs", array()), 'widget');
        echo "-->
                    ";
        // line 120
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
        return "TestGatbSPBundle:GatbPart1SP:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 120,  204 => 119,  191 => 109,  184 => 104,  157 => 83,  153 => 82,  147 => 79,  138 => 73,  132 => 70,  128 => 68,  124 => 67,  88 => 34,  78 => 27,  74 => 26,  67 => 22,  61 => 18,  57 => 13,  53 => 12,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
