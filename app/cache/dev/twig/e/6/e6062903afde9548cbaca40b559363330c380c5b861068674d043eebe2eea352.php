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
    
    var d = new Date('";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "avisKickoff", array()), "Y-m-d"), "html", null, true);
        echo "');
    
    var preavis =  ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "preavis", array()), "html", null, true);
        echo ";
    var datePreavis = new Date(d);
    datePreavis.setDate(d.getDate()+preavis);
    
    var retraitTole = ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "retraitTole", array()), "html", null, true);
        echo ";
    var dateRetraitTole = new Date(d);
    dateRetraitTole.setDate(d.getDate()+retraitTole);
    
    var retraitPlan = ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "retraitPlan", array()), "html", null, true);
        echo ";
    var dateRetraitPlan = new Date(d);
    dateRetraitPlan.setDate(d.getDate()+retraitPlan);
    
    var debutInst = ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutInstallation", array()), "html", null, true);
        echo ";
    var dateDebutInst = new Date(d);
    dateDebutInst.setDate(d.getDate()+debutInst);
    
    var debutPrefa = ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutPrefa", array()), "html", null, true);
        echo ";
    var dateDebutPrefa = new Date(d);
    dateDebutPrefa.setDate(d.getDate()+debutPrefa);
    
    var debutMonta = ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutMonta", array()), "html", null, true);
        echo ";
    var dateDebutMonta = new Date(d);
    dateDebutMonta.setDate(d.getDate()+debutMonta);
    
    var livraison = ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "livraisonCommandePrefa", array()), "html", null, true);
        echo ";
    var dateLivraison = new Date(d);
    dateLivraison.setDate(d.getDate()+livraison);
    
    var debut1 = ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutMontagePremierGroupe", array()), "html", null, true);
        echo ";
    var dateDebut1 = new Date(d);
    dateDebut1.setDate(d.getDate()+debut1);
    
    var debut2 = ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutMontageDeuxiemeGroupe", array()), "html", null, true);
        echo ";
    var dateDebut2 = new Date(d);
    dateDebut2.setDate(d.getDate()+debut2);
    console.log(\"debut2 : \"+dateDebut2);
    
    var debutDem = ";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "debutDemobilisation", array()), "html", null, true);
        echo ";
    var dateDebutDem = new Date(d);
    dateDebutDem.setDate(d.getDate()+debutDem);
    console.log(\"demo : \"+dateDebutDem);
    
    var finDem = ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "finDemobilisation", array()), "html", null, true);
        echo ";
    var dateFinDem = new Date(d);
    dateFinDem.setDate(d.getDate()+finDem);
    console.log(\"fin : \"+dateFinDem);
    
    var dateFin = new Date('";
        // line 140
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "dateFin", array()), "Y-m-d"), "html", null, true);
        echo "');
    // THE CHART
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
            categories: ['Préavis d attribution', 'Kick Off meeting', 'Retrait Tole pour préfa', 'Retrait du plan des priorités', \"Début d'installation sur site\", 'Début de préfabrication à Bizerte', 'Début montage', 'Première livraison de préfabrication', 'Début montage avec les premières équipes', 'Début montage avec les secondes équipes', 'Début de démobilisation', 'Fin de démobilisation'],
            min: 0,
            max: 11,
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
             
            data: [{
                    
                x: datePreavis,
                x2: d,
                y: 0
            }, {
                x: d,
                x2: dateRetraitTole,
                y: 1
            }, {
                x: dateRetraitTole,
                x2: dateRetraitPlan,
                y: 2
            }, {
                x: dateRetraitPlan,
                x2: dateDebutInst,
                y: 3
            }, {
                x: dateDebutInst,
                x2: dateDebutPrefa,
                y: 4
            }, {
                x: dateDebutPrefa,
                x2: dateDebutMonta,
                y: 5
            }, {
                x: dateDebutMonta,
                x2: dateLivraison,
                y: 6
            }, {
                x: dateLivraison,
                x2: dateDebut1,
                y: 7
            }, {
                x: dateDebut1,
                x2: dateDebut2,
                y: 8
            }, {
                x: dateDebut2,
                x2: dateDebutDem,
                y: 9
            }, {
                x: dateDebutDem,
                x2: dateFinDem,
                y: 10
            }, {
                x: dateFinDem,
                x2: Date.UTC( \"";
        // line 232
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "dateFin", array()), "Y"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "dateFin", array()), "m"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "dateFin", array()), "d"), "html", null, true);
        echo "\") ,
                y: 11
            }]
        }]

    });
});
</script>
<div id=\"container\" style=\"min-width: 700px; height: 700px; margin: 0 auto\"></div>
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
        return array (  291 => 232,  196 => 140,  188 => 135,  180 => 130,  172 => 125,  165 => 121,  158 => 117,  151 => 113,  144 => 109,  137 => 105,  130 => 101,  123 => 97,  116 => 93,  111 => 91,  19 => 1,);
    }
}
