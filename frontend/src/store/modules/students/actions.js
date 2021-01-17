export default {
    async loadStudents(context) {
        try {
            const res = await fetch(`${process.env.VUE_APP_API_URL}/students`);
            const { data } = await res.json();

            context.commit('setStudents', data);
        } catch (e) {
            console.log(e);
        }
    }
};
