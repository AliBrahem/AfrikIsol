<?php

/* AdminBundle:Technique:listerTUY.html.twig */
class __TwigTemplate_e0dfed9f041f335f95544efa3847fa966fd4808cea32cb06626fc745a3b1c4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutTech.html.twig", "AdminBundle:Technique:listerTUY.html.twig", 1);
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
        <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des TUYAUTERIES</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                     Epaisseur 
                       <select id=\"find\" name='find' class=\"find\">
                            <option value=\"19\">19</option>
                            <option value=\"20\">20</option>
                            <option value=\"30\">30</option>
                            <option value=\"32\">32</option>
                            <option value=\"40\">40</option>
                            <option value=\"50\">50</option>
                            <option value=\"60\">60</option>
                            <option value=\"70\">70</option>
                            <option value=\"80\">80</option>
                            <option value=\"90\">90</option>
                            <option value=\"100\">100</option>
                         </select>
                </tr>
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
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 45
            echo "                    <tr>
                        <td> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "diametreinter", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnext", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "epaisseur", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnisole", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "circ", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "recouv", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "largeurtole", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "quantite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dechet", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtebrute", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "tempsprefa", array()), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </tbody>            
        </table>
            </div><!-- /.box-body -->
              </div>
    </div>
    <div class=\"row\">

    </div><!-- /.row (main row) -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:listerTUY.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  105 => 52,  101 => 51,  97 => 50,  93 => 49,  89 => 48,  85 => 47,  81 => 46,  78 => 45,  74 => 44,  31 => 3,  28 => 2,  11 => 1,);
    }
}
