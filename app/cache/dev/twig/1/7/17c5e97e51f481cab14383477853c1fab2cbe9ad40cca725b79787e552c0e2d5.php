<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_17c5e97e51f481cab14383477853c1fab2cbe9ad40cca725b79787e552c0e2d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
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
<div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Afrik</b>Isol</a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
          <h3>  <p class=\"login-box-msg\">Connectez-vous</p> </h3>
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
   <div class=\"form-group has-feedback\">
    <input type=\"text\" id=\"username\" placeholder=\"Nom d'utilisateur\" class=\"form-control\" name=\"_username\"  value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
     <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">  
    <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\" required=\"required\" />
    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
    <div class=\"row\">
            <div class=\"col-xs-8\">    
              <div class=\"checkbox icheck\">
                 
                  <h4>
                  <label for=\"remember_me\">
                <input type=\"checkbox\" class=\"minimal\"id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                  ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                  </label>
                  </h4>
              </div>  
                  ";
        // line 35
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 36
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 38
        echo "            </div><!-- /.col -->
            <div class=\"col-xs-4\">
                <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\"> Connexion</button>
            </div><!-- /.col -->
          </div>
  
</form>
      </div>
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
        return array (  82 => 38,  76 => 36,  74 => 35,  67 => 31,  50 => 17,  45 => 15,  40 => 13,  31 => 6,  28 => 5,  11 => 1,);
    }
}
