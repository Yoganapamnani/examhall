<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }
    .dashboard-container {
      display: flex;
      min-height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: #fff;
      padding: 15px;
      position: fixed;
      height: 100%;
    }
    .sidebar h3 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 30px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      margin: 20px 0;
    }
    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .sidebar ul li a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
      width: 100%;
    }
    .hall-ticket {
      background: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hall-ticket img {
      max-width: 80px;
      margin-bottom: 10px;
    }
    .hall-ticket h4 {
      color: #007bff;
      text-transform: uppercase;
      font-size: 22px;
      font-weight: bold;
    }
    .hall-ticket table {
      width: 100%;
      margin-top: 20px;
    }
    .hall-ticket table th,
    .hall-ticket table td {
      text-align: left;
      padding: 10px;
      border: 1px solid #ddd;
    }
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }
      .content {
        margin-left: 200px;
      }
    }
    @media (max-width: 576px) {
      .sidebar {
        width: 100%;
        height: auto;
      }
      .content {
        margin-left: 0;
      }
    }
  </style>
  <title>Student Dashboard</title>
</head>
<body>
<div class="dashboard-container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Student Dashboard</h3>
    <ul>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Hall Ticket</a></li>
      <li><a href="#">Results</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h2>Exam Hall Ticket</h2>
    <div class="hall-ticket">
      <div class="text-center">
        <img src="https://via.placeholder.com/80" alt="University Logo">
        <h4>University Name</h4>
        <p>Examination Hall Ticket</p>
      </div>
      <table class="table">
        <tbody>
          <tr>
            <th>Registration Number</th>
            <td>123456789</td>
          </tr>
          <tr>
            <th>Student Name</th>
            <td>John Doe</td>
          </tr>
          <tr>
            <th>Course Name</th>
            <td>Bachelor of Technology</td>
          </tr>
          <tr>
            <th>Subject Name</th>
            <td>Computer Science</td>
          </tr>
          <tr>
            <th>Examination Room</th>
            <td>Room 101</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }
    .dashboard-container {
      display: flex;
      min-height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: #fff;
      padding: 15px;
      position: fixed;
      height: 100%;
    }
    .sidebar h3 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 30px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      margin: 20px 0;
    }
    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 18px;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .sidebar ul li a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
      width: 100%;
    }
    .hall-ticket {
      background: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hall-ticket img {
      max-width: 80px;
      margin-bottom: 10px;
    }
    .hall-ticket h4 {
      color: #007bff;
      text-transform: uppercase;
      font-size: 22px;
      font-weight: bold;
    }
    .hall-ticket table {
      width: 100%;
      margin-top: 20px;
    }
    .hall-ticket table th,
    .hall-ticket table td {
      text-align: left;
      padding: 10px;
      border: 1px solid #ddd;
    }
    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }
      .content {
        margin-left: 200px;
      }
    }
    @media (max-width: 576px) {
      .sidebar {
        width: 100%;
        height: auto;
      }
      .content {
        margin-left: 0;
      }
    }
  </style>
  <title>Student Dashboard</title>
</head>
<body>
<div class="dashboard-container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Student Dashboard</h3>
    <ul>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Hall Ticket</a></li>
      <li><a href="#">Results</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h2>Exam Hall Ticket</h2>
    <div class="hall-ticket">
      <div class="text-center">
        <img src="https://via.placeholder.com/80" alt="University Logo">
        <h4>University Name</h4>
        <p>Examination Hall Ticket</p>
      </div>
      <table class="table">
        <tbody>
          <tr>
            <th>Registration Number</th>
            <td>123456789</td>
          </tr>
          <tr>
            <th>Student Name</th>
            <td>John Doe</td>
          </tr>
          <tr>
            <th>Course Name</th>
            <td>Bachelor of Technology</td>
          </tr>
          <tr>
            <th>Subject Name</th>
            <td>Computer Science</td>
          </tr>
          <tr>
            <th>Examination Room</th>
            <td>Room 101</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
