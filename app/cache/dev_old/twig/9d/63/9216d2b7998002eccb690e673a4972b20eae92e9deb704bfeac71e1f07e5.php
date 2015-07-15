<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9d639216d2b7998002eccb690e673a4972b20eae92e9deb704bfeac71e1f07e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        $this->displayBlock('user_content', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            <div class=\"fos_user_user_show\">
    <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
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
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  41 => 10,  33 => 4,  30 => 3,  25 => 20,  23 => 3,  20 => 1,);
    }
}
