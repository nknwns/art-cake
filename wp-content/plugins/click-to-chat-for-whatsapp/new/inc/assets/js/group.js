!function(c){var o="yes";function t(){var t=document.querySelector(".ht-ctc-group");t&&(function(t){{var e,c,a,n;"yes"==o?"show"==t.getAttribute("data-display_mobile")&&((c=document.querySelector(".ht_ctc_desktop_"+t.getAttribute("data-return_type")))&&c.remove(),a=t.getAttribute("data-css"),e=t.getAttribute("data-position_mobile"),t.style.cssText=e+a,i(t)):"show"==t.getAttribute("data-display_desktop")&&((c=document.querySelector(".ht_ctc_mobile_"+t.getAttribute("data-return_type")))&&c.remove(),a=t.getAttribute("data-css"),n=t.getAttribute("data-position"),t.style.cssText=n+a,i(t))}}(t),t.addEventListener("click",function(){!function(t){!function(t){var e=t.getAttribute("data-group_id");window.open("https://chat.whatsapp.com/"+e,"_blank","noopener")}(t);try{ht_ctc_analytics(t)}catch(t){}}(t)})),c(".ht-ctc-sc-group").click(function(){!function(t){data_link=t.getAttribute("data-ctc-link"),data_link=encodeURI(data_link),window.open(data_link,"_blank","noopener");try{ht_ctc_analytics(t)}catch(t){}}(this)})}function i(e){try{var t=parseInt(e.getAttribute("data-show_effect"));c(e).show(t)}catch(t){e.style.display="block"}c(".ht-ctc-group").hover(function(){c(".ht-ctc-group .ht-ctc-cta-hover").show(220)},function(){c(".ht-ctc-group .ht-ctc-cta-hover").hide(100)})}void 0!==screen.width&&(o=1024<screen.width?"no":"yes"),"complete"==document.readyState||"interactive"==document.readyState?t():document.addEventListener("DOMContentLoaded",t)}(jQuery);