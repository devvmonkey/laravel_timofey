<template>
	<div>
				<div class="table-flex">
					<div class="table-flex-title">
						<div class="table-flex-title-games">
							ИГРА
						</div>
						<div class="table-flex-title-name">
							НАЗВАНИЕ
						</div>
						<div class="table-flex-title-status">
							СТАТУС
						</div>
						<div class="table-flex-title-format">
							ФОРМАТ
						</div>
						<div class="table-flex-title-people">
							УЧАСТНИКИ
						</div>
						<div class="table-flex-title-prize">
							ПРИЗЫ
						</div>
</div>
</div>
				<div>
					<page-row v-for="(page, index) in pages" :page="page" :index="index" :key="page.id" ></page-row>
				</div>
	</div>
</template>

<script>
	import PageRow from './PagesRow.vue';

	export default {
		data(){
			return {
				pages: []
			}
		},
		mounted(){
			axios.get('/api/pages').then((response) =>  {
				this.pages = response.data;
	
			});

		},
		components: {
			PageRow
		}
	}
</script>

<style>
	
</style>
