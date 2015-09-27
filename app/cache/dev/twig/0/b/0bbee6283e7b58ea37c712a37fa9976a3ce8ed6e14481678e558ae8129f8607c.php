<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0bbee6283e7b58ea37c712a37fa9976a3ce8ed6e14481678e558ae8129f8607c extends Twig_Template
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
        echo "<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AfrikIsol | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
   
  </head>
  <body class=\"login-page\">
       ";
        // line 17
        echo "
            ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "               
     


        
             ";
        } else {
            // line 25
            echo "              
            ";
            // line 26
            $this->displayBlock('fos_user_content', $context, $blocks);
            // line 31
            echo "            ";
        }
        // line 32
        echo "        </div>
    </body>
</html>
";
    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 27
        echo "                
                
                
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  71 => 26,  64 => 32,  61 => 31,  59 => 26,  56 => 25,  48 => 19,  46 => 18,  43 => 17,  35 => 11,  28 => 7,  20 => 1,);
    }
}
