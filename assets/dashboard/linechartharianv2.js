getCnt = (data,subutir,tgops) => {
    return data.filter(flt=>{
            return (flt.tgops===tgops)
    }).filter(flt=>{
        return (flt.kdsubutir===subutir)
    }).map(res=>{
//        console.log("Iki Lho",res)
        return res.cnt
    })
}
getLabels = data => {
    return [... new Set(data.map(dt=>{
        return dt.tgops
    }))]
}
loadChartHarian = (startdate,enddate)=>{
    $.ajax({
        url:'/dashboard/dataharian/'+startdate+'/'+enddate,
        dataType:'json',
        type:'get',
    })
    .done(res=>{
        console.log('HASIL',res.data)
        labels = getLabels(res.data)
        var areaChartData = {
            labels : labels,
            datasets: ['a','b'].map(obj=>{
                return {
                    label:obj,
                    backgroundColor:getRandomColor,
                    fill:false,
                    borderColor:getRandomColor,
                    borderDash:[5,5],
                    data:labels.map(dt=>{
                        console.log("ISI",getCnt(res.data,obj,dt))
                        return getCnt(res.data,obj,dt)
                        /*if(obj===dt.kdsubutir){
                        return parseInt(dt.cnt)
                        }else{
                        return 0
                        }*/
                    })
                }
            })
            }
        console.log('tgops',[... new Set(res.data.map(dt=>{
            return dt.tgops
        }))].sort())
        var lineChartData = $.extend(true, {}, areaChartData)
        var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: {
            maintainAspectRatio : false,
            datasetFill:false,
            legednd:{
            display:false
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
    /**/
    })
    .fail(err=>{
        console.log('err',err)
    })
    var areaChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
        display: false
    },
    scales: {
        xAxes: [{
        gridLines : {
            display : false,
        }
        }],
        yAxes: [{
        gridLines : {
            display : false,
        }
        }]
    }
    }
    var lineChartCanvas = $('#lineChartHarian').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    lineChartOptions.datasetFill = false
    }
loadChartHarian("2023-01-01","2023-12-31")
$('#rowhariandtfilter').daterangepicker({}, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    var years = moment().diff(start, 'years');
    loadChartHarian(start.format('YYYY-MM-DD'),end.format('YYYY-MM-DD'))
  });
