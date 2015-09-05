<?php

/* AdminBundle:Technique:listerTole.html.twig */
class __TwigTemplate_0981a65e6654c0d0d61ed131578dd61b0af11522dcc70d5c2be3768130dc1ad8 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:listerTole.html.twig", 3);
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
        <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des Tôles</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
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
                    <th>Type de Tôle </th>
                    <th>Modifier Tôle </th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 32
        if ((isset($context["TUY"]) ? $context["TUY"] : $this->getContext($context, "TUY"))) {
            // line 33
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TUY"]) ? $context["TUY"] : $this->getContext($context, "TUY")));
            foreach ($context['_seq'] as $context["_key"] => $context["Tuyauterie"]) {
                // line 34
                echo "                    <tr>
                        <td> ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "diametreinter", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "dnext", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "epaisseur", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "dnisole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "circ", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "recouv", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "largeurtole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "quantite", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "dechet", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "qtebrute", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tuyauterie"], "tempsprefa", array()), "html", null, true);
                echo " </td>
                        <td> Tuyauteries </td>
                        <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updTUY", array("id" => $this->getAttribute($context["Tuyauterie"], "id", array()))), "html", null, true);
                echo "\"> Modifier Tuyauterie </a></td>
                        
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tuyauterie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
        }
        // line 52
        echo "                ";
        if ((isset($context["Coudes"]) ? $context["Coudes"] : $this->getContext($context, "Coudes"))) {
            // line 53
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Coudes"]) ? $context["Coudes"] : $this->getContext($context, "Coudes")));
            foreach ($context['_seq'] as $context["_key"] => $context["Coude"]) {
                // line 54
                echo "                    <tr>
                        <td> ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "diametreinter", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "dnext", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "epaisseur", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "dnisole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "circ", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "recouv", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "largeurtole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "quantite", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "dechet", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "qtebrute", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["Coude"], "tempsprefa", array()), "html", null, true);
                echo " </td>
                        <td> Coude </td>
                        <td><a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updCoude", array("id" => $this->getAttribute($context["Coude"], "id", array()))), "html", null, true);
                echo "\"> Modifier Coude </a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Coude'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
        }
        // line 71
        echo "                 ";
        if ((isset($context["Reductions"]) ? $context["Reductions"] : $this->getContext($context, "Reductions"))) {
            // line 72
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Reductions"]) ? $context["Reductions"] : $this->getContext($context, "Reductions")));
            foreach ($context['_seq'] as $context["_key"] => $context["Red"]) {
                // line 73
                echo "                    <tr>
                        <td> ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "diametreinter", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "dnext", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "epaisseur", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "dnisole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "circ", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "recouv", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "largeurtole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "quantite", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "dechet", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "qtebrute", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["Red"], "tempsprefa", array()), "html", null, true);
                echo " </td>
                        <td> Reduction </td>
                        <td><a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updReduction", array("id" => $this->getAttribute($context["Red"], "id", array()))), "html", null, true);
                echo "\"> Modifier Reduction </a></td>
              
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Red'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                ";
        }
        // line 91
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
        return "AdminBundle:Technique:listerTole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 91,  261 => 90,  251 => 86,  246 => 84,  242 => 83,  238 => 82,  234 => 81,  230 => 80,  226 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  203 => 73,  198 => 72,  195 => 71,  192 => 70,  183 => 67,  178 => 65,  174 => 64,  170 => 63,  166 => 62,  162 => 61,  158 => 60,  154 => 59,  150 => 58,  146 => 57,  142 => 56,  138 => 55,  135 => 54,  130 => 53,  127 => 52,  124 => 51,  114 => 47,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  66 => 34,  61 => 33,  59 => 32,  30 => 5,  27 => 4,  18 => 3,);
    }
}
