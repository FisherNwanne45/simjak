"use strict";
var initStoreLocator, initSingleStore;
jQuery.event.special.touchstart = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchstart", handle, {
      passive: !ns.includes("noPreventDefault"),
    });
  },
};
jQuery.event.special.touchmove = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchmove", handle, {
      passive: !ns.includes("noPreventDefault"),
    });
  },
};
function init() {
  if (document.getElementById("grid-1")) {
    document.getElementById("grid-1").setAttribute("id", "stop-grid");
  }
  if (jQuery("body").is("#slv2")) {
    if (window.pageYOffset || document.documentElement.scrollTop) {
      jQuery("header").addClass("nav-magic");
    }
    window.addEventListener(
      "scroll",
      function (e) {
        var distanceY =
            window.pageYOffset || document.documentElement.scrollTop,
          shrinkOn = 170;
        if (distanceY > shrinkOn) {
          jQuery("header").addClass("nav-magic");
        } else {
          if (jQuery("header").hasClass("nav-magic")) {
            jQuery("header").removeClass("nav-magic");
          }
        }
      },
      { passive: !0 }
    );
  } else {
    window.addEventListener(
      "scroll",
      function (e) {
        var distanceY =
            window.pageYOffset || document.documentElement.scrollTop,
          shrinkOn = 170,
          header = document.querySelector("header");
        if (distanceY > shrinkOn) {
          classie.add(header, "nav-magic");
        } else {
          if (classie.has(header, "nav-magic")) {
            classie.remove(header, "nav-magic");
          }
        }
      },
      { passive: !0 }
    );
  }
}
window.onload = init();
(function ($) {
  var $selectFilter = $("#wpsl-state");
  $(document).ready(function () {
    $("#stop-grid li").slice(4).remove();
    $("#stop-grid").show();
    if (!jQuery("body").is("#slv2")) {
    }
    if (jQuery("body").is("#slv2")) {
      $(window).scroll(function () {
        $(".lazyload")
          .attr("src", function () {
            return $(this).attr("data-src");
          })
          .removeClass("lazyload");
      });
      if ($(window).scrollTop() > 0) {
        $(".lazyload")
          .attr("src", function () {
            return $(this).attr("data-src");
          })
          .removeClass("lazyload");
      }
      $("#trigger-overlay").on("click", function (e) {
        e.preventDefault();
        $(".overlay.overlay-hugeinc").toggleClass("open");
        if ($("overlay.overlay-hugeinc").hasClass("open")) {
          $(".menu-buttons").addClass("btn-hide");
        } else {
          $(".menu-buttons").removeClass("btn-hide");
        }
      });
      $(".overlay-close ").on("click", function (e) {
        $(".overlay.overlay-hugeinc").removeClass("open");
        $(".menu-buttons").removeClass("btn-hide");
      });
    } else {
      $("#trigger-overlay").on("click", function (e) {
        e.preventDefault();
        if ($(".overlay-hugeinc").hasClass("open")) {
          $(".menu-buttons").addClass("btn-hide");
        } else {
          $(".menu-buttons").removeClass("btn-hide");
        }
      });
      $(".overlay-close ").on("click", function (e) {
        $(".menu-buttons").removeClass("btn-hide");
      });
    }
    $("#trigger-overlay-apply").on("click", function (e) {
      e.preventDefault();
      if (jQuery("body").is("#slv2")) {
        $(".overlay-apply.overlay-hugeinc").toggleClass("open");
        $(".overlay-close").on("click", function (e) {
          $(".overlay-apply.overlay-hugeinc").removeClass("open");
          $(".menu-buttons").removeClass("btn-hide");
        });
      }
      if ($(".overlay-hugeinc").hasClass("open")) {
        $(".menu-buttons").addClass("btn-hide");
      } else {
        $(".menu-buttons").removeClass("btn-hide");
      }
    });
    $(".overlay-close ").on("click", function (e) {
      $(".menu-buttons").removeClass("btn-hide");
    });
    $("#trigger-overlay-apply-foot").on("click", function (e) {
      e.preventDefault();
      if ($(".overlay-hugeinc").hasClass("open")) {
        $(".menu-buttons").addClass("btn-hide");
      } else {
        $(".menu-buttons").removeClass("btn-hide");
      }
    });
    $(".overlay-close ").on("click", function (e) {
      $(".menu-buttons").removeClass("btn-hide");
    });
    $(".carousel").carousel({ interval: 10000 });
    $("input").click(function () {
      $("input:not(:checked)").parent().removeClass("checked");
      $("input:checked").parent().addClass("checked");
    });
    if ($("#gform_45").length && $("#field_45_26").val() == "") {
      $("input[name=input_1]").change(function () {
        $("#input_45_26").val(
          $(this).parent().find("label div[data-storeid]").attr("data-storeid")
        );
      });
    } else if ($("#gform_71").length && $("#field_71_26").val() == "") {
      $("input[name=input_1]").change(function () {
        $("#input_71_26").val(
          $(this).parent().find("label div[data-storeid]").attr("data-storeid")
        );
      });
    }
  });
  if ($("#gform_71").length) {
    var initiated = !1;
    $("#gform_71 input").on("change", function () {
      if (!initiated) {
        initiated = !0;
        fbq("track", "InitiateCheckout");
      }
    });
  }
  $('[aria-label="Middle name"]').attr("autocomplete", "middle-name");
  $(".lazyload-bg").each(function () {
    $(this).css("background", $(this).attr("data-bg")).removeAttr("data-bg");
  });
  if (
    $("body").hasClass("page-template-page-home-b") ||
    $("body").hasClass("page-template-page-home-c")
  ) {
    $(".info-carousel").slick({ dots: !0 });
  }
  if ($(".events.events-alt").length) {
    $(".events.events-alt .container-fulid").slick({
      dots: !1,
      arrows: !1,
      slidesToShow: 3,
      responsive: [
        {
          breakpoint: 767,
          settings: { adaptiveHeight: !0, slidesToShow: 1, dots: !0 },
        },
      ],
    });
  }
  setTimeout(function () {
    if ($(".owl-carousel").length) {
      $(".owl-carousel").data("owlCarousel").options.autoPlay = 9999999999999;
      $(".owl-carousel").data("owlCarousel").options.itemsMobile = [479, 2];
      $(".owl-carousel").data("owlCarousel").updateVars();
    }
  }, 1000);
  if ($(".custom-wpsl-search").length) {
    var geocoder = new google.maps.Geocoder();
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        function (position) {
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;
          var latlng = { lat: parseFloat(lat), lng: parseFloat(lng) };
          findStores(lat, lng, !1, null, 25, 3);
          geocoder.geocode({ location: latlng }, function (results, status) {
            $(".custom-wpsl-search-input").val(
              filterGeocoderApiResponse(results)
            );
          });
        },
        function () {
          showNotFound();
        }
      );
    } else {
    }
    $(".custom-wpsl-search").submit(function (e) {
      e.preventDefault();
      resetSearch();
      var address = $(".custom-wpsl-search-input").val();
      geocoder.geocode(
        { componentRestrictions: { postalCode: address } },
        function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            var lat = results[0].geometry.location.lat();
            var lng = results[0].geometry.location.lng();
            findStores(lat, lng, !1, null, 25, 3);
          } else {
            alert("Please insert a valid ZIP Code!");
            showNotFound();
          }
        }
      );
    });
  }
  initSingleStore = function () {
    if ($("#locations-map").length) {
      var infoWindow = new google.maps.InfoWindow();
      var geocoder = new google.maps.Geocoder();
      window.wpslMap = new google.maps.Map(
        document.getElementById("locations-map"),
        {
          zoom: 15,
          center: { lat: sunloanMap.lat, lng: sunloanMap.lng },
          mapTypeControl: !1,
          streetViewControl: !1,
          zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP,
          },
        }
      );
      var latLng = new google.maps.LatLng(sunloanMap.lat, sunloanMap.lng);
      addMarker(latLng, window.wpslMap, "singleStore", sunloanMap);
    }
  };
  initStoreLocator = function () {
    if ($("#locations-map").length) {
      createDropdowns();
      var infoWindow = new google.maps.InfoWindow();
      var geocoder = new google.maps.Geocoder();
      window.wpslMap = new google.maps.Map(
        document.getElementById("locations-map"),
        {
          zoom: 7,
          center: { lat: 31.968599, lng: -99.901813 },
          mapTypeControl: !1,
          streetViewControl: !1,
          zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_TOP,
          },
        }
      );
      var input = document.getElementById("wpsl-search-input");
      var autocomplete = new google.maps.places.Autocomplete(input);
      $(".wpsl-map-search").submit(function (e) {
        e.preventDefault();
        resetSearch();
        clearMarkers();
        window.wpslMap = new google.maps.Map(
          document.getElementById("locations-map"),
          {
            zoom: 7,
            center: { lat: 31.968599, lng: -99.901813 },
            mapTypeControl: !1,
            streetViewControl: !1,
            zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_TOP,
            },
          }
        );
        var address = $("#wpsl-search-input").val();
        var radius = $("#wpsl-radius .wpsl-selected-item").attr("data-value");
        var amount = $("#wpsl-results .wpsl-selected-item").attr("data-value");
        const url = new URL(window.location);
        url.searchParams.set("postalcode", address);
        url.searchParams.set("wpslRadius", radius);
        window.history.pushState({}, "", url);
        geocoder.geocode({ address: address }, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            var lat = results[0].geometry.location.lat();
            var lng = results[0].geometry.location.lng();
            var latLng = new google.maps.LatLng(lat, lng);
            addMarker(latLng, window.wpslMap, !0);
            findStores(lat, lng, !1, window.wpslMap, radius, amount);
          }
        });
        $("#wpsl-stores").show();
        $("#custom-locations-2 .directions-area").hide();
        $("#wpsl-result-list").removeClass("hide-locations");
      });
      if (typeof postalCode === "undefined") {
        var latLng = new google.maps.LatLng(31.968599, -99.901813),
          amount = 25,
          radius = 200;
        addMarker(latLng, window.wpslMap, !0);
        findStores(
          latLng.lat(),
          latLng.lng(),
          !1,
          window.wpslMap,
          radius,
          amount
        );
      } else {
        if (postalCode) {
          $("#wpsl-search-input").val(postalCode);
          clearMarkers();
          var address = postalCode;
          var radius = $("#wpsl-radius .wpsl-selected-item").attr("data-value");
          var amount = $("#wpsl-results .wpsl-selected-item").attr(
            "data-value"
          );
          geocoder.geocode({ address: address }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
              var lat = results[0].geometry.location.lat();
              var lng = results[0].geometry.location.lng();
              var latLng = new google.maps.LatLng(lat, lng);
              addMarker(latLng, window.wpslMap, !0);
              findStores(lat, lng, !1, window.wpslMap, radius, amount);
            }
          });
        } else if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            function (position) {
              var latLng = new google.maps.LatLng(
                position.coords.latitude,
                position.coords.longitude
              );
              window.wpslMap.setCenter(latLng);
              addMarker(latLng, window.wpslMap, !0);
              findStores(latLng.lat(), latLng.lng(), !1, window.wpslMap);
              geocoder.geocode(
                { location: latLng },
                function (results, status) {
                  $("#wpsl-search-input").val(
                    filterGeocoderApiResponse(results)
                  );
                }
              );
            },
            function () {
              var latLng = new google.maps.LatLng(31.968599, -99.901813);
              addMarker(latLng, window.wpslMap, !0);
              findStores(latLng.lat(), latLng.lng(), 1, window.wpslMap);
            },
            { timeout: 10000, enableHighAccuracy: !0 }
          );
        } else {
          var latLng = new google.maps.LatLng(31.968599, -99.901813);
          addMarker(latLng, window.wpslMap, !0);
          findStores(latLng.lat(), latLng.lng(), !1, window.wpslMap);
        }
      }
    }
  };
})(jQuery);
var openInfoWindow;
var markers = [];
function addMarker(latLng, map, isUser, storeObj) {
  var image =
    isUser == !0
      ? "/wp-content/themes/sunloan-theme/assets/images/wpsl-markers/sun-loan-your-location.png"
      : "/wp-content/themes/sunloan-theme/assets/images/wpsl-markers/sun-loan-marker-dos.png";
  var infoWindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    icon: image,
  });
  markers.push(marker);
  if (isUser == "singleStore") {
    infoWindow.setContent(
      `<div class="wpsl-info-window"><p class="wpsl-no-margin"><strong>${storeObj.store}</strong><br><span>${storeObj.address}</span><br><span>${storeObj.city} ${storeObj.state} ${storeObj.zip}</span><br><span>${storeObj.country}</span></p></div>`
    );
  } else if (isUser) {
    infoWindow.setContent("Start location");
  } else {
    infoWindow.setContent(
      '<div class="wpsl-info-window"><p><strong><a rel="nofollow" href="' +
        storeObj.permalink +
        '">' +
        storeObj.store +
        "</a></strong><span>" +
        storeObj.address +
        "</span><span>" +
        storeObj.city +
        " " +
        storeObj.state +
        " " +
        storeObj.zip +
        '</span></p><a class="btn btn-red" rel="nofollow" href="' +
        storeObj.permalink +
        '">Branch Details</a></div>'
    );
    const urlParams = new URLSearchParams(window.location.search);
    const postalCodeParam = urlParams.get("postalcode");
    if (null !== postalCodeParam) {
      var cat = storeObj.cat;
      var classes = storeObj.announcement
        ? " with-announcement wpsl-location d-flex state-" + cat
        : " no-announcement wpsl-location d-flex state-" + cat;
      var applyUrl =
        "/apply/?postalcode=" +
        storeObj.zip +
        "&amp;storeid=" +
        storeObj.storeid;
      var applyNow =
        storeObj.state == "IL"
          ? "<?php echo $row['url']; ?>illinois-application/"
          : applyUrl;
      var hours = storeObj.hours_html
        ? storeObj.hours_html
        : storeObj.description;
      storeObj.announcement = storeObj.announcement || "";
      const closeBtn = !!storeObj.closeBtnText
        ? `<div class="toltip_box">
                                                    <button>${storeObj.closeBtnText}
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                                        <path d="M419.5,288.9c0.3-37.4,30.9-67.6,68.4-67.3c37.5,0.3,67.6,30.9,67.3,68.3c-0.3,37.4-30.9,67.6-68.4,67.3c-37-0.3-67-30.2-67.3-67.3V288.9z"/>
                                                        <path d="M568.9,693.7h-12.5V471.3c0-30.8-25-55.8-55.8-55.8h-55.8v0.4h-15.4c-23.3,0-42.1,18.9-42.1,42.1c0,23.3,18.9,42.1,42.1,42.1h15.4v193.6h-12.7c-24.2,0-43.7,19.6-43.7,43.8c0,24.2,19.6,43.8,43.7,43.8h136.8c24.2,0,43.7-19.6,43.7-43.8C612.7,713.3,593.1,693.7,568.9,693.7z"/>
                                                        <path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,885c-212.6,0-385-172.4-385-385c0-212.6,172.4-385,385-385s385,172.4,385,385C885,712.6,712.6,885,500,885z"/>
                                                      </svg>
                                                    </button>
                                                  </div>`
        : "";
      const articleContent = !!storeObj.closeText
        ? storeObj.closeText
        : "<p>" +
          storeObj.address +
          " " +
          storeObj.address2 +
          "</p><p>" +
          storeObj.city +
          ", " +
          storeObj.state +
          " " +
          storeObj.zip +
          '</p> <p><span><a href="tel:' +
          storeObj.phone +
          '" class="phone">' +
          storeObj.phone +
          "</a></span></p> <p>" +
          unescape(hours) +
          '</p><div class="card_link"><a class="wpsl-directions" target="_blank" href="https://maps.google.com/maps?saddr=&daddr=' +
          encodeURI(
            storeObj.address + "," + storeObj.city + "," + storeObj.state
          ) +
          '">' +
          translations[1] +
          ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"/></svg></a><a href="' +
          storeObj.permalink +
          '" class="wpsl-more">' +
          translations[2] +
          ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z"/></svg></a></div>';
      $("#wpsl-stores .directions-area .container .row").append(
        '<div class="col-md-6 col-xl-4 location-height' +
          classes +
          '"><div class="directions_card"><div class="card_title"><a href="' +
          storeObj.permalink +
          '"><h4>' +
          storeObj.city +
          "</h4></a>" +
          closeBtn +
          '</div><div class="Athens_text">' +
          articleContent +
          "</div></div></div>"
      );
    }
  }
  marker.addListener("click", function () {
    if (openInfoWindow !== undefined) {
      openInfoWindow.close();
    }
    openInfoWindow = infoWindow;
    infoWindow.open(map, marker);
    map.setZoom(12);
    map.setCenter(marker.getPosition());
  });
}
function resetSearch() {
  $(".custom-wpsl-list-no-results").hide();
  $(".custom-wpsl-list-results").empty().hide();
  $("#wpsl-stores .directions-area .container .row").empty();
  $(".custom-wpsl-list-loading").show();
}
function showNotFound() {
  $(".custom-wpsl-list-loading").hide();
  $(".custom-wpsl-list-no-results").show();
}
function findStores(lat, lng, autoLoad, map, radius, amount, cat = "") {
  autoLoad = autoLoad || !1;
  radius = radius || 25;
  amount = amount || 10;
  jQuery.ajax({
    url: wpslHelper.ajaxurl,
    type: "get",
    data: {
      action: "sunloan_store_search",
      lat: lat,
      lng: lng,
      max_results: amount,
      search_radius: radius,
      autoload: autoLoad,
      cat: cat,
    },
    success: function (response) {
      if (response == "") {
        showNotFound();
      } else {
        if (map) {
          markStores(response, map, cat);
        } else {
          $(response).each(function () {
            $(".custom-wpsl-list-loading").hide();
            $(".custom-wpsl-list-results")
              .append(
                '<div class="sidebar-location"><a href="' +
                  this.permalink +
                  '">' +
                  this.store +
                  '</a><div class="address-content"><div class="row"><div class="col-xs-2"><span class="fl address-icon"><img src="/wp-content/themes/sweb-custom-theme/img/address-icon.png"></span></div><div class="col-xs-10"><span class="wpsl-street">' +
                  this.address +
                  "</span><span>" +
                  this.city +
                  " " +
                  this.state +
                  " " +
                  this.zip +
                  '</span></div></div><div class="row wpsl-contact-details"><div class="col-xs-2"><span class="phone"><img src="/wp-content/themes/sweb-custom-theme/img/phone-icon.png"></span></div><div class="col-xs-10"><span class="phone">' +
                  this.phone +
                  "</span></div></div></div></div>"
              )
              .show();
          });
        }
      }
    },
  });
}
function clearMarkers() {
  $("#wpsl-stores ul").empty();
  $(markers).each(function () {
    this.setMap(null);
  });
}
function markStores(stores, map, cat = "") {
  var bounds = new google.maps.LatLngBounds();
  $(stores).each(function () {
    if (this.cat == cat || cat == "") {
      var latLng = new google.maps.LatLng(this.lat, this.lng);
      addMarker(latLng, map, !1, this);
      bounds.extend(latLng);
    }
  });
  map.fitBounds(bounds);
}
function filterGeocoderApiResponse(response) {
  var i,
    j,
    responseType,
    addressLength,
    userLocation,
    filteredData = {},
    responseLength = response.length;
  for (i = 0; i < responseLength; i++) {
    addressLength = response[i].address_components.length;
    for (j = 0; j < addressLength; j++) {
      responseType = response[i].address_components[j].types;
      if (
        /^postal_code$/.test(responseType) ||
        /^postal_code,postal_code_prefix$/.test(responseType)
      ) {
        filteredData.zip = response[i].address_components[j].long_name;
        break;
      }
      if (/^locality,political$/.test(responseType)) {
        filteredData.locality = response[i].address_components[j].long_name;
      }
    }
    if (typeof filteredData.zip !== "undefined") {
      break;
    }
  }
  if (
    typeof filteredData.zip === "undefined" &&
    typeof filteredData.locality !== "undefined"
  ) {
    userLocation = filteredData.locality;
  } else {
    userLocation = filteredData.zip;
  }
  return userLocation;
}
function createDropdowns() {
  var maxDropdownHeight = Number(300);
  $(".wpsl-dropdown").each(function (index) {
    var active,
      maxHeight,
      $this = $(this);
    $this.$dropdownWrap = $this
      .wrap("<div class='wpsl-dropdown'></div>")
      .parent();
    $this.$selectedVal = $this.val();
    $this.$dropdownElem = $("<div><ul/></div>").appendTo($this.$dropdownWrap);
    $this.$dropdown = $this.$dropdownElem.find("ul");
    $this.$options = $this.$dropdownWrap.find("option");
    $this.hide().removeClass("wpsl-dropdown");
    $.each($this.$options, function () {
      if ($(this).val() == $this.$selectedVal) {
        active = 'class="wpsl-selected-dropdown"';
      } else {
        active = "";
      }
      $this.$dropdown.append(
        "<li data-value=" +
          $(this).val() +
          " " +
          active +
          ">" +
          $(this).text() +
          "</li>"
      );
    });
    $this.$dropdownElem.before(
      "<span data-value=" +
        $this.find(":selected").val() +
        " class='wpsl-selected-item'>" +
        $this.find(":selected").text() +
        "</span>"
    );
    $this.$dropdownItem = $this.$dropdownElem.find("li");
    $this.$dropdownWrap.on("click", function (e) {
      if ($(this).hasClass("wpsl-active")) {
        $(this).removeClass("wpsl-active");
        return;
      }
      closeAllDropdowns();
      $(this).toggleClass("wpsl-active");
      maxHeight = 0;
      if ($(this).hasClass("wpsl-active")) {
        $this.$dropdownItem.each(function (index) {
          maxHeight += $(this).outerHeight();
        });
        $this.$dropdownElem.css("height", maxHeight + 2 + "px");
      } else {
        $this.$dropdownElem.css("height", 0);
      }
      if (maxHeight > maxDropdownHeight) {
        $(this).addClass("wpsl-scroll-required");
        $this.$dropdownElem.css("height", maxDropdownHeight + "px");
      }
      e.stopPropagation();
    });
    $this.$dropdownItem.on("click", function (e) {
      $this.$dropdownWrap
        .find($(".wpsl-selected-item"))
        .php($(this).text())
        .attr("data-value", $(this).attr("data-value"));
      $this.$dropdownItem.removeClass("wpsl-selected-dropdown");
      $(this).addClass("wpsl-selected-dropdown");
      closeAllDropdowns();
      e.stopPropagation();
    });
  });
  $(document).click(function () {
    closeAllDropdowns();
  });
}
function initSimpleDropdown() {
  const containers = document.querySelectorAll(".simple-dropdown--container");
  if (containers.length) {
    containers.forEach((elem) => {
      elem.button = elem.querySelector(".simple-dropdown--btn");
      if (null === elem.button) {
        return;
      }
      elem.dropdown = elem.querySelector(".simple-dropdown--dropdown");
      if (null === elem.dropdown) {
        return;
      }
      elem.addEventListener("focusout", (e) => {
        let newFocusElem;
        if (
          null === e.relatedTarget ||
          null ===
            (newFocusElem = e.relatedTarget.closest(
              ".simple-dropdown--container"
            )) ||
          elem !== newFocusElem
        ) {
          elem.classList.remove("is-active");
          elem.dropdown.style.height = "0px";
          elem.disableLinks();
        }
      });
      elem.makeLinksAccessible = () => {
        if (typeof elem.links === "undefined") {
          elem.links = elem.dropdown.querySelectorAll(".state-link");
        }
        elem.links.forEach((link) => {
          link.removeAttribute("tabindex");
        });
      };
      elem.disableLinks = () => {
        if (typeof elem.links === "undefined") {
          elem.links = elem.dropdown.querySelectorAll(".state-link");
        }
        elem.links.forEach((link) => {
          link.setAttribute("tabindex", -1);
        });
      };
      elem.dropdownHeight = elem.dropdown.scrollHeight;
      elem.button.addEventListener("click", (e) => {
        e.preventDefault();
        if (elem.classList.toggle("is-active")) {
          elem.dropdown.style.height = elem.dropdownHeight + "px";
          elem.makeLinksAccessible();
        } else {
          elem.dropdown.style.height = "0px";
          elem.disableLinks();
        }
      });
    });
  }
}
document.addEventListener("DOMContentLoaded", initSimpleDropdown);
function closeAllDropdowns() {
  $(".wpsl-dropdown").removeClass("wpsl-active");
  $(".wpsl-dropdown div").css("height", 0);
}
