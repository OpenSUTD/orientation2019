window.addEventListener("DOMContentLoaded", function(){
  var inputButtons = Array.from(document.querySelectorAll('.guess_password_btn'));
  inputButtons.forEach(function(inputBtn, pos){
    inputBtn.addEventListener("click", function(){
      let guessed_password = document.querySelectorAll('.guess_password')[pos].value.trim();
      console.log(guessed_password);
      fetch('/api/try_puzzle/'+(pos+1).toString(), { 
        method: "POST",
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ password: guessed_password })
      }).then(response => response.text())
      .then(function(response){
        let message_box = document.querySelectorAll('.message_box')[pos];
        message_box.innerHTML = response;
      });
    });
  });
});