import mutations from './mutations';
import actions from './actions';
import getters from './getters';

export default {
    namespaced: true,
    state() {
        return {
            students: [
                {
                    name: 'Иванов Иван Иванович',
                    phone: "8 (987) 234 43 43",
                    address: "Россия, Москва",
                    email: "ivanov@gmail.com"
                }
            ]
        }
    },
    mutations,
    getters,
    actions
}