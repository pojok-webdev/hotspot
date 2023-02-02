$.fn.stairUp = function(options){
    let that = $(this)
    var settings = $.extend({
        level:0
    },options)
    for(x=0;x<settings.level;x++){
        that = that.parent();
    }
    return that;
}