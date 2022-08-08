!function(){var e,t,n,r={634:function(e,t,n){"use strict";var r=n(307),i=n(196),o=n.n(i),c=n(609),u=n(736),l=({id:e,itemTitle:t,openModal:n,isColumn:r,thisRef:i})=>{const l=(0,u.__)("This item is a mega-menu column. It will not be displayed itself, but its children will show inside the menu.");return o().createElement(o().Fragment,null,r&&o().createElement(c.Notice,{status:"warning",isDismissible:!1,className:"nv-mm-info description-wide"},l),o().createElement("div",{className:"nv-mm-options description description-wide"},o().createElement(c.Button,{ref:i,disabled:r,isSecondary:!0,icon:"admin-settings",onClick:()=>{n({id:e,title:t,topLevel:!1})}},(0,u.__)("Menu Item Settings","neve"))))};const s=(0,r.lazy)((()=>n.e(372).then(n.bind(n,182))));var a=({id:e,initialIcon:t,pickerMount:n})=>{const[i,l]=(0,r.useState)(t),[a,m]=(0,r.useState)(!1),d=()=>{m(!a)};return o().createElement(o().Fragment,null,o().createElement("div",null,o().createElement("input",{type:"hidden",value:i,name:`nv-menu-item-icon[${e}]`,id:`nv-menu-item-icon-${e}`}),o().createElement(c.Tooltip,{text:(0,u.__)("Select Icon","neve")},o().createElement(c.Button,{className:"nv-icon-toggle",isSmall:!0,isSecondary:!0,iconSize:15,onClick:d},o().createElement("span",{className:i?(f=i,f.includes("ti-")?`ti ${f}`:f.includes("dashicons-")?`dashicons ${f}`:f):"dashicons dashicons-plus"})))),a&&(0,r.createPortal)(o().createElement(r.Suspense,{fallback:o().createElement("div",{className:"nv-iconpicker"},o().createElement(c.Spinner,null))},o().createElement(s,{onChange:l,icon:i,closePicker:d})),n));var f},m=function({icon:e,size:t=24,...n}){return(0,r.cloneElement)(e,{width:t,height:t,...n})},d=n(444),f=(0,r.createElement)(d.SVG,{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},(0,r.createElement)(d.Path,{d:"M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-4.1 1.5v10H10v-10h4.9zM5.5 17V8c0-.3.2-.5.5-.5h2.5v10H6c-.3 0-.5-.2-.5-.5zm14 0c0 .3-.2.5-.5.5h-2.6v-10H19c.3 0 .5.2.5.5v9z"})),p=(0,r.createElement)(d.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,r.createElement)(d.Path,{d:"M19 6H6c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h13c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zM6 17.5c-.3 0-.5-.2-.5-.5V8c0-.3.2-.5.5-.5h3v10H6zm13.5-.5c0 .3-.2.5-.5.5h-3v-10h3c.3 0 .5.2.5.5v9z"})),v=({isMega:e,isColumn:t,optBtnRef:n,itemElement:r})=>{if(!e&&!t)return null;const i=e?(0,u.__)("Mega-menu","neve"):(0,u.__)("Mega-menu column","neve");return o().createElement(c.Tooltip,{text:i},o().createElement(c.Button,{onClick:e=>{var t;e.preventDefault(),r.querySelector(".item-edit").click(),null===(t=n.current)||void 0===t||t.focus()}},o().createElement(m,{className:"icon",icon:e?f:p})))},h=n(881);const g={childList:!0};const w=(0,r.lazy)((()=>n.e(962).then(n.bind(n,171))));const y=document.getElementById("nv-mm-app");(0,r.render)((0,r.createElement)((()=>{const{megaItems:e}=window.nvMegaMenu,t=Array.from(document.querySelectorAll("#menu-to-edit .menu-item")),[n,i]=(0,r.useState)(t),[u,s]=(0,r.useState)(null),[m,d]=(0,r.useState)(e||[]),f=document.querySelector("#menu-to-edit");((e,t,n=g)=>{const[i,o]=(0,r.useState)(null);(0,r.useEffect)((()=>{if(!e)return;const n=new MutationObserver(t);o(n)}),[]),(0,r.useEffect)((()=>{if(i)return i.observe(e,n),()=>{i&&i.disconnect()}}),[i,e,n])})(f,(e=>{e.forEach((e=>{const{addedNodes:t}=e;t.length<1||Array.from(t).filter((e=>{const t=e;return"LI"===t.nodeName&&!t.classList.contains("sortable-placeholder")})).length<1||p()}))})),(0,r.useEffect)((()=>{f&&f.addEventListener("click",(e=>{if(!e.target)return;const t=e.target;t.classList&&t.classList.contains("menus-move")&&(setTimeout(p,100),p())}))}),[]);const p=()=>{i(Array.from(document.querySelectorAll("#menu-to-edit li.menu-item")))},y=e=>{const t=document.getElementById(`menu-item-${e.id}`);if(!t)return;const n=t.classList.contains("menu-item-depth-0");s({...e,topLevel:n})},b=({node:e})=>{const t=(0,h.Y7)(e),n=(0,r.useRef)(null);if(!t)return null;const{id:i,icon:c,depth:u,itemTitle:s,iconPickerMount:d,optionsMount:f,iconMount:p,infoMount:g}=t,w=((e,t)=>{if(1!==t)return!1;let n=e.previousSibling;if(!n)return!1;for(;n;){if("LI"===n.nodeName&&n.classList.contains("menu-item-depth-0"))return!!n&&!!m.includes((0,h.r9)(n));n=n.previousSibling}return!1})(e,u);return o().createElement(r.Fragment,{key:`${i}-${s}`},(0,r.createPortal)(o().createElement(a,{itemElement:e,initialIcon:c,id:i,pickerMount:d}),p),(0,r.createPortal)(o().createElement(l,{thisRef:n,id:i,itemTitle:s,openModal:y,isColumn:w}),f),(0,r.createPortal)(o().createElement(v,{optBtnRef:n,itemElement:e,isMega:m.includes(i)&&0===u,isColumn:w&&1===u}),g))};return o().createElement(o().Fragment,null,n&&n.map(((e,t)=>o().createElement(b,{key:t,node:e}))),o().createElement(r.Suspense,{fallback:o().createElement(c.Spinner,null)},u&&o().createElement(w,{onClose:()=>{s(null)},modalData:u,addToMega:e=>{d([...m,e])},removeFromMega:e=>{d([...m].filter((t=>t!==e)))}})))}),null),y)},184:function(e,t){var n;!function(){"use strict";var r={}.hasOwnProperty;function i(){for(var e=[],t=0;t<arguments.length;t++){var n=arguments[t];if(n){var o=typeof n;if("string"===o||"number"===o)e.push(n);else if(Array.isArray(n)){if(n.length){var c=i.apply(null,n);c&&e.push(c)}}else if("object"===o)if(n.toString===Object.prototype.toString)for(var u in n)r.call(n,u)&&n[u]&&e.push(u);else e.push(n.toString())}}return e.join(" ")}e.exports?(i.default=i,e.exports=i):void 0===(n=function(){return i}.apply(t,[]))||(e.exports=n)}()},881:function(e,t,n){"use strict";n.d(t,{Y7:function(){return c},m_:function(){return u},$j:function(){return l},rd:function(){return s},r9:function(){return o}});var r=n(184),i=n.n(r);const o=e=>{const t=e.id.split("-");return Number(t[t.length-1])},c=e=>{var t;const n=o(e),r=(null===(t=e.querySelector(".menu-item-title"))||void 0===t?void 0:t.innerHTML)||"",i=e.querySelector(".mm-values"),c=((e,t)=>{const n=e.querySelector("input[name^=nv-menu-item-icon]");return null!==n?n.value:null!==t&&t.getAttribute("data-icon")||""})(e,i),u=e.querySelector(".neve-mega-menu-hook"),{iconMount:l,infoMount:s}=(e=>{let t=e.querySelector(".neve-mm-icon"),n=e.querySelector(".neve-mm-tooltip");if(t&&n)return{iconMount:t,infoMount:n};const r=e.querySelector(".item-title");if(!t){t=document.createElement("div"),t.classList.add("neve-mm-icon");const e=r.firstChild;r.insertBefore(t,e.nextSibling)}return n||(n=document.createElement("div"),n.classList.add("neve-mm-tooltip"),r.insertBefore(n,r.lastChild)),{iconMount:t,infoMount:n}})(e),a=(e=>{const t=Array.from(e.classList).filter((e=>e.includes("menu-item-depth")))[0].split("-");return parseInt(t[t.length-1])})(e);return{id:n,itemTitle:r,icon:c,iconMount:l,infoMount:s,optionsMount:u,iconPickerMount:i,depth:a}},u=async e=>{const{api:t,nonce:n}=window.nvMegaMenu,r={headers:{Accept:"application/json","Content-Type":"application/json","x-wp-nonce":n}};return await fetch(`${t}${e}`,r).then((e=>e.json()))},l=async(e,t)=>{const{api:n,nonce:r}=window.nvMegaMenu,i={method:"POST",headers:{Accept:"application/json","Content-Type":"application/json","x-wp-nonce":r},body:JSON.stringify(t)};return await fetch(`${n}${e}`,i).then((e=>e.json()))},s=e=>i()(e,{ti:e.includes("ti-"),dashicons:e.includes("dashicons-")})},196:function(e){"use strict";e.exports=window.React},609:function(e){"use strict";e.exports=window.wp.components},307:function(e){"use strict";e.exports=window.wp.element},736:function(e){"use strict";e.exports=window.wp.i18n},140:function(e){"use strict";e.exports=window.wp.neve.components},444:function(e){"use strict";e.exports=window.wp.primitives}},i={};function o(e){var t=i[e];if(void 0!==t)return t.exports;var n=i[e]={exports:{}};return r[e](n,n.exports,o),n.exports}o.m=r,e=[],o.O=function(t,n,r,i){if(!n){var c=1/0;for(a=0;a<e.length;a++){n=e[a][0],r=e[a][1],i=e[a][2];for(var u=!0,l=0;l<n.length;l++)(!1&i||c>=i)&&Object.keys(o.O).every((function(e){return o.O[e](n[l])}))?n.splice(l--,1):(u=!1,i<c&&(c=i));if(u){e.splice(a--,1);var s=r();void 0!==s&&(t=s)}}return t}i=i||0;for(var a=e.length;a>0&&e[a-1][2]>i;a--)e[a]=e[a-1];e[a]=[n,r,i]},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,{a:t}),t},o.d=function(e,t){for(var n in t)o.o(t,n)&&!o.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},o.f={},o.e=function(e){return Promise.all(Object.keys(o.f).reduce((function(t,n){return o.f[n](e,t),t}),[]))},o.u=function(e){return 962===e?"e4c696904a59ae392ebb.js":372===e?"5b72831e7c76af9cd059.js":void 0},o.miniCssF=function(e){return"style-app.css"},o.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t={},n="neve-pro-addon:",o.l=function(e,r,i,c){if(t[e])t[e].push(r);else{var u,l;if(void 0!==i)for(var s=document.getElementsByTagName("script"),a=0;a<s.length;a++){var m=s[a];if(m.getAttribute("src")==e||m.getAttribute("data-webpack")==n+i){u=m;break}}u||(l=!0,(u=document.createElement("script")).charset="utf-8",u.timeout=120,o.nc&&u.setAttribute("nonce",o.nc),u.setAttribute("data-webpack",n+i),u.src=e),t[e]=[r];var d=function(n,r){u.onerror=u.onload=null,clearTimeout(f);var i=t[e];if(delete t[e],u.parentNode&&u.parentNode.removeChild(u),i&&i.forEach((function(e){return e(r)})),n)return n(r)},f=setTimeout(d.bind(null,void 0,{type:"timeout",target:u}),12e4);u.onerror=d.bind(null,u.onerror),u.onload=d.bind(null,u.onload),l&&document.head.appendChild(u)}},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},function(){var e;o.g.importScripts&&(e=o.g.location+"");var t=o.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),o.p=e}(),function(){var e={143:0,611:0};o.f.j=function(t,n){var r=o.o(e,t)?e[t]:void 0;if(0!==r)if(r)n.push(r[2]);else if(611!=t){var i=new Promise((function(n,i){r=e[t]=[n,i]}));n.push(r[2]=i);var c=o.p+o.u(t),u=new Error;o.l(c,(function(n){if(o.o(e,t)&&(0!==(r=e[t])&&(e[t]=void 0),r)){var i=n&&("load"===n.type?"missing":n.type),c=n&&n.target&&n.target.src;u.message="Loading chunk "+t+" failed.\n("+i+": "+c+")",u.name="ChunkLoadError",u.type=i,u.request=c,r[1](u)}}),"chunk-"+t,t)}else e[t]=0},o.O.j=function(t){return 0===e[t]};var t=function(t,n){var r,i,c=n[0],u=n[1],l=n[2],s=0;if(c.some((function(t){return 0!==e[t]}))){for(r in u)o.o(u,r)&&(o.m[r]=u[r]);if(l)var a=l(o)}for(t&&t(n);s<c.length;s++)i=c[s],o.o(e,i)&&e[i]&&e[i][0](),e[c[s]]=0;return o.O(a)},n=self.webpackChunkneve_pro_addon=self.webpackChunkneve_pro_addon||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var c=o.O(void 0,[611],(function(){return o(634)}));c=o.O(c)}();