<template>
    <div class="mt-6 data-table mb-6">
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
        style="width: 400px;"
      ></v-text-field>
      <v-data-table
        :headers="headers"
        :items="filteredProducts"
        :items-per-page="25"
        :search="search"
        class="elevation-1 mt-6"
        :loading="loading"
      >
        <template v-slot:[`item.badge`]="{ item }">
          <v-chip v-if="item.badge" class="ma-2" color="primary" dark>
            {{ item.badge }}
          </v-chip>
        </template>
      </v-data-table>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        products: [],
        search: '',
        headers: [
        { title: 'Product Name', value: 'name', sortable: true },
          { title: 'Category', value: 'category' },
          { title: 'Price', value: 'price', sortable: true },
          { title: 'Rating', value: 'rating', sortable: true },
          { title: 'Reviews', value: 'reviews' },
          { title: 'Badge', value: 'badge' },
          { title: 'Created At', value: 'created_at' },
          { title: 'Updated At', value: 'updated_at' },
        ],
        loading: true
      };
    },
    computed: {
      filteredProducts() {
        return this.products.filter((product) => {
          return product.name.toLowerCase().includes(this.search.toLowerCase());
        });
      },
    },
    mounted() {
      axios.get('/products')
        .then(response => {
          this.products = response.data;
          this.loading = false;
        })
        .catch(error => {
          console.error('Error fetching products:', error);
          this.loading = false;
        });
    }
  };
  </script>
  <style>
  </style>
  