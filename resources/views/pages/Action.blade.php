@extends('master')

@section('title','Action')
@section('title_content','Action')

@section('content')

<div class="full_container d-flex justify-content-center">
         <div class="container ">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <h1 class="theme" >Enregistrer Une Action</h1>
                     </div>
                  </div>
                  <div class="login_form">
                     <div class="theme">

                     </div>
                     <form id="reponse_action" >
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Libelle</label>
                                <input type="text" name="libelle" id="libele" placeholder="Libelle" />
                             </div>
                             <div class="field">
                                <label class="label_field">Icon</label>
                                <input type="text" name="icon" id="icon" placeholder="Icon" />
                             </div>
                           <div class="field">
                              <label class="label_field">Position</label>
                              <input type="number" name="position" id="position" placeholder="Position" />
                           </div>
                           <div class="field">
                              <label class="label_field">Statut</label>
                              <select name="statut" id="statut">
                                <option value="1" >Activé</option>
                                <option value="0" >Desactivé</option>
                              </select>
                           </div>
                           <div class="field">
                            <label class="label_field">Code</label>
                            <input type="text" name="code" placeholder="Code" />
                         </div>
                           <div class="field margin_0 d-flex justify-content-center">
                              <button class="main_bt ">Envoyer</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{asset('assets_front/js/mdp.js')}}"></script>
     

@endsection
@section('script_js')
<script>
// recupération de l'url
const getBaseURL=()=>{
        return location.protocol + "//" + location.hostname + (location.port && ":" + location.port) + "/";
    }
      //utiliser pour lier la page action et la bd
      const add_action = async () => {
           try {
                   const response = await axios.post(getBaseURL() + 'api/cnx', new FormData(document.getElementById("reponse_action")), {
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