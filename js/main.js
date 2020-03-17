 let app = new Vue({

    el: '#app',

    data:{
        expanded:false

    },

    methods:{
        burgerMenu(){

            this.expanded = !this.expanded;
        }

    

    },

    mounted: function() {
        console.log('soyoon');
    }

})