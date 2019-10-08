<template>
    <div>
        <header>
            <h1>KPop Album Tracker</h1>

            <nav class="bg-blue-200 w-full my-2 p-2">
                <router-link :to="{ name: 'home' }" class="underline hover:text-purple-800 px-2">Home</router-link>
                <router-link :to="{ name: 'calendar' }" class="underline hover:text-purple-800 px-2">Calendar</router-link>
                <a href="/admin/comebacks/create" class="underline hover:text-purple-800 px-2">New Comeback</a>
                <a href="/admin/artists/create" class="underline hover:text-purple-800 px-2">New Artist</a>
                <a href="/admin/recordlabels/create" class="underline hover:text-purple-800 px-2">New Record Label</a>
                <a href="/login" class="underline hover:text-purple-800 px-2 float-right">Login</a>
                <a href="/register" class="underline hover:text-purple-800 px-2 float-right">Register</a>
            </nav>
        </header>

        <div class="container mx-auto">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    import PageTitle from "../components/PageTitle";
    export default {
        components: {
            PageTitle
        }
    }
</script>
