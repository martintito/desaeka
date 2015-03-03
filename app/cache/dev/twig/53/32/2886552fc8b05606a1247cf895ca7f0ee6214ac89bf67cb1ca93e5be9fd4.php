<?php

/* SeleccionProcesBundle:Default:edit.html.twig */
class __TwigTemplate_53322886552fc8b05606a1247cf895ca7f0ee6214ac89bf67cb1ca93e5be9fd4 extends Twig_Template
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

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "seleccionprocess";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Modificar el proceso de selección";
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
                <div class=\"row-fluid\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("consultor_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))));
        echo "  
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"120px\">Nombre :</th>
                                            <td width=\"520px\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
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
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "customer", array()), 'widget');
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
                                                                <th>Nombre Prueba</th>
                                                                <th>Tiempo duración</th>
                                                                <th></th>
                                                            </thead>
                                                            <tbody>
                                                                ";
        // line 52
        $context["i"] = 0;
        // line 53
        echo "                                                                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcessTests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["selectionProcessTest"]) {
            // line 54
            echo "                                                                    <tr>
                                                                        <td width=\"120px\">
                                                                            <!--";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["selectionProcessTest"], "definitionTest", array()), "name", array()), "html", null, true);
            echo "-->
                                                                            ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "selectionProcessTests", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "definitionTest", array()), 'widget');
            echo "
                                                                        </td>
                                                                        <td width=\"120px\">
                                                                            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["selectionProcessTest"], "definitionTest", array()), "time", array()), "html", null, true);
            echo " Minutos
                                                                        </td>
                                                                        <th width=\"20px\">
                                                                            
                                                                            ";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "selectionProcessTests", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "selected", array()), 'widget');
            echo "
                                                                        </th>
                                                                    </tr>
                                                                    ";
            // line 67
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 68
            echo "                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectionProcessTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                                            </tbody>
                                                        </table>
                                                    </center>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td width=\"30px\" ></td>
                                            <th colspan=2 height=\"5px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "guardar", array()), 'widget');
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </fieldset>
                        <!--";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "selectionProcessTests", array()), 'widget');
        echo "-->
                    ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                </div>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultor_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Lista de candidatos del proceso
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_definition_rol_since_select_edit", array("idseleccionprocess" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                            Editar perfil de cargo
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("consultor_portada");
        echo "\">
                            Volver al listado de proceso de selección
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
        return "SeleccionProcesBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 104,  190 => 99,  182 => 94,  175 => 90,  171 => 89,  161 => 82,  146 => 69,  140 => 68,  138 => 67,  132 => 64,  125 => 60,  119 => 57,  115 => 56,  111 => 54,  106 => 53,  104 => 52,  81 => 32,  69 => 23,  58 => 15,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
