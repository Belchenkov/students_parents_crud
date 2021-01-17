import axios from "axios";

export default {
    async loadStudents(context) {
        try {
            const res = await axios.get(`${process.env.VUE_APP_API_URL}/students`);
            const data = res.data.data;
            context.commit('setStudents', data);
        } catch (e) {
            console.log(e);
        }
    },
    async addStudent(context, data) {
        try {
            const res = await axios.post(`${process.env.VUE_APP_API_URL}/students`, data);
            context.commit('addStudent', data);
        } catch (e) {
            console.log(e);
        }
    },
    async editStudent(context, student) {
        try {
            const res = await axios.put(`${process.env.VUE_APP_API_URL}/students/${student.id}`, student);
            context.commit('editStudent', student);
        } catch (e) {
            console.log(e);
        }
    },
    async deleteStudent(context, id) {
        try {
            const res = await axios.delete(`${process.env.VUE_APP_API_URL}/students/${id}`);
            context.commit('deleteStudent', id);
        } catch (e) {
            console.log(e);
        }
    }
};
