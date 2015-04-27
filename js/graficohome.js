historicalBarChart = [ 
  {
    key: "Cumulative Return",
    values: [
      { 
        "label" : "Câncer de Mama" ,
        "value" : VARS_GRAFICO[0]
      } , 
      { 
        "label" : "Câncer de Pele" , 
        "value" : VARS_GRAFICO[1]
      } , 
      { 
        "label" : "Dengue" , 
        "value" : VARS_GRAFICO[2]
      } , 
      { 
        "label" : "Ebola" , 
        "value" : VARS_GRAFICO[3]
      } , 
    ]
  }
];




nv.addGraph(function() {  
  var chart = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .staggerLabels(true)
      //.staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(false)
      .showValues(true)
      .color(['pink', 'orange', 'blue', 'red'])
      .transitionDuration(250)
      ;

chart.valueFormat(d3.format('.0d'))

chart.yAxis
        .axisLabel('Número de Posts / Tweets / Fotos')
		.axisLabelDistance(25)
        .tickFormat(d3.format(',.0d'));

  d3.select('#chart1 svg')
      .datum(historicalBarChart)
      .call(chart);


  nv.utils.windowResize(chart.update);

  return chart;
});
