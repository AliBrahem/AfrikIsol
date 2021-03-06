<?php

/* AdminBundle:Technique:updTole.html.twig */
class __TwigTemplate_2802071f2c75dffb24495cba2efa171b27309c57ffea35340e510e8516bbdcf3 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:updTole.html.twig", 3);
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
        <h3> Modification de Tole n°";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " </h3>
        <div class=\"col-lg-3 col-xs-6\">
            <!-- small box -->
            
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tech_updTole", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"  method=\"POST\" >
                
                <table id=\"lol\" >
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Diamétre intérieur      </label></td>
                        <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diametreinter", array()), 'widget');
        echo " </td>
                   
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Diamétre extérieur </label></td> 

                        <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnext", array()), 'widget');
        echo " </td>
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Epaisseur     </label></td>

                        <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaisseur", array()), 'widget');
        echo " </td>
                  
                    </tr>
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Pouce     </label></td>
                        <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pouce", array()), 'widget');
        echo " </td>
                   
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">DN isolé  </label> </td>
                        <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnisole", array()), 'widget');
        echo " </td>
                     
                    </tr>

                    <tr>
                        <td><label for=\"exampleInputEmail1\">Circonférence </label></td>
                        <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "circ", array()), 'widget');
        echo " </td>
             
                    </tr>
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Recouvrement </label></td>
                        <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recouv", array()), 'widget');
        echo " </td>
             
                    </tr>
                    
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Quantité </label></td>
                        <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo " </td>
             
                    </tr>
                    
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Déchet </label></td>
                        <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dechet", array()), 'widget');
        echo " </td>
             
                    </tr>
                     <tr>
                        <td><label for=\"exampleInputEmail1\">Quantité brute</label></td>
                        <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qtebrute", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Temps de préfabrication </label></td>
                        <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tempsprefa", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Temps de montage </label></td>
                        <td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tempsMonta", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Temps de montage+prefa </label></td>
                        <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tempsPrefaMonta", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Prix unitaire Tôle </label></td>
                        <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaireTole", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Prix unitaire Isolant/MM </label></td>
                        <td>";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaireIsolantMm", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Prix unitaire Isolant/ML </label></td>
                        <td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixUnitaireIsolantML", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                        <td><label for=\"exampleInputEmail1\">Prix </label></td>
                        <td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo " </td>
             
                    </tr>
                    <tr>
                         ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     </tr>
                </table>
                <div>
                    <br>
                    <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Mettre à jour\" />
                </div>
            </form>
        </div><!-- ./col -->
    </div>
    <!-- Main row -->
    <div class=\"row\">

    </div><!-- /.row (main row) -->
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:updTole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 107,  184 => 103,  176 => 98,  168 => 93,  160 => 88,  152 => 83,  144 => 78,  136 => 73,  128 => 68,  120 => 63,  111 => 57,  102 => 51,  94 => 46,  85 => 40,  77 => 35,  69 => 30,  60 => 24,  50 => 17,  42 => 12,  35 => 8,  30 => 5,  27 => 4,  18 => 3,);
    }
}
