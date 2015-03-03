<?php

/* CandidateBundle:Default:index.html.twig */
class __TwigTemplate_7aa84298172230a6d21ddbc009e2dc00395fe8b5155791ae84481a8726d22346 extends Twig_Template
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
        echo "candidate";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de candidatos";
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
        echo $this->env->getExtension('routing')->getPath("candidate_new");
        echo "\" class=\"btn btn-primary add\"  title=\"Agregar\" >
                        <i class=\"icon-plus icon-large\"></i>
                    </a>
                </div>\t
            </div>
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Género</th>
                        <th>Fecha Nacimiento</th>
                        <th>Correo Electrónico</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 38
            if (($this->getAttribute($context["entity"], "gender", array()) == "m")) {
                // line 39
                echo "                                Masculino
                            ";
            } else {
                // line 41
                echo "                                Femenino
                            ";
            }
            // line 43
            echo "                        </td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "birthDate", array()), "d / m / Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("candidate_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"edit btn btn-warning\" title=\"Editar\"><i class=\"icon-large icon-edit\"></i></a>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CandidateBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  120 => 48,  114 => 45,  110 => 44,  107 => 43,  103 => 41,  99 => 39,  97 => 38,  92 => 36,  88 => 35,  85 => 34,  81 => 33,  61 => 16,  55 => 13,  45 => 7,  42 => 6,  36 => 4,  30 => 3,);
    }
}
