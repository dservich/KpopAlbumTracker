<template>
    <div>
        <h1>KPop Album Tracker</h1>

        <nav class="bg-blue-400 w-full border border-solid border-blue-700">
            <router-link :to="{ name: 'home' }" class="underline hover:text-green-400 px-2">Home</router-link>
            <router-link :to="{ name: 'calendar' }" class="underline hover:text-green-400 px-2">Calendar</router-link>
            <a href="/admin/comebacks/create" class="underline hover:text-green-400 px-2">New Comeback</a>
            <a href="/admin/artists/create" class="underline hover:text-green-400 px-2">New Artist</a>
            <a href="/admin/recordlabels/create" class="underline hover:text-green-400 px-2">New Record Label</a>
            <a href="/login" class="underline hover:text-green-400 px-2 float-right">Login</a>
            <a href="/register" class="underline hover:text-green-400 px-2 float-right">Register</a>
        </nav>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>
