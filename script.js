const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

signUpButton.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default button behavior
  signInForm.classList.add('hidden');
  signUpForm.classList.remove('hidden');
});

signInButton.addEventListener('click', function (event) {
  event.preventDefault(); // Prevent default button behavior
  signUpForm.classList.add('hidden');
  signInForm.classList.remove('hidden');
});  
          
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.option-tab');
    const academicSelect = document.getElementById('academic-select');
    const sportsSelect = document.getElementById('sports-select');
    const eventsSelect = document.getElementById('events-select');
    
    
    academicSelect.style.display = 'none';
    sportsSelect.style.display = 'none';
    eventsSelect.style.display = 'none';

    
    academicSelect.style.display = 'block';

    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => {
                t.classList.remove('active');
                t.style.animation = '';
            });

            this.classList.add('active');
            this.style.animation = 'scaleText 0.5s ease';

            academicSelect.style.display = 'none';
            sportsSelect.style.display = 'none';
            eventsSelect.style.display = 'none';

            const type = this.dataset.type;
            if (type === 'academic') {
                academicSelect.style.display = 'block';
            } else if (type === 'sports') {
                sportsSelect.style.display = 'block';
            } else if (type === 'events') {
                eventsSelect.style.display = 'block';
            }
        });
        tab.addEventListener('animationend', function() {
            this.style.animation = '';
        });

        tab.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'scale(1.1)';
            }
        });

        tab.addEventListener('mouseleave', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'scale(1)';
            }
        });
    });

    $('#academic-select').select2();
    $('#sports-select').select2();
    $('#events-select').select2();
});


const dateSelect = document.getElementById('date-select');
dateSelect.min = new Date().toISOString().split('T')[0];

const attendeesInput = document.getElementById('attendees');
attendeesInput.addEventListener('change', function() {
    if (this.value < 1) this.value = 1;
    if (this.value > 500) this.value = 500;
});

/// Get elements
const notificationButton = document.getElementById("notificationButton");
const notificationDropdown = document.getElementById("notificationDropdown");
const accountButton = document.getElementById("accountButton");
const accountDropdown = document.getElementById("accountDropdown");

// Toggle notification dropdown
notificationButton.addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent click bubbling
    notificationDropdown.classList.toggle("hidden");
    accountDropdown.classList.add("hidden"); // Close account dropdown
});

// Toggle account dropdown
accountButton.addEventListener("click", (e) => {
    e.stopPropagation(); // Prevent click bubbling
    accountDropdown.classList.toggle("hidden");
    notificationDropdown.classList.add("hidden"); // Close notification dropdown
});

// Close dropdowns when clicking outside
document.addEventListener("click", () => {
    notificationDropdown.classList.add("hidden");
    accountDropdown.classList.add("hidden");
});