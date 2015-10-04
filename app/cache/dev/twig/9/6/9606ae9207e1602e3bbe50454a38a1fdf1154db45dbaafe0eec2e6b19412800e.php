<?php

/* AdminBundle:Technique:updClient.html.twig */
class __TwigTemplate_9606ae9207e1602e3bbe50454a38a1fdf1154db45dbaafe0eec2e6b19412800e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:updClient.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
        
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            
            <form enctype=\"multipart/form-data\" accept-charset=\" \" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updClient", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
                <h3>&nbsp&nbsp&nbsp&nbsp Modification du Client n°";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " </h2>
                <br>
                <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Société </label>  </td>
                    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "societe", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr> 
                        <td><label for=\"exampleInputEmail1\">Image : </label></td><td><input type=\"file\" name=\"photo\" accept=\"image/x-png, image/gif, image/jpeg\" required/></td> 
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Matricule fiscale </label>  </td>
                    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Secteur d'activité </label>  </td>
                    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteurActivite", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Téléphone </label>  </td>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Adresse mail</label>  </td>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Numéro télécopie </label>  </td>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telecopie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Responsable à contacter </label>  </td>
                    <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreContact", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Numéro du responsable </label>  </td>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    
                <tr>
                         ";
        // line 54
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
        return "AdminBundle:Technique:updClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  105 => 49,  98 => 45,  91 => 41,  84 => 37,  77 => 33,  70 => 29,  63 => 25,  53 => 18,  45 => 13,  39 => 12,  30 => 5,  27 => 4,  18 => 3,);
    }
}
