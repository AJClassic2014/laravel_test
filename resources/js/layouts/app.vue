<template>
    <div class="container">
        <div class="d-flex justify-space-around mt-3">
            <router-link to="/">
                Tool Used
            </router-link>
            <router-link to="/sectwo">
                Instructions
            </router-link>
            <router-link to="/secthree">
                Records Table
            </router-link>
        </div>
        <router-view></router-view>
    </div>
</template>
<script>
</script>
<style>
.container {
    max-width: 1450px;
    margin: 0 auto;
    padding: 0 15px;
}

@media (max-width: 1450px) {
    .container {
        width: 80%;   
        max-width: none;  
    }
}
</style>