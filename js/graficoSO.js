function chartData() {
  return  [
      { 
        "label" : "Android" ,
        "value" : VARS_GRAFICO[0]
      } , 
      { 
        "label" : "iOS" , 
        "value" : VARS_GRAFICO[1]
      } , 
      { 
        "label" : "Windows Phone" , 
        "value" : VARS_GRAFICO[2]
      } , 
      { 
        "label" : "Twitter Web" , 
        "value" : VARS_GRAFICO[3]
      } , 
    ];
}



//Regular pie chart example
nv.addGraph(function() {
  var chart = nv.models.pieChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      .showLabels(true)
      .color(['#9dc701', 'gray', 'red', '#5eaade']);

    chart.valueFormat(d3.format('%'));


    d3.select("#chart2 svg")
        .datum(chartData())
        .transition().duration(250)
        .call(chart);

  return chart;
});

