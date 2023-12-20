import { stdio } from "./../lib/spark/module/stdio.js";

console.log('script js active');
var obj = {
  'next': 'tottlae auc kjacs sakbc',
  'output': 'dhwuoad ouasc oasc akbcv',
}
var std = new stdio();
std.test();


document.addEventListener('DOMContentLoaded',function () {
    var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    var ids = document.querySelector('#sms');
    if (clicks) {
        clicks.forEach(function(Element){
           Element.addEventListener('click', clicked); 
        });
    }
    let options = {
        method: 'POST',
        headers:{
           'Content-Type': 'Applications/json',
           'X-CSRF-Token': csrfToken,
        },
    }
    var sms = std.fetchData('/mms/data',options);
    sms.then(result=>{
        if(result.status){
            var data = result.data;
            var nextLav = ``;
            for(var i = 0; i < data.length; i++){
                nextLav += `<a href="#" class="dropdown-item">
                  <div class="d-flex align-items-center">
                      <div class="ms-2">
                          <h6 class="fw-normal mb-0">`+data[i].name+` send you a message</h6>
                          <small>`+data[i].time+`</small>
                      </div>
                  </div>
              </a>`
            }
            ids.innerHTML=nextLav;
        }else{
            if(ids){
                ids.innerHTML = 'sms faills';
            }
        }
    })
});
var clicks = document.querySelectorAll('#click');
function clicked(e) {
  var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
  var sl = e.target.getAttribute('data-id');
  var edu = e.target.getAttribute('data-type');
  var data = {
      'sl': sl,
  };
  let options = {
    method: 'POST',
    headers:{
      'Content-Type': 'Applications/json',
      'X-CSRF-Token': csrfToken,
    },
    'data': data,
  }
    if(edu){
     switch(edu){
      case 'edu':
          var led = std.fetchData('/delete/'+edu+'/'+sl,options);
          break;
      case 'user':
          var led = std.fetchData('/delete/'+edu+'/'+sl,options);
          break;
      default:
          alert('request Faill check error');
          break;
     }
    }
    if(led){
        led.then(result=>{
            if(result.status){
               e.target.parentElement.parentElement.remove();
             } else{
               alert('request Faill check error');
           }
        });
    }
}


