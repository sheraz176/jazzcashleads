<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
 <!-- Sidebar Navigation Left -->
 <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="{{route('tsm.Deshbaord.index')}}">  <span class="custom-logo">Lead Set</span> </a>
        <a href="#" class="text-center ms-logo-img-link">

             @if (!empty(Auth::user()->image))
             <img src="{{ Storage::url(Auth::user()->image) }}" alt="logo"></a>
              @else
              <img src="{{asset('patient/assets/imgs/patient-male-avatar.png')}}" alt="logo"></a>
             @endif
             @if (!empty(Auth::user()->middle_name))
             <h5 class="text-center text-white mt-2">{{ Auth::user()->middle_name }} {{ Auth::user()->last_name }}</h5>
             @else
             <h5 class="text-center text-white mt-2">{{ Auth::user()->name }}</h5>
             @endif
        <h6 class="text-center text-white mb-3">Tsm</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">


        <li class="menu-item {{ Request::is('tsm/deshboard/index*') ? 'active' : '' }}">
            <a href="{{route('tsm.Deshbaord.index')}}">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
        </li>



           <!-- Contact Us -->


          <li class="menu-item {{ Request::is('tsm/leadset/show*') ? 'active' : '' }}
          {{ Request::is('tsm/leadset/show*') ? 'active' : '' }}
          {{ Request::is('tsm/create*') ? 'active' : '' }}">
           <a href="{{route('tsm.leadset.show')}}">
               <span><i class="fa-solid fa-c"></i>Leads Set</span>
           </a>
         </li>



        <!-- /Contacts -->



        <!-- /Apps -->
    </ul>
</aside>
