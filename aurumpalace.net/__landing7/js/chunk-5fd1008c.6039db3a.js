(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-5fd1008c"],{"05dd":function(t,e,o){"use strict";var a=o("9cda"),s=o.n(a);s.a},"4bf7":function(t,e,o){"use strict";o.r(e);var a=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"deposit-money block"},[o("loading",{attrs:{active:t.isLoading,"is-full-page":!1,color:"#0060f1",loader:"dots"},on:{"update:active":function(e){t.isLoading=e}}}),o("div",{staticClass:"block__title"},[t._v("Deposit money")]),o("div",{staticClass:"block__titleLine"}),t.cashierUrl?o("iframe",{attrs:{height:"400",src:t.cashierUrl,allowfullscreen:""}}):o("form",{staticClass:"registration__form",on:{submit:function(e){return e.preventDefault(),t.deposit(e)}}},[o("div",{staticClass:"block__row checkBoxRow"},[o("div",{staticClass:"checkbox"},[o("input",{directives:[{name:"model",rawName:"v-model",value:t.amount,expression:"amount"}],staticClass:"checkbox__input",attrs:{id:"deposit1",value:"50",type:"radio"},domProps:{checked:t._q(t.amount,"50")},on:{change:function(e){t.amount="50"}}}),o("label",{staticClass:"checkbox__label",attrs:{for:"deposit1"}},[o("span",{staticClass:"checkbox__text"},[t._v(t._s(t.currency)+" 50")])])]),o("div",{staticClass:"checkbox"},[o("input",{directives:[{name:"model",rawName:"v-model",value:t.amount,expression:"amount"}],staticClass:"checkbox__input",attrs:{id:"deposit2",value:"100",type:"radio"},domProps:{checked:t._q(t.amount,"100")},on:{change:function(e){t.amount="100"}}}),o("label",{staticClass:"checkbox__label",attrs:{for:"deposit2"}},[o("span",{staticClass:"checkbox__text"},[t._v(t._s(t.currency)+" 100")])])]),o("div",{staticClass:"checkbox"},[o("input",{directives:[{name:"model",rawName:"v-model",value:t.amount,expression:"amount"}],staticClass:"checkbox__input",attrs:{id:"deposit3",value:"200",type:"radio"},domProps:{checked:t._q(t.amount,"200")},on:{change:function(e){t.amount="200"}}}),o("label",{staticClass:"checkbox__label",attrs:{for:"deposit3"}},[o("span",{staticClass:"checkbox__text"},[t._v(t._s(t.currency)+" 200")])])]),o("div",{staticClass:"checkbox"},[o("input",{directives:[{name:"model",rawName:"v-model",value:t.amount,expression:"amount"}],staticClass:"checkbox__input",attrs:{id:"deposit4",value:"500",type:"radio"},domProps:{checked:t._q(t.amount,"500")},on:{change:function(e){t.amount="500"}}}),o("label",{staticClass:"checkbox__label",attrs:{for:"deposit4"}},[o("span",{staticClass:"checkbox__text"},[t._v(t._s(t.currency)+" 500")])])])]),o("div",{staticClass:"social-auth__footer",attrs:{"data-v-182ac4db":""}},[t._v("\n      OR\n    ")]),o("div",{staticClass:"block__row nameRow"},[o("v-input",{attrs:{name:"Amount ("+t.currency+")",type:"text",isError:t.$v.amount.$error},on:{change:t.updateAmount},model:{value:t.amount,callback:function(e){t.amount=e},expression:"amount"}},[o("template",{slot:"error"},[t.$v.amount.required?t._e():o("div",{staticClass:"error"},[t._v("Amount is required")])])],2)],1),o("div",{staticClass:"block__row nameRow"},[o("v-input",{attrs:{name:"Bonus code",type:"text"},on:{change:t.updateBonusCode},model:{value:t.bonusCode,callback:function(e){t.bonusCode=e},expression:"bonusCode"}})],1),o("button",{staticClass:"btn ",attrs:{type:"submit",name:"Create an account"}},[t._v("Continue")])])],1)},s=[],n=(o("8e6e"),o("456d"),o("bd86")),r=(o("96cf"),o("3b8d")),c=(o("ac6a"),o("5df3"),o("10ad"),o("1270")),i=o("318b"),u=o("fe49"),l=o("2f62"),d=o("b5ae");function p(t,e){var o=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),o.push.apply(o,a)}return o}function m(t){for(var e=1;e<arguments.length;e++){var o=null!=arguments[e]?arguments[e]:{};e%2?p(o,!0).forEach((function(e){Object(n["a"])(t,e,o[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(o)):p(o).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(o,e))}))}return t}var h=new WeakMap,b={name:"DepositMoney",data:function(){return{amount:"50",bonusCode:"",pid:"",cashierUrl:"",isLoading:!1}},validations:{amount:{required:d["required"]}},components:{"v-input":c["a"]},methods:{updateAmount:function(t){this.delayTouch(this.$v.amount),this.amount=t},updateBonusCode:function(t){this.bonusCode=t},deposit:function(){var t=Object(r["a"])(regeneratorRuntime.mark((function t(){var e,o,a,s=this;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:if(this.$v.amount.$touch(),!this.$v.amount.$error){t.next=3;break}return t.abrupt("return",0);case 3:return t.prev=3,this.isLoading=!0,e={fields:{currency:this.currency,amount:this.amount,bonusCode:this.bonusCode}},t.next=8,i["a"].userDeposit(e);case 8:o=t.sent,this.pid=o.kwargs.pid,this.cashierUrl=o.kwargs.cashierUrl,t.next=18;break;case 13:t.prev=13,t.t0=t["catch"](3),a=t.t0.kwargs.desc||JSON.stringify(t.t0),this.$notify({group:"app",type:"error",text:a}),console.error("EM Deposit Error: ".concat(a));case 18:return t.prev=18,this.isLoading=!1,u["a"].depositStatusChanged((function(t){console.log("success"),console.log(t)}),(function(t){console.log("cancel"),console.log(t),s.pid="",s.cashierUrl=""}),(function(t){console.log("error"),console.log(t)}),{pid:this.pid}),t.finish(18);case 22:case"end":return t.stop()}}),t,this,[[3,13,18,22]])})));function e(){return t.apply(this,arguments)}return e}(),delayTouch:function(t){t.$reset(),h.has(t)&&clearTimeout(h.get(t)),h.set(t,setTimeout(t.$touch,1e3))}},computed:m({},Object(l["c"])({currency:"getUserCurrency"}))},v=b,f=(o("05dd"),o("2877")),_=Object(f["a"])(v,a,s,!1,null,"5515176a",null);e["default"]=_.exports},"9cda":function(t,e,o){}}]);
//# sourceMappingURL=chunk-5fd1008c.6039db3a.js.map