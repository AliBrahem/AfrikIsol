<?php

/* AdminBundle:Technique:addProjet.html.twig */
class __TwigTemplate_9d8957db91aaf2ffa0e28f7499fc0a3eae79f96ea00adb2dc747738c003717b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layoutTech.html.twig", "AdminBundle:Technique:addProjet.html.twig", 1);
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

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tech_addProjet");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"Ajouter Projet\" />
    </div>
    </form>
        
    </div>
    
    
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:addProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
