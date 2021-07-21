<template>
  <v-app>
    <v-card>
      <v-card-title>
        <!-- Nutrition -->
        <button class="btn btn-primary btn-sm float-right" type="button">
          Add Category
        </button>
        <v-spacer></v-spacer>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
      </v-card-title>
      <v-data-table :headers="headers" :items="categories" :search="search">
        <template v-slot:item="row">
          <tr>
            <td>{{ row.item.name_categori }}</td>
            <td>
              <button type="button" class="btn btn-info btn-sm btn-flat">
                EDIT
              </button>
              <button type="button" class="btn btn-danger btn-sm btn-flat">
                DELETE
              </button>
            </td>
          </tr>
        </template>
        <v-alert slot="no-results" :value="true" color="red" icon="warning">
          Your search for "{{ search }}" found no results.
        </v-alert>
      </v-data-table>
    </v-card>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      headers: [
        {
          text: "Name Category",
          value: "name_categori",
        },
        { text: "Action", value: "" },
      ],
      categories: [],
    };
  },
  methods: {
    getCategories() {
      axios
        .get("http://vue-ticket.test/api/categori")
        .then((response) => (this.categories = response.data.data));
    },
  },
  created() {
    this.getCategories();
  },
};
</script>

<style scoped>
</style>