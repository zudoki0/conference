import flatpickr from 'flatpickr';
import './bootstrap.js';

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
        })
    })
})

$("#conference-form").addEventListener('click', function(event) {
    event.preventDefault()
    alert("dsgijndgokdsngodsgndsogns")
})

/*
const element = document.getElementById("conference-form").addEventListener('click', function(event) {
    event.preventDefault()
    alert("asgfadgdagadg")
})*/