<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9d639216d2b7998002eccb690e673a4972b20eae92e9deb704bfeac71e1f07e5 extends Twig_Template
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
        // line 2
        echo "
    <div class=\"col-lg-3 col-xs-6\" align=\"center\">
      <table id=\"lol\" >
            <tr>
                <td><label for=\"exampleInputEmail1\"> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "  </label> </td>
                <td> :  ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>
                <label for=\"exampleInputEmail1\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo " 
                </label>
            </td> 
            <td>
                :  ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "
            </td>
        </tr>
      </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  38 => 13,  29 => 7,  25 => 6,  19 => 2,);
    }
}
