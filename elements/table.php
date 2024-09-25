<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Pagination</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/bootstrap/bootstrap5.3.0.min.css" rel="stylesheet">
    <style>
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Table with Pagination</h2>

        <!-- Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Table rows will be inserted here by JavaScript -->
            </tbody>
        </table>

        <!-- Pagination Controls -->
        <nav>
            <ul class="pagination" id="pagination">
                <!-- Pagination links will be inserted here by JavaScript -->
            </ul>
        </nav>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/bootstrap/bootstrap5.3.0.min.js"></script>

    <script>
        // Sample data for the table
        const data = [
            { id: 1, name: "John Doe", email: "john@example.com", role: "Admin" },
            { id: 2, name: "Jane Smith", email: "jane@example.com", role: "User" },
            { id: 3, name: "Mike Jones", email: "mike@example.com", role: "Moderator" },
            { id: 4, name: "Anna White", email: "anna@example.com", role: "User" },
            { id: 5, name: "Tom Brown", email: "tom@example.com", role: "User" },
            { id: 6, name: "Sarah Green", email: "sarah@example.com", role: "Admin" },
            { id: 7, name: "David Black", email: "david@example.com", role: "User" },
            { id: 8, name: "Eva Blue", email: "eva@example.com", role: "User" },
            { id: 9, name: "Lucas Gray", email: "lucas@example.com", role: "Moderator" },
            { id: 10, name: "Olivia Pink", email: "olivia@example.com", role: "User" },
            { id: 11, name: "Emma Gold", email: "emma@example.com", role: "Admin" },
            { id: 12, name: "Noah Silver", email: "noah@example.com", role: "User" }
        ];

        const rowsPerPage = 5;
        let currentPage = 1;

        // Function to render the table rows based on the current page
        function renderTable() {
            const start = (currentPage - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const paginatedData = data.slice(start, end);

            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = '';

            paginatedData.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${row.id}</td>
                    <td>${row.name}</td>
                    <td>${row.email}</td>
                    <td>${row.role}</td>
                `;
                tableBody.appendChild(tr);
            });
        }

        // Function to render the pagination controls
        function renderPagination() {
            const totalPages = Math.ceil(data.length / rowsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const li = document.createElement('li');
                li.classList.add('page-item');
                if (i === currentPage) {
                    li.classList.add('active');
                }

                li.innerHTML = `<a class="page-link" href="#" onclick="goToPage(${i})">${i}</a>`;
                pagination.appendChild(li);
            }
        }

        // Function to handle page switching
        function goToPage(page) {
            currentPage = page;
            renderTable();
            renderPagination();
        }

        // Initialize the table and pagination
        renderTable();
        renderPagination();
    </script>
</body>
</html>
