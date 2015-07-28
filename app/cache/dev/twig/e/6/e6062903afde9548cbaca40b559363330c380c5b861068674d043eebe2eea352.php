<?php

/* AdminBundle:User:LineChart.html.twig */
class __TwigTemplate_e6062903afde9548cbaca40b559363330c380c5b861068674d043eebe2eea352 extends Twig_Template
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
    

    // THE CHART
    \$('#container').highcharts({
        chart: {
            type: 'xrange'
            
        },
        title: {
            text: 'K-Echéancier'
        },
        xAxis: {
            type: 'datetime',
        },
        yAxis: {
            title: '',
            categories: ['Préavis d attribution', 'Kick Off meeting', 'Retrait Tole'],
            min: 0,
            max: 2
        },
        plotOptions: {
            series: {
                grouping: false
            }
        },
          
        series: [{
            name: 'Project 1',
            // pointPadding: 0,
            // groupPadding: 0,
             // borderRadius: 5,
             pointWidth: 20,
            data: [{
                x: Date.UTC( ";
        // line 122
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "avisKickoff", array()), "Y"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "avisKickoff", array()), "m"), "html", null, true);
        echo "-1,";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "avisKickoff", array()), "d"), "html", null, true);
        echo " ),
                x2: Date.UTC(2014, 10, 2),
                y: 0
            }, {
                x: Date.UTC(2014, 11, 2),
                x2: Date.UTC(2014, 11, 5),
                y: 2
            }, {
                x: Date.UTC(2014, 11, 15),
                x2: Date.UTC(2014, 11, 20),
                y: 1
            }]
        }]

    });
});
</script>
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 122,  19 => 1,);
    }
}
