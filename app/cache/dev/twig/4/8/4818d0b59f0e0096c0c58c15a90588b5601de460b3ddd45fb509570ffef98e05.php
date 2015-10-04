<?php

/* AdminBundle:Technique:updProjet.html.twig */
class __TwigTemplate_4818d0b59f0e0096c0c58c15a90588b5601de460b3ddd45fb509570ffef98e05 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:updProjet.html.twig", 3);
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
            
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updProjet", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\" >
                <h3>&nbsp&nbsp&nbsp&nbsp Modification du Projet n°";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " </h2>
                <br>
                <table id=\"example2\" class=\"table table-bordered table-hover\">
                   <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nature projet </label>  </td>
                    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Besoin en matériels roulant </label>  </td>
                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinMaterielRoulant", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Lieu </label>  </td>
                    <td> ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Besoin en matière première </label>  </td>
                    <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinMatierePremiere", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Client </label>  </td>
                    <td> ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    <td>  <label for=\"exampleInputEmail1\">Date de mise à disposition </label>  </td>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMiseDispo", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Besoin en échaffaudage </label>  </td>
                    <td> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinEchaffaudage", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Coût équipement Indiv </label>  </td>
                    <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coutEPI", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Prix logement </label>  </td>
                    <td> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinHebergement", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Quantité d'équipement Indiv </label>  </td>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantiteEPI", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de logement </label>  </td>
                    <td> ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBesoinHebergement", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Contact </label>  </td>
                    <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de jours de préfabrication </label>  </td>
                    <td> ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbJourPrefa", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Etat du projet </label>  </td>
                    <td>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de jours de montage</label>  </td>
                    <td> ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbJourMonta", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Prix unitaire </label>  </td>
                    <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaire", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Date de préfabrication </label>  </td>
                    <td> ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePrefa", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Prix Total </label>  </td>
                    <td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTotal", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Date de montage </label>  </td>
                    <td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMonta", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Charges </label>  </td>
                    <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charges", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de personnes pour préfabrication </label>  </td>
                    <td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPersPrefa", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Marge bénéficiaire </label>  </td>
                    <td>";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "margebenef", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de personnes pour montage </label>  </td>
                    <td>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPersMonta", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Remise </label>  </td>
                    <td>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Remise", array()), 'widget');
        echo "</td>
                </tr>
                
                <tr>
                         ";
        // line 113
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
        return "AdminBundle:Technique:updProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 113,  211 => 109,  204 => 105,  197 => 101,  190 => 97,  183 => 93,  176 => 89,  169 => 85,  162 => 81,  155 => 77,  148 => 73,  141 => 69,  134 => 65,  127 => 61,  120 => 57,  113 => 53,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  79 => 34,  72 => 30,  65 => 26,  58 => 22,  51 => 18,  43 => 13,  39 => 12,  30 => 5,  27 => 4,  18 => 3,);
    }
}
