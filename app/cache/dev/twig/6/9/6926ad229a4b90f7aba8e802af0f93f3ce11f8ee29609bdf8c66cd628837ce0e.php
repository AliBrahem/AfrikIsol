<?php

/* AdminBundle:User:suivieChart.html.twig */
class __TwigTemplate_6926ad229a4b90f7aba8e802af0f93f3ce11f8ee29609bdf8c66cd628837ce0e extends Twig_Template
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
type=\"text/javascript\"></script>
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
<script type=\"text/javascript\">
 \$(function () {
     
     
    \$('#container').highcharts({
        title: {
            text: 'Suivie du projet n° ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "' ,
            x: -20 //center
        },
        subtitle: {
            text: 'Afrikisol',
            x: -20
        },
        xAxis: {
            type: 'datetime',
            
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%Y'
            }
                              
        },
        yAxis: {
            title: {
                text: 'Quantité (%)'
            },
            minTickInterval: 0,
            min: 0,
            max: 100,
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
                 plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                }
                
            }},
        series: [
        {
            name: 'Avancement réel'
            ";
        // line 59
        if ((isset($context["avanc"]) ? $context["avanc"] : $this->getContext($context, "avanc"))) {
            echo "  
             ";
            // line 60
            $context["var"] = 0;
            // line 61
            echo "            ,data: [";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avanc"]) ? $context["avanc"] : $this->getContext($context, "avanc")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Avanc"]) {
                // line 62
                echo "               
            ";
                // line 63
                $context["var"] = ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) + $this->getAttribute($context["Avanc"], "quantite", array()));
                // line 64
                echo "                             ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 65
                    echo "                   [Date.UTC( \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "d"), "html", null, true);
                    echo "\"),(";
                    echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100],
                         ";
                } else {
                    // line 66
                    echo "   
                             [Date.UTC( \"";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Avanc"], "date", array()), "d"), "html", null, true);
                    echo "\") ,(";
                    echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100]
                             ";
                }
                // line 69
                echo "                         
                          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Avanc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo " ]
                              ";
        }
        // line 72
        echo "        }
         ,{
            name: 'Mise à disposition'
            ";
        // line 75
        if ((isset($context["mad"]) ? $context["mad"] : $this->getContext($context, "mad"))) {
            // line 76
            echo "             ";
            $context["var2"] = 0;
            // line 77
            echo "            ,data: [";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mad"]) ? $context["mad"] : $this->getContext($context, "mad")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Mad"]) {
                // line 78
                echo "                ";
                $context["var2"] = ((isset($context["var2"]) ? $context["var2"] : $this->getContext($context, "var2")) + $this->getAttribute($context["Mad"], "quantite", array()));
                // line 79
                echo "                             ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 80
                    echo "                    [  Date.UTC( \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "d"), "html", null, true);
                    echo "\"),(";
                    echo twig_escape_filter($this->env, (isset($context["var2"]) ? $context["var2"] : $this->getContext($context, "var2")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100],
                         ";
                } else {
                    // line 81
                    echo "   
                             [ Date.UTC( \"";
                    // line 82
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Mad"], "date", array()), "d"), "html", null, true);
                    echo "\"),(";
                    echo twig_escape_filter($this->env, (isset($context["var2"]) ? $context["var2"] : $this->getContext($context, "var2")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100]
                             ";
                }
                // line 83
                echo " 
                          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Mad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo " ]
                              ";
        }
        // line 86
        echo "        }
       , {
            name: 'Avancement prévisionnel'
            ";
        // line 89
        if ((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan"))) {
            echo " 
             ";
            // line 90
            $context["var3"] = 0;
            // line 91
            echo "            ,data: [";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Plan"]) {
                // line 92
                echo "                ";
                $context["var3"] = ((isset($context["var3"]) ? $context["var3"] : $this->getContext($context, "var3")) + $this->getAttribute($context["Plan"], "quantite", array()));
                // line 93
                echo "                             ";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    // line 94
                    echo "                   [Date.UTC( \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "d"), "html", null, true);
                    echo "\"),(";
                    echo twig_escape_filter($this->env, (isset($context["var3"]) ? $context["var3"] : $this->getContext($context, "var3")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100],
                         ";
                } else {
                    // line 95
                    echo "   
                             [Date.UTC( \"";
                    // line 96
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "Y"), "html", null, true);
                    echo "\", \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "m"), "html", null, true);
                    echo "\"-1, \"";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "date", array()), "d"), "html", null, true);
                    echo "\") ,(";
                    echo twig_escape_filter($this->env, (isset($context["var3"]) ? $context["var3"] : $this->getContext($context, "var3")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "quantite", array()), "html", null, true);
                    echo ")*100]
                             ";
                }
                // line 97
                echo " 
                          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "]
                              ";
        }
        // line 100
        echo "        }
    ]
    });
});
</script>
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:suivieChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 100,  326 => 98,  311 => 97,  298 => 96,  295 => 95,  281 => 94,  278 => 93,  275 => 92,  257 => 91,  255 => 90,  251 => 89,  246 => 86,  242 => 84,  227 => 83,  214 => 82,  211 => 81,  197 => 80,  194 => 79,  191 => 78,  173 => 77,  170 => 76,  168 => 75,  163 => 72,  159 => 70,  144 => 69,  131 => 67,  128 => 66,  114 => 65,  111 => 64,  109 => 63,  106 => 62,  88 => 61,  86 => 60,  82 => 59,  31 => 11,  19 => 1,);
    }
}
