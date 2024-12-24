


document.getElementById('sign-out').addEventListener('click', function() {
});

document.getElementById('upload-videos').addEventListener('click', function() {
    // Implement video upload functionality here
});
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // Set the default view to month
        events: [
            // You can add events here, for example:
            {
                title: 'Event 1',
                start: '2023-10-15',
                end: '2023-10-17',
            },
            {
                title: 'Event 2',
                start: '2023-10-25',
                end: '2023-10-27',
            },
            // Add more events as needed
        ],
    });

    calendar.render();
});

