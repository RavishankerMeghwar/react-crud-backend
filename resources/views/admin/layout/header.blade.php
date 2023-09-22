<!-- Main Header-->
<div class="main-header side-header sticky">
    <div class="main-container container-fluid">
      <div class="main-header-left">
        <a
          class="main-header-menu-icon"
          href="javascript:void(0)"
          id="mainSidebarToggle"
          ><span></span
        ></a>
        <div class="hor-logo">
          <a class="main-logo" href="index.html">
            <img
              src="../assets/img/brand/logo.png"
              class="header-brand-img desktop-logo"
              alt="logo" />
            <img
              src="../assets/img/brand/logo-light.png"
              class="header-brand-img desktop-logo-dark"
              alt="logo" />
          </a>
        </div>
      </div>
      <div class="main-header-center">
        <div class="responsive-logo">
          <a href="{{route('dashboard.home')}}"
            >
            <!-- <img
              src="../assets/img/brand/logo.png"
              class="mobile-logo"
              alt="logo"
          /> -->
          <h3
          class="mobile-logo"

            style="
              font-size: 25px;
              line-height: 30px;
              color: rgb(231, 11, 11);
              text-transform: uppercase;
              padding-left: 20px;
            ">
            Arcadian
            
          </h3>
        </a>
          <a href="{{route('dashboard.home')}}"
            >
            <!-- <img
              src="../assets/img/brand/logo-light.png"
              class="mobile-logo-dark"
              alt="logo"
          /> -->
          <h3
          class="mobile-logo-dark"

            style="
              font-size: 25px;
              line-height: 30px;
              color: rgb(228, 43, 43);
              text-transform: uppercase;
              padding-left: 20px;
            ">
            Arcadian
            
          </h3>
        </a>
        </div>
      </div>
      <div class="main-header-right">
        <button
          class="navbar-toggler navresponsive-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i
            class="fe fe-more-vertical header-icons navbar-toggler-icon"></i></button
        ><!-- Navresponsive closed -->
        <div
          class="navbar navbar-expand-lg nav nav-item navbar-nav-right responsive-navbar navbar-dark">
          <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ms-auto">
              <!-- Search -->
              <!-- <div class="dropdown header-search">
                <a class="nav-link icon header-search">
                  <i class="fe fe-search header-icons"></i>
                </a>
                <div class="dropdown-menu">
                  <div class="main-form-search p-2">
                    <div class="input-group">
                      <div class="input-group-btn search-panel">
                        <select class="form-control select2">
                          <option label="All categories"></option>
                          <option value="IT Projects">IT Projects</option>
                          <option value="Business Case">
                            Business Case
                          </option>
                          <option value="Microsoft Project">
                            Microsoft Project
                          </option>
                          <option value="Risk Management">
                            Risk Management
                          </option>
                          <option value="Team Building">
                            Team Building
                          </option>
                        </select>
                      </div>
                      <input
                        type="search"
                        class="form-control"
                        placeholder="Search for anything..." />
                      <button class="btn search-btn">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="20"
                          height="20"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line
                            x1="21"
                            y1="21"
                            x2="16.65"
                            y2="16.65"></line>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- Search -->
              <!-- Theme-Layout -->
              <!-- <div class="dropdown d-flex main-header-theme">
                <a class="nav-link icon layout-setting">
                  <span class="dark-layout">
                    <i class="fe fe-sun header-icons"></i>
                  </span>
                  <span class="light-layout">
                    <i class="fe fe-moon header-icons"></i>
                  </span>
                </a>
              </div> -->
              <!-- Theme-Layout -->
              <!-- country -->
              <!-- <div class="dropdown main-header-notification flag-dropdown">
                <a class="nav-link icon country-Flag">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                    <g fill="#0052b4">
                      <path
                        d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                    </g>
                    <g fill="#d80027">
                      <path
                        d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                      <path
                        d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                    </g>
                  </svg>
                </a>
                <div class="dropdown-menu">
                  <a href="javascript:void(0)" class="dropdown-item d-flex">
                    <span
                      class="avatar me-3 align-self-center bg-transparent"
                      ><img
                        src="../assets/img/flags/french_flag.jpg"
                        alt="img"
                    /></span>
                    <div class="d-flex">
                      <span class="mt-2">French</span>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item d-flex">
                    <span
                      class="avatar me-3 align-self-center bg-transparent"
                      ><img
                        src="../assets/img/flags/germany_flag.jpg"
                        alt="img"
                    /></span>
                    <div class="d-flex">
                      <span class="mt-2">Germany</span>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item d-flex">
                    <span
                      class="avatar me-3 align-self-center bg-transparent"
                      ><img
                        src="../assets/img/flags/italy_flag.jpg"
                        alt="img"
                    /></span>
                    <div class="d-flex">
                      <span class="mt-2">Italy</span>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item d-flex">
                    <span
                      class="avatar me-3 align-self-center bg-transparent"
                      ><img
                        src="../assets/img/flags/russia_flag.jpg"
                        alt="img"
                    /></span>
                    <div class="d-flex">
                      <span class="mt-2">Russia</span>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item d-flex">
                    <span
                      class="avatar me-3 align-self-center bg-transparent"
                      ><img
                        src="../assets/img/flags/spain_flag.jpg"
                        alt="img"
                    /></span>
                    <div class="d-flex">
                      <span class="mt-2">spain</span>
                    </div>
                  </a>
                </div>
              </div> -->
              <!-- country -->
              <!-- Full screen -->
              <!-- <div class="dropdown">
                <a class="nav-link icon full-screen-link">
                  <i
                    class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                  <i
                    class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                </a>
              </div> -->
              <!-- Full screen -->
              <!-- Notification -->
              <!-- <div class="dropdown main-header-notification">
                <a class="nav-link icon" href="">
                  <i class="fe fe-bell header-icons"></i>
                  <span class="badge bg-danger nav-link-badge">4</span>
                </a>
                <div class="dropdown-menu">
                  <div class="header-navheading">
                    <p class="main-notification-text">
                      You have 1 unread notification<span
                        class="badge bg-pill bg-primary ms-3"
                        >View all</span
                      >
                    </p>
                  </div>
                  <div class="main-notification-list">
                    <div class="media new">
                      <div class="main-img-user online">
                        <img alt="avatar" src="../assets/img/users/5.jpg" />
                      </div>
                      <div class="media-body">
                        <p>
                          Congratulate <strong>Olivia James</strong> for New
                          template start
                        </p>
                        <span>Oct 15 12:32pm</span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="main-img-user">
                        <img alt="avatar" src="../assets/img/users/2.jpg" />
                      </div>
                      <div class="media-body">
                        <p>
                          <strong>Joshua Gray</strong> New Message Received
                        </p>
                        <span>Oct 13 02:56am</span>
                      </div>
                    </div>
                    <div class="media">
                      <div class="main-img-user online">
                        <img alt="avatar" src="../assets/img/users/3.jpg" />
                      </div>
                      <div class="media-body">
                        <p>
                          <strong>Elizabeth Lewis</strong> added new
                          schedule realease
                        </p>
                        <span>Oct 12 10:40pm</span>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="javascript:void(0)">View All Notifications</a>
                  </div>
                </div>
              </div> -->
              <!-- Notification -->
              <!-- Messages -->
              <!-- <div class="main-header-notification">
                <a class="nav-link icon" href="chat.html">
                  <i class="fe fe-message-square header-icons"></i>
                  <span class="badge bg-success nav-link-badge">6</span>
                </a>
              </div> -->
              <!-- Messages -->
              <!-- Profile -->
              <div class="dropdown main-profile-menu">
                <a class="d-flex" href="javascript:void(0)">
                  <span class="main-img-user"
                    ><img alt="avatar" src="../assets/img/brand_logo.png"
                  /></span>
                </a>
                <div class="dropdown-menu">
                  <div class="header-navheading">
                    <h6 class="main-notification-title">Atech Sight</h6>
                    <p class="main-notification-text">IT - Company</p>
                  </div>
                  <!-- <a class="dropdown-item border-top" href="profile.html">
                    <i class="fe fe-user"></i> My Profile
                  </a>
                  <a class="dropdown-item" href="profile.html">
                    <i class="fe fe-edit"></i> Edit Profile
                  </a>
                  <a class="dropdown-item" href="profile.html">
                    <i class="fe fe-settings"></i> Account Settings
                  </a>
                  <a class="dropdown-item" href="profile.html">
                    <i class="fe fe-settings"></i> Support
                  </a>
                  <a class="dropdown-item" href="profile.html">
                    <i class="fe fe-compass"></i> Activity
                  </a> -->
                  <a class="dropdown-item" href="{{route('dashboard.logout')}}">
                    <i class="fe fe-power"></i> Sign Out
                  </a>
                </div>
              </div>
              <!-- Profile -->
              <!-- Sidebar -->
              <!-- <div class="dropdown header-settings">
                <a
                  href="javascript:void(0)"
                  class="nav-link icon"
                  data-bs-toggle="sidebar-right"
                  data-bs-target=".sidebar-right">
                  <i class="fe fe-align-right header-icons"></i>
                </a>
              </div> -->
              <!-- Sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- End Main Header-->

<!-- Sidemenu -->
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
      <div class="main-sidebar-header main-container-1 active">
        <div class="sidemenu-logo">
          <a class="main-logo" href="{{route('dashboard.home')}}">
            <!-- <img
              src="../assets/img/brand/logo-light.png"
              class="header-brand-img desktop-logo"
              alt="logo" /> -->
            <!-- <img
              src="../assets/img/brand/icon-light.png"
              class="header-brand-img icon-logo"
              alt="logo" /> -->
            <!-- <img
              src="../assets/img/brand/logo.png"
              class="header-brand-img desktop-logo theme-logo"
              alt="logo" /> -->
            <!-- <img
              src="../assets/img/brand/icon.png"
              class="header-brand-img icon-logo theme-logo"
              alt="logo" /> -->
            <h3
            class="header-brand-img desktop-logo"

              style="
                font-size: 25px;
                line-height: 30px;
                color: rgb(228, 223, 223);
                text-transform: uppercase;
                padding-left: 20px;
              ">
              Arcadian
              
            </h3>
            <h3
              class="header-brand-img icon-logo"
              style="
                font-size: 30px;
                font-weight: 900;
                line-height: 35px;
                color: rgb(228, 223, 223);
                text-transform: uppercase;
                padding: 10px 20px;
                color: #7d05ee;
              
              ">
              A
              
            </h3>
          </a>
        </div>
        <div class="main-sidebar-body main-body-1">
          <div class="slide-left disabled" id="slide-left">
            <i class="fe fe-chevron-left"></i>
          </div>
          <ul class="menu-nav nav">
            <li class="nav-header">
              <span class="nav-label">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('dashboard.home')}}">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <i class="ti-home sidemenu-icon menu-icon"></i>
                <span class="sidemenu-label">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link with-sub" href="javascript:void(0)">
                <span class="shape1"></span>
                <span class="shape2"></span>
                <i class="ti-wallet sidemenu-icon menu-icon"></i>
                <span class="sidemenu-label">Insurance </span>
                <i class="angle fe fe-chevron-right"></i>
              </a>
              <ul class="nav-sub">
                <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                
                <li class="nav-sub-item">
                  <a class="nav-sub-link sub-with-sub" href="{{route('dashboard.insurance.index')}}">
                    <span class="sidemenu-label">Insurances</span>
                    <i class="angle fe fe-chevron-right"></i>
                  </a>
                  {{-- <ul class="sub-nav-sub">
                    <li class="nav-sub-item"><a class="nav-sub-link" href="{{route('dashboard.insurance.index')}}">Insurance Tables</a></li>
                    <!-- <li class="nav-sub-item"><a class="nav-sub-link" href="table-data.html">Data Tables</a></li> -->
                  </ul> --}}
                </li>
              
                </li>
              
              </ul>
            
            </li>
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-shopping-cart-full sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">ECommerce</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">E-Commerce</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-dashboard.html">Dashboard</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-products.html">Products</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-product-details.html">Product Details</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-cart.html">Cart</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-wishlist.html">Wishlist</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-checkout.html">Checkout</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-orders.html">Orders</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-add-product.html">Add Product</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="ecommerce-account.html">Account</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-header"><span class="nav-label">Landing</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="landing.html">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-layout sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">LandingPage</span>
                            </a>
                        </li> -->
             <!-- <li class="nav-header"><span class="nav-label">Applications</span></li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-write sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Apps</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                        <span class="sidemenu-label">Tables</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="sub-nav-sub">
                                        <li class="nav-sub-item"><a class="nav-sub-link" href="table-basic.html">Basic Tables</a></li>
                                        <li class="nav-sub-item"><a class="nav-sub-link" href="table-data.html">Data Tables</a></li>
                                    </ul>
                                </li>
                            
                                </li> -->
                            
                            </ul>
                        </li> 
            <!-- <li class="nav-header"><span class="nav-label">Components</span></li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-package sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Elements</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Elements</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="accordion.html">Accordion</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="alerts.html">Alerts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="avatar.html">Avatar</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="breadcrumbs.html">Breadcrumbs</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="buttons.html">Buttons</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="badge.html">Badge</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="dropdown.html">Dropdown</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="thumbnails.html">Thumbnails</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="list-group.html">List Group</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="navigation.html">Navigation</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="pagination.html">Pagination</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="popover.html">Popover</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="progress.html">Progress</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="spinners.html">Spinners</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="media-object.html">Media Object</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="typography.html">Typography</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="tooltip.html">Tooltip</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="toast.html">Toast</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="tags.html">Tags</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="tabs.html">Tabs</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-briefcase sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">AdvancedUI</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Advanced UI</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="carousel.html">Carousel</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="collapse.html">Collapse</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chat.html">Chat</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="cards.html">Cards</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="calendar.html">Calendar</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="contacts.html">Contacts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="modals.html">Modals</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="timeline.html">Timeline</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="darggablecard.html">Darggable-Cards</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="sweet-alert.html">Sweet Alert</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="rating.html">Ratings</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="search.html">Search</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="userlist.html">Userlist</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="notifications.html">Notification</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="tree-view.html">Tree-view</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-header"><span class="nav-label">Other Pages</span></li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-palette sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label ">Pages</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="profile.html">Profile</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="aboutus.html">About Us</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="settings.html">Settings</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="invoice.html">Invoice</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="pricing.html">Pricing</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="gallery.html">Gallery</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="notifications-list.html">Notifications List</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="faq.html">Faqs</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="success-message.html">Success Message</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="danger-message.html">Danger Message</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="warning-message.html">Warning Message</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="empty.html">Empty Page</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="switcher.html">Switcher Page</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-shield sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Utilities</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Utilities</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="background.html">Background</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="border.html">Border</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="display.html">Display</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="flex.html">Flex</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="height.html">Height</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="margin.html">Margin</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="padding.html">Padding</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="position.html">Position</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="width.html">Width</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="extras.html">Extras</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-menu sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Submenu</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Submenu</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Submenu-01</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                        <span class="sidemenu-label">Submenu-02</span>
                                        <i class="angle fe fe-chevron-right"></i>
                                    </a>
                                    <ul class="sub-nav-sub">
                                        <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-01</a></li>
                                        <li class="nav-sub-item">
                                            <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                                <span class="sidemenu-label">Level-02</span>
                                                <i class="angle fe fe-chevron-right"></i>
                                            </a>
                                            <ul class="sub-nav-sub">
                                                <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-11</a></li>
                                                <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Level-12</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-lock sidemenu-icon menu-icon"></i>
                                <span class="sidemenu-label">Authentication</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="signin.html">Sign In</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="signup.html">Sign Up</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="forgot.html">Forgot Password</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="reset.html">Reset Password</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="lockscreen.html">Lockscreen</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="underconstruction.html">UnderConstruction</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="404.html">404 Error</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="500.html">500 Error</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-receipt sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Forms</span>
                                <span class="badge bg-info side-badge">7</span>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-elements.html">Form Elements</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-advanced.html">Advanced Forms</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-layouts.html">Form Layouts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-validation.html">Form Validation</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-wizards.html">Form Wizards</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-editor.html">WYSIWYG Editor</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="form-element-sizes.html">Form Element-sizes</a></li>
                            </ul>
                        </li> -->
            <!-- <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0)">
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="ti-bar-chart-alt sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Charts</span>
                                <span class="badge bg-danger side-badge">5</span>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-morris.html">Morris Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-flot.html">Flot Charts</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-chartjs.html">ChartJS</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-spark-peity.html">Sparkline &amp; Peity</a></li>
                                <li class="nav-sub-item"><a class="nav-sub-link" href="chart-echart.html">Echart</a></li>
                            </ul>
                        </li> -->
          </ul>

          <div class="slide-right" id="slide-right">
            <i class="fe fe-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Sidemenu -->