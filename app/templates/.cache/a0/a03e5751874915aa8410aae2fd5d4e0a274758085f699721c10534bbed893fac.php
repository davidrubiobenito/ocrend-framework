<?php

/* overall/layout.twig */
class __TwigTemplate_14c1f3c39ad2baea8c2d58030dbc1ca140bea73384e725c62558f9a276527ee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    ";
        // line 5
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    ";
        // line 11
        echo "    <link href=\"views/app/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/framework.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />

    ";
        // line 16
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 19
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 22
        echo "    
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 31
        echo "    ";
        $this->displayBlock('appBody', $context, $blocks);
        // line 34
        echo "
    ";
        // line 36
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 37
            echo "      ";
            // line 38
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 40
            echo "      ";
            // line 41
            echo "      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    ";
        }
        // line 43
        echo "
    ";
        // line 45
        echo "    <script src=\"views/app/vendor/bootstrap/js/bootstrap.min.js\"></script>

    ";
        // line 48
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 51
        echo "  </body>
</html>
";
    }

    // line 19
    public function block_appHeader($context, array $blocks = array())
    {
        // line 20
        echo "      <!-- :) -->
    ";
    }

    // line 31
    public function block_appBody($context, array $blocks = array())
    {
        // line 32
        echo "      <!-- :) -->
    ";
    }

    // line 48
    public function block_appFooter($context, array $blocks = array())
    {
        // line 49
        echo "      <!-- :) -->
    ";
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  114 => 48,  109 => 32,  106 => 31,  101 => 20,  98 => 19,  92 => 51,  89 => 48,  85 => 45,  82 => 43,  78 => 41,  76 => 40,  72 => 38,  70 => 37,  67 => 36,  64 => 34,  61 => 31,  51 => 22,  48 => 19,  42 => 16,  36 => 11,  27 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall/layout.twig", "/var/www/html/GITapps/ocrend-framework/app/templates/overall/layout.twig");
    }
}
