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
        echo "<html>
    <head>
        
    </head>
    <body>
        <header>
            <aside style=\"width: 30%; position: relative; left: auto\">
                AfrikIsol <br>
                Boulevard de l’environnement 7035 <br>
                Menzel Abderrahmane - Bizerte <br>
            </aside>
        </header> <br>
    <center>
        <table id=\"example2\" class=\"table table-bordered table-hover\">
            <thead>
                <tr>
                    <th>DN inter</th>
                    <th>DN ext</th>
                    <th>Epaisseur</th>
                    <th>DN ISOLE mm</th>
                    <th>CIRC en mm</th>
                    <th>RECOUV en mm</th>
                    <th>Largeur de la Tôle en cm</th>
                   
                    <th>Dechet</th>
                    <th>QTE Brute/ML</th>
                    <th>temps de prefa en mn/Homme</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Modeles"]) ? $context["Modeles"] : $this->getContext($context, "Modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["Modele"]) {
            // line 32
            echo "                    <tr>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "diametreinter", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnext", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "epaisseur", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dnisole", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "circ", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "recouv", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "largeurtole", array()), "html", null, true);
            echo " </td>
                        
                        <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "dechet", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "qtebrute", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["Modele"], "tempsprefa", array()), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>            
        </table>
    </center>
        <footer style=\"position: absolute; bottom: 0;\">
            <br>
            <br>
            <div style=\"float: left; width: 700px\">
                <br>
                AfrikIsol <br>
                Boulevard de l’environnement 7035 <br>
                Menzel Abderrahmane - Bizerte <br>
               
            </div>
           
            
            <div style=\"float: right\">
                Contact <br>
                Tel : +(216) 72 57 06 25 / +(216) 72 57 24 98<br>
                Fax : +(216) 72 57 13 22<br>
                E-mail : contact@afrikisol.com
            </div>
            
                
           
            
        </footer>
    
</body>
</html>
AFRIKISOL Industrie garantit les meilleures solutions aux problemes d'isolation technique 
http://www.afrikisol-industrie.com/";
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
        return array (  104 => 46,  95 => 43,  91 => 42,  87 => 41,  82 => 39,  78 => 38,  74 => 37,  70 => 36,  66 => 35,  62 => 34,  58 => 33,  55 => 32,  51 => 31,  19 => 1,);
    }
}
