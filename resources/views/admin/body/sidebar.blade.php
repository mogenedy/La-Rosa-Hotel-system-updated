<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">La Rosa Hotel</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Admin pannel</div>
            </a>
        </li>
        
        @if(Auth::user()->can('team.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Teamwork management</div>
            </a>
            <ul>
                @if(Auth::user()->can('team.all'))
                <li> <a href="{{ route('all.team') }}"><i class='bx bx-radio-circle'></i>all teamworks</a>
                </li>
                @endif 
                @if(Auth::user()->can('team.add'))
                <li> <a href="{{ route('add.team') }}"><i class='bx bx-radio-circle'></i>add a member</a>
                </li>
                @endif 
            </ul>
        </li>
        @endif

        @if(Auth::user()->can('bookarea.menu'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> Reservations managements </div>
            </a>
            <ul>
                @if(Auth::user()->can('update.bookarea'))
                <li> <a href="{{ route('book.area') }}"><i class='bx bx-radio-circle'></i> Update Reservations </a>
                </li> 
                @endif
                 
            </ul>
        </li>
        @endif

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Update room type</div>
            </a>
            <ul>
                <li> <a href="{{ route('room.type.list') }}"><i class='bx bx-radio-circle'></i>Room details  </a>
                </li> 
                 
            </ul>
        </li>


        <li class="menu-label">Reservations managements  </li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Booking </div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.list') }}"><i class='bx bx-radio-circle'></i> Reservations list </a>
                </li>
                <li> <a href="{{ route('add.room.list') }}"><i class='bx bx-radio-circle'></i>Add Reservations  </a>
                </li>
                
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Control Reservations  </div>
            </a>
            <ul>
                <li> <a href="{{ route('view.room.list') }}"><i class='bx bx-radio-circle'></i>Rooms list </a>
                </li>
                
                 
            </ul>
        </li>



 
        
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Tesimonial</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.testimonial') }}"><i class='bx bx-radio-circle'></i>All Testimonial</a>
                </li>

                <li> <a href="{{ route('add.testimonial') }}"><i class='bx bx-radio-circle'></i>Add Testimonial</a>
                </li>
                
                 
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">blog</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Blog categories  </a>
                </li>

                <li> <a href="{{ route('all.blog.post') }}"><i class='bx bx-radio-circle'></i> Blog posts</a>
                </li>
                
                 
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title"> comments </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.comment') }}"><i class='bx bx-radio-circle'></i>All comments  </a>
                </li> 
                 
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Reservations report  </div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.report') }}"><i class='bx bx-radio-circle'></i> Reservations report </a>
                </li> 
                 
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">images  </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.gallery') }}"><i class='bx bx-radio-circle'></i>all images  </a>
                </li> 
                 
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">meassages</div>
            </a>
            <ul>
                <li> <a href="{{ route('contact.message') }}"><i class='bx bx-radio-circle'></i> messages  </a>
                </li> 
                 
            </ul>
        </li>
         
          

        <li class="menu-label">Roles and permissions</li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Roles and permissions</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.permission') }}"><i class='bx bx-radio-circle'></i> roles</a>
                </li> 
                <li> <a href="{{ route('all.roles') }}"><i class='bx bx-radio-circle'></i>show roles</a>
                </li> 

                <li> <a href="{{ route('add.roles.permission') }}"><i class='bx bx-radio-circle'></i>Permissions  </a>
                </li>

                <li> <a href="{{ route('all.roles.permission') }}"><i class='bx bx-radio-circle'></i>All permissions</a>
                </li>
                 
            </ul>
        </li>


        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Admin management</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}"><i class='bx bx-radio-circle'></i>All admins</a>
                </li> 
                <li> <a href="{{ route('add.admin') }}"><i class='bx bx-radio-circle'></i>All admins</a>
                </li> 

                
                 
            </ul>
        </li>
       
         
        <li class="menu-label">Others</li>
      
      
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>