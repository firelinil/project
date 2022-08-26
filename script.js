'use strict'

     const btns = document.querySelectorAll(".btn"); 
     const modal = document.getElementById('modal');
     const close = document.getElementById('close_btn');
     const submit = document.querySelector(".submit"); 
     
     
     btns.forEach(btn => {
        btn.addEventListener('click', function() {
           modal.classList.add('modal_opened')        
        })
     })
     
     close.addEventListener('click', function() {
        modal.classList.remove('modal_opened') 
     })
     
     submit.addEventListener('click', async evt => {
     
        evt.preventDefault()   
     
        const formData = new FormData()
        formData.append('name', document.querySelector('#name').value)
        formData.append('phone', document.querySelector('#phone').value)
             
     
        let response = await fetch('serv.php', {
            method: 'POST',
            body: formData,
        });
       
        let result = await response.json();
        if(result.res =='all is OK'){
         modal.classList.remove('modal_opened') //закрываем модалку
         alert(Данные успешно отправлены! Вы можете закрыть это сообщение.)
        }
      })
