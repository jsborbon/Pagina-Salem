"use strict";(self.webpackChunkneve_pro_addon=self.webpackChunkneve_pro_addon||[]).push([[962],{171:(e,t,n)=>{n.r(t),n.d(t,{default:()=>b});var a=n(196),l=n.n(a),o=n(307),c=n(736),s=n(609),m=n(444);const r=(0,o.createElement)(m.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,o.createElement)(m.Path,{d:"M12 13.06l3.712 3.713 1.061-1.06L13.061 12l3.712-3.712-1.06-1.06L12 10.938 8.288 7.227l-1.061 1.06L10.939 12l-3.712 3.712 1.06 1.061L12 13.061z"}));var u=n(140),i=n(184),d=n.n(i),v=n(881);const E=({onUpdate:e,value:t})=>l().createElement("div",{className:"columns components-base-control"},l().createElement("label",{htmlFor:"columns"},(0,c.__)("Columns","neve")),l().createElement(s.ButtonGroup,{id:"columns",className:"buttons"},[1,2,3,4,5].map((n=>l().createElement(s.Button,{key:n,className:n===t?"active":"",isSecondary:n!==t,onClick:()=>e(n)},n))))),_=({onUpdate:e,value:t,colNumber:n=3})=>{const{columnsOptions:a}=window.nvMegaMenu;(0,o.useEffect)((()=>{const l=a[n];Object.keys(l).filter((e=>e===t)).length>0||e("equal")}),[n]);const c=a[n];return l().createElement("div",{className:"columns-layout components-base-control"},Object.keys(c).map((n=>{const{image:a}=c[n],o=d()({active:n===t},"option");return l().createElement("button",{key:n,className:o,onClick:()=>{e(n)}},l().createElement("img",{src:a,alt:n}))})))};var g=n(606);const b=({onClose:e,modalData:t,addToMega:n,removeFromMega:a})=>{const[m,i]=(0,o.useState)({}),[b,h]=(0,o.useState)(!0),[p,C]=(0,o.useState)(""),y=(0,c.__)("An error has occurred. Please reload the page and try again.","neve"),N=(0,o.useRef)(null),{id:k,title:w,topLevel:L}=t;(0,g.Z)(N,(()=>{b||e()})),(0,o.useEffect)((()=>{(0,v.m_)(k).then((e=>{i(e.data),h(!1)})).catch((()=>{C(y),h(!1)}))}),[]);const{enabledMega:f,disableLink:S,menuWidth:M,columns:T,columnsLayout:B,contentType:I,customLayoutId:F,enableHeading:j}={...window.nvMegaMenu.defaultSchema,...m},{customLayouts:D,colorControls:O}=window.nvMegaMenu,P=Object.keys(D).map((e=>({value:e,label:D[e]}))),U=()=>{i({...m,enabledMega:!f})},W=()=>{i({...m,disableLink:!S})},z=()=>{i({...m,enableHeading:!j})},G=e=>{i({...m,menuWidth:e})},H=e=>{i({...m,columns:e})},x=e=>{i({...m,columnsLayout:e})},Z=e=>{i({...m,contentType:e})},$=e=>{i({...m,customLayoutId:e})},q=()=>b?l().createElement("div",{className:"tab-content"},l().createElement(s.Spinner,null)):l().createElement("div",{className:"tab-content"},l().createElement("h3",null,(0,c.__)("Content","neve")),l().createElement(s.SelectControl,{label:(0,c.__)("Content Type","neve"),onChange:Z,value:I,options:[{label:(0,c.__)("Menu Item","neve"),value:"default"},{label:(0,c.__)("Menu Item Description","neve"),value:"description"},{label:(0,c.__)("Individual Custom Layout","neve"),value:"custom-layout"},{label:(0,c.__)("Divider Line","neve"),value:"divider"}]}),"custom-layout"===I&&l().createElement(s.SelectControl,{label:(0,c.__)("Custom Layout","neve"),onChange:$,value:F,options:P}),"default"===I&&l().createElement(l().Fragment,null,l().createElement(s.ToggleControl,{className:"toggle",onChange:z,checked:j,label:(0,c.__)("Show as Heading","neve")}),j&&l().createElement(s.ToggleControl,{className:"toggle",onChange:W,checked:S,label:(0,c.__)("Disable Item Link","neve")}))),A=d()("modal","nv-mm-modal",{loading:b});return l().createElement(l().Fragment,null,l().createElement("div",{className:"nv-mm-modal-overlay"},l().createElement("div",{ref:N,className:"nv-mm-modal-wrap"},l().createElement("div",{className:A},l().createElement("div",{className:"modal-head"},l().createElement("small",null,(0,c.__)("You are customizing","neve")," -"," ",w),l().createElement("h1",null,(0,c.__)("Menu Item Settings","neve")),l().createElement(s.Button,{disabled:b,iconSize:35,className:"close",onClick:e,icon:r})),(()=>{if(p)return l().createElement("div",{className:"tab-content"},l().createElement(s.Notice,{status:"warning",isDismissible:!1},l().createElement("p",null,p)));if(!L)return l().createElement(q,null);const e=[{name:"general",title:(0,c.__)("General Settings","neve"),className:"general"}];return f&&e.push({name:"style",title:(0,c.__)("Style","neve"),className:"style"}),l().createElement(s.TabPanel,{className:"tabs",tabs:e},(e=>b?l().createElement("div",{className:"tab-content"},l().createElement(s.Spinner,null)):"style"===e.name?l().createElement("div",{className:"tab-content"},l().createElement("h3",null,(0,c.__)("Layout","neve")),l().createElement(E,{onUpdate:H,value:T}),l().createElement(_,{value:B,onUpdate:x,colNumber:T}),l().createElement("hr",null),l().createElement("h3",null,(0,c.__)("Color","neve")),l().createElement("div",{className:"colors"},Object.entries(O).map((([e,t])=>{let n="";return m&&m[e]&&(n=m[e]),l().createElement("div",{key:e,className:`color-wrap ${e}`},l().createElement(u.ColorControl,{label:t,selectedColor:n,onChange:t=>{((e,t)=>{i({...m,[e]:t})})(e,t)}}))})))):l().createElement("div",{className:"tab-content"},l().createElement("h3",null,(0,c.__)("Mega Menu","neve")),l().createElement(s.ToggleControl,{className:"toggle",onChange:U,checked:f,label:(0,c.__)("Enable","neve")}),f&&l().createElement(l().Fragment,null,l().createElement(s.SelectControl,{label:(0,c.__)("Menu Width","neve"),onChange:G,value:M,options:[{label:(0,c.__)("Contained","neve"),value:"contained"},{label:(0,c.__)("Full Width","neve"),value:"full-width"}]})))))})(),l().createElement("hr",null),l().createElement("div",{className:"modal-footer"},l().createElement(s.Button,{disabled:b,isLink:!0,className:"close",onClick:e},(0,c.__)("Cancel","neve")),!p&&l().createElement(s.Button,{isBusy:b,isPrimary:!b,isSecondary:b,className:"save",onClick:()=>{h(!0),f?n(k):a(k),(0,v.$j)(k,m).then((e=>{e.success||C(e.message||y),h(!1)}))}},(0,c.__)("Save Settings","neve")))))))}},606:(e,t,n)=>{n.d(t,{Z:()=>l});var a=n(307);const l=(e,t)=>{(0,a.useEffect)((()=>{const n=n=>{e.current&&(e.current.contains(n.target)||t(n))};return document.addEventListener("mousedown",n),()=>{document.removeEventListener("mousedown",n)}}),[e,t])}}}]);