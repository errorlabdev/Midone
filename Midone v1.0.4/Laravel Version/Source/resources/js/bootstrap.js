// Load plugins
import $ from 'jquery'
import axios from 'axios'
import helper from './helper'

// Set plugins globally
window.$ = window.jQuery = $
window.axios = axios
window.helper = helper

// CSRF token
let token = document.head.querySelector('meta[name="csrf-token"]')
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}