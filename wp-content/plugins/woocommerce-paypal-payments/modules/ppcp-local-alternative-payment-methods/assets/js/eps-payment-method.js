(()=>{"use strict";const e=window.wc.wcBlocksRegistry;function t(e){var t=e.config,n=e.components.PaymentMethodIcons;return React.createElement("div",null,React.createElement(n,{icons:[t.icon],align:"right"}))}var n=wc.wcSettings.getSetting("ppcp-eps_data");(0,e.registerPaymentMethod)({name:n.id,label:React.createElement("div",{dangerouslySetInnerHTML:{__html:n.title}}),content:React.createElement(t,{config:n}),edit:React.createElement("div",null),ariaLabel:n.title,canMakePayment:function(){return!0},supports:{features:n.supports}})})();
//# sourceMappingURL=eps-payment-method.js.map