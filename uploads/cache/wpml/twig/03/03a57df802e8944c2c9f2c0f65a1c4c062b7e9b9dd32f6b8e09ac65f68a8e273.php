<?php

/* section-footer.twig */
class __TwigTemplate_b64a211e4ae808757b64684f2951d9630c7edfe1b3ff3a593287dbf53d60a8f0 extends Twig_Template
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
        echo "<p class=\"wpml-ls-form-line js-wpml-ls-option\">
    <label for=\"wpml-ls-show-in-footer\">
        <input type=\"checkbox\" id=\"wpml-ls-show-in-footer\" name=\"statics[footer][show]\" value=\"1\"
               class=\"js-wpml-ls-toggle-slot js-wpml-ls-trigger-save\" data-target=\".js-wpml-ls-footer-toggle-target\"
               ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "footer", array()), "show", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "footer", array()), "show", array()), "html", null, true);
        echo "
    </label>

\t";
        // line 9
        $this->loadTemplate("save-notification.twig", "section-footer.twig", 9)->display($context);
        // line 10
        echo "</p>

<div class=\"js-wpml-ls-footer-toggle-target";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "footer", array()), "show", array()) != 1)) {
            echo " hidden";
        }
        echo "\">

\t";
        // line 14
        $context["slot_settings"] = array();
        // line 15
        echo "\t";
        $context["slot_settings"] = twig_array_merge(($context["slot_settings"] ?? null), array("footer" => $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "statics", array()), "footer", array())));
        // line 16
        echo "
\t";
        // line 17
        $this->loadTemplate("table-slots.twig", "section-footer.twig", 17)->display(array_merge($context, array("slot_type" => "statics", "slots_settings" =>         // line 20
($context["slot_settings"] ?? null), "slug" => "footer")));
        // line 24
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "section-footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  59 => 20,  58 => 17,  55 => 16,  52 => 15,  50 => 14,  43 => 12,  39 => 10,  37 => 9,  31 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "section-footer.twig", "X:\\Work\\OSPanel\\domains\\gsg.coelix.live\\wp-content\\plugins\\sitepress-multilingual-cms\\templates\\language-switcher-admin-ui\\section-footer.twig");
    }
}
