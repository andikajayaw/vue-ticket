<template>
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
    <v-data-table :headers="headers" :items="desserts" :search="search">
      <template v-slot:item="row">
        <tr>
          <td>{{ row.item.name }}</td>
          <td>
            <button type="button" class="btn btn-info btn-sm">EDIT</button>
            <button type="button" class="btn btn-danger btn-sm">DELETE</button>
          </td>
        </tr>
      </template>
    </v-data-table>
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      search: "",
      headers: [
        {
          text: "Name Category",
          value: "name",
        },
        { text: "Action", value: "" },
      ],
      desserts: [
        {
          name: "Frozen Yogurt",
        },
      ],
    };
  },
};
</script>

<style scoped>
</style>