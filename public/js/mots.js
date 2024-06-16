   
let mot=document.querySelector(".mot-change");

  function typewritterEffect(){
   const tab=["Recyclage","proprete","restauration","sensibilisation"]

   let wordcount=0;
   let lettercount=0;
   
   let currentText="";
   let currentWord="";

   let timeout=300;
   let isDeleting=false;

   function type(){
      if(wordcount===tab.length){
         wordcount=0;
      }

      currentWord=tab[wordcount];

      if(isDeleting){
         currentText=currentWord.slice(0,--lettercount);
      }else{
         currentText=currentWord.slice(0,++lettercount);
      }
      mot.textContent=currentText;

      timeout= isDeleting ? 200 : 300;

      if(!isDeleting && currentText.length===currentWord.length){
         timeout=2000;
         isDeleting=true;
      }else if(isDeleting && currentText.length===0){
         timeout=1000;
         isDeleting=false;
         wordcount++;
      }

      setTimeout(type, timeout);
   }
   type();
  }
  typewritterEffect();