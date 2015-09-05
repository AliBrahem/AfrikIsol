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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Afrik</b>Isol</a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Connectez-vous</p>
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
   <div class=\"form-group has-feedback\">
    <input type=\"text\" id=\"username\" placeholder=\"Nom d'utilisateur\" class=\"form-control\" name=\"_username\"  value=\"";
        // line 19
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
                  <br>
                  <label for=\"remember_me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                  ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                  </label>

              </div>                        
            </div><!-- /.col -->
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
        return array (  73 => 32,  57 => 19,  52 => 17,  47 => 15,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
