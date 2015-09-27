<?php

/* AdminBundle:Log:AfficheTole.html.twig */
class __TwigTemplate_92b4c6640554d1a62a107c3a3595cd47de19951f97f7f29e775002d8b8b288c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Devis</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/styleDevis.css")), "html", null, true);
        echo "\">
\t\t<link rel=\"license\" href=\"http://www.opensource.org/licenses/mit-license/\">
\t\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/scriptDevis.js")), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t<header>
\t\t\t<h1>Devis</h1>
\t\t\t<address contenteditable>
\t\t\t\t<p>AfrikIsol</p>
\t\t\t\t<p>Boulevard de l’environnement 7035</p>
\t\t\t\t<p>Menzel Abderrahmane - Bizerte</p>
                                <p>Tel : +(216) 72 57 06 25 / +(216) 72 57 24 98</p>
                                <p>Fax : +(216) 72 57 13 22</p>
                                <p>E-mail : contact@afrikisol.com</p>
\t\t\t</address>
\t\t\t<span><img alt=\"\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "httpHost", array())) . $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/logo.png")), "html", null, true);
        echo "\"><input type=\"file\" accept=\"image/*\">
                        </span>
                        
\t\t</header>
\t\t<article>
\t\t\t<div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>Type d'isolant </th>
                    <th>DN intér</th>
                    <th>DN ext</th>
                    <th>Epaisseur</th>
                    <th>DN ISOLE mm</th>
                    <th>CIRC en mm</th>
                    <th>RECOUV en mm</th>
                    <th>QTE Net en ML</th>
                    <th>Déchet</th>
                    <th>QTE Brute/ML</th>
                    <th>temps de préfa en mn/Homme</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "type", array()), "html", null, true);
        echo " </td> 
                        <td> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "diametreinter", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "dnext", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "epaisseur", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "dnisole", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "circ", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "recouv", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "quantite", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "dechet", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "qtebrute", array()), "html", null, true);
        echo " </td>
                        <td> ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Modele"]) ? $context["Modele"] : $this->getContext($context, "Modele")), "tempsprefa", array()), "html", null, true);
        echo " </td>
                        
                        
                    </tr>
              
                
            </tbody>            
        </table>
            </div><!-- /.box-body -->
              
\t\t</article>
            <br>
            <br>
            <br>
            <br>
\t\t<aside>
                    <div class=\"row no-print\">
            <div class=\"col-xs-12\">
              <a href=\"javascript:window.print()\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
            </div></div>
                    
\t\t\t<h1><span contenteditable>Notes</span></h1>
\t\t\t<div contenteditable>
\t\t\t\t<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
\t\t\t</div>
\t\t</aside>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Log:AfficheTole.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 58,  113 => 57,  109 => 56,  105 => 55,  101 => 54,  97 => 53,  93 => 52,  89 => 51,  85 => 50,  81 => 49,  77 => 48,  47 => 21,  31 => 8,  26 => 6,  19 => 1,);
    }
}
