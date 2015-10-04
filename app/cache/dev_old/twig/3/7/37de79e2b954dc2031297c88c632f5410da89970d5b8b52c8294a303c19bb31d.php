<?php

/* AdminBundle:Technique:indexTech.html.twig */
class __TwigTemplate_37de79e2b954dc2031297c88c632f5410da89970d5b8b52c8294a303c19bb31d extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutTech.html.twig")), "AdminBundle:Technique:indexTech.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "AdminBundle:Technique:indexTech.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 3,);
    }
}
