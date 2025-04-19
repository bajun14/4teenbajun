<!DOCTYPE html>
<html lang="en">
<head>
    <!-- [HEAD CONTENT REMAINS SAME] -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <style>
        /* [STYLES REMAIN UNCHANGED] */
        body {
            font-family: Arial, sans-serif;
        }
        .menu-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .dropdown {
            position: relative;
            margin: 10px;
        }
        .dropbtn {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 140px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }
        .dropdown-content a {
            color: black;
            padding: 10px 14px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        @media (max-width: 600px) {
            .menu {
                flex-direction: row;
                justify-content: space-around;
            }
            .dropdown-content {
                position: relative;
            }
            .dropdown:hover .dropdown-content {
                display: none;
            }
            .dropdown .dropdown-content.show {
                display: block;
            }
        }
        .student-list {
            margin-top: 20px;
        }
        .student-list table {
            width: 100%;
            border-collapse: collapse;
        }
        .student-list table, .student-list th, .student-list td {
            border: 1px solid #ddd;
        }
        .student-list th, .student-list td {
            padding: 10px;
            text-align: left;
        }
        .student-list th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        const students = {
            DTDUM: {
                '1st Year': [
                    { rollNo: "62125001", name: "Aarav Mehta", age: 19, phone: "9876543001", email: "aarav62125001@college.edu", gender: "Male", trade: "DTDUM" },
                    // [OTHER STUDENTS OMITTED FOR BREVITY]
                ],
                '2nd Year': [],
                '3rd Year': []
            },
            Mechatronic: {
                '1st Year': [],
                '2nd Year': [],
                '3rd Year': []
            },
            DTDM: {
                '1st Year': [],
                '2nd Year': [],
                '3rd Year': []
            }
        };

        function showStudents(department, year) {
            const studentListContainer = document.getElementById('student-list');
            const studentsForYear = students[department] ? students[department][year] : [];

            let html = '<table>';
            html += '<tr><th>Student Name</th><th>Trade</th><th>Roll No</th><th>Age</th><th>Phone Number</th><th>Email ID</th><th>Gender</th></tr>';

            if (studentsForYear.length > 0) {
                studentsForYear.forEach(student => {
                    html += `<tr>
                        <td>${student.name}</td>
                        <td>${student.trade}</td>
                        <td>${student.rollNo}</td>
                        <td>${student.age}</td>
                        <td>${student.phone}</td>
                        <td>${student.email}</td>
                        <td>${student.gender}</td>
                    </tr>`;
                });
            } else {
                html += '<tr><td colspan="7">No students found for this selection.</td></tr>';
            }

            html += '</table>';
            studentListContainer.innerHTML = html;
        }

        function toggleDropdown(event, id) {
            event.preventDefault();
            const dropdowns = document.querySelectorAll(".dropdown-content");
            dropdowns.forEach(dd => dd.classList.remove("show"));
            document.getElementById(id).classList.toggle("show");
        }
    </script>
</head>
<body>
    <div class="menu-container">
        <h2>Select Department and Year</h2>
        <div class="menu">
            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown(event, 'dtdumDropdown')">DTDUM</button>
                <div class="dropdown-content" id="dtdumDropdown">
                    <a href="#" onclick="showStudents('DTDUM', '1st Year')">1st Year</a>
                    <a href="#" onclick="showStudents('DTDUM', '2nd Year')">2nd Year</a>
                    <a href="#" onclick="showStudents('DTDUM', '3rd Year')">3rd Year</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown(event, 'mechatronicDropdown')">Mechatronic</button>
                <div class="dropdown-content" id="mechatronicDropdown">
                    <a href="#" onclick="showStudents('Mechatronic', '1st Year')">1st Year</a>
                    <a href="#" onclick="showStudents('Mechatronic', '2nd Year')">2nd Year</a>
                    <a href="#" onclick="showStudents('Mechatronic', '3rd Year')">3rd Year</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn" onclick="toggleDropdown(event, 'dtdmDropdown')">DTDM</button>
                <div class="dropdown-content" id="dtdmDropdown">
                    <a href="#" onclick="showStudents('DTDM', '1st Year')">1st Year</a>
                    <a href="#" onclick="showStudents('DTDM', '2nd Year')">2nd Year</a>
                    <a href="#" onclick="showStudents('DTDM', '3rd Year')">3rd Year</a>
                </div>
            </div>
        </div>

        <div id="student-list" class="student-list"></div>
    </div>
</body>
</html>
