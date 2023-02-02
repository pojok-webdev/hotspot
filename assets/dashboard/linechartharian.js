
loadChartHarian = (startdate,enddate)=>{
    console.log('Start date',startdate)
    console.log('End date',enddate)
    $.ajax({
        url:'/dashboard/dataharian/'+startdate+'/'+enddate,
        dataType:'json',
        type:'get',
    })
    .done(res=>{
        console.log('RES',res.data.map(x=>{
            return [x.tgops,x.kdsubutir,x.cnt]
        }).sort())

        hoho = res.data.map(x=>{
            return [x.tgops,x.kdsubutir,x.cnt]
        }).sort()

        datasets = ['a','b'].map(obj=>{
            return {
                label:obj,
                backgroundColor:getRandomColor,
                fill:false,
                borderColor:getRandomColor,
                borderDash:[5,5],
                data:res.data.map(dt=>{
                    if(obj===dt.kdsubutir){
                    return parseInt(dt.cnt)
                    }else{
                    return 0
                    }
                })
            }
        })
        console.log('tgops',[... new Set(res.data.map(dt=>{
            return dt.tgops
        }))].sort())
        var areaChartData = {
            labels : [... new Set(res.data.map(dt=>{
                return dt.tgops
            }))],
            datasets:datasets
        }
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
