<?php

/* AdminBundle:Technique:addClient.html.twig */
class __TwigTemplate_8dd2bf3248c0f0ae72dbc32e0680eb8814f29248b8331fdd1b206201823c98ef extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addClient.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
        <form  enctype=\"multipart/form-data\" accept-charset=\" \" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tech_addClient");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
             <h1> Nouveau Client </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Société </label>  </td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "societe", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Matricule fiscale </label>  </td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Secteur d'activité </label>  </td>
                    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secteurActivite", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Téléphone </label>  </td>
                    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Adresse mail</label>  </td>
                    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Numéro télécopie </label>  </td>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telecopie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Responsable à contacter </label>  </td>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titreContact", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Numéro du responsable </label>  </td>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <tr> 
                        <td><label for=\"exampleInputEmail1\">Image : </label></td><td><input type=\"file\" name=\"photo\" accept=\"image/x-png, image/gif, image/jpeg\" required/></td> 
                    </tr>
                <tr>
                         ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </tr>
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Client\" />
    </div>
    </form>
        </div>    
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  94 => 41,  87 => 37,  80 => 33,  73 => 29,  66 => 25,  59 => 21,  52 => 17,  45 => 13,  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
