<template>
  <div>
    <div class="container">
      <br />
      <h2 class="text-center">SHOWS DATABASE USERS</h2>
      <br />
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
          </tr>
          <tr v-for="(districts,index) in users">
            <td>{{districts.id}}</td>
            <td>{{districts.name_th}}</td>
            <td>{{districts.name_en}}</td>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    this.getUserData();
    // console.log("OK");
  },
  methods: {
    getUserData() {
        // console.log("Data OK");
      axios.get("api/users").then(response => {
        this.users = response.data;
      });
    },
    deleteUser(id, index) {
      // console.log(id);
      axios.delete("api/users/" + id).then(response => {
        this.users.splice(index, 1);
      });
    }
  },
  data() {
    return {
      users: [],
      users: {
        id: 0,
        name_th: "",
        name_en: ""
      }
    };
  }
};
</script>

