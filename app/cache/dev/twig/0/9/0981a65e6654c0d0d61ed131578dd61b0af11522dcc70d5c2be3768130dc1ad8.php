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
                    <th>ID Tôle/Isolant</th>
                    <th>DN intér</th>
                    <th>DN ext</th>
                    <th>Epaisseur</th>
                    <th>DN ISOLE mm</th>
                    <th>CIRC en mm</th>
                    <th>RECOUV en mm</th>
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
        if ((isset($context["tole"]) ? $context["tole"] : $this->getContext($context, "tole"))) {
            // line 33
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tole"]) ? $context["tole"] : $this->getContext($context, "tole")));
            foreach ($context['_seq'] as $context["_key"] => $context["Tole"]) {
                // line 34
                echo "                    <tr>
                        <td> ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "id", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "diametreinter", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "dnext", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "epaisseur", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "dnisole", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "circ", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "recouv", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "quantite", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "dechet", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "qtebrute", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "tempsprefa", array()), "html", null, true);
                echo " </td>
                        <td> ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["Tole"], "type", array()), "html", null, true);
                echo " </td> 
                        <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updTole", array("id" => $this->getAttribute($context["Tole"], "id", array()))), "html", null, true);
                echo "\"> Modifier Tole </a></td>
                        
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tole'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                ";
        }
        // line 52
        echo "                
            </tbody>            
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
        return array (  130 => 52,  127 => 51,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  85 => 39,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  66 => 34,  61 => 33,  59 => 32,  30 => 5,  27 => 4,  18 => 3,);
    }
}
