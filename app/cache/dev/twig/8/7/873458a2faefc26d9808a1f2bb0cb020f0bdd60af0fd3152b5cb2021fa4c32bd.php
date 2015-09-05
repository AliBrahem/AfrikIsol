<?php

/* AdminBundle:Technique:listClient.html.twig */
class __TwigTemplate_873458a2faefc26d9808a1f2bb0cb020f0bdd60af0fd3152b5cb2021fa4c32bd extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:listClient.html.twig", 3);
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
                  <h3 class=\"box-title\">Liste des Clients</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Société </th>
                    <th>Secteur d'activité </th>
                    <th>Téléphone </th>
                    <th>Numéro télécopie</th>
                    <th>Responsable à contacter</th>
                    <th>Numéro du responsabl</th>
                    <th>Crédit disponible</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 28
            echo "                    <tr>
                        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "societe", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "secteurActivite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "telephone", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "telecopie", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "titreContact", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "contact", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "credit", array()), "html", null, true);
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
    </div>
    </div>
    <div class=\"row\">

    </div><!-- /.row (main row) -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  58 => 28,  54 => 27,  30 => 5,  27 => 4,  18 => 3,);
    }
}
