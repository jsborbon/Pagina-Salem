(window.webpackJsonp_ultimate_addons_for_gutenberg=window.webpackJsonp_ultimate_addons_for_gutenberg||[]).push([[92],{209:function(e,t,a){"use strict";var n,l,o=a(21),i=a.n(o),r=a(210),u=a.n(r),c=a(2);if(void 0===s)var s=[];const d=e=>{const[t,a]=Object(c.useState)([]);Object(c.useEffect)(()=>{r()},[]),Object(c.useEffect)(()=>{const{onStatus:a,config:n}=e;void 0!==t.status&&a(t.status),n!==t.config&&r()},[e]);const n=()=>{a({status:"loading"})},l=e=>{s.includes(e)||s.push(e)},o=()=>{a({status:"active"})},i=()=>{a({status:"inactive"})},r=()=>{s.includes(e.config.google.families[0])||(u.a.load({...e.config,loading:n,active:o,inactive:i}),l(e.config.google.families[0]));const t=document.getElementsByClassName("is-tablet-preview"),a=document.getElementsByClassName("is-mobile-preview");if(0!==t.length||0!==a.length){const r=(t[0]||a[0]).getElementsByTagName("iframe")[0];r&&(u.a.load({...e.config,loading:n,active:o,inactive:i,context:null==r?void 0:r.contentWindow}),l(e.config.google.families[0]))}},{children:d}=e;return d||null};d.propTypes={config:null===(n=i.a.object)||void 0===n?void 0:n.isRequired,children:i.a.element,onStatus:null===(l=i.a.func)||void 0===l?void 0:l.isRequired},d.defaultProps={onStatus:()=>{}},t.a=d},210:function(e,t,a){var n;!function(){function l(e,t,a){return e.call.apply(e.bind,arguments)}function o(e,t,a){if(!e)throw Error();if(2<arguments.length){var n=Array.prototype.slice.call(arguments,2);return function(){var a=Array.prototype.slice.call(arguments);return Array.prototype.unshift.apply(a,n),e.apply(t,a)}}return function(){return e.apply(t,arguments)}}function i(e,t,a){return(i=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?l:o).apply(null,arguments)}var r=Date.now||function(){return+new Date};function u(e,t){this.a=e,this.o=t||e,this.c=this.o.document}var c=!!window.FontFace;function s(e,t,a,n){if(t=e.c.createElement(t),a)for(var l in a)a.hasOwnProperty(l)&&("style"==l?t.style.cssText=a[l]:t.setAttribute(l,a[l]));return n&&t.appendChild(e.c.createTextNode(n)),t}function d(e,t,a){(e=e.c.getElementsByTagName(t)[0])||(e=document.documentElement),e.insertBefore(a,e.lastChild)}function b(e){e.parentNode&&e.parentNode.removeChild(e)}function g(e,t,a){t=t||[],a=a||[];for(var n=e.className.split(/\s+/),l=0;l<t.length;l+=1){for(var o=!1,i=0;i<n.length;i+=1)if(t[l]===n[i]){o=!0;break}o||n.push(t[l])}for(t=[],l=0;l<n.length;l+=1){for(o=!1,i=0;i<a.length;i+=1)if(n[l]===a[i]){o=!0;break}o||t.push(n[l])}e.className=t.join(" ").replace(/\s+/g," ").replace(/^\s+|\s+$/,"")}function f(e,t){for(var a=e.className.split(/\s+/),n=0,l=a.length;n<l;n++)if(a[n]==t)return!0;return!1}function h(e,t,a){function n(){r&&l&&o&&(r(i),r=null)}t=s(e,"link",{rel:"stylesheet",href:t,media:"all"});var l=!1,o=!0,i=null,r=a||null;c?(t.onload=function(){l=!0,n()},t.onerror=function(){l=!0,i=Error("Stylesheet failed to load"),n()}):setTimeout((function(){l=!0,n()}),0),d(e,"head",t)}function m(e,t,a,n){var l=e.c.getElementsByTagName("head")[0];if(l){var o=s(e,"script",{src:t}),i=!1;return o.onload=o.onreadystatechange=function(){i||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState||(i=!0,a&&a(null),o.onload=o.onreadystatechange=null,"HEAD"==o.parentNode.tagName&&l.removeChild(o))},l.appendChild(o),setTimeout((function(){i||(i=!0,a&&a(Error("Script load timeout")))}),n||5e3),o}return null}function p(){this.a=0,this.c=null}function v(e){return e.a++,function(){e.a--,y(e)}}function _(e,t){e.c=t,y(e)}function y(e){0==e.a&&e.c&&(e.c(),e.c=null)}function O(e){this.a=e||"-"}function S(e,t){this.c=e,this.f=4,this.a="n";var a=(t||"n4").match(/^([nio])([1-9])$/i);a&&(this.a=a[1],this.f=parseInt(a[2],10))}function T(e){var t=[];e=e.split(/,\s*/);for(var a=0;a<e.length;a++){var n=e[a].replace(/['"]/g,"");-1!=n.indexOf(" ")||/^\d/.test(n)?t.push("'"+n+"'"):t.push(n)}return t.join(",")}function j(e){return e.a+e.f}function w(e){var t="normal";return"o"===e.a?t="oblique":"i"===e.a&&(t="italic"),t}function E(e){var t=4,a="n",n=null;return e&&((n=e.match(/(normal|oblique|italic)/i))&&n[1]&&(a=n[1].substr(0,1).toLowerCase()),(n=e.match(/([1-9]00|normal|bold)/i))&&n[1]&&(/bold/i.test(n[1])?t=7:/[1-9]00/.test(n[1])&&(t=parseInt(n[1].substr(0,1),10)))),a+t}function C(e,t){this.c=e,this.f=e.o.document.documentElement,this.h=t,this.a=new O("-"),this.j=!1!==t.events,this.g=!1!==t.classes}function H(e){if(e.g){var t=f(e.f,e.a.c("wf","active")),a=[],n=[e.a.c("wf","loading")];t||a.push(e.a.c("wf","inactive")),g(e.f,a,n)}F(e,"inactive")}function F(e,t,a){e.j&&e.h[t]&&(a?e.h[t](a.c,j(a)):e.h[t]())}function L(){this.c={}}function k(e,t){this.c=e,this.f=t,this.a=s(this.c,"span",{"aria-hidden":"true"},this.f)}function A(e){d(e.c,"body",e.a)}function P(e){return"display:block;position:absolute;top:-9999px;left:-9999px;font-size:300px;width:auto;height:auto;line-height:normal;margin:0;padding:0;font-variant:normal;white-space:nowrap;font-family:"+T(e.c)+";font-style:"+w(e)+";font-weight:"+e.f+"00;"}function M(e,t,a,n,l,o){this.g=e,this.j=t,this.a=n,this.c=a,this.f=l||3e3,this.h=o||void 0}function x(e,t,a,n,l,o,i){this.v=e,this.B=t,this.c=a,this.a=n,this.s=i||"BESbswy",this.f={},this.w=l||3e3,this.u=o||null,this.m=this.j=this.h=this.g=null,this.g=new k(this.c,this.s),this.h=new k(this.c,this.s),this.j=new k(this.c,this.s),this.m=new k(this.c,this.s),e=P(e=new S(this.a.c+",serif",j(this.a))),this.g.a.style.cssText=e,e=P(e=new S(this.a.c+",sans-serif",j(this.a))),this.h.a.style.cssText=e,e=P(e=new S("serif",j(this.a))),this.j.a.style.cssText=e,e=P(e=new S("sans-serif",j(this.a))),this.m.a.style.cssText=e,A(this.g),A(this.h),A(this.j),A(this.m)}O.prototype.c=function(e){for(var t=[],a=0;a<arguments.length;a++)t.push(arguments[a].replace(/[\W_]+/g,"").toLowerCase());return t.join(this.a)},M.prototype.start=function(){var e=this.c.o.document,t=this,a=r(),n=new Promise((function(n,l){!function o(){r()-a>=t.f?l():e.fonts.load(function(e){return w(e)+" "+e.f+"00 300px "+T(e.c)}(t.a),t.h).then((function(e){1<=e.length?n():setTimeout(o,25)}),(function(){l()}))}()})),l=null,o=new Promise((function(e,a){l=setTimeout(a,t.f)}));Promise.race([o,n]).then((function(){l&&(clearTimeout(l),l=null),t.g(t.a)}),(function(){t.j(t.a)}))};var z={D:"serif",C:"sans-serif"},I=null;function N(){if(null===I){var e=/AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);I=!!e&&(536>parseInt(e[1],10)||536===parseInt(e[1],10)&&11>=parseInt(e[2],10))}return I}function R(e,t,a){for(var n in z)if(z.hasOwnProperty(n)&&t===e.f[z[n]]&&a===e.f[z[n]])return!0;return!1}function D(e,t){setTimeout(i((function(){b(this.g.a),b(this.h.a),b(this.j.a),b(this.m.a),t(this.a)}),e),0)}function B(e,t,a){this.c=e,this.a=t,this.f=0,this.m=this.j=!1,this.s=a}x.prototype.start=function(){this.f.serif=this.j.a.offsetWidth,this.f["sans-serif"]=this.m.a.offsetWidth,this.A=r(),function e(t){var a,n=t.g.a.offsetWidth,l=t.h.a.offsetWidth;(a=n===t.f.serif&&l===t.f["sans-serif"])||(a=N()&&R(t,n,l)),a?r()-t.A>=t.w?N()&&R(t,n,l)&&(null===t.u||t.u.hasOwnProperty(t.a.c))?D(t,t.v):D(t,t.B):function(t){setTimeout(i((function(){e(this)}),t),50)}(t):D(t,t.v)}(this)};var W=null;function V(e){0==--e.f&&e.j&&(e.m?((e=e.a).g&&g(e.f,[e.a.c("wf","active")],[e.a.c("wf","loading"),e.a.c("wf","inactive")]),F(e,"active")):H(e.a))}function G(e){this.j=e,this.a=new L,this.h=0,this.f=this.g=!0}function U(e,t,a,n,l){var o=0==--e.h;(e.f||e.g)&&setTimeout((function(){var e=l||null,r=n||{};if(0===a.length&&o)H(t.a);else{t.f+=a.length,o&&(t.j=o);var u,c=[];for(u=0;u<a.length;u++){var s=a[u],d=r[s.c],b=t.a,f=s;if(b.g&&g(b.f,[b.a.c("wf",f.c,j(f).toString(),"loading")]),F(b,"fontloading",f),b=null,null===W)if(window.FontFace){f=/Gecko.*Firefox\/(\d+)/.exec(window.navigator.userAgent);var h=/OS X.*Version\/10\..*Safari/.exec(window.navigator.userAgent)&&/Apple/.exec(window.navigator.vendor);W=f?42<parseInt(f[1],10):!h}else W=!1;b=W?new M(i(t.g,t),i(t.h,t),t.c,s,t.s,d):new x(i(t.g,t),i(t.h,t),t.c,s,t.s,e,d),c.push(b)}for(u=0;u<c.length;u++)c[u].start()}}),0)}function $(e,t){this.c=e,this.a=t}function q(e,t){this.c=e,this.a=t}function J(e,t){this.c=e||K,this.a=[],this.f=[],this.g=t||""}B.prototype.g=function(e){var t=this.a;t.g&&g(t.f,[t.a.c("wf",e.c,j(e).toString(),"active")],[t.a.c("wf",e.c,j(e).toString(),"loading"),t.a.c("wf",e.c,j(e).toString(),"inactive")]),F(t,"fontactive",e),this.m=!0,V(this)},B.prototype.h=function(e){var t=this.a;if(t.g){var a=f(t.f,t.a.c("wf",e.c,j(e).toString(),"active")),n=[],l=[t.a.c("wf",e.c,j(e).toString(),"loading")];a||n.push(t.a.c("wf",e.c,j(e).toString(),"inactive")),g(t.f,n,l)}F(t,"fontinactive",e),V(this)},G.prototype.load=function(e){this.c=new u(this.j,e.context||this.j),this.g=!1!==e.events,this.f=!1!==e.classes,function(e,t,a){var n=[],l=a.timeout;!function(e){e.g&&g(e.f,[e.a.c("wf","loading")]),F(e,"loading")}(t),n=function(e,t,a){var n,l=[];for(n in t)if(t.hasOwnProperty(n)){var o=e.c[n];o&&l.push(o(t[n],a))}return l}(e.a,a,e.c);var o=new B(e.c,t,l);for(e.h=n.length,t=0,a=n.length;t<a;t++)n[t].load((function(t,a,n){U(e,o,t,a,n)}))}(this,new C(this.c,e),e)},$.prototype.load=function(e){var t=this,a=t.a.projectId,n=t.a.version;if(a){var l=t.c.o;m(this.c,(t.a.api||"https://fast.fonts.net/jsapi")+"/"+a+".js"+(n?"?v="+n:""),(function(n){n?e([]):(l["__MonotypeConfiguration__"+a]=function(){return t.a},function t(){if(l["__mti_fntLst"+a]){var n,o=l["__mti_fntLst"+a](),i=[];if(o)for(var r=0;r<o.length;r++){var u=o[r].fontfamily;null!=o[r].fontStyle&&null!=o[r].fontWeight?(n=o[r].fontStyle+o[r].fontWeight,i.push(new S(u,n))):i.push(new S(u))}e(i)}else setTimeout((function(){t()}),50)}())})).id="__MonotypeAPIScript__"+a}else e([])},q.prototype.load=function(e){var t,a,n=this.a.urls||[],l=this.a.families||[],o=this.a.testStrings||{},i=new p;for(t=0,a=n.length;t<a;t++)h(this.c,n[t],v(i));var r=[];for(t=0,a=l.length;t<a;t++)if((n=l[t].split(":"))[1])for(var u=n[1].split(","),c=0;c<u.length;c+=1)r.push(new S(n[0],u[c]));else r.push(new S(n[0]));_(i,(function(){e(r,o)}))};var K="https://fonts.googleapis.com/css";function X(e){this.f=e,this.a=[],this.c={}}var Q={latin:"BESbswy","latin-ext":"çöüğş",cyrillic:"йяЖ",greek:"αβΣ",khmer:"កខគ",Hanuman:"កខគ"},Y={thin:"1",extralight:"2","extra-light":"2",ultralight:"2","ultra-light":"2",light:"3",regular:"4",book:"4",medium:"5","semi-bold":"6",semibold:"6","demi-bold":"6",demibold:"6",bold:"7","extra-bold":"8",extrabold:"8","ultra-bold":"8",ultrabold:"8",black:"9",heavy:"9",l:"3",r:"4",b:"7"},Z={i:"i",italic:"i",n:"n",normal:"n"},ee=/^(thin|(?:(?:extra|ultra)-?)?light|regular|book|medium|(?:(?:semi|demi|extra|ultra)-?)?bold|black|heavy|l|r|b|[1-9]00)?(n|i|normal|italic)?$/;function te(e,t){this.c=e,this.a=t}var ae={Arimo:!0,Cousine:!0,Tinos:!0};function ne(e,t){this.c=e,this.a=t}function le(e,t){this.c=e,this.f=t,this.a=[]}te.prototype.load=function(e){var t=new p,a=this.c,n=new J(this.a.api,this.a.text),l=this.a.families;!function(e,t){for(var a=t.length,n=0;n<a;n++){var l=t[n].split(":");3==l.length&&e.f.push(l.pop());var o="";2==l.length&&""!=l[1]&&(o=":"),e.a.push(l.join(o))}}(n,l);var o=new X(l);!function(e){for(var t=e.f.length,a=0;a<t;a++){var n=e.f[a].split(":"),l=n[0].replace(/\+/g," "),o=["n4"];if(2<=n.length){var i;if(i=[],r=n[1])for(var r,u=(r=r.split(",")).length,c=0;c<u;c++){var s;if((s=r[c]).match(/^[\w-]+$/))if(null==(d=ee.exec(s.toLowerCase())))s="";else{if(s=null==(s=d[2])||""==s?"n":Z[s],null==(d=d[1])||""==d)d="4";else var d=Y[d]||(isNaN(d)?"4":d.substr(0,1));s=[s,d].join("")}else s="";s&&i.push(s)}0<i.length&&(o=i),3==n.length&&(i=[],0<(n=(n=n[2])?n.split(","):i).length&&(n=Q[n[0]])&&(e.c[l]=n))}for(e.c[l]||(n=Q[l])&&(e.c[l]=n),n=0;n<o.length;n+=1)e.a.push(new S(l,o[n]))}}(o),h(a,function(e){if(0==e.a.length)throw Error("No fonts to load!");if(-1!=e.c.indexOf("kit="))return e.c;for(var t=e.a.length,a=[],n=0;n<t;n++)a.push(e.a[n].replace(/ /g,"+"));return t=e.c+"?family="+a.join("%7C"),0<e.f.length&&(t+="&subset="+e.f.join(",")),0<e.g.length&&(t+="&text="+encodeURIComponent(e.g)),t}(n),v(t)),_(t,(function(){e(o.a,o.c,ae)}))},ne.prototype.load=function(e){var t=this.a.id,a=this.c.o;t?m(this.c,(this.a.api||"https://use.typekit.net")+"/"+t+".js",(function(t){if(t)e([]);else if(a.Typekit&&a.Typekit.config&&a.Typekit.config.fn){t=a.Typekit.config.fn;for(var n=[],l=0;l<t.length;l+=2)for(var o=t[l],i=t[l+1],r=0;r<i.length;r++)n.push(new S(o,i[r]));try{a.Typekit.load({events:!1,classes:!1,async:!0})}catch(e){}e(n)}}),2e3):e([])},le.prototype.load=function(e){var t=this.f.id,a=this.c.o,n=this;t?(a.__webfontfontdeckmodule__||(a.__webfontfontdeckmodule__={}),a.__webfontfontdeckmodule__[t]=function(t,a){for(var l=0,o=a.fonts.length;l<o;++l){var i=a.fonts[l];n.a.push(new S(i.name,E("font-weight:"+i.weight+";font-style:"+i.style)))}e(n.a)},m(this.c,(this.f.api||"https://f.fontdeck.com/s/css/js/")+function(e){return e.o.location.hostname||e.a.location.hostname}(this.c)+"/"+t+".js",(function(t){t&&e([])}))):e([])};var oe=new G(window);oe.a.c.custom=function(e,t){return new q(t,e)},oe.a.c.fontdeck=function(e,t){return new le(t,e)},oe.a.c.monotype=function(e,t){return new $(t,e)},oe.a.c.typekit=function(e,t){return new ne(t,e)},oe.a.c.google=function(e,t){return new te(t,e)};var ie={load:i(oe.load,oe)};void 0===(n=function(){return ie}.call(t,a,t,e))||(e.exports=n)}()},211:function(e,t,a){"use strict";var n=a(1),l=a(7),o=a(5),i=a(0),r=a.n(i),u=a(8);t.a=e=>{const{onSelectImage:t,backgroundImage:a,onRemoveImage:i,showVideoInput:c,label:s,disableRemove:d=!1,allow:b=["image"]}=e;let g,f=Object(n.__)("Image","ultimate-addons-for-gutenberg"),h=Object(n.__)("Select Image","ultimate-addons-for-gutenberg"),m=Object(n.__)("Change Image","ultimate-addons-for-gutenberg"),p=["image"];c&&(f=Object(n.__)("Video","ultimate-addons-for-gutenberg"),h=Object(n.__)("Select Video","ultimate-addons-for-gutenberg"),m=Object(n.__)("Change Video","ultimate-addons-for-gutenberg"),p=["video"],g=u.a.video_placeholder),f=s||f,f=!1===s?s:f,"Lottie Animation"===s&&(h=Object(n.__)("Select Lottie Animation","ultimate-addons-for-gutenberg"),m=Object(n.__)("Change Lottie Animation","ultimate-addons-for-gutenberg"),p=b,g=u.a.lottie);const v=e=>r.a.createElement("div",{className:"spectra-media-control__button spectra-media-control__button--"+e},u.a[e]);return r.a.createElement(l.BaseControl,{className:"spectra-media-control",id:"uagb-option-selector-"+s,label:f},r.a.createElement("div",{className:"spectra-media-control__wrapper",style:{backgroundImage:!g&&(null==a?void 0:a.url)&&`url("${(e=>{let t=e;switch(/(?:\.([^.]+))?$/.exec(String(t))[1]){case"json":t="";break;case"avi":case"mpg":case"mp4":case"m4v":case"mov":case"ogv":case"vtt":case"wmv":case"3gp":case"3g2":t=""}return t})(null==a?void 0:a.url)}")`}},g&&(null==a?void 0:a.url)&&r.a.createElement("div",{className:"spectra-media-control__icon"},g),r.a.createElement(o.MediaUpload,{title:h,onSelect:t,allowedTypes:p,value:a,render:e=>{let{open:t}=e;return(e=>{const t=null!=a&&a.url?"replace":"add";return r.a.createElement("button",{className:"spectra-media-control__clickable spectra-media-control__clickable--"+t,onClick:e},"add"===t?v(t):r.a.createElement("div",{className:"uag-control-label"},m))})(t)}}),!d&&(null==a?void 0:a.url)&&r.a.createElement("button",{className:"spectra-media-control__clickable spectra-media-control__clickable--close",onClick:i},v("close"))),e.help&&r.a.createElement("p",{className:"uag-control-help-notice"},e.help))}},222:function(e,t,a){"use strict";function n(e){const t=[];for(const a in e)if(e.hasOwnProperty(a)){const e={value:a,label:a};t.push(e)}return t}a.d(t,"a",(function(){return n}))},498:function(e,t,a){"use strict";a.r(t),a.d(t,"removeFromArray",(function(){return T}));var n=a(38),l=a(209),o=a(1),i=a(0),r=a.n(i),u=a(10),c=a(5),s=a(17),d=a(77),b=a(31),g=a(211),f=a(37),h=a(22),m=a(28),p=a(222),v=a(13),_=a(7),y=a(18);function O(){return(O=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var n in a)Object.prototype.hasOwnProperty.call(a,n)&&(e[n]=a[n])}return e}).apply(this,arguments)}let S=[{value:"thumbnail",label:Object(o.__)("Thumbnail","ultimate-addons-for-gutenberg")},{value:"medium",label:Object(o.__)("Medium","ultimate-addons-for-gutenberg")},{value:"full",label:Object(o.__)("Large","ultimate-addons-for-gutenberg")}];const T=(e,t)=>e.filter(e=>Array.isArray(t)?!t.includes(e):e!==t),j=e=>{e=e.parentProps;const{attributes:t,setAttributes:a}=e,{enableSchema:T,itemType:j,itemSubtype:w,sku:E,identifier:C,identifierType:H,offerType:F,offerCurrency:L,offerStatus:k,offerPrice:A,offerExpiry:P,datepublish:M,ctaLink:x,ctaTarget:z,brand:I,headingTag:N,mainimage:R,imgSize:D,showFeature:B,showAuthor:W,starColor:V,descColor:G,titleColor:U,contentColor:$,headFontFamily:q,headFontWeight:J,headFontSizeType:K,headFontSize:X,headFontSizeMobile:Q,headFontSizeTablet:Y,headLineHeightType:Z,headLineHeight:ee,headLineHeightMobile:te,headLineHeightTablet:ae,headLoadGoogleFonts:ne,subHeadFontFamily:le,subHeadFontWeight:oe,subHeadFontSize:ie,subHeadFontSizeType:re,subHeadFontSizeMobile:ue,subHeadFontSizeTablet:ce,subHeadLineHeight:se,subHeadLineHeightType:de,subHeadLineHeightMobile:be,subHeadLineHeightTablet:ge,subHeadLoadGoogleFonts:fe,contentLoadGoogleFonts:he,contentFontFamily:me,contentFontWeight:pe,contentFontSizeType:ve,contentLineHeightType:_e,contentFontSize:ye,contentFontSizeTablet:Oe,contentFontSizeMobile:Se,contentLineHeight:Te,contentLineHeightTablet:je,contentLineHeightMobile:we,topPadding:Ee,bottomPadding:Ce,rightPadding:He,leftPadding:Fe,paddingTopMobile:Le,paddingBottomMobile:ke,paddingRightMobile:Ae,paddingLeftMobile:Pe,paddingTopTablet:Me,paddingBottomTablet:xe,paddingRightTablet:ze,paddingLeftTablet:Ie,spacingLink:Ne,paddingUnit:Re,mobilePaddingUnit:De,tabletPaddingUnit:Be,authorColor:We,summaryColor:Ve,starActiveColor:Ge,starOutlineColor:Ue,enableDescription:$e,enableImage:qe,overallAlignment:Je,isbn:Ke,bookAuthorName:Xe,reviewPublisher:Qe,provider:Ye,appCategory:Ze,operatingSystem:et,datecreated:tt,directorname:at,headTransform:nt,headDecoration:lt,subHeadTransform:ot,subHeadDecoration:it,contentTransform:rt,contentDecoration:ut,headFontStyle:ct,subHeadFontStyle:st,contentFontStyle:dt,headLetterSpacing:bt,headLetterSpacingTablet:gt,headLetterSpacingMobile:ft,headLetterSpacingType:ht,subHeadLetterSpacing:mt,subHeadLetterSpacingTablet:pt,subHeadLetterSpacingMobile:vt,subHeadLetterSpacingType:_t,contentLetterSpacing:yt,contentLetterSpacingTablet:Ot,contentLetterSpacingMobile:St,contentLetterSpacingType:Tt}=t,jt=e=>{a({itemType:e}),"Movie"===j&&a({enableImage:!0}),"Course"===j&&a({enableDescription:!0}),Ft.hasOwnProperty(j)&&Ft[j].includes(w)||a({itemSubtype:"None"})};let wt,Et,Ct;if(!0===ne){const e={google:{families:[q+(J?":"+J:"")]}};Et=r.a.createElement(l.a,{config:e})}if(!0===fe){const e={google:{families:[le+(oe?":"+oe:"")]}};Ct=r.a.createElement(l.a,{config:e})}if(!0===he){const e={google:{families:[me+(pe?":"+pe:"")]}};wt=r.a.createElement(l.a,{config:e})}let Ht;const Ft={Book:[{value:"Audiobook",label:Object(o.__)("Audio book","ultimate-addons-for-gutenberg")}],Product:[{value:"IndividualProduct",label:Object(o.__)("Individual Product","ultimate-addons-for-gutenberg")},{value:"ProductCollection",label:Object(o.__)("Product Collection","ultimate-addons-for-gutenberg")},{value:"ProductGroup",label:Object(o.__)("Product Group","ultimate-addons-for-gutenberg")},{value:"ProductModel",label:Object(o.__)("Product Model","ultimate-addons-for-gutenberg")},{value:"SomeProducts",label:Object(o.__)("Some Products","ultimate-addons-for-gutenberg")},{value:"Vehicle",label:Object(o.__)("Vehicle","ultimate-addons-for-gutenberg")}],SoftwareApplication:[{value:"MobileApplication",label:Object(o.__)("Mobile Application","ultimate-addons-for-gutenberg")},{value:"VideoGame",label:Object(o.__)("Video Game","ultimate-addons-for-gutenberg")},{value:"WebApplication",label:Object(o.__)("Web Application","ultimate-addons-for-gutenberg")}]};switch(j){default:break;case"Book":Ht=r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("ISBN","ultimate-addons-for-gutenberg"),value:Ke,onChange:e=>a({isbn:e}),help:Object(o.__)("Note: This is a mandatory field for the Review schema","ultimate-addons-for-gutenberg")}),r.a.createElement(_.TextControl,{label:Object(o.__)("Book author name","ultimate-addons-for-gutenberg"),value:Xe,onChange:e=>a({bookAuthorName:e}),help:Object(o.__)("Note: This is a mandatory field for the Review schema","ultimate-addons-for-gutenberg")}));break;case"Course":Ht=r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Provider","ultimate-addons-for-gutenberg"),value:Ye,onChange:e=>a({provider:e})}));break;case"SoftwareApplication":Ht=r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Application Category","ultimate-addons-for-gutenberg"),value:Ze,onChange:e=>a({appCategory:e})}),r.a.createElement(_.TextControl,{label:Object(o.__)("Operating System","ultimate-addons-for-gutenberg"),value:et,onChange:e=>a({operatingSystem:e})}));break;case"Movie":Ht=r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Director Name","ultimate-addons-for-gutenberg"),value:at,onChange:e=>a({directorname:e})}),r.a.createElement("h2",null,Object(o.__)("Date of create")),r.a.createElement(_.DateTimePicker,{currentDate:tt,onChange:e=>a({datecreated:e}),is12Hour:!0}))}return r.a.createElement(i.Suspense,{fallback:Object(u.a)()},r.a.createElement(c.InspectorControls,null,r.a.createElement(d.a,null,r.a.createElement(b.b,b.a.general,(R&&R.sizes&&(S=Object(p.a)(R.sizes)),r.a.createElement(y.a,{title:Object(o.__)("General","ultimate-addons-for-gutenberg"),initialOpen:!0},r.a.createElement(h.a,{setAttributes:a,label:Object(o.__)("Review Title Tag","ultimate-addons-for-gutenberg"),data:{value:N,label:"headingTag"},options:[{value:"h1",label:Object(o.__)("H1","ultimate-addons-for-gutenberg")},{value:"h2",label:Object(o.__)("H2","ultimate-addons-for-gutenberg")},{value:"h3",label:Object(o.__)("H3","ultimate-addons-for-gutenberg")},{value:"h4",label:Object(o.__)("H4","ultimate-addons-for-gutenberg")},{value:"h5",label:Object(o.__)("H5","ultimate-addons-for-gutenberg")},{value:"h6",label:Object(o.__)("H6","ultimate-addons-for-gutenberg")}]}),r.a.createElement(h.a,{setAttributes:a,label:Object(o.__)("Alignment","ultimate-addons-for-gutenberg"),data:{value:Je,label:"overallAlignment"},className:"uagb-multi-button-alignment-control",options:[{value:"left",icon:r.a.createElement(_.Icon,{icon:Object(v.a)("fa fa-align-left")}),tooltip:Object(o.__)("Left","ultimate-addons-for-gutenberg")},{value:"center",icon:r.a.createElement(_.Icon,{icon:Object(v.a)("fa fa-align-center")}),tooltip:Object(o.__)("Center","ultimate-addons-for-gutenberg")},{value:"right",icon:r.a.createElement(_.Icon,{icon:Object(v.a)("fa fa-align-right")}),tooltip:Object(o.__)("Right","ultimate-addons-for-gutenberg")}],showIcons:!0}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Enable Schema Support","ultimate-addons-for-gutenberg"),checked:T,onChange:()=>a({enableSchema:!T})}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Show Review Description","ultimate-addons-for-gutenberg"),checked:$e,onChange:()=>a({enableDescription:!$e}),help:Object(o.__)("Note: This is a mandatory field for the Review schema.","ultimate-addons-for-gutenberg")}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Show Review Author","ultimate-addons-for-gutenberg"),checked:W,onChange:()=>a({showAuthor:!W}),help:Object(o.__)("Note: This is a mandatory field for the Review schema.","ultimate-addons-for-gutenberg")}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Show Ratings","ultimate-addons-for-gutenberg"),checked:B,onChange:()=>a({showFeature:!B}),help:Object(o.__)("Note: Add feature/section ratings separately.","ultimate-addons-for-gutenberg")}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Show Review Image","ultimate-addons-for-gutenberg"),checked:qe,onChange:()=>a({enableImage:!qe}),help:Object(o.__)("Note: This is a mandatory field for the Review schema.","ultimate-addons-for-gutenberg")}),r.a.createElement("h2",null,Object(o.__)("Link")),r.a.createElement(_.TextControl,{value:x,onChange:e=>a({ctaLink:e})}),r.a.createElement(_.ToggleControl,{label:Object(o.__)("Open in new window","ultimate-addons-for-gutenberg"),checked:z,onChange:()=>{a({ctaTarget:!z})}}))),!0===qe&&r.a.createElement(y.a,{title:Object(o.__)("Image","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(r.a.Fragment,null,r.a.createElement(g.a,{onSelectImage:e=>{e&&e.url&&e.type&&"image"===e.type?a({mainimage:e}):a({mainimage:null})},backgroundImage:R,onRemoveImage:()=>{a({mainimage:""})}}),R&&"null"!==R&&"null"!==R.url&&""!==R.url&&r.a.createElement(m.a,{label:Object(o.__)("Size","ultimate-addons-for-gutenberg"),data:{value:D,label:"imgSize"},setAttributes:a,options:S}))),(()=>{if(!0===T)return r.a.createElement(y.a,{title:Object(o.__)("Schema","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(m.a,{label:Object(o.__)("Item Type","ultimate-addons-for-gutenberg"),data:{value:j},onChange:jt,options:[{value:"Book",label:Object(o.__)("Book","ultimate-addons-for-gutenberg")},{value:"Course",label:Object(o.__)("Course","ultimate-addons-for-gutenberg")},{value:"Movie",label:Object(o.__)("Movie","ultimate-addons-for-gutenberg")},{value:"Product",label:Object(o.__)("Product","ultimate-addons-for-gutenberg")},{value:"SoftwareApplication",label:Object(o.__)("Software Application","ultimate-addons-for-gutenberg")}]}),Ft.hasOwnProperty(j)&&r.a.createElement(m.a,{label:Object(o.__)("Item Subtype","ultimate-addons-for-gutenberg"),data:{value:w,label:"itemSubtype"},setAttributes:a,options:[{value:"none",label:Object(o.__)("None","ultimate-addons-for-gutenberg")},...Ft[j]]}),Ht,r.a.createElement(_.TextControl,{label:Object(o.__)("Review Publisher","ultimate-addons-for-gutenberg"),value:Qe,onChange:e=>a({reviewPublisher:e}),help:Object(o.__)("Note: This is a mandatory field for the Review schema","ultimate-addons-for-gutenberg")}),r.a.createElement("h2",null,Object(o.__)("Date Of Publish","ultimate-addons-for-gutenberg")),r.a.createElement(_.DateTimePicker,{className:"uagb-date-picker",currentDate:M,onChange:e=>a({datepublish:e}),is12Hour:!0}),["Product","SoftwareApplication"].includes(j)&&r.a.createElement(r.a.Fragment,null,["Product"].includes(j)&&r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Brand","ultimate-addons-for-gutenberg"),value:I,onChange:e=>a({brand:e})}),r.a.createElement(_.TextControl,{label:Object(o.__)("SKU","ultimate-addons-for-gutenberg"),value:E,onChange:e=>a({sku:e})}),r.a.createElement(_.TextControl,{label:Object(o.__)("Identifier","ultimate-addons-for-gutenberg"),value:C,onChange:e=>a({identifier:e})}),r.a.createElement(m.a,{label:Object(o.__)("Identifier Type","ultimate-addons-for-gutenberg"),data:{value:H,label:"identifierType"},setAttributes:a,options:["nsn","mpn","gtin8","gtin12","gtin13","gtin14","gtin"].map(e=>({label:e.toUpperCase(),value:e}))})),["Product","SoftwareApplication"].includes(j)&&r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Offer Currency","ultimate-addons-for-gutenberg"),value:L,onChange:e=>a({offerCurrency:e})})),"Offer"===F&&r.a.createElement(r.a.Fragment,null,r.a.createElement(_.TextControl,{label:Object(o.__)("Offer Price","ultimate-addons-for-gutenberg"),value:A,onChange:e=>a({offerPrice:e}),help:Object(o.__)("Note: This is a mandatory field for the Review schema","ultimate-addons-for-gutenberg")}),r.a.createElement(m.a,{label:Object(o.__)("Offer Status","ultimate-addons-for-gutenberg"),data:{value:k,label:"offerStatus"},setAttributes:e.setAttributes,options:[{value:"https://schema.org/Discontinued",label:Object(o.__)("Discontinued","ultimate-addons-for-gutenberg")},{value:"https://schema.org/InStock",label:Object(o.__)("In Stock","ultimate-addons-for-gutenberg")},{value:"https://schema.org/InStoreOnly",label:Object(o.__)("In Store Only","ultimate-addons-for-gutenberg")},{value:"https://schema.org/LimitedAvailability",label:Object(o.__)("Limited Availability","ultimate-addons-for-gutenberg")},{value:"https://schema.org/OnlineOnly",label:Object(o.__)("Online Only","ultimate-addons-for-gutenberg")},{value:"https://schema.org/OutOfStock",label:Object(o.__)("Out Of Stock","ultimate-addons-for-gutenberg")},{value:"https://schema.org/PreOrder",label:Object(o.__)("Pre Order","ultimate-addons-for-gutenberg")},{value:"https://schema.org/PreSale",label:Object(o.__)("Pre Sale","ultimate-addons-for-gutenberg")},{value:"https://schema.org/SoldOut",label:Object(o.__)("Sold Out","ultimate-addons-for-gutenberg")}]}),r.a.createElement("h2",null,Object(o.__)("Price Valid Until","ultimate-addons-for-gutenberg")),r.a.createElement(_.DateTimePicker,{className:"uagb-date-picker",currentDate:P,onChange:e=>a({offerExpiry:e}),is12Hour:!0}))))})()),r.a.createElement(b.b,b.a.style,r.a.createElement(y.a,{title:Object(o.__)("Title","ultimate-addons-for-gutenberg"),initialOpen:!0},r.a.createElement(s.a,{label:Object(o.__)("Color","ultimate-addons-for-gutenberg"),colorValue:U,data:{value:U,label:"titleColor"},setAttributes:a}),r.a.createElement(n.a,{label:Object(o.__)("Typography","ultimate-addons-for-gutenberg"),attributes:e.attributes,setAttributes:a,loadGoogleFonts:{value:ne,label:"headLoadGoogleFonts"},fontFamily:{value:q,label:"headFontFamily"},fontWeight:{value:J,label:"headFontWeight"},fontStyle:{value:ct,label:"headFontStyle"},transform:{value:nt,label:"headTransform"},decoration:{value:lt,label:"headDecoration"},fontSizeType:{value:K,label:"headFontSizeType"},fontSize:{value:X,label:"headFontSize"},fontSizeMobile:{value:Q,label:"headFontSizeMobile"},fontSizeTablet:{value:Y,label:"headFontSizeTablet"},lineHeightType:{value:Z,label:"headLineHeightType"},lineHeight:{value:ee,label:"headLineHeight"},lineHeightMobile:{value:te,label:"headLineHeightMobile"},lineHeightTablet:{value:ae,label:"headLineHeightTablet"},letterSpacing:{value:bt,label:"headLetterSpacing"},letterSpacingTablet:{value:gt,label:"headLetterSpacingTablet"},letterSpacingMobile:{value:ft,label:"headLetterSpacingMobile"},letterSpacingType:{value:ht,label:"headLetterSpacingType"}})),$e&&r.a.createElement(y.a,{title:Object(o.__)("Description","ultimate-addons-for-gutenberg"),initialOpen:!1},!0===$e&&r.a.createElement(r.a.Fragment,null,r.a.createElement(s.a,{label:Object(o.__)("Color","ultimate-addons-for-gutenberg"),colorValue:G,data:{value:G,label:"descColor"},setAttributes:a}),r.a.createElement(n.a,{label:Object(o.__)("Typography","ultimate-addons-for-gutenberg"),attributes:e.attributes,setAttributes:a,loadGoogleFonts:{value:fe,label:"subHeadLoadGoogleFonts"},fontFamily:{value:le,label:"subHeadFontFamily"},fontWeight:{value:oe,label:"subHeadFontWeight"},fontStyle:{value:st,label:"subHeadFontStyle"},transform:{value:ot,label:"subHeadTransform"},decoration:{value:it,label:"subHeadDecoration"},fontSizeType:{value:re,label:"subHeadFontSizeType"},fontSize:{value:ie,label:"subHeadFontSize"},fontSizeMobile:{value:ue,label:"subHeadFontSizeMobile"},fontSizeTablet:{value:ce,label:"subHeadFontSizeTablet"},lineHeightType:{value:de,label:"subHeadLineHeightType"},lineHeight:{value:se,label:"subHeadLineHeight"},lineHeightMobile:{value:be,label:"subHeadLineHeightMobile"},lineHeightTablet:{value:ge,label:"subHeadLineHeightTablet"},letterSpacing:{value:mt,label:"subHeadLetterSpacing"},letterSpacingTablet:{value:pt,label:"subHeadLetterSpacingTablet"},letterSpacingMobile:{value:vt,label:"subHeadLetterSpacingMobile"},letterSpacingType:{value:_t,label:"subHeadLetterSpacingType"}}))),!0===W&&r.a.createElement(y.a,{title:Object(o.__)("Author","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(r.a.Fragment,null,r.a.createElement(s.a,{label:Object(o.__)("Color","ultimate-addons-for-gutenberg"),colorValue:We,data:{value:We,label:"authorColor"},setAttributes:a}))),!0===B&&r.a.createElement(y.a,{title:Object(o.__)("Content","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(r.a.Fragment,null,r.a.createElement(s.a,{label:Object(o.__)("Color","ultimate-addons-for-gutenberg"),colorValue:$,data:{value:$,label:"contentColor"},setAttributes:a}))),r.a.createElement(y.a,{title:Object(o.__)("Summary","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(s.a,{label:Object(o.__)("Color","ultimate-addons-for-gutenberg"),colorValue:Ve,data:{value:Ve,label:"summaryColor"},setAttributes:a}),r.a.createElement(n.a,{label:Object(o.__)("Typography","ultimate-addons-for-gutenberg"),attributes:e.attributes,setAttributes:a,loadGoogleFonts:{value:he,label:"contentLoadGoogleFonts"},fontFamily:{value:me,label:"contentFontFamily"},fontWeight:{value:pe,label:"contentFontWeight"},fontStyle:{value:dt,label:"contentFontStyle"},transform:{value:rt,label:"contentTransform"},decoration:{value:ut,label:"contentDecoration"},fontSizeType:{value:ve,label:"contentFontSizeType"},fontSize:{value:ye,label:"contentFontSize"},fontSizeMobile:{value:Se,label:"contentFontSizeMobile"},fontSizeTablet:{value:Oe,label:"contentFontSizeTablet"},lineHeightType:{value:_e,label:"contentLineHeightType"},lineHeight:{value:Te,label:"contentLineHeight"},lineHeightMobile:{value:we,label:"contentLineHeightMobile"},lineHeightTablet:{value:je,label:"contentLineHeightTablet"},letterSpacing:{value:yt,label:"contentLetterSpacing"},letterSpacingTablet:{value:Ot,label:"contentLetterSpacingTablet"},letterSpacingMobile:{value:St,label:"contentLetterSpacingMobile"},letterSpacingType:{value:Tt,label:"contentLetterSpacingType"}})),r.a.createElement(y.a,{title:Object(o.__)("Star","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(s.a,{label:Object(o.__)("Active Color","ultimate-addons-for-gutenberg"),colorValue:V,data:{value:V,label:"starColor"},setAttributes:a}),r.a.createElement(s.a,{label:Object(o.__)("Inactive Color","ultimate-addons-for-gutenberg"),colorValue:Ge,data:{value:Ge,label:"starActiveColor"},setAttributes:a}),r.a.createElement(s.a,{label:Object(o.__)("Outline Color","ultimate-addons-for-gutenberg"),colorValue:Ue,data:{value:Ue,label:"starOutlineColor"},setAttributes:a})),r.a.createElement(y.a,{title:Object(o.__)("Spacing","ultimate-addons-for-gutenberg"),initialOpen:!1},r.a.createElement(f.a,O({},e,{label:Object(o.__)("Padding","ultimate-addons-for-gutenberg"),valueTop:{value:Ee,label:"topPadding"},valueRight:{value:He,label:"rightPadding"},valueBottom:{value:Ce,label:"bottomPadding"},valueLeft:{value:Fe,label:"leftPadding"},valueTopTablet:{value:Me,label:"paddingTopTablet"},valueRightTablet:{value:ze,label:"paddingRightTablet"},valueBottomTablet:{value:xe,label:"paddingBottomTablet"},valueLeftTablet:{value:Ie,label:"paddingLeftTablet"},valueTopMobile:{value:Le,label:"paddingTopMobile"},valueRightMobile:{value:Ae,label:"paddingRightMobile"},valueBottomMobile:{value:ke,label:"paddingBottomMobile"},valueLeftMobile:{value:Pe,label:"paddingLeftMobile"},unit:{value:Re,label:"paddingUnit"},mUnit:{value:De,label:"mobilePaddingUnit"},tUnit:{value:Be,label:"tabletPaddingUnit"},attributes:t,setAttributes:a,link:{value:Ne,label:"spacingLink"}})))),r.a.createElement(b.b,O({},b.a.advance,{parentProps:e})))),Et,Ct,wt)};t.default=r.a.memo(j)}}]);