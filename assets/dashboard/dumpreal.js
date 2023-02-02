listofipaddresses = (objs,callback) => {
    callback([... new Set(objs.map(obj=>{
        return obj.ipaddress
    }))])
}
listofelements = (objs,callback) => {
    console.log('Params got',objs)
    callback(objs.ds.filter(obj=>{
        return obj.ipaddress===objs.ipaddress
    }))
}
loadChartHarian = (startdate,enddate)=>(
$.ajax({
    url:'/dashboards/dataharian/'+startdate+'/'+enddate+'/',
    type:'get',
    dataType:'json'
})
.done(res=>{
    console.log('RESWW',res)
    listofipaddresses(res.res,ipaddress=>{
        ipaddress.forEach(element => {
            listofelements({ipaddress:element,ds:res.res},dt=>{
                console.log('DT',dt)
            })
        });
    })
    renderChart({ds:res.res})

})
.fail(err=>{
    console.log('Err',err)
})

)
loadChartHarian("2023-01-01","2023-12-31")
$('#rowhariandtfilter').daterangepicker({}, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    var years = moment().diff(start, 'years');
    loadChartHarian(start.format('YYYY-MM-DD'),end.format('YYYY-MM-DD'))
  });
