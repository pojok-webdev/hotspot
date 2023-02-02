data = [
    {kdsubutir:'a',tgops:"2023-01-01",cnt:3},
    {kdsubutir:'a',tgops:"2023-01-02",cnt:2},
    {kdsubutir:'a',tgops:"2023-01-02",cnt:0},
    {kdsubutir:'a',tgops:"2023-01-03",cnt:1},
    {kdsubutir:'a',tgops:"2023-01-04",cnt:3},
    {kdsubutir:'b',tgops:"2023-01-05",cnt:0},
    {kdsubutir:'a',tgops:"2023-01-06",cnt:2},
    {kdsubutir:'a',tgops:"2023-01-01",cnt:1},
    {kdsubutir:'b',tgops:"2023-01-21",cnt:0},
    {kdsubutir:'a',tgops:"2023-01-21",cnt:4},
    {kdsubutir:'b',tgops:"2023-01-01",cnt:0},
    {kdsubutir:'a',tgops:"2023-01-01",cnt:6},
]
formated = data.map(obj=>{
    return obj.kdsubutir
})
tgl = [... new Set(data.map((obj)=>{
    return obj.tgops
}))]
cnt = tg => {
    return data
    .filter(flt=>{
        return flt.tgops===tg
    })
    .map(tg=>{
        return tg.cnt
    })
    .reduce((counter,rdc)=>{
        return rdc+counter
    })
}
cnts = _ => {
    return data.map(obj=>{
        return cnt(obj.tgops)
    })
}

gut = _ => {
    tgl = [... new Set(data.map(obj=>{
        return obj.tgops
    }))]
    .map(tgl=>{
        [a,b].map(obj=>{
            data.reduce(ob=>{
                acc+obj
            },0)
        })
    })
}
console.log('TEST ZRESDUCE',[1,2,3,4,5].reduce((x,y)=>{
    return x+y
},2))
console.log('formated',formated,tgl,cnts())