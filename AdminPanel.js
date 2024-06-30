
function changecatfun(){
   var form = document.getElementsByClassName('changecat')[$count];
   var checkbox = document.getElementById($changecatcb);
     if(checkbox.checked == true){
          form.style.display='block';
     }
     else{
         form.style.display='none';
     }
   }
 function deletecatfun(){
   var form = document.getElementById('deletecatform');
   var checkbox = document.getElementById('deletecatcb');
   if(checkbox.checked == true){
         form.style.display='block';
     }
     else{
         form.style.display='none';
     }
}
