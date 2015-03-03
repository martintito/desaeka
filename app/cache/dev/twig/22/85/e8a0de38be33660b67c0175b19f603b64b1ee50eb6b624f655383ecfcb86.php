<?php

/* ::basePrint.html.twig */
class __TwigTemplate_2285e8a0de38be33660b67c0175b19f603b64b1ee50eb6b624f655383ecfcb86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<header>
    <div class=\"row-fluid\">
        <div class=\"span12 nav-m\" >
            <div class=\"row-fluid\">
            </div>
        </div>
    </div>
</header>
<article>
    ";
        // line 13
        $this->displayBlock('article', $context, $blocks);
        // line 14
        echo "</article>
<aside>
    ";
        // line 16
        $this->displayBlock('aside', $context, $blocks);
        // line 17
        echo "</aside>
";
    }

    // line 13
    public function block_article($context, array $blocks = array())
    {
    }

    // line 16
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::basePrint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  57 => 13,  52 => 17,  50 => 16,  46 => 14,  44 => 13,  33 => 4,  30 => 3,);
    }
}
