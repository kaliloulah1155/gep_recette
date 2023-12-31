@extends('master')

@section('title','Inscription')
@section('title_content','Inscription')

@section('content')

<div class="full_container d-flex justify-content-center">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{asset('assets_front/images/logo/logo.png')}}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <div class="theme">

                     </div>
                     <form id="reponse_user">
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Nom</label>
                                <input type="text" name="nom" id="nom" placeholder="Nom" />
                             </div>
                             <div class="field">
                                <label class="label_field">Prenom</label>
                                <input type="text" name="prenom" id="prenom" placeholder="Prenom" />
                             </div>
                           <div class="field">
                              <label class="label_field"> Adresse Email</label>
                              <input type="email" name="email" id="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Mot de passe</label>
                              <input type="password" name="password" id="password" placeholder="Mot de passe" />
                           </div>
                           <div class="field">
                            <label class="label_field">Mot de passe</label>
                            <input type="password" name="password" placeholder="Verifier mot de passe" />
                         </div>
                           <div class="field margin_0">
                              <button class="main_bt">Envoyer</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('assets_front/js/mdp.js')}}"></script>
      @section('script_js')
<script>
// recupération de l'url
const getBaseURL=()=>{
        return location.protocol + "//" + location.hostname + (location.port && ":" + location.port) + "/";
    }
      //utiliser pour lier la page register et la bd
      const add_action = async () => {
           try {
                   const response = await axios.post(getBaseURL() + 'api/user', new FormData(document.getElementById("reponse_user")), {
                       headers: {
                           'Content-Type': 'application/json',
                       }
                   });
                   console.log("reponse ",response.data)
                   if (response.status == 200) return response.data;
           } catch (error) {
               console.log(error);
           }
       }
$(document).on('click', '.main_bt', function(e) {
    e.preventDefault();
    add_action().then(response => {
         console.log(response);

         if(response.result==="succes") {
            Swal.fire({
      title: "Envoyer!",
      text: "Enregistrer avec succès",
      icon: "success"
    }
    )
    .then((result) => {
 
      window.location.reload();
  
});;
         };
    });
        
 });
 //
</script>
      @endsection