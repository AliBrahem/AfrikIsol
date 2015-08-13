<?php

/* AdminBundle:User:gantt.html.twig */
class __TwigTemplate_ec783c76da5c9f1ed2ae29d2b7aa8177a860e5e5265cbe6d56fd9ddad97a00e9 extends Twig_Template
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

    /**
     * Highcharts X-range series plugin
     */
    (function (H) {
        var defaultPlotOptions = H.getOptions().plotOptions,
            columnType = H.seriesTypes.column,
            each = H.each;

        defaultPlotOptions.xrange = H.merge(defaultPlotOptions.column, {});
        H.seriesTypes.xrange = H.extendClass(columnType, {
            type: 'xrange',
            parallelArrays: ['x', 'x2', 'y'],
            animate: H.seriesTypes.line.prototype.animate,

            /**
             * Borrow the column series metrics, but with swapped axes. This gives free access
             * to features like groupPadding, grouping, pointWidth etc.
             */  
            getColumnMetrics: function () {
                var metrics,
                    chart = this.chart,
                    swapAxes = function () {
                        each(chart.series, function (s) {
                            var xAxis = s.xAxis;
                            s.xAxis = s.yAxis;
                            s.yAxis = xAxis;
                        });
                    };

                swapAxes();

                this.yAxis.closestPointRange = 1;
                metrics = columnType.prototype.getColumnMetrics.call(this);

                swapAxes();
                
                return metrics;
            },
            translate: function () {
                columnType.prototype.translate.apply(this, arguments);
                var series = this,
                    xAxis = series.xAxis,
                    yAxis = series.yAxis,
                    metrics = series.columnMetrics;

                H.each(series.points, function (point) {
                    barWidth = xAxis.translate(H.pick(point.x2, point.x + (point.len || 0))) - point.plotX;
                    point.shapeArgs = {
                        x: point.plotX,
                        y: point.plotY + metrics.offset,
                        width: barWidth,
                        height: metrics.width
                    };
                    point.tooltipPos[0] += barWidth / 2;
                    point.tooltipPos[1] -= metrics.width / 2;
                });
            }
        });

        /**
         * Max x2 should be considered in xAxis extremes
         */
        H.wrap(H.Axis.prototype, 'getSeriesExtremes', function (proceed) {
            var axis = this,
                dataMax = Number.MIN_VALUE;

            proceed.call(this);
            if (this.isXAxis) {
                each(this.series, function (series) {
                    each(series.x2Data || [], function (val) {
                        if (val > dataMax) {
                            dataMax = val;
                           
                        }
                    });
                });
                if (dataMax > Number.MIN_VALUE) {
                    axis.dataMax = dataMax;
                }
            }                
        });
    }(Highcharts));
    

    \$('#container').highcharts({
        chart: {
            type: 'xrange'
            
        },
        title: {
            text: 'Planning des travaux pour le projet'
        },
        xAxis: {
            type: 'datetime',
            
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%Y'
            }
        },
        yAxis: {
            title: '',
            categories: [
               ";
        // line 111
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
            // line 112
            echo "                             ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 113
                echo "                    '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "item", array()), "html", null, true);
                echo "',
                         ";
            } else {
                // line 114
                echo "   
                             '";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "item", array()), "html", null, true);
                echo "'
                             ";
            }
            // line 116
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
        // line 117
        echo " 
                
            ],
            min: 0,
            
            minPadding: 0.2,
                     
            
            
        },
         tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: '{point.x:%e. %b  %Y}'
        },
        plotOptions: {
            series: {
                grouping: false
            }
        },
          
        series: [{
            name: 'Planning ',
            // pointPadding: 0,
            // groupPadding: 0,
             // borderRadius: 5,
             pointWidth: 20,
             
            data: [
              
                   ";
        // line 146
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
            // line 147
            echo "                               ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 148
                echo "                   {
                    x : Date.UTC( \"";
                // line 149
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "Y"), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "m"), "html", null, true);
                echo "\"-1, \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "d"), "html", null, true);
                echo "\") ,
                     x2 : Date.UTC( \"";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "Y"), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "m"), "html", null, true);
                echo "\"-1, \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "d"), "html", null, true);
                echo "\") ,     
                      y: ";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "  
                    },  
                      ";
            } else {
                // line 153
                echo " 
                    {
                    x : Date.UTC( \"";
                // line 155
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "Y"), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "m"), "html", null, true);
                echo "\"-1, \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateDebut", array()), "d"), "html", null, true);
                echo "\") ,
                     x2 : Date.UTC( \"";
                // line 156
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "Y"), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "m"), "html", null, true);
                echo "\"-1, \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Plan"], "dateFin", array()), "d"), "html", null, true);
                echo "\") ,     
                      y: ";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "
                    }       
                       ";
            }
            // line 159
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
        // line 161
        echo " 
                   ]
                
            }]
        });

   
});
</script>
<div id=\"container\" style=\"min-width: 700px; height: 700px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:gantt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 161,  282 => 159,  276 => 157,  268 => 156,  260 => 155,  256 => 153,  250 => 151,  242 => 150,  234 => 149,  231 => 148,  228 => 147,  211 => 146,  180 => 117,  165 => 116,  160 => 115,  157 => 114,  151 => 113,  148 => 112,  131 => 111,  19 => 1,);
    }
}
