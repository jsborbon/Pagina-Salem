(window.webpackJsonp_ultimate_addons_for_gutenberg=window.webpackJsonp_ultimate_addons_for_gutenberg||[]).push([[85],{314:function(e,t,a){"use strict";var n=a(15),i=a.n(n)()((function(e){return e[1]}));i.push([e.i,"/**\n * #.# Editor Styles\n *\n * CSS for just Backend enqueued after style.scss\n * which makes it higher in priority.\n */\n.edit-post-visual-editor .block-editor-block-list__block .uagb-timeline__field {\n  margin: 0; }\n  .edit-post-visual-editor .block-editor-block-list__block .uagb-timeline__field a {\n    text-decoration: none;\n    font-size: inherit;\n    margin: 0; }\n\n.edit-post-visual-editor .block-editor-block-list__block a {\n  pointer-events: none; }\n\n.uagb-editor-preview-mode-tablet.uagb-timeline .uagb-timeline__image img,\n.uagb-editor-preview-mode-mobile.uagb-timeline .uagb-timeline__image img {\n  max-width: 100%; }\n",""]),t.a=i},514:function(e,t,a){"use strict";a.r(t);var n=a(4),i=a.n(n),r=a(60),l=a(47),s=a(48),o=a(39),c=a(0),m=a.n(c);const u=e=>{const t=e.attributes.headingTag,{post:a,attributes:n}=e;let i="_self";return n.linkTarget&&(i="_blank"),m.a.createElement(t,{className:"uagb-timeline__heading"},m.a.createElement("a",{href:a.link,target:i,rel:"noopener noreferrer"},Object(o.decodeEntities)(a.title.rendered.trim())))};var b=m.a.memo(u),_=a(1);const g=e=>{const{post:t,attributes:a}=e;if(a.displayPostImage&&void 0!==t.uagb_featured_image_src&&a.imageSize&&t.uagb_featured_image_src[a.imageSize]){const e=t.uagb_featured_image_src[a.imageSize];let n="_self";return a.linkTarget&&(n="_blank"),m.a.createElement("a",{href:t.link,target:n,rel:"noopener noreferrer",style:{textAlign:a.align},className:"uagb-timeline__image"},m.a.createElement("img",{src:e[0],alt:Object(o.decodeEntities)(t.title.rendered.trim())||Object(_.__)("(Untitled)")}))}return null};var d=m.a.memo(g),p=a(3);const f=e=>{const{post:t,attributes:a}=e,n=Object(p.b)(a.contentSpace,"contentSpace","post-timeline"),i=Object(p.b)(a.exerptLength,"exerptLength","post-timeline");let r;if(a.displayPostExcerpt&&t.uagb_excerpt){r=t.uagb_excerpt.split(/\s+/).slice(0,i).join(" ");let e="";return a.displayPostLink&&(e=n+"px"),m.a.createElement("div",{className:"uagb-timeline-desc-content",dangerouslySetInnerHTML:{__html:r},style:{marginBottom:e}})}return null};var k=m.a.memo(f);const E=e=>{const{post:t,attributes:a}=e;let n="_self";return a.linkTarget&&(n="_blank"),a.displayPostLink?m.a.createElement("div",{className:"uagb-timeline__link_parent wp-block-button"},m.a.createElement("a",{className:"uagb-timeline__link wp-block-button__link",href:t.link,target:n,rel:"noopener noreferrer"},a.readMoreText)):null};var v=m.a.memo(E);const h=e=>{const{post:t,attributes:a}=e;let n="_self";return a.linkTarget&&(n="_blank"),m.a.createElement(m.a.Fragment,null,a.displayPostAuthor&&void 0!==t.uagb_author_info&&m.a.createElement(m.a.Fragment,null,m.a.createElement("span",{className:"dashicons-admin-users dashicons"}),m.a.createElement("a",{className:"uagb-timeline__author-link",target:n,href:t.uagb_author_info.author_link,rel:"noopener noreferrer"},t.uagb_author_info.display_name)))};var w=m.a.memo(h),y=a(27);const j=e=>{const{post:t,attributes:a,dateClass:n}=e;return m.a.createElement(m.a.Fragment,null,m.a.createElement("div",{dateTime:Object(y.format)("c",t.date_gmt),className:n,style:{color:a.dateColor}},a.displayPostDate&&t.date_gmt&&Object(y.dateI18n)(a.dateFormat,t.date_gmt)))};var N=m.a.memo(j),O=a(13);const S=e=>{const{attributes:t}=e;return m.a.createElement("div",{className:"uagb-timeline__marker uagb-timeline__out-view-icon uagb-timeline__icon-new"},Object(O.a)(t.icon))};var T,P=m.a.memo(S),x=a(11),A=a(7),L=a(14),C=a.n(L),F=a(314),z=0,I={injectType:"lazySingletonStyleTag",attributes:{id:"uagb-editor-styles"},insert:"head",singleton:!0},B={};B.locals=F.a.locals||{},B.use=function(){return z++||(T=C()(F.a,I)),B},B.unuse=function(){z>0&&!--z&&(T(),T=null)};var J=B;const M=e=>{Object(c.useLayoutEffect)(()=>(J.use(),()=>{J.unuse()}),[]);const t=(e=e.parentProps).name.replace("uagb/",""),a=Object(x.a)(),{attributes:n,className:o,latestPosts:u}=e,{isPreview:g,displayPostLink:f,postsToShow:E}=n,h=void 0!==n["timelinAlignment"+a]?n["timelinAlignment"+a]:n.timelinAlignment,y=Object(p.b)(E,"postsToShow",t);let j="";return f&&(j="uagb_timeline__cta-enable"),m.a.createElement("div",{className:i()(o,"uagb-timeline__outer-wrap","uagb-timeline__content-wrap","uagb-editor-preview-mode-"+a.toLowerCase(),"uagb-block-"+e.clientId,j,...Object(r.a)(e.attributes,a))},(()=>{if(!Array.isArray(u)||!u.length)return m.a.createElement(A.Placeholder,{icon:"admin-post",label:uagb_blocks_info.blocks["uagb/post-timeline"].title},Array.isArray(u)?Object(_.__)("No posts found."):m.a.createElement(A.Spinner,null));const t=u.length>y?u.slice(0,y):u;let r=Object(l.a)(e.attributes,0,a),o=Object(s.a)(e.attributes,0,a),c=!1;const p=uagb_blocks_info.uagb_url+"/admin/assets/preview-images/post-timeline.png";return g?m.a.createElement("img",{width:"100%",src:p,alt:""}):m.a.createElement(m.a.Fragment,null,t.map((t,u)=>("center"===h&&(c=!0,r=Object(l.a)(e.attributes,u,a),o=Object(s.a)(e.attributes,u,a)),m.a.createElement("article",{className:i()("uagb-timeline__field ",r),key:u},m.a.createElement(P,{attributes:n}),m.a.createElement("div",{className:i()(o,"uagb-timeline__events-inner-new")},m.a.createElement("div",{className:"uagb-timeline__events-inner--content"},m.a.createElement(N,{post:t,attributes:n,dateClass:"uagb-timeline__date-hide uagb-timeline__inner-date-new"}),m.a.createElement(d,{post:t,attributes:n}),m.a.createElement(b,{post:t,attributes:n}),m.a.createElement(w,{post:t,attributes:n}),m.a.createElement(k,{post:t,attributes:n}),m.a.createElement(v,{post:t,attributes:n}),m.a.createElement("div",{className:"uagb-timeline__arrow"}))),c&&m.a.createElement(m.a.Fragment,null,m.a.createElement(N,{post:t,attributes:n,dateClass:"uagb-timeline__date-new"}))))))})(),m.a.createElement("div",{className:"uagb-timeline__line"},m.a.createElement("div",{className:"uagb-timeline__line__inner"})))};t.default=m.a.memo(M)}}]);