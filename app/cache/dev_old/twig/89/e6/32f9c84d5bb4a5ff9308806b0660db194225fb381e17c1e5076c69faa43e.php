<?php

/* AdminBundle:Technique:listerCOUDE.html.twig */
class __TwigTemplate_89e632f9c84d5bb4a5ff9308806b0660db194225fb381e17c1e5076c69faa43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutTech.html.twig", "AdminBundle:Technique:listerCOUDE.html.twig", 1);
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
                    <th>DN intér</th>
                    <th>DN ext</th>
                    <th>Epaisseur</th>
                    <th>DN ISOLE mm</th>
                    <th>CIRC en mm</th>
                    <th>RECOUV en mm</th>
                    <th>Largeur de la Tôle en cm</th>
                    <th>QTE Net en ML</th>
                    <th>Déchet</th>
                    <th>QTE Brute/ML</th>
                    <th>temps de préfa en mn/Homme</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 24
            echo "                    <tr>
                        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "diametreinter", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnext", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "epaisseur", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnisole", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "circ", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "recouv", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "largeurtole", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtenet", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dechet", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtebrute", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "tempsprefa", array()), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>            
        </table>
    </div>
    <div class=\"row\">

    </div><!-- /.row (main row) -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:listerCOUDE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
