<template>
 <div id="navbar">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
         <router-link class="nav-link" :to="{ name:'home' }">Home</router-link>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <router-link class="nav-link" :to="{name:'about' }">About</router-link>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <router-link class="nav-link" :to="{name:'buslayout' }">Layout Bus</router-link>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">{{tmsg.length}}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" v-for="msg in tmsg" :key="msg" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> {{msg}}
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {
  props:['tmsg']
}
</script>