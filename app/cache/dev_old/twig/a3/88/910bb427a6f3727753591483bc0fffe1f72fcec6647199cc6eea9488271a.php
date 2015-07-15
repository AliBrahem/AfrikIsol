<?php

/* FOSUserBundle::login.html.twig */
class __TwigTemplate_a388910bb427a6f3727753591483bc0fffe1f72fcec6647199cc6eea9488271a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AfriqueIsol | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

  </head>
  <body class=\"login-page\">
    <div class=\"login-box\">
        
      <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Afrique</b>Isol</a>
      </div><!-- /.login-logo -->
      ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 55
        echo "    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>";
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "            
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Connectez-vous</p>
        <form action=\"../../index2.html\" method=\"post\">
          <div class=\"form-group has-feedback\">
            <input type=\"email\" class=\"form-control\" placeholder=\"Email\"/>
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-8\">    
              <div class=\"checkbox icheck\">
                <label>
                  <input type=\"checkbox\"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
              <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href=\"#\">I forgot my password</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  84 => 23,  68 => 60,  63 => 58,  58 => 56,  55 => 55,  53 => 23,  41 => 14,  36 => 12,  29 => 8,  20 => 1,);
    }
}
