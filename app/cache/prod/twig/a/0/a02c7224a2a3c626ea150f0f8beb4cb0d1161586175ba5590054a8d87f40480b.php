<?php

/* AdminBundle:Technique:listAvancement.html.twig */
class __TwigTemplate_a02c7224a2a3c626ea150f0f8beb4cb0d1161586175ba5590054a8d87f40480b extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:listAvancement.html.twig", 3);
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
       <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste d'Avancements</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                    <th>Nature Projet</th>
                    <th>Lieu</th>
                    <th>Client</th>
                    
                    <th>Charges</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                    <th>Ajouter Avancement</th>
                    <th>Lister Avancement</th>
                </tr>
            </thead>
            <tbody>
               
                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 29
            echo "                  
                    <tr>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "lieu", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Modele"], "idClient", array()), "societe", array()), "html", null, true);
            echo " </td>
                     
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "charges", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixUnitaire", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixTotal", array()), "html", null, true);
            echo " </td>
                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_addAvancement", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Ajouter </a></td>
                        <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_grapheSuivie", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Afficher </a></td>
                        
                        
                               </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>            
        </table>
                </div>
    </div>
    </div>
    <div class=\"row\">

    </div><!-- /.row (main row) -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:listAvancement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  71 => 33,  67 => 32,  63 => 31,  59 => 29,  55 => 28,  30 => 5,  27 => 4,  18 => 3,);
    }
}
