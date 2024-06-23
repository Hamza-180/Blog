<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include your CSS styles or other head elements here -->
    <style>
        /* Add your styles for the sidebar and other elements here */
    </style>
</head>
<body>

<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admincss/img/ehbjpg.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Amghar Hamza</h1>
            <p>Web Developer</p>
        </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li><a href="{{url('post_page')}}"><i class="icon-grid"></i>Add post</a></li>
        <li><a href="{{url('/show_post')}}"><i class="fa fa-bar-chart"></i>Show Post</a></li>
        <li><a href="{{url('/admin/promote')}}"><i class="fa fa-users"></i>Promote Users</a></li>

        <li>
            <!-- Add an onclick event to trigger the JavaScript function -->
            <a href="/" class="btn btn-primary" style="color: black;" onclick="showAlert()">Back to Home as user</a>
        </li>
    </ul>
</nav>

<script>
    // JavaScript function to show the alert
    function showAlert() {
        // Use the window.confirm method to show a simple alert with OK and Cancel buttons
        var confirmLogout = window.confirm("If you want to go back to the home page as a user, you need to log out and log in again. Do you want to proceed?");

        // Check the user's choice
        if (confirmLogout) {
            // If the user clicks OK, you can perform additional actions here, such as logging out
            // window.location.href = "/logout"; // Uncomment and replace with your logout URL
        } else {
            // If the user clicks Cancel, you can prevent the default link behavior
            event.preventDefault();
        }
    }
</script>

<!-- Include your JavaScript or other scripts here -->

</body>
</html>
