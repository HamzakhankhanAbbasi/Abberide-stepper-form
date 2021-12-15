
//personal info screen stepper form

// perInfo
// physProp
// nextStep

jQuery(document).ready(function(e){
    jQuery("#physProp, #fileUpload, #fourthInfo").hide(),
        e("#1stnext").click(function(){
            e("#physProp").show(),
            e("#perInfo").hide(),
            e(".step2").addClass("active"),
            e(".step1").removeClass("active")
        }),
        e("#2ndnext").click(function(){
            e("#fileUpload").show(),
            e("#physProp").hide(),
            e(".step3").addClass("active"),
            e(".step2").removeClass("active")
        }),
        e("#2ndback").click(function(){
            e("#perInfo").show(),
            e("#physProp").hide(),
            e(".step1").addClass("active"),
            e(".step2").removeClass("active")
        }),
        e("#3rdback").click(function(){
            e("#physProp").show(),
            e("#fileUpload").hide(),
            e(".step2").addClass("active"),
            e(".step3").removeClass("active")
        }),
        e("#3rdnext").click(function(){
            e("#fourthInfo").show(),
            e("#fileUpload").hide(),
            e(".step4").addClass("active"),
            e(".step3").removeClass("active")
        }),
        e("#fourthBack").click(function(){
            e("#fileUpload").show(),
            e("#fourthInfo").hide(),
            e(".step3").addClass("active"),
            e(".step4").removeClass("active")
        })
});

$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    })
    
});