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
                    <th>Date</th>
                    <th>Nature MVT </th>
                    <th>Désignation </th>
                    
                    <th>Unité </th>
                    <th>Nombre </th>
                    <th>Quantité disponible</th>
                    <th>Quantité demandée</th>
                    <th>Quantité Stock</th>
                    
                </tr>
            </thead>
            <tbody>
                 ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 29
            echo "               
                  
                    <tr>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "date", array()), " d/m/Y", false), "html", null, true);
            echo " </td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "designation", array()), "html", null, true);
            echo " </td>
                     
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "unite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nombre", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtedispo", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtedemande", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qteStock", array()), "html", null, true);
            echo " </td>
                        
                    </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return array (  104 => 45,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  77 => 36,  72 => 34,  68 => 33,  64 => 32,  59 => 29,  55 => 28,  30 => 5,  27 => 4,  18 => 3,);
    }
}
