gotval = objs => {
    return objs.ds.filter(ob=>{
        return ob.ipaddress===objs.ipaddress
    })
    .filter(ob=>{
        return ob.dt===objs.dt
    })
}
getColor = ipaddress => {
    switch(ipaddress){
        case 'a':
            return 'red';
            break;
        case 'b':
            return 'blue';
            break;
    }
}
  getcolor = ['red','blue','brown','green']
  gotareachart = objs => {
    return {
        labels : objs.labels.sort(),
        datasets: objs.visitors.map(obj=>{
            return {
                label:obj.toString(),
                backgroundColor:getcolor[objs.visitors.indexOf(obj)],
                fill:false,
                borderColor:getcolor[objs.visitors.indexOf(obj)],
                borderDash:[5,5],
                data:objs.labels.sort().map(dt=>{
                    valgot = (gotval({ds:objs.ds,ipaddress:obj,dt:dt}).length===0)?0:gotval({ds:objs.ds,ipaddress:obj,dt:dt})[0].cnt
                    return valgot
                })
            }
        })
        }
}
gotlabels = (objs) => {
    return [... new Set(objs.map(obj=>{
        return obj.dt
    }))]
}
renderChart = objs => {
    datas = gotlabels(objs.ds).map(ob=>{
        return gotval({ds:objs.ds,ipaddress:ob})
    })
    areaChartData = gotareachart({
        ds:objs.ds,
        visitors:[... new Set(objs.ds.map(tg=>{return tg.ipaddress}))],
        labels:gotlabels(objs.ds)
    })
    var lineChartCanvas = $('#visitor-line-chart').get(0).getContext('2d')
    var lineChartData = $.extend(true, {}, areaChartData)
    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: {
            maintainAspectRatio : false,
            datasetFill:false,
            legend:{
                display:true
            },
            title:{
                display:true
            },
            responsive:true,
            interaction:{
                intersect:true
            },
            scales: {
            xAxes: [{
            gridLines : {
                display : true,
            }
            }],
            yAxes: [{
            gridLines : {
                display : true,
            }
            }]
        }
        }
    })

}