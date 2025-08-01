<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @help_topics/system.cache.html.twig */
class __TwigTemplate_e95e9133ddadad474362c848e0904814 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["performance_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Performance", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["performance_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["performance_link_text"] ?? null), 7, $this->source), "system.performance_settings"));
        // line 8
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 9
        yield t("Clear the data in the site cache.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What is the cache?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Some of the calculations that are done when your site loads a page take a long time to run. To save time when these calculations would need to be done again, their results can be <em>cached</em> in your site's database. There are internal mechanisms to <em>clear</em> cached data when the conditions or assumptions that went into the calculation have changed, but you can also clear cached data manually. When your site is misbehaving, a good first step is to clear the cache and see if the problem goes away.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Development</em> &gt; <em>@performance_link</em>.", array("@performance_link" => ($context["performance_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Click <em>Clear all caches</em>. Your site's cached data will be cleared.", array());
        yield "</li>
</ol>
<h2>";
        // line 17
        yield t("Additional resources", array());
        yield "</h2>
<ul>
    <li>";
        // line 19
        yield t("<a href=\"https://www.drupal.org/docs/user_guide/en/prevent-cache.html\">Concept: Cache (Drupal User Guide)</a>", array());
        yield "</li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/system.cache.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 17,  73 => 15,  69 => 14,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 8,  45 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/system.cache.html.twig", "/home/stage/public_html/core/modules/system/help_topics/system.cache.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 6);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 7, "help_route_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
