<?php

/* EscudoSPBundle:Default:new.html.twig */
class __TwigTemplate_e08d7f1a910fa42b52cccbe3602d71528d8f7bacc34eed0aaba02af4328bf1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hola ";
        echo twig_escape_filter($this->env, (isset($context["idescudosp"]) ? $context["idescudosp"] : $this->getContext($context, "idescudosp")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EscudoSPBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
