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
        <table id=\"example2\" class=\"table table-bordered table-hover\">
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
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 25
            echo "                    <tr>
                        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "lieu", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "idClient", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "contact", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourPrefa", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nbJourMonta", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "datePrefa", array()), "d/m/Y", false), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "dateMonta", array()), "d/m/Y", false), "html", null, true);
            echo " </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "charges", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixUnitaire", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "prixTotal", array()), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>            
        </table>
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
        return array (  110 => 39,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  58 => 25,  54 => 24,  31 => 3,  28 => 2,  11 => 1,);
    }
}
