<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/maintenance-page.html.twig */
class __TwigTemplate_caba1f632b540e6f47fa6893ef4988a92bbab12522f6b31f9e190cf06d5e0f3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 12, "block" => 15, "if" => 53);
        $filters = array("escape" => 50, "clean_class" => 20, "t" => 29);
        $functions = array("create_attribute" => 13, "path" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 't'],
                ['create_attribute', 'path']
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 12), "fluid_container", [], "any", false, false, true, 12)) ? ("container-fluid") : ("container"));
        // line 13
        $context["navbar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "
";
        // line 50
        echo "<main role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 50, $this->source), "html", null, true);
        echo "\">
  <div class=\"row\">
    <section class=\"col-sm-12\">
      ";
        // line 53
        if (($context["title"] ?? null)) {
            // line 54
            echo "        <h1>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 54, $this->source), "html", null, true);
            echo "</h1>
      ";
        }
        // line 56
        echo "
      ";
        // line 58
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "    </section>
  </div>
</main>
";
    }

    // line 15
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["theme"] ?? null), "settings", [], "any", false, false, true, 19), "navbar_inverse", [], "any", false, false, true, 19)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["theme"] ?? null), "settings", [], "any", false, false, true, 20), "navbar_position", [], "any", false, false, true, 20)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 20), "navbar_position", [], "any", false, false, true, 20), 20, $this->source)))) : (($context["container"] ?? null)))];
        // line 23
        echo "<header ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
  <div class=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 24, $this->source), "html", null, true);
        echo "\">
    <div class=\"row\">
      <section class=\"col-sm-12\">
        <div class=\"navbar-header\">
          ";
        // line 28
        if (($context["logo"] ?? null)) {
            // line 29
            echo "            <a class=\"logo navbar-btn pull-left\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
              <img src=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 30, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
            </a>
          ";
        }
        // line 33
        echo "
          ";
        // line 34
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 35
            echo "              ";
            if (($context["site_name"] ?? null)) {
                // line 36
                echo "                 <a class=\"name navbar-brand\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 36, $this->source), "html", null, true);
                echo "</a>
              ";
            }
            // line 38
            echo "              ";
            if (($context["site_slogan"] ?? null)) {
                // line 39
                echo "                  <p class=\"navbar-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 39, $this->source), "html", null, true);
                echo "</p>
              ";
            }
            // line 41
            echo "          ";
        }
        // line 42
        echo "        </div>
      </section>
    </div>
  </div>
</header>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        <a id=\"main-content\"></a>
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 60,  181 => 59,  177 => 58,  168 => 42,  165 => 41,  159 => 39,  156 => 38,  146 => 36,  143 => 35,  141 => 34,  138 => 33,  130 => 30,  123 => 29,  121 => 28,  114 => 24,  109 => 23,  107 => 20,  106 => 19,  105 => 17,  101 => 15,  94 => 62,  91 => 58,  88 => 56,  82 => 54,  80 => 53,  73 => 50,  70 => 48,  68 => 15,  66 => 13,  64 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/system/maintenance-page.html.twig", "/Applications/MAMP/www/IT7744/module4/drupal/themes/bootstrap/templates/system/maintenance-page.html.twig");
    }
}
