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

/* @help_topics/core.appearance.html.twig */
class __TwigTemplate_8a78b2e83183a24521f01c12763428d5 extends Template
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
        // line 7
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 8
        yield "<h2>";
        yield t("What is a theme?", array());
        yield "</h2>
<p>";
        // line 9
        yield t("A <em>theme</em> is a set of files that define the visual look and feel of your site. The core software and modules that run on your site determine which content (including HTML text and other data stored in the database, uploaded images, and any other asset files) is displayed on the pages of your site. The theme determines the HTML markup and CSS styling that wraps the content. Several basic themes are supplied with the core software; additional <em>contributed themes</em> can be downloaded separately from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>, or you can create your own theme.", array());
        yield "</p>
<h2>";
        // line 10
        yield t("What is a base theme?", array());
        yield "</h2>
<p>";
        // line 11
        yield t("A base theme is a theme that is not meant to be used directly on a site, but instead acts as a scaffolding for building other themes. The core Stable 9 theme is one example; other base themes can be downloaded from the <a href=\"https://www.drupal.org/project/project_theme\">Download &amp; Extend page on drupal.org</a>.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("What is a layout?", array());
        yield "</h2>
<p>";
        // line 13
        yield t("A <em>layout</em> is a template that defines where blocks and other pieces of content should be displayed. The core Layout Discovery module allows modules and themes to register layouts, and the core Layout Builder module provides a visual interface for placing fields and blocks in layouts for entity sub-types and individual entity items (see @content_structure_topic for more on entities and fields).", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 14
        yield t("Changing site appearance overview", array());
        yield "</h2>
<p>";
        // line 15
        yield t("The main way to change the overall appearance of your site is to switch the default theme. The core Layout Builder and Layout Discovery modules allow you to define layouts for your site's content, and the core Breakpoint module helps themes change appearance for different-sized devices. See the related topics listed below for specific tasks.", array());
        yield "</p>
<h2>";
        // line 16
        yield t("Additional resources", array());
        yield "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/user_guide/en/extend-chapter.html\">";
        // line 18
        yield t("Extending and Customizing Your Site (Drupal User Guide)", array());
        yield "</a></li>
  <li><a href=\"https://www.drupal.org/docs/develop/theming-drupal\">";
        // line 19
        yield t("Theming Drupal", array());
        yield "</a></li>
</ul>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.appearance.html.twig";
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
        return array (  84 => 19,  80 => 18,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  42 => 8,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.appearance.html.twig", "/home/stage/public_html/core/modules/help/help_topics/core.appearance.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 8);
        static $filters = array("escape" => 13);
        static $functions = array("render_var" => 7, "help_topic_link" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_topic_link'],
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
