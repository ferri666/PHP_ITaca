<template>
	<div>

		<header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex">
          <li><router-link exact-active-class="active" to="/home" class="nav-link active" aria-current="page">
          Home
          </router-link></li>
          <li><router-link exact-active-class="active" to="/shops" class="nav-link active" aria-current="page">
          Botigues
          </router-link></li>
        </div>
      </div>
    </header>
		
		<router-view></router-view>
	</div>
</template>

   