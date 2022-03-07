  
  <div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="" class="header-logo">
          <img src="{{asset('images/MAKEFITTVlogoblanc.png')}}" class="img-fluid rounded-normal" alt="">
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li><a href="" class="text-primary"><i class="ri-arrow-right-line"></i><span>Visit site</span></a></li>
             <li><a href="/index" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
             <li><a href="/rating" class="iq-waves-effect"><i class="las la-star-half-alt"></i><span>Rating </span></a></li>
             <li><a href="/comment" class="iq-waves-effect"><i class="las la-comments"></i><span>Comment</span></a></li>
             <li><a href="/user" class="iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a></li>
             <li>
               <a href="#movie" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-film"></i><span>Movie</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="movie" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="/movie/create"><i class="las la-user-plus"></i>Add Movie</a></li>
                  <li><a href="/movie"><i class="las la-eye"></i>Movie List</a></li>
               </ul>
            </li>
             <li>
                <a href="#category" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-list-ul"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="/category/create"><i class="las la-user-plus"></i>Add Category</a></li>
                   <li><a href="/category"><i class="las la-eye"></i>Category List</a></li>
                </ul>
             </li>
            
             <li>
                <a href="#show" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                   class="las la-film"></i><span>Show</span><i
                   class="ri-arrow-right-s-line iq-arrow-right"></i>
                </a>
                <ul id="show" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="/show/create"><i class="las la-user-plus"></i>Add Show</a></li>
                   <li><a href="/show"><i class="las la-eye"></i>Show List</a></li>
                </ul>
             </li>

             <li>
               <a href="#episode" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                  class="las la-film"></i><span>Episode</span><i
                  class="ri-arrow-right-s-line iq-arrow-right"></i>
               </a>
               <ul id="episode" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="/episode/create"><i class="las la-user-plus"></i>Add Episode</a></li>
                  <li><a href="/episode"><i class="las la-eye"></i>Episode List</a></li>
               </ul>
            </li>

            <li>
               <a href="#banner" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                  class="las la-film"></i><span>Banner</span><i
                  class="ri-arrow-right-s-line iq-arrow-right"></i>
               </a>
               <ul id="banner" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="/moviebanner"><i class="las la-eye"></i>Movie Banner</a></li>
                  <li><a href="/showbanner"><i class="las la-eye"></i>Show Banner</a></li>
               </ul>
            </li>
             <li><a href="pages-pricing" class="iq-waves-effect"><i class="ri-price-tag-line"></i><span>Pricing</span></a></li>
            
          </ul>
       </nav>
    </div>
 </div>
 