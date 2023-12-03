import flatpickr from 'flatpickr';
import './bootstrap.js';

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
            enableTime: true
        })
    })
})

document.addEventListener('change', function(event) {
    event.preventDefault()
    document.getElementById('status').value = document.getElementById('selectStatus').value
})

document.addEventListener('change', function(event) {
    event.preventDefault()
    document.getElementById('maxPart').value = document.getElementById('selectMaxPart').value
})

document.addEventListener('change', function(event) {
    event.preventDefault()
    document.getElementById('descriptionText').value = document.getElementById('descriptionTextArea').value
})

document.addEventListener('DOMContentLoaded', function(event) {
    event.preventDefault()
    document.getElementById('descriptionTextArea').value = document.getElementById('descriptionText').value
})

document.addEventListener('DOMContentLoaded', function(event) {
    event.preventDefault()
    document.getElementById('selectMaxPart').value = document.getElementById('maxPart').value
})

document.addEventListener('DOMContentLoaded', function(event) {
    event.preventDefault()
    document.getElementById('selectStatus').value = document.getElementById('status').value
})