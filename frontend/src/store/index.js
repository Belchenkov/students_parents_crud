import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import studentsModule from './modules/students/index.js';

export default new Vuex.Store({
  modules: {
    students: studentsModule
  },
  state: {
  },
  mutations: {
  },
  actions: {
  }
})
