var H=(r,l)=>()=>(l||r((l={exports:{}}).exports,l),l.exports);var N=H((S,f)=>{(function(r){typeof define=="function"&&define.amd?define(["jquery"],r):typeof f=="object"&&f.exports?f.exports=r(require("jquery")):r(jQuery)})(function(r){var l=Array.prototype.slice,w=Array.prototype.splice,h={topSpacing:0,bottomSpacing:0,className:"is-sticky",wrapperClassName:"sticky-wrapper",center:!1,getWidthFrom:"",widthFromWrapper:!0,responsiveWidth:!1,zIndex:"inherit"},g=r(window),E=r(document),p=[],y=g.height(),u=function(){for(var t=g.scrollTop(),n=E.height(),i=n-y,o=t>i?i-t:0,c=0,v=p.length;c<v;c++){var e=p[c],W=e.stickyWrapper.offset().top,x=W-e.topSpacing-o;if(e.stickyWrapper.css("height",e.stickyElement.outerHeight()),t<=x)e.currentTop!==null&&(e.stickyElement.css({width:"",position:"",top:"","z-index":""}),e.stickyElement.parent().removeClass(e.className),e.stickyElement.trigger("sticky-end",[e]),e.currentTop=null);else{var s=n-e.stickyElement.outerHeight()-e.topSpacing-e.bottomSpacing-t-o;if(s<0?s=s+e.topSpacing:s=e.topSpacing,e.currentTop!==s){var d;e.getWidthFrom?(padding=e.stickyElement.innerWidth()-e.stickyElement.width(),d=r(e.getWidthFrom).width()-padding||null):e.widthFromWrapper&&(d=e.stickyWrapper.width()),d==null&&(d=e.stickyElement.width()),e.stickyElement.css("width",d).css("position","fixed").css("top",s).css("z-index",e.zIndex),e.stickyElement.parent().addClass(e.className),e.currentTop===null?e.stickyElement.trigger("sticky-start",[e]):e.stickyElement.trigger("sticky-update",[e]),e.currentTop===e.topSpacing&&e.currentTop>s||e.currentTop===null&&s<e.topSpacing?e.stickyElement.trigger("sticky-bottom-reached",[e]):e.currentTop!==null&&s===e.topSpacing&&e.currentTop<s&&e.stickyElement.trigger("sticky-bottom-unreached",[e]),e.currentTop=s}var k=e.stickyWrapper.parent(),b=e.stickyElement.offset().top+e.stickyElement.outerHeight()>=k.offset().top+k.outerHeight()&&e.stickyElement.offset().top<=e.topSpacing;b?e.stickyElement.css("position","absolute").css("top","").css("bottom",0).css("z-index",""):e.stickyElement.css("position","fixed").css("top",s).css("bottom","").css("z-index",e.zIndex)}}},m=function(){y=g.height();for(var t=0,n=p.length;t<n;t++){var i=p[t],o=null;i.getWidthFrom?i.responsiveWidth&&(o=r(i.getWidthFrom).width()):i.widthFromWrapper&&(o=i.stickyWrapper.width()),o!=null&&i.stickyElement.css("width",o)}},a={init:function(t){return this.each(function(){var n=r.extend({},h,t),i=r(this),o=i.attr("id"),c=o?o+"-"+h.wrapperClassName:h.wrapperClassName,v=r("<div></div>").attr("id",c).addClass(n.wrapperClassName);i.wrapAll(function(){if(r(this).parent("#"+c).length==0)return v});var e=i.parent();n.center&&e.css({width:i.outerWidth(),marginLeft:"auto",marginRight:"auto"}),i.css("float")==="right"&&i.css({float:"none"}).parent().css({float:"right"}),n.stickyElement=i,n.stickyWrapper=e,n.currentTop=null,p.push(n),a.setWrapperHeight(this),a.setupChangeListeners(this)})},setWrapperHeight:function(t){var n=r(t),i=n.parent();i&&i.css("height",n.outerHeight())},setupChangeListeners:function(t){if(window.MutationObserver){var n=new window.MutationObserver(function(i){(i[0].addedNodes.length||i[0].removedNodes.length)&&a.setWrapperHeight(t)});n.observe(t,{subtree:!0,childList:!0})}else window.addEventListener?(t.addEventListener("DOMNodeInserted",function(){a.setWrapperHeight(t)},!1),t.addEventListener("DOMNodeRemoved",function(){a.setWrapperHeight(t)},!1)):window.attachEvent&&(t.attachEvent("onDOMNodeInserted",function(){a.setWrapperHeight(t)}),t.attachEvent("onDOMNodeRemoved",function(){a.setWrapperHeight(t)}))},update:u,unstick:function(t){return this.each(function(){for(var n=this,i=r(n),o=-1,c=p.length;c-- >0;)p[c].stickyElement.get(0)===n&&(w.call(p,c,1),o=c);o!==-1&&(i.unwrap(),i.css({width:"",position:"",top:"",float:"","z-index":""}))})}};window.addEventListener?(window.addEventListener("scroll",u,!1),window.addEventListener("resize",m,!1)):window.attachEvent&&(window.attachEvent("onscroll",u),window.attachEvent("onresize",m)),r.fn.sticky=function(t){if(a[t])return a[t].apply(this,l.call(arguments,1));if(typeof t=="object"||!t)return a.init.apply(this,arguments);r.error("Method "+t+" does not exist on jQuery.sticky")},r.fn.unstick=function(t){if(a[t])return a[t].apply(this,l.call(arguments,1));if(typeof t=="object"||!t)return a.unstick.apply(this,arguments);r.error("Method "+t+" does not exist on jQuery.sticky")},r(function(){setTimeout(u,0)})})});export default N();