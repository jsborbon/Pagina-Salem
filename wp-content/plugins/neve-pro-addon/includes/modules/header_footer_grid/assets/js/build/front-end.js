(()=>{function e(){const e=document.querySelectorAll(".header--row.hide-on-mobile.is_sticky"),o=document.querySelectorAll(".header--row.hide-on-desktop.is_sticky");(e.length>0||o.length>0)&&(!function(e=!1,t=!1){let o=document.querySelector(".sticky-header-placeholder");const s=document.querySelector(".hfg_header"),r=document.querySelector(".neve-transparent-header");null===o&&null===r&&(o=document.createElement("div"),o.classList.add("sticky-header-placeholder"),s.parentNode.insertBefore(o,s.nextSibling)),!e&&o&&o.classList.add("hide-on-mobile","hide-on-tablet"),!t&&o&&o.classList.add("hide-on-desktop"),e&&s.classList.add("has-sticky-rows--mobile"),t&&s.classList.add("has-sticky-rows--desktop"),null!==o&&(o.style.height=s.offsetHeight+"px")}(o.length>0,e.length>0),t(document.querySelector(".hfg_header"),document.querySelector("header.header"),document.querySelector(".sticky-header-placeholder")))}function t(e,t,s){new IntersectionObserver((t=>{if(!0===t[0].isIntersecting)return e.classList.remove("is-stuck"),o(e,s,!1),!1;e.classList.add("is-stuck"),o(e,s)}),{rootMargin:"20px 0px 25px 0px"}).observe(t)}function o(e,t,o=!0){const s=e.querySelectorAll(".header--row");let r=0;const c=!e.classList.contains("has-sticky-rows--desktop"),i=!e.classList.contains("has-sticky-rows--mobile");s.forEach((e=>{const t=e.querySelector(".header--row-inner").clientHeight,s="desktop"===e.dataset.showOn;if(!(c&&s||i&&!s))return o?e.classList.contains("is_sticky")?(e.style.height=`${t}px`,void(r+=e.classList.contains("is_sticky_on_scroll")?0:t)):void(e.style.height=0):void(e.classList.contains("is_sticky_on_scroll")?e.style.height=0:(r+=t,e.style.height=`${t}px`));e.style.height=`${t}px`})),t&&(t.style.height=`${r}px`)}function s(){document.querySelectorAll(".footer--row.is_sticky").length>0&&(!function(){let e=document.querySelector(".sticky-footer-placeholder");const t=document.querySelector(".hfg_footer");null===e&&(e=document.createElement("div"),e.classList.add("sticky-footer-placeholder"),t.parentNode.insertBefore(e,t.nextSibling)),t.classList.add("has-sticky-rows"),e.style.height=t.offsetHeight+"px"}(),t(document.querySelector(".hfg_footer"),document.querySelector("footer")))}let r;window.addEventListener("load",(function(){e(),s()})),window.addEventListener("selective-refresh-content-rendered",(function(t){if("hfg_header_layout_partial"===t.detail){const t=document.querySelector(".sticky-header-placeholder"),o=document.querySelector(".hfg_header");t&&t.remove(),o.classList.remove("has-sticky-rows--mobile","has-sticky-rows--desktop"),e()}if("hfg_footer_layout_partial"===t.detail){const e=document.querySelector(".hfg_footer"),t=document.querySelector(".sticky-footer-placeholder");t&&t.remove(),e.classList.remove("has-sticky-rows"),s()}})),window.addEventListener("resize",(function(){clearTimeout(r),r=setTimeout((function(){e(),s()}),500)}))})();