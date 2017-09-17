<?php

/* home/home.twig */
class __TwigTemplate_d69d36ebfc810ec97a29e80e139feab5e4ecbf3108a3c5c16dad689c262c96b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "   <div class=\"container\">
        <div class=\"ocrend ocrend-as-html\">
            <table class=\"ocrend-details\">
                <thead class=\"ocrend-head\"><tr><th>
                    <h3 class=\"ocrend-class\">
                        <span>Bienvenido</span>
                    </h3>
                </th></tr></thead>
                <tbody>
                    <tr>
                        <td>
                            <span class=\"block ocrend-file-path\">Bienvenido a su primera aplicación con <b>Ocrend Framework 2</b></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class=\"block ocrend-file-path\"><a href=\"http://framework.ocrend.com/\" target=\"_blank\">Visitar la documentación oficial</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class=\"block ocrend-file-path\"><a href=\"https://github.com/prinick96/Ocrend-Framework\" target=\"_blank\">Visitar el repositorio</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class=\"block ocrend-file-path\"><a href=\"https://www.youtube.com/playlist?list=PLDQZoQpLCoUAlWmnF8-b4KUT3-lzXAn4i\" target=\"_blank\">Video Documentación y Tutoriales</a></span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
   </div>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/home.twig", "/var/www/html/GITapps/ocrend-framework/app/templates/home/home.twig");
    }
}
