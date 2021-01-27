export default {
    setStudents(state, students) {
        state.students = students;
    },
    addStudent(state, student) {
        state.students.push(student);
    },
    editStudent(state, student) {
        state.students.splice(student.id, 1, student);
    },
    deleteStudent(state, id) {
        state.students.splice(id, 1);
    }
};
