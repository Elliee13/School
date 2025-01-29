<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMCTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="reserve.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body>
    <div class="app-container flex justify-center items-end">
    <img 
        class="absolute z-0 bg-no-repeat w-full h-full
           hidden sm:block sm:object-fill sm:h-[100vh] 
           hidden md:block md:object-cover md:h-[100vh] 
           lg:object-cover lg:h-[100vh]"
        src="./school.jpg" 
        alt="image1" 
        style="object-fit: fill; opacity: 0.9;">
        <div class="circle rounded-full"></div>
        <div class="absolute top-11 flex flex-col w-full items-center px-4 md:px-0">
            <div class="flex items-center w-full justify-end pr-8">
                <div class="relative flex items-center space-x-4">
                <div class="relative">
                    <button id="notificationButton" class="flex items-center justify-center w-10 h-10 bg-white rounded-full app-shadow">
                        <i class="fa-regular fa-bell app-color-black"></i>
                    </button>
                    <div
                        id="notificationDropdown"
                        class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg z-50"
                    >
                        <div class="p-4 border-b">
                            <p class="font-semibold text-sm">Notifications</p>
                        </div>
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">New message from Admin</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Booking Approved</a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">System Maintenance Notice</a>
                        </div>
                    </div>
                </div>
                <div class="relative">
                <button id="accountButton" class="flex bg-white px-6 py-4 app-shadow rounded-md cursor-pointer items-center">
                    <span class="font-bold app-color-black text-xs">Account</span>
                    <div class="w-px app-bg-light-white-2 mx-4"></div>
                    <i class="fa-regular fa-user mr-2 app-color-black"></i>
                    <i id="accountArrow" class="fa-solid fa-angle-down text-xs app-color-black"></i>
                </button>
                    <div
                        id="accountDropdown"
                        class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg z-50"
                    >
                        <div class="p-4 border-b">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                    <i class="fa-regular fa-user text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-sm">John Ellemeleck P. Austria</p>
                                    <p class="text-xs text-gray-500">Student ID: C230117</p>
                                    <p class="text-xs text-gray-500">BSCS    - 2nd Year</p>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <a href="history.php" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                <i class="fa-solid fa-clock-rotate-left mr-3"></i> Booking History
                            </a>
                            <a href="./Pending_book.php" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                <i class="fa-solid fa-hourglass-half mr-3"></i> Pending Bookings
                            </a>
                            <a href="./Active_reserve.php" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                <i class="fa-solid fa-calendar-check mr-3"></i> Active Reservations
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">
                                <i class="fa-solid fa-gear mr-3"></i> Settings
                            </a>
                            <div class="border-t mt-2">
                                <a
                                    href="login.php"
                                    class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                                >
                                    <i class="fa-solid fa-right-from-bracket mr-3"></i> Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="position-absolute">
                <img src="./logo.jpg" alt="SMCTI Logo" class="w-24 h-24">
            </div>
            <div class="flex flex-col text-center my-8">
                <span class="font-semibold text-2xl sm:text-4xl mb-4 app-title" style="color: white;">Which facility would you like to reserve?</span>
                <span class="app-color-black font-semibold text-sm sm:text-base" style="color: white;">Book your school facilities here!</span>
            </div>
            <div class=" sm:w-11/12 md:w-10/12 px-4 sm:px-6 pt-8 sm:pt-10 pb-12 sm:pb-16 app-shadow rounded-xl backdrop-blur-[200px]">
            <div class="flex flex-wrap sm:flex-nowrap pr-0 sm:pr-6 rounded-lg">
                    <div style="color: white;" class="flex justify-between items-center w-full">
                        <div class="ml-4 flex space-x-5 sm:space-x-8 bg-gray-100 p-3 rounded-xl ">
                            <a class="option-tab font-semibold text-sm app-color-gray">Academic</a>
                            <a href="sports.php" class="option-tab font-semibold text-sm app-color-gray">Sports</a>
                            <a href="events.php" class="option-tab font-semibold text-sm app-color-gray">Events</a>
                        </div>
                        <div id="academic-select" style="display: none;">Academic Content</div>
                        <div id="sports-select" style="display: none;">Sports Content</div>
                        <div id="events-select" style="display: none;">Events Content</div>
                        <div class="flex items-center space-x-6">
                            <button style="\" class="book-now-btn px-6 py-2 rounded-md text-white font-semibold text-sm; color: white;">
                                Book Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row mt-8 sm:mt-16 space-y-4 sm:space-y-0">
                    <div class="bg-white/80 sm:mx-6 flex flex-col w-full sm:w-1/3 p-6 rounded-xl border-2 border-white">
                        <span class="font-semibold text-xs app-color-lavendar">Select Facility</span>

                        <select class="reservation-input" id="academic-select">
                            <option value="">Select Academic Facility</option>
                            <option value="comlabs">Computer Laboratories</option>
                            <option value="classrooms">Classrooms</option>
                            <option value="library">Library Study Rooms</option>
                        </select>

                        <select class="reservation-input" id="sports-select" style="display: none;">
                            <option value="">Select Sports Facility</option>
                            <option value="gym">Gymnasium</option>
                            <option value="volleyball">Volleyball Courts</option>
                        </select>

                        <select class="reservation-input" id="events-select" style="display: none;">
                            <option value="">Select Event Facility</option>
                            <option value="function-halls">Function Halls</option>
                            <option value="marian-hotel">Marian Hotel</option>
                            <option value="hud">HUD Facilities</option>
                        </select>
                    </div>
                    <div class="bg-white/80 sm:mx-6 flex flex-col w-full sm:w-1/3 p-6 rounded-xl border-2 border-white">
                        <span class="font-semibold text-xs app-color-lavendar">Date & Time</span>
                        <div class="flex flex-col space-y-4">
                            <input type="date" class="reservation-input" id="date-select">
                            <select class="reservation-input" id="time-slot">
                                <option value="">Select time slot</option>
                                <option value="morning">Morning (8:00 AM - 12:00 PM)</option>
                                <option value="afternoon">Afternoon (1:00 PM - 5:00 PM)</option>
                                <option value="evening">Evening (6:00 PM - 9:00 PM)</option>
                                <option value="full-day">Full Day (8:00 AM - 5:00 PM)</option>
                            </select>
                        </div>
                    </div>
                    <div class="bg-white/80 sm:mx-6 flex flex-col w-full sm:w-1/3 p-6 rounded-xl border-2 border-white">
                        <span class="font-semibold text-xs app-color-lavendar">Purpose & Attendees</span>
                        <div class="reservation-details">
                            <select class="reservation-input mb-1" id="purpose">
                                <option value="">Select purpose</option>
                                <option value="class">Class Activity</option>
                                <option value="meeting">Organization Meeting</option>
                                <option value="event">School Event</option>
                                <option value="practice">Sports Practice</option>
                                <option value="other">Other</option>
                            </select>
                            <input type="number" 
                                   class="reservation-input" 
                                   placeholder="Number of Attendees"
                                   min="1" 
                                   max="500" 
                                   id="attendees">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-lg w-96 mx-auto mt-20 p-6">
            <h3 class="text-lg font-semibold mb-4">Edit Profile</h3>
            <form id="profileForm">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm text-gray-600">Name</label>
                        <input type="text" id="userName" class="w-full p-2 border rounded" value="Juan Dela Cruz">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600">Student ID</label>
                        <input type="text" id="studentId" class="w-full p-2 border rounded" value="2021-00123" readonly>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600">Course</label>
                        <input type="text" id="course" class="w-full p-2 border rounded" value="BSIT">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600">Year Level</label>
                        <select id="yearLevel" class="w-full p-2 border rounded">
                            <option value="1">1st Year</option>
                            <option value="2" selected>2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" class="px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded" onclick="closeModal('editProfileModal')">Cancel</button>
                    <button type="submit" class="px-4 py-2 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <div id="cancelBookingModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-lg w-96 mx-auto mt-20 p-6">
            <h3 class="text-lg font-semibold mb-4">Cancel Booking</h3>
            <p class="text-gray-600 mb-4">Are you sure you want to cancel your booking for Computer Lab 3?</p>
            <div class="flex justify-end space-x-3">
                <button class="px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded" onclick="closeModal('cancelBookingModal')">No, Keep it</button>
                <button class="px-4 py-2 text-sm text-white bg-red-600 hover:bg-red-700 rounded" onclick="cancelBooking()">Yes, Cancel</button>
            </div>
        </div>
    </div>

    <div class="dropdown-overlay" id="dropdownOverlay"></div>

    <script>
        // Get elements
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

        document.addEventListener('DOMContentLoaded', () => {
        // Handle click on Book Now button
        document.querySelector('.book-now-btn').addEventListener('click', (e) => {
        e.preventDefault();

        // Select dropdowns
        const academicSelect = document.querySelector('#academic-select');
        const sportsSelect = document.querySelector('#sports-select');
        const eventsSelect = document.querySelector('#events-select');

        // Check and set visibility based on the active tab
        const activeTab = document.querySelector('.option-tab.active');
        if (activeTab) {
            // Hide all dropdowns first
            academicSelect.style.display = 'none';
            sportsSelect.style.display = 'none';
            eventsSelect.style.display = 'none';

            // Display the relevant dropdown based on the active tab
            if (activeTab.textContent === 'Academic') {
                academicSelect.style.display = 'block';
            } else if (activeTab.textContent === 'Sports') {
                sportsSelect.style.display = 'block';
            } else if (activeTab.textContent === 'Events') {
                eventsSelect.style.display = 'block';
            }
        }

        // Initialize the selected facility
        let facility = '';

        // Check visibility and get the selected value
        if (getComputedStyle(academicSelect).display !== 'none' && academicSelect.value.trim() !== '') {
            facility = academicSelect.value.trim();
        } else if (getComputedStyle(sportsSelect).display !== 'none' && sportsSelect.value.trim() !== '') {
            facility = sportsSelect.value.trim();
        } else if (getComputedStyle(eventsSelect).display !== 'none' && eventsSelect.value.trim() !== '') {
            facility = eventsSelect.value.trim();
        }

        // Debugging: Check selected facility
        console.log('Selected Facility:', facility);

        // Validation: If no facility is selected
        if (!facility) {
            alert("Please select a facility.");
            return;
        }

        // Success case
        alert(`Facility selected: ${facility}`);
    });

        // Handle tab switching (academic, sports, events)
        const tabs = document.querySelectorAll('.option-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active')); // Remove active class from all tabs
                tab.classList.add('active'); // Add active class to clicked tab
        });
        });
    });




    </script>
</body>

</html>