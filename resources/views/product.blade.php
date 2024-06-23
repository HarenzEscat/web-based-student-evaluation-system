@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Evaluation and Consultation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0A4E71;
            color: white;
            margin: 0;
        }
        .sidebar {
            width: 15%;
            background-color: #2A91A9;
            position: fixed;
            height: 100%;
            padding-top: 15px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #156082;
        }
        .content {
            margin-left: 20%;
            padding: 15px;
        }
        .header {
            background-color: #2A91A9;
            padding: 5px;
            text-align: center;
        }
        .dashboard-welcome {
            text-align: center;
            margin: 20px 0;
        }
        .stats {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .stats .card {
            background-color: #f39c12;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 150px;
        }
        .stats .card.teachers {
            background-color: #1abc9c;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <img src="{{asset('css/logoo.jpg')}}" alt="" width="150" height="150" style="vertical-align:center">
        <a href="#">DASHBOARD</a>
        <a href="#">STUDENT LIST</a>
        <a href="#">EVALUATION FORM</a>
        <a href="#">FACULTY/OFFICE</a>
        <a href="#">CALENDAR</a>
        <a href="#">EVALUATION HISTORY</a>
        <a href="#">MESSAGE</a>
        <a href="#">SETTINGS</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>STUDENT EVALUATION AND CONSULTATION</h1>
        </div>
        <div class="dashboard-welcome">
            <h2>WELCOME ADMIN!!</h2>
        </div>
        <div class="stats">
            <div class="card students">
                <div class="icon">
                    <!-- Add student icon here -->
                </div>
                <h3>STUDENTS</h3>
                <p>800</p>
            </div>
            <div class="card teachers">
                <div class="icon">
                    <!-- Add teacher icon here -->
                </div>
                <h3>TEACHERS</h3>
                <p>45</p>
            </div>
        </div>
    </div>
</body>
</html>

@endsection

@section('title')
    Home Page
@endsection