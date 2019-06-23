<template>
    <div>
        <h1>KPop Album Tracker</h1>

        <p>
            <router-link :to="{ name: 'home' }">Home</router-link>
            <router-link :to="{ name: 'calendar' }">Calendar</router-link>
            <a href="/admin/comebacks/create">New Comeback</a>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>