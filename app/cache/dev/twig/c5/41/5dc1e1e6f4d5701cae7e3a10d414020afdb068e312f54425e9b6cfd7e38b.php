<?php

/* RolBundle:Default:index.html.twig */
class __TwigTemplate_c5415dc1e1e6f4d5701cae7e3a10d414020afdb068e312f54425e9b6cfd7e38b extends Twig_Template
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
        echo "rol";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de roles";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<!--<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>-->
<div id=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"span12 content\">
            <div class=\"row-fluid\">
                <div class=\"span5\">
                    <h2>";
        // line 13
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
                </div>
                <div class=\"span7\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("rol_new");
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                        <i class=\"icon-plus icon-large\"></i>
                    </a>
                </div>\t
            </div>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nivel", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "RolBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  100 => 38,  94 => 35,  90 => 34,  86 => 33,  83 => 32,  79 => 31,  61 => 16,  55 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
