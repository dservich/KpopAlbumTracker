<template>
    <article>
        <h2 class="text-lg text-center bg-blue-200 w-full">Latest Announcements</h2>

        <div v-for="comeback in comebacks" :key="comeback.id" class="w-full border border-solid border border-blue-700 p-8 mb-2">
            <h3 class="text-lg font-medium">{{comeback.artist.name}}</h3>
            <div>{{comeback.release_date}}</div>
        </div>
    </article>
</template>

<script>
    export default {
        name: "ComebackFeed",
        data() {
            return {
                comebacks: []
            }
        },
        beforeMount() {
            this.fetchData();
        },
        methods: {
            fetchData() {
                axios.get('/api/comebacks/feed')
                    .then(response => {
                        console.log(response.data);
                        this.comebacks = response.data;
                    }).catch(error => {
                        console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>
