

const cardCounter = document.getElementsByClassName('card-counter')
// console.log(cardCounter)
for (let i = 0; i < cardCounter.length; i++) {
    const element = cardCounter[i];
    console.log(element.getElementsByClassName('minus'))
    const minus = element.getElementsByClassName('minus')[0]
    const plus = element.getElementsByClassName('plus')[0]
    const st = element.getElementsByClassName('st')[0]
    const firstbtn = element.getElementsByClassName('first-btn')[0]
    minus.style.display = 'none' 
    st.style.display = 'none'
    // firstbtn.style.display = 'none'
    plus.style.display = 'none'
    element.style.backgroundColor = 'white' 

    if(firstbtn){
        firstbtn.addEventListener('click', ()=>{
            
            st.value = parseInt(st.value) + 1
            if(minus.style.display == 'none'){
                minus.style.display = 'block'
                firstbtn.style.display = 'none'
                element.style.backgroundColor = 'rgb(232, 232, 232)'
                plus.style.display = 'block'

            }
            if(st.style.display == 'none'){
                st.style.display = 'block'
            }   
        })

        
    }   


    if(minus){
        minus.addEventListener('click', ()=>{
            
            if(st.value < 2){
                st.value = 0
                minus.style.display = 'none' 
                st.style.display = 'none' 
                element.style.backgroundColor = 'white'
                firstbtn.style.display = 'block'
                plus.style.display = 'none'
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

    
}



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

// ---------------navbar--------------


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

// ---------------load more--------------

$(document).ready(function(){
    $(".cards") .slice(0, 6).fadeIn();
    $(".load-more").click(function(){
        $(".cards").slice(0, 16).fadeIn();
        $(this).fadeOut();
    });
});

// $("cards") .slice(0, 6).show();
// $(".load-more").on("click", function(){
//     $(".cards:hidden").slice(0, 16).fadeIn();

//     if($("cards:hidden").length ==0){
//         $(".load-more").fadeOut();
//     }
// });
