<?php

/* /setup/store-pages.twig */
class __TwigTemplate_f19a7b59db238f3218014eda5b441e3c2ea8946ebead8176cff674b8e50972d3 extends Twig_Template
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
        echo "<span id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "step_id", array()), "html", null, true);
        echo "\">
<h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "heading", array()), "html", null, true);
        echo "</h1>

<p>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "description", array()), "html", null, true);
        echo "</p>

";
        // line 6
        echo ($context["store_pages"] ?? null);
        echo "

<p class=\"wcml-setup-actions step\">
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["continue_url"] ?? null), "html", null, true);
        echo "\" class=\"button button-primary button-large submit\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["strings"] ?? null), "continue", array()), "html", null, true);
        echo "</a>
</p>
</span>";
    }

    public function getTemplateName()
    {
        return "/setup/store-pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/setup/store-pages.twig", "X:\\Work\\OSPanel\\domains\\gsg.coelix.live\\wp-content\\plugins\\woocommerce-multilingual\\templates\\setup\\store-pages.twig");
    }
}
