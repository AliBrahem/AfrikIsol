<?php

/* AdminBundle:Technique:listProjet.html.twig */
class __TwigTemplate_39d1c67672736748d980e3e6b4d33a6b1bb7e1fb675bbef8e6d1c77da016cdb8 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:listProjet.html.twig", 3);
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
                  <h3 class=\"box-title\">Liste des Projets</h3>
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
                    <th>Planification</th>
                    <th>Avancement</th>
                    <th>Ajouter Tôle</th>
                    <th>Lister Tôle</th>
                </tr>
            </thead>
            <tbody>
                 ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 30
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
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "charges", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixUnitaire", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixTotal", array()), "html", null, true);
            echo " </td>
                  
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_gantt", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Afficher </a></td>
                        <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_grapheSuivie", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Afficher </a></td>
                        <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_calculTole", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Ajouter Tôle </a></td>
                         <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_listerTole", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Lister Tôle </a></td>
                        
                               </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  114 => 49,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  86 => 39,  82 => 38,  78 => 37,  73 => 35,  69 => 34,  65 => 33,  60 => 30,  56 => 29,  30 => 5,  27 => 4,  18 => 3,);
    }
}
