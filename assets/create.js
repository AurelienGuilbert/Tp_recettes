console.log('home.js');

import Vue from 'vue'

import CreateComponent from './components/create'

new Vue({
    components: { CreateComponent },
    template: "<CreateComponent />"
}).$mount("#create");


