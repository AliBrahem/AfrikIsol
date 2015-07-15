<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_17c5e97e51f481cab14383477853c1fab2cbe9ad40cca725b79787e552c0e2d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::login.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "

    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\"><b>    <h3 align=\"center\"> Connectez-vous</h3> </b>    </p>
            <br>
            <div class=\"form-group has-feedback\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <input type=\"text\" id=\"username\" placeholder=\"Nom d'utilisateur\" class=\"form-control\"  name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\"/>
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>

            <div class=\"row\">
                <div class=\"col-xs-8\">    
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </div>                        
                </div><!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                </div><!-- /.col -->
            </div> 
            ";
        // line 35
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 36
            echo "                <div><h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</h3></div>
            ";
        }
        // line 38
        echo "        </div>

    </form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  81 => 36,  79 => 35,  71 => 32,  63 => 27,  47 => 14,  43 => 13,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }
}
