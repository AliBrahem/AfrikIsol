<?php

/* AdminBundle:Technique:addMAD.html.twig */
class __TwigTemplate_d6356fd5d65e408bc46bdb8dd7c2643ab3a04be1013cb006cf6611f4664bf976 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:addMAD.html.twig", 3);
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
             <h1> Mise à disposition </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Designation </label>  </td>
                    <td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Date </label>  </td>
                    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "</td>
                    </tr>
                   <tr>
                    <td>  <label for=\"exampleInputEmail1\">Diamétre extérieur </label>  </td>
                    <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dnext", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Longueur </label>  </td>
                    <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longueur", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Coude</label>  </td>
                    <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coude", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Tuyauterie </label>  </td>
                    <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tuyauterie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Reduction </label>  </td>
                    <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reduction", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Te </label>  </td>
                    <td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "te", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Brides </label>  </td>
                    <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brides", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Vannes </label>  </td>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vannes", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Surface </label>  </td>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Epaisseur </label>  </td>
                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "epaisseur", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Couche 1 </label>  </td>
                    <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couche1", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Couche 2 </label>  </td>
                    <td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couche2", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Couche 3 </label>  </td>
                    <td>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couche3", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Couche 4 </label>  </td>
                    <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couche4", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Couche 5</label>  </td>
                    <td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couche5", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                    <td>  <label for=\"exampleInputEmail1\">Quantité </label>  </td>
                    <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo "</td>
                    </tr>
                <tr>
                         ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </tr>
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter MAD\" />
    </div>
    </form>
        </div>    
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addMAD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 84,  162 => 81,  155 => 77,  148 => 73,  141 => 69,  134 => 65,  127 => 61,  120 => 57,  113 => 53,  106 => 49,  99 => 45,  92 => 41,  85 => 37,  78 => 33,  71 => 29,  64 => 25,  57 => 21,  50 => 17,  43 => 13,  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
