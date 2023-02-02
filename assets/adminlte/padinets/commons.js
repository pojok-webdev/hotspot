$.fn.stairUp = function(option){
    var that = $(this)
    var setting = $.extend({
        level:1
    },option)
    for(c=0;c<setting.level;c++){
        that = that.parent()
    }
    return that
}

