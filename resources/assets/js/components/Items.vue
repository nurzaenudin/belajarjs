<template>
    <div class="container">
		 <router-link to="/Items" class="btn btn-primary">Display Item</router-link>
        <div>
			<router-view></router-view>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>

    export default{
    }
</script>