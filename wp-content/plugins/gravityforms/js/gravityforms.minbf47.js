var gform = window.gform || {};
function gformBindFormatPricingFields() {
  jQuery(".ginput_amount, .ginput_donation_amount")
    .off("change.gform")
    .on("change.gform", function () {
      gformFormatPricingField(this);
    }),
    jQuery(".ginput_amount, .ginput_donation_amount").each(function () {
      gformFormatPricingField(this);
    });
}
function Currency(e) {
  return (
    console.warn(
      "Currency has been deprecated since Gravity Forms 2.9. Use gform.Currency instead."
    ),
    new gform.Currency(e)
  );
}
function gformCleanNumber(e, t, r, i) {
  return (
    console.warn(
      "gformCleanNumber() has been deprecated since Gravity Forms 2.9. Use gform.Currency.cleanNumber() instead."
    ),
    gform.Currency.cleanNumber(e, t, r, i)
  );
}
function gformGetDecimalSeparator(e) {
  return (
    console.warn(
      "gformGetDecimalSeparator() has been deprecated since Gravity Forms 2.9. Use gform.Currency.getDecimalSeparator() instead."
    ),
    gform.Currency.getDecimalSeparator(e)
  );
}
function gformIsNumber(e) {
  return (
    console.warn(
      "gformIsNumber() has been deprecated since Gravity Forms 2.9. Use gform.utils.isNumber() instead."
    ),
    gform.utils.isNumber(e)
  );
}
function gformIsNumeric(e, t) {
  switch (t) {
    case "decimal_dot":
      return new RegExp("^(-?[0-9]{1,3}(?:,?[0-9]{3})*(?:.[0-9]+)?)$").test(e);
    case "decimal_comma":
      return new RegExp("^(-?[0-9]{1,3}(?:.?[0-9]{3})*(?:,[0-9]+)?)$").test(e);
  }
  return !1;
}
function gformDeleteUploadedFile(e, t, r) {
  var i,
    n = jQuery("#field_" + e + "_" + t),
    r = jQuery(r).parent().index(),
    o =
      (n.find(".ginput_preview").eq(r).remove(),
      n
        .find(
          'input[type="file"],.validation_message,#extensions_message_' +
            e +
            "_" +
            t
        )
        .removeClass("gform_hidden"),
      n.find(".ginput_post_image_file").show(),
      n.find('input[type="text"]').val(""),
      jQuery("#gform_uploaded_files_" + e).val());
  o &&
    (o = jQuery.secureEvalJSON(o)) &&
    ((i = "input_" + t),
    0 < (n = n.find("#gform_multifile_upload_" + e + "_" + t)).length
      ? (o[i].splice(r, 1),
        (r = (t = n.data("settings")).gf_vars.max_files),
        jQuery("#" + t.gf_vars.message_id).php(""),
        o[i].length < r && gfMultiFileUploader.toggleDisabled(t, !1))
      : (o[i] = null),
    jQuery("#gform_uploaded_files_" + e).val(jQuery.toJSON(o)));
}
void 0 === jQuery.fn.prop && (jQuery.fn.prop = jQuery.fn.attr),
  jQuery(document).on("gform_post_render", gformBindFormatPricingFields),
  (gform.instances = {}),
  (gform.console = {
    error: function (e) {
      window.console && console.error(e);
    },
    info: function (e) {
      window.console && console.info(e);
    },
    log: function (e) {
      window.console && console.log(e);
    },
  }),
  (gform.adminUtils = {
    handleUnsavedChanges: function (e) {
      var t = null;
      jQuery(e)
        .find("input, select, textarea")
        .on("change keyup", function () {
          void 0 === jQuery(this).attr("onChange") &&
            void 0 === jQuery(this).attr("onClick") &&
            (t = !0),
            "enable-api" ===
              (jQuery(this).next().data("jsButton") ||
                jQuery(this).data("jsButton")) && (t = null);
        }),
        "gravityformswebapi" === this.getUrlParameter("subview") &&
          gf_webapi_vars.api_enabled !==
            gf_webapi_vars.enable_api_checkbox_checked &&
          (t = !0),
        jQuery(e).on("submit", function () {
          t = null;
        }),
        (window.onbeforeunload = function () {
          return t;
        });
    },
    getUrlParameter: function (e) {
      for (
        var t = window.location.search.substring(1).split("&"), r = 0;
        r < t.length;
        r++
      ) {
        var i = t[r].split("=");
        if (i[0] == e) return i[1];
      }
    },
  }),
  (window.HandleUnsavedChanges = gform.adminUtils.handleUnsavedChanges),
  (gform.tools = {
    debounce: function (i, n, o) {
      var a, l, s;
      return function () {
        var e = this,
          t = arguments,
          r = o && !a;
        t === l && "" + s == "" + i && clearTimeout(a);
        (a = setTimeout(function () {
          (a = null), o || i.apply(e, t);
        }, n)),
          (s = i),
          (l = t),
          r && i.apply(e, t);
      };
    },
    defaultFor: function (e, t) {
      return void 0 !== e ? e : t;
    },
    getFocusable: function (e) {
      return (
        (e = this.defaultFor(e, document)),
        this.convertElements(
          e.querySelectorAll(
            'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
          )
        ).filter(
          function (e) {
            return this.visible(e);
          }.bind(this)
        )
      );
    },
    htmlToElement: function (e) {
      var t = document.createElement("template");
      return (e = e.trim()), (t.innerHTML = e), t.content.firstChild;
    },
    elementToHTML: function (e) {
      return e.outerHTML;
    },
    convertElements: function (e) {
      for (var t = [], r = e.length; r--; t.unshift(e[r]));
      return t;
    },
    delegate: function (e, r, i, n) {
      e = document.querySelectorAll(e);
      [].forEach.call(e, function (e, t) {
        e.addEventListener(r, function (e) {
          var t;
          ((t = e.target).matches || t.msMatchesSelector).call(t, i) && n(e);
        });
      });
    },
    getClosest: function (e, t) {
      var r, i;
      for (
        [
          "matches",
          "webkitMatchesSelector",
          "mozMatchesSelector",
          "msMatchesSelector",
          "oMatchesSelector",
        ].some(function (e) {
          return "function" == typeof document.body[e] && ((r = e), !0);
        });
        e;

      ) {
        if ((i = e.parentElement) && i[r](t)) return i;
        e = i;
      }
      return null;
    },
    getNodes: function (e, t, r, i) {
      return e
        ? ((r = (r = this.defaultFor(r, document)).querySelectorAll(
            i ? e : '[data-js="' + e + '"]'
          )),
          t ? this.convertElements(r) : r)
        : (gform.console.error(
            "Please pass a selector to gform.tools.getNodes"
          ),
          []);
    },
    mergeObjects: function () {
      for (var e = {}, t = 0; t < arguments.length; t += 1)
        for (
          var r = arguments[t], i = Object.keys(r), n = 0;
          n < i.length;
          n += 1
        )
          e[i[n]] = r[i[n]];
      return e;
    },
    setAttr: function (e, t, r, i, n) {
      if (!e || !t || !r)
        return (
          gform.console.error(
            "Please pass a selector, attribute and value to gform.tools.setAttr"
          ),
          []
        );
      (i = this.defaultFor(i, document)),
        (n = this.defaultFor(n, 0)),
        setTimeout(function () {
          gform.tools.getNodes(e, !0, i, !0).forEach(function (e) {
            e.setAttribute(t, r);
          });
        }, n);
    },
    isRtl: function () {
      if ("rtl" === jQuery("html").attr("dir")) return !0;
    },
    trigger: function (t, e, r, i) {
      var n;
      if (
        ((t = this.defaultFor(t, "")),
        (e = this.defaultFor(e, document)),
        (r = this.defaultFor(r, !1)),
        (i = this.defaultFor(i, {})),
        r)
      )
        (n = document.createEvent("HTMLEvents")).initEvent(t, !0, !1);
      else
        try {
          n = new CustomEvent(t, { detail: i });
        } catch (e) {
          (n = document.createEvent("CustomEvent")).initCustomEvent(
            t,
            !0,
            !0,
            i
          );
        }
      e.dispatchEvent(n);
    },
    uniqueId: function (e) {
      return (
        (e = this.defaultFor(e, "id")) +
        "-" +
        Math.random().toString(36).substr(2, 9)
      );
    },
    visible: function (e) {
      return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
    },
    stripSlashes: function (e) {
      return (e + "").replace(/\\(.?)/g, function (e, t) {
        switch (t) {
          case "\\":
            return "\\";
          case "0":
            return "\0";
          case "":
            return "";
          default:
            return t;
        }
      });
    },
    getCookie: function (e) {
      for (var t = document.cookie.split(";"), r = 0; r < t.length; r++) {
        var i = t[r].split("=");
        if (e == i[0].trim()) return decodeURIComponent(i[1]);
      }
      return null;
    },
    setCookie: function (e, t, r, i) {
      var n,
        o = "",
        a = t;
      r &&
        ((n = new Date()).setTime(n.getTime() + 24 * r * 60 * 60 * 1e3),
        (o = " expires=" + n.toUTCString())),
        i &&
          (a =
            "" !== (r = gform.tools.getCookie(e)) && null !== r
              ? r + "," + t
              : t),
        (document.cookie =
          encodeURIComponent(e) + "=" + encodeURIComponent(a) + ";" + o);
    },
    removeCookie: function (e) {
      gform.tools.setCookie(e, "", -1);
    },
  }),
  (gform.a11y = {}),
  (gform.options = {
    jqEditorAccordions: {
      header: "button.panel-block-tabs__toggle",
      heightStyle: "content",
      collapsible: !0,
      animate: !1,
      create: function (e) {
        gform.tools.setAttr(
          ".ui-accordion-header",
          "tabindex",
          "0",
          e.target,
          100
        );
      },
      activate: function (e) {
        gform.tools.setAttr(
          ".ui-accordion-header",
          "tabindex",
          "0",
          e.target,
          100
        );
      },
      beforeActivate: function (e) {
        "advanced_tab_toggle" === e.currentTarget.id &&
          window.field &&
          window.field.type &&
          "address" === window.field.type &&
          CreateAutocompleteUI(window.field);
      },
    },
    jqAddFieldAccordions: {
      heightStyle: "content",
      collapsible: !0,
      animate: !1,
      create: function (e) {
        gform.tools.setAttr(
          ".ui-accordion-header",
          "tabindex",
          "0",
          e.target,
          100
        );
      },
      activate: function (e) {
        gform.tools.setAttr(
          ".ui-accordion-header",
          "tabindex",
          "0",
          e.target,
          100
        );
      },
    },
  });
var _gformPriceFields = new Array(),
  _anyProductSelected;
function gformIsHidden(e) {
  return (
    (isHidden =
      "none" ==
      e.parents(".gfield").not(".gfield_hidden_product").css("display")),
    gform.applyFilters("gform_is_hidden", isHidden, e)
  );
}
var gformCalculateTotalPrice = gform.tools.debounce(
  function (e) {
    if (_gformPriceFields[e]) {
      var t = 0;
      _anyProductSelected = !1;
      for (var r = 0; r < _gformPriceFields[e].length; r++)
        t += gformCalculateProductPrice(e, _gformPriceFields[e][r]);
      _anyProductSelected && (t += gformGetShippingPrice(e)),
        window.gform_product_total && (t = window.gform_product_total(e, t)),
        gformUpdateTotalFieldPrice(
          e,
          (t = gform.applyFilters("gform_product_total", t, e))
        );
    }
  },
  50,
  !1
);
function gformUpdateTotalFieldPrice(e, t) {
  var r,
    i,
    n = jQuery(".ginput_total_" + e);
  0 < !n.length ||
    ((r = (e = document.querySelector(
      "#gform_wrapper_" + e + ".gform_legacy_markup_wrapper"
    ))
      ? n.next()
      : n),
    (t = {
      current: String(r.val()),
      new: String(t),
      newFormatted: gformFormatMoney(String(t), !0),
    }),
    (i = t),
    (e ? i.current !== i.new : i.current !== i.newFormatted) &&
      (e
        ? (r.val(t.new).trigger("change"), n.php(t.newFormatted))
        : (r.val(t.new).trigger("change"), r.val(t.newFormatted))));
}
function gformGetShippingPrice(e) {
  var e = jQuery(
      ".gfield_shipping_" +
        e +
        " input[readonly], .gfield_shipping_" +
        e +
        " select, .gfield_shipping_" +
        e +
        " input:checked"
    ),
    t = 0;
  return gformToNumber(
    (t =
      1 != e.length || gformIsHidden(e)
        ? t
        : e.attr("readonly")
        ? e.val()
        : gformGetPrice(e.val()))
  );
}
function gformGetFieldId(e) {
  e = jQuery(e).attr("id").split("_");
  return e.length <= 0 ? 0 : e[e.length - 1];
}
function gformCalculateProductPrice(n, e) {
  var t = "_" + n + "_" + e,
    r =
      (jQuery(".gfield_option" + t + ", .gfield_shipping_" + n)
        .find("select")
        .each(function () {
          var e = jQuery(this),
            r = gformGetPrice(e.val()),
            i = e.attr("id").split("_")[2];
          e.children("option").each(function () {
            var e = jQuery(this),
              t = gformGetOptionLabel(e, e.val(), r, n, i);
            e.php(t);
          });
        }),
      jQuery(".gfield_option" + t)
        .find(".gfield_checkbox")
        .find("input:checkbox")
        .each(function () {
          var e = jQuery(this),
            t = e.attr("id"),
            r = t.split("_")[2],
            t = t.replace("choice_", "#label_"),
            t = jQuery(t),
            e = gformGetOptionLabel(t, e.val(), 0, n, r);
          t.php(e);
        }),
      jQuery(".gfield_option" + t + ", .gfield_shipping_" + n)
        .find(".gfield_radio")
        .each(function () {
          var r = 0,
            e = jQuery(this),
            i = e.attr("id").split("_")[2],
            t = e.find("input:radio:checked").val();
          t && (r = gformGetPrice(t)),
            e.find("input:radio").each(function () {
              var e = jQuery(this),
                t = e.attr("id").replace("choice_", "#label_"),
                t = jQuery(t);
              t && ((e = gformGetOptionLabel(t, e.val(), r, n, i)), t.php(e));
            });
        }),
      gformGetBasePrice(n, e)),
    e = gformGetProductQuantity(n, e);
  return (
    0 < e &&
      (jQuery(".gfield_option" + t)
        .find("input:checked, select")
        .each(function () {
          gformIsHidden(jQuery(this)) ||
            (r += gformGetPrice(jQuery(this).val()));
        }),
      (_anyProductSelected = !0)),
    (r = gformRoundPrice((r *= e)))
  );
}
function gformGetProductQuantity(e, t) {
  if (!gformIsProductSelected(e, t)) return 0;
  var r,
    i,
    n = jQuery("#ginput_quantity_" + e + "_" + t);
  if (
    gformIsHidden((n = n.length ? n : jQuery("#input_" + e + "_" + t + "_1")))
  )
    return 0;
  0 < n.length
    ? (r = n.val())
    : ((r = 1),
      0 < (n = jQuery(".gfield_quantity_" + e + "_" + t + " :input")).length &&
        ((r = n.val()),
        (i = gf_get_field_number_format(
          gf_get_input_id_by_html_id(n.attr("id")),
          e,
          "value"
        ))));
  t = gform.Currency.getDecimalSeparator((i = i || "currency"));
  return (r = (r = gform.Currency.cleanNumber(r, "", "", t)) || 0);
}
function gformIsProductSelected(e, t) {
  (e = "_" + e + "_" + t),
    (t = jQuery(
      "#ginput_base_price" +
        e +
        ", .gfield_donation" +
        e +
        ' input[type="text"], .gfield_product' +
        e +
        " .ginput_amount"
    ));
  return (
    !(!t.val() || gformIsHidden(t)) ||
    !(
      !(t = jQuery(
        ".gfield_product" +
          e +
          " select, .gfield_product" +
          e +
          " input:checked, .gfield_donation" +
          e +
          " select, .gfield_donation" +
          e +
          " input:checked"
      )).val() || gformIsHidden(t)
    )
  );
}
function gformGetBasePrice(e, t) {
  var e = "_" + e + "_" + t,
    t = 0,
    r = jQuery(
      "#ginput_base_price" +
        e +
        ", .gfield_donation" +
        e +
        ' input[type="text"], .gfield_product' +
        e +
        " .ginput_amount"
    );
  return (
    0 < r.length
      ? (t = r.val())
      : (e = (r = jQuery(
          ".gfield_product" +
            e +
            " select, .gfield_product" +
            e +
            " input:checked, .gfield_donation" +
            e +
            " select, .gfield_donation" +
            e +
            " input:checked"
        )).val()) && (t = 1 < (e = e.split("|")).length ? e[1] : 0),
    gformIsHidden(r) && (t = 0),
    !1 === (t = new gform.Currency(gf_global.gf_currency_config).toNumber(t))
      ? 0
      : t
  );
}
function gformFormatMoney(e, t) {
  return gf_global.gf_currency_config
    ? new gform.Currency(gf_global.gf_currency_config).toMoney(e, t)
    : e;
}
function gformFormatPricingField(e) {
  var t;
  gf_global.gf_currency_config &&
    ((t = new gform.Currency(gf_global.gf_currency_config).toMoney(
      jQuery(e).val()
    )),
    jQuery(e).val(t));
}
function gformToNumber(e) {
  return new gform.Currency(gf_global.gf_currency_config).toNumber(e);
}
function gformGetPriceDifference(e, t) {
  t = parseFloat(t) - parseFloat(e);
  return (
    (price = gformFormatMoney(t, !0)), (price = 0 < t ? "+" + price : price)
  );
}
function gformGetOptionLabel(e, t, r, i, n) {
  e = jQuery(e);
  var t = gformGetPrice(t),
    o = e.attr("price"),
    o = e
      .php()
      .replace(/<span(.*)<\/span>/i, "")
      .replace(o, ""),
    a = 0 == gformToNumber((a = gformGetPriceDifference(r, t))) ? "" : " " + a,
    e =
      (e.attr("price", a),
      "option" == e[0].tagName.toLowerCase()
        ? a
        : "<span class='ginput_price'>" + a + "</span>"),
    a = o + e;
  return (a = window.gform_format_option_label
    ? gform_format_option_label(a, o, e, r, t, i, n)
    : a);
}
function gformGetProductIds(e, t) {
  for (
    var r = (jQuery(t).hasClass(e) ? jQuery(t) : jQuery(t).parents("." + e))
        .attr("class")
        .split(" "),
      i = 0;
    i < r.length;
    i++
  )
    if (r[i].substr(0, e.length) == e && r[i] != e)
      return { formId: r[i].split("_")[2], productFieldId: r[i].split("_")[3] };
  return { formId: 0, fieldId: 0 };
}
function gformGetPrice(e) {
  var e = e.split("|"),
    t = new gform.Currency(gf_global.gf_currency_config);
  return 1 < e.length && !1 !== t.toNumber(e[1]) ? t.toNumber(e[1]) : 0;
}
function gformRoundPrice(e) {
  var t = new gform.Currency(gf_global.gf_currency_config),
    e = t.numberFormat(e, t.currency.decimals, ".", "");
  return parseFloat(e);
}
function gformRegisterPriceField(e) {
  if (e.formId) {
    _gformPriceFields[e.formId] || (_gformPriceFields[e.formId] = new Array());
    for (var t = 0; t < _gformPriceFields[e.formId].length; t++)
      if (_gformPriceFields[e.formId][t] == e.productFieldId) return;
    _gformPriceFields[e.formId].push(e.productFieldId);
  }
}
function gformInitPriceFields() {
  gform.tools.getNodes(".gfield_price", !0, document, !0).forEach((e) => {
    gformRegisterPriceField(gformGetProductIds("gfield_price", e));
  }),
    Object.keys(_gformPriceFields).forEach((e) => {
      gformCalculateTotalPrice(e),
        gform.state.watch(e, ["products", "feeds"], gformHandleProductChange),
        bindProductChangeEvent();
    });
}
function bindProductChangeEvent() {
  document.addEventListener(
    "gform/products/product_field_changed",
    function (e) {
      var t = {
        formId: e.detail.formId,
        productFieldId: e.detail.productFieldId,
      };
      jQuery(document).trigger("gform_price_change", [
        t,
        e.detail.phpInput,
        this,
      ]);
    }
  );
}
function gformHandleProductChange(e, t, r) {
  gformCalculateTotalPrice(e);
}
function gformShowPasswordStrength(e) {
  var t = gformPasswordStrength(
      document.getElementById(e).value,
      document.getElementById(e + "_2")
        ? document.getElementById(e + "_2").value
        : ""
    ),
    r = window.gf_text["password_" + t],
    i = "unknown" === t ? "blank" : t;
  jQuery("#" + e + "_strength").val(t),
    jQuery("#" + e + "_strength_indicator")
      .removeClass("blank mismatch short good bad strong")
      .addClass(i)
      .php(r);
}
function gformPasswordStrength(e, t) {
  if (e.length <= 0) return "blank";
  var r = wp.passwordStrength.hasOwnProperty("userInputDisallowedList")
    ? wp.passwordStrength.userInputDisallowedList()
    : wp.passwordStrength.userInputBlacklist();
  switch (wp.passwordStrength.meter(e, r, t)) {
    case -1:
      return "unknown";
    case 2:
      return "bad";
    case 3:
      return "good";
    case 4:
      return "strong";
    case 5:
      return "mismatch";
    default:
      return "short";
  }
}
function gformToggleShowPassword(e) {
  var t = jQuery("#" + e),
    r = t.parent().find("button"),
    i = r.find("span");
  switch (t.attr("type")) {
    case "password":
      t.attr("type", "text"),
        r.attr("aria-label", r.attr("data-label-hide")),
        i.removeClass("dashicons-hidden").addClass("dashicons-visibility");
      break;
    case "text":
      t.attr("type", "password"),
        r.attr("aria-label", r.attr("data-label-show")),
        i.removeClass("dashicons-visibility").addClass("dashicons-hidden");
  }
}
function gformToggleCheckboxes(e) {
  var t,
    r = jQuery(e),
    i = r.is('input[type="checkbox"]'),
    n = i ? r.parent() : r.prev(),
    o =
      (n.find("label"), n.parent().find(".gchoice:not( .gchoice_select_all )")),
    n = gf_get_form_id_by_html_id(n.parents(".gfield").attr("id")),
    a = rgars(window, "gf_global/gfcalc/" + n);
  (t = i
    ? e.checked
    : "boolean" == typeof (i = r.data("checked"))
    ? !i
    : !(1 === parseInt(i))),
    o.each(function () {
      jQuery('input[type="checkbox"]', this)
        .prop("checked", t)
        .trigger("change"),
        "function" ==
          typeof jQuery('input[type="checkbox"]', this)[0].onclick &&
          jQuery('input[type="checkbox"]', this)[0].onclick();
    }),
    gformToggleSelectAll(e, t ? "deselect" : "select"),
    wp.a11y.speak(
      t
        ? gf_field_checkbox.strings.selected
        : gf_field_checkbox.strings.deselected
    ),
    a && a.runCalcs(n, a.formulaFields);
}
function gformToggleSelectAll(e, t) {
  var e = jQuery(e),
    r = e.is('input[type="checkbox"]');
  (r ? e.parent() : e.prev()).find("label");
  r ||
    (e.php(
      "deselect" === t ? e.data("label-deselect") : e.data("label-select")
    ),
    e.data("checked", "deselect" === t ? 1 : 0));
}
function gformToggleRadioOther(e) {
  var t = gform.tools
    .getClosest(e, ".ginput_container_radio")
    .querySelector("input.gchoice_other_control");
  t && (t.disabled = "gf_other_choice" !== e.value);
}
function gformAddListItem(e, t) {
  var r,
    i,
    n,
    e = jQuery(e);
  e.hasClass("gfield_icon_disabled") ||
    ((r = (e = e.parents(".gfield_list_group")).clone()),
    (i = e.parents(".gfield_list_container")),
    (n = r.find(":input:last").attr("tabindex")),
    r
      .find("input, select, textarea")
      .attr("tabindex", n)
      .not(":checkbox, :radio")
      .val("")
      .attr("value", ""),
    r.find(":checkbox, :radio").prop("checked", !1),
    (r = gform.applyFilters("gform_list_item_pre_add", r, e)),
    e.after(r),
    gformToggleIcons(i, t),
    gformAdjustClasses(i),
    gformAdjustRowAttributes(i),
    gform.doAction("gform_list_post_item_add", r, i),
    wp.a11y.speak(window.gf_global.strings.newRowAdded));
}
function gformDeleteListItem(e, t) {
  var e = jQuery(e).parents(".gfield_list_group"),
    r = e.parents(".gfield_list_container");
  e.remove(),
    gformToggleIcons(r, t),
    gformAdjustClasses(r),
    gformAdjustRowAttributes(r),
    gform.doAction("gform_list_post_item_delete", r),
    wp.a11y.speak(window.gf_global.strings.rowRemoved);
}
function gformAdjustClasses(e) {
  e.find(".gfield_list_group").each(function (e) {
    e = (e + 1) % 2 == 0 ? "gfield_list_row_even" : "gfield_list_row_odd";
    jQuery(this)
      .removeClass("gfield_list_row_odd gfield_list_row_even")
      .addClass(e);
  });
}
function gformAdjustRowAttributes(e) {
  e.parents(".gform_wrapper").hasClass("gform_legacy_markup_wrapper") ||
    e.find(".gfield_list_group").each(function (r) {
      jQuery(this)
        .find("input, select, textarea")
        .each(function (e, t) {
          t = jQuery(t);
          t.attr(
            "aria-label",
            t.data("aria-label-template").gformFormat(r + 1)
          );
        });
      var e = jQuery(this).find(".delete_list_item");
      e.attr("aria-label", e.data("aria-label-template").gformFormat(r + 1));
    });
}
function gformToggleIcons(e, t) {
  var r = e.find(".gfield_list_group").length,
    i = e.find(".add_list_item"),
    n = "undefined" != typeof gf_legacy && gf_legacy.is_legacy;
  e.find(".delete_list_item").css("visibility", 1 == r ? "hidden" : "visible"),
    0 < t && t <= r
      ? (i.data("title", e.find(".add_list_item").attr("title")),
        i.addClass("gfield_icon_disabled").attr("title", ""),
        n || i.prop("disabled", !0))
      : 0 < t &&
        (i.removeClass("gfield_icon_disabled"),
        n || i.prop("disabled", !1),
        i.data("title")) &&
        i.attr("title", i.data("title"));
}
function gformAddRepeaterItem(e, t) {
  var r,
    i,
    n,
    e = jQuery(e);
  e.hasClass("gfield_icon_disabled") ||
    ((r = (e = e.closest(".gfield_repeater_item")).clone()),
    (i = e.closest(".gfield_repeater_container")),
    (n = r.find(":input:last").attr("tabindex")),
    r
      .find('input[type!="hidden"], select, textarea')
      .attr("tabindex", n)
      .not(":checkbox, :radio")
      .each(function (e) {
        jQuery(this).attr("value")
          ? jQuery(this).val(jQuery(this).attr("value"))
          : jQuery(this).is("textarea")
          ? jQuery(this).val(this.innerHTML)
          : jQuery(this).val("");
      }),
    r.find(":checkbox, :radio").prop("checked", !1),
    r.find(".validation_message").remove(),
    r.find(".gform-datepicker.initialized").removeClass("initialized"),
    (r = gform.applyFilters("gform_repeater_item_pre_add", r, e)),
    e.after(r),
    r.children(".gfield_repeater_cell").each(function () {
      var e = jQuery(this).find(".gfield_repeater_container").first();
      0 < e.length &&
        (resetContainerItems = function (e) {
          e
            .children(".gfield_repeater_items")
            .children(".gfield_repeater_item")
            .each(function (e) {
              jQuery(this)
                .children(".gfield_repeater_cell")
                .each(function () {
                  var e = jQuery(this)
                    .find(".gfield_repeater_container")
                    .first();
                  0 < e.length && resetContainerItems(e);
                });
            }),
            e
              .children(".gfield_repeater_items")
              .children(".gfield_repeater_item")
              .not(":first")
              .remove();
        })(e);
    }),
    gformResetRepeaterAttributes(i),
    "function" == typeof gformInitDatepicker &&
      (i.find(".ui-datepicker-trigger").remove(),
      i.find(".hasDatepicker").removeClass("hasDatepicker"),
      gformInitDatepicker()),
    gformBindFormatPricingFields(),
    gformToggleRepeaterButtons(i, t),
    gform.doAction("gform_repeater_post_item_add", r, i));
}
function gformDeleteRepeaterItem(e, t) {
  var e = jQuery(e).closest(".gfield_repeater_item"),
    r = e.closest(".gfield_repeater_container");
  e.remove(),
    gformResetRepeaterAttributes(r),
    gformToggleRepeaterButtons(r, t),
    gform.doAction("gform_repeater_post_item_delete", r);
}
function gformResetRepeaterAttributes(e, g, m) {
  var _ = null;
  void 0 === g && (g = 0),
    void 0 === m && (m = 0),
    e
      .children(".gfield_repeater_items")
      .children(".gfield_repeater_item")
      .each(function () {
        jQuery(this)
          .children(".gfield_repeater_cell")
          .each(function () {
            var u = jQuery(this),
              e = jQuery(this).find(".gfield_repeater_container").first();
            0 < e.length
              ? gformResetRepeaterAttributes(e, g + 1, m)
              : jQuery(this)
                  .find("input, select, textarea, :checkbox, :radio")
                  .each(function () {
                    var e = jQuery(this),
                      t = e.attr("name");
                    if (void 0 !== t) {
                      var r = /^(input_[^\[]*)((\[[0-9]+\])+)/.exec(t);
                      if (r) {
                        r[1];
                        for (
                          var i = r[2],
                            n = /\[([0-9]+)\]/g,
                            o = [],
                            a = n.exec(i);
                          null != a;

                        )
                          o.push(a[1]), (a = n.exec(i));
                        for (
                          var l = r[1],
                            s = "",
                            c = (o = o.reverse()).length - 1;
                          0 <= c;
                          c--
                        )
                          c == g
                            ? ((l += "[" + m + "]"), (s += "-" + m))
                            : ((l += "[" + o[c] + "]"), (s += "-" + o[c]));
                        var d = e.attr("id"),
                          f = u.find("label[for='" + d + "']"),
                          d =
                            (d &&
                              (d = d.match(/((choice|input)_[0-9|_]*)-/)) &&
                              d[2] &&
                              ((s = d[1] + s),
                              f.attr("for", s),
                              e.attr("id", s)),
                            t.replace(r[0], l)),
                          f = jQuery('input[name="' + d + '"]').is(":checked");
                        e.is(":radio") &&
                          e.is(":checked") &&
                          t !== d &&
                          f &&
                          (null !== _ && _.prop("checked", !0),
                          e.prop("checked", !1),
                          (_ = e)),
                          e.attr("name", d);
                      }
                    }
                  });
          }),
          0 === g && m++;
      }),
    null !== _ && (_.prop("checked", !0), (_ = null));
}
function gformToggleRepeaterButtons(e) {
  var t = e.closest(".gfield_repeater_wrapper").data("max_items"),
    r = e
      .children(".gfield_repeater_items")
      .children(".gfield_repeater_item").length,
    i = e
      .children(".gfield_repeater_items")
      .children(".gfield_repeater_item")
      .children(".gfield_repeater_buttons"),
    n = i.children(".add_repeater_item");
  i
    .children(".remove_repeater_item")
    .css("visibility", 1 == r ? "hidden" : "visible"),
    0 < t && t <= r
      ? (n.data("title", i.children(".add_repeater_item").attr("title")),
        n.addClass("gfield_icon_disabled").attr("title", ""))
      : 0 < t &&
        (n.removeClass("gfield_icon_disabled"), n.data("title")) &&
        n.attr("title", n.data("title")),
    e
      .children(".gfield_repeater_items")
      .children(".gfield_repeater_item")
      .children(".gfield_repeater_cell")
      .each(function (e) {
        var t = jQuery(this).find(".gfield_repeater_container").first();
        0 < t.length && gformToggleRepeaterButtons(t);
      });
}
function gformMatchCard(e) {
  var t = gformFindCardType(jQuery("#" + e).val()),
    e = jQuery("#" + e)
      .parents(".gfield")
      .find(".gform_card_icon_container");
  t
    ? (jQuery(e)
        .find(".gform_card_icon")
        .removeClass("gform_card_icon_selected")
        .addClass("gform_card_icon_inactive"),
      jQuery(e)
        .find(".gform_card_icon_" + t)
        .removeClass("gform_card_icon_inactive")
        .addClass("gform_card_icon_selected"))
    : jQuery(e)
        .find(".gform_card_icon")
        .removeClass("gform_card_icon_selected gform_card_icon_inactive");
}
function gformFindCardType(e) {
  if (e.length < 4) return !1;
  var t = window.gf_cc_rules,
    r = new Array();
  for (type in t)
    if (t.hasOwnProperty(type))
      for (i in t[type])
        if (
          t[type].hasOwnProperty(i) &&
          0 === t[type][i].indexOf(e.substring(0, t[type][i].length))
        ) {
          r[r.length] = type;
          break;
        }
  return 1 == r.length && r[0].toLowerCase();
}
function gformToggleCreditCard() {
  jQuery("#gform_payment_method_creditcard").is(":checked")
    ? jQuery(".gform_card_fields_container").slideDown()
    : jQuery(".gform_card_fields_container").slideUp();
}
function gformInitChosenFields(e, i) {
  return jQuery(e).each(function () {
    var e,
      t = jQuery(this),
      r =
        "undefined" != typeof gfcf_theme_config &&
        (null !== gfcf_theme_config && void 0 !== gfcf_theme_config.data
          ? gfcf_theme_config.data.is_conversational_form
          : void 0);
    "rtl" == jQuery("html").attr("dir") && t.addClass("chosen-rtl chzn-rtl"),
      (t.is(":visible") || r) &&
        0 == t.siblings(".chosen-container").length &&
        ((e = { no_results_text: i }),
        r && (e.width = t.css("inline-size")),
        (r = gform.applyFilters("gform_chosen_options", e, t)),
        t.chosen(r));
  });
}
function gformInitCurrencyFormatFields(e) {
  jQuery(e)
    .each(function () {
      jQuery(this).val(gformFormatMoney(jQuery(this).val()));
    })
    .change(function (e) {
      jQuery(this).val(gformFormatMoney(jQuery(this).val()));
    });
}
jQuery(document).on(
  "click",
  ".gfield_choice--select_all_enabled *",
  function () {
    var e,
      t = jQuery(this)
        .closest(".gfield_choice--select_all_enabled")
        .find(".gfield_choice_all_toggle");
    jQuery(this).is('.gchoice input[type="checkbox"]') &&
      (t.is('input[type="checkbox"]')
        ? jQuery(this).prop("checked") || t.prop("checked", !1)
        : gformToggleSelectAll(t, "select")),
      jQuery(this).is('.gchoice input[type="checkbox"]') &&
        (e = jQuery(this)
          .closest(".gfield_choice--select_all_enabled")
          .find(
            '.gchoice input[type="checkbox"]:not(".gfield_choice_all_toggle")'
          )).length === e.filter(":checked").length &&
        (t.is('input[type="checkbox"]') && t.prop("checked", !0),
        gformToggleSelectAll(t, "deselect"));
  }
);
var GFMergeTag = function () {
    (GFMergeTag.getMergeTagValue = function (e, t, r) {
      r = (r = void 0 === r ? "" : r).replace(":", "");
      var i = parseInt(t, 10),
        n =
          (0 <
            jQuery("#input_" + e + "_" + i + "_copy_values_activated:checked")
              .length &&
            ((a = jQuery(
              "#input_" + e + "_" + i + "_copy_values_activated"
            ).data("source_field_id")),
            (t = t == i ? a : t.toString().replace(i + ".", a + ".")),
            (i = a)),
          jQuery("#field_" + e + "_" + i)),
        o = n.find(
          (i == t
            ? 'input[name^="input_' + i + '"]'
            : 'input[name="input_' + t + '"]') +
            ', select[name^="input_' +
            t +
            '"], textarea[name="input_' +
            t +
            '"]'
        );
      if (
        !(
          !window.gf_check_field_rule ||
          "show" == gf_check_field_rule(e, i, !0, "")
        )
      )
        return "";
      n.find(".ginput_container_email").hasClass("ginput_complex") &&
        (o = o.first());
      var a = gform.applyFilters(
        "gform_value_merge_tag_" + e + "_" + i,
        !1,
        o,
        r
      );
      if (!1 === a) {
        switch (((a = ""), r)) {
          case "label":
            var l = n.find(".gfield_label");
            return l.find(".screen-reader-text").remove(), l.text();
          case "qty":
            if (n.hasClass("gfield_price"))
              return !1 === (f = gformGetProductQuantity(e, i)) || "" === f
                ? 0
                : f;
        }
        if (
          1 ===
          (o =
            "checkbox" !== o.prop("type") && "radio" !== o.prop("type")
              ? o
              : o.filter(":checked")).length
        ) {
          if (
            (!o.is("select") &&
              "radio" !== o.prop("type") &&
              "checkbox" !== o.prop("type")) ||
            "" !== r
          )
            void 0 === f && (f = o.val());
          else if (
            ((f = o.is("select")
              ? o.find("option:selected")
              : ("radio" === o.prop("type") &&
                o.parent().hasClass("gchoice_button")
                  ? o.parent().siblings(".gchoice_label").find("label")
                  : o.next("label")
                ).clone())
              .find("span")
              .remove(),
            1 === f.length)
          )
            f = f.text();
          else {
            for (var s = [], c = 0; c < f.length; c++)
              s[c] = jQuery(f[c]).text();
            f = s;
          }
          a = jQuery.isArray(f)
            ? f.join(", ")
            : "string" == typeof f
            ? GFMergeTag.formatValue(f, r)
            : "";
        } else if (1 < o.length) {
          for (var d, f = [], c = 0; c < o.length; c++)
            "checkbox" === o.prop("type") && "" === r
              ? ((d = jQuery(o[c]).next("label").clone()).find("span").remove(),
                (f[c] = GFMergeTag.formatValue(d.text(), r)),
                d.remove())
              : (f[c] = GFMergeTag.formatValue(jQuery(o[c]).val(), r));
          a = f.join(", ");
        }
      }
      return a;
    }),
      (GFMergeTag.replaceMergeTags = function (e, t) {
        var r,
          n,
          o = GFMergeTag.parseMergeTags(t);
        for (i in o)
          o.hasOwnProperty(i) &&
            ((n = o[i][1]),
            parseInt(n, 10),
            (r = null == o[i][3] ? "" : o[i][3].replace(":", "")),
            (n = GFMergeTag.getMergeTagValue(e, n, r)),
            (t = t.replace(o[i][0], n)));
        return t;
      }),
      (GFMergeTag.formatValue = function (e, t) {
        var r = "",
          r =
            1 < (e = e.split("|")).length && ("price" === t || "currency" === t)
              ? gformToNumber(e[1])
              : e[0];
        switch (t) {
          case "price":
            r = !1 === (r = gformToNumber(r)) ? "" : r;
            break;
          case "currency":
            r = !1 === (r = gformFormatMoney(r, !1)) ? "" : r;
            break;
          case "numeric":
            return !1 === (r = gformToNumber(r)) ? 0 : r;
          default:
            r = r.trim();
        }
        return r;
      }),
      (GFMergeTag.parseMergeTags = function (e, t) {
        void 0 === t && (t = /{[^{]*?:(\d+(\.\d+)?)(:(.*?))?}/i);
        for (var r = []; t.test(e); ) {
          var i = r.length;
          (r[i] = t.exec(e)), (e = e.replace("" + r[i][0], ""));
        }
        return r;
      });
  },
  GFCalc =
    (new GFMergeTag(),
    function (formId, formulaFields) {
      (this.formId = formId),
        (this.formulaFields = formulaFields),
        (this.exprPatt = /^[0-9 -/*\(\)]+$/i),
        (this.isCalculating = {}),
        (this.init = function (e, t) {
          var r = this;
          jQuery(document)
            .off("gform_post_conditional_logic.gfCalc_{0}".gformFormat(e))
            .on(
              "gform_post_conditional_logic.gfCalc_{0}".gformFormat(e),
              function () {
                r.runCalcs(e, t);
              }
            );
          for (var i = 0; i < t.length; i++) {
            var n = jQuery.extend({}, t[i]);
            this.runCalc(n, e), this.bindCalcEvents(n, e);
          }
        }),
        (this.runCalc = function (formulaField, formId) {
          var calcObj = this,
            field = jQuery("#field_" + formId + "_" + formulaField.field_id),
            formulaInput = field.hasClass("gfield_price")
              ? jQuery(
                  "#ginput_base_price_" + formId + "_" + formulaField.field_id
                )
              : jQuery("#input_" + formId + "_" + formulaField.field_id),
            previous_val = formulaInput.val(),
            formula = gform.applyFilters(
              "gform_calculation_formula",
              formulaField.formula,
              formulaField,
              formId,
              calcObj
            ),
            expr = calcObj
              .replaceFieldTags(formId, formula, formulaField)
              .replace(/(\r\n|\n|\r)/gm, ""),
            result = "";
          if (calcObj.exprPatt.test(expr)) {
            try {
              result = eval(expr);
            } catch (e) {}
            isFinite(result) || (result = 0),
              window.gform_calculation_result &&
                ((result = window.gform_calculation_result(
                  result,
                  formulaField,
                  formId,
                  calcObj
                )),
                window.console) &&
                console.log(
                  '"gform_calculation_result" function is deprecated since version 1.8! Use "gform_calculation_result" JS hook instead.'
                );
            var result = gform.applyFilters(
                "gform_calculation_result",
                result,
                formulaField,
                formId,
                calcObj
              ),
              formattedResult = gform.applyFilters(
                "gform_calculation_format_result",
                !1,
                result,
                formulaField,
                formId,
                calcObj
              ),
              numberFormat = gf_get_field_number_format(
                formulaField.field_id,
                formId
              ),
              decimalSeparator,
              thousandSeparator;
            (result =
              !1 !== formattedResult
                ? formattedResult
                : field.hasClass("gfield_price") || "currency" == numberFormat
                ? gformFormatMoney(result || 0, !0)
                : ((decimalSeparator = "."),
                  (thousandSeparator = ","),
                  "decimal_comma" == numberFormat &&
                    ((decimalSeparator = ","), (thousandSeparator = ".")),
                  gformFormatNumber(
                    result,
                    gform.utils.isNumber(formulaField.rounding)
                      ? formulaField.rounding
                      : -1,
                    decimalSeparator,
                    thousandSeparator
                  ))),
              result != previous_val &&
                (field.hasClass("gfield_price")
                  ? (jQuery(
                      "#input_" + formId + "_" + formulaField.field_id
                    ).text(result),
                    formulaInput.val(result).trigger("change"),
                    window.gform.utils.trigger({
                      event: "change",
                      el: formulaInput[0],
                      native: !0,
                    }),
                    jQuery(".gfield_label_product").length &&
                      !jQuery(".ginput_total").length &&
                      ((result =
                        jQuery(
                          "label[ for=input_" +
                            formId +
                            "_" +
                            formulaField.field_id +
                            "_1 ]"
                        )
                          .find(".gfield_label_product")
                          .text() +
                        " " +
                        result),
                      wp.a11y.speak(result)))
                  : formulaInput.val(result).trigger("change"));
          }
        }),
        (this.runCalcs = function (e, t) {
          for (var r = 0; r < t.length; r++) {
            var i = jQuery.extend({}, t[r]);
            this.runCalc(i, e);
          }
        }),
        (this.bindCalcEvents = function (e, t) {
          var r,
            i,
            n,
            o = this,
            a = e.field_id,
            l = GFMergeTag.parseMergeTags(e.formula);
          for (r in ((o.isCalculating[a] = !1), l))
            l.hasOwnProperty(r) &&
              ((i = l[r][1]),
              (n = parseInt(i, 10)),
              "checkbox" ==
                (n = jQuery("#field_" + t + "_" + n).find(
                  'input[name="input_' +
                    i +
                    '"], select[name="input_' +
                    i +
                    '"]'
                )).prop("type") || "radio" == n.prop("type")
                ? jQuery(n).click(function () {
                    o.bindCalcEvent(i, e, t, 0);
                  })
                : (n.is("select") || "hidden" == n.prop("type")
                    ? jQuery(n)
                    : jQuery(n).keydown(function () {
                        o.bindCalcEvent(i, e, t);
                      })
                  ).change(function () {
                    o.bindCalcEvent(i, e, t, 0);
                  }),
              gform.doAction("gform_post_calculation_events", l[r], e, t, o));
        }),
        (this.bindCalcEvent = function (e, t, r, i) {
          var n = this,
            o = t.field_id;
          (i = null == i ? 345 : i),
            n.isCalculating[o][e] && clearTimeout(n.isCalculating[o][e]),
            (n.isCalculating[o][e] = window.setTimeout(function () {
              n.runCalc(t, r);
            }, i));
        }),
        (this.replaceFieldTags = function (e, t, r) {
          var n,
            o,
            a,
            l,
            s,
            c,
            d = GFMergeTag.parseMergeTags(t);
          for (i in d)
            d.hasOwnProperty(i) &&
              ((n = d[i][1]),
              ((o = parseInt(n, 10)) == r.field_id && o == n) ||
                ((a = "value"),
                d[i][3]
                  ? (a = d[i][3])
                  : ((c = jQuery(
                      ".gfield_price input[name=input_" + o + "]"
                    ).is("input[type=radio]")),
                    (s =
                      0 <
                      jQuery(".gfield_price select[name=input_" + o + "]")
                        .length),
                    (l = jQuery(
                      '.gfield_price input[name="input_' + n + '"]'
                    ).is("input[type=checkbox]")),
                    (s || c || l) && (a = "price")),
                (c = (s =
                  !window.gf_check_field_rule ||
                  "show" == gf_check_field_rule(e, o, !0, ""))
                  ? GFMergeTag.getMergeTagValue(e, n, a)
                  : 0),
                (c = gform.applyFilters(
                  "gform_merge_tag_value_pre_calculation",
                  c,
                  d[i],
                  s,
                  r,
                  e
                )),
                (c = this.cleanNumber(c, e, o, r)),
                (t = t.replace(d[i][0], c))));
          return t;
        }),
        (this.cleanNumber = function (e, t, r, i) {
          (r =
            (r = gf_get_field_number_format(r, t)) ||
            gf_get_field_number_format(i.field_id, t)),
            (i = gform.Currency.getDecimalSeparator(r));
          return (e = (e = gform.Currency.cleanNumber(e, "", "", i)) || 0);
        }),
        this.init(formId, formulaFields);
    }),
  __gf_keyup_timeout;
function gformFormatNumber(e, t, r, i) {
  return (
    void 0 === r &&
      (r = window.gf_global
        ? new gform.Currency(gf_global.gf_currency_config).currency
            .decimal_separator
        : "."),
    void 0 === i &&
      (i = window.gf_global
        ? new gform.Currency(gf_global.gf_currency_config).currency
            .thousand_separator
        : ","),
    new gform.Currency().numberFormat(e, t, r, i, !1)
  );
}
function getMatchGroups(e, t) {
  console.log(
    "getMatchGroups() has been deprecated and will be removed in version 3.0. Use GFMergeTags.parseMergeTag() instead."
  );
  for (var r = new Array(); t.test(e); ) {
    var i = r.length;
    (r[i] = t.exec(e)), (e = e.replace("" + r[i][0], ""));
  }
  return r;
}
function gf_get_field_number_format(e, t, r) {
  (t = rgars(window, "gf_global/number_formats/{0}/{1}".gformFormat(t, e))),
    (e = !1);
  return (e =
    "" !== t
      ? void 0 === r
        ? !1 !== t.price
          ? t.price
          : t.value
        : t[r]
      : e);
}
function gformValidateFileSize(e, t) {
  var r = (
    0 < jQuery(e).closest("div").siblings(".validation_message").length
      ? jQuery(e).closest("div")
      : jQuery(e)
  ).siblings(".validation_message");
  window.FileReader &&
    window.File &&
    window.FileList &&
    window.Blob &&
    ((e = e.files[0]) && e.size > t
      ? (r.text(e.name + " - " + gform_gravityforms.strings.file_exceeds_limit),
        wp.a11y.speak(
          e.name + " - " + gform_gravityforms.strings.file_exceeds_limit
        ))
      : r.remove());
}
(gform.recaptcha = {
  renderRecaptcha: function () {
    jQuery(".ginput_recaptcha:not(.gform-initialized)").each(function () {
      var e = jQuery(this),
        t = {
          sitekey: e.data("sitekey"),
          theme: e.data("theme"),
          tabindex: e.data("tabindex"),
        },
        r =
          (e.data("stoken") && (t.stoken = e.data("stoken")),
          gform.applyFilters("gform_recaptcha_callback", !1, e)),
        r = (r && (t.callback = r), grecaptcha.render(this.id, t));
      e[0].setAttribute("data-widget-id", r),
        t.tabindex && e.find("iframe").attr("tabindex", t.tabindex),
        e.addClass("gform-initialized"),
        gform.doAction("gform_post_recaptcha_render", e);
    }),
      gform.recaptcha.bindRecaptchaSubmissionEvents();
  },
  isSubmissionEventsInitialized: !1,
  bindRecaptchaSubmissionEvents: function () {
    gform.recaptcha.isSubmissionEventsInitialized ||
      ((gform.recaptcha.isSubmissionEventsInitialized = !0),
      window.gform.utils.addAsyncFilter(
        "gform/submission/pre_submission",
        async (e) => (
          (e.submissionType === gform.submission.SUBMISSION_TYPE_SUBMIT ||
            e.submissionType === gform.submission.SUBMISSION_TYPE_NEXT) &&
            !e.abort &&
            (await gform.recaptcha.maybeExecuteInvisibleRecaptcha(e)),
          e
        )
      ),
      window.gform.utils.addAsyncFilter(
        "gform/ajax/pre_ajax_validation",
        gform.recaptcha.maybeExecuteInvisibleRecaptcha
      ),
      window.gform.utils.addFilter(
        "gform/ajax/post_ajax_submission",
        gform.recaptcha.handleAjaxPostSubmission
      ),
      window.gform.utils.addFilter(
        "gform/ajax/post_ajax_validation",
        gform.recaptcha.handleAjaxPostValidation
      ));
  },
  maybeExecuteInvisibleRecaptcha: async function (e) {
    var t;
    return (
      gform.recaptcha.gformIsRecaptchaPending(jQuery(e.form)) &&
        ((t = gform.utils.getNode(".ginput_recaptcha", e.form, !0)),
        await gform.recaptcha.executeRecaptcha(
          t.getAttribute("data-widget-id"),
          e.form
        )),
      e
    );
  },
  executeRecaptcha: async function (e, i) {
    return (
      window.grecaptcha.execute(e),
      new Promise((t, e) => {
        let r = setInterval(() => {
          var e = gform.utils.getNode(".g-recaptcha-response", i, !0);
          e && e.value && (clearInterval(r), t(e.value));
        }, 100);
      })
    );
  },
  handleAjaxPostValidation: function (e) {
    return (
      gform.recaptcha.saveRecaptchaResponse(
        e.validationResult.data.recaptcha_response,
        e.form
      ),
      e
    );
  },
  handleAjaxPostSubmission: function (e) {
    return (
      gform.recaptcha.saveRecaptchaResponse(
        e.submissionResult.data.recaptcha_response,
        e.form
      ),
      e
    );
  },
  saveRecaptchaResponse: function (t, r) {
    if (t) {
      let e = gform.tools.getNodes(
        "input[name=g-recaptcha-response]",
        !0,
        r,
        !0
      );
      0 === e.length
        ? (((e = document.createElement("input")).type = "hidden"),
          (e.name = "g-recaptcha-response"),
          r.appendChild(e))
        : (e = e[0]),
        (e.value = t);
    }
  },
  gformIsRecaptchaPending: function (e) {
    var e = e.find(".ginput_recaptcha");
    return !(
      !e.length ||
      "invisible" !== e.data("size") ||
      ((e = e.find(".g-recaptcha-response")).length && e.val())
    );
  },
  needsRender: function () {
    return document.querySelectorAll(
      ".ginput_recaptcha:not(.gform-initialized)"
    )[0];
  },
  renderOnRecaptchaLoaded: function () {
    var e;
    gform.recaptcha.needsRender() &&
      (e = setInterval(function () {
        window.grecaptcha &&
          window.grecaptcha.render &&
          (this.renderRecaptcha(), clearInterval(e));
      }, 100));
  },
}),
  jQuery(document).on(
    "gform_post_render",
    gform.recaptcha.renderOnRecaptchaLoaded
  ),
  (window.renderRecaptcha = gform.recaptcha.renderRecaptcha),
  (window.gformIsRecaptchaPending = gform.recaptcha.gformIsRecaptchaPending),
  ((g, m) => {
    g.uploaders = {};
    var _ =
        "undefined" != typeof gform_gravityforms
          ? gform_gravityforms.strings
          : {},
      p =
        "undefined" != typeof gform_gravityforms
          ? gform_gravityforms.vars.images_url
          : "";
    m(document).on("gform_post_render", function (e, t) {
      m("form#gform_" + t + " .gform_fileupload_multifile").each(function () {
        i(this);
      }),
        r ||
          ((r = !0),
          window.gform.utils.addFilter(
            "gform/submission/pre_submission",
            (e) => (
              (() => {
                let r = !1;
                return (
                  m.each(g.uploaders, function (e, t) {
                    if (0 < t.total.queued) return !(r = !0);
                  }),
                  r
                );
              })() && (alert(_.currently_uploading), (e.abort = !0)),
              e
            ),
            8
          ));
    }),
      m(document).on("gform_post_conditional_logic", function (e, t, r, i) {
        i ||
          m.each(g.uploaders, function (e, t) {
            t.refresh();
          });
      }),
      m(document).ready(function () {
        ("undefined" != typeof adminpage &&
          "toplevel_page_gf_edit_forms" === adminpage) ||
        "undefined" == typeof plupload
          ? m(".gform_button_select_files").prop("disabled", !0)
          : "undefined" != typeof adminpage &&
            -1 < adminpage.indexOf("_page_gf_entries") &&
            m(".gform_fileupload_multifile").each(function () {
              i(this);
            });
      });
    let r = !(g.setup = function (e) {
      i(e);
    });
    function i(o) {
      var d,
        r,
        e = m(o).data("settings"),
        t = new plupload.Uploader(e);
      function f(e, t) {
        m("#" + e).prepend(
          "<li class='gfield_description gfield_validation_message'>" +
            h(t) +
            "</li>"
        ),
          setTimeout(function () {
            wp.a11y.speak(m("#" + e).text());
          }, 1e3);
      }
      function l(e) {
        var t = parseInt(e.gf_vars.max_files, 10);
        0 < t &&
          ((t = t <= i(e.multipart_params.field_id)),
          g.toggleDisabled(e, t),
          t ||
            ((t = e.gf_vars.message_id),
            (e = _.max_reached),
            m("#" + t + " li:contains('" + e + "')").remove()));
      }
      function s() {
        var e = m("#gform_uploaded_files_" + d).val();
        return void 0 === e || "" === e ? {} : m.parseJSON(e);
      }
      function c(e) {
        var t = s(),
          e = u(e);
        return void 0 === t[e] && (t[e] = []), t[e];
      }
      function i(e) {
        return c(e).length;
      }
      function u(e) {
        return "input_" + e;
      }
      function n(e) {
        e.preventDefault();
      }
      (d = t.settings.multipart_params.form_id),
        (g.uploaders[e.container] = t).bind("Init", function (e, t) {
          var r, i, n;
          e.features.dragdrop || m(".gform_drop_instructions").hide(),
            (r = e.settings.container),
            (i = r.querySelectorAll('input[type="file"]')[0]),
            (r = r.querySelectorAll(".gform_button_select_files")[0]),
            (n = m(o).closest(".gfield").find(".gfield_label")[0]),
            i &&
              n &&
              r &&
              (n.setAttribute("for", i.id),
              r.setAttribute(
                "aria-label",
                r.innerText.toLowerCase() + ", " + n.innerText.toLowerCase()
              ),
              i.setAttribute("tabindex", "-1"),
              i.setAttribute("aria-hidden", "true")),
            l(e.settings);
        }),
        (g.toggleDisabled = function (e, t) {
          ("string" == typeof e.browse_button
            ? m("#" + e.browse_button)
            : m(e.browse_button)
          ).prop("disabled", t);
        }),
        t.init(),
        t.bind("BeforeUpload", function (e, t) {
          e.settings.multipart_params.original_filename = t.name;
        }),
        t.bind("FilesAdded", function (o, e) {
          var a,
            t,
            l = parseInt(o.settings.gf_vars.max_files, 10),
            s = i(o.settings.multipart_params.field_id),
            c = o.settings.gf_vars.disallowed_extensions;
          0 < l && l <= s
            ? m.each(e, function (e, t) {
                o.removeFile(t);
              })
            : (m.each(e, function (e, t) {
                var r, i, n;
                (a = t.name.split(".").pop()),
                  -1 < m.inArray(a, c)
                    ? (f(
                        o.settings.gf_vars.message_id,
                        t.name + " - " + _.illegal_extension
                      ),
                      o.removeFile(t))
                    : t.status == plupload.FAILED || (0 < l && l <= s)
                    ? o.removeFile(t)
                    : ((r =
                        void 0 !== t.size
                          ? plupload.formatSize(t.size)
                          : _.in_progress),
                      (i =
                        "$this=jQuery(this); var uploader = gfMultiFileUploader.uploaders." +
                        o.settings.container.id +
                        ";uploader.stop();uploader.removeFile(uploader.getFile('" +
                        t.id +
                        "'));$this.after('" +
                        _.cancelled +
                        "'); uploader.start();$this.remove();"),
                      (n = gform
                        .applyFilters(
                          "gform_file_upload_status_markup",
                          (n =
                            '<div id="{0}" class="ginput_preview"><span class="gfield_fileupload_filename">{1}</span><span class="gfield_fileupload_filesize">{2}</span><span class="gfield_fileupload_progress"><span class="gfield_fileupload_progressbar"><span class="gfield_fileupload_progressbar_progress"></span></span><span class="gfield_fileupload_percent"></span></span><a class="gfield_fileupload_cancel gform-theme-button gform-theme-button--simple" href="javascript:void(0)" title="{3}" onclick="{4}" onkeypress="{4}">{5}</a>'),
                          t,
                          r,
                          _,
                          i,
                          o
                        )
                        .gformFormat(
                          t.id,
                          h(t.name),
                          r,
                          _.cancel_upload,
                          i,
                          _.cancel
                        )),
                      m("#" + o.settings.filelist).prepend(n),
                      s++);
              }),
              o.refresh(),
              0 ==
                (t = m(
                  "form#gform_" +
                    d +
                    " " +
                    (e = "input:hidden[name='gform_unique_id']")
                )).length && (t = m(e)),
              "" === (r = t.val()) &&
                ((r = "xxxxxxxx".replace(/[xy]/g, function (e) {
                  var t = (16 * Math.random()) | 0;
                  return ("x" == e ? t : (3 & t) | 8).toString(16);
                })),
                t.val(r)),
              0 < l &&
                l <= s &&
                (g.toggleDisabled(o.settings, !0),
                f(o.settings.gf_vars.message_id, _.max_reached)),
              (o.settings.multipart_params.gform_unique_id = r),
              o.start());
        }),
        t.bind("UploadProgress", function (e, t) {
          var r = t.percent + "%";
          m("#" + t.id + " span.gfield_fileupload_percent").php(r),
            m("#" + t.id + " span.gfield_fileupload_progressbar_progress").css(
              "width",
              t.percent + "%"
            );
        }),
        t.bind("Error", function (e, t) {
          var r;
          t.code === plupload.FILE_EXTENSION_ERROR
            ? ((r = (
                void 0 !== e.settings.filters.mime_types
                  ? e.settings.filters.mime_types
                  : e.settings.filters
              )[0].extensions),
              f(
                e.settings.gf_vars.message_id,
                t.file.name + " - " + _.invalid_file_extension + " " + r
              ))
            : t.code === plupload.FILE_SIZE_ERROR
            ? f(
                e.settings.gf_vars.message_id,
                t.file.name + " - " + _.file_exceeds_limit
              )
            : ((r =
                "Error: " +
                t.code +
                ", Message: " +
                t.message +
                (t.file ? ", File: " + t.file.name : "")),
              f(e.settings.gf_vars.message_id, r)),
            m("#" + t.file.id).php(""),
            e.refresh();
        }),
        t.bind("ChunkUploaded", function (e, t, r) {
          r = m.secureEvalJSON(r.response);
          "error" == r.status
            ? (e.removeFile(t),
              f(
                e.settings.gf_vars.message_id,
                t.name + " - " + r.error.message
              ),
              m("#" + t.id).php(""))
            : (e.settings.multipart_params[t.target_name] = r.data);
        }),
        t.bind("FileUploaded", function (e, t, r) {
          var i, n, o, a;
          e.getFile(t.id) &&
            ("error" == (r = m.secureEvalJSON(r.response)).status
              ? (f(
                  e.settings.gf_vars.message_id,
                  t.name + " - " + r.error.message
                ),
                m("#" + t.id).php(""),
                l(e.settings))
              : ((a =
                  '<span class="gfield_fileupload_filename">' +
                  h((o = rgars(r, "data/uploaded_filename"))) +
                  '</span><span class="gfield_fileupload_filesize">' +
                  plupload.formatSize(t.size) +
                  "</span>"),
                (a +=
                  '<span class="gfield_fileupload_progress gfield_fileupload_progress_complete"><span class="gfield_fileupload_progressbar"><span class="gfield_fileupload_progressbar_progress"></span></span><span class="gfield_fileupload_percent">' +
                  t.percent +
                  "%</span></span>"),
                (n = e.settings.multipart_params.form_id),
                (i = e.settings.multipart_params.field_id),
                (a =
                  "undefined" != typeof gf_legacy && gf_legacy.is_legacy
                    ? "<img class='gform_delete' src='" +
                      p +
                      "/delete.png' onclick='gformDeleteUploadedFile(" +
                      n +
                      "," +
                      i +
                      ", this);' onkeypress='gformDeleteUploadedFile(" +
                      n +
                      "," +
                      i +
                      ", this);' alt='" +
                      _.delete_file +
                      "' title='" +
                      _.delete_file +
                      "' /> " +
                      a
                    : a +
                      "<button class='gform_delete_file gform-theme-button gform-theme-button--simple' onclick='gformDeleteUploadedFile(" +
                      n +
                      "," +
                      i +
                      ", this);'><span class='dashicons dashicons-trash' aria-hidden='true'></span><span class='screen-reader-text'>" +
                      _.delete_file +
                      ": " +
                      h(o) +
                      "</span></button>"),
                (a = gform.applyFilters(
                  "gform_file_upload_markup",
                  a,
                  t,
                  e,
                  _,
                  p,
                  r
                )),
                m("#" + t.id).php(a),
                m(
                  "#" + t.id + " span.gfield_fileupload_progressbar_progress"
                ).css("width", t.percent + "%"),
                100 == t.percent &&
                  (r.status && "ok" == r.status
                    ? ((n = i),
                      (o = r.data),
                      (a = c(n)).unshift(o),
                      (i = n),
                      (r = a),
                      (o = s()),
                      (n = m("#gform_uploaded_files_" + d)),
                      (o[(i = u(i))] = r),
                      n.val(m.toJSON(o)))
                    : f(
                        e.settings.gf_vars.message_id,
                        _.unknown_error + ": " + t.name
                      ))));
        }),
        t.bind("FilesRemoved", function (e, t) {
          l(e.settings);
        }),
        m("#" + e.drop_element).on({ dragenter: n, dragover: n });
    }
    function h(e) {
      return m("<div/>").text(e).php();
    }
  })((window.gfMultiFileUploader = window.gfMultiFileUploader || {}), jQuery);
let gformIsSpinnerInitialized = !1;
function gformInitSpinner(e, t, r = 0) {
  gformIsSpinnerInitialized ||
    ((gformIsSpinnerInitialized = !0),
    window.gform.utils.addFilter(
      "gform/submission/pre_submission",
      (e) => (gformShowSpinner(e.form.dataset.formid, t), e),
      3
    ),
    document.addEventListener(
      "gform/submission/submission_aborted",
      function (e) {
        gformRemoveSpinner(),
          jQuery(
            "#gform_ajax_spinner_" + e.detail.form.dataset.formid
          ).remove();
      }
    ));
}
function gformShowSpinner(e, t) {
  t = gform.applyFilters("gform_spinner_url", t, e);
  t !== gform.applyFilters("gform_spinner_url", gf_global.spinnerUrl, e)
    ? gformAddSpinner(e, t)
    : gformInitializeSpinner(
        e,
        gform.applyFilters(
          "gform_spinner_target_elem",
          jQuery(
            "#gform_submit_button_" +
              e +
              ", #gform_wrapper_" +
              e +
              " .gform_next_button, #gform_send_resume_link_button_" +
              e
          ),
          e
        )
      );
}
function gformInitializeSpinner(e, t, r = "gform-ajax-spinner") {
  0 == jQuery("#gform_ajax_spinner_" + e).length &&
    ((r =
      '<span data-js-spinner-id="' +
      r +
      '" id="gform_ajax_spinner_' +
      e +
      '" class="gform-loader"></span>'),
    (t instanceof jQuery ? t : jQuery(t)).after(r));
}
function gformRemoveSpinner(e = "gform-ajax-spinner") {
  e = document.querySelectorAll('[data-js-spinner-id="' + e + '"]');
  e &&
    e.forEach(function (e) {
      e.remove();
    });
}
function gformAddSpinner(e, t) {
  (void 0 !== t && t) ||
    (t = gform.applyFilters("gform_spinner_url", gf_global.spinnerUrl, e)),
    0 == jQuery("#gform_ajax_spinner_" + e).length &&
      gform
        .applyFilters(
          "gform_spinner_target_elem",
          jQuery(
            "#gform_submit_button_" +
              e +
              ", #gform_wrapper_" +
              e +
              " .gform_next_button, #gform_send_resume_link_button_" +
              e
          ),
          e
        )
        .after(
          '<img id="gform_ajax_spinner_' +
            e +
            '"  class="gform_ajax_spinner" src="' +
            t +
            '" alt="" />'
        );
}
function gformReInitTinymceInstance(e, t) {
  var r, i, n;
  e && t
    ? (r = window.tinymce)
      ? (i = r.get("input_" + e + "_" + t))
        ? ((n = jQuery.extend({}, i.settings)),
          i.remove(),
          r.init(n),
          gform.console.log(
            "gformReInitTinymceInstance reinitialized TinyMCE on input_" +
              e +
              "_" +
              t +
              "."
          ))
        : gform.console.error(
            "gformReInitTinymceInstance did not find an instance for input_" +
              e +
              "_" +
              t +
              "."
          )
      : gform.console.error(
          "gformReInitTinymceInstance requires tinymce to be available."
        )
    : gform.console.error(
        "gformReInitTinymceInstance requires a form and field id."
      );
}
function gf_raw_input_change(e, t) {
  clearTimeout(__gf_keyup_timeout);
  var r = jQuery(t),
    i = r.attr("id"),
    n = gf_get_input_id_by_html_id(i),
    o = gf_get_form_id_by_html_id(i),
    i = gform.applyFilters(
      "gform_field_meta_raw_input_change",
      { fieldId: n, formId: o },
      r,
      e
    ),
    n = i.fieldId,
    o = i.formId;
  n &&
    ((r =
      !(i = r.is(":checkbox") || r.is(":radio") || r.is("select")) ||
      r.is("textarea")),
    ("keyup" == e.type && !r) ||
      ("change" == e.type && !i && !r) ||
      ("keyup" == e.type
        ? (__gf_keyup_timeout = setTimeout(function () {
            gf_input_change(t, o, n);
          }, 300))
        : gf_input_change(t, o, n)));
}
function gf_get_input_id_by_html_id(e) {
  var e = gf_get_ids_by_html_id(e),
    t = e[e.length - 1];
  return 3 == e.length && (e.shift(), (t = e.join("."))), t;
}
function gf_get_form_id_by_html_id(e) {
  return gf_get_ids_by_html_id(e)[0];
}
function gf_get_ids_by_html_id(e) {
  for (var t = e ? e.split("_") : [], r = t.length - 1; 0 <= r; r--)
    gform.utils.isNumber(t[r]) || t.splice(r, 1);
  return t;
}
function gf_input_change(e, t, r) {
  gform.doAction("gform_input_change", e, t, r);
}
function gformExtractFieldId(e) {
  var t = parseInt(e.toString().split(".")[0], 10);
  return t || e;
}
function gformExtractInputIndex(e) {
  e = parseInt(e.toString().split(".")[1], 10);
  return e || !1;
}
jQuery(document).on(
  "change keyup",
  ".gfield input, .gfield select, .gfield textarea",
  function (e) {
    gf_raw_input_change(e, this);
  }
);
{
  function rgars(e, t) {
    for (var r = t.split("/"), i = e, n = 0; n < r.length; n++)
      i = rgar(i, r[n]);
    return i;
  }
  window.rgars;
}
{
  function rgar(e, t) {
    return void 0 !== e[t] ? e[t] : "";
  }
}
String.prototype.gformFormat ||
  (String.prototype.gformFormat = function () {
    var r = arguments;
    return this.replace(/{(\d+)}/g, function (e, t) {
      return void 0 !== r[t] ? r[t] : e;
    });
  }),
  jQuery(document).ready(function () {
    jQuery("#gform-form-toolbar__menu").on(
      "mouseenter focus",
      "> li",
      function () {
        jQuery(this).find(".gform-form-toolbar__submenu").toggleClass("open"),
          jQuery(this).find(".has_submenu").toggleClass("submenu-open");
      }
    ),
      jQuery("#gform-form-toolbar__menu").on(
        "mouseleave blur",
        "> li",
        function () {
          jQuery(".gform-form-toolbar__submenu.open").removeClass("open"),
            jQuery(".has_submenu.submenu-open").removeClass("submenu-open");
        }
      ),
      jQuery("#gform-form-toolbar__menu .has_submenu").on(
        "click",
        function (e) {
          e.preventDefault();
        }
      );
  }),
  jQuery(document).ready(function () {
    jQuery(".gform-settings-field").each(function () {
      1 < jQuery(this).find("> .gform-settings-input__container").length &&
        jQuery(this).addClass("gform-settings-field--multiple-inputs");
    });
  }),
  jQuery(function () {
    gform.tools.trigger("gform_main_scripts_loaded");
  });
