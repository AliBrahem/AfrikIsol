<?php

/* AdminBundle:User:showProfile.html.twig */
class __TwigTemplate_fa8083e6a02f29319744fccbc60abbd8b301312cd378ab0cdf689e14a242c6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutSUP.html.twig", "AdminBundle:User:showProfile.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layoutSUP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_user_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"fos_user_user_show\">
    <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</p>
</div>
        </div><!-- ./col -->

        <!-- Main row -->
        <div class=\"row\">

        </div><!-- /.row (main row) -->
    ";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:showProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
