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




