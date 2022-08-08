"use strict";(self.webpackChunkgravityforms=self.webpackChunkgravityforms||[]).push([[289],{2243:function(e,t,n){n.d(t,{Z:function(){return h}});var r=n(1930),a=n(8821),s=n(5169),o=n(2340),i=n.n(o),c=function(){function e(t){(0,a.Z)(this,e),this.handlers=[],this.name=t;for(var n=arguments.length,r=new Array(n>1?n-1:0),s=1;s<n;s++)r[s-1]=arguments[s];this.args=r}return(0,s.Z)(e,[{key:"subscribe",value:function(e,t){if(Array.isArray(e))for(var n=0;n<e.length;n++)this.handlers.push({handler:e[n],scope:t});else this.handlers.push({handler:e,scope:t})}},{key:"unsubscribe",value:function(e){this.handlers=this.handlers.filter((function(t){return t!==e&&t}))}},{key:"fire",value:function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return!!this.handlers.length&&(this.handlers.forEach((function(e){var n;(n=e.handler).call.apply(n,[e.scope].concat(t))})),!0)}}]),e}();function u(e,t){var n="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=function(e,t){if(e){if("string"==typeof e)return f(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?f(e,t):void 0}}(e))||t&&e&&"number"==typeof e.length){n&&(e=n);var r=0,a=function(){};return{s:a,n:function(){return r>=e.length?{done:!0}:{done:!1,value:e[r++]}},e:function(e){throw e},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var s,o=!0,i=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return o=e.done,e},e:function(e){i=!0,s=e},f:function(){try{o||null==n.return||n.return()}finally{if(i)throw s}}}}function f(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}var h=function(){function e(){(0,a.Z)(this,e),this.events=[]}return(0,s.Z)(e,[{key:"destroyEvents",value:function(){this.events=[]}},{key:"add",value:function(e){this.events.push(e)}},{key:"get",value:function(e){var t,n=!1,r=u(this.events);try{for(r.s();!(t=r.n()).done;){var a=t.value;if(e===a.name){n=a;break}}}catch(e){r.e(e)}finally{r.f()}return!1===n&&(n=new c(e),this.add(n)),n}},{key:"addListener",value:function(e,t,n){this.get(e).subscribe(t,n)}},{key:"addListeners",value:function(e,t){var n=this;e.forEach((function(e){var r=e.scope?e.scope:t;if(Array.isArray(e.name)){var a,s=u(e.name);try{for(s.s();!(a=s.n()).done;){var o=a.value;n.addListener(o,e.handler,r)}}catch(e){s.e(e)}finally{s.f()}}else n.addListener(e.name,e.handler,r)}))}},{key:"trigger",value:function(e){var t=this.get(e),n=[].slice.call(arguments);return n.shift(),t.fire.apply(t,(0,r.Z)(n)),i().doAction.apply(i(),["gform_form_saving_action_"+e.replace(/[A-Z]/g,(function(e){return"_".concat(e.toLowerCase())})),window.form,t].concat((0,r.Z)(n))),n.push(t),n.push(window.form),i().applyFilters.apply(i(),["gform_form_saving_filter_"+e.replace(/[A-Z]/g,(function(e){return"_".concat(e.toLowerCase())}))].concat((0,r.Z)(n)))}}]),e}()},5289:function(e,t,n){n.d(t,{Z:function(){return M}});var r=n(6655),a=n(8950),s=n(8821),o=n(5169),i=n(7945),c=n.n(i),u=n(5311),f=n.n(u),h=n(9608),l=n.n(h),d=n(2243),p=n(7169),v=n(4203),g=n(4017),y=n(1583);function m(e,t,n){var a=new window.FormData;return function e(t,s){if(!function(e){return Array.isArray(n)&&n.some((function(t){return t===e}))}(s))if(s=s||"",t instanceof window.File)a.append(s,t);else if(Array.isArray(t))for(var o=0;o<t.length;o++)e(t[o],s+"["+o+"]");else if("object"===(0,r.Z)(t)&&t)for(var i in t)t.hasOwnProperty(i)&&e(t[i],""===s?i:s+"."+i);else null!=t&&a.append(s,t)}(e,t),a}var b=n(2124),w=n(4506),S=n.n(w),O=n(7293),k=n.n(O),j=n(5212),Z=n.n(j),x=n(2577),A=function e(t){return Object.entries(t).map((function(t){var n=(0,x.Z)(t,2),a=n[0],s=n[1];return[a,s&&"object"===(0,r.Z)(s)?e(s):s]})).reduce((function(e,t){var n=(0,x.Z)(t,2),r=n[0],a=n[1];return null==a||(e[r]=a),e}),{})};function _(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function P(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?_(Object(n),!0).forEach((function(t){(0,p.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):_(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function E(e){return J.apply(this,arguments)}function J(){return J=(0,a.Z)(c().mark((function e(t){var n,r,a,s,o,i,u,f,h,l,d,p,w=arguments;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=w.length>1&&void 0!==w[1]?w[1]:{},r=w.length>2&&void 0!==w[2]?w[2]:{},a=P({method:"GET"},r),s=(0,v.Z)(["body"],a),o="GET"!==s.method&&"HEAD"!==s.method,i=s.baseUrl,o&&(u=r.body?r.body:{},n[t].nonce&&(u._ajax_nonce=n[t].nonce),n[t].action&&(u.action=n[t].action),s.body=m(u)),s.json&&(s.body=JSON.stringify(s.json)),f=s.params||{},!o&&n[t].nonce&&(f._ajax_nonce=n[t].nonce),!o&&n[t].action&&(f.action=n[t].action),f&&!(0,g.Z)(f)&&(h=A(f),l=(0,b.stringify)(h,{arrayFormat:"bracket"}),i="".concat(i,"?").concat(l)),d=s.headers?P({},s.headers):{},console.info("Fetching url: ".concat(i)),console.info("with options",P(P({},s),{},{body:s.body})),console.info("and headers: ",d),p=Date.now(),e.abrupt("return",window.fetch(i,P(P({},s),{},{headers:d})).then((function(e){return e.ok?e.text().then((function(n){try{var r=JSON.parse(n),a=Date.now()-p;return console.info("Data for ".concat(t," in ").concat(a,"ms:"),r),{data:r,status:e.status,totalPages:e.headers.get("x-wp-totalpages"),totalPosts:e.headers.get("x-wp-total")}}catch(t){var s=k()(S()(Z()(n))),o=new Error("Invalid server response. ".concat(s));throw o.detail={url:i,data:s,status:e.status,error:t,text:n},o}})):(0,y.Z)(e.headers.get("Content-Type"),"application/json")?e.text().then((function(n){try{var r=JSON.parse(n);return console.info("Data for ".concat(t,":"),r),{data:r,status:e.status}}catch(t){var a=k()(S()(Z()(n))),s=new Error("Invalid server response. ".concat(a));throw s.detail={url:i,data:a,status:e.status,error:t,text:n},s}})):e.text().then((function(t){var n=k()(S()(Z()(t))),r=new Error("Unknown server response. ".concat(n));throw r.detail={url:i,data:n,status:e.status},r}))})).catch((function(e){return console.info(JSON.stringify(e)),console.info(e.detail),{error:e}})));case 18:case"end":return e.stop()}}),e)}))),J.apply(this,arguments)}var M=function(){function e(t,n){(0,s.Z)(this,e),this.config=t,this.formJSONString="formJSONString"in n?n.formJSONString:"",this.form="form"in n?n.form:t.data.form,this.eventsManager="events"in n?n.events:new d.Z,this.endpoints="endpoints"in n?n.endpoints:t.endpoints,this.endpointKey="endpointKey"in n?n.endpointKey:"admin_save_form",this.response={},this.saveInProgress=!1}var t;return(0,o.Z)(e,[{key:"addEndPoint",value:function(e){this.config.endpoints.push(e)}},{key:"setForm",value:function(e){this.form=e}},{key:"getFormEscapedJsonString",value:function(){return""===this.formJSONString&&(this.formJSONString=f().toJSON(this.form)),this.formJSONString.replace(/"/g,'\\"').replace(/\\n/g,"\\\\n").replace(/\\r/g,"\\\\r").replace(/\\t/g,"\\\\t")}},{key:"save",value:(t=(0,a.Z)(c().mark((function e(){var t,n,a,s,o,i,u,f,h,d,p;return c().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t=!1,!this.saveInProgress){e.next=3;break}return e.abrupt("return",!1);case 3:if(this.eventsManager.trigger("SaveBegan"),n=this.getFormEscapedJsonString(),"object"===(0,r.Z)(this.form)&&"id"in this.form!=0&&""!==n){e.next=9;break}this.eventsManager.trigger("SaveFormDataMissing",this.form),e.next=16;break;case 9:return s={baseUrl:l(),method:"POST",body:{data:n,form_id:this.form.id}},this.eventsManager.trigger("SaveInProgress",s),e.next=13,E(this.endpointKey,this.config.endpoints,s);case 13:if("error"in(o=e.sent)&&500!==o.status&&"detail"in o.error&&"text"in o.error.detail&&(i=o.error.detail.text,u=this.config.data.json_containers[0],f=this.config.data.json_containers[1],i.indexOf(u)>=0&&i.indexOf(f)>0)){h=i.substring(i.indexOf(u)-2,i.indexOf(f)+f.length+4);try{h=JSON.parse(h),d=!(!(d=h.status)||"success"!==d&&!0!==d),h.success=d,p={data:h,success:d},o.data=p,o.success=d}catch(e){this.eventsManager.trigger("SaveRequestFailed",o)}}null!=o&&null!==(a=o.data)&&void 0!==a&&a.success?(this.response=o.data,this.handleSuccessfulRequest(),t=!0):(this.eventsManager.trigger("SaveResponseMalformed",o),t=!1);case 16:return this.eventsManager.trigger("SaveCompleted",this.form),e.abrupt("return",t);case 18:case"end":return e.stop()}}),e,this)}))),function(){return t.apply(this,arguments)})},{key:"handleSuccessfulRequest",value:function(){return"data"in this.response==0||"object"!==(0,r.Z)(this.response.data)||Array.isArray(this.response.data)||null===this.response.data?(this.eventsManager.trigger("SaveResponseMalformed",this.response),!1):!("status"in this.response.data)||!0!==this.response.data.status&&"success"!==this.response.data.status?(this.eventsManager.trigger("SaveFailed",this.response.data,this.form),!1):(this.eventsManager.trigger("SaveSucceeded",this.response),!0)}}]),e}()}}]);