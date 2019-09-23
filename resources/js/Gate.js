export default class Gate {

    constructor (user){
        this.user =user;
    }
    isAdmin(){
        return this.user.role === 'admin';
    }
    isStudent(){
        return this.user.role === 'student';
    }
}
