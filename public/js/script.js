const hamburger=document.querySelector(".hamburger");
const navbar=document.querySelector(".navbars");
const list=document.querySelectorAll("li")

hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle("active");
   navbar.classList.toggle("tif");
 
})

list.forEach(lien=>lien.addEventListener("click",()=>{
        hamburger.classList.remove('active');
        navbar.classList.remove('tif');
    })
)

let i=0
const cart=document.querySelectorAll("#cart");
let indice=document.querySelector(".indice")

cart.forEach(bouton=>{
    bouton.addEventListener('click',()=>{
        i++;
        indice.textContent=i;
        const productId = this.getAttribute('data-id');
        const productName = this.getAttribute('data-name');
        const productImage = this.getAttribute('data-image');
        const productPrice = parseFloat(this.getAttribute('data-price'));
    });
});



