<?php

/* AdminBundle:Log:listMvt.html.twig */
class __TwigTemplate_308130d53732e61356b21eef75b06ff2f9ee53dc4055ae8388708ce093f98a41 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutLog.html.twig")), "AdminBundle:Log:listMvt.html.twig", 3);
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
                  <h3 class=\"box-title\">Liste de mouvements </h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
               <tr>
                    <th>Date</th>
                    <th>Nature MVT </th>
                    
                    <th>Unité </th>
                    <th>Nombre </th>
                    <th>Quantité disponible</th>
                    <th>Quantité demandée</th>
                    <th>Quantité Stock</th>
                    
                </tr>
            </thead>
            <tbody>
                 ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 28
            echo "               
                  
                    <tr>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Modele"], "date", array()), " d/m/Y", false), "html", null, true);
            echo " </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nature", array()), "html", null, true);
            echo " </td>
                     
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "unite", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "nombre", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtedispo", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtedemande", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qteStock", array()), "html", null, true);
            echo " </td>
                        
                    </tr>
                       
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        return "AdminBundle:Log:listMvt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  67 => 32,  63 => 31,  58 => 28,  54 => 27,  30 => 5,  27 => 4,  18 => 3,);
    }
}
