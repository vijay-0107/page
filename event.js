const eventContainer = document.getElementById('eventContainer');
const overlay = document.getElementById('overlay');
const expandedCard = document.getElementById('expandedCard');

// Sample data for event cards
const eventData = [
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    { image: 'event1.jpg', speaker: 'Speaker 1', date: '2023-01-01', topic: 'Topic 1', description: 'Description for Event 1' },
    // Add more event data as needed
];

// Function to create an event card
function createEventCard(event) {
    const card = document.createElement('div');
    card.classList.add('event-card');
    card.innerHTML = `
        <img src="${event.image}" alt="Event Image">
        <div class="event-details">
            <p>${event.speaker}</p>
            <p>${event.date}</p>
            <p>${event.topic}</p>
        </div>
    `;
    card.addEventListener('click', () => showExpandedCard(event));
    eventContainer.appendChild(card);
}

// Function to show the expanded card
function showExpandedCard(event) {
    overlay.style.display = 'flex';
    expandedCard.innerHTML = `
        <div class="collage">
            <img src="${event.image}" alt="Event Image">
            <!-- Add more images for the collage as needed -->
        </div>
        <p>${event.description}</p>
        <button class="close-btn" onclick="closeCard()">Close</button>
    `;
}

// Function to close the expanded card
function closeCard() {
    overlay.style.display = 'none';
}

// Initialize the event cards
eventData.forEach(createEventCard);
