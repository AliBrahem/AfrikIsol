<?php

/* AdminBundle:User:updateOtherUser.html.twig */
class __TwigTemplate_8ec7b215e3648bf62c2fc8ab0489198de92b0fd3a075ad0bacfef193dd7701fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutSUP.html.twig", "AdminBundle:User:updateOtherUser.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_updateOtherUser", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >

                <table id=\"lol\" >
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Nom de l'utilisateur      </label></td>
                        <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Username", array()), 'errors');
        echo "
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Adresse e-mail </label></td> 

                        <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Email", array()), 'errors');
        echo "
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Poste     </label></td>

                        <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Roles", array()), 'widget');
        echo " </td>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Roles", array()), 'errors');
        echo "
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Etat  </label> </td>
                        <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Locked", array()), 'widget');
        echo " </td>
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Locked", array()), 'errors');
        echo "
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Date d'éxpiration </label></td>
                        <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ExpiresAt", array()), 'widget');
        echo " </td>
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ExpiresAt", array()), 'errors');
        echo "
                    </tr>
                    <tr>
                         ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     </tr>
                </table>
                <div>
                    <br>
                    <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Mettre à jour\" />
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
        return "AdminBundle:User:updateOtherUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  103 => 41,  99 => 40,  91 => 35,  87 => 34,  79 => 29,  75 => 28,  66 => 22,  62 => 21,  53 => 15,  49 => 14,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
