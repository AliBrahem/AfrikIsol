<?php

/* AdminBundle:Log:addStock.html.twig */
class __TwigTemplate_74dca011f1e78976804dc6aafceccf64a0c086ed23b2eda0a2ec4ab3f64a826c extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutLog.html.twig")), "AdminBundle:Log:addStock.html.twig", 3);
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
        <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("log_addStock");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
             <h1> Ajout au Stock </h1>
             <br>
            <table id=\"example2\" class=\"table table-bordered table-hover\">
               
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Désignation </label>  </td>
                    <td> ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget');
        echo " </td>
                     </tr>
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Nature du stock </label>  </td>
                    <td> ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nature", array()), 'widget');
        echo " </td>
                     </tr>     
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Unité</label>  </td>
                    <td> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unite", array()), 'widget');
        echo "</td>
                     </tr>
               
                <tr>
                    <td>  <label for=\"exampleInputEmail1\">Quantité stock</label>  </td>
                    <td> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qteStock", array()), 'widget');
        echo " </td>
                </tr>
                
                
                <tr>
                         ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </tr>
            </table>
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Stock\" />
    </div>
    </form>
        </div>    
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Log:addStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  68 => 27,  60 => 22,  53 => 18,  46 => 14,  34 => 7,  30 => 5,  27 => 4,  18 => 3,);
    }
}
