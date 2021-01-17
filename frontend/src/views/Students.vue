<template>
  <div>
    <h1 class="mb-5">Ученики</h1>

    <v-data-table
        :headers="headers"
        :items="students"
        sort-by="calories"
        class="elevation-5"
    >
      <template v-slot:top>
        <v-toolbar
            flat
        >
          <v-toolbar-title>Список учеников</v-toolbar-title>
          <v-divider
              class="mx-4"
              inset
              vertical
          ></v-divider>
          <v-spacer></v-spacer>
          <v-dialog
              v-model="dialog"
              max-width="500px"
          >
            <template v-slot:activator="{ on, attrs }">
              <v-btn
                  color="primary"
                  dark
                  class="mb-2"
                  v-bind="attrs"
                  v-on="on"
              >
                Добавить ученика
              </v-btn>
            </template>
            <v-card>
              <v-card-title>
                <span class="headline">{{ formTitle }}</span>
              </v-card-title>

              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col
                        cols="12"
                        sm="6"
                        md="4"
                    >
                      <v-text-field
                          v-model="editedItem.fio"
                          label="Dessert fio"
                      ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        sm="6"
                        md="4"
                    >
                      <v-text-field
                          v-model="editedItem.calories"
                          label="Calories"
                      ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        sm="6"
                        md="4"
                    >
                      <v-text-field
                          v-model="editedItem.fat"
                          label="Fat (g)"
                      ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        sm="6"
                        md="4"
                    >
                      <v-text-field
                          v-model="editedItem.carbs"
                          label="Carbs (g)"
                      ></v-text-field>
                    </v-col>
                    <v-col
                        cols="12"
                        sm="6"
                        md="4"
                    >
                      <v-text-field
                          v-model="editedItem.protein"
                          label="Protein (g)"
                      ></v-text-field>
                    </v-col>
                  </v-row>
                </v-container>
              </v-card-text>

              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    color="blue darken-1"
                    text
                    @click="close"
                >
                  Cancel
                </v-btn>
                <v-btn
                    color="blue darken-1"
                    text
                    @click="save"
                >
                  Save
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-toolbar>
      </template>
      <template v-slot:item.actions="{ item }">
        <v-icon
            small
            class="mr-2"
            @click="editItem(item)"
        >
          mdi-pencil
        </v-icon>
        <v-icon
            small
            @click="deleteItem(item)"
        >
          mdi-delete
        </v-icon>
      </template>
      <template v-slot:no-data>
        Список пуст
      </template>
    </v-data-table>
  </div>
</template>

<script>
import {
  mapGetters,
  mapActions
} from "vuex";

export default {
  name: 'Students',
  components: {
  },
  data: () => ({
    dialog: false,
    headers: [
      {
        text: '#',
        align: 'start',
        sortable: false,
        value: 'id',
      },
      {
        text: 'ФИО',
        align: 'start',
        sortable: false,
        value: 'fio',
      },
      { text: 'Телефон', sortable: false, value: 'phone' },
      { text: 'Адрес', sortable: false, value: 'address' },
      { text: 'Почта', sortable: false, value: 'email' },
      { text: 'Управление', value: 'actions', sortable: false },
    ],
    editedIndex: -1,
    editedItem: {
      fio: null,
      phone: null,
      address: null,
      email: null
    },
    defaultItem: {
      fio: null,
      phone: null,
      address: null,
      email: null
    },
  }),

  computed: {
    ...mapGetters('students', [
       'students'
    ]),
    formTitle () {
      return this.editedIndex === -1 ? 'Создать ученика' : 'Редактировать ученика'
    },
  },

  watch: {
    dialog (val) {
      val || this.close()
    },
  },

  created () {
    this.initialize()
  },

  methods: {
    ...mapActions('students', [
      'loadStudents'
    ]),
    initialize () {
      this.loadStudents();
    },

    editItem (item) {
      this.editedIndex = this.students.indexOf(item)
      this.editedItem = Object.assign({}, item)
      this.dialog = true
    },

    deleteItem (item) {
      const index = this.students.indexOf(item)
      confirm('Are you sure you want to delete this item?') && this.students.splice(index, 1)
    },

    close () {
      this.dialog = false
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem)
        this.editedIndex = -1
      })
    },

    save () {
      if (this.editedIndex > -1) {
        Object.assign(this.students[this.editedIndex], this.editedItem)
      } else {
        this.students.push(this.editedItem)
      }
      this.close()
    },
  },
}
</script>
