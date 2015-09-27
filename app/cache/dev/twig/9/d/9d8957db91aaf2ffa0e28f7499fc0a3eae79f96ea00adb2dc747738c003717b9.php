<?php

/* AdminBundle:Technique:addProjet.html.twig */
class __TwigTemplate_9d8957db91aaf2ffa0e28f7499fc0a3eae79f96ea00adb2dc747738c003717b9 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addProjet.html.twig", 3);
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
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tech_addProjet");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
             <h1> Nouveau Projet </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nature projet </label>  </td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Besoin en matériels roulant </label>  </td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinMaterielRoulant", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Lieu </label>  </td>
                    <td> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieu", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Besoin en matière première </label>  </td>
                    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinMatierePremiere", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Client </label>  </td>
                    <td> ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idClient", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    <td>  <label for=\"exampleInputEmail1\">Date de mise à disposition </label>  </td>
                    <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMiseDispo", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Besoin en échaffaudage </label>  </td>
                    <td> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinEchaffaudage", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Coût équipement Indiv </label>  </td>
                    <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coutEPI", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Prix logement </label>  </td>
                    <td> ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "besoinHebergement", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Quantité d'équipement Indiv </label>  </td>
                    <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantiteEPI", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de logement </label>  </td>
                    <td> ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbBesoinHebergement", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Contact </label>  </td>
                    <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de jours de préfabrication </label>  </td>
                    <td> ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbJourPrefa", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Etat du projet </label>  </td>
                    <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de jours de montage</label>  </td>
                    <td> ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbJourMonta", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Prix unitaire </label>  </td>
                    <td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaire", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Date de préfabrication </label>  </td>
                    <td> ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePrefa", array()), 'widget');
        echo " </td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Prix Total </label>  </td>
                    <td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTotal", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Date de montage </label>  </td>
                    <td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateMonta", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Charges </label>  </td>
                    <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charges", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de personnes pour préfabrication </label>  </td>
                    <td>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPersPrefa", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Marge bénéficiaire </label>  </td>
                    <td>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "margebenef", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nombre de personnes pour montage </label>  </td>
                    <td>";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbPersMonta", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Remise </label>  </td>
                    <td>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Remise", array()), 'widget');
        echo "</td>
                </tr>
                
                <tr>
                         ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </tr>
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Projet\" />
    </div>
    </form>
        </div>    
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 108,  205 => 104,  198 => 100,  191 => 96,  184 => 92,  177 => 88,  170 => 84,  163 => 80,  156 => 76,  149 => 72,  142 => 68,  135 => 64,  128 => 60,  121 => 56,  114 => 52,  107 => 48,  100 => 44,  93 => 40,  86 => 36,  79 => 32,  73 => 29,  66 => 25,  59 => 21,  52 => 17,  45 => 13,  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
