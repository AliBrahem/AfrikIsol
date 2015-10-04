<?php

/* AdminBundle:User:updateProfile.html.twig */
class __TwigTemplate_a37fd028b8130e61f0a8a0be85a122852cb908dd2ebcb5b097e155445d213948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutSUP.html.twig", "AdminBundle:User:updateProfile.html.twig", 1);
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
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
               <table id=\"lol\" >
                     <tr>
                         <td>&nbsp</td>  <td><label for=\"exampleInputEmail1\">Nom de l'utilisateur     </td> </label><td>&nbsp</td> <td>&nbsp</td> <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
                     </tr>
                     <tr>
                         <td>&nbsp</td>  <td><label for=\"exampleInputEmail1\">Adresse e-mail </td> </label><td>&nbsp</td> <td>&nbsp</td> <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                         ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                     </tr>
                     <tr>
                         <td>&nbsp</td>  <td><label for=\"exampleInputEmail1\">Mot de passe actuel</td> </label><td>&nbsp</td> <td>&nbsp</td> <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array()), 'widget');
        echo " </td>
                         ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "current_password", array()), 'errors');
        echo "
                     </tr>
                     <tr>
                         ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                     </tr>
                           </table>
                
                <div>
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Mettre à jour\" />
                </div>
            </form>
        </div><!-- ./col -->
    </div>
    <!-- Main row -->
    <div class=\"row\">

    </div><!-- /.row (main row) -->
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:updateProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  71 => 21,  67 => 20,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
