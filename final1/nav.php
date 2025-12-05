<!-- nav.php -->
<style>
.navbar {
    
    width: 100%;
    padding: 25px 30px;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(12px);
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.15);
    position: sticky;
    top: 60;
    z-index: 1000;
}

.logo {
    font-size: 26px;
    font-weight: 700;
    font-family: "Georgia", serif;
    color: #5a381f;
    text-decoration: none;
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 25px;
}

.nav-links a {
    text-decoration: none;
    font-size: 16px;
    color: #3b2b1b;
    font-weight: 600;
    padding: 8px 15px;
    border-radius: 8px;
    transition: 0.3s ease;
}

.nav-links a:hover {
    background: #b98252;
    color: white;
}

.menu-btn {
    display: none;
    font-size: 30px;
    cursor: pointer;
    color: #4b2e19;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }

    .menu-btn {
        display: block;
    }
}

.mobile-menu {
    display: none;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.97);
    width: 100%;
    padding: 15px;
    box-shadow: 0px 6px 10px rgba(0,0,0,0.10);
}

.mobile-menu a {
    padding: 10px;
    margin-bottom: 8px;
    text-decoration: none;
    font-size: 18px;
    color: #3b2b1b;
    font-weight: 600;
    border-radius: 8px;
}

.mobile-menu a:hover {
    background: #b98252;
    color: #fff;
}
</style>

<script>
function toggleMenu() {
    var menu = document.getElementById("mobileMenu");
    menu.style.display = menu.style.display === "flex" ? "none" : "flex";
}
</script>

<div class="navbar">
    <a href="index.php" class="logo">Cup of Comfort</a>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="order.php">Order</a>
        <a href="view_orders.php">Order View</a>
        <a href="menu.php">Menu</a> <!-- ADDED -->
        <a href="contact.php">Contact</a>
        <a href="about.php">About Us</a>
    </div>

    <span class="menu-btn" onclick="toggleMenu()">☰</span>
</div>

<div id="mobileMenu" class="mobile-menu">
    <a href="index.php">Home</a>
    <a href="order.php">Order</a>
    <a href="view_orders.php">Order View</a>
    <a href="menu.php">Menu</a> <!-- ADDED -->
    <a href="contact.php">Contact</a>
    <a href="about.php">About Us</a>
</div>
