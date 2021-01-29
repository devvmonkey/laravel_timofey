<template>
	<tr>
      <th scope="row">{{ use.id }}</th>
      <td>{{ use.first_name }}</td>
      <td>{{ use.last_name }}</td>
      <td>{{ use.email }}</td>
      <td>
          <router-link :to="editUserUrl" class="btn btn-warning text-white">Edit</router-link>
      	<button @click='confirmBeforeDelete' type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
</template>

<script>
	export default {
		props: {
			user: {
				type: Object
			},
      index: Number
		},

    computed: {
		  editUserUrl(){
		    return `/use/${this.use.id}`;
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
	    deleteUse(){
        axios.delete(`/api/uses/${this.use.id}`).then((resp) =>{
          this.$emit('userRemoved', this.index);
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
             app.deleteUser();
          }
        })
      }
    }
	}
</script>
