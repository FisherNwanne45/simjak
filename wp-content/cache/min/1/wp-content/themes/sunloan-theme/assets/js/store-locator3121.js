var wpml_page_lang=document.getElementsByTagName('html')[0].getAttribute('lang');var icl_language_code=(wpml_page_lang=='es-ES')?'es':'en';jQuery(document).ready(function($){$(".menu_bar").click(function(){$(".mainmenu, .menu_bar").toggleClass("active")});$('.zipcode-box-modal .btn-submit-modal').on('click',function(e){e.preventDefault();var userPostalCode2=$('#user-postal-code-modal').val();var applySlug='apply';if(icl_language_code=='es'){applySlug='es/solicita-un-prestamo'}
$('#user-postal-code-modal').blur();if(!$.isEmptyObject(userPostalCode2)&&userPostalCode2.length>=5){window.location.href='/'+applySlug+'?postalcode='+userPostalCode2}});setTimeout(function(){var s=document.createElement('script');s.setAttribute('type','text/javascript');s.src='https://maps.googleapis.com/maps/api/js?language='+icl_language_code+'&region=us&key='+wpsl.api_browser_key+'&sensor=false&libraries=places&callback=initStoreLocator';document.querySelector('body').appendChild(s)},2000);if($(document).scrollTop()>0){$(document).scrollTop($(document).scrollTop()-1)}})