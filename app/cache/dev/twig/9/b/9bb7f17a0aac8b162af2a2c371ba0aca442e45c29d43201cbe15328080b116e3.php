<?php

/* AdminBundle:Technique:GenererTubePDF.html.twig */
class __TwigTemplate_9bb7f17a0aac8b162af2a2c371ba0aca442e45c29d43201cbe15328080b116e3 extends Twig_Template
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
\t\t\t<h1>Invoice</h1>
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
\t\t\t<h1>Recipient</h1>
\t\t\t<address contenteditable>
\t\t\t\t<p>Some Company<br>c/o Some Guy</p>
\t\t\t</address>
\t\t\t<table class=\"meta\">
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Note Réf #</span></th>
\t\t\t\t\t<td><span contenteditable>101138</span></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Date</span></th>
\t\t\t\t\t<td><span contenteditable>January 1, 2015</span></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Solde dû</span></th>
\t\t\t\t\t<td><span id=\"prefix\" contenteditable>TND </span><span>600.00</span></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"inventory\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><span contenteditable>Item</span></th>
\t\t\t\t\t\t<th><span contenteditable>Designation</span></th>
\t\t\t\t\t\t<th><span contenteditable>PU en TND</span></th>
                                              
\t\t\t\t\t\t<th><span contenteditable>Quantié</span></th>
\t\t\t\t\t\t<th><span contenteditable>PT en TND</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><a class=\"cut\">-</a><span contenteditable>Front End Consultation</span></td>
\t\t\t\t\t\t<td><span contenteditable>Experience Review</span></td>
\t\t\t\t\t\t<td><span data-prefix>TND </span><span contenteditable>150.00</span></td>
\t\t\t\t\t\t<td><span contenteditable>4</span></td>
\t\t\t\t\t\t<td><span data-prefix>TND </span><span>600.00</span></td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<a class=\"add\">+</a>
\t\t\t<table class=\"balance\">
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Total</span></th>
\t\t\t\t\t<td><span data-prefix>TND </span><span>600.00</span></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Remise</span></th>
\t\t\t\t\t<td><span data-prefix>TND </span><span contenteditable>0.00</span></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th><span contenteditable>Solde dû</span></th>
\t\t\t\t\t<td><span data-prefix>TND </span><span>600.00</span></td>
\t\t\t\t</tr>
\t\t\t</table>
                        
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
        return "AdminBundle:Technique:GenererTubePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 21,  31 => 8,  26 => 6,  19 => 1,);
    }
}
