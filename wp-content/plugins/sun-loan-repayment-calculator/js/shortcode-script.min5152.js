window.onload=function(){function e(e){e.addEventListener("input",function(t){let o=t.target.value.replace(/[^\d.]/g,"");if(o){let a=e.getAttribute("data-prefix-val"),l=e.getAttribute("data-postfix-val");o=(a||"")+o+(l||""),l&&t.target.selectionStart===t.target.value.length&&setTimeout(function(){t.target.selectionStart-=2,t.target.selectionEnd-=2},1)}t.target.value=o,a.value&&l.value&&n.value?r.disabled=!1:r.disabled=!0})}function t(e){return e.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}const a=document.querySelector('#slrc-loan-repayment-calculator input[name="loanAmount"]'),l=document.querySelector('#slrc-loan-repayment-calculator input[name="loanTerm"]'),n=document.querySelector('#slrc-loan-repayment-calculator input[name="interestRate"]'),r=document.querySelector('#slrc-loan-repayment-calculator input[name="calculate"]');e(a),e(l),e(n),r.addEventListener("click",function(e){let r=parseFloat(a.value.replace(/[^\d.]/g,"")),o=parseFloat(l.value.replace(/[^\d.]/g,"")),c=parseFloat(n.value.replace(/[^\d.]/g,""));if(isNaN(r)||isNaN(o)||isNaN(c))return;if(!r||!o||!c)return;let u=c/12/100,i=r*(u*Math.pow(1+u,o))/(Math.pow(1+u,o)-1),d=i*o,s=d-r;i&&(i="$"+t(Math.round(i)),document.querySelector("#slrc-loan-repayment-calculator #slrc-minimum-monthly-payment").innerText=i),d&&(d="$"+t(Math.round(d)),document.querySelector("#slrc-loan-repayment-calculator #slrc-total-amount-paid").innerText=d),s&&(s="$"+t(Math.round(s)),document.querySelector("#slrc-loan-repayment-calculator #slrc-total-interest-paid").innerText=s)})};