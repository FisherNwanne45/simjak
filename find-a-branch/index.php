<?php
include('../resources/config.php');
        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>
<html id="sitetop" lang="en-US" class="attop">


    <!-- Mirrored from <?php echo $row['url']; ?>/find-a-branch/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 23:46:31 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8" />
        <script>
        if (navigator.userAgent.match(/MSIE|Internet Explorer/i) || navigator.userAgent.match(
            /Trident\/7\..*?rv:11/i)) {
            var href = document.location.href;
            if (!href.match(/[?&]nowprocket/)) {
                if (href.indexOf("?") == -1) {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "?nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "?nowprocket=1#")
                    }
                } else {
                    if (href.indexOf("#") == -1) {
                        document.location.href = href + "&nowprocket=1"
                    } else {
                        document.location.href = href.replace("#", "&nowprocket=1#")
                    }
                }
            }
        }
        </script>
        <script>
        (() => {
            class RocketLazyLoadScripts {
                constructor() {
                    this.v = "1.2.6", this.triggerEvents = ["keydown", "mousedown", "mousemove", "touchmove",
                            "touchstart", "touchend", "wheel"
                        ], this.userEventHandler = this.t.bind(this), this.touchStartHandler = this.i.bind(
                        this), this.touchMoveHandler = this.o.bind(this), this.touchEndHandler = this.h.bind(
                            this), this.clickHandler = this.u.bind(this), this.interceptedClicks = [], this
                        .interceptedClickListeners = [], this.l(this), window.addEventListener("pageshow", (
                        t => {
                            this.persisted = t.persisted, this.everythingLoaded && this.m()
                        })), this.CSPIssue = sessionStorage.getItem("rocketCSPIssue"), document
                        .addEventListener("securitypolicyviolation", (t => {
                            this.CSPIssue || "script-src-elem" !== t.violatedDirective || "data" !== t
                                .blockedURI || (this.CSPIssue = !0, sessionStorage.setItem(
                                    "rocketCSPIssue", !0))
                        })), document.addEventListener("DOMContentLoaded", (() => {
                            this.k()
                        })), this.delayedScripts = {
                            normal: [],
                            async: [],
                            defer: []
                        }, this.trash = [], this.allJQueries = []
                }
                p(t) {
                    document.hidden ? t.t() : (this.triggerEvents.forEach((e => window.addEventListener(e, t
                            .userEventHandler, {
                                passive: !0
                            }))), window.addEventListener("touchstart", t.touchStartHandler, {
                            passive: !0
                        }), window.addEventListener("mousedown", t.touchStartHandler), document
                        .addEventListener("visibilitychange", t.userEventHandler))
                }
                _() {
                    this.triggerEvents.forEach((t => window.removeEventListener(t, this.userEventHandler, {
                        passive: !0
                    }))), document.removeEventListener("visibilitychange", this.userEventHandler)
                }
                i(t) {
                    "HTML" !== t.target.tagName && (window.addEventListener("touchend", this.touchEndHandler),
                        window.addEventListener("mouseup", this.touchEndHandler), window.addEventListener(
                            "touchmove", this.touchMoveHandler, {
                                passive: !0
                            }), window.addEventListener("mousemove", this.touchMoveHandler), t.target
                        .addEventListener("click", this.clickHandler), this.L(t.target, !0), this.S(t
                            .target, "onclick", "rocket-onclick"), this.C())
                }
                o(t) {
                    window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener(
                            "mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this
                            .touchMoveHandler, {
                                passive: !0
                            }), window.removeEventListener("mousemove", this.touchMoveHandler), t.target
                        .removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t.target,
                            "rocket-onclick", "onclick"), this.M()
                }
                h() {
                    window.removeEventListener("touchend", this.touchEndHandler), window.removeEventListener(
                        "mouseup", this.touchEndHandler), window.removeEventListener("touchmove", this
                        .touchMoveHandler, {
                            passive: !0
                        }), window.removeEventListener("mousemove", this.touchMoveHandler)
                }
                u(t) {
                    t.target.removeEventListener("click", this.clickHandler), this.L(t.target, !1), this.S(t
                            .target, "rocket-onclick", "onclick"), this.interceptedClicks.push(t), t
                        .preventDefault(), t.stopPropagation(), t.stopImmediatePropagation(), this.M()
                }
                O() {
                    window.removeEventListener("touchstart", this.touchStartHandler, {
                            passive: !0
                        }), window.removeEventListener("mousedown", this.touchStartHandler), this
                        .interceptedClicks.forEach((t => {
                            t.target.dispatchEvent(new MouseEvent("click", {
                                view: t.view,
                                bubbles: !0,
                                cancelable: !0
                            }))
                        }))
                }
                l(t) {
                    EventTarget.prototype.addEventListenerWPRocketBase = EventTarget.prototype.addEventListener,
                        EventTarget.prototype.addEventListener = function(e, i, o) {
                            "click" !== e || t.windowLoaded || i === t.clickHandler || t
                                .interceptedClickListeners.push({
                                    target: this,
                                    func: i,
                                    options: o
                                }), (this || window).addEventListenerWPRocketBase(e, i, o)
                        }
                }
                L(t, e) {
                    this.interceptedClickListeners.forEach((i => {
                        i.target === t && (e ? t.removeEventListener("click", i.func, i.options) : t
                            .addEventListener("click", i.func, i.options))
                    })), t.parentNode !== document.documentElement && this.L(t.parentNode, e)
                }
                D() {
                    return new Promise((t => {
                        this.P ? this.M = t : t()
                    }))
                }
                C() {
                    this.P = !0
                }
                M() {
                    this.P = !1
                }
                S(t, e, i) {
                    t.hasAttribute && t.hasAttribute(e) && (event.target.setAttribute(i, event.target
                        .getAttribute(e)), event.target.removeAttribute(e))
                }
                t() {
                    this._(this), "loading" === document.readyState ? document.addEventListener(
                        "DOMContentLoaded", this.R.bind(this)) : this.R()
                }
                k() {
                    let t = [];
                    document.querySelectorAll("script[type=rocketlazyloadscript][data-rocket-src]").forEach((
                        e => {
                            let i = e.getAttribute("data-rocket-src");
                            if (i && !i.startsWith("data:")) {
                                0 === i.indexOf("//") && (i = location.protocol + i);
                                try {
                                    const o = new URL(i.php).origin;
                                    o !== location.origin && t.push({
                                        src: o,
                                        crossOrigin: e.crossOrigin || "module" === e
                                            .getAttribute("data-rocket-type")
                                    })
                                } catch (t) {}
                            }
                        })), t = [...new Map(t.map((t => [JSON.stringify(t), t]))).values()], this.T(t,
                        "preconnect")
                }
                async R() {
                    this.lastBreath = Date.now(), this.j(this), this.F(this), this.I(), this.W(), this.q(),
                        await this.A(this.delayedScripts.normal), await this.A(this.delayedScripts.defer),
                        await this.A(this.delayedScripts.async);
                    try {
                        await this.U(), await this.H(this), await this.J()
                    } catch (t) {
                        console.error(t)
                    }
                    window.dispatchEvent(new Event("rocket-allScriptsLoaded")), this.everythingLoaded = !0, this
                        .D().then((() => {
                            this.O()
                        })), this.N()
                }
                W() {
                    document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t => {
                        t.hasAttribute("data-rocket-src") ? t.hasAttribute("async") && !1 !== t
                            .async ? this.delayedScripts.async.push(t) : t.hasAttribute("defer") &&
                            !1 !== t.defer || "module" === t.getAttribute("data-rocket-type") ? this
                            .delayedScripts.defer.push(t) : this.delayedScripts.normal.push(t) :
                            this.delayedScripts.normal.push(t)
                    }))
                }
                async B(t) {
                    if (await this.G(), !0 !== t.noModule || !("noModule" in HTMLScriptElement.prototype))
                        return new Promise((e => {
                            let i;

                            function o() {
                                (i || t).setAttribute("data-rocket-status", "executed"), e()
                            }
                            try {
                                if (navigator.userAgent.indexOf("Firefox/index.php") > 0 || "" ===
                                    navigator.vendor || this.CSPIssue) i = document.createElement(
                                    "script"), [...t.attributes].forEach((t => {
                                    let e = t.nodeName;
                                    "type" !== e && ("data-rocket-type" === e && (e =
                                        "type"), "data-rocket-src" === e && (e =
                                        "src"), i.setAttribute(e, t.nodeValue))
                                })), t.text && (i.text = t.text), i.hasAttribute("src") ? (i
                                    .addEventListener("load", o), i.addEventListener("error", (
                                        function() {
                                            i.setAttribute("data-rocket-status",
                                                "failed-network"), e()
                                        })), setTimeout((() => {
                                        i.isConnected || e()
                                    }), 1)) : (i.text = t.text, o()), t.parentNode.replaceChild(
                                    i, t);
                                else {
                                    const i = t.getAttribute("data-rocket-type"),
                                        s = t.getAttribute("data-rocket-src");
                                    i ? (t.type = i, t.removeAttribute("data-rocket-type")) : t
                                        .removeAttribute("type"), t.addEventListener("load", o), t
                                        .addEventListener("error", (i => {
                                            this.CSPIssue && i.target.src.startsWith(
                                                "data:") ? (console.log(
                                                "WPRocket: data-uri blocked by CSP -> fallback"
                                                ), t.removeAttribute("src"), this.B(
                                                t).then(e)) : (t.setAttribute(
                                                "data-rocket-status",
                                                "failed-network"), e())
                                        })), s ? (t.removeAttribute("data-rocket-src"), t.src = s) :
                                        t.src = "data:text/javascript;base64," + window.btoa(
                                            unescape(encodeURIComponent(t.text)))
                                }
                            } catch (i) {
                                t.setAttribute("data-rocket-status", "failed-transform"), e()
                            }
                        }));
                    t.setAttribute("data-rocket-status", "skipped")
                }
                async A(t) {
                    const e = t.shift();
                    return e && e.isConnected ? (await this.B(e), this.A(t)) : Promise.resolve()
                }
                q() {
                    this.T([...this.delayedScripts.normal, ...this.delayedScripts.defer, ...this.delayedScripts
                        .async
                    ], "preload")
                }
                T(t, e) {
                    var i = document.createDocumentFragment();
                    t.forEach((t => {
                        const o = t.getAttribute && t.getAttribute("data-rocket-src") || t.src;
                        if (o && !o.startsWith("data:")) {
                            const s = document.createElement("link");
                            s.href = o, s.rel = e, "preconnect" !== e && (s.as = "script"), t
                                .getAttribute && "module" === t.getAttribute("data-rocket-type") &&
                                (s.crossOrigin = !0), t.crossOrigin && (s.crossOrigin = t
                                    .crossOrigin), t.integrity && (s.integrity = t.integrity), i
                                .appendChild(s), this.trash.push(s)
                        }
                    })), document.head.appendChild(i)
                }
                j(t) {
                    let e = {};

                    function i(i, o) {
                        return e[o].eventsToRewrite.indexOf(i) >= 0 && !t.everythingLoaded ? "rocket-" + i : i
                    }

                    function o(t, o) {
                        ! function(t) {
                            e[t] || (e[t] = {
                                originalFunctions: {
                                    add: t.addEventListener,
                                    remove: t.removeEventListener
                                },
                                eventsToRewrite: []
                            }, t.addEventListener = function() {
                                arguments[0] = i(arguments[0], t), e[t].originalFunctions.add.apply(t,
                                    arguments)
                            }, t.removeEventListener = function() {
                                arguments[0] = i(arguments[0], t), e[t].originalFunctions.remove.apply(
                                    t, arguments)
                            })
                        }(t), e[t].eventsToRewrite.push(o)
                    }

                    function s(e, i) {
                        let o = e[i];
                        e[i] = null, Object.defineProperty(e, i, {
                            get: () => o || function() {},
                            set(s) {
                                t.everythingLoaded ? o = s : e["rocket" + i] = o = s
                            }
                        })
                    }
                    o(document, "DOMContentLoaded"), o(window, "DOMContentLoaded"), o(window, "load"), o(window,
                        "pageshow"), o(document, "readystatechange"), s(document, "onreadystatechange"), s(
                        window, "onload"), s(window, "onpageshow");
                    try {
                        Object.defineProperty(document, "readyState", {
                            get: () => t.rocketReadyState,
                            set(e) {
                                t.rocketReadyState = e
                            },
                            configurable: !0
                        }), document.readyState = "loading"
                    } catch (t) {
                        console.log("WPRocket DJE readyState conflict, bypassing")
                    }
                }
                F(t) {
                    let e;

                    function i(e) {
                        return t.everythingLoaded ? e : e.split(" ").map((t => "load" === t || 0 === t.indexOf(
                            "load.") ? "rocket-jquery-load" : t)).join(" ")
                    }

                    function o(o) {
                        function s(t) {
                            const e = o.fn[t];
                            o.fn[t] = o.fn.init.prototype[t] = function() {
                                return this[0] === window && ("string" == typeof arguments[0] || arguments[
                                        0] instanceof String ? arguments[0] = i(arguments[0]) :
                                    "object" == typeof arguments[0] && Object.keys(arguments[0])
                                    .forEach((t => {
                                        const e = arguments[0][t];
                                        delete arguments[0][t], arguments[0][i(t)] = e
                                    }))), e.apply(this, arguments), this
                            }
                        }
                        o && o.fn && !t.allJQueries.includes(o) && (o.fn.ready = o.fn.init.prototype.ready =
                            function(e) {
                                return t.domReadyFired ? e.bind(document)(o) : document.addEventListener(
                                    "rocket-DOMContentLoaded", (() => e.bind(document)(o))), o([])
                            }, s("on"), s("one"), t.allJQueries.push(o)), e = o
                    }
                    o(window.jQuery), Object.defineProperty(window, "jQuery", {
                        get: () => e,
                        set(t) {
                            o(t)
                        }
                    })
                }
                async H(t) {
                    const e = document.querySelector("script[data-webpack]");
                    e && (await async function() {
                        return new Promise((t => {
                            e.addEventListener("load", t), e.addEventListener("error",
                                t)
                        }))
                    }(), await t.K(), await t.H(t))
                }
                async U() {
                    this.domReadyFired = !0;
                    try {
                        document.readyState = "interactive"
                    } catch (t) {}
                    await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this
                    .G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this
                        .G(), document.dispatchEvent(new Event("rocket-DOMContentLoaded")), await this.G(),
                        window.dispatchEvent(new Event("rocket-DOMContentLoaded"))
                }
                async J() {
                    try {
                        document.readyState = "complete"
                    } catch (t) {}
                    await this.G(), document.dispatchEvent(new Event("rocket-readystatechange")), await this
                    .G(), document.rocketonreadystatechange && document.rocketonreadystatechange(), await this
                        .G(), window.dispatchEvent(new Event("rocket-load")), await this.G(), window
                        .rocketonload && window.rocketonload(), await this.G(), this.allJQueries.forEach((t =>
                            t(window).trigger("rocket-jquery-load"))), await this.G();
                    const t = new Event("rocket-pageshow");
                    t.persisted = this.persisted, window.dispatchEvent(t), await this.G(), window
                        .rocketonpageshow && window.rocketonpageshow({
                            persisted: this.persisted
                        }), this.windowLoaded = !0
                }
                m() {
                    document.onreadystatechange && document.onreadystatechange(), window.onload && window
                        .onload(), window.onpageshow && window.onpageshow({
                            persisted: this.persisted
                        })
                }
                I() {
                    const t = new Map;
                    document.write = document.writeln = function(e) {
                        const i = document.currentScript;
                        i || console.error("WPRocket unable to document.write this: " + e);
                        const o = document.createRange(),
                            s = i.parentElement;
                        let n = t.get(i);
                        void 0 === n && (n = i.nextSibling, t.set(i, n));
                        const c = document.createDocumentFragment();
                        o.setStart(c, 0), c.appendChild(o.createContextualFragment(e)), s.insertBefore(c, n)
                    }
                }
                async G() {
                    Date.now() - this.lastBreath > 45 && (await this.K(), this.lastBreath = Date.now())
                }
                async K() {
                    return document.hidden ? new Promise((t => setTimeout(t))) : new Promise((t =>
                        requestAnimationFrame(t)))
                }
                N() {
                    this.trash.forEach((t => t.remove()))
                }
                static run() {
                    const t = new RocketLazyLoadScripts;
                    t.p(t)
                }
            }
            RocketLazyLoadScripts.run()
        })();
        </script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge, chome=1" />
        <script>
        var gform;
        gform || (document.addEventListener("gform_main_scripts_loaded", function() {
            gform.scriptsLoaded = !0
        }), document.addEventListener("gform/theme/scripts_loaded", function() {
            gform.themeScriptsLoaded = !0
        }), window.addEventListener("DOMContentLoaded", function() {
            gform.domLoaded = !0
        }), gform = {
            domLoaded: !1,
            scriptsLoaded: !1,
            themeScriptsLoaded: !1,
            isFormEditor: () => "function" == typeof InitializeEditor,
            callIfLoaded: function(o) {
                return !(!gform.domLoaded || !gform.scriptsLoaded || !gform.themeScriptsLoaded && !gform
                    .isFormEditor() || (gform.isFormEditor() && console.warn(
                        "The use of gform.initializeOnLoaded() is deprecated in the form editor context and will be removed in Gravity Forms 3.1."
                        ), o(), 0))
            },
            initializeOnLoaded: function(o) {
                gform.callIfLoaded(o) || (document.addEventListener("gform_main_scripts_loaded", () => {
                    gform.scriptsLoaded = !0, gform.callIfLoaded(o)
                }), document.addEventListener("gform/theme/scripts_loaded", () => {
                    gform.themeScriptsLoaded = !0, gform.callIfLoaded(o)
                }), window.addEventListener("DOMContentLoaded", () => {
                    gform.domLoaded = !0, gform.callIfLoaded(o)
                }))
            },
            hooks: {
                action: {},
                filter: {}
            },
            addAction: function(o, r, e, t) {
                gform.addHook("action", o, r, e, t)
            },
            addFilter: function(o, r, e, t) {
                gform.addHook("filter", o, r, e, t)
            },
            doAction: function(o) {
                gform.doHook("action", o, arguments)
            },
            applyFilters: function(o) {
                return gform.doHook("filter", o, arguments)
            },
            removeAction: function(o, r) {
                gform.removeHook("action", o, r)
            },
            removeFilter: function(o, r, e) {
                gform.removeHook("filter", o, r, e)
            },
            addHook: function(o, r, e, t, n) {
                null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
                var d = gform.hooks[o][r];
                null == n && (n = r + "_" + d.length), gform.hooks[o][r].push({
                    tag: n,
                    callable: e,
                    priority: t = null == t ? 10 : t
                })
            },
            doHook: function(r, o, e) {
                var t;
                if (e = Array.prototype.slice.call(e, 1), null != gform.hooks[r][o] && ((o = gform.hooks[r][
                        o
                    ]).sort(function(o, r) {
                        return o.priority - r.priority
                    }), o.forEach(function(o) {
                        "function" != typeof(t = o.callable) && (t = window[t]), "action" == r ? t
                            .apply(null, e) : e[0] = t.apply(null, e)
                    })), "filter" == r) return e[0]
            },
            removeHook: function(o, r, t, n) {
                var e;
                null != gform.hooks[o][r] && (e = (e = gform.hooks[o][r]).filter(function(o, r, e) {
                    return !!(null != n && n != o.tag || null != t && t != o.priority)
                }), gform.hooks[o][r] = e)
            }
        });
        </script>


        <meta name="viewport" content="width=device-width,initial-scale=1">
        <style type="text/css">
        #gform_wrapper_1 .gform_footer {
            visibility: hidden;
            position: absolute;
            left: -100vw;
        }
        </style>
        <script type="rocketlazyloadscript">
            function submitGForm() {
    		document.addEventListener( "DOMContentLoaded", function( e ) {
	            if ( typeof jQuery !== "undefined" ) {
	                jQuery(document).on( "click", "#gform_1 button", function(e) {

	                    if( jQuery(this).data("isclicked" ) === true ) {
	                        e.preventDefault();
	                        return false;
	                    }
	                    
	                    jQuery(this).css("opacity", 0.2).data("isclicked", true);
	                });
	            }
	        });
    	}
    </script>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <style>
        img:is([sizes="auto"i], [sizes^="auto,"i]) {
            contain-intrinsic-size: 3000px 1500px
        }
        </style>
        <link rel="alternate" hreflang="en" href="index.php" />
        <link rel="alternate" hreflang="es" href="../es/sucursales/index.php" />
        <link rel="alternate" hreflang="x-default" href="index.php" />
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>


        <!-- This site is optimized with the Yoast SEO plugin v24.0 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Find the Nearest Personal Loan Offices | <?php echo $row['name']; ?>®</title>
        <link rel="preload" data-rocket-preload as="style"
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
            media="print" onload="this.media='all'" /><noscript>
            <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" />
        </noscript>
        <link rel="preload" data-rocket-preload as="image"
            href="../wp-content/themes/sunloan-theme/assets/images/dot-3.svg" fetchpriority="high">
        <meta name="description"
            content="Find a <?php echo $row['name']; ?> location near you to apply for a loan or pick up your check if you&#039;ve already been approved. Offices in TX, AL, IL, MO, NV, NM, &amp; OK." />
        <link rel="canonical" href="index.php" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Find the Nearest Personal Loan Offices | <?php echo $row['name']; ?>®" />
        <meta property="og:description"
            content="Find a <?php echo $row['name']; ?> location near you to apply for a loan or pick up your check if you&#039;ve already been approved. Offices in TX, AL, IL, MO, NV, NM, &amp; OK." />
        <meta property="og:url" content="index.php" />
        <meta property="og:site_name" content="<?php echo $row['name']; ?>" />
        <meta property="article:modified_time" content="2023-03-24T18:16:47+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="1 minute" />
        <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "<?php echo $row['url']; ?>find-a-branch/",
                "url": "<?php echo $row['url']; ?>find-a-branch/",
                "name": "Find the Nearest Personal Loan Offices | <?php echo $row['name']; ?>®",
                "isPartOf": {
                    "@id": "<?php echo $row['url']; ?>#website"
                },
                "datePublished": "2022-04-27T06:23:23+00:00",
                "dateModified": "2023-03-24T18:16:47+00:00",
                "description": "Find a <?php echo $row['name']; ?> location near you to apply for a loan or pick up your check if you've already been approved. Offices in TX, AL, IL, MO, NV, NM, & OK.",
                "breadcrumb": {
                    "@id": "<?php echo $row['url']; ?>find-a-branch/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["<?php echo $row['url']; ?>find-a-branch/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "<?php echo $row['url']; ?>find-a-branch/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "<?php echo $row['url']; ?>"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Contact Us"
                }]
            }, {
                "@type": "WebSite",
                "@id": "<?php echo $row['url']; ?>#website",
                "url": "<?php echo $row['url']; ?>",
                "name": "<?php echo $row['name']; ?>",
                "description": "",
                "publisher": {
                    "@id": "<?php echo $row['url']; ?>#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "<?php echo $row['url']; ?>?s={search_term_string}"
                    },
                    "query-input": {
                        "@type": "PropertyValueSpecification",
                        "valueRequired": true,
                        "valueName": "search_term_string"
                    }
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "Organization",
                "@id": "<?php echo $row['url']; ?>#organization",
                "name": "<?php echo $row['name']; ?>",
                "url": "<?php echo $row['url']; ?>",
                "logo": {
                    "@type": "ImageObject",
                    "inLanguage": "en-US",
                    "@id": "<?php echo $row['url']; ?>#/schema/logo/image/",
                    "url": "<?php echo $row['url']; ?>/wp-content/uploads/2022/04/logo.png",
                    "contentUrl": "<?php echo $row['url']; ?>/wp-content/uploads/2022/04/logo.png",
                    "width": 1,
                    "height": 1,
                    "caption": "<?php echo $row['name']; ?>"
                },
                "image": {
                    "@id": "<?php echo $row['url']; ?>#/schema/logo/image/"
                }
            }]
        }
        </script>
        <!-- / Yoast SEO plugin. -->


        <link rel='dns-prefetch' href='http://www.google.com/' />
        <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
        <link rel="alternate" type="application/rss+xml" title="<?php echo $row['name']; ?> &raquo; Feed"
            href="../feed/index.php" />
        <script>
        var translations = ["Select an option", "Get directions", "More details"]
        </script>
        <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color)
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
        </style>
        <link data-minify="1" rel='stylesheet' id='wpml-blocks-css'
            href='../wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='wpsl-styles-css'
            href='../wp-content/cache/min/1/wp-content/plugins/wp-store-locator/css/styles.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='wpml-legacy-dropdown-0-css'
            href='../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/style.min68b3.css?ver=1'
            media='all' />
        <link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'
            href='../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.min68b3.css?ver=1'
            media='all' />
        <style id='wpml-legacy-horizontal-list-0-inline-css'>
        .wpml-ls-statics-footer a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link,
        .wpml-ls-statics-footer li:not(.wpml-ls-current-language) .wpml-ls-link,
        .wpml-ls-statics-footer li:not(.wpml-ls-current-language) .wpml-ls-link:link {
            color: #444444;
            background-color: #ffffff;
        }

        .wpml-ls-statics-footer a,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:hover,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:focus,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link:hover,
        .wpml-ls-statics-footer .wpml-ls-sub-menu a:link:focus {
            color: #000000;
            background-color: #eeeeee;
        }

        .wpml-ls-statics-footer .wpml-ls-current-language>a {
            color: #444444;
            background-color: #ffffff;
        }

        .wpml-ls-statics-footer .wpml-ls-current-language:hover>a,
        .wpml-ls-statics-footer .wpml-ls-current-language>a:focus {
            color: #000000;
            background-color: #eeeeee;
        }
        </style>
        <link rel='stylesheet' id='bootstrap-css'
            href='../wp-content/themes/sunloan-theme/bootstrap-custom/make/bootstrap-cust.min234e.css?ver=1703019767'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='styles-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/dist/css/styles.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='select2-css'
            href='../wp-content/themes/sunloan-theme/assets/css/vendor/select2.min4819.css?ver=4.0.13' media='all' />
        <link data-minify="1" rel='stylesheet' id='tiny-slider-style-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/css/tiny-slider8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='nice-select-style-css'
            href='../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/css/nice-select8712.css?ver=1732739757'
            media='all' />
        <link data-minify="1" rel='stylesheet' id='gform_basic-css'
            href='../wp-content/cache/min/1/wp-content/plugins/gravityforms/assets/css/dist/basic.min8712.css?ver=1732739757'
            media='all' />
        <link rel='stylesheet' id='gform_theme_components-css'
            href='../wp-content/plugins/gravityforms/assets/css/dist/theme-components.minbf47.css?ver=2.9.1'
            media='all' />
        <link rel='stylesheet' id='gform_theme-css'
            href='../wp-content/plugins/gravityforms/assets/css/dist/theme.minbf47.css?ver=2.9.1' media='all' />
        <link rel='stylesheet' id='find-a-branch-css'
            href='../wp-content/themes/sunloan-theme/dist/css/template_specific/find_branch.mine67f.css?ver=1692649604'
            media='all' />
        <script id="wpml-cookie-js-extra">
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
        </script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie8712.js?ver=1732739757"
            id="wpml-cookie-js" defer data-wp-strategy="defer"></script>
        <script
            src="../wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/script.min68b3.js?ver=1"
            id="wpml-legacy-dropdown-0-js" data-rocket-defer defer></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/jquery-3.5.1.min9d52.js?ver=3.5.1" id="jquery-js">
        </script>
        <script src="../wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
        <script src="../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
        <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        </script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/jquery.json.minbf47.js?ver=2.9.1"
            id="gform_json-js"></script>
        <script id="gform_gravityforms-js-extra">
        var gform_i18n = {
            "datepicker": {
                "days": {
                    "monday": "Mo",
                    "tuesday": "Tu",
                    "wednesday": "We",
                    "thursday": "Th",
                    "friday": "Fr",
                    "saturday": "Sa",
                    "sunday": "Su"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "firstDay": 1,
                "iconText": "Select date"
            }
        };
        var gf_legacy_multi = [];
        var gform_gravityforms = {
            "strings": {
                "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
                "delete_file": "Delete this file",
                "in_progress": "in progress",
                "file_exceeds_limit": "File exceeds size limit",
                "illegal_extension": "This type of file is not allowed.",
                "max_reached": "Maximum number of files reached",
                "unknown_error": "There was a problem while saving the file on the server",
                "currently_uploading": "Please wait for the uploading to complete",
                "cancel": "Cancel",
                "cancel_upload": "Cancel this upload",
                "cancelled": "Cancelled"
            },
            "vars": {
                "images_url": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/images"
            }
        };
        var gf_global = {
            "gf_currency_config": {
                "name": "U.S. Dollar",
                "symbol_left": "$",
                "symbol_right": "",
                "symbol_padding": "",
                "thousand_separator": ",",
                "decimal_separator": ".",
                "decimals": 2,
                "code": "USD"
            },
            "base_url": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms",
            "number_formats": [],
            "spinnerUrl": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
            "version_hash": "82574fc9f3d4274ac72304f614e20208",
            "strings": {
                "newRowAdded": "New row added.",
                "rowRemoved": "Row removed",
                "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
            }
        };
        </script>
        <script id="gform_gravityforms-js-before">

        </script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/gravityforms.minbf47.js?ver=2.9.1"
            id="gform_gravityforms-js"></script>
        <script type="rocketlazyloadscript" defer='defer'
            data-rocket-src="https://www.google.com/recaptcha/api.js?hl=en&amp;ver=6.7.1#038;render=explicit"
            id="gform_recaptcha-js"></script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/utils.min43b8.js?ver=501a987060f4426fb517400c73c7fc1e"
            id="gform_gravityforms_utils-js"></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/vendor/classie3121.js?ver=1732739782"
            id="classie-js" data-rocket-defer defer></script>
        <script id="store-locator-js-extra">
        var wpsl = {
            "api_server_key": "AIzaSyDRUOKpe6dX_6iJUaH3QoKVaxnEDyn_Pwg",
            "api_browser_key": "AIzaSyBhPQB62V_31DtMLRjFA-R8yBRBvaO9ElQ"
        };
        </script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/store-locator3121.js?ver=1732739782"
            id="store-locator-js" data-rocket-defer defer></script>
        <link rel="https://api.w.org/" href="../wp-json/index.php" />
        <link rel="alternate" title="JSON" type="application/json" href="../wp-json/wp/v2/pages/1503.json" />
        <link rel='shortlink' href='../index1a9a.php?p=1503' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="../wp-json/oembed/1.0/embed8aed.json?url=<?php echo $row['url']; ?>find-a-branch%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="../wp-json/oembed/1.0/embed875d?url=<?php echo $row['url']; ?>find-a-branch%2F&amp;format=xml" />
        <meta name="generator" content="WPML ver:4.6.14 stt:1,2;" />
        <link rel="icon" href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-32x32.png"
            sizes="32x32" />
        <link rel="icon" href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-192x192.png"
            sizes="192x192" />
        <link rel="apple-touch-icon"
            href="../wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-180x180.png" />
        <meta name="msapplication-TileImage"
            content="<?php echo $row['url']; ?>/wp-content/uploads/2022/05/cropped-android-chrome-512x512-1-270x270.png" />
        <noscript>
            <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
            </style>
        </noscript>
         
        <!-- Google Tag Manager -->
         
        <!-- End Google Tag Manager -->
        <!-- Start VWO Async SmartCode -->
        <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com/" />
        <script type='text/javascript' id='vwoCode'>
        window._vwo_code || (function() {
            var account_id = 876958,
                version = 2.1,
                settings_tolerance = 2000,
                hide_element = 'body',
                hide_element_style =
                'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                w = window,
                d = document,
                v = d.querySelector('#vwoCode'),
                cK = '_vwo_' + account_id + '_settings',
                cc = {};
            try {
                var c = JSON.parse(localStorage.getItem('_vwo_' + account_id + '_config'));
                cc = c && typeof c === 'object' ? c : {}
            } catch (e) {}
            var stT = cc.stT === 'session' ? w.sessionStorage : w.localStorage;
            code = {
                use_existing_jquery: function() {
                    return typeof use_existing_jquery !== 'undefined' ? use_existing_jquery : undefined
                },
                library_tolerance: function() {
                    return typeof library_tolerance !== 'undefined' ? library_tolerance : undefined
                },
                settings_tolerance: function() {
                    return cc.sT || settings_tolerance
                },
                hide_element_style: function() {
                    return '{' + (cc.hES || hide_element_style) + '}'
                },
                hide_element: function() {
                    if (performance.getEntriesByName('first-contentful-paint')[0]) {
                        return ''
                    }
                    return typeof cc.hE === 'string' ? cc.hE : hide_element
                },
                getVersion: function() {
                    return version
                },
                finish: function(e) {
                    if (!f) {
                        f = true;
                        var t = d.getElementById('_vis_opt_path_hides');
                        if (t) t.parentNode.removeChild(t);
                        if (e)(new Image).src = '../../dev.visualwebsiteoptimizer.com/ee5ba7.gif?a=' +
                            account_id + e
                    }
                },
                finished: function() {
                    return f
                },
                addScript: function(e) {
                    var t = d.createElement('script');
                    t.type = 'text/javascript';
                    if (e.src) {
                        t.src = e.src
                    } else {
                        t.text = e.text
                    }
                    d.getElementsByTagName('head')[0].appendChild(t)
                },
                load: function(e, t) {
                    var i = this.getSettings(),
                        n = d.createElement('script'),
                        r = this;
                    t = t || {};
                    if (i) {
                        n.textContent = i;
                        d.getElementsByTagName('head')[0].appendChild(n);
                        if (!w.VWO || VWO.caE) {
                            stT.removeItem(cK);
                            r.load(e)
                        }
                    } else {
                        var o = new XMLHttpRequest;
                        o.open('GET.php', e, true);
                        o.withCredentials = !t.dSC;
                        o.responseType = t.responseType || 'text';
                        o.onload = function() {
                            if (t.onloadCb) {
                                return t.onloadCb(o, e)
                            }
                            if (o.status === 200) {
                                _vwo_code.addScript({
                                    text: o.responseText
                                })
                            } else {
                                _vwo_code.finish('&e=loading_failure:' + e)
                            }
                        };
                        o.onerror = function() {
                            if (t.onerrorCb) {
                                return t.onerrorCb(e)
                            }
                            _vwo_code.finish('&e=loading_failure:' + e)
                        };
                        o.send()
                    }
                },
                getSettings: function() {
                    try {
                        var e = stT.getItem(cK);
                        if (!e) {
                            return
                        }
                        e = JSON.parse(e);
                        if (Date.now() > e.e) {
                            stT.removeItem(cK);
                            return
                        }
                        return e.s
                    } catch (e) {
                        return
                    }
                },
                init: function() {
                    if (d.URL.indexOf('__vwo_disable__') > -1) return;
                    var e = this.settings_tolerance();
                    w._vwo_settings_timer = setTimeout(function() {
                        _vwo_code.finish();
                        stT.removeItem(cK)
                    }, e);
                    var t;
                    if (this.hide_element() !== 'body') {
                        t = d.createElement('style');
                        var i = this.hide_element(),
                            n = i ? i + this.hide_element_style() : '',
                            r = d.getElementsByTagName('head')[0];
                        t.setAttribute('id', '_vis_opt_path_hides');
                        v && t.setAttribute('nonce', v.nonce);
                        t.setAttribute('type', 'text/css');
                        if (t.styleSheet) t.styleSheet.cssText = n;
                        else t.appendChild(d.createTextNode(n));
                        r.appendChild(t)
                    } else {
                        t = d.getElementsByTagName('head')[0];
                        var n = d.createElement('div');
                        n.style.cssText =
                            'z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;';
                        n.setAttribute('id', '_vis_opt_path_hides');
                        n.classList.add('_vis_hide_layer');
                        t.parentNode.insertBefore(n, t.nextSibling)
                    }
                    var o = 'https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' +
                        encodeURIComponent(d.URL) + '&vn=' + version;
                    if (w.location.search.indexOf('_vwo_xhr') !== -1) {
                        this.addScript({
                            src: o
                        })
                    } else {
                        this.load(o + '&x=true')
                    }
                }
            };
            w._vwo_code = code;
            code.init();
        })();
        </script>
        <!-- End VWO Async SmartCode -->
        <meta name="generator" content="WP Rocket 3.17.3.1"
            data-wpr-features="wpr_delay_js wpr_defer_js wpr_minify_js wpr_lazyload_iframes wpr_oci wpr_image_dimensions wpr_minify_css wpr_desktop" />
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
         
        <!-- End Google Tag Manager (noscript) -->

        <header id="header-area" class="header-area headerFixed">
            <!-- Header Top Area Start -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-5">
                            <div class="header-top-left">
                                <p><a href="tel:8007865626" style="color:white;">
                                        <?php echo $row['phone']; ?>
                                    </a></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-7">
                            <div class="header-top-right">
                                <div class="companyName ml-3">
                                    <script>
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'da',
                                            includedLanguages: 'da,pt,ar,pl,fr,es,it,en,ko,zh-CN',
                                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                        }, 'google_translate_element');
                                    }
                                    </script>
                                    <script
                                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                    </script>
                                    <div id="google_translate_element"></div>

                                    <style type="text/css">
                                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
                                    .goog-te-menu-value {
                                        padding: 3px !important;
                                    }

                                    .goog-te-gadget-simple {
                                        background-color: #fff;
                                        border-left: 1px solid #d5d5d5;
                                        border-top: 1px solid #9b9b9b;
                                        border-bottom: 1px solid #e8e8e8;
                                        border-right: 1px solid #d5d5d5;
                                        font-size: 10pt;
                                        display: inline-block;
                                        padding-top: 1px;
                                        padding-bottom: 2px;
                                        border-radius: 10px;
                                        cursor: pointer;
                                        zoom: 1;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
                                        text-decoration: none;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
                                        color: blue;
                                    }

                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
                                        color: blue;
                                    }




                                    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
                                        display: none;
                                    }

                                    /* HIDE the google translate toolbar */
                                    .goog-te-banner-frame.skiptranslate {
                                        display: none !important;
                                    }

                                    body {
                                        top: 0px !important;
                                    }

                                    .skiptranslate iframe {
                                        visibility: hidden !important;
                                    }

                                    body {
                                        top: 0 !important;

                                    }

                                    /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
                                    </style>
                                </div>

                                <div class="language_drop wpml-floating-language-switcher">
                                </div>

                                <ul>
                                    <li><span></span> </li>
                                    <li><a href="<?php echo $row['url']; ?>/track.php" target="_blank"> Loan
                                            Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-5">
                            <div class="header-top-left">
                                <p><a href="tel:8007865626" style="color:white;"><?php echo $row['phone']; ?></a></p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-7">
                            <div class="header-top-right">

                                <div class="language_drop wpml-floating-language-switcher">

                                    <div class="wpml-ls-statics-shortcode_actions wpml-ls">
                                        <ul>

                                            <li itemscope="itemscope"
                                                itemtype="https://www.schema.org/SiteNavigationElement" tabindex="0"
                                                class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item">
                                                <a href="#"
                                                    class="js-wpml-ls-item-toggle dropdown-toggle nav-link show wpml-ls-item-toggle">
                                                    <span class="wpml-ls-native">EN</span></a>

                                                <ul class="wpml-ls-sub-menu dropdown-menu">

                                                    <li itemscope="itemscope"
                                                        itemtype="https://www.schema.org/SiteNavigationElement"
                                                        class="menu-item dropdown nav-item wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-es wpml-ls-last-item">
                                                        <a href="../es/sucursales/index.php" class="wpml-ls-link">
                                                            <span class="wpml-ls-native" lang="es">ES</span></a>
                                                    </li>

                                                </ul>

                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <ul>
                                    <li><a href="<?php echo $row['url']; ?>/track.php" target="_blank"> Loan Status</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top Area End -->

            <!-- Main Header Area Start -->
            <div class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2 col-3">
                            <div class="logo">
                                <a class="logo" href="../index.php" id="site-logo" title="<?php echo $row['name']; ?>" rel="home">
                                    <img width="154" height="46" src="../wp-content/uploads/2022/04/logo.png"
                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>" data-skip-lazy=""
                                        loading="eager" decoding="async" /> </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-10 col-9">
                            <div class="header-right">
                                <div class="mainmenu" id="mainmenu">
                                    <ul id="header-nav" class="m-0">
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            class="menu-item nav-item additional-item">
                                            <a title="Contact Us" href="../contact/index.php" class="nav-link"></a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement"
                                            class="menu-item dropdown nav-item additional-item"><a title="Language"
                                                href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">Language<svg id="Layer_1" class="toggle-svg"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.24 19.87">
                                                    <defs>
                                                        <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #231f20;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 4.22px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path id="Path_8182" class="cls-1"
                                                        d="M2.99,15.55L14.23,4.32l11.23,11.23" />
                                                </svg></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="menu-item nav-item lang-item"><span
                                                        class="lang-link current">English<svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24"
                                                            style="width: 16px;height: 14px;margin-left: 3px;">
                                                            <path fill="#21409A"
                                                                d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                                        </svg></span></li>
                                                <li class="menu-item nav-item lang-item"><a
                                                        href="../es/sucursales/index.php" class="lang-link">Spanish</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1579"
                                            class="menu-item nav-item"><a title="About Us"
                                                href="../about/index.php" class="nav-link">About Us</a></li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2635"
                                            class="menu-item dropdown nav-item"><a title="Loans" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle" id="menu-item-dropdown-2635">Loans<svg
                                                    id="Layer_1" class="toggle-svg" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 28.24 19.87">
                                                    <defs>
                                                        <style>
                                                        .cls-1 {
                                                            fill: none;
                                                            stroke: #231f20;
                                                            stroke-linecap: round;
                                                            stroke-linejoin: round;
                                                            stroke-width: 4.22px;
                                                        }
                                                        </style>
                                                    </defs>
                                                    <path id="Path_8182" class="cls-1"
                                                        d="M2.99,15.55L14.23,4.32l11.23,11.23" />
                                                </svg></a>
                                            <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-2635"
                                                role="menu">
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2435" class="menu-item nav-item"><a
                                                        title="Personal Installment Loans" href="../loans/index.php"
                                                        class="dropdown-item">Personal Installment Loans</a></li>
                                                <li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Capital Investment Fund"
                                                        href="../cap-inv/index.php" class="dropdown-item">Capital Investment Fund</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Venture Capital"
                                                        href="../venture/index.php" class="dropdown-item">Venture Capital</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Start up Loans"
                                                        href="../start-up/index.php" class="dropdown-item">Start up Loans</a></li>

<li itemscope="itemscope"
                                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                                    id="menu-item-2951" class="menu-item nav-item"><a title="Debt Refinance"
                                                        href="../debt/index.php" class="dropdown-item">Debt Refinance</a></li>
                                            </ul>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3021"
                                            class="menu-item nav-item"><a title="testimonials" href="../testimonials/index.php"
                                                class="nav-link">Testimonials</a></li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-3079"
                                            class="menu-item nav-item"><a title="Contact Us" href="../ppi/index.php"
                                                class="nav-link">Loan Protection</a>
                                        </li>
                                        <li itemscope="itemscope"
                                            itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2910"
                                            class="menu-item current-menu-item active nav-item"><a title="Contact Us"
                                                href="index.php" class="nav-link">Contact </a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a class="common-btn btn_red" href="<?php echo $row['apply']; ?>"
                                        target="_blank">Apply Now</a>
                                </div>
                                <div class="menu_bar" id="btn-menu-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Header Area End -->

        <!-- Main-Area Start -->
        <section id="page-content-container" class="is-page">


            <!-- Page title Area Start -->
            <div class="page-title-area bg_yellow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title blue left">
                                <h1>Contact Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <img fetchpriority="high" width="1337" height="167"
                    src="../wp-content/themes/sunloan-theme/assets/images/dot-3.svg" alt="" class="dot_shape">
            </div>
            <!-- Page title Area End -->

            <!-- Achieve Area Start -->
            <div class="achieve-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="achieve-text">
                                <h2>Find a <?php echo $row['name']; ?> location <sl>near you</sl>
                                </h2>
                                <p>With over 200 branches across <a href="../state/alabama/index.php">Alabama</a>, <a
                                        href="../state/illinois/index.php">Illinois</a>, <a
                                        href="../state/missouri/index.php">Missouri</a>, <a
                                        href="../state/nevada/index.php">Nevada</a>, <a
                                        href="../state/new-mexico/index.php">New Mexico</a>, <a
                                        href="../state/oklahoma/index.php">Oklahoma</a>, and <a
                                        href="../state/texas/index.php">Texas</a>, opportunity is closer than you may
                                    think.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Achieve  Area End -->

            <div class="map-area">
                <div class="filder-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="wpsl-map-search" autocomplete="off">
                                    <div class="wpsl-input location-filter">
                                        <div class="simple-dropdown--wrapper">
                                            <div class="wpsl-state-filter simple-dropdown--container">
                                                <button class="wpsl-selected-item simple-dropdown--btn" type="button"
                                                    id="dropdownStateButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Browse by state</button>
                                                <div class="simple-dropdown--dropdown" style="height:0px;">
                                                    <ul aria-labelledby="dropdownStateButton" id="dropdownStateList">
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/texas/index.php">Texas</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/nevada/index.php">Nevada</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/alabama/index.php">Alabama</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/missouri/index.php">Missouri</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/oklahoma/index.php">Oklahoma</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/illinois/index.php">Illinois</a></li>
                                                        <li><a class="state-link" tabindex="-1"
                                                                href="../state/new-mexico/index.php">New Mexico</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-divided">or your location</span>
                                        <div class="zip_code">
                                            <input autocomplete="off" id="wpsl-search-input" type="text" value=""
                                                name="wpsl-search-input" placeholder="City or zip code" class="">
                                            <button id="wpsl-search-btn" type="submit"><i>Go</i> <span>Find a
                                                    branch</span></button>
                                        </div>
                                        <div id="wpsl-search-wrap">
                                            <div id="wpsl-radius">
                                                <div class="wpsl-dropdown">
                                                    <select name="wpsl-radius" id="wpsl-radius-dropdown"
                                                        style="display: none;">
                                                        <option value="5">5 mi</option>
                                                        <option value="10">10 mi</option>
                                                        <option value="25" selected="selected">25 mi</option>
                                                        <option value="50">50 mi</option>
                                                    </select><span data-value="25" class="wpsl-selected-item">25
                                                        mi</span>
                                                    <div style="height: 0px;">
                                                        <ul>
                                                            <li data-value="5">5 mi</li>
                                                            <li data-value="10">10 mi</li>
                                                            <li data-value="25">25 mi</li>
                                                            <li data-value="50">50 mi</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="google_map">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="locations-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="wpsl-result-list" class="hide-locations">
                <div id="wpsl-stores">
                    <div class="directions-area">
                        <div class="container">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--- disabled
<div id="browse_locations_label" class="section section-archive section-default blog">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p style="text-align: center; margin-top: 3rem; margin-bottom: 3rem; font-weight: bold;">        </p>
        <span class="all-states">
                  </span>
      </div>
    </div>
  </div>
</div>
--->

            <div id="custom-locations-2" data-base-url="../index.php">

                <div class="directions-area">
                    <div class="container">
                        <div class="row">
                            <div class="page-template-page-store-locator">
                                <div class="directions_wrap row store_locator">
                                    <!--<div class="loading">Loading...</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Promo Area Start -->
            <div class="promo-area line_yellow">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="promo-text">
                                <h2>Ready to apply?</h2>
                                <a href="<?php echo $row['apply']; ?>" target="_blank"
                                    class="common-btn btn_red2 ">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Promo Area End -->




        </section>
        <!-- Main Area End -->

        <!-- Footer Area Start -->
        <footer class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-top">
                            <div class="row footer-menu">

                                <div class="logo_cs">
                                    <div class="footer-logo">
                                        <a class="logo" href="../index.php" id="site-logo" title="<?php echo $row['name']; ?>"
                                            rel="home">
                                            <img width="104" height="31"
                                                src="../wp-content/uploads/2022/04/footer-logo.png"
                                                class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                data-skip-lazy="" loading="eager" decoding="async" /> </a>
                                    </div>

                                    <div class="footer-phone">
                                        <p>
                                            <a href="tel:8007865626"
                                                style="color:white;"><?php echo $row['phone']; ?></a>
                                        </p>
                                    </div>
                                </div>

                                <div class="sosial_cs">
                                    <div class="social-icon">
                                        <ul>
                                            <li><a target="_blank" href="https://www.facebook.com/"><img
                                                        width="27" height="27"
                                                        src="../wp-content/uploads/2022/05/5282541_fb_social_media_facebook_facebook_logo_social_network_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                            <li><a target="_blank" href="https://www.instagram.com "><img
                                                        width="27" height="27"
                                                        src="../wp-content/uploads/2022/05/5282544_camera_instagram_social_media_social_network_instagram_logo_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                            <li><a target="_blank"
                                                    href="https://www.linkedin.com"><img
                                                        width="26" height="27"
                                                        src="../wp-content/uploads/2022/05/5282542_linkedin_network_social_network_linkedin_logo_icon.svg"
                                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>"
                                                        data-skip-lazy="" loading="eager" decoding="async" /></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget footer-nav footer-widget-1 widget_nav_menu nav_menu-2">
                                    <h4 class="footer-nav-title">COMPANY</h4>
                                    <div class="menu-footer-column-1-container">
                                        <ul id="menu-footer-column-1" class="menu">
                                            <li id="menu-item-2993" class="menu-item"><a
                                                    href="../about/index.php">About</a></li>
                                            <li id="menu-item-2994" class="menu-item"><a
                                                    href="../careers/index.php">Careers</a></li>
                                            <li id="menu-item-2992" class="menu-item"><a
                                                    href="../contact/index.php">Contact Us</a></li>
                                            <li id="menu-item-3011" class="menu-item"><a
                                                    href="../ #"> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget footer-nav footer-widget-2 widget_nav_menu nav_menu-3">
                                    <h4 class="footer-nav-title">LEGAL</h4>
                                    <div class="menu-footer-column-2-container">
                                        <ul id="menu-footer-column-2" class="menu">
                                            <li id="menu-item-2998" class="menu-item"><a
                                                    href="../terms-of-use/index.php">Terms of Use</a></li>
                                            <li id="menu-item-2997" class="menu-item"><a
                                                    href="../privacy-policy/index.php">Privacy Policy</a></li>
                                            <li id="menu-item-2996" class="menu-item"><a
                                                    href="../ #"> </a>
                                            </li>
                                            <li id="menu-item-3550" class="menu-item"><a
                                                    href="../ #"> </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget footer-nav footer-widget-3 widget_nav_menu nav_menu-4">
                                    <h4 class="footer-nav-title">QUICK LINKS</h4>
                                    <div class="menu-footer-column-3-container">
                                        <ul id="menu-footer-column-3" class="menu">
                                            <li id="menu-item-2999" class="menu-item"><a
                                                    href="../loans/index.php">Loans</a></li>
                                            <li id="menu-item-3027" class="menu-item"><a href="../testimonials/index.php">Loan Payment Protection  Services</a></li>
                                            <li id="menu-item-3029" class="menu-item current-menu-item"><a
                                                    href="index.php" aria-current="page">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <hr class="footer-hr">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-8 col-8 copyright-container">
                                <div class="copyright">
                                    <p>&copy; Copyright
                                        2024 <?php echo $row['name']; ?>. All rights reserved.   </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="brand-logo">
                                    <img width="191" height="40" src="../wp-content/uploads/2022/04/footer-logo.png"
                                        class="attachment-full size-full" alt="<?php echo $row['name']; ?>" data-skip-lazy=""
                                        loading="eager" decoding="async" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <div class="wpml-ls-statics-footer wpml-ls wpml-ls-legacy-list-horizontal">
            <ul>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                    class="menu-item dropdown nav-item wpml-ls-slot-footer wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-list-horizontal">
                    <a href="index.php" class="wpml-ls-link">
                        <img width="18" height="12" class="wpml-ls-flag"
                            src="../wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="" /><span
                            class="wpml-ls-native">EN</span></a>
                </li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                    class="menu-item dropdown nav-item wpml-ls-slot-footer wpml-ls-item wpml-ls-item-es wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
                    <a href="../es/sucursales/index.php" class="wpml-ls-link">
                        <img width="18" height="12" class="wpml-ls-flag"
                            src="../wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="" /><span
                            class="wpml-ls-native" lang="es">ES</span><span class="wpml-ls-display"><span
                                class="wpml-ls-bracket"> (</span>ES<span class="wpml-ls-bracket">)</span></span></a>
                </li>
            </ul>
        </div>
        <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #FFFFFF;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--blue: #094074;
            --wp--preset--color--alice-blue: #F0F7FF;
            --wp--preset--color--yellow: #FDB800;
            --wp--preset--color--grandis: #FFD571;
            --wp--preset--color--trinidad: #C94825;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 50px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 1027px;
            --wp--style--global--wide-size: 1320px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-color {
            color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-color {
            color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-color {
            color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-color {
            color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-color {
            color: var(--wp--preset--color--trinidad) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-background-color {
            background-color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-background-color {
            background-color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-background-color {
            background-color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-background-color {
            background-color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-background-color {
            background-color: var(--wp--preset--color--trinidad) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-blue-border-color {
            border-color: var(--wp--preset--color--blue) !important;
        }

        .has-alice-blue-border-color {
            border-color: var(--wp--preset--color--alice-blue) !important;
        }

        .has-yellow-border-color {
            border-color: var(--wp--preset--color--yellow) !important;
        }

        .has-grandis-border-color {
            border-color: var(--wp--preset--color--grandis) !important;
        }

        .has-trinidad-border-color {
            border-color: var(--wp--preset--color--trinidad) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal) !important;
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge) !important;
        }
        </style>
        <script id="gravity-ad-tracking-js-extra">
        var GATHelper = {
            "choices": ["utm_source", "utm_medium", "utm_campaign", "utm_term", "gclid", "utm_content", "fbclid",
                "MSCLKID"
            ],
            "inputsSchema": {
                "": {
                    "label": "MSCLKID",
                    "key": 7,
                    "slug": "MSCLKID"
                }
            },
            "domain": "<?php echo $row['url']; ?>",
            "dataExpiration": "15",
            "cookiesOnSubdomain": "1"
        };
        </script>
        <script async='async'
            src="../wp-content/plugins/gravity-ad-tracking/dist/js/gravity-ad-tracking-cookies.minede7.js?ver=1716465507"
            id="gravity-ad-tracking-js"></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/popper-2.9.2.minab7d.js?ver=2.9.2"
            id="popper-js-js" data-rocket-defer defer></script>
        <script data-cfasync="false"
            src="../wp-content/themes/sunloan-theme/assets/js/vendor/bootstrap-5.1.0.min0e7d.js?ver=5.1.0"
            id="bootstrap-js" data-rocket-defer defer></script>
        <script src="../wp-content/themes/sunloan-theme/assets/js/vendor/select2-4.0.13.min4819.js?ver=4.0.13"
            id="select2-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/dist/js/scripts-bundle8712.js?ver=1732739757"
            id="scripts-js" data-rocket-defer defer></script>
        <script id="gforms_recaptcha_recaptcha-js-extra">
        var gforms_recaptcha_recaptcha_strings = {
            "site_key": "6LckNjggAAAAAKtgNNfVvtOBlZsT-VAKQz8SPP_A",
            "ajaxurl": "<?php echo $row['url']; ?>/wp-admin\/admin-ajax.php",
            "nonce": "a2928c1bc6"
        };
        </script>
        <script
            src="../../www.google.com/recaptcha/api9291.js?render=6LckNjggAAAAAKtgNNfVvtOBlZsT-VAKQz8SPP_A&amp;ver=1.6.0"
            id="gforms_recaptcha_recaptcha-js"></script>
        <script id="gforms_recaptcha_recaptcha-js-after">
        (function($) {
            grecaptcha.ready(function() {
                $('.grecaptcha-badge').css('visibility', 'hidden');
            });
        })(jQuery);
        </script>
        <script src="../wp-content/themes/sunloan-theme/assets/js/vendor/nice-select-wpml.min8216.js?ver=1669908414"
            id="nice-select-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/Popper8712.js?ver=1732739757"
            id="popper-js" data-rocket-defer defer></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/gravityforms-niceselect-conditional-fix8712.js?ver=1732739757"
            id="niceselectfix-js"></script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/job-script8712.js?ver=1732739757"
            id="job-script-js" data-rocket-defer defer></script>
        <script src="../wp-includes/js/dist/dom-ready.min5346.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"
            data-rocket-defer defer></script>
        <script src="../wp-includes/js/dist/a11y.min3f73.js?ver=3156534cc54473497e14" id="wp-a11y-js" data-rocket-defer
            defer></script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/jquery.maskedinput.minbf47.js?ver=2.9.1"
            id="gform_masked_input-js"></script>
        <script defer='defer' src="../wp-content/plugins/gravityforms/js/placeholders.jquery.minbf47.js?ver=2.9.1"
            id="gform_placeholder-js"></script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/vendor-theme.minf8d2.js?ver=ddd2702ee024d421149a5e61416f1ff5"
            id="gform_gravityforms_theme_vendors-js"></script>
        <script id="gform_gravityforms_theme-js-extra">
        var gform_theme_config = {
            "common": {
                "form": {
                    "honeypot": {
                        "version_hash": "82574fc9f3d4274ac72304f614e20208"
                    },
                    "ajax": {
                        "ajaxurl": "<?php echo $row['url']; ?>/wp-admin\/admin-ajax.php",
                        "ajax_submission_nonce": "40e73a0b4a",
                        "i18n": {
                            "step_announcement": "Step %1$s of %2$s, %3$s",
                            "unknown_error": "There was an unknown error processing your request. Please try again."
                        }
                    }
                }
            },
            "hmr_dev": "",
            "public_path": "<?php echo $row['url']; ?>/wp-content\/plugins\/gravityforms\/assets\/js\/dist\/",
            "config_nonce": "8b82c0230d"
        };
        </script>
        <script defer='defer'
            src="../wp-content/plugins/gravityforms/assets/js/dist/scripts-theme.minaef3.js?ver=434d0c7a9798b432de24db888073c55f"
            id="gform_gravityforms_theme-js"></script>
        <script src="../wp-content/plugins/gravityformsrecaptcha/js/frontend.minaff7.js?ver=1.6.0"
            id="gforms_recaptcha_frontend-js" data-rocket-defer defer></script>
        <script id="sweb-js-js-extra">
        var wpslHelper = {
            "ajaxurl": "<?php echo $row['url']; ?>/wp-admin\/admin-ajax.php"
        };
        </script>
        <script data-minify="1"
            src="../wp-content/cache/min/1/wp-content/themes/sunloan-theme/assets/js/sweb-v23121.js?ver=1732739782"
            id="sweb-js-js" data-rocket-defer defer></script>
        <script>
        window.lazyLoadOptions = {
            elements_selector: "iframe[data-lazy-src]",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !==
                                'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
        </script>
        <script data-no-minify="1" async
            src="../wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
        <script>
  document.addEventListener("DOMContentLoaded", function () {
    // Select all links with the 'nav-link dropdown-toggle' class
    const dropdownLinks = document.querySelectorAll(".nav-link.dropdown-toggle");

    dropdownLinks.forEach(function (link) {
      link.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Find the corresponding dropdown menu next to the clicked link
        const dropdownMenu = link.nextElementSibling;

        // Close all open dropdowns first
        document.querySelectorAll(".nav-link.dropdown-toggle").forEach(function (otherLink) {
          otherLink.classList.remove("show");
          const otherDropdown = otherLink.nextElementSibling;
          if (otherDropdown && otherDropdown.classList.contains("dropdown-menu")) {
            otherDropdown.classList.remove("show");
            otherDropdown.removeAttribute("style");
            otherDropdown.removeAttribute("data-popper-placement");
          }
        });

        // Toggle 'show' class on the clicked link and its dropdown menu
        link.classList.toggle("show");

        if (dropdownMenu && dropdownMenu.classList.contains("dropdown-menu")) {
          if (dropdownMenu.classList.contains("show")) {
            // If already shown, hide it
            dropdownMenu.classList.remove("show");
            dropdownMenu.removeAttribute("style");
            dropdownMenu.removeAttribute("data-popper-placement");
          } else {
            // Show the dropdown menu
            dropdownMenu.classList.add("show");
            dropdownMenu.setAttribute("style", "position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 34px);");
            dropdownMenu.setAttribute("data-popper-placement", "bottom-start");
          }
        }
      });
    });
  });
</script>
<?php echo $row['tawk']; ?>
    </body>

    <?php } ?>


    <!-- Mirrored from <?php echo $row['url']; ?>/find-a-branch/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2024 23:46:37 GMT -->

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->