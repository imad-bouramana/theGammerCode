$(document).on('click','input',function(){
    var $this = $(this);
    var place_val = $this.attr('placeholder');
    if(place_val != ''){
        $this.data('placeholder',place_val).removeAttr('placeholder');
    }
}).on('blur','input',function(){
    var $this = $(this);
    var place_val = $this.data('placeholder');
    if(place_val != ''){
        $this.attr('placeholder',place_val);
    }
});
