<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="/css/sidebar.css">

      <title>Responsive sidebar Menu | Dark/Light Mode - Bedimcode</title>

      

   </head>

   <body>
      <!--=============== HEADER ===============-->
      <header class="header" id="header">
         <div class="header__container">
           
            
            <button class="header__toggle" id="header-toggle">
               <i class="ri-menu-line"></i>
            </button>
           
           
           <a href="#" class="header__logo">
            <i class="ri-book-open-fill"></i>
            <span>BookShop</span>
         </a>
         </div>

         
      </header>

      <!--=============== SIDEBAR ===============-->
      <nav class="sidebar" id="sidebar">
         <div class="sidebar__container">
            <div class="sidebar__user">
               <div class="sidebar__img">
                  <img src="assets/img/perfil.png" alt="image">
               </div>
   
               <div class="sidebar__info">
                  <h3>Rix Methil</h3>
                  <span>rix123@email.com</span>
               </div>
            </div>

            <div class="sidebar__content">
               <div>
                  <h3 class="sidebar__title">MANAGE</h3>

                  <div class="sidebar__list">
                     <a href="{{route('dashboard')}}" class="sidebar__link active-link">
                        <i class="ri-home-2-fill"></i>
                        <span>Inicio</span>
                     </a>
                     
                     <a href="{{route('livros.index')}}" class="sidebar__link">
                        <i class="ri-book-open-fill"></i>
                        <span>Livros</span>
                     </a>

                     <a href="{{route('editoras.index')}}" class="sidebar__link">
                        <i class="ri-contacts-book-2-fill"></i>
                        <span>Editoras</span>
                     </a>

                     <a href="{{route('estoques.index')}}" class="sidebar__link">
                        <i class="ri-archive-2-fill"></i>
                        <span>Estoque</span>
                     </a>
                  </div>
               </div>

               <div>
                  <h3 class="sidebar__title">SETTINGS</h3>

                  <div class="sidebar__list">
                     <a href="#" class="sidebar__link">
                        <i class="ri-settings-3-fill"></i>
                        <span>Configurações</span>
                     </a>
                  </div>
               </div>
            </div>

            <div class="sidebar__actions">
               <button>
                  <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
                     <span>Theme</span>
                  </i>
               </button>

               <button class="sidebar__link">
                  <i class="ri-logout-box-r-fill"></i>
                  <span>Log Out</span>
               </button>
            </div>
         </div>
      </nav>

      <!--=============== MAIN ===============-->
      <main class="main container" id="main">
        
      </main>
      
      <!--=============== MAIN JS ===============-->
      <script src="js/sidebar.js"></script>
   </body>
</html>