<?php

/* SeleccionProcesBundle:SelectionProcessCandidate:edit.html.twig */
class __TwigTemplate_66a668b8e2322dfb2cf6279c9b8cbc4785e89f3dab4d2d459f17028361548b5c extends Twig_Template
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
        echo "selectionprocesscandidate";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Modificar Candidato";
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
                <h1>";
        // line 12
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
                <br>
                <br>
                <div class=\"row-fluid\">
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("sp_candidato_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))));
        echo "  
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
                        
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"180px\">Proceso de Selección :</th>
                                            
                                            <td width=\"720px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"180px\">Candidato :</th>
                                            <td width=\"720px\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidate", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"180px\">Usuario :</th>
                                            <td width=\"720px\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userCandidate", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                       
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>

                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"180px\">Activo :</th>
                                            <td width=\"720px\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "active", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "guardar", array()), 'widget');
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                </div>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("consultor_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "selectionProcess", array()), "id", array()))), "html", null, true);
        echo "\">
                            Cancelar
                        </a>
                    </li>
                    <!--
                    <li>
                        <form action=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                            <button type=\"submit\">Borrar rol</button>
                        </form>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SeleccionProcesBundle:SelectionProcessCandidate:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 86,  155 => 85,  146 => 79,  139 => 75,  130 => 69,  118 => 60,  100 => 45,  88 => 36,  76 => 27,  63 => 17,  59 => 16,  52 => 12,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
