<?php

/* AdminBundle:Log:index.html.twig */
class __TwigTemplate_99bd0839cd63301cf5d6098e8e7d70c2f7423cec3b1a84e9996aba7f6a9355ec extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate((($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ("AdminBundle::layoutSUP.html.twig") : ("AdminBundle::layoutLog.html.twig")), "AdminBundle:Log:index.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "AdminBundle:Log:index.html.twig";
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
