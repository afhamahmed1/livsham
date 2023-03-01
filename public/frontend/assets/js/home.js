var i=1;

// $(function(){
//     $('.plus').click(function(){
//         i=parseInt ($('.st').val());
//         i=i+1;
//         $('.st').val(i);
//     })

//     $('.minus').click(function(){
//         i=parseInt ($('.st').val());
//         i=i-1;

//         if(i==-1){
//             i=0;
//         }
//         $('.st').val(i);
//     })
// })

const cardCounter = document.getElementsByClassName('card-counter')
// console.log(cardCounter)
for (let i = 0; i < cardCounter.length; i++) {
    const element = cardCounter[i];
    console.log(element.getElementsByClassName('minus'))
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    minus.style.display = 'none' 
    st.style.display = 'none'
    element.style.backgroundColor = 'white' 
    if(minus){
        minus.addEventListener('click', ()=>{
            
            if(st.value < 2){
                st.value = 0
                minus.style.display = 'none' 
                st.style.display = 'none' 
                element.style.backgroundColor = 'white'
            }else{st.value = st.value - 1}
        })

        
    }   
    if(plus){
        plus.addEventListener('click', ()=>{
            st.value = parseInt(st.value) + 1
            if(minus.style.display == 'none'){
                minus.style.display = 'block'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
            }
            if(st.style.display == 'none'){
                st.style.display = 'block'
            }
        })
    }

    // console.log(element.getElementsByClassName('plus'))
    // console.log(element.getElementsByClassName('st'))
    
}


// var data=0;
// document.getElementById("root").innerText=data;
// function decrement(){
//     data=data-1;
//     document.getElementById("root").innerText=data;
// }

// function increment(){
//     data=  data+1;
//     document.getElementById("root").innerText=data;
// }


// ------------preview-----------

let previewContainer = document.querySelector('.products-preview');
let previewBox = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.home-cards .card-image').forEach(product =>{
    product.onclick = () =>{
        previewContainer.style.display = 'flex'
        let name = product.getAttribute('data-name');
        previewBox.forEach(preview =>{
            let target = preview.getAttribute('data-target');
            if(name == target){
                preview.classList.add('active');
            }
        })
    }
});


previewBox.forEach(close =>{
    close.querySelector('.bi-x').onclick = () =>{
        close.classList.remove('active');
        previewContainer.style.display = 'none'
    };
});



// ---------------filter--------------

var open = document.getElementById("open");

function showMenu(){
    open.style.left = "0";
}
function showMenu(){
    open.style.left = "-700px";
}














const chc = document.querySelector('#shopping-cart-checkbox');
var element = document.getElementById("SideNav");
function FuncClick(){
    if(chc.checked){
        element.classList.remove("-left-[17rem]");
        element.classList.add("left-0");
    }else{
        element.classList.remove("left-0");
        element.classList.add("-left-[17rem]");
        }
}
const chka = document.querySelector('#Shopping-cartbtn');
var element2 = document.getElementById("Shopping-cart-menu");
function FuncClick2(){
    if(chka.checked){
        element2.classList.add("shop-visible");
        element2.classList.remove("hide-visible");
    }else{
        element2.classList.add("hide-visible");
        element2.classList.remove("shop-visible");
        }
}


var count = 1;
function Decrement(element){
    var x = element.nextElementSibling;
    count = x.innerHTML;
    if(count > 1){
        count--;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value',count);
      
        cartfun();
    }
};
function Increment(element){
    var x = element.previousElementSibling;
    count = x.innerHTML;
    if(count < 10){
        count++;
        x.innerHTML = count;
        let cart_count_input = element.parentElement.querySelector("#cart_count_input");
        cart_count_input.setAttribute('value',count);
        cartfun();
    } 
};