<template>
    <div class="d-flex justify-center mt-6">
      <v-list dense class="text-center list-background">
        <v-subheader>Project Setup Steps</v-subheader>
        <v-list-item-group>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>1. Install Laravel</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>2. Integrate Vue & Vuetify into Laravel</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>3. Create migration file for products table</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>4. Modify migration file, add fields</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>5. Create Seeder, edit Seeder, install League\Csv\Reader</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>6. Invoke ProductsTableSeeder in DatabaseSeeder</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>7. Run migrations and Seeder using php artisan migrate:fresh --seed</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>8. Create product model</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>9. Create controller to retrieve product data</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>10. Create frontend page and use axios to fetch data and display using v-data-table</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </div>
  </template>
  
  <style scoped>
  .d-flex {
    width: 100%;
    display: flex;
    justify-content: center;
  }
  
  .list-background {
    background-color: #f5f5f5;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    width: 80%;
  }
  </style>
  