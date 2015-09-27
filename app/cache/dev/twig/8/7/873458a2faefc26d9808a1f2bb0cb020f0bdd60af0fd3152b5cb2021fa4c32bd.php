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
                    <th>Numéro du responsable</th>
                    <th>Logo</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
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
                        <td>  <img src=\"data:image/png;base64,";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logos"]) ? $context["logos"] : $this->getContext($context, "logos")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "html", null, true);
            echo "\" width=\"90px\" height=\"80px\" alt=\"logo\" title=\"logo\"  class=\"property_img\"/> </td>
                           
                     
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return array (  117 => 40,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  71 => 28,  54 => 27,  30 => 5,  27 => 4,  18 => 3,);
    }
}
