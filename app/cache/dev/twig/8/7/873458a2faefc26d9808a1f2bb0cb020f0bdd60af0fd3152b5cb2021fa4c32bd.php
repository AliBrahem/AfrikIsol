<?php

/* AdminBundle:Technique:listClient.html.twig */
class __TwigTemplate_873458a2faefc26d9808a1f2bb0cb020f0bdd60af0fd3152b5cb2021fa4c32bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutTech.html.twig", "AdminBundle:Technique:listClient.html.twig", 1);
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
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 22
            echo "                    <tr>
                        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "societe", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "secteurActivite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "telephone", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "telecopie", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "titreContact", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "contact", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "credit", array()), "html", null, true);
            echo " </td>
                     
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>            
        </table>
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
        return array (  92 => 33,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  55 => 22,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }
}
