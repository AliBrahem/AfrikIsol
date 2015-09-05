<?php

/* AdminBundle:Technique:addAvancement.html.twig */
class __TwigTemplate_088496fe0cf66ac5ee9e3d59243cf0c92ee3e75c12d0edd25e876fa235865a1d extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addAvancement.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-lg-3 col-xs-6\">
        <form action=\"\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
             <h1> Planification </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                  
                    <td>  <label for=\"exampleInputEmail1\">Date </label>  </td>
                    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Charge de préfabrication par Heures </label>  </td>
                    <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargePrefaHr", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Charge de préfabrication par Hommes </label>  </td>
                    <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargePrefaHommes", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                   <td>  <label for=\"exampleInputEmail1\">Charge prévisionnelle de montage par Heures </label>  </td>
                    <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargePrevMontaHr", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Charge prévisionnelle de montage par Hommes </label>  </td>
                    <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargePrevMontaHommes", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Charge de montage réelle en Heures </label>  </td>
                    <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeReelleMontaHr", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Charge réelle d'hommes pour le montage </label>  </td>
                    <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeReelleMontaHomme", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Isolant </label>  </td>
                    <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isolant", array()), 'widget');
        echo "</td>
                    <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td>
                    
                    <td>  <label for=\"exampleInputEmail1\">Quantité </label>  </td>
                    <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo "</td>
                    </tr>
                    
                <tr>
                         ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </tr>
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Planification\" />
    </div>
    </form>
        </div>    
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addAvancement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  100 => 46,  93 => 42,  86 => 38,  79 => 34,  72 => 30,  65 => 26,  58 => 22,  51 => 18,  44 => 14,  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
