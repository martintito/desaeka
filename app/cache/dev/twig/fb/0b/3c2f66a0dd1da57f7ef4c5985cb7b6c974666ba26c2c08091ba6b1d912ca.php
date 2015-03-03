<?php

/* CandidateBundle:Default:new.html.twig */
class __TwigTemplate_fb0b3c2f66a0dd1da57f7ef4c5985cb7b6c974666ba26c2c08091ba6b1d912ca extends Twig_Template
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
        echo "candidate";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Definición de candidato";
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("candidate_create")));
        echo "  
                        <fieldset>
                            <div class=\"row-fluid\">
                                <table class=\"record_properties\">
                                    <tbody>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"150px\">Nombre :</th>
                                            <td width=\"720px\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"150px\">Apellido :</th>
                                            <td width=\"720px\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th  colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"150px\">Género :</th>
                                            <td width=\"720px\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"150px\">Fecha Nacimiento :</th>
                                            <td width=\"720px\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthDate", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr>
\t\t\t\t\t\t\t\t\t\t\t<td width=\"40px\" ></td>
                                            <th width=\"150px\"></th>
                                            <td width=\"720px\" style=\"color:blue\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th width=\"150px\">Correo Electrónico :</th>
                                            <td width=\"720px\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                                        </tr>
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <th colspan=2 height=\"10px\"></th>
                                        </tr>
                                        
                                        <tr> 
                                            <td width=\"40px\" ></td>
                                            <td colspan=2 >";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guardar", array()), 'widget');
        echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    
                </div>
                <br>
                <ul class=\"record_actions\">
                    <li>
                        <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("candidate_homepage");
        echo "\">
                            Volver al listado de candidatos
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
        return "CandidateBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 85,  147 => 79,  138 => 73,  126 => 64,  114 => 55,  106 => 50,  94 => 41,  82 => 32,  70 => 23,  59 => 15,  52 => 11,  45 => 6,  42 => 5,  36 => 3,  30 => 2,);
    }
}
