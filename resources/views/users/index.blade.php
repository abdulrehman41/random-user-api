@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center">
                <label for="gender" class="mr-2 text-gray-700 font-semibold">Filter by Gender:</label>
                <select id="gender" class="border border-gray-300 rounded-md p-2" onchange="fetchUsers()">
                    <option value="">All</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="flex items-center">
                <input type="text" id="search" class="border border-gray-300 rounded-md p-2 mr-2"
                    placeholder="Search by name..." />
                <button onclick="fetchUsers()" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    <i class="fas fa-search"></i> Search
                </button>
            </div>
        </div>

        <!-- Loader -->
        <div id="loader" class="hidden flex justify-center items-center my-6">
            <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-blue-600"></div>
        </div>

        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead class="bg-gray-200 text-gray-600">
                <tr>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Gender</th>
                    <th class="py-2 px-4">Location</th>
                    <th class="py-2 px-4">Profile</th>
                </tr>
            </thead>
            <tbody id="user-list" class="text-gray-700">
                <!-- User rows will be inserted here via JavaScript -->
            </tbody>
        </table>

        <div class="flex justify-between items-center mt-4">
            <button id="prev-page" onclick="prevPage()"
                class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 disabled:opacity-50" disabled>
                <i class="fas fa-arrow-left"></i> Previous
            </button>
            <span id="page-number" class="text-gray-700 font-semibold">1</span>
            <button id="next-page" onclick="nextPage()"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Next <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <script>
        let currentPage = 1;
        let fetchedUsers = []; // Store fetched users for local filtering

        // Function to show loader
        function showLoader() {
            document.getElementById('loader').classList.remove('hidden');
        }

        // Function to hide loader
        function hideLoader() {
            document.getElementById('loader').classList.add('hidden');
        }

        function fetchUsers() {
            const gender = document.getElementById('gender').value;
            const search = document.getElementById('search').value.toLowerCase();
            const url = `https://randomuser.me/api/?page=${currentPage}&results=10&gender=${gender}`;

            // Show loader before fetching data
            showLoader();

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    fetchedUsers = data.results; // Store fetched users

                    // Apply search filter
                    const filteredUsers = fetchedUsers.filter(user => {
                        const fullName = `${user.name.first} ${user.name.last}`.toLowerCase();
                        return fullName.includes(search);
                    });

                    renderUsers(filteredUsers);

                    document.getElementById('prev-page').disabled = currentPage === 1;

                    // Hide loader after data is fetched
                    hideLoader();
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    hideLoader(); // Hide loader even on error
                });
        }

        // Function to render users
        function renderUsers(users) {
            const userList = document.getElementById('user-list');
            userList.innerHTML = '';

            users.forEach(user => {
                userList.innerHTML += `
            <tr class="border-b">
                <td class="py-2 px-4">${user.name.first} ${user.name.last}</td>
                <td class="py-2 px-4">${user.email}</td>
                <td class="py-2 px-4 capitalize">${user.gender}</td>
                <td class="py-2 px-4">${user.location.city}, ${user.location.country}</td>
                <td class="py-2 px-4"><a href="/users/${user.login.uuid}" class="text-blue-600 hover:underline">View Profile</a></td>
            </tr>
        `;
            });

            if (users.length === 0) {
                userList.innerHTML = '<tr><td colspan="5" class="py-4 text-center text-gray-500">No users found</td></tr>';
            }
        }

        function nextPage() {
            currentPage++;
            fetchUsers();
            document.getElementById('page-number').textContent = currentPage;
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                fetchUsers();
                document.getElementById('page-number').textContent = currentPage;
            }
        }

        // Fetch initial users on page load
        fetchUsers();
    </script>
@endsection
