// This file contains the JavaScript code for the client-side application. It handles user interactions and communicates with the server.

document.addEventListener('DOMContentLoaded', function() {
    const shareLocationButton = document.getElementById('share-location');
    
    shareLocationButton.addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const data = {
                    latitude: position.coords.latitude,
                    longitude: position.coords.longitude
                };
                
                fetch('/api/location', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Location shared successfully:', data);
                })
                .catch((error) => {
                    console.error('Error sharing location:', error);
                });
            }, function(error) {
                console.error('Error getting location:', error);
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
        }
    });
});