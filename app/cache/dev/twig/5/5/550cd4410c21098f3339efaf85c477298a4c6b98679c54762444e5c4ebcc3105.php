<?php

/* AdminBundle:Log:listStock.html.twig */
class __TwigTemplate_550cd4410c21098f3339efaf85c477298a4c6b98679c54762444e5c4ebcc3105 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutLog.html.twig")), "AdminBundle:Log:listStock.html.twig", 3);
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
                  <h3 class=\"box-title\">Liste de Stock </h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                   <th>Identifiant</th>
                    <th>Désignation </th>
                    <th>Nature </th>
                    <th>Unité </th>
                   
                    <th>Quantité Stock</th>
                    <th>Gestion Mouvement</th>
                    <th>Lister Mouvement</th>
                </tr>
            </thead>
            <tbody>
                 ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 27
            echo "               
                  
                    <tr>
                        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "designation", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "unite", array()), "html", null, true);
            echo " </td>
                        
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qteStock", array()), "html", null, true);
            echo " </td>
                        <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("log_addMvt", array("id" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Gérer </a></td>
                       <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("log_listMvt", array("idstock" => $this->getAttribute($context["Modele"], "id", array()))), "html", null, true);
            echo "\"> Lister </a></td>
                       
                    </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "AdminBundle:Log:listStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  87 => 37,  83 => 36,  79 => 35,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  57 => 27,  53 => 26,  30 => 5,  27 => 4,  18 => 3,);
    }
}
