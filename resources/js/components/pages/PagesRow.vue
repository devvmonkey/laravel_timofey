<template>
<div scope="row" >
<div class="table-flex-line single-item">
	<div class="table-flex-line-games">
		<img src="fortnite.png">
	</div>
	<div class="table-flex-line-name">
		<a href="#">{{ page.title }}</a>
	</div>
	<div class="table-flex-line-status">
		<span>СТАТУС</span>
			<p v-if="page.status == 'Активный'" class="status-active">Активный<span>{{ page.start_at }}</span></p>
			<p v-if="page.status == 'Прошедший'" class="status-prev">Прошедший <span>{{ page.start_at }}</span></p>
			<p v-if="page.status == 'Предстоящий'" class="status-next">Предстоящий <span>{{ page.start_at }}</span></p>

	</div>
	<div class="table-flex-line-format">
		<span>ФОРМАТ</span>
			<p>{{ page.format }}<span>{{ page.format_desc }}</span></p>
	</div>
	<div class="table-flex-line-people">
		<span>УЧАСТНИКИ</span>
		<p>23/128</p>
	</div>
	<div class="table-flex-line-prize">
		<span>ПРИЗЫ</span>
		<p>{{ page.prizes }}</p>
	</div>


</div>

</template>
<script>
	export default {
		props: {
			page: {
				type: Object
			},
      index: Number
		}
	}
</script>
