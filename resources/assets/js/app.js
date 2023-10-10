import flatpickr from 'flatpickr';
import './bootstrap.js';

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
        })
    })
})
