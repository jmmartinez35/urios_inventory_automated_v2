 <!-- partial:partials/_sidebar.html -->
 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
     id="sidenav-main">
     <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
             aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
             <img src="{{ asset('images/logo-clear.png') }}" class="navbar-brand-img h-100" alt="main_logo">
             <span class="ms-1 font-weight-bold"><strong>FUAMI INVENTORY</strong></span>
         </a>
     </div>
     <hr class="horizontal dark mt-0">
     <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
         <ul class="navbar-nav">

             <li class="nav-item">
                 <a class="nav-link  {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                     href="{{ route('dashboard') }}">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                             <title>Dashboard </title>
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                     <g transform="translate(1716.000000, 291.000000)">
                                         <g transform="translate(0.000000, 148.000000)">
                                             <path class="color-background opacity-6"
                                                 d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                             </path>
                                             <path class="color-background"
                                                 d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                             </path>
                                         </g>
                                     </g>
                                 </g>
                             </g>
                         </svg>
                     </div>
                     <span class="nav-link-text ms-1">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">BORROWING MANAGEMENT</h6>
             </li>
           
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('admin/users/*') ? 'active' : '' }}" data-bs-toggle="collapse"
                     href="#users" aria-expanded="{{ Request::is('admin/users/*') ? 'true' : 'false' }}"
                     aria-controls="users">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                      
                     </div>
                     <span class="nav-link-text ms-1">Borrowing</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse  {{ Request::is('admin/users/*') ? 'show' : '' }}" id="users">
                     <ul class="nav flex-column sub-menu">

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.pending') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">Borrowing Pending</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.management') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">Borrowing Approved</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.myaccount') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">Borrowing Return</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">INVENTORY MANAGEMENT</h6>
             </li>
           
             <li class="nav-item">
                 <a class="nav-link  {{ Request::is('admin/category') ? 'active' : '' }}"
                     href="{{ route('dashboard') }}">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                             <title>Dashboard </title>
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                     <g transform="translate(1716.000000, 291.000000)">
                                         <g transform="translate(0.000000, 148.000000)">
                                             <path class="color-background opacity-6"
                                                 d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                             </path>
                                             <path class="color-background"
                                                 d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                             </path>
                                         </g>
                                     </g>
                                 </g>
                             </g>
                         </svg>
                     </div>
                     <span class="nav-link-text ms-1">Category</span>
                 </a>
             </li>
           
    
             <li class="nav-item">
                 <a class="nav-link  {{ Request::is('admin/category') ? 'active' : '' }}"
                     href="{{ route('dashboard') }}">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                             <title>Dashboard </title>
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                     <g transform="translate(1716.000000, 291.000000)">
                                         <g transform="translate(0.000000, 148.000000)">
                                             <path class="color-background opacity-6"
                                                 d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                             </path>
                                             <path class="color-background"
                                                 d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                             </path>
                                         </g>
                                     </g>
                                 </g>
                             </g>
                         </svg>
                     </div>
                     <span class="nav-link-text ms-1">Items</span>
                 </a>
             </li>
             <li class="nav-item mt-3">
                 <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">USERS MANAGEMENT</h6>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('admin/users/*') ? 'active' : '' }}" data-bs-toggle="collapse"
                     href="#users" aria-expanded="{{ Request::is('admin/users/*') ? 'true' : 'false' }}"
                     aria-controls="users">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 512.001 512.001" xml:space="preserve">
                             <g>
                                 <g>
                                     <path class="color-background" d="M270.948,302.936c-10.562-14.943-27.525-24.074-45.713-24.765c-0.385-0.043-0.775-0.067-1.171-0.067
   c-23.135,0-42.252-17.484-44.859-39.93c6.661-4.851,12.807-11.007,18.254-18.381c11.015-14.913,18.165-33.547,20.816-53.698
   c0.812-0.883,1.496-1.911,1.987-3.081c4.664-11.106,7.029-22.963,7.029-35.242c0-47.221-35.702-85.637-79.584-85.637
   c-11.349,0-22.36,2.578-32.768,7.665c-3.891,0.328-7.704,1.028-11.365,2.088c-36.686,10.599-57.421,54.957-46.22,98.88
   c1.127,4.419,2.56,8.765,4.262,12.916c0.464,1.134,1.114,2.13,1.88,3c4.225,31.022,18.908,56.833,38.989,71.434
   c-2.581,22.474-21.712,39.988-44.867,39.988c-0.356,0-0.708,0.019-1.056,0.053C25.185,279.268,0,305.121,0,336.763v63.14
   c0,5.891,4.775,10.666,10.666,10.666h188.451c5.89,0,10.666-4.775,10.666-10.666s-4.776-10.666-10.666-10.666H21.331v-52.475
   c0-20.585,16.746-37.33,37.33-37.33c0.356,0,0.708-0.019,1.056-0.053c7.683-0.24,15.04-1.786,21.858-4.429l50.497,72.883
   c1.992,2.875,5.268,4.592,8.767,4.592c3.499,0,6.775-1.716,8.767-4.592l50.498-72.883c6.819,2.643,14.175,4.189,21.858,4.429
   c0.348,0.034,0.7,0.053,1.056,0.053c12.105,0,23.511,5.912,30.51,15.815c2.078,2.94,5.372,4.51,8.719,4.51
   c2.128,0,4.277-0.636,6.147-1.957C273.205,314.402,274.347,307.746,270.948,302.936z M109.492,72.377
   c2.798-0.808,5.757-1.288,8.796-1.425c1.566-0.07,3.094-0.484,4.482-1.213c7.926-4.164,16.314-6.276,24.933-6.276
   c31.47,0,57.174,27.694,58.204,62.162c-6.414-4.85-14.393-7.733-23.035-7.733h-55.779c-2.778,0-5.416-0.872-7.625-2.521
   c-1.891-1.411-3.351-3.305-4.224-5.482c-2.015-5.014-7-8.146-12.383-7.806c-5.416,0.347-9.973,4.111-11.338,9.361
   c-2.721,10.453-7.801,20.188-14.708,28.455C71.283,108.973,85.213,79.392,109.492,72.377z M84.479,162.705
   c9.316-8.54,16.855-18.89,22.119-30.32c0.036,0.027,0.073,0.054,0.11,0.081c5.925,4.422,12.973,6.758,20.384,6.758h55.779
   c6.7,0,12.487,3.92,15.234,9.577c-0.071,22.157-6.384,42.854-17.806,58.315c-10.771,14.58-24.785,22.61-39.462,22.61
   c-13.583,0-26.807-7.017-37.236-19.757C93.483,197.61,86.788,180.974,84.479,162.705z M140.838,343.031l-40.817-58.912
   c10.95-9.086,18.932-21.616,22.307-35.908c5.943,1.86,12.141,2.848,18.509,2.848c6.334,0,12.537-0.961,18.52-2.817
   c3.379,14.278,11.358,26.796,22.3,35.876L140.838,343.031z" />
                                 </g>
                             </g>
                             <g>
                                 <g>
                                     <path class="color-background" d="M455.441,337.455c-0.348-0.034-0.7-0.053-1.056-0.053c-23.167,0-42.305-17.531-44.871-40.023
   c13.062-9.512,23.832-23.774,30.931-41.119c1.016,3.324,3.617,6.008,7.039,7.069c1.04,0.322,2.104,0.479,3.157,0.479
   c3.232,0,6.36-1.473,8.417-4.114c14.881-19.112,22.616-43.986,21.784-70.041c-0.818-25.56-9.803-49.555-25.303-67.563
   c-15.869-18.438-36.819-28.699-59.012-28.911c-1.177-0.048-4.104,0.053-4.577,0.082c-11.402-5.172-23.45-7.588-35.858-7.194
   c-25.625,0.819-49.196,13.591-66.369,35.963c-16.688,21.741-25.355,50.098-24.404,79.85c0.161,5.041,0.559,9.683,1.203,14.103
   c1.737,12.679,5.23,24.822,10.381,36.091c1.639,3.587,5.124,5.977,9.06,6.213c3.923,0.237,7.681-1.718,9.739-5.083
   c0.858-1.403,1.961-3.152,3.178-4.866c4.755,14.445,12.024,27.423,21.253,37.669c3.937,4.371,8.189,8.173,12.667,11.416
   c-2.586,22.469-21.715,39.977-44.866,39.977c-0.356,0-0.708,0.019-1.056,0.053c-31.374,1.112-56.558,26.967-56.558,58.607v63.14
   c0,5.891,4.776,10.666,10.666,10.666h260.346c5.89,0,10.666-4.775,10.666-10.666v-63.14
   C512,364.422,486.815,338.568,455.441,337.455z M290.112,225.625c-1.052-4.108-1.876-8.321-2.467-12.626
   c-0.54-3.708-0.868-7.568-1.003-11.799c-0.794-24.837,6.31-48.341,20.004-66.18c13.208-17.208,31.01-27.02,50.128-27.631
   c0.639-0.021,14.387-0.795,28.421,6.277c1.569,0.79,3.377,1.157,5.138,1.107c0.202-0.006,5.677-0.265,5.836-0.263
   c16.02,0.106,31.362,7.741,43.203,21.497c12.331,14.328,19.487,33.622,20.149,54.329c0.359,11.247-1.221,22.18-4.567,32.239
   c-1.008-2.686-2.132-5.331-3.369-7.932c-10.298-21.91-27.633-38.881-48.812-47.788c-2.683-1.128-5.709-1.111-8.378,0.047
   c-2.67,1.157-4.75,3.355-5.759,6.085c-1.42,3.836-3.14,7.573-5.116,11.106c-5.584,9.986-16.842,15.927-29.361,15.489
   c-1.879-0.064-3.786-0.067-5.666-0.007c-9.223,0.295-18.217,2.053-26.78,5.242C313.255,208.009,299.041,216.018,290.112,225.625z
   M316.351,231.43c4.044-2.709,8.347-4.94,12.853-6.643c6.344-2.362,13.063-3.672,19.97-3.893c1.41-0.046,2.838-0.044,4.246,0.005
   c20.594,0.705,39.217-9.405,48.718-26.396c0.584-1.045,1.152-2.106,1.701-3.177c9.728,5.993,18.043,14.44,24.295,24.692
   c-0.054,0.316-0.1,0.633-0.126,0.959c-1.636,20.237-8.617,38.809-19.658,52.295c-10.429,12.741-23.653,19.757-37.236,19.757
   C346.004,289.027,323.666,265.158,316.351,231.43z M352.654,307.492c6.003,1.876,12.194,2.866,18.46,2.866
   c6.384,0,12.597-0.994,18.555-2.864c4.284,18.163,16.029,33.466,31.818,42.495c-6.159,22.255-26.627,38.258-50.324,38.258
   c-23.699,0-44.166-16.004-50.324-38.26C336.626,340.96,348.371,325.656,352.654,307.492z M490.669,448.537H251.654v-52.475
   c0-20.583,16.746-37.33,37.33-37.33c0.356,0,0.708-0.019,1.056-0.053c3.673-0.115,7.274-0.519,10.775-1.209
   c9.265,30.416,37.613,52.11,70.347,52.11c32.734,0,61.081-21.694,70.348-52.109c3.5,0.69,7.101,1.094,10.773,1.208
   c0.348,0.034,0.7,0.053,1.056,0.053c20.584,0,37.33,16.746,37.33,37.33V448.537z" />
                                 </g>
                             </g>
                         </svg>

                     </div>
                     <span class="nav-link-text ms-1">Users</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse  {{ Request::is('admin/users/*') ? 'show' : '' }}" id="users">
                     <ul class="nav flex-column sub-menu">

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.pending') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">User Pending</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.management') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">User Management</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('users.myaccount') }}">
                                 <div
                                     class="icon icon-shape icon-sm  border-radius-md text-center  d-flex align-items-center justify-content-center">
                                 </div>
                                 <span class="nav-link-text ms-1 text-dark">My Acount</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item d-none">
                 <button class="btn btn-link nav-link">
                     <div
                         class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM4 18.3851L5.76282 17H20V5H4V18.3851ZM13 11V15H11V11H8L12 7L16 11H13Z"></path></svg>
                     </div>
                     <span class="nav-link-text ms-1">Upload Singnature</span>
                 </button>
             </li>

         </ul>
     </div>

 </aside>
