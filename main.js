$(document).ready(function() {
    if (window.location.href.indexOf("ar") > -1) {
        document.documentElement.setAttribute("lang", 'ar');
    } else {
        document.documentElement.setAttribute("lang", 'en');
    }
});

function changeToLTR(){
$('body').removeClass('direction-rtl').addClass('direction-ltr')
}

function changeToRTL(){
$('body').removeClass('direction-ltr').addClass('direction-rtl');
}
