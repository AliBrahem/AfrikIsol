<?php

/* AdminBundle:User:ganttJ.html.twig */
class __TwigTemplate_233f07e1750cdef2a9579b22bcde01b777fc58648f67d326906befb3b5f77598 extends Twig_Template
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
         H.wrap(H.Tooltip.prototype, 'hide', function () {
         
         });
         
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
            text: 'Planning des travaux pour le projet ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id", array()), "html", null, true);
        echo "'
        },
        xAxis: {
            type: 'integer',
            
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%e. %b',
                year: '%Y'
            }
        },
        yAxis: {
            title: '',
            categories: [
               ";
        // line 115
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
            // line 116
            echo "                             ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 117
                echo "                    '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "item", array()), "html", null, true);
                echo "',
                         ";
            } else {
                // line 118
                echo "   
                             '";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "item", array()), "html", null, true);
                echo "'
                             ";
            }
            // line 120
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
        // line 121
        echo " 
                
            ],
            min: 0,
            
            minPadding: 0.2,
                     
            
            
        },
        plotOptions: {
       xrange :
               {
                   dataLabels: {
    enabled: true,
    formatter: function () {
        return '<b> '+(this.point.x2-this.point.x)+' Jours </b>';
    }
        }}
        },
         tooltip: {
         
         headerFormat: '<b>Jours</b><br>',
             formatter: function() {
    return '<b>Jours</b><br>'+(this.point.x2-this.point.x);
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
        // line 158
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
            // line 159
            echo "                               ";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 160
                echo "                   {
                    x :";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "jourDebut", array()), "html", null, true);
                echo ",
                     x2 : ";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "jourFin", array()), "html", null, true);
                echo ",     
                      y: ";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "  
                    },  
                      ";
            } else {
                // line 165
                echo " 
                    {
                    x : ";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "jourDebut", array()), "html", null, true);
                echo ",
                     x2 : ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["Plan"], "jourFin", array()), "html", null, true);
                echo ",     
                      y: ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "
                    }       
                       ";
            }
            // line 171
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
        // line 173
        echo " 
                   ]
                
            }]
        });

   
});
</script>
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:ganttJ.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 173,  281 => 171,  275 => 169,  271 => 168,  267 => 167,  263 => 165,  257 => 163,  253 => 162,  249 => 161,  246 => 160,  243 => 159,  226 => 158,  187 => 121,  172 => 120,  167 => 119,  164 => 118,  158 => 117,  155 => 116,  138 => 115,  122 => 102,  19 => 1,);
    }
}
