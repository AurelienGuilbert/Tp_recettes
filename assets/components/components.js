import Vue from 'vue'

// Components 
// title
Vue.component('page-title', {
    props: ['name'],
    template: '<h3>{{ name }}</h3>'
    })
//button
Vue.component('page-button', {
    props: ['name', 'link', 'custom'],
    template: '<a :href=link><button :class=custom>{{ name }}</button></a>'
    })
    
