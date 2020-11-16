<!DOCTYPE html>
<html class="no-js" lang="th-th">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T7CP28G');

    </script>


    <meta http-equiv="content-language" content="th-th" />
    <meta charset="utf-8">
<script type="text/javascript">

;window.NREUM||(NREUM={});NREUM.init={privacy:{cookies_enabled:true}};

window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{c.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(27),c={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(c.console=!0,o.indexOf("dev")!==-1&&(c.dev=!0),o.indexOf("nr_dev")!==-1&&(c.nrDev=!0))}catch(s){}c.nrDev&&i.on("internal-error",function(t){r(t.stack)}),c.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),c.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(c,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,c){try{l?l-=1:o(c||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,s.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:s.now();i("err",[t,n])}var i=t("handle"),a=t(28),c=t("ee"),s=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError",l=0;s.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),s.xhrWrappable&&t(14),d=!0)}c.on("fn-start",function(t,e,n){d&&(l+=1)}),c.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),c.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),c.on("internal-error",function(t){i("ierr",[t,s.now(),!0])})},{}],3:[function(t,e,n){t("loader").features.ins=!0},{}],4:[function(t,e,n){function r(){_++,T=g.hash,this[u]=y.now()}function o(){_--,g.hash!==T&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var c="-start",s="-end",f="-body",u="fn"+c,d="fn"+s,p="cb"+c,l="cb"+s,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable){var x=t(10),b=t(11),E=t(8),R=t(6),O=t(13),N=t(7),M=t(14),P=t(9),S=t("ee"),C=S.get("tracer");t(16),y.features.spa=!0;var T,_=0;S.on(u,r),S.on(p,r),S.on(d,o),S.on(l,o),S.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+s,"clearTimeout"+c,u]),M.buffer([u,"new-xhr","send-xhr"+c]),N.buffer([m+c,m+"-done",m+f+c,m+f+s]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+c]),C.buffer([u,"no-"+u]),P.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(M,"send-xhr"+c),a(S,"xhr-resolved"),a(S,"xhr-done"),a(N,m+c),a(N,m+"-done"),a(P,"new-jsonp"),a(P,"jsonp-end"),a(P,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,_>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),c=t(12),s="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),c.on(m,function(){this.bstStart=y.now()}),c.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+l,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+s]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+s]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+s]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){c.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),c=t("wrap-function")(a,!0),s=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=s(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?c(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var c=r.apply(this,t);return o.emit(n+"start",[t,a],c),c.then(function(t){return o.emit(n+"end",[null,t],c),t},function(t){throw o.emit(n+"end",[t],c),t})})}var o=t("ee").get("fetch"),i=t(28),a=t(27);e.exports=o;var c=window,s="fetch-",f=s+"body-",u=["arrayBuffer","blob","json","text","formData"],d=c.Request,p=c.Response,l=c.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(c,"fetch",s),o.on(s+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(s+"done",[null,e],n)}else o.emit(s+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){s.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){s.emit("jsonp-error",[],p),s.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=c(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),s.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function c(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var s=t("ee").get("jsonp"),f=t("wrap-function")(s);if(e.exports=s,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),s.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=a.context(),n=c(t,"executor-",e),r=new f(n);return a.context(r).getCtx=function(){return e},a.emit("new-promise",[r,e],e),r}function o(t,e){return e}var i=t("wrap-function"),a=t("ee").get("promise"),c=i(a),s=t(27),f=NREUM.o.PR;e.exports=a,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){a.emit("propagate",[null,!o],i),o=o||!t}}var o=!1;s(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var i=e.apply(f,arguments),c=f.resolve(i);return c}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&a.emit("propagate",[t,!0],n),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),s(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),a.on("executor-start",function(t){t[0]=c(t[0],"resolve-",this),t[1]=c(t[1],"resolve-",this)}),a.on("executor-err",function(t,e,n){t[1](n)}),c.inPlace(f.prototype,["then"],"then-",o),a.on("then-start",function(t,e){this.promise=e,t[0]=c(t[0],"cb-",this),t[1]=c(t[1],"cb-",this)}),a.on("then-end",function(t,e,n){this.nextPromise=n;var r=this.promise;a.emit("propagate",[r,!0],n)}),a.on("cb-end",function(t,e,n){a.emit("propagate",[n,!0],this.nextPromise)}),a.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=a.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),c="setTimeout",s="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[c,"setImmediate"],c+d),a.inPlace(window,[s],s+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(s+u,r),i.on(c+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",c)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",c)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function c(t,e){return e}function s(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(s(l,x),x.prototype=l.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",c),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!c(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||s(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&s(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",c=1,s="",f="";return o+"@nr="+i+"-"+c+"-"+n+"-"+r+"-"+t+"-"+a+"-"+s+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var c={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(c.d.tk=i),btoa(JSON.stringify(c))}function c(t){return f()&&s(t)}function s(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(24),h=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:c}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime]))}}function o(t,e){var n=s(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=s(e),t.sameOrigin=t.parsedOrigin.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable){var c=t("handle"),s=t(17),f=t(15).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(21),m=t(20),v=t(18),w=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var c=0;c<p;c++)e.addEventListener(d[c],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof w&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof w&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url&&(n=t[0].url),n&&(this.parsedOrigin=s(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,c=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||c),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(20);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(c(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(27),c=t(28),s=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(s.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw s.emit("fn-err",[arguments,this,t],n),t}finally{s.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],20:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],21:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],22:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,c=t(29);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],23:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!v){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),v=!0,d("timing",["fi",e,n])}}function c(t){d("pageHide",[p.now(),t])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var s,f,u,d=t("handle"),p=t("loader"),l=t(26),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(o);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(i);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var v=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,!1)})}l(c)}},{}],24:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",c=0;c<i.length;c++)o=i[c],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],25:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,s=c.match(a);s&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(o="Safari",i=s[1])}e.exports={agent:o,version:i,match:r}},{}],26:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[o]?"hidden":"visible")}"addEventListener"in document&&i&&document.addEventListener(i,e,!1)}e.exports=r;var o,i,a;"undefined"!=typeof document.hidden?(o="hidden",i="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",i="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",i="webkitvisibilitychange",a="webkitVisibilityState")},{}],27:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],28:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],29:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,c,i):i()}function n(n,r,o,i){if(!p.aborted||i){t&&t(n,r,o);for(var a=e(o),c=m(n),s=c.length,f=0;f<s;f++)c[f].apply(a,r);var d=u[y[n]];return d&&d.push([x,n,r,a]),a}}function l(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return d[t]=d[t]||o(n)}function w(t,e){f(t,function(t,n){e=e||"feature",y[n]=e,e in u||(u[e]=[])})}var g={},y={},x={on:l,addEventListener:l,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:a,aborted:!1};return x}function i(){return new r}function a(){(u.api||u.feature)&&(p.aborted=!0,u=p.backlog={})}var c="nr@context",s=t("gos"),f=t(27),u={},d={},p=e.exports=o();p.backlog=u},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!b++){var t=x.info=NREUM.info,e=p.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();s(g,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===p.readyState&&i()}function i(){c("mark",["domContent",a()+x.offset],null,"api")}var a=t(22),c=t("handle"),s=t(27),f=t("ee"),u=t(25),d=window,p=d.document,l="addEventListener",h="attachEvent",m=d.XMLHttpRequest,v=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var w=""+location,g={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1184.min.js"},y=m&&v&&v[l]&&!/CriOS/.test(navigator.userAgent),x=e.exports={offset:a.getLastTimestamp(),now:a,origin:w,features:{},xhrWrappable:y,userAgent:u};t(19),t(23),p[l]?(p[l]("DOMContentLoaded",i,!1),d[l]("load",r,!1)):(p[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var b=0},{}],"wrap-function":[function(t,e,n){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(28),a="nr@original",c=Object.prototype.hasOwnProperty,s=!1;e.exports=function(t,e){function n(t,e,n,o){function nrWrapper(){var r,a,c,s;try{a=this,r=i(arguments),c="function"==typeof n?n(r,a):n||{}}catch(f){p([f,"",[r,a,o],c])}u(e+"start",[r,a,o],c);try{return s=t.apply(a,r)}catch(d){throw u(e+"err",[r,a,d],c),d}finally{u(e+"end",[r,a,s],c)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,e,o,i){o||(o="");var a,c,s,f="-"===o.charAt(0);for(s=0;s<e.length;s++)c=e[s],a=t[c],r(a)||(t[c]=n(a,f?c+o:o,i,c))}function u(n,r,o){if(!s||e){var i=s;s=!0;try{t.emit(n,r,o,e)}catch(a){p([a,n,r,o])}s=i}}function d(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){p([r])}for(var o in t)c.call(t,o)&&(e[o]=t[o]);return e}function p(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),n.inPlace=f,n.flag=a,n}},{}]},{},["loader",2,16,5,3,4]);

;NREUM.loader_config={accountID:"1620288",trustKey:"1620288",agentID:"701474120",licenseKey:"d1c51ea680",applicationID:"701474120"}

;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"d1c51ea680",applicationID:"701474120",sa:1}

</script>
    <title>บริการ IT Support, IT Outsource, IT Service ครบวงจร ประสบการณ์กว่า 20 ปี</title>
    <meta name="description" content="IT Support, IT Outsource - ให้คุณมั่นใจบริการ IT Support ครบวงจรจากเรา พร้อมด้วยทีมงานมืออาชีพคนไทยและต่างชาติ ลดต้นทุนการจ้างพนักงานประจำ ทดลองบริการฟรี!" />
    <meta name="keywords" content="บริการ ดูแล ระบบ คอมพิวเตอร์, บริการด้านไอที, ดูแลคอมพิวเตอร์, ดูแลระบบไอที, ที่ ปรึกษา it, computer outsourcing, it infrastructure outsourcing, รับเดินสายแลน, บริการ it support, รับวางระบบ network, รับเดินสาย lan, เช่าคอม, business computer services, บริษัท ดูแลระบบคอมพิวเตอร์, ดูแลระบบ server, บริษัท outsource it ในไทย,it consulting, ดูแลคอมพิวเตอร์ รายเดือน" />
    <meta name="author" content="ThaiPcSupport">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="bingbot" content="noindex, nofollow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="บริการ IT Support, IT Outsource, IT Service ครบวงจร ประสบการณ์กว่า 20 ป" />
    <meta property="og:description" content="IT Support, IT Outsource - ให้คุณมั่นใจบริการ IT Support ครบวงจรจากเรา พร้อมด้วยทีมงานมืออาชีพคนไทยและต่างชาติ ลดต้นทุนการจ้างพนักงานประจำ ทดลองบริการฟรี!" />
    <meta property="og:url" content="https://www.thaipcsupport.com/" />
    <meta property="og:site_name" content="ThaiPCSupport" />
    <meta property="article:publisher" content="https://www.facebook.com/ThaiPCSupport" />
    <meta property="article:author" content="https://www.facebook.com/thaipcsupport/" />
    <meta property="article:modified_time" content="2020-03-24T10:32:14+00:00" />
    <meta property="og:image" content="https://www.thaipcsupport.com/assets/images/mtag/IT-5.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://www.thaipcsupport.com/assets/images/mtag/IT-5.png" />
    <meta name="twitter:creator" content="@https://twitter.com/thaipcsupport" />
    <meta name="twitter:site" content="@ThaiPC_Support" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="/assets/images/favicon.png">
    <!-- CSS
      ============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">

    <style>
        @font-face {
            font-family: TTNormsPro;
            src: url(/assets/css/font/yo_3_0.woff) format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: TTNormsPro;
            src: url(/assets/css/font/yo_14_0.woff) format('woff');
            font-weight: 600;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: TTNormsPro;
            src: url(/assets/css/font/yo_B_0.woff) format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: TTNormsPro;
            src: url(/assets/css/font/yo_15_0.woff) format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: TTNormsPro;
            src: url(/assets/css/font/yo_C_0.woff) format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: swap
        }



        @font-face {
            font-family: Sarabun;
            src: url(/assets/css/font/yo-Light.woff) format('woff');
            font-weight: 300;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: Sarabun;
            src: url(/assets/css/font/yo-Regular.woff) format('woff');
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }



        @font-face {
            font-family: Sarabun;
            src: url(/assets/css/font/yo-Medium.woff) format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: 'Sukhumvit Tadmai';
            src: url(/assets/css/font/03_yoTadmai_Bol.woff) format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: 'Sukhumvit Tadmai';
            src: url(/assets/css/font/04_yoTadmai_SeBold.woff) format('woff');
            font-weight: 600;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: 'Sukhumvit Tadmai';
            src: url(/assets/css/font/05_yoTadmai_Med.woff) format('woff');
            font-weight: 500;
            font-style: normal;
            font-display: swap
        }

    </style>

    <style>
    .nas-banner {
    background-color: #ffe7e7;
    position: relative;
    z-index: 1;
}
.nas-banner:before,.nas-banner:after {
    content: '';
    width: 615px;
    height: 234px;
    background: url(assets/images/arrow-left.png);
    position: absolute;
    top: 16px;
}
.nas-banner:before{
    left: 8%;
}
.nas-banner:after{
    right: 8%;
    z-index: -1;
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH";
}
.nas-banner .text-color-primary {
    color: #ff4b4b;
}
.nas-banner .btn {
    background-color: #ff4b4b;
}
    </style>

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
      <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css">
      <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">
      -->

    <link href="https://www.thaipcsupport.com/" hreflang="th-th" rel="alternate">
    <link href="https://www.thaipcsupport.com/en/" hreflang="en-us" rel="alternate">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Thaipcsupport Thailand",
            "url": "https://www.thaipcsupport.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.thaipcsupport.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }

    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Thaipcsupport",
            "description": "Thaipcsupport is Thailand IT services company. Its range of offerings includes IT Support, IT Helpdesk, IT Outsource, IT infrastructure services, systems integration, and distribution of information and communications technology (ICT) products across a wide range of focused industry verticals.",
            "image": "https://www.thaipcsupport.com/assets/images/logo/logo-itsupportthailand.png",
            "@id": "https://www.thaipcsupport.com",
            "url": "https://www.thaipcsupport.com",
            "telephone": "+662-114-7310",
            "email": "Sales@thaipcsupport.com",
            "priceRange": "฿ 1500",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1 The Empire Tower, Sathorn Road",
                "addressLocality": "Bangkok",
                "postalCode": "10120",
                "addressCountry": "TH"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 13.720572,
                "longitude": 100.530030
            },
            "sameAs": [
                "https://www.facebook.com/thaipcsupport",
                "https://twitter.com/ThaiPC_Support",
                "https://www.instagram.com/thaipcsupport",
                "https://www.youtube.com/channel/UCTI2tyg9IR6i61crf0jVxTQ",
                "https://www.linkedin.com/company/aquaorange",
                "https://www.wikidata.org/wiki/Q94189435",
                "https://www.thaipcsupport.com/"
            ]
        }

    </script>
    
</head>

<body class="body-th">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7CP28G" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="line-thaipc" class="">
        <div class="inner">
            <img alt="IT Support Thailand" class="line-add-qrcode" src="/assets/images/line@thaipcsupport.png">
            <a href="https://line.me/R/ti/p/%40thaipcsupport" target="new">
                <img alt="IT Support Thailand" class="line-add-link" src="/assets/images/line-add.png">
                <span>ติดต่อเจ้าหน้าที่<br>ผ่านช่องทาง Line@<br>Line ID : @Thaipcsupport</span>
            </a>
        </div>
        <a href="javascript:void(0);" onclick="( document.getElementById('line-thaipc').className == '' ? document.getElementById('line-thaipc').className = 'is-active' : document.getElementById('line-thaipc').className = '' )"> L<br>I<br>N<br>E</a>
    </div>
    <!--====================  header area ====================-->
    <div class="header-area header-sticky only-mobile-sticky">
        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="/">
                                <div class="h1-logo"><img alt="IT Support Thailand" src="/assets/images/logo/logo-itsupportthailand.png" class="img-fluid" width="333" height="43" title="it support thailand"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-center top-message mt-1">บริการ IT Support, IT Outsource, IT Service ครบวงจร ประสบการณ์กว่า 20 ปี</h1>
                    </div>
                    <div class="col-lg-3 text-right">
                        <a href="/contact-it-support.html" class="ht-btn ht-btn-md eme-btn"><span class="blink">ขอใบเสนอราคา</span> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Wrap End -->
        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center text-center num-for-mob"><a href="tel:021147310">สอบถามข้อมูล <b>02 114 7310</b></a>
                        </div>
                        <div class="header default-menu-style position-relative">
                            <a href="/contact-it-support.html" class="ht-btn ht-btn-md mobile-eme-btn"><span class="blink">ขอใบเสนอราคา</span> </a>
                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">
                                                    <ul>
                                                        <li class="">
                                                            <a href="/"><span>หน้าแรก</span></a>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#"><span>IT Solution</span></a>
                                                            <!-- mega menu -->
                                                            <ul class="megamenu megamenu--mega">
                                                                <li>
                                                                    <a href="/it-support-thailand/it-support.html" class="min-line-height">
                                                                        <i class="fas fa-headset megamenu-icon headset-um"></i>
                                                                        <h2 class="page-list-title margin-none">IT Support</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการ IT Support แบบครบวงจร พร้อมทั้งให้คำปรึกษาและวางแผน ระบบคอมพิวเตอร์สำหรับองค์กร</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/it-helpdesk-support/it-helpdesk-thailand.html" class="min-line-height">
                                                                        <i class="fas fa-hands-helping megamenu-icon helping-um"></i>
                                                                        <h2 class="page-list-title margin-none">IT Helpdesk</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ให้บริการโดยผู้เชี่ยวชาญด้านระบบไอที ในรูปแบบ รายวัน รายสัปดาห์ และรายเดือน</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/lan-wire-wireless/lan-wire-wireless-thailand.html" class="min-line-height">
                                                                        <i class="fas fa-ethernet megamenu-icon ethernet-um"></i>
                                                                        <h2 class="page-list-title margin-none">วางระบบ LAN</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการจัดหาอุปกรณ์และติดตั้งระบบ LAN สำหรับองค์กร </span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html" class="min-line-height">
                                                                        <i class="far fa-building megamenu-icon building-um"></i>
                                                                        <h2 class="page-list-title margin-none ">ขนย้าย/ติดตั้งอุปกรณ์ไอที</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการขนย้าย เปลี่ยนตำแหน่ง ย้ายสำนักงาน ติดตั้งฮาร์ดแวร์และซอฟต์แวร์</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/audit-software-thailand/audit-software.html" class="min-line-height">
                                                                        <i class="fas fa-calculator megamenu-icon calculator-um"></i>
                                                                        <h2 class="page-list-title margin-none">ตรวจสอบซอฟต์แวร์ </h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการตรวจสอบการใช้งานซอฟต์แวร์ของพนักงาน เพื่อให้สอดคล้องกับนโยบายในองค์กร</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/firewall-fortigate/firewall-fortigate-cisco.html" class="min-line-height">
                                                                        <i class="fas fa-fire megamenu-icon fa-fire-um"></i>
                                                                        <h2 class="page-list-title margin-none">Firewall </h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการรักษาความปลอดภัยการใช้งานระบบเครือข่ายภายในองค์กร ที่สามารถตรวจสอบได้</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/electronic-ewaste-thailand/ewaste-thailand.html" class="min-line-height">
                                                                        <i class="fas fa-recycle megamenu-icon fa-recycle-um"></i>
                                                                        <h2 class="page-list-title margin-none">E-waste</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">จัดการขยะอิเล็กทรอนิกส์อย่างมีประสิทธิภาพ</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/rental-computer-thailand/rental-computer.html" class="min-line-height">
                                                                        <i class="fas fa-laptop megamenu-icon fa-laptop-um"></i>
                                                                        <h2 class="page-list-title margin-none">เช่าคอมพิวเตอร์</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ในรูปแบบ บริการให้เช่า PC/Laptop ในรูปแบบ รายวัน รายเดือน และรายปี</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html" class="min-line-height">
                                                                        <i class="fas fa-tools megamenu-icon fa-tools-um"></i>
                                                                        <h2 class="page-list-title margin-none">จัดการโครงสร้างบริษัท</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการติดตั้ง ฮาร์ดแวร์ ซอฟต์แวร์ และระบบฐานข้อมูล พร้อมใช้งานที่สะดวก รวดเร็วและราคาย่อมเยาว์</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/software-hardware-sales.html" class="min-line-height">
                                                                        <i class="fas fa-memory megamenu-icon fa-memory-um"></i>
                                                                        <h2 class="page-list-title margin-none">จัดซื้ออุปกรณ์</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">จัดหาฮาร์ดแวร์ ซอฟต์แวร์ และระบบอินเตอร์เน็ต ให้เหมาะสมกับองค์กรด้วยราคาที่คุ่มค่าที่สุด</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/acronis-cloud-backup/acronis-backup-thailand.html" class="min-line-height">
                                                                        <i class="fas fa-server megamenu-icon server-um"></i>
                                                                        <h2 class="page-list-title margin-none">กู้คืนข้อมูล</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการรักษาความปลอดภัยของข้อมูล ป้องกันการสูญหาย และระบบกู้คืนข้อมูล</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/nas-storage/qnap-synology.html" class="min-line-height">
                                                                        <i class="fas fa-share-alt-square megamenu-icon square-um"></i>
                                                                        <h2 class="page-list-title margin-none">NAS / File Sharing</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ตั้งค่าสิทธิการเข้าถึงข้อมูลต่างๆ ขององค์กรผ่านระบบการแชร์ข้อมูล </span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="">
                                                            <a href="/it-support-helpdesk/it-support-helpdesk-thailand.html"><span>IT Outsource</span></a>
                                                        </li>
                                                        <li class="has-children">
                                                            <a href="#"><span>Cloud Solution</span></a>
                                                            <!-- mega menu -->
                                                            <ul class="megamenu megamenu--mega">
                                                                <li>
                                                                    <a href=" /aws-services-thailand/aws-web-services.html" class="min-line-height">
                                                                        <i class="fas fa-poll-h megamenu-icon poll-um"></i>
                                                                        <h2 class="page-list-title margin-none">Amazon AWS</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ออกแบบและดูแลการใช้งาน Amazon AWS Servers พร้อม Support 24/7/365</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/microsoft-azure-services/active-directory-thailand.html" class="min-line-height">
                                                                        <i class="fab fa-microsoft megamenu-icon microsoft-um"></i>
                                                                        <h2 class="page-list-title margin-none">Microsoft Azure</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ออกแบบและแนะนำเทคนิคการใช้ Microsoft Azure พร้อมดูแล 24/7/365t</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/en/gsuite-google-workspace.html" class="min-line-height">
                                                                        <i class="fab fa-google megamenu-icon google-um"></i>
                                                                        <h2 class="page-list-title margin-none">G Suite Google Mail</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ช่วยเหลือการติดตั้งใช้งาน G Suite Google Mail ระดับองค์กร</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/office365-thailand/office365.html" class="min-line-height">
                                                                        <i class="fas fa-file-excel megamenu-icon excel-um"></i>
                                                                        <h2 class="page-list-title margin-none ">Microsoft Office365</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการ Office365 และ Microsoft Team จัดหาพร้อมติดตั้งการใช้งานพร้อมใช้s</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/cloudflare-dns-thailand/cloudflare-dns.html" class="min-line-height">
                                                                        <i class="fas fa-cloud megamenu-icon cloud-um"></i>
                                                                        <h2 class="page-list-title margin-none">Cloudflare</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">Enterprise Grade Managed DNS, Web Security, Anti DDos and Global CDN </span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/cdn-cloudflare-akamai/web-optimisation-thailand.html" class="min-line-height">
                                                                        <i class="fas fa-project-diagram megamenu-icon diagram-um"></i>
                                                                        <h2 class="page-list-title margin-none">Web Speed Optimization</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ปรับปรุงประสิทธิเว็บไซต์ ความเร็ว SEO และ Search Engine</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/devops-services-thailand/devops-services.html" class="min-line-height">
                                                                        <i class="fas fa-user-secret megamenu-icon secret-um"></i>
                                                                        <h2 class="page-list-title margin-none double">DevOps as a Services 24x7 </h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ผู้เชี่ยวชาญบริการ DevOps</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/acronis-cloud-backup/acronis.html" class="min-line-height">
                                                                        <i class="fas fa-server megamenu-icon server-um"></i>
                                                                        <h2 class="page-list-title margin-none">Acronis Cloud Backup</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ระบบสำรองข้อมูลบนคลาวด์ระดับองค์กร </span></li>
                                                                        </ul>
                                                                    </a> <a href="/acronis-cloud-backup/acronis-true-image-backup.html" class="min-line-height">
                                                                        <i class="fas fa-server megamenu-icon server-um"></i>
                                                                        <h2 class="page-list-title margin-none">Windows PC Backup</h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ระบบสำรองข้อมูลอัตโนมัติบน Windown ผ่านคลาวด์อย่างรวดเร็วและปลอดภัย</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="/database-services-thailand/mysql-workbench.html" class="min-line-height">
                                                                        <i class="fas fa-database megamenu-icon database-um"></i>
                                                                        <h2 class="page-list-title margin-none">MySQL Consulting </h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">บริการตรวจสอบและให้คำปรึกษาการใช้งาน MySQL, MongoDB & Redis 24/7</span></li>
                                                                        </ul>
                                                                    </a>

                                                                    <a href="/firewall-fortigate/firewall-fortigate-cisco.html" class="min-line-height">
                                                                        <i class="fas fa-network-wired megamenu-icon wired-um"></i>
                                                                        <h2 class="page-list-title margin-none">Network Security </h2>
                                                                        <ul>
                                                                            <li><span class="mega-menu-text">ระบบตรวจสอบและรักษาความปลอดภัยบนเครือข่ายครอบคลุมทั้งองค์กร</span></li>
                                                                        </ul>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="">
                                                            <a href="/clients.html"><span>ลูกค้าของเรา </span></a>
                                                        </li>
                                                        <li class="has-children has-children--multilevel-submenu">
                                                            <a href="#"><span>เกี่ยวกับเรา</span></a>
                                                            <!-- multilevel submenu -->
                                                            <ul class="submenu">
                                                                <li><a href="/about-thaipcsupport.html"><span>Company</span></a></li>
                                                                <li><a href="/vision.html"><span>Vision</span></a></li>
                                                                <li><a href="/it-support-faq.html"><span>Why Choose us</span></a></li>
                                                                <li><a href="/jobthai-it-support/job-it-support.html"><span>Career </span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="">
                                                            <a href="/contact-it-support.html"><span>ติดต่อเรา </span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">
                                    <!-- language-menu -->
                                    <div class="language-umi">
                                        <ul>
                                            <li>
                                                <a href="/" class="thai">
                                                    <img alt="IT Support Thailand" class="ls-flag" width="35" height="23" src="/assets/images/flags/th.png" title="Thai">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/en/" class="eng">
                                                    <img alt="IT Support Thailand" class="ls-flag" width="35" height="23" src="/assets/images/flags/en.png" title="English">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="https://line.me/R/ti/p/%40thaipcsupport"><span class="social-icon fab fa-line"> </span></a><span class="phone-num text-right">สอบถามข้อมูล<br><span><a href="tel:021147310" class="pt-1"><b>02 114 7310</b></a></span></span>
                                        </li>
                                    </ul>
                                    <!-- header-search-form -->
                                </div>
                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->
    </div>
    <!--====================  End of header area  ====================-->
    <div class="site-wrapper-reveal">
        <div class="appointment-hero-wrapper appointment-hero-bg-3 section-space--ptb_60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="business-solution-form-wrap">
                            <div class="contact-title text-center section-space--mb_20">
                                <h5 class="h5-th">ติดต่อเรา</h5>
                                <p class="text text-th">ความสุขของเราคือบริการด้านไอที</p>
                            </div>
                            <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2525354000007409051 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory2525354000007409051()' accept-charset='UTF-8'>
                                <input type='text' style='display:none;' name='xnQsjsdp' value='2e3cd0e69c9394f6bd1aaa810952430fe1bfaf08d916a7e5d10ffe8c9c022326'></input>
                                <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                                <input type='text' style='display:none;' name='xmIwtLD' value='5968f88351f23e61bebaf421c95f6dc2414256d073c629f3a7da1693b75fd2e4'></input>
                                <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                                <input type='text' style='display:none;' name='returnURL' value='https://www.thaipcsupport.com/thank-you.html'> </input>
                                <div class="contact-form__two">
                                    <div class="contact-inner">
                                        <input name="Last Name" type="text" placeholder="ชื่อ *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="Email" type="email" placeholder="อีเมล *">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="Phone" type="Phone" placeholder="โทรศัพท์ *">
                                    </div>
                                    <div style="display: none;">
                                        <select style='width:100%;box-sizing:border-box;' name='LEADCF1'>
                                            <option value='-None-'>-None-</option>
                                            <option value='Bom'>Bom</option>
                                            <option selected value='Ping'>Ping</option>
                                            <option value='K.Shan'>K.Shan</option>
                                        </select>
                                        <select style='width:100%;box-sizing:border-box;' name='Lead Source'>
                                            <option value='-None-'>-None-</option>
                                            <option value='E-Mail'>E-Mail</option>
                                            <option value='Call'>Call</option>
                                            <option value='Google&#x20;Adwords'>Google Adwords</option>
                                            <option value='Facebook&#x20;Ads'>Facebook Ads</option>
                                            <option value='Landing&#x20;Page&#x20;2'>Landing Page 2</option>
                                            <option value='Landing-IT-Support-Thailand'>Landing-IT-Support-Thailand</option>
                                            <option selected value='Web-Homepage'>Web-Homepage</option>
                                            <option value='Contact-ITBKK'>Contact-ITBKK</option>
                                            <option value='Website-Contact&#x20;us'>Website-Contact us</option>
                                            <option value='Chat-Website'>Chat-Website</option>
                                            <option value='Chat-Line&#x40;'>Chat-Line&#x40;</option>
                                        </select>
                                        <select style='width:100%;box-sizing:border-box;' name='Lead Status'>
                                            <option value='-None-'>-None-</option>
                                            <option selected value='New&#x20;Lead'>New Lead</option>
                                            <option value='Contacted'>Contacted</option>
                                            <option value='Meeting&#x20;before&#x20;QT'>Meeting before QT</option>
                                            <option value='Meeting'>Meeting</option>
                                            <option value='QT&#x20;before&#x20;Meeting'>QT before Meeting</option>
                                            <option value='Follow&#x20;up-QT'>Follow up-QT</option>
                                            <option value='Hold'>Hold</option>
                                            <option value='Lost&#x20;Lead'>Lost Lead</option>
                                            <option value='Junk&#x20;Lead'>Junk Lead</option>
                                            <option value='Not&#x20;Qualified'>Not Qualified</option>
                                        </select>
                                        <select style='width:100%;box-sizing:border-box;' name='LEADCF4'>
                                            <option value='-None-'>-None-</option>
                                            <option selected value='Hot'>Hot</option>
                                            <option value='Medium'>Medium</option>
                                            <option value='Hold'>Hold</option>
                                            <option value='Junk'>Junk</option>
                                        </select>
                                    </div>
                                    <div class="comment-submit-btn text-center">
                                        <input class="ht-btn ht-btn-md" type="submit" value="Submit"></input>
                                    </div>
                                </div>
                                <script>
                                    var mndFileds = new Array('Last Name', 'Email');
                                    var fldLangVal = new Array('Last Name', 'Email');
                                    var name = '';
                                    var email = '';

                                    function checkMandatory2525354000007409051() {
                                        for (i = 0; i < mndFileds.length; i++) {
                                            var fieldObj = document.forms['WebToLeads2525354000007409051'][mndFileds[i]];
                                            if (fieldObj) {
                                                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                                    if (fieldObj.type == 'file') {
                                                        alert('Please select a file to upload.');
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                    alert(fldLangVal[i] + ' cannot be empty.');
                                                    fieldObj.focus();
                                                    return false;
                                                } else if (fieldObj.nodeName == 'SELECT') {
                                                    if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                                        alert(fldLangVal[i] + ' cannot be none.');
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                } else if (fieldObj.type == 'checkbox') {
                                                    if (fieldObj.checked == false) {
                                                        alert('Please accept  ' + fldLangVal[i]);
                                                        fieldObj.focus();
                                                        return false;
                                                    }
                                                }
                                                try {
                                                    if (fieldObj.name == 'Last Name') {
                                                        name = fieldObj.value;
                                                    }
                                                } catch (e) {}
                                            }
                                        }
                                        document.getElementById('formsubmit').disabled = true;
                                    }

                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--ptb_60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__four">
                            <div class=" row">
                                <div class="single-item col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-04">
                                        <div class="image-box-wrap">
                                            <div class="box-image text-center custom-icon it-support">
                                                IT Support
                                            </div>
                                            <div class="content">
                                                <h5 class="heading text-center h6-th">บริการ IT Support </h5>
                                                <ul class="check-list section-space--mb_10">
                                                    <li class="list-item section-space--mt_20 li-th">รูปแบบบริการ รายครั้ง/รายเดือน/รายปี
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">Onsite & Remote Support ไม่จำกัดจำนวน
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการติดตั้งระบบ Antivirus & Spyware
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการตรวจสอบซอฟต์แวร์ & ลิขสิทธิ์ License
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการดูแลรักษาอุปกรณ์ใช้งาน
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">รายงานสรุปการทำงาน
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="single-item col-lg-4 col-md-6  wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-04">
                                        <div class="image-box-wrap">
                                            <div class="box-image text-center custom-icon firewall">
                                                Firewall & Security
                                            </div>
                                            <div class="content">
                                                <h5 class="heading text-center h6-th">บริการ Firewall & Security </h5>
                                                <ul class="check-list section-space--mb_10">
                                                    <li class="list-item section-space--mt_20 li-th">บริการติดตั้งและดูแล Firewall
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">กำหนดสิทธิ์การเข้าถึงของบางเว็บไซต์
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการติดตั้งระบบ Load Balance
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการติดตั้งและออกแบบ ระบบ VPN
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการจัดการความปลอดภัยเครือข่าย
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="single-item col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-04">
                                        <div class="image-box-wrap">
                                            <div class="box-image text-center custom-icon nas-file-server">
                                                NAS & File Server
                                            </div>
                                            <div class="content">
                                                <h5 class="heading text-center h6-th">บริการ NAS & File Server</h5>
                                                <ul class="check-list section-space--mb_10 li-th">
                                                    <li class="list-item section-space--mt_20 li-th">บริการติดตั้งและกำหนดสิทธิ์การเข้าถึง
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">บริการตั้งค่าการแบ็คอัพข้อมูลอัตโนมัติ
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">เข้าถึงไฟล์ข้อมูลได้อย่างรวดเร็ว
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">ใช้ได้ทั้งจากบน PC และ มือถือ
                                                    </li>
                                                    <li class="list-item section-space--mt_10 li-th">พื้นที่เก็บข้อมูลไม่จำกัด
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-30">
                        <div class="tab-button text-center">
                            <a href="it-support-thailand/it-support.html" class="ht-btn ht-btn-md">ข้อมูลเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->
        <!--========== Call to Action Area Start ============-->
        <div class="section-space--ptb_30 nas-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center">
                        <img alt="NAS" src="assets/images/nas-light-2.gif" class="img-fluid">
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="text-center mb-10">
                            <h3 class="heading">NAS <span class="aws text-color-primary">&</span> File Server</h3>
                            <p class="text-th">NAS (Network Attached Storage) เป็นอุปกรณ์จัดเก็บข้อมูลอัจฉริยะ<br>ที่เชื่อมต่อกับเครือข่ายที่บ้านหรือสำนักงานของคุณ </p>
                        </div>
                        <div class="cta-button-group--two text-center">
                            <a href="/nas-storage/qnap-synology.html" class="btn btn-one"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> ข้อมูลเพิ่มเติม</a>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img alt="File Sharing" src="assets/images/file-sharing.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
        <!--====================  Accordion area ====================-->
        <div class="about-delivering-wrapper section-space--ptb_80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">บริการของเรา</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="faq-wrapper ">
                            <div id="accordion">
                                <div class="card umi-card">
                                    <div class="card-header" id="headingOne">
                                        <div class="row">
                                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two ul-umi" role="tablist">
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/it-support-thailand/it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <i class="fas fa-headset" style="font-size: 38px;"></i><br><br>บริการ <br>IT Support<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/firewall-fortigate/firewall-fortigate-cisco.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <i class="fas fa-network-wired" style="font-size: 38px;"></i><br><br>ระบบ VPN<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="fas fa-server" style="font-size: 38px;"></i><br><br>ระบบ Backup & Recovery<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = ' /aws-services-thailand/aws-web-services.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            <i class="fab fa-aws" style="font-size: 38px;"></i><br><br>บริการ <br>AWS Cloud<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/devops-services-thailand/devops-services.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                            <i class="fab fa-dev" style="font-size: 38px;"></i><br><br>บริการ DevOps<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse mob-collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTwo" class="collapse mob-collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseThree" class="collapse mob-collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseFour" class="collapse mob-collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseFive" class="collapse mob-collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card umi-card">
                                    <div class="card-header" id="headingTwo">
                                        <div class="row">
                                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two ul-umi" role="tablist">
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/it-helpdesk-support/it-helpdesk-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseEleven">
                                                            <i class="fas fa-hands-helping" style="font-size: 38px;"></i><br><br>บริการ <br>IT Helpdesk<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/firewall-fortigate/firewall-fortigate-cisco.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                            <i class="fas fa-fire" style="font-size: 38px;"></i><br><br>ติดตั้ง Firewall<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/nas-storage/qnap-synology.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                            <i class="fas fa-share-alt" style="font-size: 38px;"></i><br><br>จัดการระบบ NAS & File Sharing<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/microsoft-azure-services/active-directory-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                            <i class="fas fa-folder-open" style="font-size: 38px;"></i><br><br>ติดตั้ง Active Directory<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/database-services-thailand/database-consultancy.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                            <i class="fas fa-database" style="font-size: 38px;"></i><br><br>ดูแลระบบ Database<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapseSix" class="collapse mob-collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseSeven" class="collapse mob-collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseEight" class="collapse mob-collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseNine" class="collapse mob-collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTen" class="collapse mob-collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card umi-card">
                                    <div class="card-header" id="headingThree">
                                        <div class="row">
                                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two ul-umi" role="tablist">
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/it-support-thailand/it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                            <i class="fas fa-ambulance" style="font-size: 38px;"></i><br><br>บริการ IT Maintenance<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/audit-software-thailand/audit-software.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
                                                            <i class="fas fa-calculator" style="font-size: 38px;"></i><br><br>บริการ <br>IT Service<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/office365-thailand/office365.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                            <i class="fas fa-file-excel" style="font-size: 38px;"></i><br><br>ติดตั้ง Microsoft Office365<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/cdn-cloudflare-akamai/web-optimisation-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                            <i class="fas fa-user-secret" style="font-size: 38px;"></i><br><br>จัดการระบบ CDN และ Security<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/microsoft-azure-services/active-directory-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseFiften" aria-expanded="false" aria-controls="collapseFiften">
                                                            <i class="fab fa-microsoft" style="font-size: 38px;"></i><br><br>ติดตั้ง <br>Microsoft Azure<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapseEleven" class="collapse mob-collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweleve" class="collapse mob-collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseThirteen" class="collapse mob-collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseFourteen" class="collapse mob-collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseFiften" class="collapse mob-collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card umi-card">
                                    <div class="card-header" id="headingFour">
                                        <div class="row">
                                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two ul-umi" role="tablist">
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                            <i class="fas fa-microchip" style="font-size: 38px;"></i><br><br>จัดซื้อฮาร์ดแวร์และซอฟต์แวร์<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/firewall-fortigate/firewall-fortigate-cisco.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                            <i class="fas fa-radiation-alt" style="font-size: 38px;"></i><br><br>ติดตั้งระบบ Antivirus และ Spyware<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                                            <i class="fab fa-google" style="font-size: 38px;"></i><br><br>บริการระบบอีเมล<br>G-Suite<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/it-infrastructure-thailand/setup-offfice-infrastructure.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                                            <i class="fas fa-tools" style="font-size: 38px;"></i><br><br>ดููแลระบบ Infrastructure<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/electronic-ewaste-thailand/ewaste-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweenty" aria-expanded="false" aria-controls="collapseTweenty">
                                                            <i class="fas fa-recycle" style="font-size: 38px;"></i><br><br>บริการ<br>E-waste<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapseSixteen" class="collapse mob-collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseSeventeen" class="collapse mob-collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseEighteen" class="collapse mob-collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseNineteen" class="collapse mob-collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweenty" class="collapse mob-collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card umi-card">
                                    <div class="card-header" id="headingFive">
                                        <div class="row">
                                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two ul-umi" role="tablist">
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/lan-wire-wireless/lan-wire-wireless-thailand.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweentyone" aria-expanded="false" aria-controls="collapseTweentyone">
                                                            <i class="fas fa-ethernet" style="font-size: 38px;"></i><br><br>วางระบบ Network<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweentytwo" aria-expanded="false" aria-controls="collapseTweentytwo">
                                                            <i class="fas fa-code" style="font-size: 38px;"></i><br><br>พัฒนาเว็บแอพพลิเคชั่น<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweentythree" aria-expanded="false" aria-controls="collapseTweentythree">
                                                            <i class="fas fa-laptop-code" style="font-size: 38px;"></i><br><br>พัฒนา Mobile App<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweentyfour" aria-expanded="false" aria-controls="collapseTweentyfour">
                                                            <i class="fas fa-hdd" style="font-size: 38px;"></i><br><br>โดเมนและเว็บโฮสติ้ง<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                                <li class="nav-item">
                                                    <h5 class="mb-0"><button onclick="window.location.href = '/contact-it-support.html';" class="btn-link collapsed text-center umi-tog" data-toggle="collapse" data-target="#collapseTweentyfive" aria-expanded="false" aria-controls="collapseTweentyfive">
                                                            <i class="fas fa-tasks" style="font-size: 38px;"></i><br><br>พัฒนาระบบ CRM<br><span class="arrow-umi">
                                                                <i class="fas fa-chevron-up disable"></i><i class="fas fa-chevron-down"></i> </span>
                                                        </button>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="collapseTweentyone" class="collapse mob-collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweentytwo" class="collapse mob-collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweentythree" class="collapse mob-collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweentyfour" class="collapse mob-collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTweentyfive" class="collapse mob-collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body umi-body">
                                            <div class="col-lg-12">
                                                <div class="row ">
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 2
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <p> ThaiPcSupport<br>
                                                            Query data in S3 using SQL 4
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Accordion area  ====================-->
        <!--========== Call to Action Area Start ============-->
        <div class="section-space--ptb_60 acronis-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="text-center mb-10 text-white">
                            <h3 class="heading text-white">ระบบ <span class="acronis text-color-primary"> Acronis</span> </h3>
                            <p class="text-th">Backup & Recovery ด้วย Acronis Backup<br>แก้ไขปัญหาระบบล่ม ไม่เสถียร ไม่ปลอดภัย ทำให้ธุรกิจสามารถทำงานได้อย่างต่อเนื่อง <br>ลดความเสี่ยงในการเกิด Downtime</p>
                        </div>
                        <div class="cta-button-group--two text-center">
                            <a href="/aws-services-thailand/aws-web-services.html" class="aws btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> ขอ้มูลเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
        <!--===========  feature-images-wrapper  End =============-->
        <div class="feature-images-wrapper bg-gray  section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-images__four">
                            <div class=" row">
                                <div class="single-item col-lg-12 col-md-6 mt-10 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-04 color-bt-two">
                                        <div class="image-box-wrap">
                                            <div class="content text-left">
                                                <div class="heading">
                                                    <ul class="check-list circle-list">
                                                        <li class="list-item li-th">สัญญาบริการไอที รายเดือน/รายปี</li>
                                                        <li class="list-item mt-15 li-th">บริการ On-Site & Remote Support</li>
                                                        <li class="list-item mt-15 li-th">บริการ IT Helpdesk (Part time & Full Time)</li>
                                                        <li class="list-item mt-15 li-th">บริการบำรุงรักษา PC / Laptop </li>
                                                        <li class="list-item mt-15 li-th">IT Consulting </li>
                                                        <li class="list-item mt-15 li-th">บริการบำรุงรักษา Windows Server</li>
                                                        <li class="list-item mt-15 li-th">แชร์ไฟล์และ Permission</li>
                                                        <li class="list-item mt-15 li-th">บริการ NAS (Synopology & QNAP) </li>
                                                        <li class="list-item mt-15 li-th">บริการตรวจสอบดูแลฮาร์ดแวร์และซอฟต์แวร์</li>
                                                        <li class="list-item mt-15 li-th">เน็ตเวิร์กและประสิทธิภาพการใช้งาน </li>
                                                        <li class="list-item mt-15 li-th">ดูแลจัดการ WiFi & Access Point</li>
                                                        <li class="list-item mt-15 li-th">บริการติดตั้งระบบ Antivirus & Spyware</li>
                                                        <li class="list-item mt-15 li-th">ติดตั้งและดูแล Firewall </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="row center-middle">
                            <img alt="IT Support Thailand" src="/assets/images/it-support/it-support2.png" class="img-center">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-images__four">
                            <div class=" row">
                                <div class="single-item col-lg-12 col-md-6 mt-10 wow move-up">
                                    <div class="ht-box-images style-04 color-bt-three">
                                        <div class="image-box-wrap">
                                            <div class="content text-left circle-list">
                                                <div class="heading">
                                                    <ul class="check-list">
                                                        <li class="list-item li-th">รายงานกิจกรรมจัดการสินทรัพย์ด้านไอที</li>
                                                        <li class="list-item mt-15 li-th">รายงาน รายวัน / รายสัปดาห์ / รายเดือน</li>
                                                        <li class="list-item mt-15 li-th">ระบบแบ็คอัพข้อมูล</li>
                                                        <li class="list-item mt-15 li-th">แบ็คอัพข้อมูลบนคลาวด์ (Real Time)</li>
                                                        <li class="list-item mt-15 li-th">การตั้งค่า VPN & Load Balance</li>
                                                        <li class="list-item mt-15 li-th">ที่ปรึกษาการใช้งาน AWS Cloud Cloud</li>
                                                        <li class="list-item mt-15 li-th">ที่ปรึกษาการใช้งาน Microsoft Azure</li>
                                                        <li class="list-item mt-15 li-th">ที่ปรึกษาการใช้งาน Microsoft Exchange & Microsoft Teams</li>
                                                        <li class="list-item mt-15 li-th">บริการอีเมล Google G-Suite</li>
                                                        <li class="list-item mt-15 li-th">ที่ปรึกษาวางแผนพัฒนาระบบไอทีองค์กร</li>
                                                        <li class="list-item mt-15 li-th">เจ้าหน้าที่ไอทีผู้ชำนาญเฉพาะทาง</li>
                                                        <li class="list-item mt-15 li-th">ทีมพนักงานไอทีประการณ์สูง</li>
                                                        <li class="list-item mt-15 li-th">สัญญาบริการรักษาระดับคุณภาพ (SLA)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-delivering-wrapper section-space--ptb_80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading h3-th">ลูกค้าของเรา</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img alt="IT Support Thailand" src="/assets/images/customers/all.jpg" class="img-fluid" title="sandvik-thaipcsupport">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <br>
                <div class="tab-button text-center">
                    <a href="/clients.html" class="ht-btn ht-btn-md">ลููกค้าทั้งหมด</a>
                </div>
            </div>
        </div>
        <div class="accordion-wrapper bg-gray  section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_20">
                            <h3 class="heading">คำถามที่พบบ่อย</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-wrapper  section-space--mt_40">
                            <div id="faq-toggles-faq">
                                <div class="card">
                                    <div class="card-header" id="faqTwo">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapsefaqTwo" aria-expanded="false" aria-controls="collapsefaqTwo">
                                                บริการ IT Support / IT Outsource ของ ThaiPC Support<span> <i class="fas fa-chevron-down"></i>
                                                    <i class="fas fa-chevron-up"></i> </span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefaqTwo" class="collapse" aria-labelledby="faqTwo" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>บริการดูแลครอบคลุมงาน IT ทั้งองค์กร คอมพิวเตอร์เปิดไม่ติด ปริ้นเตอร์ไม่ทำงาน ไฟล์ข้อมูลหาย ไวรัสเข้าคอมพิวเตอร์ อินเตอร์เน็ตช้า ฯลฯ รวมถึงบริการ จัดซื้อ/จัดหา Hardware Software ให้คำปรึกษาและแนะนำ knowledge ด้าน IT ให้การทำงานของพนักงานมีความราบรื่น โดยไม่จำเป็นต้องมีพนักงาน IT ประจำ</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqThree">
                                        <h5 class="mb-0">
                                            <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapsefaqThree" aria-expanded="false" aria-controls="collapsefaqThree">
                                                รูปแบบบริการ <span> <i class="fas fa-chevron-down"></i>
                                                    <i class="fas fa-chevron-up"></i> </span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefaqThree" class="collapse" aria-labelledby="faqThree" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>ThaiPC Support ให้บริการดูแลและแก้ไขปัญหาสำหรับองค์กร ในรูปแบบสัญญาบริการ </p>
                                            <p><b>รายครั้ง:</b> ไม่มีข้อผูกมัด เรียกหาเราเมื่อคุณเกิดปัญหา ชำระค่าบริการต่อครั้งตามรายละเอียดงานที่คุณส่งมอบ</p>
                                            <p><b>รายเดือน:</b> ให้บริการดูแลอย่างต่อเนื่องทุกปัญหาที่คุณแจ้ง เราพร้อมดูแลและแก้ไข ในรูปแบบบริการ Onsite, On Call และ Remote Support ชำระค่าบริการรายเดือน สัญญาบริการปีต่อปี</p>
                                            <p><b>รายปี:</b> เลือกชำระค่าบริการเหมาจ่ายรายปี ให้คุณมั่นใจในการดูแลและบริการอย่างต่อเนื่องในทุกช่องทางตลอดทั้งปี </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqFour">
                                        <h5 class="mb-0">
                                            <button class="collapsed" data-toggle="collapse" data-target="#collapsefaqFour" aria-expanded="false" aria-controls="collapsefaqFour">
                                                ค่าบริการ<span> <i class="fas fa-chevron-down"></i>
                                                    <i class="fas fa-chevron-up"></i> </span>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsefaqFour" class="collapse" aria-labelledby="faqFour" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <p>ThaiPC Support ประเมินค่าบริการจาก Scope งานอย่างเหมาะสมและคุ้มค่าต่อความต้องการ และการลงทุนขององค์กร ยินดีเข้าตรวจสอบหน้างานก่อน โดยไม่มีค่าใช้จ่ายใดๆ สอบถามข้อมูลเพิ่มเติม 02-114-7310</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Start toggles -->
                        <div class="toggles-wrapper section-space--mt_40">
                            <div class="faq-wrapper">
                                <div id="faq-toggles">
                                    <div class="card">
                                        <div class="card-header" id="faqTweleve">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapsefaqTweleve" aria-expanded="false" aria-controls="collapsefaqTweleve">
                                                    มีเจ้าหน้าที่ IT Support onsite แบบ Fulltime หรือไม่<span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefaqTweleve" class="collapse" aria-labelledby="faqTweleve" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <p>ThaiPC Support พร้อมให้บริการในทุกรูปแบบเพื่อให้ตรงกับความต้องการของคุณ สอบถามข้อมูลเพิ่มเติม 02-114-7310</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqThirteen">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapsefaqThirteen" aria-expanded="false" aria-controls="collapsefaqThirteen">
                                                    ต้องการเช่าคอมพิวเตอร์ ต้องทำอย่างไร <span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefaqThirteen" class="collapse" aria-labelledby="faqThirteen" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>คุณสามารถแจ้ง รุ่น/สเปค คอมพิวเตอร์ที่คุณต้องการใช้งาน จำนวนคอมพิวเตอร์ และระยะเวลาที่ต้องการเช่า ในรูปแบบ "รายวัน", "รายเดือน" และ "รายปี"</p>
                                                <p>โดยจะได้รับโปรแกรม Windows 10 /Office 365 /Anti-virus Eset ลิขสิทธิ์ ติดตั้งพร้อมใช้งาน</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqFourteen">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapsefaqFourteen" aria-expanded="false" aria-controls="collapsefaqFourteen">
                                                    การสำรองข้อมูลบนคลาวด์ คืออะไร <span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsefaqFourteen" class="collapse" aria-labelledby="faqFourteen" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>การสำรองข้อมูลบนคลาวด์ หรือการสำรองข้อมูลออนไลน์ เป็นกระบวนโอนย้ายข้อมูลไปยังเซิร์ฟเวอร์ภายนอกตามระยะเวลาที่กำหนด โดยเซิร์ฟเวอร์จะตั้งอยู่ในศูนย์ข้อมูลที่ปลอดภัย เชื่อถือได้ ง่ายต่อการจัดการและตรวจสอบ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End toggles -->
                    </div>
                </div>
            </div>
        </div>
        <!--======== Tabs Wrapper Start ======== -->
        <div class="tabs-wrapper bg-white gray section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <h6 class="section-sub-title mb-20 h6-th">ภาพรวมบริษัท</h6>
                            <h3 class="section-title h3-th">
                                ThaiPC Support
                                <span class="text-color-primary"> ก่อตั้งเมื่อปี 2544</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ht-tab-wrap">
                        <div class="text-center  ">
                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                <li class="tab__item nav-item active">
                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">ภารกิจของเรา</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">Security Partners</a>
                                </li>
                                <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#tab_list_08" role="tab" aria-selected="false">Software Partners</a>
                                </li>
                                <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab5" data-toggle="tab" href="#tab_list_09" role="tab" aria-selected="false">Cloud Consultant</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content ht-tab__content">
                            <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_40">
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="tab-history-image mt-30">
                                                <div class="single-popup-wrap">
                                                    <img alt="IT Support Thailand" class="img-fluid" src="/assets/images/bg/home-processing-video-intro-slider-slide-01-image-01-570x350.jpg" width="570" height="350">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 offset-lg-1 ">
                                            <div class="tab-content-inner  mt-30">
                                                <div class="text mb-30 text-th">บริการดูแล วางแผน และออกแบบระบบสำหรับองค์กรของคุณ <br>เวลาทำการ จันทร์ - ศุกร์ เวลา 9.00 น. - 18.00 น.<br></div>
                                                <ul class="check-list section-space--mb_40">
                                                    <li class="list-item li-th">ที่ปรึกษาด้านระบบไอที </li>
                                                    <li class="list-item li-th">ออกแบบระบบไอทีสำหรับองค์กร </li>
                                                    <li class="list-item li-th">จัดหาอุปกรณ์ไอที </li>
                                                    <li class="list-item li-th">ดูแลและตรวจสอบซอฟต์แวร์ </li>
                                                </ul>
                                                <div class="tab-button">
                                                    <a class="btn-text" href="#">
                                                        <span class="button-text">สอบถามรายละเอียด <i class="far fa-long-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60 brand-logo-slider__one">
                                    <div class="modern-grid--12">
                                        <div class="brand-logo brand-logo--slider">
                                            <div>
                                                <img alt="IT Support Thailand" src="/assets/images/featured/security-partners/all.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_list_08" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60 brand-logo-slider__one">
                                    <div class="modern-grid--12">
                                        <div class="brand-logo brand-logo--slider">
                                            <div>
                                                <img alt="IT Support Thailand" src="/assets/images/featured/software-partners/all.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_list_09" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60 brand-logo-slider__one">
                                    <div class="modern-grid--12">
                                        <div class="brand-logo brand-logo--slider">
                                            <img alt="IT Support Thailand" src="/assets/images/featured/cloud-consultant/all.jpg" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--======== Tabs Wrapper End ======== -->
        <!--========== ลูกค้าของเรา ============-->
        <div class="about-delivering-wrapper bg-gray section-space--ptb_60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading h3-th">ได้รับความสนใจบนสื่อ</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center">
                        <img alt="IT Support Thailand" src="/assets/images/featured/all.jpg" class="img-fluid" title="">
                    </div>
                </div>
            </div>
        </div>
        <!--========== ลูกค้าของเรา ============-->
        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_60 cta-bg-image_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h6 class="heading"><span class="text-color-primary">ThaiPC Support</span> พร้อมให้บริการงานไอทีทุกรูปแบบ</h6>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--two text-center">
                            <a href="/contact-it-support.html" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> ติดต่อเจ้าหน้าที่</a>
                            <a href="/about-thaipcsupport.html" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> ขอรับข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
        <!--============ ติดต่อเรา Area Start =================-->
        <?php include "contactform.php";?>
        <!--============ ติดต่อเรา Area End =================-->
    </div>
    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper bg-gray">
        <div class="footer-area section-space--ptb_30">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                        <div class="footer-widget__logo mb-30">
                            <a href="/"><img alt="IT Support Thailand" src="/assets/images/logo/logo-itsupportthailand.png" class="img-fluid" title="it support thailand" width="333" height="43"></a>
                        </div>
                        <ul class="footer-widget__list">
                            <li class="li-th">1 อาคารเอ็มไพร์ ทาวเวอร์ ชั้น 47 ห้องเลขที่ 4703 ถนนสาทรใต้ แขวงยานนาวา เขตสาทร กรุงเทพมหานคร 10120</li>
                            <li><b>โทรศัพท์ : </b><a href="tel:021147310" class="hover-style-link text-black font-weight--bold">02 114 7310</a>, <a href="tel:0650088330" class="hover-style-link text-black font-weight--bold">065 008 8330</a></li>
                            <li><b>อีเมล : </b><a href="mailto:sales@thaipcsupport.com" class="hover-style-link">Sales@thaipcsupport.com</a></li>
                            <li><b>Partners : </b><a href="mailto:partners@thaipcsupport.com" class="hover-style-link">Partners@thaipcsupport.com</a></li>
                            <li class="mt-10"><a href="https://www.thaipcsupport.com/" class="hover-style-link text-color-primary">www.thaipcsupport.com</a></li>
                        </ul>
                        <ul class="list ht-social-networks">
                            <li class="item">
                                <a href="https://line.me/R/ti/p/%40thaipcsupport" target="_blank" aria-label="Line" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-line link-icon" style="font-size: 38px; color:#43c606;"></i>
                                </a>
                            </li>
                            <li class="item">
                                <a href="https://wa.me/66818471065" target="_blank" aria-label="Whatsapp" class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-whatsapp link-icon" style="font-size: 38px; color:#28a71a;"></i>
                                </a>
                            </li>
                            
                        </ul>
                        

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">IT Solution</h6>
                        <ul class="footer-widget__list circle-list">
                            <li><a href="/it-support-thailand/it-support.html" class="hover-style-link list-item">IT Support</a></li>
                            <li><a href="/it-helpdesk-support/it-helpdesk-thailand.html" class="hover-style-link list-item">IT Helpdesk</a></li>
                            <li><a href="/lan-wire-wireless/lan-wire-wireless-thailand.html" class="hover-style-link list-item">วางระบบ LAN</a></li>
                            <li><a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html" class="hover-style-link list-item">ขนย้าย/ติดตั้งอุปกรณ์ไอที</a></li>
                            <li><a href="/audit-software-thailand/audit-software.html" class="hover-style-link list-item">ตรวจสอบซอฟต์แวร์</a></li>
                            <li><a href="/firewall-fortigate/firewall-fortigate-cisco.html" class="hover-style-link list-item">Firewall</a></li>
                            <li><a href="/electronic-ewaste-thailand/ewaste-thailand.html" class="hover-style-link list-item">E-waste</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <ul class="footer-widget__list circle-list">
                            <li><a href="/rental-computer-thailand/rental-computer.html" class="hover-style-link list-item">เช่าคอมพิวเตอร์</a></li>
                            <li><a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html" class="hover-style-link list-item">จัดการโครงสร้างบริษัท</a></li>
                            <li><a href="/software-hardware-sales.html" class="hover-style-link list-item">จัดซื้ออุปกรณ์</a></li>
                            <li><a href="/acronis-cloud-backup/acronis-backup-thailand.html" class="hover-style-link list-item">กู้คืนข้อมูล</a></li>
                            <li><a href="/nas-storage/qnap-synology.html" class="hover-style-link list-item">NAS & File Sharing</a></li>
                            <li><a href="/it-support-helpdesk/it-support-helpdesk-thailand.html" class="hover-style-link list-item">IT Outsource</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <h6 class="footer-widget__title mb-20">Cloud Solution</h6>
                        <ul class="footer-widget__list circle-list">
                            <li><a href=" /aws-services-thailand/aws-web-services.html" class="hover-style-link list-item">Amazon AWS</a></li>
                            <li><a href="/microsoft-azure-services/active-directory-thailand.html" class="hover-style-link list-item">Microsoft Azure</a></li>
                            <li><a href="/en/gsuite-google-workspace.html" class="hover-style-link list-item">G Suite Google Mail</a></li>
                            <li><a href="/office365-thailand/office365.html" class="hover-style-link list-item">Microsoft Office365</a></li>
                            <li><a href="/cloudflare-dns-thailand/cloudflare-dns.html" class="hover-style-link list-item">Cloudflare</a></li>
                            <li><a href="/cdn-cloudflare-akamai/web-optimisation-thailand.html" class="hover-style-link list-item">Web Speed Optimization</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                        <ul class="footer-widget__list circle-list">
                            <li><a href="/devops-services-thailand/devops-services.html" class="hover-style-link list-item">DevOps as a Services 24x7 </a></li>
                            <li><a href="/acronis-cloud-backup/acronis.html" class="hover-style-link list-item">Cloud Backup</a></li>
                            <li><a href="/acronis-cloud-backup/acronis-true-image-backup.html" class="hover-style-link list-item">Windows PC Backup</a></li>
                            <li><a href="/database-services-thailand/mysql-workbench.html" class="hover-style-link list-item">MySQL Consulting</a></li>
                            <li><a href="/firewall-fortigate/firewall-fortigate-cisco.html" class="hover-style-link list-item">Network Security</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-30 text-center">
                        <div class="company-groups ">
                            <img src="assets/images/AquaCRM-logo4.png">
                            AquaOrange Group Company
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-left">
                        <span class="copyright-text">&copy; 2020 Thaipcsupport. All Rights Reserved.</span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-center">
                        <div class="credit-footer">
                            <div id="Certificate-banners"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center text-md-right">
                        <ul class="footer-widget__list footer-umi-inline">
                            <li><a href="/about-thaipcsupport.html" class="hover-style-link">เกี่ยวกับเรา </a></li>
                            <li><a href="/vision.html" class="hover-style-link">Vision</a></li>
                            <li><a href="/contact-it-support.html" class="hover-style-link">ติดต่อเรา</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="/">
                                    <img alt="IT Support Thailand" src="/assets/images/logo/logo-itsupportthailand.png" class="img-fluid" title="it support thailand" width="333" height="43">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="/">หน้าแรก</a>
                        </li>
                        <li class="has-children">
                            <a href="#">IT Solution</a>
                            <ul class="sub-menu">
                                <li><a href="/it-support-thailand/it-support.html"><span>IT Support</span></a></li>
                                <li><a href="/it-helpdesk-support/it-helpdesk-thailand.html"><span>IT Helpdesk</span></a></li>
                                <li><a href="/lan-wire-wireless/lan-wire-wireless-thailand.html"><span>วางระบบ LAN</span></a></li>
                                <li><a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html"><span>ขนย้าย/ติดตั้งอุปกรณ์ไอที</span></a></li>
                                <li><a href="/audit-software-thailand/audit-software.html"><span>ตรวจสอบซอฟต์แวร์ </span></a></li>
                                <li><a href="/firewall-fortigate/firewall-fortigate-cisco.html"><span>Firewall </span></a></li>
                                <li><a href="/electronic-ewaste-thailand/ewaste-thailand.html"><span>E-waste </span></a></li>
                                <li><a href="/acronis-cloud-backup/acronis-backup-thailand.html"><span>กู้คืนข้อมูล </span></a></li>
                                <li><a href="/it-infrastructure-thailand/setup-offfice-infrastructure.html"><span>จัดการโครงสร้างบริษัท Setup </span></a></li>
                                <li><a href="/software-hardware-sales.html"><span>จัดซื้ออุปกรณ์ </span></a></li>
                                <li><a href="/rental-computer-thailand/rental-computer.html"><span>เช่าคอมพิวเตอร์ </span></a></li>
                                <li><a href="/nas-storage/qnap-synology.html">NAS / File Sharing</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="/it-support-helpdesk/it-support-helpdesk-thailand.html">IT Outsource</a>
                        </li>
                        <li class="has-children">
                            <a href="#">Cloud Solution</a>
                            <ul class="sub-menu">
                                <li><a href=" /aws-services-thailand/aws-web-services.html"><span>AWS</span></a></li>
                                <li><a href="/microsoft-azure-services/active-directory-thailand.html"><span>Azure</span></a></li>
                                <li><a href="/contact-it-support.html"><span>Gsuite Email</span></a></li>
                                <li><a href="/office365-thailand/office365.html"><span>o365</span></a></li>
                                <li><a href="/cloudflare-dns-thailand/cloudflare-dns.html"><span>Cloudflare </span></a></li>
                                <li><a href="/cdn-cloudflare-akamai/web-optimisation-thailand.html"><span>Web Speed Optimization </span></a></li>
                                <li><a href="/devops-services-thailand/devops-services.html"><span>DevOps as a Services 24x7 </span></a></li>
                                <li><a href="/acronis-cloud-backup/acronis.html"><span>Acronis Cloud Backup</span></a></li>
                                <li><a href="/acronis-cloud-backup/acronis-true-image-backup.html"><span>Windows Pc Backup</span></a></li>
                                <li><a href="/database-services-thailand/mysql-workbench.html"><span>MySQL Consulting </span></a></li>
                                <li><a href="/firewall-fortigate/firewall-fortigate-cisco.html"><span>Network Security </span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="/clients.html">Client</a>
                        </li>
                        <li class="has-children">
                            <a href="javascript:void(0)">เกี่ยวกับเรา</a>
                            <ul class="sub-menu">
                                <li><a href="/about-thaipcsupport.html"><span>Company</span></a></li>
                                <li><a href="/vision.html"><span>Vision</span></a></li>
                                <li><a href="/it-support-faq.html"><span>Why Choose us</span></a></li>
                                <li><a href="/jobthai-it-support/job-it-support.html"><span>Career </span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="/contact-it-support.html">ติดต่อเรา </a>
                        </li>
                        <li class="has-children">
                            <a href="/">Language</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/">
                                        <img alt="IT Support Thailand" class="ls-flag" width="35" height="23" src="/assets/images/flags/th.png" title="Thai">
                                        <span> Thai</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/en/">
                                        <img alt="IT Support Thailand" class="ls-flag" width="35" height="23" src="/assets/images/flags/en.png" title="English">
                                        <span> English</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->
    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">
        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ml-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-right">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->
    <!-- JS
    ============================================ -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery.min.js" defer></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" defer></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" defer></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" defer></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" defer></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js" defer></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js" defer></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" defer></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.5/vivus.min.js" defer></script>-->
    <!--<script src="../assets/js/plugins/animation-text.min.js" defer></script>-->
    <script src="../assets/js/plugins/some-plugins.js"></script>
    <script src="../assets/js/main.js" defer></script>
    <script src="https://www.trustmarkthai.com/callbackData/initialize.js?t=a4a35-20-5-b32000db58e574c59759d48b9e73f333f5878973" id="dbd-init"></script>
    <div class="line-icon-button"><a class="line" title="Line@thaipcsupport" href="https://line.me/R/ti/p/%40thaipcsupport" target="_blank"><i class="fab fa-line link-icon"></i></a></div>

</body>

</html>
