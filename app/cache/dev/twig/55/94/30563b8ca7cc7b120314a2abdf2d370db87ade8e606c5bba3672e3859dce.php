<?php

/* RolBundle:Default:new.html.twig */
class __TwigTemplate_559430563b8ca7cc7b120314a2abdf2d370db87ade8e606c5bba3672e3859dce extends Twig_Template
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
        echo "rol";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de Rol";
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
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("rol_create")));
        echo "  
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"120px\">Nombre :</th>
                                            <td width=\"720px\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"120px\">Descripción :</th>
                                            <td width=\"720px\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"120px\">Nivel :</th>
                                            <td width=\"720px\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nivel", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("rol_homepage");
        echo "\">
                            Volver al listado
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
        return "RolBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  115 => 56,  106 => 50,  94 => 41,  82 => 32,  70 => 23,  59 => 15,  52 => 11,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
