<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>UTA- Mot de passe oublié</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
       <!-- site icon -->
       <link rel="icon" href="{{ asset('assets_front/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/responsive.css') }}" />
      <!-- color css --><!--link rel="stylesheet" href="css/colors.css" />-->
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{asset('assets_front/images/logo/logo.png') }}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form>
                        <div class="theme d-flex justify-content-center">
                           <h1>Entrez Votre Email</h1>
                        </div>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Adresse Email</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field margin_0 d-flex justify-content-center">
                              <button class="main_bt">Envoyer</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
   </body>
</html>