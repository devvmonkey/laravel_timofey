<template>
	<tr>
      <th scope="row">{{ usse.id }}</th>
      <td>{{ usse.first_name }}</td>
      <td>{{ usse.last_name }}</td>
      <td>{{ usse.email }}</td>
      <td>
          <router-link :to="editUsseUrl" class="btn btn-warning text-white">Edit</router-link>
      	<button @click='confirmBeforeDelete' type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
</template>

<script>
	export default {
		props: {
			usse: {
				type: Object
			},
      index: Number
		},

    computed: {
		  editUsseUrl(){
		    return `/usses/${this.usse.id}`;
      }
    },

    notifications: {
      showErrorMsg: {
        type: 'error',
        title: 'Something went wrong',
        message: 'Something happend deleting the user, try again later'
      }
    },

    methods: {
	    deleteUsse(){
        axios.delete(`/api/usses/${this.usse.id}`).then((resp) =>{
          this.$emit('usseRemoved', this.index);
        })
        .catch((resp) => {
          this.showErrorMsg();
        });
      },

      confirmBeforeDelete(){
        var app = this;
        this.$swal({
          title: "Are you sure?",
          text: "This user will be deleted permanently from the system",
          icon: "warning",
          buttons: true,
          dangerMode: true
        })
        .then((willDelete) => {
          if(willDelete){
             app.deleteUsse();
          }
        })
      }
    }
	}
</script>
