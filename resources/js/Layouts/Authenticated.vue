<script setup>
import { ref } from "vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeDropdown from "@/Components/Dropdown.vue";
import BreezeDropdownLink from "@/Components/DropdownLink.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
        <!--**********************************
                Nav header start
        ***********************************-->
        <div class="nav-header">
        <Link :href="route('dashboard')" class="brand-logo">
          <BreezeApplicationLogo class="block h-9 w-auto" />
        </Link>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
          </div>
        </div>
        </div>

        <!--**********************************
                Header start
        ***********************************-->
        <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="dashboard_bar">Dashboard</div>
              </div>
              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    role="button"
                    data-toggle="dropdown"
                  >
                    <img
                      src="DashboardFiles/images/profile/17.jpg"
                      width="20"
                      alt=""
                    />
                    <div class="header-info">
                        <span class="text-black"><strong>Brian Lee</strong></span>
                        <p class="fs-12 mb-0">Admin</p>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <BreezeDropdownLink
                      :href="route('logout')"
                      method="post"
                      as="button"
                    >
                      Log Out
                    </BreezeDropdownLink>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        </div>
        <!--**********************************
                Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
                Sidebar start
        ***********************************-->
        <div class="deznav">
        <div class="deznav-scroll">
          <!-- <a href="{{ url('dashboard') }}" class="add-menu-sidebar" >Dashboard</a> -->
          <ul class="metismenu" id="menu">
            <li>
              <a class="has-arrow ai-icon" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Client</span>
              </a>
              <ul aria-expanded="false">
                <li>
                  <Link :href="route('SuperAdmin.client')">
                    Create Client
                  </Link>
                </li>
                <li>
                  <Link :href="route('SuperAdmin.show')">
                  Show Client
                  </Link>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow ai-icon" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Project</span>
              </a>
              <ul aria-expanded="false">
                <li><a href="#">Create Project</a></li>
              </ul>
            </li>
            <li>
              <a class="has-arrow ai-icon" aria-expanded="false" >
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Department</span>
              </a>
              <ul aria-expanded="false">
                <li><a href="#">Register</a></li>
                <li><a href="#">View</a></li>
              </ul>
            </li>
          </ul>
        </div>
        </div>
        <!--**********************************
               Sidebar end
        ***********************************-->
      <main>
        <div class="content-body">
            <slot />
        </div>
      </main>
    </div>
  </div>
</template>

