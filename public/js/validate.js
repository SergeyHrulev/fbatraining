var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//var phoneRE = /^\d{0,3}\d{3}\d{4}$/

var app = new Vue({
    el: '#pos',
    el: '#form',
    data: {
        newUser: {
            name1: '',
            email1: ''
        },
        formUser: {
            name: '',
            email: ''
        }
    },
    computed: {
        validation: function () {
            return {
                name: !!this.newUser.name1.trim(),
                email: emailRE.test(this.newUser.email1)
            }
        },
        formValidation: function () {
            return {
                name: !!this.formUser.name.trim(),
                email: emailRE.test(this.formUser.email)
            }
        },
        isValid: function () {
            var validation = this.validation
            return Object.keys(validation).every(function (key) {
                return validation[key]
            })
        },
        formIsValid: function () {
            var formValidation = this.formValidation
            return Object.keys(formValidation).every(function (key) {
                return formValidation[key]
            })
        },
        // methods: {
        //     addUser: function () {
        //         if (this.isValid){
        //             this.newUser.name = ''
        //             this.newUser.email = ''
        //         }
        //     },
        //     formAddUser: function () {
        //         if (this.formIsValid){
        //             this.formUser.name = ''
        //             this.formUser.email = ''
        //         }
        //     }
        // }
    }
});