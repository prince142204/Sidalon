<!-- resources/views/dashboard/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome, {{ Auth::user()->name }}</h2>
                <p>This is your dashboard. Here you can manage your profile, view your orders, etc.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Statistics
                    </div>
                    <div class="card-body">
                        <p>Orders: 100</p>
                        <p>Products: 50</p>
                        <p>Users: 200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Recent Orders
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Order #1234</li>
                            <li>Order #1235</li>
                            <li>Order #1236</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Profile
                    </div>
                    <div class="card-body">
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
