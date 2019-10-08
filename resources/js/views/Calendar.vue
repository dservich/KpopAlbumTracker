<template>
	<div>
		<page-title title="Calendar"/>

		<FullCalendar defaultView="dayGridMonth" :plugins="calendarPlugins" :eventSources="eventSources"/>
	</div>
</template>

<script>
	import FullCalendar from '@fullcalendar/vue'
	import dayGridPlugin from '@fullcalendar/daygrid'
    import PageTitle from "../components/PageTitle";

	export default {
		components: {
			FullCalendar,
            PageTitle
		},
		data() {
		    return {
		    	calendarPlugins: [ dayGridPlugin ],
		    	eventSources: [
		    		{
		    			url: '/api/comebacks/calendar',
		    			method: 'GET',
		    		}
		    	],
		    }
		}
	}
</script>

<style lang="scss">
	@import '~@fullcalendar/core/main.css';
	@import '~@fullcalendar/daygrid/main.css';
</style>
