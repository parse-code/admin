var options={chart:{height:340,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,endingShape:"rounded",columnWidth:"25%"}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},colors:["#4d79f6","#e0e7fd"],series:[{name:"New Visitors",data:[68,44,55,57,56,61,58,63,60,66]},{name:"Unique Visitors",data:[51,76,85,101,98,87,105,91,114,94]}],xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"],axisBorder:{show:!0,color:"#bec7e0"},axisTicks:{show:!0,color:"#bec7e0"}},legend:{offsetY:-10},yaxis:{title:{text:"Visitors"}},fill:{opacity:1},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"},tooltip:{y:{formatter:function(e){return e+"k"}}}};(chart=new ApexCharts(document.querySelector("#ana_dash_1"),options)).render();var optionsCircle={chart:{type:"radialBar",height:240,offsetY:-30,offsetX:20},plotOptions:{radialBar:{inverseOrder:!0,hollow:{margin:5,size:"55%",background:"transparent"},track:{show:!0,background:"#ddd",strokeWidth:"10%",opacity:1,margin:5},dataLabels:{name:{fontSize:"18px"},value:{fontSize:"16px",color:"#50649c"}}}},series:[71,63],labels:["Domestic","International"],legend:{show:!0,position:"bottom",offsetX:-40,offsetY:-10,formatter:function(e,t){return e+" - "+t.w.globals.series[t.seriesIndex]+"%"}},fill:{type:"gradient",gradient:{shade:"dark",type:"horizontal",shadeIntensity:.5,inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[0,100],gradientToColors:["#40e0d0","#ff8c00","#ff0080"]}},stroke:{lineCap:"round"}},chartCircle=new ApexCharts(document.querySelector("#circlechart"),optionsCircle);chartCircle.render();var iteration=11;function getRandom(){var e=iteration;return(Math.sin(e/trigoStrength)*(e/trigoStrength)+e/trigoStrength+1)*(2*trigoStrength)}function getRangeRandom(e){return Math.floor(Math.random()*(e.max-e.min+1))+e.min}window.setInterval(function(){iteration++,chartCircle.updateSeries([getRangeRandom({min:10,max:100}),getRangeRandom({min:10,max:100})])},3e3);var chart,dash_spark_1={chart:{type:"area",height:85,sparkline:{enabled:!0}},stroke:{curve:"smooth",width:2},fill:{opacity:.05},series:[{data:[4,8,5,10,4,16,5,11,6,11,30,10,13,4,6,3,6]}],yaxis:{min:0},colors:["#4ac7ec"]};new ApexCharts(document.querySelector("#dash_spark_1"),dash_spark_1).render(),options={chart:{height:250,type:"donut"},plotOptions:{pie:{donut:{size:"85%"}}},dataLabels:{enabled:!1},series:[10,65,25],legend:{show:!0,position:"bottom",horizontalAlign:"center",verticalAlign:"middle",floating:!1,fontSize:"14px",offsetX:0,offsetY:-13},labels:["Tablet","Desktop","Mobile"],colors:["#e0e7fd","#4d79f6","#4ac7ec"],responsive:[{breakpoint:600,options:{plotOptions:{donut:{customScale:.2}},chart:{height:240},legend:{show:!1}}}],tooltip:{y:{formatter:function(e){return e+" %"}}}},(chart=new ApexCharts(document.querySelector("#ana_device"),options)).render();