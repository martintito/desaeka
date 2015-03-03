<?php

/* SeleccionProcesBundle:Default:new.html.twig */
class __TwigTemplate_f8e0af08cceded6eda443e2d23d71e1c8898a2b8d7f5f2273a18b1d3cfda061d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::consultor.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::consultor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "seleccionprocess";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de Proceso de Selección";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <div class=\"row-fluid\">
                    <div class=\"span12 content\">
                        <br>
                        <h1>";
        // line 14
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                        <br>
                        <div class=\"row-fluid\">
                            
                            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("consultor_create")));
        echo "  
                                <fieldset>
                                    <div class=\"row-fluid\">
                                        <table class=\"record_properties\">
                                            <tbody>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <th width=\"120px\">Nombre :</th>
                                                    <td width=\"520px\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>
                                                </tr>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <th  colspan=2 height=\"10px\"></th>
                                                </tr>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <th width=\"120px\">Cliente :</th>
                                                    <td width=\"520px\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "customer", array()), 'widget');
        echo "</td>
                                                </tr>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <th colspan=2 height=\"10px\"></th>
                                                </tr>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <th width=\"120px\">Pruebas :</th>
                                                    <td width=\"520px\">
                                                        
                                                        <div class=\"span11\">
                                                            <center>
                                                                <table class=\"table table-striped\" width=\"400px\">
                                                                    <thead>
                                                                        <th>Nombre Prueba2</th>
                                                                        <th>Tiempo duración</th>
                                                                        <th></th>
                                                                    </thead>
                                                                    <tbody>
                                                                        ";
        // line 55
        $context["i"] = 0;
        // line 56
        echo "                                                                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessTests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["selectionProcessTest"]) {
            // line 57
            echo "                                                                            <tr>
                                                                                <td width=\"120px\">
                                                                                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["selectionProcessTest"], "definitionTest", array()), "name", array()), "html", null, true);
            echo "
                                                                                </td>
                                                                                <td width=\"120px\">
                                                                                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["selectionProcessTest"], "definitionTest", array()), "time", array()), "html", null, true);
            echo " Minutos
                                                                                </td>
                                                                                <th width=\"20px\">
                                                                                    ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectionProcessTests", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "selected", array()), 'widget');
            echo "
                                                                                </th>
                                                                            </tr>
                                                                            ";
            // line 68
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 69
            echo "                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectionProcessTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                                                    </tbody>
                                                                </table>
                                                            </center>
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
                                                
                                                ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAtributo"]) ? $context["formAtributo"] : $this->getContext($context, "formAtributo")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("consultor_create")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"40px\" ></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"120px\">Letra :</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td width=\"520px\">
                                                        
                                                        <div class=\"span11\">
                                                            <center>
                                                                <table class=\"table table-striped\" width=\"400px\">
                                                                    <thead>
                                                                        <th>Letra seleccionada</th>
                                                                        <th>Condicion</th>
                                                                    </thead>
                                                                    <tbody>
                                                                            <tr>
                                                                                <td width=\"80px\">
                                                                                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAtributo"]) ? $context["formAtributo"] : $this->getContext($context, "formAtributo")), "letra", array()), 'widget');
        echo "
                                                                                </td>
                                                                                <td width=\"60px\">
                                                                                    Seleccion valida en caso de elegir la prueba PMA
                                                                                </td>
                                                                            </tr>
                                                                    </tbody>
                                                                </table>
                                                            </center>
                                                        </div>
                                                    </td>
                                                </tr>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 106
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAtributo"]) ? $context["formAtributo"] : $this->getContext($context, "formAtributo")), 'form_end');
        echo "
                                                
                                                
                                                
                                                
                                                
                                                <tr> 
                                                    <td width=\"30px\" ></td>
                                                    <th colspan=2 height=\"20px\"></th>
                                                </tr>
                                                <tr> 
                                                    <td width=\"40px\" ></td>
                                                    <td colspan=2 >";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=\"row-fluid\">
\t\t\t\t\t\t\t
                        </div>
                                    
                                    
                                    
                                    
                                </fieldset>
                                <!--";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "selectionProcessTests", array()), 'widget');
        echo "-->
                            ";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        
                        
                        
                        <ul class=\"record_actions\">
                            <li>
                                <a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("consultor_portada");
        echo "\">
                                    Volver al Listado de Proceso de Selección
                                </a>
                            </li>
                        </ul>
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
        return "SeleccionProcesBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 139,  224 => 132,  220 => 131,  204 => 118,  189 => 106,  174 => 94,  155 => 78,  145 => 70,  139 => 69,  137 => 68,  131 => 65,  125 => 62,  119 => 59,  115 => 57,  110 => 56,  108 => 55,  85 => 35,  73 => 26,  62 => 18,  55 => 14,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
