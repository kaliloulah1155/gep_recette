@extends('master')

@section('title','Inscription')
@section('title_content','Inscription')

@section('content')

<div class="full_container">
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
                     <form>
                        <fieldset>
                            <div class="field">
                                <label class="label_field">Nom</label>
                                <input type="text" name="text" placeholder="Nom" />
                             </div>
                             <div class="field">
                                <label class="label_field">Prenom</label>
                                <input type="text" name="text" placeholder="Prenom" />
                             </div>
                           <div class="field">
                              <label class="label_field"> Adresse Email</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Mot de passe</label>
                              <input type="password" name="password" placeholder="Mot de passe" />
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
@endsection