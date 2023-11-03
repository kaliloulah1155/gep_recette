var e=true;
function changer(){
   if(e){
      document.getElementById('pass').setAttribute("type", "text"); 
      document.getElementById('eye').src="/assets_front/images/logo/show.png";

      
      e=false;
   }else{
      document.getElementById('pass').setAttribute("type", "password"); 
      document.getElementById('eye').src="/assets_front/images/logo/oeil.png";

      
      e=true;
   }
}


var f=true;
function changerConf(){
   if(f){
     
      document.getElementById('passConf').setAttribute("type", "text"); 
      document.getElementById('eyeConf').src="/assets_front/images/logo/show.png";
      f=false;
   }else{
      
      document.getElementById('passConf').setAttribute("type", "password"); 
      document.getElementById('eyeConf').src="/assets_front/images/logo/oeil.png";
      f=true;
   }
}

         
 




// // Dark mode


//  // Obtenir l'élément theme switcher.
//  const themeSwitcher = document.querySelector('.theme-switcher');
      
//  // Obtenir les boutons mode sombre et mode clair.
//  const darkModeButton = document.querySelector('#dark-mode-button');
//  const lightModeButton = document.querySelector('#light-mode-button');

//  // Ajouter des écouteurs d'événements aux boutons.
//  darkModeButton.addEventListener('click', () => {
//    // Définir l'élément body en mode sombre.
//    document.body.classList.add('dark-mode');
//  });

//  lightModeButton.addEventListener('click', () => {
//    // Définir l'élément body en mode clair.
//    document.body.classList.remove('dark-mode');
//  });

//  // Vérifier si l'utilisateur a un thème préféré.
//  const preferredTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;

//  // Définir l'élément body en fonction du thème préféré de l'utilisateur.
//  if (preferredTheme) {
//    document.body.classList.add('dark-mode');
//  } else {
//    document.body.classList.remove('dark-mode');
//  }
