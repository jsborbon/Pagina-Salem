(window.webpackJsonp_ultimate_addons_for_gutenberg=window.webpackJsonp_ultimate_addons_for_gutenberg||[]).push([[64],{211:function(e,n,t){"use strict";var o=t(1),i=t(7),a=t(5),l=t(0),r=t.n(l),d=t(8);n.a=e=>{const{onSelectImage:n,backgroundImage:t,onRemoveImage:l,showVideoInput:c,label:p,disableRemove:b=!1,allow:s=["image"]}=e;let u,f=Object(o.__)("Image","ultimate-addons-for-gutenberg"),g=Object(o.__)("Select Image","ultimate-addons-for-gutenberg"),m=Object(o.__)("Change Image","ultimate-addons-for-gutenberg"),_=["image"];c&&(f=Object(o.__)("Video","ultimate-addons-for-gutenberg"),g=Object(o.__)("Select Video","ultimate-addons-for-gutenberg"),m=Object(o.__)("Change Video","ultimate-addons-for-gutenberg"),_=["video"],u=d.a.video_placeholder),f=p||f,f=!1===p?p:f,"Lottie Animation"===p&&(g=Object(o.__)("Select Lottie Animation","ultimate-addons-for-gutenberg"),m=Object(o.__)("Change Lottie Animation","ultimate-addons-for-gutenberg"),_=s,u=d.a.lottie);const h=e=>r.a.createElement("div",{className:"spectra-media-control__button spectra-media-control__button--"+e},d.a[e]);return r.a.createElement(i.BaseControl,{className:"spectra-media-control",id:"uagb-option-selector-"+p,label:f},r.a.createElement("div",{className:"spectra-media-control__wrapper",style:{backgroundImage:!u&&(null==t?void 0:t.url)&&`url("${(e=>{let n=e;switch(/(?:\.([^.]+))?$/.exec(String(n))[1]){case"json":n="";break;case"avi":case"mpg":case"mp4":case"m4v":case"mov":case"ogv":case"vtt":case"wmv":case"3gp":case"3g2":n=""}return n})(null==t?void 0:t.url)}")`}},u&&(null==t?void 0:t.url)&&r.a.createElement("div",{className:"spectra-media-control__icon"},u),r.a.createElement(a.MediaUpload,{title:g,onSelect:n,allowedTypes:_,value:t,render:e=>{let{open:n}=e;return(e=>{const n=null!=t&&t.url?"replace":"add";return r.a.createElement("button",{className:"spectra-media-control__clickable spectra-media-control__clickable--"+n,onClick:e},"add"===n?h(n):r.a.createElement("div",{className:"uag-control-label"},m))})(n)}}),!b&&(null==t?void 0:t.url)&&r.a.createElement("button",{className:"spectra-media-control__clickable spectra-media-control__clickable--close",onClick:l},h("close"))),e.help&&r.a.createElement("p",{className:"uag-control-help-notice"},e.help))}},212:function(e,n,t){"use strict";var o=t(15),i=t.n(o)()((function(e){return e[1]}));i.push([e.i,'/*#######################################################################################*/\n/**\n * google-material-color v1.2.6\n * https://github.com/danlevan/google-material-color\n */\n.rfipbtn--default {\n  background-color: #fff;\n  border: 1px solid #e0e0e0; }\n  .rfipbtn--default:active, .rfipbtn--default:focus {\n    box-shadow: 0 1.5px 4px rgba(0, 0, 0, 0.24), 0 1.5px 6px rgba(0, 0, 0, 0.12);\n    border: 1px solid #bdbdbd; }\n  .rfipbtn--default .rfipbtn__button {\n    border: 0 none transparent;\n    border-left: 1px solid #e0e0e0;\n    background-color: #f5f5f5;\n    color: #424242; }\n    .rfipbtn--default .rfipbtn__button:hover {\n      background-color: #bdbdbd; }\n    .rfipbtn--default .rfipbtn__button:active {\n      box-shadow: inset 0 0 10px 0 #e0e0e0; }\n  .rfipbtn--default .rfipbtn__icon {\n    border: 1px solid #eee;\n    color: #424242; }\n    .rfipbtn--default .rfipbtn__icon--empty {\n      color: #e0e0e0; }\n  .rfipbtn--default .rfipbtn__del {\n    background-color: #eee; }\n    .rfipbtn--default .rfipbtn__del:hover {\n      background-color: #e0e0e0; }\n    .rfipbtn--default .rfipbtn__del:focus, .rfipbtn--default .rfipbtn__del:active {\n      outline: 1px solid #e0e0e0; }\n\n.rfipdropdown--default {\n  box-shadow: 0 15px 24px rgba(0, 0, 0, 0.22), 0 19px 76px rgba(0, 0, 0, 0.3);\n  color: #424242;\n  background-color: #fff;\n  border: 1px solid #e0e0e0; }\n  .rfipdropdown--default input,\n  .rfipdropdown--default select {\n    color: #424242; }\n  .rfipdropdown--default .rfipcategory select {\n    background-color: #fff;\n    border: 1px solid #bdbdbd;\n    transition: box-shadow 250ms, border 250ms; }\n    .rfipdropdown--default .rfipcategory select:focus, .rfipdropdown--default .rfipcategory select:active {\n      border-color: #9e9e9e;\n      box-shadow: 0 0 0 0 #9e9e9e;\n      outline: 0 none; }\n  .rfipdropdown--default .rfipicons__cp {\n    border: 1px solid #bdbdbd;\n    transition: box-shadow 250ms, border 250ms; }\n    .rfipdropdown--default .rfipicons__cp:focus, .rfipdropdown--default .rfipicons__cp:active {\n      border-color: #9e9e9e;\n      box-shadow: 0 0 0 0 #9e9e9e;\n      outline: 0 none; }\n  .rfipdropdown--default .rfipicons__left, .rfipdropdown--default .rfipicons__right {\n    background-color: #eee;\n    border: 1px solid #eee;\n    color: #424242; }\n    .rfipdropdown--default .rfipicons__left:hover, .rfipdropdown--default .rfipicons__right:hover {\n      background-color: #bdbdbd;\n      border: 1px solid #bdbdbd; }\n    .rfipdropdown--default .rfipicons__left:focus, .rfipdropdown--default .rfipicons__left:active, .rfipdropdown--default .rfipicons__right:focus, .rfipdropdown--default .rfipicons__right:active {\n      border: 1px solid #bdbdbd; }\n  .rfipdropdown--default .rfipicons__ibox {\n    background-color: #f5f5f5;\n    border: 1px solid #f5f5f5;\n    color: #424242; }\n    .rfipdropdown--default .rfipicons__ibox:hover {\n      background-color: #bdbdbd;\n      border: 1px solid #bdbdbd; }\n    .rfipdropdown--default .rfipicons__ibox:focus, .rfipdropdown--default .rfipicons__ibox:active {\n      border: 1px solid #bdbdbd; }\n    .rfipdropdown--default .rfipicons__ibox--error {\n      color: #ef9a9a; }\n  .rfipdropdown--default .rfipsearch input {\n    border: 1px solid #bdbdbd;\n    transition: box-shadow 250ms, border 250ms; }\n    .rfipdropdown--default .rfipsearch input:focus, .rfipdropdown--default .rfipsearch input:active {\n      border-color: #9e9e9e;\n      box-shadow: 0 0 0 0 #9e9e9e;\n      outline: 0 none; }\n\n.rfipbtn,\n.rfipdropdown {\n  margin: 0;\n  padding: 0;\n  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;\n  font-size: 14px;\n  line-height: 1.71429;\n  vertical-align: baseline;\n  box-sizing: border-box; }\n  .rfipbtn *,\n  .rfipdropdown * {\n    box-sizing: border-box;\n    margin: 0;\n    padding: 0; }\n  .rfipbtn input,\n  .rfipbtn select,\n  .rfipdropdown input,\n  .rfipdropdown select {\n    font-size: 14px; }\n\n.rfip {\n  position: relative;\n  display: inline-block;\n  margin: 8px;\n  vertical-align: middle;\n  width: 100%; }\n\n.rfipbtn {\n  width: 100%;\n  display: flex;\n  flex-flow: row nowrap;\n  min-height: 50px;\n  border-radius: 2px;\n  cursor: pointer;\n  transition: box-shadow 250ms, border-color 250ms;\n  outline: 0 none;\n  user-select: none; }\n  .rfipbtn--open {\n    border-radius: 2px 2px 0 0; }\n  .rfipbtn__button {\n    width: 48px;\n    margin-left: auto;\n    display: flex;\n    align-items: center;\n    /* x axis center */\n    justify-content: center;\n    /* y axis center */\n    height: auto;\n    /* auto height to fix the flex */\n    transition: background 250ms, box-shadow 250ms; }\n    .rfipbtn__button i {\n      font-size: 32px;\n      transition: transform 250ms; }\n    .rfipbtn__button--open i {\n      transform: rotate(-180deg); }\n  .rfipbtn__current {\n    display: flex;\n    flex-flow: row nowrap;\n    align-items: center;\n    justify-content: center;\n    flex: 0 0 86px;\n    padding: 2px; }\n  .rfipbtn--multi {\n    width: 258px; }\n    .rfipbtn--multi .rfipbtn__current {\n      flex-flow: row wrap;\n      justify-content: flex-start;\n      flex-basis: 212px;\n      align-content: center; }\n  .rfipbtn__icon {\n    margin: 2px;\n    padding: 0;\n    height: 28px;\n    width: 48px;\n    display: flex;\n    flex-flow: row nowrap;\n    align-items: center;\n    justify-content: space-between;\n    border-radius: 2px; }\n    .rfipbtn__icon--empty {\n      font-size: 14px;\n      line-height: 16px;\n      margin-left: 8px;\n      text-align: center;\n      text-transform: lowercase;\n      font-style: italic; }\n  .rfipbtn__elm {\n    display: flex;\n    height: 28px;\n    width: 28px;\n    align-items: center;\n    justify-content: center;\n    font-size: 18px; }\n    .rfipbtn__elm img,\n    .rfipbtn__elm svg {\n      height: 18px;\n      width: auto; }\n  .rfipbtn__del {\n    width: 18px;\n    display: flex;\n    height: 28px;\n    align-items: center;\n    justify-content: center;\n    transition: background-color 250ms;\n    cursor: pointer; }\n\n.rfipcategory {\n  width: 100%;\n  margin: 0 0 8px;\n  position: relative; }\n  .rfipcategory select {\n    width: 100%;\n    display: block;\n    height: 32px;\n    line-height: 32px;\n    border-radius: 0;\n    -webkit-appearance: none;\n    -moz-appearance: none;\n    appearance: none;\n    /* remove default arrow */\n    transition: border 250ms, box-shadow 250ms;\n    background-color: transparent !important; }\n  .rfipcategory i {\n    position: absolute;\n    right: 2px;\n    top: 0;\n    font-size: 16px;\n    line-height: 32px;\n    z-index: -1; }\n\n.rfipdropdown {\n  width: 352px;\n  position: absolute;\n  left: 0;\n  margin-top: -1px;\n  z-index: 100000001;\n  border-radius: 0 1px 4px 4px; }\n  .rfipdropdown .rfipicons__ibox--error {\n    color: #000;\n    text-transform: capitalize;\n    font-size: 14px;\n    font-weight: 500; }\n  .rfipdropdown__selector {\n    overflow: hidden;\n    padding: 16px; }\n  .rfipdropdown.fipappear-enter-active .rfipdropdown__selector, .rfipdropdown.fipappear-exit-active .rfipdropdown__selector {\n    transition: max-height 300ms ease-out, padding 300ms ease-out;\n    padding: 16px; }\n\n.rfipicons__pager {\n  display: flex;\n  flex-flow: row nowrap;\n  height: 24px;\n  line-height: 24px;\n  align-items: center;\n  margin-bottom: 8px; }\n\n.rfipicons__num {\n  width: 100px;\n  margin-right: auto; }\n\n.rfipicons__cp {\n  width: 32px;\n  margin-right: 8px;\n  height: 24px;\n  line-height: 24px;\n  text-align: right; }\n\n.rfipicons__sp {\n  margin-right: 8px; }\n\n.rfipicons__tp {\n  margin-right: 8px; }\n\n.rfipicons__arrow {\n  margin-left: auto;\n  width: 56px;\n  display: flex;\n  flex-flow: row nowrap;\n  justify-content: flex-end;\n  align-items: center;\n  height: 24px;\n  user-select: none; }\n\n.rfipicons__right {\n  margin-left: auto; }\n\n.rfipicons__left, .rfipicons__right {\n  cursor: pointer;\n  width: 24px;\n  height: 24px;\n  position: relative;\n  transition: background-color 250ms, border 250ms;\n  outline: 0 none;\n  border-radius: 2px;\n  font-size: 18px; }\n\n.rfipicons__label {\n  height: 22px;\n  width: 22px;\n  display: flex;\n  align-items: center;\n  justify-content: center; }\n  .rfipicons__label img {\n    height: 18px;\n    width: 18px; }\n\n.rfipicons__selector {\n  display: flex;\n  flex: 1 1 20%;\n  flex-flow: row wrap;\n  align-content: center;\n  justify-content: flex-start; }\n\n.rfipicons__ibox {\n  display: flex;\n  align-items: center;\n  justify-content: center;\n  height: 100%;\n  width: 100%;\n  transition: background-color 250ms, border 250ms;\n  border-radius: 2px;\n  outline: 0 none;\n  font-size: 20px; }\n  .rfipicons__ibox img,\n  .rfipicons__ibox svg {\n    max-height: 24px;\n    width: auto; }\n  .rfipicons__ibox > * {\n    transform: scale(1);\n    transition: transform 250ms;\n    transform-origin: center; }\n  .rfipicons__ibox:hover > * {\n    transform: scale(1.8); }\n  .rfipicons__ibox--error {\n    text-transform: lowercase;\n    font-style: italic; }\n\n.rfipicons__icon {\n  width: 20%;\n  height: 64px;\n  padding: 1px;\n  display: flex;\n  align-items: center;\n  justify-content: center;\n  cursor: pointer; }\n  .rfipicons__icon--error {\n    display: block;\n    padding: 16px;\n    text-align: center;\n    font-size: 24px;\n    width: 100%;\n    line-height: 1; }\n\n.rfipsearch {\n  width: 100%;\n  margin: 0 0 8px; }\n  .rfipsearch input {\n    width: 100%;\n    display: block;\n    height: 32px;\n    line-height: 32px; }\n\n.components-panel .rfipdropdown,\n.components-panel .rfipdropdown.rfipdropdown--default.fipappear-enter-done {\n  left: 0;\n  width: 100%; }\n\n.components-panel .rfipicons__ibox {\n  font-size: 15px; }\n\n.components-panel .rfipicons__icon {\n  height: 40px; }\n\n.components-panel .rfipicons__ibox:hover > * {\n  -webkit-transform: scale(1.45);\n  -ms-transform: scale(1.45);\n  transform: scale(1.45); }\n\n.rfipdropdown--default .rfipicons__icon--selected .rfipicons__ibox svg {\n  fill: #007cba; }\n\n.rfipbtn--default .rfipbtn__icon {\n  color: #424242;\n  height: 40px;\n  border: 0; }\n\n.rfipbtn--default .rfipbtn__del {\n  height: 7px;\n  background-color: #007cba33;\n  color: #007cba;\n  font-weight: bold;\n  padding: 8px 8px 10px 8px;\n  border-radius: 100%;\n  margin-left: 10px; }\n\n.rfipdropdown--default .rfipicons__ibox,\n.rfipdropdown--default .rfipicons__ibox:focus,\n.rfipdropdown--default .rfipicons__ibox:active,\n.rfipdropdown--default .rfipicons__ibox:hover {\n  color: #424242;\n  background-color: transparent;\n  border: 0; }\n\n.rfipdropdown--default .rfipicons__icon--selected .rfipicons__ibox svg {\n  fill: #007cba; }\n\n.rfipicons__ibox img,\n.rfipicons__ibox svg {\n  width: 16px;\n  height: 16px;\n  max-height: 24px; }\n\n.rfipicons__ibox svg {\n  fill: #585858; }\n\n/* Override default CSS - UAG */\n.uag-icon-picker .rfip {\n  margin: 4px 0 0; }\n\n.uag-icon-picker .uag-control-label {\n  padding-bottom: 4px;\n  display: block; }\n',""]),n.a=i},213:function(e,n,t){"use strict";var o,i=t(217),a=t.n(i),l=t(0),r=t.n(l),d=t(14),c=t.n(d),p=t(212),b=0,s={injectType:"lazySingletonStyleTag",attributes:{id:"uagb-editor-styles"},insert:"head",singleton:!0},u={};u.locals=p.a.locals||{},u.use=function(){return b++||(o=c()(p.a,s)),u},u.unuse=function(){b>0&&!--b&&(o(),o=null)};var f=u,g=t(13),m=t(1);n.a=e=>(Object(l.useLayoutEffect)(()=>(f.use(),()=>{f.unuse()}),[]),r.a.createElement("div",{className:"components-base-control uag-icon-picker"},r.a.createElement("span",{className:"uag-control-label"},(null==e?void 0:e.label)||Object(m.__)("Icon","ultimate-addons-for-gutenberg")),r.a.createElement(a.a,{icons:(null==e?void 0:e.icons)||wp.UAGBSvgIcons,renderFunc:g.a,theme:"default",value:e.value,onChange:null==e?void 0:e.onChange,isMulti:e.isMulti||!1,noSelectedPlaceholder:e.noSelectedPlaceholder||Object(m.__)("Select Icon","ultimate-addons-for-gutenberg")}),e.help&&r.a.createElement("p",{className:"uag-control-help-notice"},e.help)))},490:function(e,n,t){"use strict";t.r(n);var o=t(213),i=t(0),a=t.n(i),l=t(1),r=t(5),d=t(77),c=t(31),p=t(17),b=t(22),s=t(59),u=t(211),f=t(37),g=t(7),m=t(18);function _(){return(_=Object.assign||function(e){for(var n=1;n<arguments.length;n++){var t=arguments[n];for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o])}return e}).apply(this,arguments)}const h=e=>{e=e.parentProps;const{attributes:n,setAttributes:t,deviceType:i}=e,{image_icon:h,icon:x,image:v,icon_color:w,label_color:M,icon_hover_color:y,label_hover_color:T,icon_bg_color:k,icon_bg_hover_color:E,icon_border_color:j,icon_border_hover_color:O,link:P,target:L,disableLink:B,childTopMargin:C,childRightMargin:R,childLeftMargin:I,childBottomMargin:U,childTopMarginTablet:S,childRightMarginTablet:z,childLeftMarginTablet:N,childBottomMarginTablet:A,childTopMarginMobile:V,childRightMarginMobile:F,childLeftMarginMobile:H,childBottomMarginMobile:G,childMarginUnit:J,childMarginUnitTablet:$,childMarginUnitMobile:D,childMarginLink:q,childTopPadding:K,childRightPadding:Q,childLeftPadding:W,childBottomPadding:X,childTopPaddingTablet:Y,childRightPaddingTablet:Z,childLeftPaddingTablet:ee,childBottomPaddingTablet:ne,childTopPaddingMobile:te,childRightPaddingMobile:oe,childLeftPaddingMobile:ie,childBottomPaddingMobile:ae,childPaddingUnit:le,childPaddingUnitTablet:re,childPaddingUnitMobile:de,childPaddingLink:ce,hideLabel:pe}=n;return a.a.createElement(r.InspectorControls,null,a.a.createElement(d.a,null,a.a.createElement(c.b,c.a.general,a.a.createElement(m.a,{initialOpen:!0},a.a.createElement(b.a,{setAttributes:t,label:Object(l.__)("Type","ultimate-addons-for-gutenberg"),data:{value:h,label:"image_icon"},className:"uagb-multi-button-alignment-control",options:[{value:"icon",label:"Icon"},{value:"image",label:"Image"},{value:"none",label:"None"}],showIcons:!1}),"icon"===h&&a.a.createElement(a.a.Fragment,null,a.a.createElement(o.a,{label:Object(l.__)("Icon","ultimate-addons-for-gutenberg"),value:x,onChange:e=>t({icon:e})})),"image"===h&&a.a.createElement(a.a.Fragment,null,a.a.createElement(u.a,{onSelectImage:e=>{e&&e.url&&e.type&&"image"===e.type?t({image:e}):t({image:null})},backgroundImage:v,onRemoveImage:()=>{t({image:""})}})),a.a.createElement(g.ToggleControl,{label:Object(l.__)("Link","ultimate-addons-for-gutenberg"),checked:B,onChange:()=>t({disableLink:!B})}),B&&a.a.createElement(a.a.Fragment,null,a.a.createElement("p",{className:"components-base-control__label"},Object(l.__)("URL","ultimate-addons-for-gutenberg")),a.a.createElement(g.TextControl,{value:P,onChange:e=>t({link:e}),placeholder:Object(l.__)("Enter URL","ultimate-addons-for-gutenberg")}),a.a.createElement(g.ToggleControl,{label:Object(l.__)("Open in New Tab","ultimate-addons-for-gutenberg"),checked:L,onChange:()=>t({target:!L})})))),a.a.createElement(c.b,c.a.style,!pe&&a.a.createElement(m.a,{title:Object(l.__)("Label","ultimate-addons-for-gutenberg"),initialOpen:!0},a.a.createElement(s.a,{tabs:[{name:"normal",title:Object(l.__)("Normal","ultimate-addons-for-gutenberg")},{name:"hover",title:Object(l.__)("Hover","ultimate-addons-for-gutenberg")}],normal:a.a.createElement(p.a,{label:Object(l.__)("Color","ultimate-addons-for-gutenberg"),colorValue:M||"",data:{value:M,label:"label_color"},setAttributes:t}),hover:a.a.createElement(p.a,{label:Object(l.__)("Color","ultimate-addons-for-gutenberg"),colorValue:T||"",data:{value:T,label:"label_hover_color"},setAttributes:t}),disableBottomSeparator:!0})),a.a.createElement(m.a,{title:Object(l.__)("Icon","ultimate-addons-for-gutenberg"),initialOpen:!1},a.a.createElement(s.a,{tabs:[{name:"normal",title:Object(l.__)("Normal","ultimate-addons-for-gutenberg")},{name:"hover",title:Object(l.__)("Hover","ultimate-addons-for-gutenberg")}],normal:a.a.createElement(a.a.Fragment,null,"icon"===h&&""!==x&&a.a.createElement(a.a.Fragment,null,a.a.createElement(p.a,{label:Object(l.__)("Icon Color","ultimate-addons-for-gutenberg"),colorValue:w||"",data:{value:w,label:"icon_color"},setAttributes:t}),a.a.createElement(p.a,{label:Object(l.__)("Background Color","ultimate-addons-for-gutenberg"),colorValue:k||"",data:{value:k,label:"icon_bg_color"},setAttributes:t})),a.a.createElement(p.a,{label:Object(l.__)("Border Color","ultimate-addons-for-gutenberg"),colorValue:j||"",data:{value:j,label:"icon_border_color"},setAttributes:t})),hover:a.a.createElement(a.a.Fragment,null,"icon"===h&&""!==x&&a.a.createElement(a.a.Fragment,null,a.a.createElement(p.a,{label:Object(l.__)("Icon Color","ultimate-addons-for-gutenberg"),colorValue:y||"",data:{value:y,label:"icon_hover_color"},setAttributes:t}),a.a.createElement(p.a,{label:Object(l.__)("Background Color","ultimate-addons-for-gutenberg"),colorValue:E||"",data:{value:E,label:"icon_bg_hover_color"},setAttributes:t})),a.a.createElement(p.a,{label:Object(l.__)("Border Color","ultimate-addons-for-gutenberg"),colorValue:O||"",data:{value:O,label:"icon_border_hover_color"},setAttributes:t})),disableBottomSeparator:!0})),a.a.createElement(m.a,{title:Object(l.__)("Spacing","ultimate-addons-for-gutenberg"),initialOpen:!1},a.a.createElement(f.a,{label:Object(l.__)("Margin","ultimate-addons-for-gutenberg"),valueTop:{value:C,label:"childTopMargin"},valueRight:{value:R,label:"childRightMargin"},valueBottom:{value:U,label:"childBottomMargin"},valueLeft:{value:I,label:"childLeftMargin"},valueTopTablet:{value:S,label:"childTopMarginTablet"},valueRightTablet:{value:z,label:"childRightMarginTablet"},valueBottomTablet:{value:A,label:"childBottomMarginTablet"},valueLeftTablet:{value:N,label:"childLeftMarginTablet"},valueTopMobile:{value:V,label:"childTopMarginMobile"},valueRightMobile:{value:F,label:"childRightMarginMobile"},valueBottomMobile:{value:G,label:"childBottomMarginMobile"},valueLeftMobile:{value:H,label:"childLeftMarginMobile"},unit:{value:J,label:"childMarginUnit"},mUnit:{value:D,label:"childMarginUnitMobile"},tUnit:{value:$,label:"childMarginUnitTablet"},deviceType:i,attributes:n,setAttributes:t,link:{value:q,label:"childMarginLink"}}),a.a.createElement(f.a,{label:Object(l.__)("Padding","ultimate-addons-for-gutenberg"),valueTop:{value:K,label:"childTopPadding"},valueRight:{value:Q,label:"childRightPadding"},valueBottom:{value:X,label:"childBottomPadding"},valueLeft:{value:W,label:"childLeftPadding"},valueTopTablet:{value:Y,label:"childTopPaddingTablet"},valueRightTablet:{value:Z,label:"childRightPaddingTablet"},valueBottomTablet:{value:ne,label:"childBottomPaddingTablet"},valueLeftTablet:{value:ee,label:"childLeftPaddingTablet"},valueTopMobile:{value:te,label:"childTopPaddingMobile"},valueRightMobile:{value:oe,label:"childRightPaddingMobile"},valueBottomMobile:{value:ae,label:"childBottomPaddingMobile"},valueLeftMobile:{value:ie,label:"childLeftPaddingMobile"},unit:{value:le,label:"childPaddingUnit"},mUnit:{value:de,label:"childPaddingUnitMobile"},tUnit:{value:re,label:"childPaddingUnitTablet"},deviceType:i,attributes:n,setAttributes:t,link:{value:ce,label:"childPaddingLink"}}))),a.a.createElement(c.b,_({},c.a.advance,{parentProps:e}))))};n.default=a.a.memo(h)}}]);