<template>
    <h1 class="p-2 bg-blue-400 my-4 text-2xl">{{title}}</h1>
</template>

<script>
    export default {
        name: "PageTitle",
        props: { 'title': String }
    }
</script>

<style scoped>

</style>
