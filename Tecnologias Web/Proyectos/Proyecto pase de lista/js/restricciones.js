 
function matricul(e){ // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[-0-9\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
 } 
 function numeros(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
 } 
 function letras(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[A-Za-zñÑ'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
} 
 function ambos(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9A-Za-zñÑ'áéíóúÁÉÍÓÚàèìòùÀÈÌÒÙâêîôûÂÊÎÔÛÑñäëïöüÄËÏÖÜ-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
  //especial validaction
 function personal(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9A-Za-zñÑ-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 
   function algo(e) { // 1
   tecla = (document.all) ? e.keyCode : e.which; // 2
   if (tecla==8) return true; // 3
   if (tecla==9) return true; // 3
   if (tecla==11) return true; // 3
   patron = /[0-9%-\s\t]/; // 4
   te = String.fromCharCode(tecla); // 5
   return patron.test(te); // 6
  } 

