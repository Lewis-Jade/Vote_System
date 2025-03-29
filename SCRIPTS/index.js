



const getButton = document.getElementById('btn');

const   cardBox = document.getElementById('rotateCard');
const signBtn = document.getElementById('btn-signup');

const section = document.getElementById('section')


getButton.addEventListener("click",  function(){
   
    cardBox.classList.add('rotate');
    section.style.backgroundColor = "rgba(233, 67, 17, 0.36)";

});


signBtn.onclick = function(){

       cardBox.classList.remove('rotate');
       section.style.backgroundColor = "";


}



