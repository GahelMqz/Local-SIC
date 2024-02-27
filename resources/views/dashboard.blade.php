@section('titulo')
    Dashboard estudiantes
@endsection

<style>
    /* Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .sidebar {
        width: 250px;
        background-color: #333;
        color: #fff;
        padding: 20px;
        height: 100vh;
        position: fixed;
    }

    .logo-container{
        display: flex;
        justify-content: center;
    }

    .logo-img{
        height: auto;
        width: 50%;
        padding: 15px 0;
    }

    .nav {
        list-style: none;
    }

    .nav li {
        margin-bottom: 10px;
    }

    .nav a {
        text-decoration: none;
        color: #fff;
        font-size: 18px;
    }

    .nav a.active {
        font-weight: bold;
    }

    .content {
        margin-left: 250px;
        padding: 20px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-bar input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .search-bar button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .user-profile img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-left: 10px;
        object-fit: cover
    }

    .user-profile span {
        margin-left: 10px;
        font-weight: bold;
    }
</style>

<div class="sidebar">
    <div class="logo-container">
        <img class="logo-img" src="https://seeklogo.com/images/P/panda-logo-BF9B318530-seeklogo.com.png" alt="Logo">
    </div>
    <ul class="nav">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Analytics</a></li>
    </ul>
</div>
<div class="content">
    <header>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="user-profile">
            <img src="https://www.udiscovermusica.com/wp-content/uploads/sites/7/2023/01/panda-GettyImages-91478031.jpg"
                alt="User Avatar">
            <span>Gxhel Mqz</span>
        </div>
    </header>
    <main>
        <h2>Bienvenido al Dashboard</h2>
        <!-- Content Goes Here -->
    </main>
</div>
