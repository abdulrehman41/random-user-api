@extends('layouts.app')

@section('content')
    <div class="page-container" cz-shortcut-listen="true">
        <div class="profile-header"></div>

        <div class="profile-card-container">
            <div class="profile-card">
                <div class="profile-image">
                    <a href="javascript:getNewUser();"></a>
                    <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Profile Picture" />
                </div>
                <p class="profile-text">Hi, My name is</p>
                <p class="profile-name">Ritthy Powell</p>

                <ul class="profile-icon-list">
                    <li class="profile-icon-item icon-name" data-title="Hi, My name is" data-value="Ritthy Powell"
                        data-label="name"></li>
                    <li class="profile-icon-item icon-email" data-title="My email address is"
                        data-value="ritthy.powell@example.com" data-label="email" data-caps="false"></li>
                    <li class="profile-icon-item icon-birthday" data-title="My birthday is" data-value="7/7/1950"
                        data-label="birthday"></li>
                    <li class="profile-icon-item icon-location" data-title="My address is" data-value="594 James St"
                        data-label="location"></li>
                    <li class="profile-icon-item icon-phone" data-title="My phone number is" data-value="(393) 265-9655"
                        data-label="phone"></li>
                    <li class="profile-icon-item icon-pass" data-title="My password is" data-value="henry" data-label="pass"
                        data-caps="false"></li>
                </ul>
            </div>
        </div>

        <div id="map" class="w-full h-64 rounded-lg mt-6"></div>

        <!-- Nationality Flag -->
        <div id="nationality-flag" class="text-center mt-4">
            <img src="https://flagcdn.com/w320/de.png" alt="Germany Flag" class="mx-auto" />
        </div>
    </div>

    <script>
        const uuid = "{{ $uuid }}";
        let user = null;

        fetch(`https://randomuser.me/api/?uuid=${uuid}`)
            .then(response => response.json())
            .then(data => {
                user = data.results[0];
                // Profile data
                document.querySelector('.profile-image img').src = user.picture.large;
                document.querySelector('.profile-name').textContent = `${user.name.first} ${user.name.last}`;

                // Google Maps Integration
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: parseFloat(user.location.coordinates.latitude),
                        lng: parseFloat(user.location.coordinates.longitude)
                    },
                    zoom: 8
                });

                // Nationality Flag
                const flagContainer = document.getElementById('nationality-flag');
                flagContainer.innerHTML =
                    `<img src="https://flagcdn.com/w320/${user.nat.toLowerCase()}.png" alt="${user.nat} Flag" class="mx-auto" style="width: 50px;">`;
            });

        document.querySelectorAll('.profile-icon-item').forEach(item => {
            item.addEventListener('mouseout', (event) => {
                const title = item.getAttribute('data-title');
                
                switch (title) {
                    case 'Hi, My name is':
                        document.querySelector('.profile-text').textContent = `Hi, My name is`;
                        event.target.style.backgroundPosition = "0px -48px";
                        break;
                    case 'My email address is':
                        document.querySelector('.profile-text').textContent = `Hi, My address is`;
                        document.querySelector('.profile-name').textContent = `${user.email}`;
                        event.target.style.backgroundPosition = "-68px -48px";
                        break;
                    case 'My birthday is':
                        document.querySelector('.profile-text').textContent = `Hi, My birthday is`;
                        document.querySelector('.profile-name').textContent = `${user.dob.date}`;
                        event.target.style.backgroundPosition = "-135px -48px";
                        break;
                    case 'My address is':
                        document.querySelector('.profile-text').textContent = `Hi, My address is`;
                        document.querySelector('.profile-name').textContent = `${user.location.street.name} ${user.location.city}`;
                        event.target.style.backgroundPosition = "-203px -48px";
                        break;
                    case 'My phone number is':
                        document.querySelector('.profile-text').textContent = `Hi, My phone is`;
                        document.querySelector('.profile-name').textContent = `${user.phone}`;
                        event.target.style.backgroundPosition = "-270px -48px";
                        break;
                    case 'My password is':
                        document.querySelector('.profile-text').textContent = `Hi, My password is`;
                        document.querySelector('.profile-name').textContent = `${user.login.password}`;
                        event.target.style.backgroundPosition = "-338px -48px";
                        break;
                    default:
                        break;
                }
            });

            item.addEventListener('mouseover', (event) => {
                // Reset background position when hover ends
                const title = item.getAttribute('data-title');
                switch (title) {
                    case 'Hi, My name is':
                        document.querySelector('.profile-text').textContent = `Hi, My name is`;
                        document.querySelector('.profile-name').textContent = `${user.name.first} ${user.name.last}`;
                        event.target.style.backgroundPosition = "0px -96px";
                        break;
                    case 'My email address is':
                        document.querySelector('.profile-text').textContent = `Hi, My address is`;
                        document.querySelector('.profile-name').textContent = `${user.email}`;
                        event.target.style.backgroundPosition = "-68px -96px";
                        break;
                    case 'My birthday is':
                        document.querySelector('.profile-text').textContent = `Hi, My birthday is`;
                        document.querySelector('.profile-name').textContent = `${user.dob.date}`;
                        event.target.style.backgroundPosition = "-135px -96px";
                        break;
                    case 'My address is':
                        document.querySelector('.profile-text').textContent = `Hi, My address is`;
                        document.querySelector('.profile-name').textContent = `${user.location.street.name} ${user.location.city}`;
                        event.target.style.backgroundPosition = "-203px -96px";
                        break;
                    case 'My phone number is':
                        document.querySelector('.profile-text').textContent = `Hi, My phone is`;
                        document.querySelector('.profile-name').textContent = `${user.phone}`;
                        event.target.style.backgroundPosition = "-270px -96px";
                        break;
                    case 'My password is':
                        document.querySelector('.profile-text').textContent = `Hi, My password is`;
                        document.querySelector('.profile-name').textContent = `${user.login.password}`;
                        event.target.style.backgroundPosition = "-338px -96x";
                        break;
                    default:
                        break;
                }
            });
        });
    </script>

    <!-- Google Maps API -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
@endsection
