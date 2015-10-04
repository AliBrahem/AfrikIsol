<?php

/* AdminBundle:Log:ListDmd.html.twig */
class __TwigTemplate_25b2b1846bc2d5f480e80634ee568fd8ef21fb47780e35efdbf19c85bfb1d1ad extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutLog.html.twig")), "AdminBundle:Log:ListDmd.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Small boxes (Stat box) -->
    <div class=\"row\">
       <div class=\"box-header\">
                  <h3 class=\"box-title\">Liste des demandes </h3>
                </div><!-- /.box-header -->
                 
                <form id =\"demandeform\" class=\"demandeform\" action=\"\" method=\"post\">
    
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                   <th>Identifiant</th>
                    <th>Isolant</th>
                    <th>DN intér</th>
                    <th>DN ext</th>
                    <th>Epaisseur</th>
                    <th>QTE Net</th>
                    <th>Unité</th>
                    <th>ID Projet</th>
                    <th>Etat</th>
                    
                </tr>
            </thead>
            <tbody>
                
                 ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 32
            echo "                 
                  
                    <tr>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "type", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "diametreinter", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnext", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "epaisseur", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "quantite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "unite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "idprojet", array()), "html", null, true);
            echo " </td>
                        <td> <label for=\"remember_me\" >
                <input type=\"checkbox\" id=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "id", array()), "html", null, true);
            echo "\" name=\"etat\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "quantite", array()), "html", null, true);
            echo "\" />
                  Confirmer
                  </label> </td> 
                  
                    </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>  
            
        </table>
                </div>
            <div class=\"col-lg-3 col-xs-6\">
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Terminer\" />
        </div>
                </form>
             
    </div>
    </div>
    <div class=\"row\">

    </div><!-- /.row (main row) -->

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Log:ListDmd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  100 => 44,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  79 => 38,  75 => 37,  71 => 36,  67 => 35,  62 => 32,  58 => 31,  30 => 5,  27 => 4,  18 => 3,);
    }
}
