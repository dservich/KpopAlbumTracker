<template>
	<div>
		<h1 class="py-6 bg-blue-400">Comeback Calendar</h1>

		<FullCalendar defaultView="dayGridMonth" :plugins="calendarPlugins" :eventSources="eventSources"/>
	</div>
</template>

<script>
	import FullCalendar from '@fullcalendar/vue'
	import dayGridPlugin from '@fullcalendar/daygrid'

	export default {
		components: {
			FullCalendar 
		},
		data() {
		    return {
		    	calendarPlugins: [ dayGridPlugin ],
		    	eventSources: [
		    		{
		    			url: '/comebacks/calendar',
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