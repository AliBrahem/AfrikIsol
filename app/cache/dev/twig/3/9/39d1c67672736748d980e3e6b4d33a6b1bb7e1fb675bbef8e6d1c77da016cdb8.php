<?php

/* AdminBundle:Technique:listProjet.html.twig */
class __TwigTemplate_39d1c67672736748d980e3e6b4d33a6b1bb7e1fb675bbef8e6d1c77da016cdb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutTech.html.twig", "AdminBundle:Technique:listProjet.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layoutTech.html.twig";
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
       <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des Projets</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                    <th>Nature Projet</th>
                    <th>Lieu</th>
                    <th>Client</th>
                    <th>Personne à contacter</th>
                    <th>Durée des travaux préfa</th>
                    <th>Durée des travaux monta</th>
                    <th>Date de préfa</th>
                    <th>Date de monta</th>
                    <th>Charges</th>
                    <th>Prix unitaire</th>
                    <th>Prix total</th>
                    <th>Planification</th>
                    
                </tr>
            </thead>
            <tbody>
                 ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 30
            echo "                     ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")));
            foreach ($context['_seq'] as $context["_key"] => $context["Plan"]) {
                if (($this->getAttribute($context["Modele"], "id", array()) == $this->getAttribute($context["Plan"], "idprojet", array()))) {
                    // line 31
                    echo "                     
                    <tr>
                        <td> ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "lieu", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "idClient", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "contact", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourPrefa", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourMonta", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "datePrefa", array()), "d/m/Y", false), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "dateMonta", array()), "d/m/Y", false), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "charges", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixUnitaire", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixTotal", array()), "html", null, true);
                    echo " </td>
                      
                             <td><a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_graphe", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
                    echo "\"> Afficher </a></td>
                    </tr>
                     
                               ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                              ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 51
            echo "                     ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")));
            foreach ($context['_seq'] as $context["_key"] => $context["Plan"]) {
                if (($this->getAttribute($context["Modele"], "id", array()) != $this->getAttribute($context["Plan"], "idprojet", array()))) {
                    // line 52
                    echo "                       
                        <tr>
                            <td> ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "lieu", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "idClient", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "contact", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourPrefa", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourMonta", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "datePrefa", array()), "d/m/Y", false), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 61
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "dateMonta", array()), "d/m/Y", false), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "charges", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixUnitaire", array()), "html", null, true);
                    echo " </td>
                        <td> ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixTotal", array()), "html", null, true);
                    echo " </td>
                            <td><a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_addPlan", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
                    echo "\"> Créer </a></td>
                      
                    </tr>
                  
                               ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "AdminBundle:Technique:listProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 71,  207 => 70,  195 => 65,  191 => 64,  187 => 63,  183 => 62,  179 => 61,  175 => 60,  171 => 59,  167 => 58,  163 => 57,  159 => 56,  155 => 55,  151 => 54,  147 => 52,  141 => 51,  137 => 50,  129 => 49,  118 => 45,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 31,  63 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }
}
