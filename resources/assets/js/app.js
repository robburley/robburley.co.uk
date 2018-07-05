require('./bootstrap')

window.Vue = require('vue')

import {library} from '@fortawesome/fontawesome-svg-core'
import {fas} from '@fortawesome/free-solid-svg-icons'
import {fab} from '@fortawesome/free-brands-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
import vueSmoothScroll from 'vue-smooth-scroll'

Vue.use(vueSmoothScroll)

library.add(fas)
library.add(fab)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.component('nav-bar', require('./components/NavBar.vue'))

const app = new Vue({
    el: '#app',
})
