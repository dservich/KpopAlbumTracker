<template>
	<div>
		<page-title title="Welcome to the Comeback Calendar"/>

        <comeback-feed></comeback-feed>
	</div>
</template>

<script>
    import PageTitle from "../components/PageTitle";
    import ComebackFeed from "../components/ComebackFeed";

	export default {
	    components: {
            PageTitle,
            ComebackFeed
        },
		data: function() {
			return {

			}
		}
	}
</script>
