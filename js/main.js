let app = new Vue({

    el: '#app',
    
    components: {
        'carousel': VueCarousel.Carousel,
        'slide': VueCarousel.Slide
      },
  
    data:{
        expanded:false,

       
        

    },

    methods:{
        burgerMenu(){

            this.expanded = !this.expanded;
        },

        clickShow(){
            this.$refs.locationOne.innerHTML = 'Options clinique - London';
            this.$refs.locationTwo.innerHTML = 'intercommunity health centre';
            this.$refs.locationThree.innerHTML = null;
        },

        clickShow2(){
            this.$refs.locationOne.innerHTML = 'intercommunity health centre';
            this.$refs.locationTwo.innerHTML = 'Regional HIV/AIDS Connection';
            this.$refs.locationThree.innerHTML = null;
        },

        showBtn(){
            this.$refs.locationOne.innerHTML = 'Regional HIV/AIDS Connection';
            this.$refs.locationTwo.innerHTML = null;
            this.$refs.locationThree.innerHTML = null;
        },

        showBtn2(){
            this.$refs.locationOne.innerHTML ='Regional HIV/AIDS Connection';
            this.$refs.locationTwo.innerHTML = 'Anova';
            this.$refs.locationThree.innerHTML = 'Central Spa Bathhouse';
        },

     
        

    },

    mounted: function() {
        console.log('soyoon');
    }
   

})

